# admission_system.py
class Course:
    def __init__(self, code, name, prerequisites=None, min_marks=0):
        self.code = code
        self.name = name
        self.prerequisites = prerequisites or []  # list of course codes
        self.min_marks = min_marks

class Student:
    def __init__(self, student_id, name, marks=None, completed_courses=None):
        self.student_id = student_id
        self.name = name
        self.marks = marks or {}  # subject -> marks
        self.completed_courses = completed_courses or []

class AdmissionError(Exception):
    pass

class Admission:
    def __init__(self, courses):
        self.courses = {c.code: c for c in courses}
        self.applications = {}  # student_id -> applied course codes

    def apply(self, student, course_code):
        if course_code not in self.courses:
            raise AdmissionError("Invalid course selected.")
        course = self.courses[course_code]
        # check prerequisites
        missing = [p for p in course.prerequisites if p not in student.completed_courses]
        if missing:
            raise AdmissionError(f"Missing prerequisites: {missing}")
        # check eligibility by marks (assume average marks)
        avg = sum(student.marks.values()) / len(student.marks) if student.marks else 0
        if avg < course.min_marks:
            raise AdmissionError(f"Eligibility criteria not met. Required min avg: {course.min_marks}, found: {avg:.2f}")
        self.applications.setdefault(student.student_id, []).append(course_code)
        print(f"Student {student.name} applied for {course.name} successfully.")

# Example
if __name__ == "__main__":
    c1 = Course("CS101", "Intro to CS", prerequisites=[], min_marks=40)
    c2 = Course("DS201", "Data Structures", prerequisites=["CS101"], min_marks=50)
    admission = Admission([c1, c2])
    s = Student("S1", "Alice", marks={"math": 60, "eng": 55}, completed_courses=["CS101"])
    try:
        admission.apply(s, "DS201")
    except AdmissionError as e:
        print("Admission failed:", e)
