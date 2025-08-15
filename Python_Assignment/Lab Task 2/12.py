text = input("Enter string: ").lower().replace(" ", "")
freq = {}
for ch in text:
    freq[ch] = freq.get(ch, 0) + 1
print(freq)
