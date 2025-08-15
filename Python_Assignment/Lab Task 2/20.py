nums = tuple(map(int, input("Enter numbers: ").split()))
sorted_nums = sorted(set(nums))
print("3rd highest:", sorted_nums[-3])
print("2nd lowest:", sorted_nums[1])
