# recommendation_system.py
class NoRecommendationsError(Exception):
    pass

class Book:
    def __init__(self, title, author, genre, rating=0.0):
        self.title = title
        self.author = author
        self.genre = genre
        self.rating = float(rating)

class RecommendationEngine:
    def __init__(self, books):
        self.books = books

    def recommend_by_genre(self, genre, top_n=5):
        matches = [b for b in self.books if b.genre.lower() == genre.lower()]
        if not matches:
            raise NoRecommendationsError("No recommendations for this genre.")
        return sorted(matches, key=lambda x: x.rating, reverse=True)[:top_n]

    def recommend_by_author(self, author, top_n=5):
        matches = [b for b in self.books if b.author.lower() == author.lower()]
        if not matches:
            raise NoRecommendationsError("No books by this author.")
        return sorted(matches, key=lambda x: x.rating, reverse=True)[:top_n]

    def recommend_by_rating(self, min_rating=4.0):
        matches = [b for b in self.books if b.rating >= min_rating]
        if not matches:
            raise NoRecommendationsError("No books above that rating.")
        return sorted(matches, key=lambda x: x.rating, reverse=True)

# Example
if __name__ == "__main__":
    books = [
        Book("The Silent Patient", "Alex Michaelides", "Thriller", 4.0),
        Book("Educated", "Tara Westover", "Memoir", 4.5),
        Book("Deep Work", "Cal Newport", "Productivity", 4.2),
    ]
    engine = RecommendationEngine(books)
    try:
        recs = engine.recommend_by_genre("Memoir")
        for b in recs:
            print(b.title, b.author, b.rating)
    except NoRecommendationsError as e:
        print("No recommendations:", e)
