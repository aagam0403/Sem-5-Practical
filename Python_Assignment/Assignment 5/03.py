from tkinter import *

def show_values():
    selected = []
    if var1.get(): selected.append("Python")
    if var2.get(): selected.append("Java")
    if var3.get(): selected.append("C++")
    lbl.config(text=", ".join(selected))

root = Tk()
root.title("Checkbutton Example")

var1 = IntVar()
var2 = IntVar()
var3 = IntVar()

Checkbutton(root, text="Python", variable=var1, command=show_values).pack()
Checkbutton(root, text="Java", variable=var2, command=show_values).pack()
Checkbutton(root, text="C++", variable=var3, command=show_values).pack()

lbl = Label(root, text="Select languages")
lbl.pack()

root.mainloop()
