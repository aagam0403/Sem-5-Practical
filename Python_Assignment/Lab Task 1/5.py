num = int(input("Enter a number: "))
count = 0
temp = abs(num)
while temp > 0:
    count += 1
    temp = temp // 10
print("Total number of digits:", count)
