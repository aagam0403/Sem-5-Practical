num = int(input("Enter a number: "))
if num < 0:
    raise ValueError("Negative numbers are not allowed!")
else:
    print("You entered:", num)