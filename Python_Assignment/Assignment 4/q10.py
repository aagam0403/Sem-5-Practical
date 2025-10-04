import csv

try:
    with open("products.csv", "r") as f:
        reader = csv.reader(f)
        products = list(reader)
        if not products:
            raise Exception("Empty file")
        print("Products:", products)
except FileNotFoundError:
    print("❌ File not found")
except csv.Error:
    print("❌ Incorrect CSV format")
except Exception as e:
    print("❌ Error:", e)
