def calculate_tax(income):
    if income > 50000:
        return income * 0.10
    else:
        return income * 0.05
