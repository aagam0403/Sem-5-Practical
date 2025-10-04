class InsufficientBalanceError(Exception): pass

class BankAccount:
    def __init__(self, balance=0):
        self.balance = balance

    def deposit(self, amount):
        assert amount > 0, "Deposit must be positive"
        self.balance += amount

    def withdraw(self, amount):
        assert amount > 0, "Withdrawal must be positive"
        if amount > self.balance:
            raise InsufficientBalanceError("Not enough balance")
        self.balance -= amount

    def log_transaction(self, msg):
        with open("transactions.txt", "a") as f:
            f.write(msg + "\n")

if __name__ == "__main__":
    acc = BankAccount(500)
    try:
        acc.withdraw(600)
    except Exception as e:
        acc.log_transaction(str(e))
