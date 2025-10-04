class Vehicle:
    def calculate_trip_cost(self, distance):
        raise NotImplementedError

class Car(Vehicle):
    def calculate_trip_cost(self, distance):
        return distance / 15 * 100

class Bike(Vehicle):
    def calculate_trip_cost(self, distance):
        return distance / 40 * 100

class Truck(Vehicle):
    def calculate_trip_cost(self, distance):
        return distance / 6 * 100

if __name__ == "__main__":
    print("Car cost:", Car().calculate_trip_cost(300))
    print("Bike cost:", Bike().calculate_trip_cost(300))
    print("Truck cost:", Truck().calculate_trip_cost(300))
