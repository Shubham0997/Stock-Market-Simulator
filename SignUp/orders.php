<?php
	session_start();
?>
<?php $uname=$_SESSION["Username"]; ?>


<?php 
			
			$ser="localhost";
			$usr="root";
			$pss="";
			$dbs="stockmarketsimulator";
			$cnction=mysqli_connect($ser,$usr,$pss,$dbs);
			
			$qry="select * from $uname";

			$exe=mysqli_query($cnction,$qry);
			if($exe){?>
<html>
<head>
	<title>Portfolio</title>
	<link rel="stylesheet" type="text/css" href="../css/home_stylesheet.css">

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="PutAnOrder/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="PutAnOrder/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="PutAnOrder/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="PutAnOrder/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="PutAnOrder/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="PutAnOrder/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="PutAnOrder/css/util.css">
	<link rel="stylesheet" type="text/css" href="PutAnOrder/css/main.css">
<!--===============================================================================================-->








</head>
<body>


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
								</a>	
							</tr>
						</thead>



	
					<tbody>

					<?php	while($w=mysqli_fetch_array($exe)){?>	

					<tr class='row100'>
						

					<td class='column100 column1' data-column='column1'><?php echo $w['Symbol']; ?></td>
					<td class='column100 column2' data-column='column2'><?php echo $w['BuyPrice'];?></td>
					<td class='column100 column3' data-column='column3'><?php echo $w['SellPrice'];?></td>
					<td class='column100 column4' data-column='column4'><?php echo $w['Quantity'];?></td>
					<td class='column100 column5' data-column='column5'><?php echo $w['BuyStatus'];?></td>
					<td class='column100 column6' data-column='column6'><?php echo $w['SellStatus'];?></td>
								
						</tr>
						<?php


}

}	
?>
					

					</tbody>
					</table>
				</div>
			</div>

	


						
	
					
					

			

			
		
						
							
		



	

<!--===============================================================================================-->	
	<script src="nifty50/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="nifty50/vendor/bootstrap/js/popper.js"></script>
	<script src="nifty50/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="nifty50/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="nifty50/s/main.js"></script>
	

<hr>
			</div></div></div>
		</center>
	</body>
    </html>