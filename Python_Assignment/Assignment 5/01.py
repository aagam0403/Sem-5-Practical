from tkinter import *
from tkinter import messagebox

def show_message():
    messagebox.showinfo("Message", "Hello! Welcome to Python GUI 😊")

root = Tk()
root.title("Message Box Example")

btn = Button(root, text="Click Me", command=show_message)
btn.pack(padx=20, pady=20)

root.mainloop()
