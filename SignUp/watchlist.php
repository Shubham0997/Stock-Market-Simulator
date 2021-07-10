<?php
	session_start();
?>
<html>
<head>
	<title>Portfolio</title>
	<link rel="stylesheet" type="text/css" href="../css/home_stylesheet.css">

	<!--NIFTY 50 WATCHLIST HEAD PART-->
	<title>Table V03</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link href="nifty50/fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet"> <!--load all styles -->
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="nifty50/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="nifty50/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="nifty50/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="nifty50/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="nifty50/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="nifty50/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="nifty50/css/util.css">
	<link rel="stylesheet" type="text/css" href="nifty50/css/main.css">
<!--===============================================================================================-->

<!--NIFTY 50 WATCHLIST HEAD PART END-->




</head>
<body>






<?php 
$uname=$_SESSION["Username"];
?>

<?php 
			
			$ser="localhost";
			$usr="root";
			$pss="";
			$dbs="stockmarketsimulator";
			$cnction=mysqli_connect($ser,$usr,$pss,$dbs);
			
			$qry="select * from tbluser where Username='$uname'";

			$exe=mysqli_query($cnction,$qry);
			if($exe){
					while($w=mysqli_fetch_array($exe)){
						$balanceDisplay= $w['Balance']; }
					}?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container-fluid">
			
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			  </button>
			  <div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav m-auto">
					<li class="nav-item"><a href="" class="nav-link"><h6> Welcome @<?php echo $uname; ?></h6></a></li>
					<li class="nav-item"><a href="" class="nav-link"><h6> Your Balance: ₹<?php echo $balanceDisplay; ?></h6></a></li>

				</ul>
			  </div>
			</div>
		  </nav>
		<!-- END nav -->
		<script src="SignUp/NavigationBar/js/jquery.min.js"></script>
	  <script src="SignUp/NavigationBar/js/popper.js"></script>
	  <script src="SignUp/NavigationBar/js/bootstrap.min.js"></script>
	  <script src="SignUp/NavigationBar/js/main.js"></script>
		</section>



 <!-- END nav -->


 <?php
$s="localhost";
$u="root";
$p="";
$db="stock";
$c=mysqli_connect($s,$u,$p,$db);
?>



<!-- Watchlist -->

