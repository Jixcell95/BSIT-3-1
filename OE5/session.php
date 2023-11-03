<?php
    include('connect.php');

    session_start();
    
    $id = $_SESSION['id'];
    $fname = $_SESSION['firstname'];
    $lname = $_SESSION['lastname'];
    $session = $_SESSION['logged_in'];

    //aggregate SQL quer
    $query = mysqli_query($conn, "select id, count(id) as user_count from users_tbl2");
    $view = mysqli_fetch_array($query);
    $user_count = $view["user_count"];

    //query for the Image
    $image_query = mysqli_query($conn, "select * from users_tbl2 where id = '$id'");
?>
