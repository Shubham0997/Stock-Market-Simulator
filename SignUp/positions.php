<?php
	session_start();
?>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../css/home_stylesheet.css">
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
	<link rel="stylesheet" type="text/css" href="nifty50/rvendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="nifty50/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="nifty50/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="nifty50/css/util.css">
	<link rel="stylesheet" type="text/css" href="nifty50/css/main.css">
<!--===============================================================================================-->



</head>
<body>

<?php
$uname=$_SESSION["Username"]; ?>



	<div class="body">

		<div class="display">



			
<hr><hr>

<?php 
			
			$ser="localhost";
			$usr="root";
			$pss="";
			$dbs="stockmarketsimulator";
			$cnction=mysqli_connect($ser,$usr,$pss,$dbs);
			
			$qry="select * from $uname";

			$exe=mysqli_query($cnction,$qry);
			if($exe){
					while($w=mysqli_fetch_array($exe)){
						$smbl= $w['Symbol']; ?> &ensp; <?php
						$bprice=$w['BuyPrice'];?>&ensp; <?php
						$sprice= $w['SellPrice'];?>&ensp; <?php
						$qntity=$w['Quantity'];?>&ensp; <?php
						$blnce=$w['Balance'];?>&ensp; <?php
						$execut=$w['BuyStatus'];?><br> <?php
						if($execut="Pending"){

								 $dbstk="stock";
								 $newcnction=mysqli_connect($ser,$usr,$pss,$dbstk);

								$qrystkfetch="select * from $smbl";
								$stkexec=mysqli_query($newcnction,$qrystkfetch);
								if($stkexec){

									while($fecthprice=mysqli_fetch_array($stkexec)){

											$cmpprice= $fecthprice['Price'];
											if($bprice>=$cmpprice){
													$updstatus="Update $uname SET BuyStatus='Executed' WHERE symbol='$smbl' AND BuyPrice>='$cmpprice'";
													$updexe=mysqli_query($cnction,$updstatus);
													
											}

									}

								}





						}


					}

			}
			




				


			
			?>




<?php 
			
			$ser="localhost";
			$usr="root";
			$pss="";
			$dbs="stockmarketsimulator";
			$cnction=mysqli_connect($ser,$usr,$pss,$dbs);
			
			$qry="select * from $uname";

			$exe=mysqli_query($cnction,$qry);
			if($exe){
					while($w=mysqli_fetch_array($exe)){
						$symbol= $w['Symbol']; ?> &ensp; <?php
						$buyprice=$w['BuyPrice'];?>&ensp; <?php
						$sellprice= $w['SellPrice'];?>&ensp; <?php
						$quantity=$w['Quantity'];?>&ensp; <?php
						$balance=$w['Balance'];?>&ensp; <?php
						$buyStatus=$w['BuyStatus'];?><br> <?php
						$sellStatus=$w['SellStatus'];?><br> <?php

						if($buyStatus=="Executed" && ($sellStatus=="Pending" || $sellStatus=' ')){

								 $dbstk="stock";
								 $newcnction=mysqli_connect($ser,$usr,$pss,$dbstk);

								$qrystkfetch="select * from $smbl";
								$stkexec=mysqli_query($newcnction,$qrystkfetch);
								if($stkexec){?>

<center>
			<div class="wrap-table100">
				<div class="table100 ver6 m-b-110">
					<table data-vertable="ver6">
						<thead>
							<tr class="row100 head">
								<a href="url">
								<th class="column100 column1" data-column="column1">Symbol</th>
								<th class="column100 column2" data-column="column2">Buy Price</th>
								<th class="column100 column3" data-column="column3">Sell Price</th>
								<th class="column100 column4" data-column="column4">Quantity</th>
								<th class="column100 column5" data-column="column5">Buy Status</th>
								<th class="column100 column6" data-column="column6">Sell Status</th>
								<th class="column100 column7" data-column="column7">L.T.P</th>
								<th class="column100 column8" data-column="column8">Profit/Loss</th>
								</a>	
							</tr>
						</thead>
						<tbody>




								<?php	while($fecthprice=mysqli_fetch_array($stkexec)){




											$cmpprice= $fecthprice['Price'];


											$pl=($cmpprice-$buyprice)*$quantity;

										?>

							<tr class="row100">
								<a href="url">
								<td class="column100 column1" data-column="column1"><?php echo $symbol;?> </td>
								<td class="column100 column2" data-column="column2"><?php echo $buyprice;?></td>
								<td class="column100 column3" data-column="column3"><?php echo $sellprice;?></td>
								<td class="column100 column4" data-column="column4"><?php echo $quantity;?></td>
								<td class="column100 column5" data-column="column5"><?php echo $buyStatus;?></td>
								<td class="column100 column6" data-column="column6"><?php echo $sellStatus;?></td>
								<td class="column100 column7" data-column="column7"><?php echo $cmpprice;?></td>
								<td class="column100 column8" data-column="column8"><?php echo $pl;?></td>
								</a>
							</tr>	


									<?php		
									}
								}?>
					</tbody>
					</table>
				</div>
			</center>


											<?php if(($sellprice<=$cmpprice )&& ($sellprice!='')){


													

													$upduser="Update $uname SET SellStatus='Executed' WHERE symbol='$smbl' AND SellPrice<='$cmpprice' AND BuyStatus='Executed' AND SellStatus='Pending'";
													$updexecute=mysqli_query($cnction,$upduser);

													$qryBalanceFetch="select * from tbluser where Username='$uname'";
													$qryBalanceFetchexec=mysqli_query($cnction,$qryBalanceFetch);
													if($qryBalanceFetchexec){
														while($qrybl=mysqli_fetch_array($qryBalanceFetchexec)){
															$tbluserbalance=$w['Balance'];
														}
													
													}
													$tbluserbalance=$tbluserbalance+$pl;

													$qrybalanceUpdate="update tbluser set Balance='$tbluserbalance' where Username='$uname'";
													$qryBalanceUpdateexec=mysqli_query($cnction,$qrybalanceUpdate);
												}

								}







					}

			}
			

			
			?>


</div>
        </div></div></body></html>

