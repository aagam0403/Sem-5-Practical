sentence = input("Enter sentence: ").split()
word_len = {w: len(w) for w in sentence}
max_len = max(word_len.values())
print("Longest words:", [w for w, l in word_len.items() if l == max_len])
