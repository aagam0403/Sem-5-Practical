from utilities.stringops import str_operations as ops

sample = "Madam"
print("Upper:", ops.to_upper(sample))
print("Lower:", ops.to_lower(sample))
print("Reverse:", ops.reverse_string(sample))
print("Vowels:", ops.count_vowels(sample))
print("Palindrome:", ops.is_palindrome(sample))
