emp = {}
n = int(input("Enter number of employees: "))
for i in range(n):
    name = input("Enter employee name: ")
    sal = float(input("Enter salary: "))
    emp[name] = sal

for k in list(emp.keys()):
    if emp[k] < 50000:
        emp[k] = emp[k] + emp[k] * 0.10

for k in list(emp.keys()):
    if emp[k] > 100000:
        del emp[k]

print("Updated employees:", emp)
