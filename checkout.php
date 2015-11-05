<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Just Nature Checkout - John Panayiotou</title>

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
						<h3 class="header orange-text text-darken-3">Checkout</h3>
					<div class="divider"></div>
				</div>
			</div>
					<!--<div class="row">
						<div class="col s12">
						  <div class="card green darken-3">
							<div class="card-content white-text">
							  <span class="card-title">Shipping Address</span>
							   <ul>
								  <li class="">Bob Bob</li>
								  <li class="">4561 Bobba Road, Alabaster, KY 32142</li>
								  <li class="">Phone: 000-000-0000</li>
							   </ul>
							</div>
							<div class="card-action row white-text">
								  <a href="" class="waves-effect waves-light btn orange darken-3 white-text right">Change</a>
							</div>
						  </div>
						</div>
					
						<div class="col s12">
						  <div class="card green darken-3">
							<div class="card-content white-text">
							  <span class="card-title">Payment method</span>
							   <ul>
								  <li class="">Card information</li>
								  <li class="">Billing Address</li>
							   </ul>
							</div>
							<div class="card-action row white-text">
								  <a href="" class="waves-effect waves-light btn orange darken-3 white-text right">Change</a>
							</div>
						  </div>
						</div>					
						<div class="col s12">
							  <div class="card green darken-3">
								<div class="card-content white-text">
								  <span class="card-title">Order Summary</span>
								   <ul>
									  <li>Items:</li>
									  <li>Shipping & handling:</li>
									  <li>Total before tax:</li>
									  <li>Tax:</li>
								   </ul>
								   <p>Order Total:</p>
								</div>
								<div class="card-action row white-text">
									  <a href="" class="waves-effect waves-light btn-large orange darken-3 white-text right">Place Order</a>
								</div>
							  </div>
						</div>
					</div>-->
					
			<!-- Guest view -->
			<div class="row">
						<div class="col s12 l6">
							<div class="card">
								<div class="card-content">
									<h4 class="header orange-text text-darken-3">Shipping Address</h4>
									<form>
									  <div class="row">
										<div class="input-field col l6 s12">
										  <input id="firstName" type="text" class="validate">
										  <label for="firstName">First Name:</label>
										</div>
										<div class="input-field col l6 s12">
										  <input id="lastName" type="text" class="validate">
										  <label for="lastName">Last Name:</label>
										</div>
									  </div>
									  <div class="row">
										<div class="input-field col s12">
										  <input id="addressInput" type="text" class="validate">
										  <label for="addressInput">Address:</label>
										</div>
									  </div>
									  <div class="row">
										<div class="input-field col s12">
										  <input id="city" type="text" class="validate">
										  <label for="city">City:</label>
										</div>
									  </div>
									  <div class="row">
										<div class="input-field col s12">
										  <input id="zip" type="text" class="validate">
										  <label for="zip">ZIP:</label>
										</div>
									  </div>
									  <div class="row">
										<div class="input-field col s12">
										  <input id="country" type="text" class="validate">
										  <label for="country">Country:</label>
										</div>
									  </div>
									  
									</form>
								</div>
							</div>
						</div>
		
				
					
						<div class="col s12 l6">
							<div class="card">
								<div class="card-content">
									<h4 class="header orange-text text-darken-3">Payment Method</h4>
										<div class="row">
											<p class='filterBoxes'>
											  <input name="checkoutToggler" type="radio" id="card" value="1" />
											  <label for="card">Credit or Debit card</label>
											</p>
											<p class='filterBoxes'>
											  <input name="checkoutToggler" type="radio" id="paypal" value="2" />
											  <label for="paypal">Login with Paypal</label>
											</p>											
										</div>
										<form action="#">
											  <div class="row none toHide" id="form-1">
												 <div class="row">
													<div class="input-field col s12">
													  <input id="first_name" type="text" class="validate">
													  <label for="first_name">Card Number:</label>
													</div>
												  </div>
												  <div class="row">
													<div class="input-field col s12">
													  <input id="cardName" type="text" class="validate">
													  <label for="cardName">Name on card:</label>
													</div>
												  </div>
												  <div class="row">
													<div class="input-field col s12">
													  <label for="expirationDate">Expiration Date:</label>
													  <input id='expirationDate' type="text" class="datepicker">
													</div>
												  </div>
											  </div>
										</form>
										<form action="#">
											  <div class="row none toHide" id="form-2">
												<div class="input-field col s12 orange-text text-darken-3">
													<i class="mdi-action-account-circle prefix"></i>
													<input id="username" type="text" class="validate">
													<label for="username">Username</label>
												</div>
												<div class="input-field col s12 orange-text text-darken-3">
													<i class="mdi-action-lock-open prefix"></i>
													<input id="password" type="password" class="validate">
													<label for="password">Password</label>
												</div>
												<div class="col s12">
													<button class="right btn waves-effect waves-light green darken-3" type="submit" name="action">Log in</button>
												</div>
											 </div>
										</form>
								</div>
							</div>							
						</div>
			</div>
			<div class="divider"></div>
			<div class="row topmarg3">
				<div class="col s12 l6">
					<div class="card">
						<div class="card-content">
							<h4 class="green-text text-darken-3">Review Items</h4>
							<div class="row">
								<div class="col l3 s3">
									<span><img src="img/chia.jpg" alt="" class="img-responsive cartImg"></span>
								</div>
								<div class="col l4 s4">
									<span>Title of product</span>
								</div>
								<div class="col l2 s2">
									<span class='right'>$2.49</span>
								</div>
								<div class="col l3 s3">
									<ul class='right qtydropdown'>
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
							</div>
						</div>  
				    </div>
				</div>
				<div class="col s12 l6 right">
							  <div class="card">
								<div class="card-content">
								  <h4 class="green-text text-darken-3">Order Summary</h4>
								   <ul class='larger'>
									  <li>Items: <span class='right'>$28.19</span></li>
									  <li>Shipping: <span class='right'>$0.00</span></li>
									  <li>Total before tax: <span class='right'>$28.19</span></li>
									  <li>Tax: <span class='right'>$1.83</span></li>
								   </ul>
								   <p>Order total: <span class='right bold'>$30.02</span></p>
								</div>
								<div class="card-action row white-text">
									  <a href="" class="larger waves-effect waves-light btn-large orange darken-3 white-text right">Place Order</a>
								</div>
							  </div>
						</div>
			
			</div>
			<!-- Guest view -->
			
			<!-- Customer view -->
				<!--<div class="row">
						<div class="col s12 l6">
						  <div class="card">
							<div class="card-content">
							   <h4 class="header orange-text text-darken-3">Shipping Address</h4>
							   <ul class='larger'>
								  <li class="">Bob Bob</li>
								  <li class="">4561 Bobba Road, Alabaster, KY 32142</li>
								  <li class="">Phone: 000-000-0000</li>
							   </ul>
							</div>
							<div class="card-action row">
								  <a href="client.php" class="waves-effect waves-light btn orange darken-3 white-text right">Change</a>
							</div>
						  </div>
						</div>
					
						<div class="col s12 l6">
						  <div class="card">
							<div class="card-content">
							   <h4 class="header orange-text text-darken-3">Payment Method</h4>
							   <ul>
								  <li class="">Card information</li>
								  <li class="">Billing Address</li>
							   </ul>
							</div>
							<div class="card-action row">
								  <a href="client.php" class="waves-effect waves-light btn orange darken-3 white-text right">Change</a>
							</div>
						  </div>
						</div>
					</div> -->
					<!-- END customer view -->
		
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
