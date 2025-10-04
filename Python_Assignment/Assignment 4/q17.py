class Book:
    def __init__(self, title):
        self.title = title
        self.available = True

class Member:
    def __init__(self, name):
        self.name = name

class Transaction:
    def __init__(self, book, member, action):
        self.book = book
        self.member = member
        self.action = action

class Library:
    def __init__(self):
        self.books = []
        self.transactions = []

    def add_book(self, book):
        self.books.append(book)

    def issue_book(self, book, member):
        if book.available:
            book.available = False
            self.transactions.append(Transaction(book, member, "issued"))
            print(f"✅ {book.title} issued to {member.name}")
        else:
            print("❌ Book not available")

    def return_book(self, book, member):
        book.available = True
        self.transactions.append(Transaction(book, member, "returned"))
        print(f"✅ {book.title} returned by {member.name}")

if __name__ == "__main__":
    lib = Library()
    b1 = Book("Python 101")
    m1 = Member("Ravi")
    lib.add_book(b1)
    lib.issue_book(b1, m1)
    lib.return_book(b1, m1)
