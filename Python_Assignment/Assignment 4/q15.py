class Cipher:
    def __init__(self, shift=3):
        self.shift = shift

    def encrypt(self, text):
        return "".join(chr((ord(c) + self.shift) % 256) for c in text)

    def decrypt(self, text):
        return "".join(chr((ord(c) - self.shift) % 256) for c in text)

try:
    cipher = Cipher()
    with open("data.txt", "r") as f:
        text = f.read()
    enc = cipher.encrypt(text)
    with open("encrypted.txt", "w") as f:
        f.write(enc)
    print("✅ File encrypted")
except FileNotFoundError:
    print("❌ File not found")
