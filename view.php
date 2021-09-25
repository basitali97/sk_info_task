<?php
include "login_data.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="border: 1px solid black">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Mobile</td>
            <td>Password</td>
            <td>Hobbies</td>
            <td>Gender</td>
            <td>Photo</td>
        </tr>
        <?php
            $email = $_SESSION['email'];
            $query = "SELECT * FROM user WHERE email='$email'";
            
            $result = mysqli_query($conn,$query);
            while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row['names']; ?></td>    
            <td><?php echo $row['email']; ?></td>    
            <td><?php echo $row['mobile']; ?></td>    
            <td><?php echo $row['pass']; ?></td>    
            <td><?php echo $row['hobbies']; ?></td>    
            <td><?php echo $row['gender']; ?></td>    
            <td><img src="image/<?php echo $row['photo']; ?>" alt="" height="100px" width="100px"></td>    
        </tr>
        <?php
            }       
        ?>
    </table>
</body>
</html>