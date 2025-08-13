count = total = 0
while True:
    num = int(input("Enter a number (negative to stop): "))
    if num < 0:
        break
    total += num
    count += 1

if count > 0:
    print("Sum:", total)
    print("Average:", total / count)
    print("Count:", count)
else:
    print("No positive numbers entered.")
