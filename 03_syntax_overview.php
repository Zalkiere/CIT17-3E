<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 3 - Syntax Overview</title>
</head>
<body>
    <?php 

    echo "Trying out the canonical php tags";
    echo "<br>";

    # Yes, this line is just a comment
    # It won't be on display
    // Insert John Cena Meme you don't see me
    print "There are comments in the file, check it out";
    echo "<br>";
    
    # First Example
    print <<<END
    Never gonna give you up
    Never gonna let you down
    Never gonna run around and desert you
    Never gonna make you cry
    Never gonna say goodbye
    Never gonna tell a lie and hurt you
    END;
    # Second Example
    echo "<br>";
    print "IT ka ba?
    The fault of one is the fault of all-
    D I Y E S";
   
    /* This is a comment with multiline
    On the twelfth day of Christmas
    my mahal gave to me,
    twelve machos' dancing,
    eleven sabong fighting,
    ten Titos' peeing,
    nine sisters singing,
    eight Lolas' blessings,
    seven Yayas cleaning,
    six duwendes laughing,
    five red horse drinks,
    four balot eggs,
    three parol,
    two carabao
    and a beki in a jeepney.
    */
    echo "<br>";
    print "A Twelve Days of Christmas Parody by Mikey Bustos in the comments";

    $capital = 67;
    echo "<br>";
    print("Variable capital is $capital<br>");
    print("Variable CaPiTaL is $CaPiTaL<br>");
    echo "<br>";

    $greeting = "Welcome to PHP!";
    print($greeting);
    echo "<br>";

    if (3 == 2 + 1)
    print("Good - I haven't totally lost my mind.<br>");
    if (3 == 2 + 1)
    {
    print("Good - I haven't totally");
    print("lost my mind.<br>");
    }


    ?>
    
</body>
</html>