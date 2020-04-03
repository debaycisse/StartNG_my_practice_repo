import utils  # This is a module that I used to store all my functions
import itertools  # I use this module to unpack multiple list values

# The below variables get returned values for each user info and store them
firstName1 = []
lastName1 = []
emailAddress1 = []
userPassw1 = []

# The below asks if the user wants to create a new user
create_new_user = input("\nCreate new user?.\n(Y)es or (N)o: ")
# The user's answer from the above prompt is used to
# keep on creating more user accounts until user indicates
# that he or she is done with new user account creation
while create_new_user.upper() == "Y" or create_new_user.upper() == "YES":

    # Collect user's data and store them in the below 3 variables
    first_name = input("\nYour First name: ")
    last_name = input("Your Last name: ")
    email = input("Your email address: ")

    # After collecting the 3 values for the above 3 variables
    # Let's get the user's password satisfaction status and
    # his/her preferred password; that is, does the user
    # prefer the auto-generated password or manual one which
    # will be inserted by him or her
    auto_generate_password = utils.auto_password(first_name, last_name)

    # Ask the user, if he or she is satistifed with the generated password.
    password_satisfaction_status = \
        input(f'Use auto-generated password, {auto_generate_password} as your password: (Y)es or (N)o ')

    # If yes, return the value to user_password variable
    user_password = utils.password_satisfaction(password_satisfaction_status, auto_generate_password)

    # user_data function takes the stored user's data, processes it
    # and returns 4 outputs to the 4 given variables.
    firstName, lastName, emailAddress, userPassw = utils.user_data(first_name, last_name, email, user_password)

    # The values from the above 4 variables are
    # added to the values of the 4 given variables
    firstName1.append(firstName)
    lastName1.append(lastName)
    emailAddress1.append(emailAddress)
    userPassw1.append(userPassw)

    # After each successful registration, below code informs the user
    print("User created successfully!\n")

    # This checks, if user still wants to continue with more registration or not.
    create_new_user = input("Create new user?.\n(Y)es or (N)o: ")

# This is only executed when user indicates that he or she is done with registration.
else:
    # Printing the user details for each user in a consecutive session
    for (firstN, lastN, emailAdd, userPassw) in itertools.zip_longest(firstName1, lastName1, emailAddress1, userPassw1):
        print(f'''
            First Name:-    {firstN}
            Last Name:-     {lastN}
            Email:-         {emailAdd}
            Password:-      {userPassw}
            ''')