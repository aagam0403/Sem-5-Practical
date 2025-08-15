def employee_details(**details):
    for key, value in details.items():
        print(key, ":", value)

employee_details(name="Ravi", department="IT", salary=45000)
