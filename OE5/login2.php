<?php
session_start();
    require_once('connect.php');

    if(isset($_POST['submit'])) {
        if($conn){
            //Initializing Variables
            $username = $_POST['username'];
            $password = $_POST['password'];

            //SQL insertion query
            $query = "SELECT * FROM users_tbl2 WHERE username='".$username."' and password='".$password."'";
            $result = mysqli_query($conn, $query);

            $row = mysqli_fetch_array($result);
            if(mysqli_num_rows($result) == 1) {
                $_SESSION['logged_in'] = true;
                $_SESSION['id'];
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['lastname'] = $row['lastname'];

                echo '<script type="text/JavaScript">';
                echo 'alert("Successfully logged-in!");';
                echo '</script>'; 
                ?>
                <script type ="text/Javascript">
                    window.location='admin_dashboard.php'; //redirect to admin_dashboard.php
                </script>
                <?php

            }else{
                //Alert message script
                echo '<script type="text/JavaScript">';
                echo 'alert("Invalid credentials, try again!");';
                echo '</script>'; 
                ?>
                <script type ="text/Javascript">
                    window.location='login.html'; //redirect to login.html
                </script>
                <?php
            }
            mysqli_close($conn);
        }
        else {
            die('Connection Failed: '.mysqli_connect_error());
        }
    }
?>