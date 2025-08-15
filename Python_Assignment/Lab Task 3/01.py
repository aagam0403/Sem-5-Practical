def factorial(n):
    result = 1
    for i in range(1, n + 1):
        result *= i
    return result

# Test cases
print("Factorial of 5 =", factorial(5))
print("Factorial of 7 =", factorial(7))
