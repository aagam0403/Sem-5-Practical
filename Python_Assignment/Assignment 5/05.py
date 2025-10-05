from tkinter import *

def show_value():
    lbl.config(text=f"Selected: {var.get()}")

root = Tk()
root.title("Radiobutton + Quit")

var = StringVar()

Radiobutton(root, text="Option A", variable=var, value="Option A", command=show_value).pack()
Radiobutton(root, text="Option B", variable=var, value="Option B", command=show_value).pack()

lbl = Label(root, text="")
lbl.pack()

Button(root, text="Quit", command=root.destroy).pack(pady=10)

root.mainloop()