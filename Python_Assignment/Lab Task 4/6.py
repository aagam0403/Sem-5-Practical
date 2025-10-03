try:
    n = int(input("Enter a number: "))
    result = 10 / n
    print("Result:", result)
except ZeroDivisionError:
    print("Division by zero error!")
finally:
    print("This block always executes (Finally Demo).")