<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>
            style
        </title>

    </head>
    <body>
        <center>
            <div class="bhead">
                <h2>
                    This is my Form
                </h2>
            </div>
            <div class="form">
                simple calculator
                <form method="POST" action="#">
                    <label>enter num1</la>
                    <input type="number" name="num1"><br><br>
                    <label>enter sign</label>
                    <input type="text" name="sign"><br><br>
                    <label>enter num2</label>
                    <input type="number" name="num2"><br><br>
                    <input type="submit" value="=">
                </form> 
            </div>
            <div>
                <h2>
                    <?php
                        include 'conne.php';
                        echo'<br>';
                        if($_SERVER['REQUEST_METHOD'] == "POST"){
                            $num1 = $_POST['num1'];
                            $num2 = $_POST['num2'];
                            $sign = $_POST['sign'];
                            if(!empty($num1)&& !empty($num2) && !empty($sign)){
                                $sql = "INSERT INTO calculation (num1, sign, num2) VALUES ('$num1', '$sign', '$num2')";

                                if ($conn->query($sql) === TRUE) {
                                    echo "Data inserted successfully!";
                                } else {
                                    echo "Error: " . $conn->error;
                                }

                                $conn->close();
                                echo"<br>";
                                if($sign == "+"){
                                    $sum = $num1 + $num2;
                                    echo"answer=" . $sum . "<br>";
                        
                                }
                                elseif($sign == "-"){
                                    $sum = $num1 - $num2;
                                    echo"answer=" . $sum . "<br>";
                        
                                }
                                elseif($sign == "/"){
                                    $sum = $num1 / $num2;
                                    echo"answer=" . $sum . "<br>";
                        
                                }
                                elseif($sign == "*"){
                                    $sum = $num1 + $num2;
                                    echo"answer=" . $sum . "<br>";
                        
                                }
                            }
                            else{
                                echo"empty field detected!";
                            }
                        }
                    ?>
                </h2>
            </div>

        </center>
    </body>
</html>
