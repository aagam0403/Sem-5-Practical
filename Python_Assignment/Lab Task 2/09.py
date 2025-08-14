records = {}
while True:
    print("1.Add  2.Update  3.Delete  4.Sort  5.Exit")
    ch = int(input("Enter choice: "))
    if ch == 1:
        name = input("Name: ")
        marks = int(input("Marks: "))
        records[name] = marks
    elif ch == 2:
        name = input("Name to update: ")
        if name in records:
            records[name] = int(input("New marks: "))
    elif ch == 3:
        name = input("Name to delete: ")
        records.pop(name, None)
    elif ch == 4:
        sorted_records = dict(sorted(records.items(), key=lambda x: x[1]))
        print(sorted_records)
    elif ch == 5:
        break
