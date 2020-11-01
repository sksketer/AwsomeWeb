<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <style>
        body{
            background-color: rgb(37, 37, 37);
         }
        .heading{
            color: white;
            font-weight: bolder;
            font-size: xx-large;
            text-transform: uppercase;
            margin: 20px;
        }
        .main{
            width: 35vw;
            background-color: gray;
        }
        .form{
            border: 2px white solid;
        }
        .form .input-value{
            padding: 20px;
            margin: 20px;
            text-align: center;
            border: none;
        }
        .form .input-value:hover{
            color: rgb(0, 0, 0);
        }
        .form .input-value:focus{
            color: black;
            background-color: rgb(175, 252, 252);
            border: 1px black solid;
        
        }
        .form .input-submit{
            padding: 20px;
            margin: 20px;
            color: rgb(11, 102, 2);
            font-weight: bolder;
            font-size: medium;
        }
        .form .input-submit:hover{
            background-color: green;
            color: white;
        }
    </style>
    <title>CalCulator</title>
</head>
<body>
    <div class="heading">
        <p>Calculator</p>
    </div>
    <div class="container">
        <div class="main">
            <form action="calculator_output.php" method="post" class="form">
                <input type="number" name="num1" value="0" class="input-value" id="">
                <input type="number" name="num2" value="0" class="input-value" id="">
                <br>
                <input type="submit" name="operator" value="+" class="input-submit">
                <input type="submit" name="operator" value="-" class="input-submit">
                <input type="submit" name="operator" value="*" class="input-submit">
                <input type="submit" name="operator" value="/" class="input-submit">
            </form>
        </div>
    </div>
    
</body>
</html>