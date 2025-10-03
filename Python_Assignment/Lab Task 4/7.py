# Assert Example
x = int(input("Enter a positive number: "))
assert x > 0, "Number must be positive!"
print("You entered a positive number.")

# With Keyword Example
with open("sample.txt", "w") as f:
    f.write("Hello, this is written using 'with' keyword in Python.\n")

print("File written successfully using 'with' statement.")