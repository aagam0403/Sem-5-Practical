def outer(a, b):
    def inner(x, y):
        return x + y
    result = inner(a, b)
    return result + 5

print("Result:", outer(10, 20))
