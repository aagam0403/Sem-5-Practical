from tkinter import *

def check_age():
    if var.get() == 1:
        lbl.config(text="You are not eligible for voting ❌")
    else:
        lbl.config(text="You are eligible for voting ✅")

root = Tk()
root.title("Voting Eligibility")

Label(root, text="Your Age:").pack()

var = IntVar()
Radiobutton(root, text="Less than 18", variable=var, value=1, command=check_age).pack()
Radiobutton(root, text="Greater than 18", variable=var, value=2, command=check_age).pack()

lbl = Label(root, text="")
lbl.pack()

root.mainloop()
