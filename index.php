<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: auto;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            position: relative;
            height: 100vh;
            width: 100%;
            background-color: rgb(137, 215, 218);
            display: flex;
            align-items: center;
        }
        .container input{
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="contaionerButton">
            <a href="register.php"><input type="button" value="Register"></a>
            <a href="login.php"><input type="button" value="Login"></a>
        </div>
    </div>
</body>
</html>