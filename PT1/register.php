<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create Student Account!</h1>
                            </div>
                            <form method="post" action="register.php" class="user">
                            <?php
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                                    $fname = ($_POST['fname']);
                                    $lname = ($_POST['lname']);
                                    $gndr = ($_POST['gndr']);
                                    $addr = ($_POST['addr']);
                                    $bdt = ($_POST['bdt']);
                                    $cntry = ($_POST['cntry']);
                                    $uname = ($_POST['uname']);
                                    $pass = ($_POST['pass']);
                                    $cpass = ($_POST['cpass']);

                                    echo "<h2>Unsanitized Input</h2>";
                                    echo "First name: " . $fname . "<br>";
                                    echo "Last name: " . $lname . "<br>";
                                    echo "Gender: " . $gndr . "<br>";
                                    echo "Address: " . $addr . "<br>";
                                    echo "Birth date: " . $bdt . "<br>";
                                    echo "Username: " . $uname . "<br>";
                                    echo "Password: " . $pass . "<br>";
                                    echo "Confirm Password: " . $cpass . "<br><br>";

                                    function clean($input) {
                                        $search = array(
                                            '@<script[^>]*?>.*?</script>@si',   // Strip out JavaScript
                                            '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
                                            '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
                                            '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
                                        );
                                        $output = preg_replace($search, '', $input);
                                        $output = htmlspecialchars($output, ENT_QUOTES, 'UTF-8'); // Convert special characters to HTML entities
                                        $output = trim($output); // Remove extra whitespace
                                        $output = stripslashes($output); // Remove backslashes
                                
                                        return $output;
                                    }

                                    $cfname = clean($_POST['fname']);
                                    $clname = clean($_POST['lname']);
                                    $cgndr = clean($_POST['gndr']);
                                    $caddr = clean($_POST['addr']);
                                    $cbdt = clean($_POST['bdt']);
                                    $ccntry = clean($_POST['cntry']);
                                    $cuname = clean($_POST['uname']);
                                    $cpass = clean($_POST['pass']);
                                    $ccpass = clean($_POST['cpass']);

                                    echo "<h2>Sanitized Input</h2>";
                                    echo "First name: " . $cfname . "<br>";
                                    echo "Last name: " . $clname . "<br>";
                                    echo "Gender: " . $cgndr . "<br>";
                                    echo "Address: " . $caddr . "<br>";
                                    echo "Birth date: " . $cbdt . "<br>";
                                    echo "Username: " . $cuname . "<br>";
                                    echo "Password: " . $cpass . "<br>";
                                    echo "Confirm Password: " . $ccpass . "<br>";
                                }
                            ?>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>