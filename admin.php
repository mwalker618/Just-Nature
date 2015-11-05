<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Just Nature Admin - John Panayiotou</title>

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
					<div class="divider"></div>
						<h3 class="header orange-text text-darken-3">Admin</h3>
					<div class="divider"></div>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
				  <ul class="tabs">
					<li class="tab col s3"><a href="#manageProducts">Manage Products</a></li>
					<li class="tab col s3"><a href="#overview">Overview</a></li>
				  </ul>
				</div>
				<div id="manageProducts" class="col s12">
					 <div class="row">
						<form class="col s12">
							 <table class="bordered responsive-table">
								<thead>
								  <tr>
									  <th data-field="id">Name</th>
									  <th data-field="name">Description</th>
									  <th data-field="price">Category</th>
									  <th data-field="id">Subcategory</th>
									  <th data-field="name">SKU</th>
									  <th data-field="price">Cost</th>
									  <th data-field="price">Price</th>
									  <th data-field="price">Weight</th>
									  <th data-field="price">Edit</th>
									  <th data-field="price">Delete</th>
								  </tr>
								</thead>

								<tbody>
								  <tr>
									<td>Deez nuts</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lobortis nibh vestibulum.</td>
									<td>Snacks</td>
									<td>Nuts & Seeds</td>
									<td>123456</td>
									<td>$0.59</td>
									<td>1.99</td>
									<td>6 OZ</td>
									<td><a class="btn-floating waves-effect waves-light orange darken-3"><i class="mdi-action-autorenew"></i></a></td>
									<td><a class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
								  </tr>
								  <tr>
									<td>Deez nuts</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lobortis nibh vestibulum.</td>
									<td>Snacks</td>
									<td>Nuts & Seeds</td>
									<td>123456</td>
									<td>$0.59</td>
									<td>1.99</td>
									<td>6 OZ</td>
									<td><a class="btn-floating waves-effect waves-light orange darken-3"><i class="mdi-action-autorenew"></i></a></td>
									<td><a class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
								  </tr>
								  <tr>
									<td>Deez nuts</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
									<td>Snacks</td>
									<td>Nuts & Seeds</td>
									<td>123456</td>
									<td>$0.59</td>
									<td>1.99</td>
									<td>6 OZ</td>
									<td><a class="btn-floating waves-effect waves-light orange darken-3"><i class="mdi-action-autorenew"></i></a></td>
									<td><a class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
								  </tr>
								  <tr>
									<td>Deez nuts</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lobortis nibh vestibulum, tempor metus iaculis, pulvinar velit.</td>
									<td>Snacks</td>
									<td>Nuts & Seeds</td>
									<td>123456</td>
									<td>$0.59</td>
									<td>1.99</td>
									<td>6 OZ</td>
									<td><a class="btn-floating waves-effect waves-light orange darken-3"><i class="mdi-action-autorenew"></i></a></td>
									<td><a class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
								  </tr>
								  <tr>
									<td>Deez nuts</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lobortis nibh vestibulum, tempor metus iaculis.</td>
									<td>Snacks</td>
									<td>Nuts & Seeds</td>
									<td>123456</td>
									<td>$0.59</td>
									<td>1.99</td>
									<td>6 OZ</td>
									<td><a class="btn-floating waves-effect waves-light orange darken-3"><i class="mdi-action-autorenew"></i></a></td>
									<td><a class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
								  </tr>
								  <tr>
									<td>Deez nuts</td>
									<td>Lorem ipsum dolor sit amet.</td>
									<td>Snacks</td>
									<td>Nuts & Seeds</td>
									<td>123456</td>
									<td>$0.59</td>
									<td>1.99</td>
									<td>6 OZ</td>
									<td><a class="btn-floating waves-effect waves-light orange darken-3"><i class="mdi-action-autorenew"></i></a></td>
									<td><a class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
								  </tr>
								  <tr>
									<td>Deez nuts</td>
									<td>Lorem ipsum dolor sit amet, consectetur. </td>
									<td>Snacks</td>
									<td>Nuts & Seeds</td>
									<td>123456</td>
									<td>$0.59</td>
									<td>1.99</td>
									<td>6 OZ</td>
									<td><a class="btn-floating waves-effect waves-light orange darken-3"><i class="mdi-action-autorenew"></i></a></td>
									<td><a class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
								  </tr>
								  <tr>
									<td>Deez nuts</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lobortis nibh vestibulum.</td>
									<td>Snacks</td>
									<td>Nuts & Seeds</td>
									<td>123456</td>
									<td>$0.59</td>
									<td>1.99</td>
									<td>6 OZ</td>
									<td><a class="btn-floating waves-effect waves-light orange darken-3"><i class="mdi-action-autorenew"></i></a></td>
									<td><a class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
								  </tr>
								</tbody>
							  </table>						
						</form>
					 </div>
					 <div class="row">
						<div class="col s12">
							<a class="displayForm waves-effect waves-light btn-large orange darken-3">Add a Product</a>
						</div>
					</div>
					<div class="row none showForm">
						<div class="card">
							<div class="card-content">
								<form class="col s12">
								  <div class="row">
									<div class="input-field col s12 m6">
									  <input id="productName" type="text" class="validate">
									  <label for="productName">Product Name</label>
									</div>
								  </div>
								  <div class="row">
									<div class="input-field col s12 m6">
									  <textarea id="productDescription" class="materialize-textarea" placeholder="Product description"></textarea>
									  <label for="productDescription">Description</label>
									</div>
								  </div>
								  <div class="row">
									<div class="input-field col s12 m6">
									  <input placeholder="2.99" type="text" id="productPrice" class="validate">
									  <label for="productPrice">Price</label>
									</div>
								  </div>
								  <div class="row">
								   <div class="input-field col s12 m6">
									   <div class="file-field input-field">
										  <div class="btn orange darken-3">
											<span>Add Image</span>
											<input type="file">
										  </div>
										  <div class="file-path-wrapper">
											<input class="file-path validate" type="text">
										  </div>
										</div>
									</div>
								  </div>
								  <div class="row">
									  <div class="input-field col s6 m4">
										<select class="browser-default">
										  <option value="" disabled selected>Category</option>
										  <option value="nutsAndSeeds">Nuts & Seeds</option>
										  <option value="driedFruit">Dried Fruit</option>
										   <option value="bars">Bars</option>
										  <option value="smoothies">Smoothies</option>
										  <option value="juice">Juice</option>
										  <option value="tea">Flavored Water</option>			
										</select>
									  </div>
								  </div>
								  <div class="row">
									<div class="col s12">
										<button class="btn waves-effect waves-light orange darken-3" type="submit" name="action">Submit
										<i class="material-icons right">send</i>
										</button>
									</div>
								  </div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div id="overview" class="col s12">
					
					<div class="row">
						<div class="col s12 m6">
							<h4 class="header orange-text text-darken-3">Sales</h4>
							<ul class="larger">
								<li><p>User Accounts:<span class="bold"> 100</span></p></li>
								<li><p>Total Orders:<span class="bold"> 233</span></p></li>
								<li><p>Total Sales:<span class="bold"> $1,029</span></p></li>
							</ul>
						</div>
						<div class="col s12 m6">
							<h4 class="header orange-text text-darken-3">Products</h4>
							<ul class="larger">
								<li><p>Number of Products:<span class="bold"> 60</span></p></li>
								<li><p>Best Selling Product:<span class="bold"> Cajun Blend</span></p></li>
							</ul>
						</div>
					</div>
					
				
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
