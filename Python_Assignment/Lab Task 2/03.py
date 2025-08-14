nums = []
for i in range(10):
    nums.append(int(input("Enter integer " + str(i+1) + ": ")))

unique_nums = sorted(list(set(nums)), reverse=True)
print("Second highest:", unique_nums[1])
print("Second lowest:", unique_nums[-2])
print("Average of top 5:", sum(unique_nums[:5]) / 5)
