<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Here's a title, I guess</title>
    </head>
    <body>
        <?php
            #setting variables
            $x = 200;
            $y = 50;
            $z = ($x / $y);

            #on-page output
            echo "PHP is going to be lots of fun!<br />";
            echo "<br />";
            echo "Did you all know that $x divided by $y is $z?<br />";

            #a separating block
            echo "<br />";
            echo "===============================================<br />";
            echo "<br />";

            #concatenating some strings
            echo "Let's play with concatenating strings!";
            $var1 = "This isn't";
            $var2 = " too hard.";
            $var3 = $var1;
            $var3 .= $var2;
            echo $var3;

            #a separating block
            echo "<br />";
            echo "===============================================<br />";
            echo "<br />";

            #string functions
            echo "Let's play with some string functions using our concatenation!<br />";
            echo "<br />";
            echo "ALL UPPERCASE LIKE THIS: ";
            echo strtoupper($var3);
            echo "<br />";
            echo "all lowercase like this: ";
            echo strtolower($var3);
            echo "<br />";
            echo "Capitalize first word like this: ";
            echo ucfirst($var3);
            echo "<br />";
            echo "Capitalize Every Word Like This: ";
            echo ucwords($var3);
            echo "<br />";
        ?>

    </body>
</html>