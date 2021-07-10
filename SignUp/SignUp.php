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
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="Fname" id="name" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="Lname" id="name" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="Mob" id="Mob" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="Email" id="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="UserName" id="Username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="CnfPassword" id="re_password" placeholder="Repeat your password"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="Submit" name="Submit" id="Submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>


                    <?PHP
                    $servername="localhost";
                    $username="root";
                    $password="";
                    $db="stockmarketsimulator";
                    $con=mysqli_connect($servername,$username,$password,$db);
                    if(isset($_REQUEST['Submit']))
                    
                    {
                        $fn=$_POST['Fname'];
                        $ln=$_POST['Lname']; 
                      $mob=$_POST['Mob'];
                      $em=$_POST['Email'];
                      $un=$_POST['UserName'];
                      $password=$_POST['password'];
                      $CnfPass = $_REQUEST['CnfPassword'];
                  
                     $query="select * from TblUser where UserName='$un'";
                    if($result=mysqli_query($con,$query)){
                    if(mysqli_num_rows($result)>0){ echo '<script>alert("Username Already Exists")</script>';}
                    else{
                        if ($password == $CnfPass) {
                      $q= "INSERT INTO TblUser(FName,LName,EmailID, Username, Password,MobileNo,Balance) VALUES('$fn','$ln','$em', '$un', '$password','$mob',2000000);";


                      if($r=mysqli_query($con,$q)){
                        $newtbl="CREATE TABLE $un (Symbol VARCHAR(20), BuyPrice VARCHAR(20), SellPrice VARCHAR(20), Quantity Int(20),Balance VARCHAR(30) DEFAULT '2000000',BuyStatus Varchar(20),SellStatus Varchar(20), TradeType VARCHAR(5));";
                        if($x=mysqli_query($con,$newtbl)){
                            echo '<script>alert("Table Created Successfully")</script>';

                        }
                        echo '<script>alert("Account Created Successfully")</script>';
                      }else{
                        echo '<script type="text/javascript">alert("Password not match!");window.location.href = "../index.html";</script>';
                
                      }
                  
                      }
                  
                  }
                  
                  }
                  
                      
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