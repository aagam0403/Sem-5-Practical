nums = tuple(map(int, input("Enter integers separated by space: ").split()))
count = 0
total = 0
for x in nums:
    if x % 3 == 0 and x % 5 != 0:
        count += 1
        total += x
print("Count:", count)
print("Sum:", total)
