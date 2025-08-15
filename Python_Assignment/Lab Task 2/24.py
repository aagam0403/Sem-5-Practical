nested = [[1, 2], [3, 4], [5]]
flat = []
for sub in nested:
    for item in sub:
        flat.append(item)
print(flat)
