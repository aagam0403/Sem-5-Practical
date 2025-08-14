keys = input("Enter keys separated by space: ").split()
values = input("Enter values separated by space: ").split()

d = {}
for i in range(len(keys)):
    d[keys[i]] = values[i]

reversed_dict = {}
for k, v in d.items():
    reversed_dict[v] = k

print("Reversed Dictionary:", reversed_dict)
