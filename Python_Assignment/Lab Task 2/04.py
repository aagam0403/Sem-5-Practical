nums = tuple(int(input("Enter integer " + str(i+1) + ": ")) for i in range(10))
even_count = len([n for n in nums if n % 2 == 0])
odd_count = len(nums) - even_count

def is_prime(x):
    if x < 2:
        return False
    for i in range(2, int(x**0.5)+1):
        if x % i == 0:
            return False
    return True

prime_tuple = tuple(n for n in nums if is_prime(n))
print("Even count:", even_count, "Odd count:", odd_count)
print("Prime tuple:", prime_tuple)
print("Max:", max(prime_tuple), "Min:", min(prime_tuple), "Sum:", sum(prime_tuple))
