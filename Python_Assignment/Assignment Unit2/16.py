students = {}
n = int(input("Enter number of students: "))

for _ in range(n):
    name = input("Enter student name: ")
    marks = list(map(int, input("Enter 3 marks: ").split()))
    avg = sum(marks) / 3
    students[name] = avg

print("Student Averages:", students)
