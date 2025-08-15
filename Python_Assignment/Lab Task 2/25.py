import random
num = random.randint(1, 100)
attempts = 5

for _ in range(attempts):
    guess = int(input("Guess number: "))
    if guess == num:
        print("Correct!")
        break
    elif guess < num:
        print("Too low")
    else:
        print("Too high")
else:
    print("Out of attempts. Number was", num)
