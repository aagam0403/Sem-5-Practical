class Phone:
    def feature(self):
        print("📞 Phone calling feature")

class Camera:
    def feature(self):
        print("📸 Camera capturing feature")

class SmartDevice(Phone, Camera):
    def feature(self):
        print("🤖 Smart device combining features")
        super().feature()

if __name__ == "__main__":
    sd = SmartDevice()
    sd.feature()
    print("MRO:", SmartDevice.mro())
