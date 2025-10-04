def recursive_sum(n):
    if n == 0:
        return 0
    return n + recursive_sum(n - 1)

print("Sum from 0 to 10:", recursive_sum(10))
