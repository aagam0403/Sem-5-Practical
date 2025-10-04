class User:
    def __init__(self, name):
        self.name = name

class Customer(User):
    def __init__(self, name):
        super().__init__(name)
        self.discount = 0.05

    def get_price(self, amount):
        return amount * (1 - self.discount)

class PremiumCustomer(Customer):
    def __init__(self, name, loyalty_points=0):
        super().__init__(name)
        self.discount = 0.15
        self.loyalty_points = loyalty_points

    def get_price(self, amount):
        price = amount * (1 - self.discount)
        self.loyalty_points += int(price // 100)
        return price

if __name__ == "__main__":
    p = PremiumCustomer("Raj")
    print("Final price:", p.get_price(1000))
    print("Loyalty points:", p.loyalty_points)
