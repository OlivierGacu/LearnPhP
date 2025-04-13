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
            echo "to lower case: " . strtolower($sentence) . "<br>";
            echo "to upper case: " . strtoupper($sentence) . "<br>";
            echo "ii) <br>";
            $replaced=str_ireplace("book","college",$sentence);
            echo "replaced: " . $replaced . "<br>";
            echo "iii) <br>";
            echo "variable sentence length: " . strlen($sentence) . "<br>";
            echo "iv) <br>";
            echo $sentence[4];
            

        ?>
    </body>
</html>