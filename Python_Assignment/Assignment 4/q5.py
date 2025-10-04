class Media:
    def __init__(self, title, duration):
        self.title = title
        self.duration = duration

class Movie(Media):
    def __init__(self, title, duration, genre, rating):
        super().__init__(title, duration)
        self.genre = genre
        self.rating = rating

    def recommend(self, genre, min_rating=4.0):
        return self if self.genre == genre and self.rating >= min_rating else None

if __name__ == "__main__":
    m1 = Movie("Inception", 148, "Sci-Fi", 4.8)
    m2 = Movie("Comedy Movie", 120, "Comedy", 3.5)
    rec = m1.recommend("Sci-Fi")
    print("Recommended:", rec.title if rec else "None")
