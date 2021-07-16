<?php
    //session_start();

    $con = mysqli_connect("localhost" , "root");
    if ($con) {
        echo "Connection Sucessful";
    } else {
        echo "No Connection found";
    }

    mysqli_select_db($con , 'blogpost');

    $name = $_POST['user'];
    $password = $_POST['password'];
    $email = $_POST['email'];


    $q = " select * from users where name = '$name' && password = '$password' && email = '$email'";

    $result = mysqli_query($con , $q);

    $num = mysqli_num_rows($result);

    if ($num === 1) {
        echo "User Already exist";
    } else {
        $qy = "insert into users(name , password, email) values ('$name' , '$password','$email')";
        mysqli_query($con , $qy);
        header('location:login.php');
    }
?> 