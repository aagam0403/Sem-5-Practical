class Teacher:
    def __init__(self):
        self.__name = ""
        self.__subject = ""
        self.__basic = 0.0
        self.__da = 0.0
        self.__hra = 0.0
        self.__salary = 0.0

    def __calculate(self):
        self.__salary = self.__basic + self.__da + self.__hra
        return self.__salary

    def readdata(self):
        self.__name = input("Enter teacher name: ")
        self.__subject = input("Enter subject: ")
        self.__basic = float(input("Enter Basic Pay: "))
        self.__da = float(input("Enter DA: "))
        self.__hra = float(input("Enter HRA: "))

        total = self.__calculate()
        print(f"\nTeacher Name: {self.__name}")
        print(f"Subject: {self.__subject}")
        print(f"Salary: {total}")

t1 = Teacher()
t1.readdata()