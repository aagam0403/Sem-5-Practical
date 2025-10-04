class WeakPasswordError(Exception): pass
class PasswordMismatchError(Exception): pass

class PasswordManager:
    def __init__(self):
        self.password = None

    def create_password(self, pwd, confirm):
        if pwd != confirm:
            raise PasswordMismatchError("Passwords do not match")
        if len(pwd) < 6:
            raise WeakPasswordError("Password too weak")
        self.password = pwd
        print("✅ Password set successfully")

if __name__ == "__main__":
    pm = PasswordManager()
    try:
        pm.create_password("12345", "12345")
    except Exception as e:
        print("❌", e)
