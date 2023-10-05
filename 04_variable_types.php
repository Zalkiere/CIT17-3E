<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 4 - Variable Types</title>
</head>
<body>
    <?php 

    //Integers
    $int_var = 123456;
    $another_int = -10 + 10; 
    print("This the first integer: $another_int<br>");
    print("The second integer is: $int_var<br>");

    //doubles
    $many = 2.2888800;
    $many_2 = 2.2111200;
    $few = $many + $many_2;
    print(".$many + $many_2 = $few.<br>");

    //boolean
    if (TRUE)
    print("This will always print<br>");
    else
    print("This will never print<br>");

    //null
    $my_var = NULL;
    $my_var = null;

    //strings
    $string_1 = "This is a string in double quotes";
    $string_2 = "This is a somewhat longer, singly quoted string";
    $string_39 = "This string has thirty-nine characters";
    $string_0 = ""; 

    $variable = "name";
    $literally = 'My $variable will not print!\\n';
    echo "<br>";
    print($literally);
    $literally = "My $variable will print!\\n";
    echo "<br>";

    print($literally);
    echo "<br>";


    //local variables
    $x = 4;
    function assignx () {
        $x = 0;
    print "\$x inside function is $x. 
    ";
    echo "<br>";

    }
    assignx();
    print "\$x outside of function is $x. 
    ";

    //function parameters
    // multiply a value by 10 and return it to the caller
    function multiply ($value) {
    $value = $value * 10;
    return $value;
    }
    $retval = multiply (10);
    echo "<br>";
    Print "Return value is $retval\n";
    echo "<br>";

    //global variables
    $somevar = 15;
    function addit() {
    GLOBAL $somevar;
    $somevar++;
    print "Somevar is $somevar";
    }
    addit();
    echo "<br>";

    //statistic variables
    function keep_track() {
    STATIC $count = 0;
    $count++;
    print $count;
    print "
    ";
    }
    keep_track();
    echo "<br>";
    keep_track();
    echo "<br>";
    keep_track();
    echo "<br>";
    ?>
    
</body>
</html>