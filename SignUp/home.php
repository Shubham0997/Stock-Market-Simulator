<?php
	session_start();
?>
<html>
<head>

	<title>Portfolio</title>
	<link rel="stylesheet" type="text/css" href="../css/home_stylesheet.css">

	<!--Start of nav bar head part-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="NavigationBar/css/style.css">
<!--End of nav bar head part-->


<!--===============================================================================================-->

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
    $(document).ready(function(){
		 $("#div_refresh_watchlist").load("watchlist.php");
        setInterval(function() {
            $("#div_refresh_watchlist").load("watchlist.php");
        }, 1000);
    });
 
</script>

<script>
    $(document).ready(function(){
		 $("#div_refresh_orders").load("orders.php");
        setInterval(function() {
            $("#div_refresh_orders").load("orders.php");
        }, 1000);
    });
 
</script>

<script>
    $(document).ready(function(){
		 $("#div_refresh_positions").load("positions.php");
        setInterval(function() {
            $("#div_refresh_positions").load("positions.php");
        }, 1000);
    });
 
</script>

<script>
    $(document).ready(function(){
		 $("#div_refresh_putOrder").load("PutAnOrder.php");

    });
 
</script>



</head>
<body>
<?php
$uname= $_SESSION["Username"];
?>
<section class="ftco-section">
<div class="container-fluid px-md-5">
				<div class="row justify-content-between">
					<div class="col-md-8 order-md-last">

							<div class="col-md-6 text-center">
								<a class="navbar-brand" href="index.html">	<img  src="logo.png" ></a>
							</div>
					</div>
					<div class="col-md-4 d-flex">
	
					</div>
				</div>
			</div>
			<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container-fluid">
			
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			  </button>
			  <div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav m-auto">
					<li class="nav-item active"><a href="" class="nav-link">Watchlist</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Put an Order</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Orders</a></li>
				  <li class="nav-item"><a href="#" class="nav-link">Positions</a></li>
				</ul>
			  </div>
			</div>
		  </nav>
      <br>





 <div id="div_refresh_watchlist"></div>

 <hr>

 <div id="div_refresh_putOrder"></div>


<div class="php form submit">

<?PHP
$uname= $_SESSION["Username"];
 
 
                    $servername="localhost";
                    $username="root";
                    $password="";
                    $db="stockmarketsimulator";
                    $con=mysqli_connect($servername,$username,$password,$db);
            


                   

                    if(isset($_REQUEST['Submit']))
                    
                    {
                       
                    $stockname=$_POST['stock'];
                    $price=$_POST['price']; 
                      $qty=$_POST['qty'];

                      $fetchBal="Select * from tbluser Where Username='$uname'";
                      $ex=mysqli_query($con,$fetchBal);
                      if($ex){
                                while($w=mysqli_fetch_array($ex)){
                                  $ubal=$w['Balance'];

                                }

                      }

                      $tradetype=$_POST['tradetype'];



               if($tradetype=='buy'){ 

                $orderCost=$price*$qty;
                $newbal=$ubal-$orderCost;



                      $q= "INSERT INTO $uname(Symbol,BuyPrice,SellPrice,Quantity,Balance,BuyStatus,SellStatus,TradeType) VALUES('$stockname','$price','','$qty', '$newbal','Pending','','Buy');";


                      if($r=mysqli_query($con,$q)){



                        echo '<script>alert("Order Created Successfully")</script>';
                        $sql = "update tbluser SET Balance='$newbal' WHERE Username='$uname'";
                        mysqli_query($con,$sql);
                      }else{
                        echo '<script type="text/javascript">alert("Couldnt create an order");window.location.href = "../index.html";</script>';
                
                      }






                    }else{

                      $sqry="select * from $uname where Symbol='$stockname'";
                      $result=mysqli_query($con,$sqry);
                      if($result->num_rows>=1){

                        while($row=$result->fetch_assoc()){
                          $fetchqty=$row['Quantity'];
                          $status=$row['BuyStatus'];

                          if($fetchqty==$qty && $status=="Executed"){

                            $sellqry="update $uname set SellPrice='$price', SellStatus='Pending', TradeType='Sell' where BuyStatus='Executed'  AND Quantity='$qty' AND SellStatus='' ";
                           if($sellexe=mysqli_query($con,$sellqry)){
                            echo '<script>alert("Sell Order Placed")</script>';
                            break;
                          }



                          }

                          }



                     
                           
  
  

                        }else{

                          echo 'You dont have This Stock with this quantity, Please enter valid Quantity';
                        }





                      


                    }



                  }
                    ?>

 </div>
<hr>

<div id="div_refresh_orders"></div>

 <div id="div_refresh_positions"></div>

</body>
</html>