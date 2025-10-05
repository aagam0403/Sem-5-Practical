from tkinter import *

def add():
    result.set(int(num1.get()) + int(num2.get()))

root = Tk()
root.title("Add Two Numbers")

Label(root, text="Enter Number 1:").pack()
num1 = Entry(root)
num1.pack()

Label(root, text="Enter Number 2:").pack()
num2 = Entry(root)
num2.pack()

Button(root, text="Add", command=add).pack(pady=5)

result = StringVar()
Label(root, textvariable=result, font=("Arial", 12)).pack()

root.mainloop()