# chat_app.py
class UserNotFoundError(Exception):
    pass

class EmptyRoomError(Exception):
    pass

class User:
    def __init__(self, username):
        self.username = username
        self.inbox = []

    def receive(self, from_user, message):
        self.inbox.append((from_user, message))

class ChatRoom:
    def __init__(self, name):
        self.name = name
        self.users = {}  # username -> User
        self.history = []

    def join(self, user):
        self.users[user.username] = user
        print(f"{user.username} joined {self.name}")

    def leave(self, username):
        if username in self.users:
            del self.users[username]
            print(f"{username} left {self.name}")

    def send_message(self, from_username, to_username, message):
        if to_username not in self.users:
            raise UserNotFoundError(f"User {to_username} does not exist in room.")
        from_user = self.users.get(from_username)
        to_user = self.users[to_username]
        to_user.receive(from_username, message)
        self.history.append((from_username, to_username, message))
        print(f"Message sent from {from_username} to {to_username}")

    def broadcast(self, from_username, message):
        if not self.users:
            raise EmptyRoomError("Room is empty.")
        for uname, user in self.users.items():
            if uname != from_username:
                user.receive(from_username, message)
        self.history.append((from_username, "ALL", message))
        print(f"{from_username} broadcasted to {len(self.users)-1} users")

# Example
if __name__ == "__main__":
    room = ChatRoom("General")
    u1 = User("alice"); u2 = User("bob")
    room.join(u1); room.join(u2)
    room.send_message("alice", "bob", "Hello Bob!")
    room.broadcast("bob", "Hello everyone!")
    print("Bob inbox:", u2.inbox)
    try:
        room.send_message("alice", "charlie", "Hi")
    except Exception as e:
        print("Error:", e)
