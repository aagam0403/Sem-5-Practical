t = tuple(input("Enter string: ") for _ in range(int(input("How many strings? "))))
vowels = {'a', 'e', 'i', 'o', 'u'}
count = sum(1 for s in t if all(ch.lower() in vowels for ch in s))

print("Strings with only vowels:", count)
