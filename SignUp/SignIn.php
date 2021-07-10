<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" enctype="multipart/form-data" id="signup-form" class="signup-form">
                        <h2 class="form-title">Login To Your Account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="Username" id="Username" placeholder="Your Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="Pass" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="sel" id="Submit" class="form-submit" value="Sign In"/>
                        </div>
                    </form>


 <?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "StockMarketSimulator";

$conn = mysqli_connect($servername, $username, $password, $database);
if($conn) {
    echo "Connection Succesfull<br>";
}else {
    echo "Error in Connection<br>";
}
if(isset($_REQUEST['sel'])){
$Username = $_REQUEST['Username'];
$Pass = $_REQUEST['Pass'];

$sql = "select * FROM TblUser WHERE Username = '$Username' AND Password = '$Pass'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $Username = $row['Username'];
    $Mob = $row['MobileNo'];
    $Bal = $row['Balance'];
    session_start();
    $_SESSION["EmailID"] = "$Email";
    $_SESSION["Username"] = "$Username";
    $_SESSION["MobileNo"] = "$Mob";
    $_SESSION["Balance"] = "$Bal";
    echo '<script type="text/javascript">window.location.href = "home.php";</script>';	    
} else {	    
    echo '<script type="text/javascript">alert("Please enter correct creditential");window.location.href = "C:\xampp\htdocs\zerodha\SignUp";</script>';
}
$conn->close();
}
?>











                    <p class="loginhere">
                        Have already an account ? <a href="#" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>