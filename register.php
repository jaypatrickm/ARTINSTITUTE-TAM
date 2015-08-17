<?php
 	//session_start();
	include("includes/functions.php");
	$conn = dbConnect('query');
	
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">


<link rel="stylesheet" href="css/style01.css" />
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/js1.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#fname')[0].focus( );
  $('#signup').validate({
   rules: {
     email: {
        required: true,
        email: true
     },
     password: {
        required: true,
        rangelength:[8,16]
     },
     confirm_password: {equalTo:'#password'},
     spam: "required"
   }, //end rules
   messages: {
      email: {
         required: "Please supply an e-mail address.",
         email: "This is not a valid email address."
       },
      password: {
        required: 'Please type a password',
        rangelength: 'Password must be between 8 and 16 characters long.'
      },
      confirm_password: {
        equalTo: 'The two passwords do not match.'
      }
   },
   errorPlacement: function(error, element) { 
       if ( element.is(":radio") || element.is(":checkbox")) {
          error.appendTo( element.parent()); 
        } else {
          error.insertAfter(element);
        } 
    } 

  }); // end validate 
}); // end ready()
</script>

<title>Tomorrow's Aeronautical Museum - Register</title>
</head>

<body>
<div id="container">

	<?php include("includes/header.php");?>
    <div id="title">
    	<img id="register_header_shift" src="images/header_register.png" alt="TAM" />
    </div>
	<div id="register_content">
    	<div id="register_shift">
    	<h1>Please fill out the information</h1>
    
    	<div id="contact_form">

          <form action="" method="post" name="signup" id="signup">
            <input type="hidden" name="recipients" value="jaypatrickm@gmail.com" />
            <input type="hidden" name="required" value="fname:Your first name, lname:Your last name, email:Your email address, method: Choose a contact method" />
            <input type="hidden" name="subject" value="TAM -- Contact" />
            <ul>
            <li>
            <div>
              <label for="fname" class="label">First Name </label>
              <input name="fname" type="text" class="required" id="fname" title="Please type your first name.">
            </div>
            <div>
              <label for="lname" class="label">Last Name </label>
              <input name="lname" type="text" class="required" id="lname" title="Please type your last name.">
            </div>
            <div>
              <label for="email" class="label">E-mail Address</label>
              <input name="email" type="text" class="required" id="email">
            </div>
            <div>
              <label for="phone" class="label">Phone</label>
              <input name="phone" type="text" id="phone">
            </div>
            <div>
              <label for="comments" class="label">Questions or Comments</label>
              <textarea name="comments" cols="15" rows="5" id="comments"></textarea>
            </div>
            </li>
            <li>
            <div>
              <label for="address1" class="label">Address 1</label>
              <input name="address1" type="text" id="address1">
            </div>
            <div>
              <label for="address2" class="label">Address 2</label>
              <input name="address2" type="text" id="address2">
            </div>
            <div>
              <label for="city" class="label">City</label>
              <input name="city" type="text" id="city">
            </div>
            <div>
              <label for="state" class="label">State</label>
              <input name="state" type="text" id="state">
            </div>
            <div>
              <label for="contact_method" class="label">Contact you by</label>
              <select name="method" id="method" class="required" title="Please choose a contact method.">
                <option value="email">Email</option>
                <option value="phone">Phone</option>
                <option value="mail">Mail</option>
              </select>
            </div>
            
        <div id="register_btn_fix">
                    <input type="image" src="images/contactbtn1.png" name="submit" id="submit" value="Submit">
            </div>
            </li>
            </ul>
          </form>
    	</div>

   </div>
    
    </div><!--end content-->
    
    <?php include("includes/footer.php");?>

</div> <!--end container-->
</body>
</html>