<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
        <a class="nav-link" href="post.php">Post <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <?php 
    if(!isset($_SESSION['username'])){
        echo "<a class='nav-link' href='login.php'>Log In</a>";
    }else{
        echo "<a class='nav-link' href='logout.php'>Log out</a>";
    }
    ?>
  </div>
  </div>
</nav>

<div class = "container">
    <div class = "col-lg-12">
        <br>
        <h1 class = "text-dark text-center"> Profile </h1>
        <br>

<?php
    include 'conn.php';
        $q = "select * from feed order by id desc";
        $query = mysqli_query($con,$q);
        while($res = mysqli_fetch_array($query)){
?>

<?php 
if(isset($_SESSION['username'])){
    if($res['username'] == $_SESSION['username']){
        echo "<div class='justify-content-center'>";
        echo "<div class='card'>";
        echo "<div class='p-3'>";
        echo "<h3 class='mb-0 mt-2 font-italic'>".$res['message']."</h3>";
        echo "<footer class='pt-4 mt-4 border-top'>";
        echo "<ul class='list-inline m-0 d-flex justify-content-end'>";
        echo "<li class='list-inline-item'><a href = 'edit.php?id=".$res['id']."' class='btn btn-warning'> <i class='fa fa-pen text-white'></i> </a></li>";
        echo "<li class='list-inline-item'><a href = 'delete.php?id=".$res['id']."' class='btn btn-danger'> <i class='fa fa-trash'></i> </a></li>";
        echo "</ul>";
        echo "</footer>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
}
?>

<?php
        }
?>
            
        </div>
    </div>
</body>
</html>