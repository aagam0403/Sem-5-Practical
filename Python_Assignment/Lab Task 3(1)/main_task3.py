from finance.tax import income_tax, gst

salary = 60000
product_price = 1000

tax = income_tax.calculate_tax(salary)
gst_amount = gst.calculate_gst(product_price)
final_price = product_price + gst_amount

print("Income Tax:", tax)
print("Product Price with GST:", final_price)
