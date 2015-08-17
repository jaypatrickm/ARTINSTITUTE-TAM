<?php
 	//session_start();
	include("../includes/functions.php");
$error = ''; //initialize $error var to empty string

if (array_key_exists('login', $_POST)) {
	//start the session
	session_start();
	
	$userName = trim($_POST['username']); //removes any whitespace
	//$password = sha1($username.trim($_POST['pwd'])); // removes any whitespace and passes password to the salting function sha1() and uses the username as the salt
	
	$password = trim($_POST['pwd']);
	//page to redirect to once successful login made
	$redirect = "admin.php";
	require_once("../includes/authenticate.php");
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
      
       <h1>TAM Admin</h1>
       <div id="wrap">
       Here admin can add, update, and/or delete events.<br>
       Please login in to continue.<br><br>
       <a href="../index.php">Or return to the main site here.</a>
       </div>
        <div id="loginWrap"> <h2>Login</h2>
            <?php
			if (isset($error)) {
				echo "<p>$error</p>";
			}
		
			?>
            <div class="login">
            <form id="login" name="login" method="post" action="">
            	<p>
                	<label for="name">Name:</label><br>
                    <input type="text" name="username" id="username" size="30"/>
                </p>
                <p>
                	<label for="textfield">Password:</label><br>
                    <input type="password" name="pwd" id="pwd" size="30"/>
                </p>
                <p>
                	<input type="submit" name="login" id="login" value="Login" class="logButton"/>
                </p>
                    
          </form></div></div>
    </div>
<!--    <div class="vid">
    <iframe width="450" height="253" src="http://www.youtube.com/embed/RNpzvr1bJf0" frameborder="0" allowfullscreen></iframe>
    </div>-->
    <?php include("../includes/footerAdmin.php");?>

</div> <!--end container-->
</body>
</html>