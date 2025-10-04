def to_upper(s):
    return s.upper()

def to_lower(s):
    return s.lower()

def reverse_string(s):
    return s[::-1]

def count_vowels(s):
    vowels = "aeiouAEIOU"
    return sum(1 for ch in s if ch in vowels)

def is_palindrome(s):
    return s == s[::-1]
