<?php
session_start();

require "mysql_connect.php"; 

//Featured Products Query
$products_query = "SELECT productID, productName, brand, description, productCategory, sku, stock, cost, price, image, weight, dateAdded
		FROM products
		WHERE productID = '1' OR productID = '2' OR productID = '3'";
		
$products_result = $mysqli->query($products_query);


if (!$products_result) die("Unable to access the database");

//New Products Query
$new_products_query = "SELECT productID, productName, brand, description, productCategory, sku, stock, cost, price, image, weight, dateAdded
		FROM products
		ORDER BY dateAdded DESC
		LIMIT 3";

$new_products_result = $mysqli->query($new_products_query);

if (!$products_result) die("Unable to access the database");

//Drinks Query
$drinks_query = "SELECT productID, productName, brand, description, productCategory, sku, stock, cost, price, image, weight, dateAdded
		FROM products
		WHERE productCategory = 'water' OR productCategory = 'smoothies' OR productCategory = 'juice'
		ORDER BY productID DESC
		LIMIT 3";

$drinks_result = $mysqli->query($drinks_query);

if (!$drinks_result) die("Unable to access the database");

//Bars Query
$bars_query = "SELECT productID, productName, brand, description, productCategory, sku, stock, cost, price, image, weight, dateAdded
		FROM products
		WHERE productCategory = 'bars'
		ORDER BY productID DESC
		LIMIT 3";

$bars_result = $mysqli->query($bars_query);

if (!$bars_result) die("Unable to access the database");

//Snacks Query
$snacks_query = "SELECT productID, productName, brand, description, productCategory, sku, stock, cost, price, image, weight, dateAdded
		FROM products
		WHERE productCategory = 'dried fruit' OR productCategory = 'nuts'
		ORDER BY productID DESC
		LIMIT 3";

$snacks_result = $mysqli->query($snacks_query);

if (!$snacks_result) die("Unable to access the database");

//Initialize counters
$products_count = 1;
$new_products_count = 1;
$drinks_count = 1;
$bars_count = 1;
$snacks_count = 1;
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Just Nature Home - John Panayiotou</title>

  <!-- CSS  -->
  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet"/>
    <link href="css/style.css" type="text/css" rel="stylesheet"/>
  
</head>
<body>
	
	<?php include_once("template_header.php");?>
   
