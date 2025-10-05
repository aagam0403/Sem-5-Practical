# quiz_system.py
import json
import time
import os

HIGH_SCORE_FILE = "highscores.json"

class TimeoutError(Exception):
    pass

class Question:
    def __init__(self, text, options, answer):
        self.text = text
        self.options = options
        self.answer = answer  # index or value

class Quiz:
    def __init__(self, questions, time_per_question=30):
        self.questions = questions
        self.time_per_question = time_per_question

    def take(self, player):
        score = 0
        for q in self.questions:
            print("\n" + q.text)
            for i, o in enumerate(q.options, 1):
                print(f"{i}. {o}")
            start = time.time()
            ans = input("Your choice (number): ").strip()
            elapsed = time.time() - start
            if elapsed > self.time_per_question:
                raise TimeoutError("Time exceeded for a question.")
            try:
                idx = int(ans) - 1
                if idx < 0 or idx >= len(q.options):
                    raise ValueError("Invalid option")
            except ValueError:
                print("Invalid answer format.")
                continue
            if q.options[idx] == q.answer or idx == q.answer:
                score += 1
        player.score = score
        print(f"{player.name} scored {score}/{len(self.questions)}")
        self._save_highscore(player)

    def _save_highscore(self, player):
        try:
            data = []
            if os.path.exists(HIGH_SCORE_FILE):
                with open(HIGH_SCORE_FILE) as f:
                    data = json.load(f)
            data.append({"name": player.name, "score": player.score})
            data = sorted(data, key=lambda x: x["score"], reverse=True)[:10]
            with open(HIGH_SCORE_FILE, "w") as f:
                json.dump(data, f, indent=2)
        except Exception as e:
            print("Could not save high score:", e)

class Player:
    def __init__(self, name):
        self.name = name
        self.score = 0

# Example
if __name__ == "__main__":
    qs = [
        Question("2+2=?", ["3","4","5"], "4"),
        Question("Capital of France?", ["Paris","Rome","Berlin"], "Paris"),
    ]
    quiz = Quiz(qs, time_per_question=60)
    p = Player("TestUser")
    try:
        quiz.take(p)
    except TimeoutError as e:
        print("Timeout:", e)
