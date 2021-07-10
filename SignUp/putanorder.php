<?php
	session_start();
	$uname= $_SESSION["Username"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V3</title>
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
			<div class="wrap-contact3">
				<form class="contact3-form validate-form" method="POST" enctype="multipart/form-data">
					<div class="wrap-input3 input3-select">
						
							<select class="selection-2" id="stock" name="stock">
							   <option >Choose a Stock Among Nifty 50 </option>
								<option value="adaniports">Adani Ports</option>
								<option value="asianpaint">Asian Paint</option>
								<option value="axisbank">Axis Bank</option>
								<option value="bajajauto">Bajaj Auto</option>
								<option value="bajajfinsv">Bajaj Finserv</option>
								<option value="bajfinance">Bajaj Finance</option>
								<option value="bhartiartl">Bharti Airtel</option>
								<option value="bpcl">BPCL</option>
								<option value="britannia">Britannia</option>
								<option value="cipla">Cipla</option>
								<option value="coalindia">Coal India</option>
								<option value="divislab">Divis Lab</option>
								<option value="drreddy">DRREDDY</option>
								<option value="eichermot">Eicher Motors</option>
								<option value="gail">GAIL</option>
								<option value="grasim">Grasim</option>
								<option value="hcltech">HCL Tech</option>
								<option value="hdfc">HDFC</option>
								<option value="hdfcbank">HDFC Bank</option>
								<option value="hdfclife">HDFC Life</option>
								<option value="heromotoco">Hero Moto Corp</option>
								<option value="hindalco">Hindalco</option>
								<option value="hindunilvr">Hindustan Uniliver</option>
								<option value="icicibank">ICICI Bank</option>
								<option value="indusindbk">Indusind Bank</option>
								<option value="infy">Infosys</option>
								<option value="ioc">IOC</option>
								<option value="itc">ITC</option>
								<option value="jswsteel">JSW Steel</option>
								<option value="kotakbank">Kotak Bank</option>
								<option value="lt">L&T</option>
								<option value="mahindraandmahindra">M&M</option>
								<option value="maruti">Maruti</option>
								<option value="nestleind">Nestle India</option>
								<option value="ntpc">NTPC</option>
								<option value="ongc">ONGC</option>
								<option value="powergrid">Powergrid</option>
								<option value="reliance">Reliance</option>
								<option value="sbin">SBIN</option>
								<option value="sbilife">SBI Life</option>
								<option value="shreecem">Shree Cement</option>
								<option value="sunpharma">Sun Pharma</option>
								<option value="tatamotors">TATA Motors</option>
								<option value="tatasteel">TATA Steel</option>
								<option value="tcs">TCS</option>
								<option value="techmahindra">Tech Mahindra</option>
								<option value="titan">Titan</option>
								<option value="ultracemco">UltraTech Cement</option>
								<option value="upl">UPL</option>
								<option value="wipro">Wipro</option>

							</select>
							
						</div>
						<span class="focus-input3"></span>
						
						<div class="wrap-input3 input3-select">
							<div>
								<select class="selection-2" name="tradetype">
									<option>Trade Type</option>
									<option value="buy">Buy</option>
									<option value="sell">Sell</option>									
								</select>
							</div>
							<span class="focus-input3"></span>
						</div>
					<div class="wrap-input3 validate-input" data-validate="Name is required">
						<input class="input3" type="text" name="price" id="price" placeholder="Price">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Quantity required to be filled">
						<input class="input3" type="text" name="qty" id="qty" placeholder="Quantity">
						<span class="focus-input3"></span>
					</div>

					<div class="container-contact3-form-btn">
					<input type="submit" name="Submit" value="Submit" class="contact3-form-btn">

					</div>
				</form>
			
	
			</div>
	</center>



	



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="PutAnOrder/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="PutAnOrder/vendor/bootstrap/js/popper.js"></script>
	<script src="PutAnOrder/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="PutAnOrder/vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="PutAnOrder/js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<br><br>
<br>

</body>
</html>
