strings = [input(f"Enter string {i+1}: ") for i in range(5)]
longest = max(strings, key=len)
shortest = min(strings, key=len)

print("Longest:", longest)
print("Shortest:", shortest)
