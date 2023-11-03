<?php
    require_once('connect.php');

    if(isset($_POST['submit'])){
        if($conn){
            $username = $_POST['username'];
            $gender = $_POST['gender'];
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $email = $_POST['email'];
            $contact = $_POST['contactnum'];
            $picture = $_POST['picture']; // added for OE5
            $address = $_POST['address'];
            $bdate = $_POST['bday'];
            $password = $_POST['pass'];
            $cpassword = $_POST['cpass'];

            $query = "insert into users_tbl2(firstname, lastname, email, picture, birthdate, gender, contactno, address, username, password, cpassword, regs_date)
            value('$fname', '$lname', '$email', '$picture', '$bdate',  '$gender', '$contact', '$address', '$username', '$password', '$cpassword', NOW())";

            $result = mysqli_query($conn,$query);

            if($result){
                echo '<script type="text/Javascript">';
                echo 'alert("Succesfully Registered!");';
                echo '</script>'; ?>
                    <script type ="text/Javascript">
                    window.location='login.html';
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