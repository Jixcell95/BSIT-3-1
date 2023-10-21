<?php
    require_once('connect.php');

    if(isset($_POST['submit'])) {
        if($conn){
            //Initializing Variables
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $email = $_POST['email'];
            $bdate = $_POST['birthdate'];
            $gender = $_POST['gender'];
            $contact = $_POST['contactno'];
            $address = $_POST['address'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];

            //SQL insertion query
            $query = "insert into users_tbl2 (firstname,lastname,email,birthdate,gender,contactno,address,username,password,cpassword,regs_date) value('$fname','$lname','$email','$bdate','$gender','$contact','$address','$username','$password','$cpassword',NOW())";

            $result = mysqli_query($conn,$query);

            //Alert message script
            if($result) {
                echo '<script type="text/JavaScript">';
                echo 'alert("Successfully Registered!");';
                echo '</script>'; ?>
                <script type ="text/Javascript">
                    window.location='admin_dashboard.php'; //redirect to admin_dashboard.php
                </script>
            <?php
            }
            else {
                $err[] = 'Registration failed...'.mysqli_error($conn);
            }
            mysqli_close($conn);
        }
        else {
            die('Connection Failed: '.mysqli_connect_error());
        }
    }
?>