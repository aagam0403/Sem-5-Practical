# smart_home.py
class InvalidOperationError(Exception):
    pass

class Device:
    def __init__(self, name):
        self.name = name
        self.is_on = False

    def turn_on(self):
        self.is_on = True
        print(f"{self.name} turned on")

    def turn_off(self):
        self.is_on = False
        print(f"{self.name} turned off")

class Light(Device):
    def __init__(self, name, brightness=100):
        super().__init__(name)
        self.brightness = brightness

    def set_brightness(self, value):
        if not (0 <= value <= 100):
            raise InvalidOperationError("Brightness must be between 0 and 100")
        self.brightness = value
        print(f"{self.name} brightness set to {self.brightness}")

class Fan(Device):
    def __init__(self, name, speed=1):
        super().__init__(name)
        self.speed = speed

    def set_speed(self, speed):
        if speed < 0 or speed > 5:
            raise InvalidOperationError("Speed must be between 0 and 5")
        self.speed = speed
        print(f"{self.name} speed set to {self.speed}")

class Thermostat(Device):
    def __init__(self, name, temperature=22):
        super().__init__(name)
        self.temperature = temperature

    def set_temperature(self, t):
        if t < -10:
            raise InvalidOperationError("Temperature too low")
        self.temperature = t
        print(f"{self.name} temperature set to {self.temperature}°C")

# Example usage
if __name__ == "__main__":
    l = Light("Living Room Light")
    f = Fan("Ceiling Fan")
    th = Thermostat("Main Thermostat")
    l.turn_on(); l.set_brightness(80)
    f.turn_on(); f.set_speed(3)
    try:
        th.set_temperature(-20)
    except InvalidOperationError as e:
        print("Error:", e)
