<?php
$con=mysqli_connect('localhost','root','','studentinfo');

if($con){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $hobbies = $_POST['hobbies'];
    $hob = implode(",",$hobbies);
    $gender = $_POST['gender'];
    $img_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];


    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
    $img_ex_lc = strtolower($img_ex);

    $allowed_exs = array("jpg", "jpeg", "png"); 

    if (in_array($img_ex_lc, $allowed_exs)) {
        $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
        $img_upload_path = 'image/'.$new_img_name;
        move_uploaded_file($tmp_name, $img_upload_path);
    }

    // $query = "INSERT INTO studentInfo(name,email,mobile,) VALUES ('$name','$email','$mobile','$password','$hob','$gender','$file')";
    $query = "INSERT INTO user(names,email,mobile,pass,hobbies,gender,photo) VALUES ('$name','$email','$mobile','$password','$hob','$gender','$new_img_name')";
    // echo $query;
    $data = mysqli_query($con,$query);
    if($data){
        echo "Data Uploaded";
        header("Location: index.php");
    }
    else{
        echo "Use Different Email";
    }

}


?>