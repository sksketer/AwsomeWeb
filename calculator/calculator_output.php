<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: rgb(37, 37, 37);
        }
        .output{

        }
        .back-button{
            padding: 10px 20px 10px 20px;
            background: transparent;
        }
        .back-button:hover{
            background-color: lightgreen;
        }
        .back-button .back-button-link{
            color: white;
            font-weight: bolder;
            font-size: xx-large;
            text-transform: uppercase;
            text-decoration: none;
        }
    </style>
    <title>CalCulator output</title>
</head>
<body>
     
    <?php 
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $operator=$_POST['operator'];
        $result=0;

        function operation($operator, $val1, $val2, $result)
        {
            if($operator == '+')
            {
                echo "$val1 $operator $val2 = ";
                $result= $val1 + $val2;
            }
            else if($operator == '-')
            {
                echo " $val1 $operator $val2 = ";
                $result= $val1 - $val2;
            }
            else if($operator == "*")
            {
                echo "$val1 $operator $val2 = ";
                $result= $val1 * $val2;
            }
            else if($operator == "/")
            {
                echo "$val1 $operator $val2 = ";
                $result= $val1 / $val2;
            }
            // echo " Function call and value of result= $result"."<br>";
            return $result;
        }

        $result=operation($operator, $num1, $num2, $result);
        echo '<div class="output"><textarea name="" id="" cols="0" rows="0">'.$result.'</textarea>'.'<br></div>';

        echo ' <button class="back-button"><a href="calculator_front.php" class="back-button-link">BACK</a></button> ';

    ?>
</body>
</html>