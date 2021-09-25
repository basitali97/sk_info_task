<?php
session_start();
$conn=mysqli_connect('localhost','root','','studentinfo');

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE email='$email' and pass = '$password'";

    $result = mysqli_query($conn,$query);
    // $count  = mysqli_num_rows($result);
	if($result){
        while($row=mysqli_fetch_assoc($result)){
            $email=$row["email"];
            $_SESSION['email']=$email;
            header('location:view.php');
        }
    }
    else{
        echo "Wrong email or password";
    }
}


?>