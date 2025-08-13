t1 = tuple(map(int, input("Enter first tuple elements: ").split()))
t2 = tuple(map(int, input("Enter second tuple elements: ").split()))

common = tuple(x for x in t1 if x in t2)
print("Common elements:", common)
