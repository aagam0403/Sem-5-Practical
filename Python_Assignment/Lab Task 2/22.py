words = input("Enter words: ").split()
length_dict = {}
for w in words:
    length_dict.setdefault(len(w), []).append(w)
print(length_dict)
