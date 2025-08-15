users = {"admin": "1234", "user": "abcd"}
for attempt in range(3):
    u = input("Username: ")
    p = input("Password: ")
    if users.get(u) == p:
        print("Login successful")
        break
    else:
        print("Invalid credentials")
else:
    print("Login failed")
