<?php
    session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

$username = $_SESSION['username'];
include 'conn.php';
if(isset($_POST['done'])){
    $message = $_POST['message'];
    $q = "INSERT INTO `feed`(`message`,`username`) VALUES ('$message','$username')";
    $query = mysqli_query($con,$q);
    header('location:timeline.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'includes/head.php'; ?>
</head>
<body>
<nav class="navbar navbar-expand-lg text-white bg-primary">
<div class="container">
  <a class="navbar-brand" href="#">Facebook</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <?php 
    if(!isset($_SESSION['username'])){
        echo "<a class='nav-link' href='login.php'>Log In</a>";
    }else{
        echo "<a class='nav-link' href='profile.php'>".$_SESSION['username']."</a>";
    }
    ?>
      </li>
    </ul>
    
  </div>
  </div>
</nav>


    <div class = "container">
        <div class = "col-lg-12">
            <br>
            <h1 class = "text-dark text-center"> Post </h1>
            <br>
            <div class = "col-lg-9 m-auto">
                <form method="post">
                    <div class = "card">
                        <label>Write Something.....</label>
                        <textarea type = "text" name = "message" class = "form-control" rows = "4"> </textarea>
                        <!-- <button class = "btn btn-primary" type = "submit" name = "done" style="width : 2rem"> Post </button> -->
                        <button type="submit" class="fadeIn fourth btn btn-primary text-white" name="done">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>