#  Fetch the radius from the user and converts it to float datatype
userradius = float(input("Enter the radius: "))


# Define a function to compute the area of a circle
def print_circle_radius(radius):
    pi = 3.14
    result = (pi * radius)**2
    print("The area of the circle is : " + str(result))


# Call the function for the computation
print_circle_radius(userradius)
