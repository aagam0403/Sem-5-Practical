import csv
import os
from datetime import datetime

CSV_FILE = "expenses.csv"
FIELDNAMES = ["id", "date", "category", "amount", "description"]

class Expense:
    def __init__(self, id_, date, category, amount, description=""):
        self.id = id_
        self.date = date
        self.category = category
        self.amount = float(amount)
        self.description = description

    def to_dict(self):
        return {"id": self.id, "date": self.date, "category": self.category,
                "amount": f"{self.amount:.2f}", "description": self.description}

class ExpenseManager:
    def __init__(self, filename=CSV_FILE):
        self.filename = filename
        if not os.path.exists(self.filename):
            with open(self.filename, "w", newline="") as f:
                writer = csv.DictWriter(f, fieldnames=FIELDNAMES)
                writer.writeheader()

    def _read_all(self):
        with open(self.filename, newline="") as f:
            return list(csv.DictReader(f))

    def add_expense(self, category, amount, description=""):
        try:
            if float(amount) < 0:
                raise ValueError("Amount cannot be negative.")
            records = self._read_all()
            next_id = str(int(records[-1]["id"]) + 1) if records else "1"
            date = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
            exp = Expense(next_id, date, category, amount, description)
            with open(self.filename, "a", newline="") as f:
                writer = csv.DictWriter(f, fieldnames=FIELDNAMES)
                writer.writerow(exp.to_dict())
            print(f"Expense added: {exp.to_dict()}")
        except ValueError as e:
            print("Invalid input:", e)
        except Exception as e:
            print("Error adding expense:", e)

    def delete_expense(self, id_):
        try:
            rows = self._read_all()
            new = [r for r in rows if r["id"] != str(id_)]
            if len(new) == len(rows):
                raise KeyError("Expense ID not found.")
            with open(self.filename, "w", newline="") as f:
                writer = csv.DictWriter(f, fieldnames=FIELDNAMES)
                writer.writeheader()
                writer.writerows(new)
            print(f"Deleted expense id {id_}")
        except KeyError as e:
            print(e)
        except Exception as e:
            print("Error deleting expense:", e)

    def view_expenses(self):
        try:
            rows = self._read_all()
            if not rows:
                print("No expenses found.")
                return
            total = 0.0
            for r in rows:
                print(r)
                total += float(r["amount"])
            print(f"Total: {total:.2f}")
        except Exception as e:
            print("Error viewing expenses:", e)

if __name__ == "__main__":
    em = ExpenseManager()
    em.add_expense("Food", 150.0, "Lunch")
    em.add_expense("Transport", 50, "Bus")
    em.view_expenses()