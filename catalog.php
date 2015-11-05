<?php
session_start();

require "mysql_connect.php";

//Set Health Preferences
if (isset($_SESSION['logged_in'])) {
	$health_preferences_query = "SELECT userID, healthPreferences
				  FROM jn_users";
	$health_preferences_result = $mysqli->query($health_preferences_query);

	while ($row = $health_preferences_result->fetch_object()) {
		if (($_SESSION['logged_in_user_id']) == ($row->userID)) {
			//Save all of the user's health preferences to a string
			$health_preferences_string = $row->healthPreferences;
			//Explode by , and implode with the surrounding SQL query strings
			$health_preferences_explode = explode(',',$health_preferences_string);
			$health_preferences_implode = implode("%' OR healthPreferences LIKE '%",$health_preferences_explode);
			$sql_health_preferences = "AND healthPreferences LIKE '%".$health_preferences_implode."%'";

			//Debug
			print "Health Preference Query: ".$sql_health_preferences."</br></br>";
		}
	}

	$total_health_preferences_query = "SELECT healthPreferences
				  FROM products";
	$total_health_preferences_result = $mysqli->query($total_health_preferences_query);

	$total_health_preferences_array = array();

	while ($row = $total_health_preferences_result->fetch_object()) {
		if ($row->healthPreferences) {
			//Create an array of all of the health preference values
			$total_health_preferences_array[] = $row->healthPreferences;
			//Because some sets contain multiple values we need to convert the array to a string and explode it back out to get single values
			$total_health_preferences_implode = implode(',',$total_health_preferences_array);
			$total_health_preferences_explode = explode(',',$total_health_preferences_implode);
			//Sort array alphabetically
			sort($total_health_preferences_explode);
			//Remove any duplicate values
			//This variable now contains a list of all of the health preferences currently entered into the products database
			$total_health_preferences = array_unique($total_health_preferences_explode);
		}
	}

}
else {
	$sql_health_preferences = "";
}

//PAGINATION
//Display no more than 12 products per page
$product_limit = 12;
//Check to see if a user has selected a page, if not then tell the query to display the first 12 products
if (!isset($_GET['page'])) {
	$product_offset = 0;
}
//If they selected a page then calculate the offset to be used in the products query
else {
	$current_page = $_GET['page'];
	$product_offset = ($current_page*$product_limit)-$product_limit;

	//Set forward and backward variables
	$prev_page = $current_page-1;
	$next_page = $current_page+1;
}
//END PAGINATION (continued below)

