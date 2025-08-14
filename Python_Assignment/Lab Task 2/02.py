rows = 5
for i in range(1, rows+1):
    for j in range(1, i+1):
        if j == 1 or j == i or i == rows:
            print("*", end=" ")
        else:
            print(" ", end=" ")
    print()
