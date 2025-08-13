contacts = {}
while True:
    print("\n1. Add\n2. Update\n3. Delete\n4. Search\n5. Exit")
    choice = input("Enter choice: ")
    
    if choice == '1':
        name = input("Enter name: ")
        phone = input("Enter phone: ")
        contacts[name] = phone
    elif choice == '2':
        name = input("Enter name to update: ")
        if name in contacts:
            phone = input("Enter new phone: ")
            contacts[name] = phone
        else:
            print("Contact not found.")
    elif choice == '3':
        name = input("Enter name to delete: ")
        if name in contacts:
            del contacts[name]
        else:
            print("Contact not found.")
    elif choice == '4':
        name = input("Enter name to search: ")
        if name in contacts:
            print("Phone:", contacts[name])
        else:
            print("Contact not found.")
    elif choice == '5':
        break
    else:
        print("Invalid choice")
