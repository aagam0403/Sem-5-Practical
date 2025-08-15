def is_prime(x):
    if x < 2:
        return False
    for i in range(2, int(x**0.5) + 1):
        if x % i == 0:
            return False
    return True

even_set = {x for x in range(1, 21) if x % 2 == 0}
prime_set = {x for x in range(1, 21) if is_prime(x)}

print("Union:", even_set | prime_set)
print("Intersection:", even_set & prime_set)
print("Difference:", even_set - prime_set)
print("Symmetric Difference:", even_set ^ prime_set)

frozen = frozenset(even_set)
try:
    frozen.add(100)
except AttributeError as e:
    print("Error:", e)
