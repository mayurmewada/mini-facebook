<?php

    include 'conn.php';
    if(isset($_POST['done'])){
        $id = $_GET['id'];
        $message = $_POST['message'];
        $q = "UPDATE `feed` SET `id`='$id',`message`='$message' WHERE id = $id";
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
  <a class="navbar-brand" href="timeline.php">Facebook</a>
  
  </div>
</nav>

<div class = "container">
        <div class = "col-lg-12">
            <br>
            <h1 class = "text-dark text-center"> Edit Post </h1>
            <br>
    <div class = "col-lg-6 m-auto">
        <form method = "post">
            <div class = "card">
                <br>
                <label> Edit: </label>

                <?php
    include 'conn.php';
        $id = $_GET['id'];
        $q = "select * from feed where id='$id'";
        $query = mysqli_query($con,$q);
        while($res = mysqli_fetch_array($query)){
?>
                <input type = "text" name = "message" class = "form-control" value = '<?php echo $res['message']; ?>'> <br>
                <?php
        }
?>

                <p class="d-flex justify-content-end">
                    <!-- <button class = "btn btn-success edit" type = "submit" name = "done" style= "width: 7rem"> Confirm Edit </button> -->
                    <button type="submit" class="fadeIn fourth btn btn-primary text-white" name="done">Confirm Edit</button>
                </p>
            </div>
        <form>
    </div>
    </div>
    </div>
</body>
</html>