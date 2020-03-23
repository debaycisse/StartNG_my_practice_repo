
<!-- <p>Static text</p> -->
<?php


// concerning the ask, check the below links:
// https://www.php.net/manual/en/function.file-put-contents.php
// https://www.php.net/manual/en/function.fwrite.php






    
    // **************URL encoding
    // error_reporting(E_ALL);
    // $foo = "This is a complex value & it needs to be URL-encoded.";
    // // Output the original string
    // echo $foo, "<br /><br />";   // This is a complex value & it needs to be URL-encoded.
    // // URL encode the string
    // $bar = urlencode($foo);
    // // Output the URL-encoded string
    // echo $bar, "<br /><br />";    // This+is+a+complex+value+%26+it+needs+to+be+URL-encoded.
    // // Decode the string and output it.
    // echo urldecode($bar);  // This is a complex value & it needs to be URL-encoded.



    // // **********$_SERVER
    // The $_SERVER has alot of usefulness, kindly read up the php manual about it

    // // Example
    // if(isset($_SERVER['HTTP_REFERER']))
    // {
    // echo $_SERVER['HTTP_REFERER'];
    // }
    // else
    // {
    // echo "No referer set!";
    // }

    // /* Example
    // * Note that <pre> tags and newline characters (\n) are used
    // * for the sake of legibility
    // */
    // // Path to the current file (i.e. '/simple_blog/test.php')
    // echo "<b>Path to the current php file: </b>", $_SERVER['PHP_SELF'], "<br />";
    // // Information about the user's browser
    // echo "<b>Info about the user's browser: </b>", $_SERVER['HTTP_USER_AGENT'], "<br />";
    // // Address of the page that referred the user (if any)
    // echo "<b>referrer page's web-address: </b>", $_SERVER['HTTP_REFERER'], "<br />";
    // // IP address from which the user is viewing the script
    // echo "<b>user's ip address: </b>", $_SERVER['REMOTE_ADDR'], "<br />";
    // // Human-readable export of the contents of $_SERVER
    // print_r($_SERVER);


    // Example
    // echo "Welcome to $_SERVER[HTTP_HOST]!";

    // **********testing error_reporting(E_ALL)
    // error_reporting(E_ALL);
    // $foo = "I'm outside the function!";

    // function test(){
    //     global $foo; // eventhough, $foo is declared outside the function, it is still available in the function code black via the help of 'global'
    //     return $foo;
    // }
    
    // echo test();
    


    // **********Variable Scope
    // error_reporting(0);
    // $foo = "Some Values"; 
    // include_once 'extra.php';  // $foo is declared or available in extra.php file.
    // $bar = "Another Values"; // $bar is not declared or available in extra.php file.
    // echo "test.php: Foo is $foo, and bar is $bar. <br />";

    


    // **************function 
    /*
    * Based on the time passed to the function in military (24 hour)
    * time, returns a greeting
    */
    // function greet($time)
    // {
    //     if($time<12)
    //     {
    //     return "Good morning!";
    //     }
    //     elseif($time<18)
    //     {
    //     return "Good afternoon!";
    //     }
    //     else
    //     {
    //     return "Good evening!";
    //     }
    // }
    // $greeting = greet(18);
    // echo "$greeting How are you?";


    // ***************Loading external file's content
    // Loading of external php file contents, can be achieved via the following contruct
    // include_once, include, require_once and require
    // include_once 'extra.php';
    // echo '$foo variable\'s value is: '.'<u>'. $foo .'</u>' . ', which is from the external file. <br />';
    // echo '$bar variable\'s value is: '. '<u>'.$bar.'</u>' . ', which is from the external file.';


    // **********Loop

    // ************foreach loop


    //EXAMPLE
    // $people = array(
    //     'Jason' => array(
    //     'gender' => 'male',
    //     'hair' => 'brown'
    //     ),
    //     'Carly' => array(
    //     'gender' => 'female',
    //     'hair' => 'blonde'
    //     )
    //     );
    //     foreach($people as $name => $person) {
    //         foreach($person as $key => $value) {
    //             echo "$name's $key is $value. <br />";
    //         }
    //     }

    // ANOTHER EXAMPLE
    // $person = array(
    //     'name' => 'Jason',
    //     'age' => 23,
    //     'passion' => 'craft beer'
    //     );
    //     foreach($person as $key => $value) {
    //     echo "His $key is $value. <br />";
    //     }

    // ANOTHER EXAMPLE
    // $bands = array("Minus the Bear", "The Decemberists",
    // "Neko Case", "Bon Iver", "Now It's Overhead");
    // foreach($bands as $band) {  // NOTE HOW FOREACH IS USED IN PHP
    // echo $band, "<br />";
    // }


    // ***************For loop
    
    // EXAMPLE
    // $bands = array("Minus the Bear", "The Decemberists",
    // "Neko Case", "Bon Iver", "Now It's Overhead");

    // for($i=0, $n=count($bands); $i<$n; ++$i) { // NOTE HOW TWO EXPRESSIONS ARE MADE AT THE INITIAL POSITION OF THE FOR LOOP AND SEPERATED BY COMMA.
    // echo $bands[$i], "<br />";
    // }


    // ANOTHER EXAMPLE
    // for($i=0; $i<3; ++$i) {
    //     echo "The count is at $i. <br />";
    //     }
    //  // Output:
    //  // The count is at 0.
    //  // The count is at 1.
    //  // The count is at 2.


    // do while loop
    /* 
    You need to use a do-while loop if you want to set up a loop that executes at least once, then
    continues if the condition is met:  
    */
    // $i = 10;
    // do {
    //     echo "The count is at $i.\n So the loop did not execute";
    //     ++$i;
    //     } while($i<5);
    //     // Outputs "The count is at 10."
    //     // even though $i doesn't meet the condition.


    //*********while loop
    // $bands = array("Minus the Bear", "The Decemberists",
    // "Neko Case", "Bon Iver", "Now It's Overhead");
    // $i = 0;
    // $n = count($bands); // Stores the number of values in the array
    // while($i < $n) {
    // echo $bands[$i], "<br />";
    // ++$i;
    // }
    // print count($bands);  //  5

    //**********while loop
    // $i = 0;
    // while($i<3) {
    // echo "Count is at $i. <br />";
    // ++$i;
    // }



    //************Comparison Operators
    // • (==): Values are equal
    // • (===): Values are identical
    // • (!= or <>): Values are not equal
    // • (!==): Values are not identical
    // • (<): Value 1 is less than value 2
    // • (>): Value 1 is greater than value 2
    // • (<=): Value 1 is less than or equal to value 2
    // • (>=): Value 1 is greater than or equal to value 2



    //*****************Array
    // $person = array(
    //     'name' => 'Jason',
    //     'age' => 23
    //     );
    // $age =& $person['age'];  // =& forces the new value to affect pr replace the value in $person array element.
    // // Output the array before doing anything
    // echo 'The value of age before, a new value is assigned to it. ';
    // print_r($person); 
    // echo '<br />' . 'A new value of age after a new value has been assigned to it. ';
    // // Birthday! Add a year!
    // ++$age;
    // // Output the array again to see the changes
    // print_r($person);



    // **********Multidimensional array or nested array
    
    // $colors = array(
    //     'fruits' => array('apple' => 'red', 'plum' => 'purple'),
    //     'flowers' => array('rose' => 'red', 'violet' => 'blue')
    //     );
    //     // Output: An apple is red, and a violet is blue.
    //     echo "An apple is {$colors['fruits']['apple']}, and a
    //     violet is {$colors['flowers']['violet']}.";
    
    // $people = array(
    //     array('name' => 'Jason', 'age' => 23), // $people[0], therefore, $people[0][0] === 'Jason' and so on.
    //     array('name' => 'Carly', 'age' => 18) // $people[1], therefore, $people[1][0] === 'Carly' and so on.
    //     );
    //     echo "{$people[0]['name']} has a sister who is
    //     {$people[1]['age']} years old."; // Jason has a sister who is 18 years old. 



    // ****************Complex Syntax
    // Mainly used for string array 
    // Take note of how the variables are wrapped in curly braces.
    // The single quotes in which the array key is contained, can be omitted, so it is optional
    // $person = array('name' => 'Jason', 'age' => 23);
    // echo "This person's name is {$person['name']}
    // and he is {$person['age']}.";  // This person's name is Jason and he is 23. 

    // ***************Array
    // $entry = array('Sample Title', 'April 13, 2009', 'Jason',
    // 'Today, I wrote a blog entry.');
    // echo $entry[0], ' by ', $entry[2];  // Sample Title by Jason

    // $entry = array(
    //     'title' => 'Sample Title',
    //     'date' => 'April 13, 2009',
    //     'author' => 'Jason',
    //     'body' => 'Today, I wrote a blog entry.'
    //     );
    // echo 'Entry array contains the below info <br />';
    // echo "1st element is: $entry['title']";       // 1st element is: Sample Title 
    // echo "<br /> 2nd element is: $entry['date']"; // 2nd element is: April 13, 2009
    // echo "<br /> 3rd element is: $entry['body']"; // 3rd element is: Today, I wrote a blog entry. 



    // *****************Integer
    // $foo = 27; // No quotes around a whole number always means integer
    // $bar = (int) "3-peat"; // Evaluates to 3
    // $baz = (int) "seven"; // Evaluates to 0
    // $bat = (int) "ten 4"; // Evaluates to 0


    // *****************Heredoc style of declaring string
    // $variables = '$variables';
    // $foo = <<<EOD
    // This is a string created using heredoc syntax.
    // It can span multiple lines, use "quotes" without
    // escaping, and it'll allow $variables too.
    // Special characters are still supported \n as well.
    // EOD;
    // echo ''.$foo

    // $foo = "This is a";
    // $bar = " string.";
    // echo $foo . $bar;




    // ************************string with double quote
    // $foo = "This is a " . "string.";
    // echo $foo;
    // echo "This is a string. <br />";
    // echo "This is a string
    // that spans
    // multiple lines. <br />";
    // // Apostrophes don't need to be escaped in double quotes
    // echo "This string's got an apostrophe. <br />";
    // // Double quotes will need to be escaped
    // echo "This string says, \"I need escaping!\" <br />";
    // // New line characters will be interpreted
    // echo "This string has \n newline \n characters. <br />";
    // // A backslash will be printed if a special character doesn't
    // // directly follow it
    // echo "This string contains a backslash (\). <br />";
    // // Variables will be expanded if not escaped
    // $variable = "word";
    // echo "This string uses a $variable. <br />";
    // // A variable can be interpreted as plain text by escaping the
    // // dollar sign with a backslash
    // echo "This string escapes the \$variable. <br />";


    // $foo = "5";
    // $bar = $foo + 2 ;
    // echo '$foo has been converted into integer, now $bar is '.'<h1>'.$bar.'</h1>' ;
    
    
    
    // echo '<p>This text was generated by PHP engine server</P';

    // echo 'This is a php file';
    // echo '<br />'
    // $name1 = 'azeez';
    // echo 'welcome, ' .$name1;
?> 
<!-- <p>This text was not generated by PHP, though</p> -->
