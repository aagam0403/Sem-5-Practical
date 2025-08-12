original_list = [1, 2, 2, 3, 4, 1, 5, 4]
new_list = []

for item in original_list:
    if item not in new_list:
        new_list.append(item)

print("List after removing duplicates:", new_list)
