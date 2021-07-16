<?php

    include 'conn.php';
    $id = $_GET['id'];
    $q = "DELETE FROM `feed` WHERE id = $id";

    mysqli_query($con, $q);
    header('location:timeline.php');

?>