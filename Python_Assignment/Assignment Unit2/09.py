numbers = [int(x) for x in input("Enter integers separated by space: ").split()]
result = [(num**2 if num % 2 == 0 else num**3) for index, num in enumerate(numbers)]
print(result)
