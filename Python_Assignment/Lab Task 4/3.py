class Bank:
    def __init__(self, id, name):
        self.__id = id
        self._name = name
        self.balance = 1000

    def show(self):
        print(f"ID: {self.__id}, Name: {self._name}, Balance: {self.balance}")

class Customer(Bank):
    def withdraw(self, amount):
        if amount > self.balance:
            print("Insufficient balance!")
        else:
            self.balance -= amount
            print(f"Withdrawn: {amount}, Remaining Balance: {self.balance}")

    def deposit(self, amount):
        self.balance += amount
        print(f"Deposited: {amount}, Current Balance: {self.balance}")

    def interest(self, rate):
        interest_amount = (self.balance * rate) / 100
        self.balance += interest_amount
        print(f"Interest Added: {interest_amount}, New Balance: {self.balance}")

c1 = Customer(101, "Aagam")
c1.show()
c1.deposit(500)
c1.withdraw(300)
c1.interest(5)
c1.show()