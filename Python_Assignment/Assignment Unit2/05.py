city_temp = {}
for _ in range(5):
    city = input("Enter city name: ")
    temp = float(input("Enter temperature: "))
    city_temp[city] = temp

cleaned = {}
for k, v in city_temp.items():
    if v >= 15 and v <= 40:
        cleaned[k] = v

print("Cleaned Dictionary:", cleaned)
