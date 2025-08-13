sentence = input("Enter a sentence: ")
vowels = {'a', 'e', 'i', 'o', 'u'}
found_vowels = {ch.lower() for ch in sentence if ch.lower() in vowels}

print("Vowels found:", found_vowels)

frozen_vowels = frozenset(found_vowels)
try:
    frozen_vowels.remove('a')
except AttributeError as e:
    print("Error:", e)
