names = [input("Enter name: ") for _ in range(10)]
duplicates = []
for name in names:
    if names.count(name) > 1 and name not in duplicates:
        duplicates.append(name)

if duplicates:
    print("Duplicates found:", duplicates)
else:
    print("No duplicates found")
