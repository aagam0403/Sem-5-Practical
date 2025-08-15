def average(*numbers):
    if len(numbers) == 0:
        return 0
    return sum(numbers) / len(numbers)

print("Average =", average(10, 20, 30))
print("Average =", average(5, 15))
