from tkinter import *

def show_os():
    lbl.config(text=f"Selected OS: {os_var.get()}")

root = Tk()
root.title("Dynamic Radiobuttons")

os_list = ['Ubuntu', 'Windows', 'MAC', 'Linux']
os_var = StringVar()

for os in os_list:
    Radiobutton(root, text=os, variable=os_var, value=os, command=show_os).pack(anchor=W)

lbl = Label(root, text="Select OS")
lbl.pack(pady=10)

root.mainloop()
