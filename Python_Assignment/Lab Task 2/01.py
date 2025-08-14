marks = []
for i in range(5):
    m = int(input("Enter marks for subject " + str(i+1) + ": "))
    marks.append(m)

if any(m < 35 for m in marks):
    print("Fail due to subject back")
else:
    avg = sum(marks) / 5
    if avg >= 85:
        grade = "A"
    elif avg >= 70:
        grade = "B"
    elif avg >= 55:
        grade = "C"
    elif avg >= 40:
        grade = "D"
    else:
        grade = "Fail"
    print("Average:", avg, "Grade:", grade)
