import random

my_list = [1, 2, 3, 4, 5]
my_set = {10, 20, 30, 40, 50}

print("Random from list:", random.choice(my_list))
print("Random from set:", random.choice(list(my_set)))
