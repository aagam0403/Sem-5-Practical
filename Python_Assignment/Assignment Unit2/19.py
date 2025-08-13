import random
nums = [random.randint(1, 100) for _ in range(10)]
avg = sum(nums) / len(nums)

nums = [x for x in nums if x <= avg]
print("Final list:", nums)
