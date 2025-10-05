# banking_system.py
class InsufficientBalanceError(Exception):
    pass

class InvalidTransactionError(Exception):
    pass

class Account:
    def __init__(self, acc_no, holder, balance=0.0):
        self.acc_no = acc_no
        self.holder = holder
        self.balance = float(balance)

    def deposit(self, amount):
        if amount <= 0:
            raise InvalidTransactionError("Deposit must be positive.")
        self.balance += amount
        print(f"Deposited {amount:.2f}. New balance: {self.balance:.2f}")

    def withdraw(self, amount):
        if amount <= 0:
            raise InvalidTransactionError("Withdrawal must be positive.")
        if amount > self.balance:
            raise InsufficientBalanceError("Insufficient balance.")
        self.balance -= amount
        print(f"Withdrew {amount:.2f}. New balance: {self.balance:.2f}")

class SavingsAccount(Account):
    def __init__(self, acc_no, holder, balance=0.0, min_balance=500.0):
        super().__init__(acc_no, holder, balance)
        self.min_balance = min_balance

    def withdraw(self, amount):
        if self.balance - amount < self.min_balance:
            raise InsufficientBalanceError("Cannot withdraw: would go below minimum balance.")
        super().withdraw(amount)

class CurrentAccount(Account):
    def __init__(self, acc_no, holder, balance=0.0, overdraft_limit=1000.0):
        super().__init__(acc_no, holder, balance)
        self.overdraft_limit = overdraft_limit

    def withdraw(self, amount):
        if amount > self.balance + self.overdraft_limit:
            raise InsufficientBalanceError("Exceeds overdraft limit.")
        self.balance -= amount
        print(f"Withdrew {amount:.2f}. New balance: {self.balance:.2f}")

def transfer(from_acc, to_acc, amount):
    try:
        from_acc.withdraw(amount)
        to_acc.deposit(amount)
        print("Transfer successful.")
    except Exception as e:
        print("Transfer failed:", e)

# Example
if __name__ == "__main__":
    s = SavingsAccount("S1", "Carol", 2000)
    c = CurrentAccount("C1", "Dave", 100)
    s.deposit(500)
    try:
        transfer(s, c, 1000)
    except Exception as e:
        print(e)
