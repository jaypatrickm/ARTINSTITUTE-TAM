<?php
	require_once("../includes/check_password.php");
	
	//validate the form!
	$userNameMinChars = 6;
	$errors = array();
	
	if (strlen($userName) < $userNameMinChars) {
	  $errors[] = "Username must be at least $userNameMinChars characters.";
	}
	
	if (strlen($firstName) == 0) {
	  $errors[] = "Please enter a first name.";
	}
	
	if (strlen($lastName) == 0) {
	  $errors[] = "Please enter a last name.";
	}
	
	if (preg_match('/\s/', $userName)) {
	  $errors[] = 'Username should not contain spaces.';
	}
	
	//create a new checkPwd object, and call various related functions.
	//this is based on David Powers' code from 2nd edition of PHP solutions.
	
	$checkPwd = new checkPassword($password, 6);
	$checkPwd->requireMixedCase();
	$checkPwd->requireNumbers(1);
	//$checkPwd->requireSymbols();
	$passwordOK = $checkPwd->check();
	
	if (!$passwordOK) {
	  $errors = array_merge($errors, $checkPwd->getErrors());
	}
	
	if ($password != $conf_password) {
	  $errors[] = "Your passwords don't match.";
	}
	
	if (!$errors) { //no errors found, registration can be inserted to DB
	  //echo"yay no errors, let's process that info now! <br />"; //for troubleshooting only
	  
	  $conn = dbConnect('admin'); //connect to the db, will need to write to DB so use admin user!
	  
	  //create a salt using the current timestamp
	  $salt = time();
	  
	  //echo "salt is: $salt <br />"; //for troubleshooting
	  
	  //encrypt the password and salt
	  
	  $userPwd = sha1($password.$salt);
	  //echo "encryped pwd is: $userPwd <br />"; //for troubleshooting
	  
	  //prepare the SQL statement to insert user info into database
	  //because this info comes from a form, we will use a prepared statement to do this
	  
	  $sql = 'INSERT into reg_users (userName, firstName, lastName, salt, pwd)
	  		  VALUES (?, ?, ?, ?, ?)';
	  
	  $stmt = $conn->stmt_init();
	 	  
	  $stmt = $conn->prepare($sql);
	  
	  //bind parameters and insert into database
	  $stmt->bind_param('sssis', $userName, $firstName, $lastName, $salt, $userPwd);
	  
	  $stmt->execute();
	  
	  //checking to make sure that the userName hasn't already been used, if not then they
	  //are registered and can login.  If already used, then have to choose another.
	  //Remember, we set up the db so that userName had to be unique!
	  
		if($stmt->affected_rows == 1) {
			  $success = "<p><strong>$userName has been registered!  You may <a href=\"index.php\">login</a> now.</strong></p>";
		} elseif ($stmt->errno == 1062) { //this is the error number assigned by mySWL when a field is 
										  //marked as being unique, and when a new record is inserted
										  //that is the same as an existing record
			  $errors[] = "$userName is already in use.  Sorry, you'll have to choose another.";							
		} else { 
			  echo $stmt->errno;
			  $errors[] = "Sorry, there was a problem with the database.  Try again later.";
		}
	  
	  	  
	}