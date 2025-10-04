class MenuItem:
    def __init__(self, name, price):
        self.__name = name
        self.__price = price

    def get_name(self):
        return self.__name

    def get_price(self):
        return self.__price

class Order:
    TAX_RATE = 0.1

    def __init__(self):
        self.items = []

    def add_item(self, item):
        self.items.append(item)

    def total_bill(self):
        subtotal = sum(item.get_price() for item in self.items)
        tax = subtotal * self.TAX_RATE
        return subtotal + tax

if __name__ == "__main__":
    o = Order()
    o.add_item(MenuItem("Pizza", 250))
    o.add_item(MenuItem("Burger", 120))
    o.add_item(MenuItem("Pasta", 180))
    print("Total with tax:", o.total_bill())
