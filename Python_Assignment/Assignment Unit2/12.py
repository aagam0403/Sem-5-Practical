text = input("Enter paragraph: ")
words = text.split()

vowels = "aeiouAEIOU"
vowel_count = sum(1 for ch in text if ch in vowels)
consonant_count = sum(1 for ch in text if ch.isalpha() and ch not in vowels)

freq = {}
for word in words:
    freq[word] = freq.get(word, 0) + 1

print("Words:", len(words))
print("Vowels:", vowel_count)
print("Consonants:", consonant_count)
print("Word Frequencies:", freq)
