from tkinter import *

root = Tk()
root.title("Simple Layout")

Label(root, text="Welcome to Python GUI 😄", font=("Arial", 14)).pack(pady=10)
Button(root, text="OK", width=10).pack(pady=5)

root.mainloop()