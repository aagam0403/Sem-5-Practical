class Paper:
    def __init__(self, width, height):
        self.width = width
        self.height = height

def calculate(p):
    area = p.width * p.height
    perimeter = 2 * (p.width + p.height)
    print("Area:", area)
    print("Perimeter:", perimeter)

p1 = Paper(10, 20)
calculate(p1)