<br><br>
	<center>
		
			<div class="wrap-table100">
				<div class="table100 ver6 m-b-110">
					<table data-vertable="ver6">
						<thead>
							<tr class="row100 head">
								<a href="url">
								<th class="column100 column1" data-column="column1">Symbol</th>
								<th class="column100 column2" data-column="column2">LTP</th>
								<th class="column100 column3" data-column="column3">Open</th>
								<th class="column100 column4" data-column="column4">High</th>
								<th class="column100 column5" data-column="column5">Low</th>
								<th class="column100 column8" data-column="column8">Charts</th>
								</a>	
							</tr>
						</thead>
						<tbody>


							<tr class="row100">
							<?php
							$q="select * from adaniports";
							$r=mysqli_query($c,$q);
							if($r){
									while($w=mysqli_fetch_array($r)){
											?>
								<a href="url">
								<td class="column100 column1" data-column="column1">Adani Ports</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3AADANIPORTS" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
							</a>
							</tr>
							
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from asianpaint";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
													?>
  
								<td class="column100 column1" data-column="column1">Asian Paint</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3AASIANPAINT" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>

							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from axisbank";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
															?>
  

								<td class="column100 column1" data-column="column1">Axis Bank</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3AAXISBANK" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from bajajauto";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
																?>
								<td class="column100 column1" data-column="column1">Bajaj Auto</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3ABAJAJ_AUTO" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from bajajfinsv";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
											?>
  								<td class="column100 column1" data-column="column1">Bajaj Finserv</td>
								  <td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3ABAJAJFINSV" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from bajfinance";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
												?>
 								<td class="column100 column1" data-column="column1">Bajaj Finance</td>
								 <td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3ABAJFINANCE" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from bhartiartl";
								$r=mysqli_query($c,$q);
								if($r){
									while($w=mysqli_fetch_array($r)){
																?>
								<td class="column100 column1" data-column="column1">Bharti Airtel</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3ABHARTIARTL" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from bpcl";
								$r=mysqli_query($c,$q);
								if($r){
								while($w=mysqli_fetch_array($r)){
														?>

								<td class="column100 column1" data-column="column1">BPCL</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3ABPCL" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from britannia";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
												?>
  								<td class="column100 column1" data-column="column1">Britannia</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3ABRITANNIA" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from cipla";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
											?>
								<td class="column100 column1" data-column="column1">Cipla</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3ACIPLA" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from coalindia";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
												?>

								<td class="column100 column1" data-column="column1">Coal India</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3ACOALINDIA" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from divislab";
								$r=mysqli_query($c,$q);
								if($r){
								while($w=mysqli_fetch_array($r)){
														?>

								<td class="column100 column1" data-column="column1">Divis Lab</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=BSE%3ADIVISLAB" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from drreddy";
								$r=mysqli_query($c,$q);
								if($r){
									while($w=mysqli_fetch_array($r)){
											?>

								<td class="column100 column1" data-column="column1">DRREDDY</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3ADRREDDY" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from eichermot";
								$r=mysqli_query($c,$q);
								if($r){
									while($w=mysqli_fetch_array($r)){
												?>

								<td class="column100 column1" data-column="column1">Eicher Motors</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3AEICHERMOT" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from gail";
								$r=mysqli_query($c,$q);
								if($r){
									while($w=mysqli_fetch_array($r)){
												?>
								<td class="column100 column1" data-column="column1">GAIL</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3AGAIL" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from grasim";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
									?>

								<td class="column100 column1" data-column="column1">Grasim</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3AGRASIM" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from hcltech";
								$r=mysqli_query($c,$q);
								if($r){
								while($w=mysqli_fetch_array($r)){
									?>
  
								<td class="column100 column1" data-column="column1">HCL Tech</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3AHCLTECH" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from hdfc";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
													?>


								<td class="column100 column1" data-column="column1">HDFC</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3AHDFC" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from hdfcbank";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
										?>

								<td class="column100 column1" data-column="column1">HDFC Bank</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3AHDFCBANK" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from hdfclife";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
												?>

								<td class="column100 column1" data-column="column1">HDFC Life</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3AHDFCLIFE" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from heromotoco";
								$r=mysqli_query($c,$q);
								if($r){
								while($w=mysqli_fetch_array($r)){
															?>
 
								<td class="column100 column1" data-column="column1">Hero Moto Corp</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3AHEROMOTOCO" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from hindalco";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
											?>


								<td class="column100 column1" data-column="column1">Hindalco</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3AHINDALCO" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from hindunilvr";
								$r=mysqli_query($c,$q);
								if($r){
								while($w=mysqli_fetch_array($r)){
										?>

								<td class="column100 column1" data-column="column1">Hindustan Uniliver</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3AHINDUNILVR" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from icicibank";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
											?>

								<td class="column100 column1" data-column="column1">ICICI Bank</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3AICICIBANK" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from indusindbk";
								$r=mysqli_query($c,$q);
								if($r){
								while($w=mysqli_fetch_array($r)){
										?>

								<td class="column100 column1" data-column="column1">Indusind Bank</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3AINDUSINDBK" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from infy";
								$r=mysqli_query($c,$q);
								if($r){
									while($w=mysqli_fetch_array($r)){
								?>


								<td class="column100 column1" data-column="column1">Infosys</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3AINFY" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from ioc";
								$r=mysqli_query($c,$q);
								if($r){
								while($w=mysqli_fetch_array($r)){
													?>

								<td class="column100 column1" data-column="column1">IOC</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3AIOC" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from itc";
								$r=mysqli_query($c,$q);
								if($r){
									while($w=mysqli_fetch_array($r)){
										?>

								<td class="column100 column1" data-column="column1">ITC</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3AITC" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from jswsteel";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
															?>

								<td class="column100 column1" data-column="column1">JSW Steel</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3AJSWSTEEL" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from kotakbank";
								$r=mysqli_query($c,$q);
								if($r){
									while($w=mysqli_fetch_array($r)){
											?>

								<td class="column100 column1" data-column="column1">Kotak Bank</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3AKOTAKBANK" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from lt";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
									?>

								<td class="column100 column1" data-column="column1">L&T</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3ALT" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">

								<?php
								$q="select * from mahindraandmahindra";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
											?>

								<td class="column100 column1" data-column="column1">M&M</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/symbols/NSE-M_M/" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from maruti";
								$r=mysqli_query($c,$q);
								if($r){
								while($w=mysqli_fetch_array($r)){
										?>

								<td class="column100 column1" data-column="column1">Maruti</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3AMARUTI" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from nestleind";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
										?>


								<td class="column100 column1" data-column="column1">Nestle India</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3ANESTLEIND" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from ntpc";
								$r=mysqli_query($c,$q);
								if($r){
									while($w=mysqli_fetch_array($r)){
										?>

								<td class="column100 column1" data-column="column1">NTPC</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3ANTPC" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from ongc";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
											?>

								<td class="column100 column1" data-column="column1">ONGC</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3AONGC" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>

							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from powergrid";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){	
										?>

								<td class="column100 column1" data-column="column1">Power Grid</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3APOWERGRID" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							
							<tr class="row100">
							<?php $q="select * from reliance";
							$r=mysqli_query($c,$q);
							if($r){
									while($w=mysqli_fetch_array($r)){
										?>
 
								<a href="url">
								<td class="column100 column1" data-column="column1">Reliance</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3ARELIANCE" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
							</a>
							</tr>

							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from sbin";
								$r=mysqli_query($c,$q);
								if($r){
									while($w=mysqli_fetch_array($r)){
										?>

								<td class="column100 column1" data-column="column1">SBIN</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3ASBIN" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from sbilife";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
													?>

								<td class="column100 column1" data-column="column1">SBI Life</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3ASBILIFE" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from shreecem";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
										?>
 
								<td class="column100 column1" data-column="column1">Shree Cement</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3ASHREECEM" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from sunpharma";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
												?>

								<td class="column100 column1" data-column="column1">Sun Pharma</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3ASUNPHARMA" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from tatamotors";
								$r=mysqli_query($c,$q);
								if($r){
									while($w=mysqli_fetch_array($r)){
											?>

								<td class="column100 column1" data-column="column1">TATA Motors</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3ATATAMOTORS" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from tatasteel";
								$r=mysqli_query($c,$q);
								if($r){
									while($w=mysqli_fetch_array($r)){
										?>

								<td class="column100 column1" data-column="column1">TATA Steel</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3ATATASTEEL" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from tcs";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
												?>
 
								<td class="column100 column1" data-column="column1">TCS</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3ATCS" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from techmahindra";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
												?>

								<td class="column100 column1" data-column="column1">Tech Mahindra</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3ATECHM" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from titan";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
										?>

								<td class="column100 column1" data-column="column1">Titan</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3ATITAN" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from ultracemco";
								$r=mysqli_query($c,$q);
								if($r){
								while($w=mysqli_fetch_array($r)){
								?>

								<td class="column100 column1" data-column="column1">UltraTech Cement</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3AULTRACEMCO" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from upl";
								$r=mysqli_query($c,$q);
								if($r){
									while($w=mysqli_fetch_array($r)){
										?>

								<td class="column100 column1" data-column="column1">UPL</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3AUPL" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							<tr class="row100">
								<a href="url">
								<?php
								$q="select * from wipro";
								$r=mysqli_query($c,$q);
								if($r){
										while($w=mysqli_fetch_array($r)){
										?>

								<td class="column100 column1" data-column="column1">Wipro</td>
								<td class="column100 column2" data-column="column2"><?php echo $w['Price'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $w['Open']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $w['High']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $w['Low'];}} ?></td>
								<td class="column100 column6" data-column="column6"> <a href="https://www.tradingview.com/chart/?symbol=NSE%3AWIPRO" target="_blank" class="button"><i class="fa fa-area-chart" style="font-size:20px"></i></a></td>
								
								
							</a>
							</tr>
							
<!--===============================================================================================-->	
<script src="nifty50/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="nifty50/vendor/bootstrap/js/popper.js"></script>
	<script src="nifty50/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="nifty50/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="jnifty50/s/main.js"></script>
						</tbody>
					</table>
				</div>
			</div>
				</center>









</body>
</html>

