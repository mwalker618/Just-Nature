<?php
//MEGAN'S CODE HERE
session_start();

require "mysql_connect.php";



$id = $_GET['id'];


//testing for now
//once works use 
//array_push($_SESSION['cart'], $id); 
$_SESSION['cart'] = array($id);
foreach ($_SESSION['cart'] as $value) {
	//grab all data for each id saved in the cart
	$sql = mysql_query("SELECT * FROM products WHERE productID='$value'");
	//count output 

	while($row = mysql_fetch_array($sql)){ 
			 $productName = $row["productName"];
			 $price = $row["price"];
			 $image = $row["image"];
			 $stock = $row["stock"];
			 $category = $row["productCategory"];
			 $description = $row["description"];
			 $cart .= '					<div class="row topmarg3">
						<div class="col l3 s3">
							<span><img src="' . $image . '"  class="circle img-responsive cartImg" alt="' . $productName . '"></span>
						</div>
						<div class="col l4 s4">
							<span class="cartTxt">' . $productName . '</span>
						</div>
						<div class="col l2 s2">
							<span class="right cartTxt">$' . $price . '</span>
						</div>
						<div class="col l3 s3">
								<ul class="right">
									<select class="browser-default">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
								</ul>
						</div>
						<a class="topmarg3 right btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a>
					</div>';
    }
 
	
}



	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Just Nature Cart - John Panayiotou</title>

  <!-- CSS  -->
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet"/>
  <link href="css/style.css" type="text/css" rel="stylesheet"/>
  
</head>
<body>
		

	 <?php include_once("template_header.php");?>
   
    <main>
	
  
	<div class="section">
	  <div class="container">
			<div class="row">
				<div class="col s12">
						<h3 class="header orange-text text-darken-3">Shopping Cart</h3>
					<div class="divider"></div>
				</div>
			</div>
	 
	   
	   
		<form action="#" method="get">			
			<div class="col s12">
					<div class="row">
						<div class='row green-text text-darken-3 cartLabel'>
								<!-- <div class="col l3 s3">
										<span>Image</span>
									</div> 
									<div class="col l4 s4">
										<span>Name</span>
									</div> -->
									<div class="col l2 offset-l7 s2 offset-s7">
										<span class='right'>Price</span>
									</div>
									<div class="col l3 s3">
										<span class='right'>QTY</span>
									</div>
							
						</div>
					</div>
                    <!-- MEGAN COMMENTED OUT
					<div class="row topmarg3">
						<div class="col l3 s3">
							<span><img src="img/chia.jpg" alt="" class="circle img-responsive cartImg"></span>
						</div>
						<div class="col l4 s4">
							<span class='cartTxt'>Title of product</span>
						</div>
						<div class="col l2 s2">
							<span class='right cartTxt'>$2.49</span>
						</div>
						<div class="col l3 s3">
								<ul class='right'>
									<select class="browser-default">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
								</ul>
						</div>
						<a class="topmarg3 right btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a>				
						 
			</div>
                    -->
                    
                    <?php echo $cart ?>
			</div>
			
			<div class="divider"></div>
			
			<div class="row topmarg3">
						<div class="col l3 s3">
							<span><img src="img/chia.jpg" alt="" class="circle img-responsive cartImg"></span>
						</div>
						<div class="col l4 s4">
							<span class='cartTxt'>Title of product</span>
						</div>
						<div class="col l2 s2">
							<span class='right cartTxt'>$2.49</span>
						</div>
						<div class="col l3 s3">
								<ul class='right'>
									<select class="browser-default">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
								</ul>
						</div>
						<a class="topmarg3 right btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a>				
						 
			</div>
			
		
			
			
			
			
			
			
			 <div class="row">
			    <div class="col s12 m4 offset-m8">
					<p class="header right-align"><strong>Sub Total</strong> $9.99</p>
					<h4 class="header right-align orange-text text-darken-3"><strong>Total</strong> $9.99</h4>
				</div>
			 </div>
			 <div class="row">
				<div class="col s12 m4 offset-m8">
				  <a href="checkout.php" class="waves-effect waves-light btn-large orange darken-3 white-text right">Proceed to Checkout</a>
				</div>
        	 </div>	
		
		</form>
		</div>
	</div>
	  
	
</main>
 
<?php include_once("template_footer.php");?>	

	
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
	

  </body>
</html>

<?php
/* $mysqli->close(); */
?>