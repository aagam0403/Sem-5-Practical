class StudentResult:
    def __init__(self, marks, max_marks):
        self.marks = marks
        self.max_marks = max_marks

    def calculate_percentage(self):
        if self.marks < 0 or self.marks > self.max_marks:
            raise ValueError("Marks out of range")
        return (self.marks / self.max_marks) * 100

if __name__ == "__main__":
    try:
        s = StudentResult(85, 100)
        print("Percentage:", s.calculate_percentage())
        s2 = StudentResult(110, 100)
        print(s2.calculate_percentage())
    except ValueError as e:
        print("❌ Error:", e)
