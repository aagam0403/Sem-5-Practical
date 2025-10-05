from tkinter import *

def show_value():
    lbl.config(text=f"Selected: {var.get()}")

root = Tk()
root.title("Radiobutton Example")

var = StringVar(value="")

Radiobutton(root, text="Option 1", variable=var, value="Option 1", command=show_value).pack()
Radiobutton(root, text="Option 2", variable=var, value="Option 2", command=show_value).pack()

lbl = Label(root, text="Select any option")
lbl.pack()

root.mainloop()