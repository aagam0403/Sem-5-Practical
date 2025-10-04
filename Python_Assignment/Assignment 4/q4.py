import datetime

class DatabaseConnection:
    def __init__(self):
        print("🔗 Connecting to database...")

    def __del__(self):
        with open("db_log.txt", "a") as f:
            f.write(f"Connection closed at {datetime.datetime.now()}\n")
        print("Connection closed and logged.")

if __name__ == "__main__":
    db = DatabaseConnection()
