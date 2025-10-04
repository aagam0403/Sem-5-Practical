def merge_files(file_list, output_file):
    try:
        with open(output_file, "w") as outfile:
            for fname in file_list:
                f = None
                try:
                    f = open(fname, "r")
                    outfile.write(f.read() + "\n")
                finally:
                    if f:
                        f.close()
    except Exception as e:
        print("❌ Error:", e)

if __name__ == "__main__":
    merge_files(["file1.txt", "file2.txt"], "merged.txt")
