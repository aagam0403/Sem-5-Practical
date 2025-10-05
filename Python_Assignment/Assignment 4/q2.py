class Trip:
    def __init__(self, destination, cost, duration_days):
        self.destination = destination
        self.cost = float(cost)
        self.duration_days = int(duration_days)

    def __repr__(self):
        return f"Trip(dest={self.destination}, cost={self.cost}, days={self.duration_days})"

class TravelAgency:
    def __init__(self):
        self.trips = []

    def add_trip(self, trip):
        self.trips.append(trip)

    def most_expensive_trip(self):
        if not self.trips:
            return None
        return max(self.trips, key=lambda t: t.cost)

if __name__ == "__main__":
    agency = TravelAgency()
    agency.add_trip(Trip("Goa", 1500, 5))
    agency.add_trip(Trip("Switzerland", 3500, 8))
    agency.add_trip(Trip("Dubai", 2200, 4))

    print("All trips:", agency.trips)
    print("Most expensive trip:", agency.most_expensive_trip())
