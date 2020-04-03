import random

# User data dictionary
def user_data(firstN, lastN, email, passW):
    user_details = {
        "First Name": firstN,
        "Last Name": lastN,
        "Email": email,
        "Password": passW
    }

    return user_details["First Name"], user_details["Last Name"], user_details["Email"], user_details["Password"]


# function for auto-generated password
# A variable should always take this
# and add it to the user_password list container
def auto_password(first_name, last_name):
    # password_length = 7
    string_pool = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T",
                   "U", "V", "W", "X", "Y", "Z", "+", "/", "@", "&", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "*", "-", "_",
                   "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w",
                   "x", "y", "z"]
    auto_gen_password = first_name[:2] + last_name[-2:] + ''.join(random.choices(string_pool, k=5))
    return auto_gen_password


# The below function takes password_satisfaction_status and auto-generated password or it's variable as arguments
def password_satisfaction(password_satisfaction_status, auto_gen_password):
    password_length = 7
    # Check if the user is satisfied with the auto-generated password
    if password_satisfaction_status.upper() == 'Y' or password_satisfaction_status.upper() == 'YES':
        # Since user is satisfied with the auto-generated password, set the user's password to the
        # auto-genearated one and print User's details
        user_password = auto_gen_password
        return user_password

    # And if user is not satisfied with the auto-generated password. Password policy is enforced
    elif password_satisfaction_status.upper() == 'N' or password_satisfaction_status.upper() == 'NO':
        user_password = input("Type in your preferred password: ")
        # And check whether the inserted password character meets the password policy requirement
        while len(user_password) < password_length:
            print("\nPassword must be more than 7 characters.")
            user_password = input("Type in your password again: ")
        return user_password


    # The below code handles a situation where user enters another key other than Y for 'Yes' or N for 'No'
    while (password_satisfaction_status.upper() != "N" or password_satisfaction_status.upper() != "NO") and \
            (password_satisfaction_status.upper() != "Y" or password_satisfaction_status.upper() != "YES"):
        print("\n Invalid value!")
        # Re-ask the user to confirm if he or she is satisfied with the auto-gen-password
        password_satisfaction_status = input("Enter either 'Y' for YES or 'N' for NO: ")
        if password_satisfaction_status.upper() == 'Y' or password_satisfaction_status.upper() == 'YES':
            user_password = auto_gen_password
            return user_password

        elif password_satisfaction_status.upper() == 'N' or password_satisfaction_status.upper() == 'NO':
            user_password = input("Type in your preferred password: ")
            while len(user_password) < password_length:
                print("\nPassword must be more than 7 characters")
                user_password = input("Type in preferred password again: ")
            return user_password
