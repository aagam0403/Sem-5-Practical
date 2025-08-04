my_string = " Welcome to Python"

# 1. Print whole string
print("Whole string:", my_string)

# 2. Print only first character of string
print("First character:", my_string[0])

# 3. Print 3rd character to -1 character using slicing
print("3rd to -1 character:", my_string[2:-1])

# 4. Print string from 4th character to the end
print("From 4th character to end:", my_string[3:])

# 5. Print whole string 5 times
print("String repeated 5 times:", my_string * 5)

# 6. Count the occurrence of "to"
print("Occurrences of 'to':", my_string.count("to"))

# 7. Print length of string
print("Length of string:", len(my_string))

# 8. Convert string to lowercase
print("Lowercase string:", my_string.lower())

# 9. Find the substring "Python"
print("Index of 'Python':", my_string.find("Python"))

# 10. Remove leading space
print("String without leading space:", my_string.lstrip())

# 11. Check whether string ends with "is"
print("Ends with 'is'?", my_string.endswith("is"))