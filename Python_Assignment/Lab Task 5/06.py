# student_performance.py
import json
import os

class DataFileError(Exception):
    pass

class Student:
    def __init__(self, student_id, name, marks=None):
        self.student_id = student_id
        self.name = name
        self.marks = marks or {}  # subject -> mark

    def calculate_gpa(self):
        if not self.marks:
            raise ValueError("No marks provided.")
        for v in self.marks.values():
            if not (0 <= v <= 100):
                raise ValueError("Invalid mark found.")
        avg = sum(self.marks.values()) / len(self.marks)
        # Simple mapping: GPA out of 10
        return round((avg / 100) * 10, 2)

def load_students(filename):
    if not os.path.exists(filename):
        raise DataFileError("Data file missing.")
    with open(filename) as f:
        return json.load(f)

# Example usage
if __name__ == "__main__":
    s = Student("S1", "Bob", {"math": 75, "eng": 65, "phy": 80})
    try:
        print(s.name, "GPA:", s.calculate_gpa())
    except Exception as e:
        print("Error:", e)
