class InvalidPaymentMethod(Exception): pass
class RideCancelled(Exception): pass

class Driver: 
    def __init__(self, name): self.name = name
class Passenger: 
    def __init__(self, name): self.name = name

class Ride:
    def __init__(self, driver, passenger, distance, surge=1.0):
        self.driver = driver
        self.passenger = passenger
        self.distance = distance
        self.surge = surge
        self.fare = self.distance * 10 * self.surge

class Payment:
    def __init__(self, method):
        self.method = method

    def process(self, amount):
        if self.method not in ["cash", "card", "upi"]:
            raise InvalidPaymentMethod("Invalid payment method")
        print(f"✅ Paid {amount} using {self.method}")

if __name__ == "__main__":
    d = Driver("John")
    p = Passenger("Amit")
    r = Ride(d, p, 12, surge=1.5)
    print("Fare:", r.fare)
    pay = Payment("upi")
    pay.process(r.fare)
