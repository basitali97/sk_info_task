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
        }
        .containerForm form{
            position: relative;
            border: 0.5px solid white;
            border-radius: 10px;
            padding: 20px;
            display: grid;
            background-color: rgb(235, 228, 166);
        }
        .container .containerForm input{
            position: relative;
            margin: 5px 0px 5px 0px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="containerForm">
            <form action="login_data.php" method="POST" enctype="multipart/form-data">
                <h3>Login Here!!</h3>
                <hr>
                <input type="email" name="email" placeholder="Enter Email" required>
                <input type="password" name="password" placeholder="Pasword" required>                  
                <input type="submit" name="submit" value="Login">
            </form>
        </div>
    </div>
</body>
</html>