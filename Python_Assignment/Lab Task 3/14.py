nums = tuple(map(int, input("Enter numbers: ").split()))
res = [x for x in nums if x**2 > 50]
print(res)
