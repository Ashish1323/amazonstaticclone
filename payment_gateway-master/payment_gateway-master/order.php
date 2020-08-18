<?php 

if(isset($_GET['id']) && $_GET['id'] == 0){

  //  $prd_name = "Jeans Mens #100";
	$price = 100;

	// Price calculation with tax and fee
	//$fee = 3 +($price*.02);
	//$tax = $fee * .15;
	$prd_price = $1700;	

	
 } 
 	else if(isset($_GET['id']) && $_GET['id'] == 1){
   // $prd_name = "T Shirt Mens #101";
   	//$price = 200;

	// Price calculation with tax and fee
	//$fee = 3 +($price*.02);
	//$tax = $fee * .15;
	$prd_price = $1599;	
 } 
  else if(isset($_GET['id']) && $_GET['id'] == 2){
   // $prd_name = "T Shirt Mens #101";
   	//$price = 200;

	// Price calculation with tax and fee
	//$fee = 3 +($price*.02);
	//$tax = $fee * .15;
	$prd_price = $1389;	
 } 
 else if(isset($_GET['id']) && $_GET['id'] == 3){
   // $prd_name = "T Shirt Mens #101";
   	//$price = 200;

	// Price calculation with tax and fee
	//$fee = 3 +($price*.02);
	//$tax = $fee * .15;
	$prd_price = $2499;	
 } 
 else if(isset($_GET['id']) && $_GET['id'] == 4){
   // $prd_name = "T Shirt Mens #101";
   	//$price = 200;

	// Price calculation with tax and fee
	//$fee = 3 +($price*.02);
	//$tax = $fee * .15;
	$prd_price = $2999;	
 } 
 else if(isset($_GET['id']) && $_GET['id'] == 5){
   // $prd_name = "T Shirt Mens #101";
   	//$price = 200;

	// Price calculation with tax and fee
	//$fee = 3 +($price*.02);
	//$tax = $fee * .15;
	$prd_price = $1999;	
 } 
 else if(isset($_GET['id']) && $_GET['id'] == 6){
   // $prd_name = "T Shirt Mens #101";
   	//$price = 200;

	// Price calculation with tax and fee
	//$fee = 3 +($price*.02);
	//$tax = $fee * .15;
	$prd_price = $2289;	
 } 
 else if(isset($_GET['id']) && $_GET['id'] == 7){
   // $prd_name = "T Shirt Mens #101";
   	//$price = 200;

	// Price calculation with tax and fee
	//$fee = 3 +($price*.02);
	//$tax = $fee * .15;
	$prd_price = $2899;	
 } 
 else if(isset($_GET['id']) && $_GET['id'] == 8){
   // $prd_name = "T Shirt Mens #101";
   	//$price = 200;

	// Price calculation with tax and fee
	//$fee = 3 +($price*.02);
	//$tax = $fee * .15;
	$prd_price = $2189;	
 } 
 else if(isset($_GET['id']) && $_GET['id'] == 9){
   // $prd_name = "T Shirt Mens #101";
   	//$price = 200;

	// Price calculation with tax and fee
	//$fee = 3 +($price*.02);
	//$tax = $fee * .15;
	$prd_price = $2599;	
 } 
 else if(isset($_GET['id']) && $_GET['id'] == 10){
   // $prd_name = "T Shirt Mens #101";
   	//$price = 200;

	// Price calculation with tax and fee
	//$fee = 3 +($price*.02);
	//$tax = $fee * .15;
	$prd_price = $999;	
 } 
 else if(isset($_GET['id']) && $_GET['id'] == 11){
   // $prd_name = "T Shirt Mens #101";
   	//$price = 200;

	// Price calculation with tax and fee
	//$fee = 3 +($price*.02);
	//$tax = $fee * .15;
	$prd_price = $599;	
 } 
 	 else {
 	echo "No such a prodcut to purchase :(";
 	exit();
 }

 ?>





<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
	<form action="pay.php" method="POST" accept-charset="utf-8">

		<input type="submit" class="btn btn-success btn-lg" value="Click here to Pay Rs:<?php echo $prd_price; ?> ">

		 </form>
		</div>

</body>
</html>