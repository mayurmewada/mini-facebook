<?php
    

    $con = mysqli_connect("localhost" , "root");
    if ($con) {
        echo "Connection Sucessful";
    } else {
        echo "No Connection found";
    }

    mysqli_select_db($con , 'blogpost'); 

    $name = $_POST['user'];
    $password = $_POST['password'];

    $q = " select * from users where name = '$name' && password = '$password' ";

    $result = mysqli_query($con , $q);

    $num = mysqli_num_rows($result);

    if ($num === 1) {
        session_start();
        $_SESSION['username'] = $name;
        header('location:timeline.php');
    } else {
        header('location:login.php');
    }
?> 