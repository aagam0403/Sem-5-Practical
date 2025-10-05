# text_analysis.py
from collections import Counter
import re
import os

def analyze_file(path):
    if not os.path.exists(path):
        raise FileNotFoundError("File not found.")
    with open(path, encoding="utf-8") as f:
        text = f.read().lower()
    words = re.findall(r"\b[a-z0-9']+\b", text)
    total_words = len(words)
    freq = Counter(words)
    most_common = freq.most_common(10)
    unique_words = sorted([w for w,c in freq.items() if c==1])
    return {"total_words": total_words, "most_common": most_common, "unique_count": len(unique_words), "unique_words_sample": unique_words[:30]}

# Example
if __name__ == "__main__":
    try:
        stats = analyze_file("sample.txt")  # make sure sample.txt exists
        print("Total words:", stats["total_words"])
        print("Most common:", stats["most_common"])
        print("Unique words count:", stats["unique_count"])
    except Exception as e:
        print("Error:", e)
