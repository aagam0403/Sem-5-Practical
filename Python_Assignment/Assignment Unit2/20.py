accounts = {}

while True:
    print("\n1. Create Account\n2. Deposit\n3. Withdraw\n4. Check Balance\n5. Exit")
    choice = input("Enter choice: ")

    if choice == '1':
        acc = input("Enter account number: ")
        accounts[acc] = 0
    elif choice == '2':
        acc = input("Enter account number: ")
        amt = float(input("Enter amount: "))
        if acc in accounts:
            accounts[acc] += amt
        else:
            print("Account not found.")
    elif choice == '3':
        acc = input("Enter account number: ")
        amt = float(input("Enter amount: "))
        if acc in accounts and accounts[acc] >= amt:
            accounts[acc] -= amt
        else:
            print("Insufficient balance or account not found.")
    elif choice == '4':
        acc = input("Enter account number: ")
        print("Balance:", accounts.get(acc, "Account not found"))
    elif choice == '5':
        break
    else:
        print("Invalid choice")
