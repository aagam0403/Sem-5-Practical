lst = [int(input("Enter number: ")) for _ in range(5)]
for idx, val in enumerate(lst):
    print("Index:", idx, "Value:", val)

print("All positive:", all(x > 0 for x in lst))
print("Any multiple of 7:", any(x % 7 == 0 for x in lst))
