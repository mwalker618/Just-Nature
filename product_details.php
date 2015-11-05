<?php

require "mysql_connect.php";

$current_category = $_GET['category'];
$current_id = $_GET['product'];

//Products Query
$products_query = "SELECT productID, productName, brand, description, productCategory, sku, stock, cost, price, image, weight, dateAdded
			  FROM products";

$products_result = $mysqli->query($products_query);

if (!$products_result) die("Unable to access the database");

$similar_products_query = "SELECT productID, productName, brand, description, productCategory, sku, stock, cost, price, image, weight, dateAdded
			  FROM products
			  WHERE productCategory = '$current_category' AND productID != '$current_id'
			  ORDER BY rand()
			  LIMIT 3";

$similar_products_result = $mysqli->query($similar_products_query);

if (!$similar_products_result) die("Unable to access the database");


//Initialize counters
$similar_products_count = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Just Nature Product Details - John Panayiotou</title>

  <!-- CSS  -->
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet"/>
  <link href="css/style.css" type="text/css" rel="stylesheet"/>
  
</head>
<body>
		

	 <?php include_once("template_header.php");?>
   
    <main>
	
	
	
	<div class="container">
		
		<div class="divider"></div>
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Category</a></li>
				<li class="current"><a href="#">Product</a></li>
			</ol>
		<div class="divider"></div>
		
		<div class="section">
				<div class="row">
				<?php while($row = $products_result->fetch_assoc()) {
					if ($row['productID'] == $_GET['product']) { ?>
					<div class="col s12 m12 l6">
						<img class="responsive-img materialboxed" src="<? print $row['image']; ?>" alt="<? print $row['productName']; ?>">
					</div>
					<div class="col s12 m12 l6">
						<h2 class='green-text text-darken-3'><? print $row['productName']; ?></h2>
						<span><i class="material-icons">stars stars stars stars stars</i></span>
						<div class="row">
							<div class="col s12 m6">
								<p>$<? print $row['price']; ?></p>
							</div>
							<div class="col s12 m6">
								 <form class="col s8">
									<div class="row">
									  <div class="col s12">
										<select class="browser-default">
										  <option value="" disabled selected>Quantity</option>
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
									  </div>
									</div>
								  </form>
							</div>
							
						
						</div>
						

						<div class="divider"></div>
						<p><? print $row['description']; ?></p>
						<a href="#" class="waves-effect waves-light btn orange darken-3 white-text">Add to Cart</a>
					</div>
				</div>			
			</div>
			<? } } ?>
		 <div class="divider"></div>
		
	<div class="section">
		<div class="row">
			<div class="col s12">
				<h4 class='green-text text-darken-3'>Similar Items</h4>
			</div>
		</div>
		<?php while(($row = $similar_products_result->fetch_assoc()) && ($similar_products_count < 4)) {
			if($similar_products_count == 1) { ?>
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
							<a href="#" class="waves-effect waves-light btn orange darken-3 white-text">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<? if($similar_products_count == 3) { ?>
				</div>
			<? } $similar_products_count++;  if ($similar_products_count > 3) { $similar_products_count = 1; }
		} ?>
	</div>
	
	<div class="divider"></div>
	
	<div class="section">
	
		<div class="row">
			<div class="col s12 l4">
				<h4 class='green-text text-darken-3'>Customer Reviews</h4>
				<span><i class="material-icons">stars stars stars stars</i></span>
				<p>47 Reviews</p>
			</div>
			<div class="col s12">
				<a class="displayForm topmarg1 waves-effect waves-light btn green darken-3 white-text">Write a review</a>
			</div>
		</div>
				
				<div class="row none showForm">
					 <div class="card">
					<div class="card-content">
						<form class="col s12">
						  <div class="row">
							<div class="input-field col s6 l4">
							  <input placeholder="Your name" id="first_name" type="text" class="validate">
							  <label for="first_name">Name</label>
							  <span><i class="material-icons">stars stars stars stars</i></span>
							</div>
						  </div>
						  <div class="row">
							<div class="input-field col s12">
							  <textarea placeholder="Write your review here" id="textarea1" class="materialize-textarea"></textarea>
							  <label for="textarea1">Review</label>
							</div>
							  <button class="btn waves-effect waves-light green darken-3" type="submit" name="action">Submit
							  </button>
						  </div>
						</form>
					  </div>
					</div>
			    </div>
				
        <div class="row">
			<!--Review block-->
			<div class="col s12 m6 topmarg1">
				<div class="col s3 m4 l3">
					<img src="img/nature3.jpg" class="responsive-img circle">
					<ul>
						<li class='reviewInfo'></i>bob bob</li>
						<li class='reviewInfo'></i>05 OCT 2015</li>
					</ul>
				</div>
				<div class="col s9 m8 l9">
					<blockquote>
						<p class="grey-text text-darken-3">
							Salvia typewriter Carles, XOXO kitsch PBR&B 90's flannel kogi try-hard fap taxidermy forage Kickstarter. Wolf cliche flexitarian, 8-bit VHS viral Kickstarter drinking vinegar health goth. You probably haven't heard of them tousled tofu, cronut mlkshk flexitarian mixtape bespoke Pinterest cred hashtag selfies Carles. Bushwick Odd Future 8-bit distillery. 3 wolf moon salvia pop-up, bicycle rights quinoa brunch beard paleo Intelligentsia slow-carb Echo Park. Helvetica High Life iPhone Godard, Schlitz taxidermy post-ironic direct trade sartorial American Apparel wayfarers Kickstarter. Schlitz viral fap ethical, biodiesel banjo four dollar toast.
						</p>
						<div class="divider"></div>
					</blockquote>
				</div>
			</div>
			<!--END Review block-->
			<!--Review block-->
			<div class="col s12 m6 topmarg1">
				<div class="col s3 m4 l3">
					<img src="img/nature3.jpg" class="responsive-img circle">
					<ul>
						<li class='reviewInfo'></i>bob bob</li>
						<li class='reviewInfo'></i>05 OCT 2015</li>
					</ul>
				</div>
				<div class="col s9 m8 l9">
					<blockquote>
						<p class="grey-text text-darken-3">
							Salvia typewriter Carles, XOXO kitsch PBR&B 90's flannel kogi try-hard fap taxidermy forage Kickstarter. Wolf cliche flexitarian, 8-bit VHS viral Kickstarter drinking vinegar health goth. You probably haven't heard of them tousled tofu, cronut mlkshk flexitarian mixtape bespoke Pinterest cred hashtag selfies Carles. Bushwick Odd Future 8-bit distillery. 3 wolf moon salvia pop-up, bicycle rights quinoa brunch beard paleo Intelligentsia slow-carb Echo Park. Helvetica High Life iPhone Godard, Schlitz taxidermy post-ironic direct trade sartorial American Apparel wayfarers Kickstarter. Schlitz viral fap ethical, biodiesel banjo four dollar toast.
						</p>
						<div class="divider"></div>
					</blockquote>
				</div>
			</div>
			<!--END Review block-->
			<!--Review block-->
			<div class="col s12 m6 topmarg1">
				<div class="col s12 m4 l3">
					<img src="img/nature3.jpg" class="responsive-img circle">
					<ul>
						<li class='reviewInfo'></i>bob bob</li>
						<li class='reviewInfo'></i>05 OCT 2015</li>
					</ul>
				</div>
				<div class="col s9 m8 l9">
					<blockquote>
						<p class="grey-text text-darken-3">
							Salvia typewriter Carles, XOXO kitsch PBR&B 90's flannel kogi try-hard fap taxidermy forage Kickstarter. Wolf cliche flexitarian, 8-bit VHS viral Kickstarter drinking vinegar health goth. You probably haven't heard of them tousled tofu, cronut mlkshk flexitarian mixtape bespoke Pinterest cred hashtag selfies Carles. Bushwick Odd Future 8-bit distillery. 3 wolf moon salvia pop-up, bicycle rights quinoa brunch beard paleo Intelligentsia slow-carb Echo Park. Helvetica High Life iPhone Godard, Schlitz taxidermy post-ironic direct trade sartorial American Apparel wayfarers Kickstarter. Schlitz viral fap ethical, biodiesel banjo four dollar toast.
						</p>
						<div class="divider"></div>
					</blockquote>
				</div>
			</div>
			<!--END Review block-->
			
		</div>
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
