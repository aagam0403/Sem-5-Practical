marks = list(map(int, input("Enter marks separated by space: ").split()))
avg = sum(marks) / len(marks)

if avg >= 85:
    print("Pass with Distinction")
elif avg >= 50:
    print("Pass")
else:
    print("Fail")

failed = 0
for m in marks:
    if m < 35:
        failed += 1
print("Subjects failed:", failed)
