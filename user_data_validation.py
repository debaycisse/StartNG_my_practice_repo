import random
# 1. Collect details first name, last name and email
first_name = input("Your First name: ")
last_name = input("Your Last name: ")
email = input("Your email address: ")
user_password = ""
password_length = 7


# 2. Generate random password for the user joining the first 2 letters of the first name
# and last 2 letters of the last name with a random string of length 5.
# This makes your password 9 letters long.
random_string = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "+", "/", "@", "&", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"]
random_password = first_name[:2] + last_name[-2:] + random.choices(random_string, k=2)



# 3. Show user password and ask if he or she is satisfied with it. If yes, print out user
# details nicely from the container and that’s the end of the program, if no, ask user
# to choose a password himself.

# print(f'{random_password} has been auto-generated for you as password')
password_satisfaction = input(f'Use {random_password} as your password: (Y)es or (N)o ')
if password_satisfaction.upper() == 'Y':
    # Print User's details
    user_password = password_satisfaction
    user_detail = {
        "First Name"    : first_name,  #input("Your First Name: "),
        "Last Name"     : last_name,  #input("Your Last Name: "),
        "Email"         : email,  #input("Your Email address: ")
        "Password"      :   user_password
    }
    print(user_detail)

# 4. If user inputs password, make sure it is longer than 7 characters before ending the
# program and printing out user details. If it is less than 7, prompt user to input a new
# password equal to or greater than 7 in length.

else:
    user_password = input("Type in your password: ")
    while len(user_password) < password_length:
        print("\n Password must be more than 7 characters.")
        user_password = input("Type in your password again: ")
    user_detail = {
        "First Name": first_name,  # input("Your First Name: "),
        "Last Name": last_name,  # input("Your Last Name: "),
        "Email": email,  # input("Your Email address: ")
        "Password": user_password
    }
    print(user_detail)


# 5. Create a container for user data such that if the program is run consecutively by
# two different users, their details get stored in your container (make sure you can
# identify who has each detail). Print out each item in the container after all users
# are done.
# (Hint : Container can be list or dictionary. Don’t use tuples as they are immutable.)





# 6. Proper code structure  and presentation such as the use of functions and for
# appropriate modules will earn you more marks.
# Remember to always inform user of appropriate action to take.

# ***************************************Submission*****************************************
# Put up your code file on GitHub. No other form of submission is allowed!
# Create a new public repository on GitHub. Do not use an old repo. Push direct to the master branch.
