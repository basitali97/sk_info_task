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
            /* align-items: center; */
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
            <form action="code.php" method="POST" enctype="multipart/form-data">
                <h3>Register Here!!</h3>
                <hr>
                <input type="text" name="name" placeholder="Enter Name" required>
                <input type="text" name="email" placeholder="Enter email" required>
                <input type="number" name="mobile" placeholder="Enter mobile" required>
                <input type="password" name="password" placeholder="Enter password" required>
                <div class="hobbies"><br>
                    <h4>Hobbies : </h4>
                    <input type="checkbox" name="hobbies[]" value="Song" >
                    <label for="song">Music</label><br>
                    <input type="checkbox" name="hobbies[]" value="Sports" >
                    <label for="sports"> Sports</label><br>
                </div><br>


                <div class="gender">
                    <h4>Gender : </h4>
                    <input type="radio" name="gender" value="Male" required><label for="male">Male</label>
                    <input type="radio" name="gender" value="Female" required><label for="female">Female</label>
                </div>


                <br>

                <h4 style="display: flex;align-items: baseline;">Upload Photo : </h4>


                <input type="file" name="image"  accept="image/*" required>


                <input type="submit" value="Register">

                <a href="index.php"><input type="button" value="Back to Home"></a>
            </form>
        </div>
    </div>
</body>
</html>