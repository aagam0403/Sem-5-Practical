my_str = input("Enter a string: ")

# Reverse string
rev = my_str[::-1]
print("Reversed String:", rev)

# Count occurrence of a character
char = input("Enter character to count: ")
print("'", char, "' occurs", my_str.count(char), "times")

# Check if endswith substring
substr = input("Enter substring to check ending: ")
print("Ends with substring?", my_str.endswith(substr))

# Find substring
find_sub = input("Enter substring to find: ")
pos = my_str.find(find_sub)
if pos != -1:
    print("Substring found at index", pos)
else:
    print("Substring not found")