<main>
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/smoothies.jpg" alt=""> 
        <div class="caption center-align">
          <h3>Smoothies</h3>
          <h5 class="light grey-text text-lighten-3">Just fresh</h5>
		  <a href="catalog.php" class="waves-effect waves-light btn-large orange darken-3">Shop Now</a>
        </div>
      </li>
      <li>
        <img src="img/nature2.jpg" alt=""> 
        <div class="caption left-align">
          <h3>Dried Fruit</h3>
          <h5 class="light grey-text text-lighten-3">Just delicious</h5>
		  <a href="catalog.php" class="waves-effect waves-light btn-large orange darken-3">Shop Now</a>
        </div>
      </li>
      <li>
        <img src="img/nature1.jpg" alt=""> 
        <div class="caption right-align">
          <h3>Bars</h3>
          <h5 class="light grey-text text-lighten-3">Just energy</h5>
		  <a href="catalog.php" class="waves-effect waves-light btn-large orange darken-3">Shop Now</a>
        </div>
      </li>
    </ul>
  </div> 
   
  <div class="container">
  

  <div class="section toppad3">
	  <div class="row">
		<div class="col s12">
		  <ul class="tabs">
			<li class="tab col s6"><a href="#hotProd">Hot Products</a></li>
			<li class="tab col s6"><a href="#newProd">New Products</a></li>
		  </ul>
		</div>
		<div id="hotProd">
		<?php while(($row = $products_result->fetch_assoc()) && ($products_count < 4)) {
			if($products_count == 1) { ?>
			<div class="row">
			<? } ?>
				<div class="col s12 m4">
					 <div class="card hoverable">
						 <a href="product_details.php">
							<div class="card-image waves-effect waves-block waves-green">
							  <img src="<? print $row['image']; ?>" alt="<? print $row['productName']; ?>">
							</div>
							<div class="product-name-fix card-content orange-text text-darken-3">
								<p><? print $row['productName']; ?></p>
							</div>
						</a>
						<div class="card-action row">
							<div class="col s12">
								<span class="left"><i class="material-icons">stars stars stars stars stars</i></span>
								<span class="right">$<? print $row['price']; ?></span>
							</div>
							<div class="col s12">
                            <!-- MEGAN'S CODE HERE	
                            	updated link to cart
                                added for all "Add to Cart" links -->	
								<a href="cart.php?id=<? print $row['productID']; ?>" class="waves-effect waves-light btn orange darken-3 white-text">Add to Cart</a>
							</div>
						</div>
				 	</div>
				</div>
			<? if($products_count == 3) { ?>
			</div>
			<? } $products_count++;  if ($products_count > 3) { $products_count = 1; }
		} ?>
		</div>
		<div id="newProd">
			<?php while(($row = $new_products_result->fetch_assoc()) && ($new_products_count < 4)) {
				if($new_products_count == 1) { ?>
					<div class="row">
				<? } ?>
				<div class="col s12 m4">
					<div class="card hoverable">
						<a href="product_details.php">
							<div class="card-image waves-effect waves-block waves-green">
								<img src="<? print $row['image']; ?>" alt="<? print $row['productName']; ?>">
							</div>
							<div class="product-name-fix card-content orange-text text-darken-3">
								<p><? print $row['productName']; ?></p>
							</div>
						</a>
						<div class="card-action row">
							<div class="col s12">
								<span class="left"><i class="material-icons">stars stars stars stars stars</i></span>
								<span class="right">$<? print $row['price']; ?></span>
							</div>
							<div class="col s12">
                            <!-- MEGAN'S CODE HERE	
                            	updated link to cart
                                added for all "Add to Cart" links -->	
								<a href="cart.php?id=<? print $row['productID']; ?>" class="waves-effect waves-light btn orange darken-3 white-text">Add to Cart</a>
							</div>
						</div>
					</div>
				</div>
				<? if($new_products_count == 3) { ?>
					</div>
				<? } $new_products_count++;  if ($new_products_count > 3) { $new_products_count = 1; }
			} ?>
		</div>
	  </div>
  </div>      

	<div class="divider"></div>

	<div class="section">
		<div class="row">
			<div class="col s12">
				<h3 class='green-text text-darken-3'>Drinks</h3>
			</div>
		</div>
		<?php while(($row = $drinks_result->fetch_assoc()) && ($drinks_count < 4)) {
			if($drinks_count == 1) { ?>
				<div class="row">
			<? } ?>
			<div class="col s12 m4">
				<div class="card hoverable">
					<a href="product_details.php">
						<div class="card-image waves-effect waves-block waves-green">
							<img src="<? print $row['image']; ?>" alt="<? print $row['productName']; ?>">
						</div>
						<div class="product-name-fix card-content orange-text text-darken-3">
							<p><? print $row['productName']; ?></p>
						</div>
					</a>
					<div class="card-action row">
						<div class="col s12">
							<span class="left"><i class="material-icons">stars stars stars stars stars</i></span>
							<span class="right">$<? print $row['price']; ?></span>
						</div>
						<div class="col s12">
                        <!-- MEGAN'S CODE HERE	
                            	updated link to cart
                                added for all "Add to Cart" links -->	
							<a href="cart.php?id=<? print $row['productID']; ?>" class="waves-effect waves-light btn orange darken-3 white-text">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<? if($drinks_count == 3) { ?>
				</div>
			<? } $drinks_count++;  if ($drinks_count > 3) { $drinks_count = 1; }
		} ?>
		<ul class="pagination">
			<li class="waves-effect right"><a href="catalog.php?category=drinks" class="green-text text-darken-3">See more</a></li>
		</ul>
		</div>
	</div>

	<div class="divider"></div>
	
	<div class="section">	
		<div class="row">
			<div class="col s12">
				<h3 class='green-text text-darken-3'>Bars</h3>
			</div>
		</div>
		<?php while(($row = $bars_result->fetch_assoc()) && ($bars_count < 4)) {
			if($bars_count == 1) { ?>
				<div class="row">
			<? } ?>
			<div class="col s12 m4">
				<div class="card hoverable">
					<a href="product_details.php">
						<div class="card-image waves-effect waves-block waves-green">
							<img src="<? print $row['image']; ?>" alt="<? print $row['productName']; ?>">
						</div>
						<div class="product-name-fix card-content orange-text text-darken-3">
							<p><? print $row['productName']; ?></p>
						</div>
					</a>
					<div class="card-action row">
						<div class="col s12">
							<span class="left"><i class="material-icons">stars stars stars stars stars</i></span>
							<span class="right">$<? print $row['price']; ?></span>
						</div>
						<div class="col s12">
                        <!-- MEGAN'S CODE HERE	
                            	updated link to cart
                                added for all "Add to Cart" links -->	
							<a href="cart.php?id=<? print $row['productID']; ?>" class="waves-effect waves-light btn orange darken-3 white-text">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<? if($bars_count == 3) { ?>
				</div>
			<? } $bars_count++;  if ($bars_count > 3) { $bars_count = 1; }
		} ?>
		<ul class="pagination">
			<li class="waves-effect right"><a href="catalog.php?category=bars" class="green-text text-darken-3">See more</a></li>
		</ul>
		</div>		
	</div>

	<div class="divider"></div>

	<div class="section">
		<div class="row">
			<div class="col s12">
				<h3 class='green-text text-darken-3'>Snacks</h3>
			</div>
		</div>
		<!-- While loop and conditionals allow for row divs to be added around every three products -->
		<?php while(($row = $snacks_result->fetch_assoc()) && ($snacks_count < 4)) {
			if($bars_count == 1) { ?>
				<div class="row">
			<? } ?>
			<div class="col s12 m4">
				<div class="card hoverable">
					<a href="product_details.php">
						<div class="card-image waves-effect waves-block waves-green">
							<img src="<? print $row['image']; ?>" alt="<? print $row['productName']; ?>">
						</div>
						<div class="product-name-fix card-content orange-text text-darken-3">
							<p><? print $row['productName']; ?></p>
						</div>
					</a>
					<div class="card-action row">
						<div class="col s12">
							<span class="left"><i class="material-icons">stars stars stars stars stars</i></span>
							<span class="right">$<? print $row['price']; ?></span>
						</div>
						<div class="col s12">
                        <!-- MEGAN'S CODE HERE	
                            	updated link to cart
                                added for all "Add to Cart" links -->	
							<a href="cart.php?id=<? print $row['productID']; ?>" class="waves-effect waves-light btn orange darken-3 white-text">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<? if($snacks_count == 3) { ?>
				</div>
			<? } $snacks_count++;  if ($snacks_count > 3) { $snacks_count = 1; }
		} ?>
		<ul class="pagination">
			<li class="waves-effect right"><a href="catalog.php?category=snacks" class="green-text text-darken-3">See more</a></li>
		</ul>
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
/*$mysqli->close();*/
?>
