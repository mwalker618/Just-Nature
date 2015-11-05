<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Just Nature Contact - John Panayiotou</title>

  <!-- CSS  -->
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet"/>
  <link href="css/style.css" type="text/css" rel="stylesheet"/>
  
</head>
<body>
		
 <?php include_once("template_header.php");?>
   
 <main>
 
  <div class="container">
    <div class="row">
        <div class="col m10 offset-m1 s12">
            <h3 class="center-align green-text text-darken-3">Contact Us</h3>
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col m6 s12">
                            <input id="first_name" type="text" class="validate">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col m6 s12">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi-content-mail prefix"></i>
                            <input id="email" type="email" class="validate" required>
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                          <textarea id="message" class="materialize-textarea"></textarea>
                          <label for="message">Message</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                          <label>How Did You Find Us?</label>
                          <br/>
                        </div>
                        <div class="input-field col m3 s6 center-align">
                          <input name="group1" type="radio" id="google" />
                          <label for="google">Google</label>
                        </div>
                        <div class="input-field col m3 s6 center-align">
                          <input name="group1" type="radio" id="customer" />
                          <label for="customer">Customer</label>
                        </div>
                        <div class="input-field col m3 s6 center-align">
                          <input name="group1" type="radio" id="other" />
                          <label for="other">Other</label>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col m12">
                         <p class="right-align"><button class="btn btn-large waves-effect waves-light green darken-3" type="button" name="action">Send Message</button></p>
                        </div>
                    </div>
                </form>
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
