nums = []
while True:
    n = int(input("Enter number: "))
    if n == 0:
        break
    nums.append(n)

even_count = sum(1 for x in nums if x % 2 == 0)
print("Max:", max(nums), "Min:", min(nums), "Sum:", sum(nums), "Even count:", even_count)