//Uses GET to only display the products that match the category selected by the user
if (isset($_GET['category'])) {
	if ($_GET['category'] == 'snacks') {
		//Narrow sql results string
		$sql_category = "productCategory = 'dried fruit' OR productCategory = 'nuts'";
		//This variable tells the pagination urls to only cycle through this category
		$current_category = $_GET['category'];
		//Set breadcrumb navigation variable
		$breadcrumb_category = 'Snacks';
	}
	else if ($_GET['category'] == 'drinks') {
		//Narrow sql results string
		$sql_category = "productCategory = 'water' OR productCategory = 'smoothies' OR productCategory = 'juice'";
		//This variable tells the pagination urls to only cycle through this category
		$current_category = $_GET['category'];
		//Set breadcrumb navigation variable
		$breadcrumb_category = 'Drinks';
	}
	else if ($_GET['category'] == 'bars') {
		//Narrow sql results string
		$sql_category = "productCategory = 'bars'";
		//This variable tells the pagination urls to only cycle through this category
		$current_category = $_GET['category'];
		//Set breadcrumb navigation variable
		$breadcrumb_category = 'Bars';
	}
	else if ($_GET['category'] == 'nuts') {
		//Narrow sql results string
		$sql_category = "productCategory = 'nuts'";
		//This variable tells the pagination urls to only cycle through this category
		$current_category = $_GET['category'];
		//Set breadcrumb navigation variable
		$breadcrumb_category = 'Nuts and Seeds';
	}
	else if ($_GET['category'] == 'driedfruit') {
		//Narrow sql results string
		$sql_category = "productCategory = 'dried fruit'";
		//This variable tells the pagination urls to only cycle through this category
		$current_category = $_GET['category'];
		//Set breadcrumb navigation variable
		$breadcrumb_category = 'Dried Fruit';
	}
	else if ($_GET['category'] == 'smoothies') {
		//Narrow sql results string
		$sql_category = "productCategory = 'smoothies'";
		//This variable tells the pagination urls to only cycle through this category
		$current_category = $_GET['category'];
		//Set breadcrumb navigation variable
		$breadcrumb_category = 'Smoothies';
	}
	else if ($_GET['category'] == 'juice') {
		//Narrow sql results string
		$sql_category = "productCategory = 'juice'";
		//This variable tells the pagination urls to only cycle through this category
		$current_category = $_GET['category'];
		//Set breadcrumb navigation variable
		$breadcrumb_category = 'Juice';
	}
	else if ($_GET['category'] == 'water') {
		//Narrow sql results string
		$sql_category = "productCategory = 'water'";
		//This variable tells the pagination urls to only cycle through this category
		$current_category = $_GET['category'];
		//Set breadcrumb navigation variable
		$breadcrumb_category = 'Water';
	}

	//Products Query
	$products_query = "SELECT productID, productName, brand, description, productCategory, sku, stock, cost, price, image, weight, dateAdded, healthPreferences
		FROM products
		WHERE $sql_category $sql_health_preferences
		LIMIT $product_offset,$product_limit";

	$products_result = $mysqli->query($products_query);

	if (!$products_result) die("Unable to access the database using the products query");

	//Debug
	print "Products Query: ".$products_query;


	//Pagination Query
	$page_query = "SELECT productID, productName, brand, description, productCategory, sku, stock, cost, price, image, weight, dateAdded, healthPreferences
		FROM products
		WHERE $sql_category $sql_health_preferences";

	$page_result = $mysqli->query($page_query);

	if (!$page_result) die("Unable to access the database using the pagination query");
}
else if (isset($_GET['search'])) {
	$search_string = $_GET['search'];

	//Search Query
	$products_query = "SELECT productID, productName, brand, description, productCategory, sku, stock, cost, price, image, weight, dateAdded, healthPreferences
		FROM products
		WHERE productName
		LIKE '%$search_string%'
		LIMIT $product_offset,$product_limit";

	$products_result = $mysqli->query($products_query);

	if (!$products_result) die("Unable to access the database");


	//Pagination Query
	$page_query = "SELECT productID, productName, brand, description, productCategory, sku, stock, cost, price, image, weight, dateAdded, healthPreferences
		FROM products
		WHERE productName
		LIKE '%$search_string%'";

	$page_result = $mysqli->query($page_query);

	if (!$page_result) die("Unable to access the database");
}
else {

	//Products Query
	$products_query = "SELECT productID, productName, brand, description, productCategory, sku, stock, cost, price, image, weight, dateAdded, healthPreferences
		FROM products
		LIMIT $product_offset,$product_limit";

	$products_result = $mysqli->query($products_query);

	if (!$products_result) die("Unable to access the database");


	//Pagination Query
	$page_query = "SELECT productID, productName, brand, description, productCategory, sku, stock, cost, price, image, weight, dateAdded, healthPreferences
		FROM products";

	$page_result = $mysqli->query($page_query);

	if (!$page_result) die("Unable to access the database");
}

//PAGINATION CONTINUED
//Calculate the total amount of pages needed to display 12 products on each page
$total_records = mysqli_num_rows($page_result);
$total_pages = ceil($total_records/$product_limit);
//END PAGINATION

//Initialize counters
$products_count = 1;

?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Just Nature Catalog - John Panayiotou</title>

  <!-- CSS  -->
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet"/>
  <link href="css/style.css" type="text/css" rel="stylesheet"/>
  
