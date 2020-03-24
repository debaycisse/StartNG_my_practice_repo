<?php



    // Fetching user name
    $user_name = $_POST['user_name'];

    // Creating filename, using the username
    $filename =  $user_name.'.php';
    
    // $filename = ${"$user_name".".txt"};
    
    //Opening the file with the username and .txt extension
    $fp = fopen($filename, 'w');
    
    // Creating content to write into the opened file
    $content = "<h1>Users Contact Details:</h1><br />
    <p>First Name  : $_POST[first_name] <p/>
    <p>Last Name   : $_POST[last_name] <p/>
    <p>Username    : $_POST[user_name] <p/>
    "; 
    
    // Writing the contents in to the file
    fwrite($fp, $content);
    // Closing the file
    fclose($fp);
    // Display the user's filename and it's location
    echo "User's file: ", $filename , " created in the current directory." ;

    // print_r($_POST)

    // Check if the form is submitted 
    //  if ( isset( $_GET['submit'] ) ) { 
    //      // retrieve the form data by using the element's name attributes value as key 
    //      $firstname = $_GET['first_name']; 
    //      $lastname = $_GET['last_name'];
    //      $email = $_GET['email_address'];
    //      // display the results 
    //      echo '<h3>Form GET Method</h3>'; 
    //      echo 'Your name is ' . $lastname . ' ' . $firstname; 
    //      exit;
    // }


    // PHP Task 
    // Create a:

    // Contact Form 
    // That submits to a file. 

    // This means, when a user submits that contact form, 
    // a file should be created for them, and 
    // the content of their contact should be in that file. 
    // The file should be named after the user, 
    // and should be unique to the user. 
    // More PHP resources will be provided on youtube to help you carry out this task better.

    // Push the code to GitHub, and submit the link to the code.

?>