<!DOCTYPE html>
<html>
    <head>
        <title>String</title>
    </head>
    <body>
        <h1>OUR FIRS STRING PHP FILE</h1>
        <hr></hr>
        <?php
            $sentence = "The main body of a book";
            echo "i) <br>";
            echo "<b>to lower case:</b> " . strtolower($sentence) . "<br>";
            echo "<b>to upper case:</b> " . strtoupper($sentence) . "<br>";
            echo "ii) <br>";
            $replaced=str_ireplace("book","college",$sentence);
            echo "<b>replaced:</b> " . $replaced . "<br>";
            echo "iii) <br>";
            echo "<b>variable sentence length:</b> " . strlen($sentence) . "<br>";
            echo "iv) <br>";
            echo $sentence[4];
            

        ?>
    </body>
</html>