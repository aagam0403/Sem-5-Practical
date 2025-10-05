from tkinter import *

def copy_text():
    lbl.config(text=entry.get())

root = Tk()
root.title("Copy Text")

entry = Entry(root)
entry.pack(pady=5)

Button(root, text="Copy", command=copy_text).pack(pady=5)

lbl = Label(root, text="*****")
lbl.pack(pady=5)

root.mainloop()