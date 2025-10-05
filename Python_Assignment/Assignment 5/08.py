from tkinter import *

def show_details():
    lbl.config(text=f"Name: {name.get()} | Age: {age.get()} | City: {city.get()} | Course: {course.get()} | ID: {sid.get()}")

root = Tk()
root.title("Show Details")

name = StringVar()
age = StringVar()
city = StringVar()
course = StringVar()
sid = StringVar()

Label(root, text="Name").pack()
Entry(root, textvariable=name).pack()
Label(root, text="Age").pack()
Entry(root, textvariable=age).pack()
Label(root, text="City").pack()
Entry(root, textvariable=city).pack()
Label(root, text="Course").pack()
Entry(root, textvariable=course).pack()
Label(root, text="Student ID").pack()
Entry(root, textvariable=sid).pack()

Button(root, text="Show", command=show_details).pack(pady=5)
lbl = Label(root, text="", wraplength=400)
lbl.pack()

root.mainloop()