</head>
<body>

  <?php include_once("template_header.php");?>
   
 <main>
 
 <div class='container'>
 
 	
		
 <div class="section">
	
		
		<ol class="breadcrumb">
			<li><a href="home.php">Home</a></li>
			<li><a href="catalog.php">Catalog</a></li>
			<? if (isset($_GET['category'])) { ?>
				<li><a href="catalog.php?category=<? print $current_category; ?>"><? print $breadcrumb_category; ?></a></li>
			<? } ?>
		</ol>
		
	
	<div class="row">
		<div class="col s12">			
			<div class="divider"></div>
			<h3 class='green-text text-darken-3'><? if (isset($_GET['category'])) { print $breadcrumb_category; } else { print 'Catalog'; }?></h3>
			<div class="divider"></div>
			<ul class="right hide-on-med-and-down">
				<? if (isset($_SESSION['logged_in'])) { foreach ($total_health_preferences as $health_pref) { ?>
			   <li class='filterBoxes'>
				  <input onclick="this.form.submit()" type="checkbox" name="filter1" id="<? print $health_pref;?>" value="1" class="filled-in" <? foreach ($health_preferences_explode as $user_health_pref) { if ($user_health_pref == $health_pref) { print 'checked="checked"'; } } ?>>
				  <label for="<? print $health_pref; ?>"><? print ucwords($health_pref); ?></label>
				</li>
				<? } }?>
			</ul>
		</div>
	</div>
	 <?php while(($row = $products_result->fetch_assoc()) && ($products_count < 4)) {
		 if($products_count == 1) { ?>
			 <div class="row">
		 <? } ?>
		 <div class="col s12 m4">
			 <div class="card hoverable">
				 <a href="product_details.php?category=<? print $row['productCategory'] ?>&product=<? print $row['productID'] ?>">
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
		 <? if($products_count == 3) { ?>
			 </div>
		 <? } $products_count++;  if ($products_count > 3) { $products_count = 1; }
	 }
	 if ($total_records == 0) {
	 	print 'No results found';
	 }?>
 </div>
	
<div class="section">
	<div class="row">
		<div class="col s12">
			  <ul class="pagination right">
				  <!-- Pagination; conditionals check for the current page and print the active class -->
				  <li class="<? if (isset($_GET['page'])) { if ($_GET['page'] == '1') { print 'disabled'; }  } else { print 'disabled'; }?>"><a href="<? if (isset($_GET['page'])) { if ($current_page == '1') { print '#!'; } else if (isset($current_category)) { print 'catalog.php?category='.$current_category.'&page='.$prev_page; } else { print 'catalog.php?page='.$prev_page; } } else { print '#!'; }?>"><i class="material-icons">chevron_left</i></a></li>
				  <?
				  for($page = 1; $page <= $total_pages; $page++) { ?>
				  	<li class="<? if ($page == $_GET['page']) { print 'active '; } if ($page == '1' && !isset($_GET['page'])) { print 'active '; } ?>waves-effect"><a href="<? if ($total_records <= '12') { print '#!';} else if (isset($current_category)) { print 'catalog.php?category='.$current_category.'&page='.$page; } else { print 'catalog.php?page='.$page; } ?>" alt=""><? print $page; ?></a></li>
				  <? } ?>
				<li class="<? if (isset($_GET['page'])) { if ($total_pages == $current_page) { print 'disabled '; } } else if ($total_pages == 1) { print 'disabled';}?>"><a href="<? if (isset($_GET['page'])) { if ($total_pages == $current_page) { print '#!'; } else if (isset($current_category)) { print 'catalog.php?category='.$current_category.'&page='.$next_page; } else { print 'catalog.php?page='.$next_page; } } else { if ($total_pages == '1') { print '#!';} else { print 'catalog.php?category='.$current_category.'&page=2'; } } ?>"><i class="material-icons">chevron_right</i></a></li>
			  </ul>
		</div>
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
<?php
$mysqli->close();
?>
