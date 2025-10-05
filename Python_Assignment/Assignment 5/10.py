from tkinter import *

def show_selected(event):
    selected = lb.get(lb.curselection())
    lbl.config(text=f"Selected: {selected}")

root = Tk()
root.title("Listbox Example")

lb = Listbox(root)
items = ["Python", "Java", "C++", "PHP"]
for i in items:
    lb.insert(END, i)
lb.pack()

lb.bind("<<ListboxSelect>>", show_selected)

lbl = Label(root, text="Select an item")
lbl.pack()

root.mainloop()
