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
<script src="js/js1.js"></script>


<title>Tomorrow's Aeronautical Museum - Help</title>
</head>

<body>
<div id="container">

	<?php include("includes/header.php");?>
    
    <div id="title">
    	<img id="help_header_shift" src="images/header_help.png" />
    </div>
	<div id="help_content">
  		<div id="donate" class="help_top">
        	<h1>Donate</h1>
        	<div id="help_online">
            	<h2>Give through the internet</h2>
           		<p>Choose how you would like to give; Sign-up for a monthly recurring donation or make a one-time donation of any amount below.</p>
            	<div id="help_donation_btn" class="donate_btn">
            		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="A3WS76VPBLUP2">
						<table>
							<tr><td><input type="image" id="help_btn1" src="images/helpbtn1.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
									<input type="hidden" name="on0" value=""></td></tr><tr><td><select name="os0">
                                    	<option value="Option 1">Option 1: $5.00 USD - monthly</option>
                                    	<option value="Option 2">Option 2: $10.00 USD - monthly</option>
                                    	<option value="Option 3">Option 3: $15.00 USD - monthly</option>
                                    	<option value="Option 4">Option 4: $20.00 USD - monthly</option>
                                    	<option value="Option 5">Option 5: $30.00 USD - monthly</option>
                                    	<option value="Option 6">Option 6: $50.00 USD - monthly</option>
                                    	<option value="Option 7">Option 7: $100.00 USD - monthly</option>
                                	</select>
                        	</td></tr>
						</table>
					<input type="hidden" name="currency_code" value="USD">
                	<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
            	</div>
           		<div id="help_donation_btn2" class="donate_btn">
            		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="CVT3DAYS7DG32">
						<input type="image" src="images/helpbtn2.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>   
            	</div>
            	<h6>All online donations made to Tomorrow's Aeronautical Museum are securely handled by PayPal Inc. Note: You do not need to have a PayPal account in order to donate. All major credit cards are accepted. </h6>
        	</div>
        	<div id="help_other">
        		<h2>Other ways to donate</h2>
            	<p>Mail a check written out to "Tomorrow's Aeronautical Museum" to:</p><br>
    			<h3>Tomorrow's Aeronautical Museum</h3>
				<p>961 W. Alondra Blvd.</p>
				<p>Compton, CA 90220</p><br/>
                <ul>
                	<li><p>Give Us a Call<br>(310)618-1155</p></li>
                	<li><p>Email Us<br>donate@tamuseum.org</p></li>
                </ul>
        	</div>
        </div>
        <div id="volunteer" class="help_bottom">
        	<h1>Volunteer</h1>
        	<div id="help_bottom_left">
            	<p>Volunteers are a vital part of a community’s health and well-being. Whether at a church, a boy’s and girl’s club, at a local school, or at community-based nonprofit organizations like Tomorrow’s Aeronautical Museum (TAM), people who give their time for the greater good are making those communities better places to live. This is a kind of investment that can not be accounted for in dollars, yet improves the quality of life for everyone involved.</p>
                <p>TAM has been a part of the South Los Angeles community for over ten years giving underserved youth the opportunity to learn to fly, a safe and positive place to hang out, make new friends, and a resource for tutoring and gaining marketable career skills. We have been able to offer this because of the generosity of volunteers and donors—people like you, who have a desire and commitment to do good.</p>
                <p>Exciting things are happening at TAM. We’re expanding with a vision to empower as many underserved youths as we can to reach for their dreams, whether that dream is flying high in the sky or on the ground. But, we can only do this with your help.</p>
                <p>TAM relies on volunteers year-round within the Los Angeles area for assistance in:</p>
                <p>
	•	Administration<br/>
	•	Events<br/>
	•	Tutoring<br/>
	•	Mentoring<br/>
	•	Field trips<br/>
	•	Fundraising<br/>
	•	Phone bank<br/>
	•	Newsletter production<br/>
	•	Volunteer coordination<br/>
</p><p>Do you think you can contribute in one or more of these areas? If so, apply using the form on the right. College students are welcome!</p>
            </div>
            <div id="help_bottom_right">
            	<h2>Get started here</h2>
                <a href="images/volunteerApp.pdf" alt="volunteer form" target="_blank"><img src="images/helpbtn3.png" /></a>
                <h2>Volunteers Login to update hours</h2>
                <div id="help_login">
                	 <form id="login" name="login" method="post" action="">
        			 <p>
            		 <label for="user_name">User Name</label>
                	 <input type="text"  name="user_name" id="user_name" />
            		 </p>
            		 <p>
            		 <label for="textfield">Password</label>
                	 <input type="password" name="user_password" id="user_password" />
            		 </p>
            		 <p>
            	 	 <input type="submit" name="login" id="login" value="Login" />
            		 </p>
       				 </form>
        			 <p>Don't have an account yet? <a href="register.php"> Register</a> for one!</p>
                </div>
            </div>
     	</div>
        
    </div><!--end content-->
    
    <?php include("includes/footer.php");?>

</div> <!--end container-->
</body>
</html>