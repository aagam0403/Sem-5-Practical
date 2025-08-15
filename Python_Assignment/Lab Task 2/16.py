nums = [int(input("Enter number: ")) for _ in range(10)]
evens = [x for x in nums if x % 2 == 0]
for e in set(evens):
    print(e, "occurs", evens.count(e), "times")
