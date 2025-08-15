students = {}
name = input("Enter student name: ")
students[name] = {}
students[name]["Math"] = 90
students[name]["Science"] = 85

# Update
students[name]["Math"] = 95

# Delete
del students[name]["Science"]

print(students)
