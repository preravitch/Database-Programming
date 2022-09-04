<!DOCTYPE html>
<html>
    <body>
        <?php
            $txt1 = "This is";
            $txt2 = " a text";
            $x = 5;
            $y = 4;
            echo "<p>".$txt1.$txt2."</p>";
            echo "Varibles are " . $x . " and " .$y. ".<br>";
            echo "Variablrs are {$x} and $y <br>";
            echo "PHP ", "is " , "showing " , $x+$y, " but print can't do that.","<br>";
            print "Variables are " . $x . " and " . $y. " .<br>";
        ?>
    </body>
</html>