class TicketBooking:
    def __init__(self, total_seats=10):
        self.total_seats = total_seats
        self.booked = set()

    def book_seat(self, seat):
        try:
            seat = int(seat)
            if seat < 1 or seat > self.total_seats:
                raise ValueError("Seat number out of range")
            if seat in self.booked:
                raise Exception("Seat already booked")
            self.booked.add(seat)
            print(f"✅ Seat {seat} booked successfully")
        except ValueError as ve:
            print("❌ Invalid input:", ve)
        except Exception as e:
            print("❌ Error:", e)

if __name__ == "__main__":
    tb = TicketBooking(5)
    tb.book_seat(2)
    tb.book_seat("abc")
    tb.book_seat(2)
    tb.book_seat(10)
