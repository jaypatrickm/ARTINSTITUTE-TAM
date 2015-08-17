<?php
	include("../includes/functions.php");
	
	//process the script only if the form has been submitted
	if (array_key_exists('register', $_POST)) {
		//process registration info entered on form, assign to variable names for easier use
		//trim any whitespace from entries
		$userName = trim($_POST['username']);
		$firstName = trim($_POST['firstname']);
		$lastName = trim($_POST['lastname']);
		$password = trim($_POST['pwd']);
		$conf_password = trim($_POST['conf_pwd']);
		
		//include the registration processing file only if form has been submitted
		require_once("../includes/register_user.php");
		
	} 


?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">


<link rel="stylesheet" href="../css/style02.css" />
<script src="js/jquery.js"></script>
<script src="js/js2.js"></script>


<title>Tomorrow's Aeronautical Museum</title>
</head>

<body>
<div id="container">

	<?php //include("../includes/headerAdmin.php");?>
    
	<div id="content">
    <img src="../images/imgStrip.jpg" alt="TAM">
			
		<?php //include("../includes/adminNav.php");?>
		
        	<h1>Register User</h1>
  
             <?php
				
				if (isset($success)){ //success variable was set
					echo "<p>$success</p>";	
				} elseif (isset($errors)  && !empty($errors)) { //errors array is set and is not empty
					echo '<h3>Some errors were detected:</h3>';
					echo '<ul>';
					//loop through errors array and display for user
					foreach ($errors as $item) {
						echo "<li>$item</li>";
					}
					echo '</ul>';
					
					//include the form so users can re-enter their info
					?>
                    <p><strong>All fields required.</strong></p>
                    <form id="register" name="register" method="post" action="">
                        <p>
                            <label for="username">Username: (at least 6 characters long)</label><br>
                            <input type="text" name="username" id="username"/>
                        </p>
                        <p>
                            <label for="firstname">First Name:</label><br>
                            <input type="text" name="firstname" id="firstname"/>
                        </p>
                        <p>
                            <label for="lastname">Last Name:</label><br>
                            <input type="text" name="lastname" id="lastname"/>
                        </p>
                        <p>
                            <label for="pwd">Password: <br />(at least 6 characters long, must include letters and numbers, and upper and lower case)</label><br>
                            <input type="password" name="pwd" id="pwd"/>
                        </p>
                        <p>
                            <label for="conf_pwd">Confirm Password:</label><br>
                            <input type="password" name="conf_pwd" id="conf_pwd"/>
                        </p>
                        <p>
                            <input type="submit" name="register" id="register" value="Register"/>
                        </p>
                    
                    </form>
                     
				<?php
                
				} else { //include the form since we are coming to page fresh
				
				?>
                  <p><strong>All fields required.</strong></p>
                  <form id="register" name="register" method="post" action="">
                        <p>
                            <label for="username">Username: (at least 6 characters long)</label><br>
                            <input type="text" name="username" id="username"/>
                        </p>
                        <p>
                            <label for="firstname">First Name:</label><br>
                            <input type="text" name="firstname" id="firstname"/>
                        </p>
                        <p>
                            <label for="lastname">Last Name:</label><br>
                            <input type="text" name="lastname" id="lastname"/>
                        </p>
                        <p>
                            <label for="pwd">Password: <br />(at least 6 characters long, must include letters and numbers, and upper and lower case)</label><br>
                            <input type="password" name="pwd" id="pwd"/>
                        </p>
                        <p>
                            <label for="conf_pwd">Confirm Password:</label><br>
                            <input type="password" name="conf_pwd" id="conf_pwd"/>
                        </p>
                        <p>
                            <input type="submit" name="register" id="register" value="Register"/>
                        </p>
                            
                </form>
                
              <?php
				} //close the else with form
			?>
                    
          </form>
            

			<!-- insert working game :) -->

		</div>
		<!-- End admin -->

		

	</div>
	<!-- End Container -->
</body>
<!-- End Body -->
</html> 