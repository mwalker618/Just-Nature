<?
session_start();

include("mysql_connect.php");

if(isset($_POST['submit']) && (!isset($_SESSION['logged_in']))) {

	$select_query = "SELECT * FROM jn_users"; // query to select all users/passwords
	$select_result = $mysqli->query($select_query);
	if($mysqli->error) {
		print "Select query error!  Message: ".$mysqli->error;
	}

	while($row = $select_result->fetch_object()) {
		/* Use password_verify to check the stored hash with the entered password */
		if ((($_POST['username']) == ($row->username)) && (password_verify($_POST['password'], $row->password))) { // check if user input = a record in the database
			$_SESSION['logged_in'] = true;
			$_SESSION['logged_in_user'] = $row->username;
			$_SESSION['logged_in_user_id'] = $row->userID;
			$_SESSION['logged_in_user_access'] = $row->accessLevel;
			$_SESSION['logged_in_user_first_name'] = $row->firstName;
			$_SESSION['logged_in_user_last_name'] = $row->lastName;
		} else {
			// do nothing
		}
	}
}

if (isset($_SESSION['logged_in'])) {
	header("Location: home.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Just Nature Sign In - John Panayiotou</title>

  <!-- CSS  -->
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet"/>
  <link href="css/style.css" type="text/css" rel="stylesheet"/>
  
</head>
<body>

  <?php include_once("template_header.php");?>
  
  <main>
	
  <div class="container">
  
	<!--<div class="section center-align">        
		<a id="logo-container" href="home.php" class="brand-logo"><img class="responsive-img" src="img/logoS.png" alt="mock logo" /></a>  
	</div>-->
	
    <div class="section">
		<div class="row">
			<div class="col s12 m8 offset-m2">
			  <div class="card">
				<h3 class="center-align">Sign In</h3>
				<div class="center-align">
					<div class="divider"></div>
					<form class="col s12 topmarg3" id='signinForm' action="<? print $_SERVER['PHP_SELF']; ?>" method="post">
						<div class="row center-align">
							<div class="input-field col s10 offset-s1 orange-text text-darken-3">
								<i class="mdi-action-account-circle prefix"></i>
								<input id="username" name="username" type="text" class="validate">
								<label for="username">Username</label>
								<label for="username"></label>
							</div>
							<div class="input-field col s10 offset-s1 orange-text text-darken-3">
								<i class="mdi-action-lock-open prefix"></i>
								<input id="password" name="password" type="password" class="validate">
								<label for="password">Password</label>
							</div>
							<div class="input-field col s10 offset-s1 orange-text text-darken-3">
								<input type="checkbox" class="green" id="filled-in-box" checked="checked">
								<label for="filled-in-box">Remember me next time</label>
							</div> 
						</div>
						<div class="row center-align">
							<a href="home.php" class="btn btn-flat white modal-close">Cancel</a>
							<!-- <a href="#" class="waves-effect waves-white green darken-3 btn btn-flat white-text">Sign In</a> -->
							<button class="btn btn-flat white-text waves-effect waves-light green darken-3" type="submit" name="submit">Submit
							</button>
						</div>
						<div class="divider"></div>
					</form>	
					<div class="row">
						<div class="col s12">
							<p class="larger">New to Just Nature?</p>
							<p><a href="sign_up.php" class="waves-effect waves-white green darken-3 btn btn-flat white-text">Create an Account</a></p>
						</div>
					</div>
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
  <script src="js/jquery.validate.js"></script>


  </body>
</html>
