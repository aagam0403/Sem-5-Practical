def is_prime(n):
    if n < 2:
        return False
    for i in range(2, int(n**0.5)+1):
        if n % i == 0:
            return False
    return True

for i in range(10):
    num = int(input("Enter number: "))
    if is_prime(num):
        continue
    if num % 10 == 0:
        print("Divisible by 10, breaking...")
        break
else:
    print("Loop completed without break")
