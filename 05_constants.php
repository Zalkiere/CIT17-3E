<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 5 - Constants</title>
</head>
<body>
    <?php 

    //constant example
    define("MINSIZE", 50);
    echo MINSIZE;
    echo "<br>";
    echo constant("MINSIZE"); // same thing as the previous line

    ?>
    
</body>
</html>