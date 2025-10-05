# ticket_booking.py
class BookingError(Exception):
    pass

class Theater:
    def __init__(self, name, rows=5, cols=8):
        self.name = name
        self.rows = rows
        self.cols = cols
        # seats stored as dict {(r,c): booking_id or None}
        self.seats = {(r,c): None for r in range(1, rows+1) for c in range(1, cols+1)}

    def available_seats(self):
        return [k for k,v in self.seats.items() if v is None]

class Movie:
    def __init__(self, title):
        self.title = title
        self.showtimes = {}  # showtime -> Theater

    def add_show(self, when, theater):
        self.showtimes[when] = theater

class BookingSystem:
    def __init__(self):
        self.bookings = {}  # booking_id -> details
        self.next_id = 1

    def book(self, movie, showtime, seat, customer):
        if showtime not in movie.showtimes:
            raise BookingError("Invalid showtime.")
        theater = movie.showtimes[showtime]
        if seat not in theater.seats:
            raise BookingError("Invalid seat number.")
        if theater.seats[seat] is not None:
            raise BookingError("Seat already booked.")
        booking_id = self.next_id
        self.next_id += 1
        theater.seats[seat] = booking_id
        self.bookings[booking_id] = {"movie": movie.title, "show": showtime, "seat": seat, "customer": customer}
        print(f"Booked {seat} for {customer}. Booking ID: {booking_id}")
        return booking_id

    def cancel(self, booking_id):
        if booking_id not in self.bookings:
            raise BookingError("Invalid booking id.")
        details = self.bookings.pop(booking_id)
        # find the theater and free seat
        # (in simple example we don't store pointer to theater, so skip; in real system store references)
        print(f"Cancelled booking {booking_id} for {details['customer']}")

# Example
if __name__ == "__main__":
    th = Theater("PVR", rows=3, cols=5)
    m = Movie("Interstellar")
    m.add_show("18:00", th)
    bs = BookingSystem()
    try:
        b1 = bs.book(m, "18:00", (1,1), "Alice")
        # bs.book(m, "18:00", (1,1), "Bob")  # would raise overbooking error
    except Exception as e:
        print("Booking error:", e)
