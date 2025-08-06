print("Main Menu:")
print("1. Joomla")
print("2. Ruby on Rails")
print("3. Drupal")
print("4. Android")
print("5. iOS")

choice = int(input("Enter your choice (1-5): "))

if choice == 1:
    print("You have selected Joomla.")
elif choice == 2:
    print("You have selected Ruby on Rails.")
elif choice == 3:
    print("You have selected Drupal.")
elif choice == 4:
    print("You have selected Android.")
elif choice == 5:
    print("You have selected iOS.")
else:
    print("Invalid choice. Please enter a number between 1 and 5.")
