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

<title>Tomorrow's Aeronautical Museum - Volunteer Log</title>
</head>

<body>
<div id="container">

	<?php include("includes/header.php");?>
    <div id="title">
    	<img src="images/header_volunteerlog.png" alt="TAM">
    </div>
	<div id="volunteer_content">
  		<div id="volunteer_shift">
    		<h1>Log your hours here</h1>
    
    		<div id="log_form">

          <form action="" method="post" name="signup" id="signup">
              <input type="hidden" name="recipients" value="jaypatrickm@gmail.com" />
              <input type="hidden" name="required" value="fname:Your first name, lname:Your last name, email:Your email address, method: Choose a contact method" />
              <input type="hidden" name="subject" value="TAM -- Contact" />
          <div>
              <label for="fname" class="label">First Name* </label>
              <input name="fname" type="text" class="required" id="fname" title="Please type your first name.">
          </div>
          <div>
              <label for="lname" class="label">Last Name* </label>
              <input name="lname" type="text" class="required" id="lname" title="Please type your last name.">
          </div>
          <div>
              <label for="dvolunteered" class="label">Date Volunteered* </label>
              <input name="dvolunteered" type="text" id="dvolunteered" class="required" title="Please type date volunteered using this format: 01/19/2000">
          </div>
          <div>
              <label for="tstart" class="label">Time Started* </label>
              <input name="tstart" type="text" id="tstart" class="required" title="Please type your time using this format: 06:30AM">
          </div>
          <div>
              <label for="tend" class="label">Time Ended* </label>
              <input name="tend" type="text" id="tend" class="required" title="Please type your time using this format: 06:30AM">
          </div>
          <div id="input_boxes">
          <div id="affiliation_boxes"><span id="affiliation_label" class="label">Affiliation*</span>
              <br /><ul id="affiliation_check_left"><li><input name="affiliation" type="checkbox" id="board" value="board" class="required" title="Please check at least 1 affiliation.">
              <label for="board">Board Member</label></li>
              <li><input name="affiliation" type="checkbox" id="probono" value="probono">
              <label for="probono">Pro Bono Consultant</label></li>
              <li><input name="affiliation" type="checkbox" id="boeing" value="boeing">
              <label for="boeing">Boeing Employee</label></li>
              <li><input name="affiliation" type="checkbox" id="service" value="service">
              <label for="service">Service Learning </label></li>
              <li><input name="affiliation" type="checkbox" id="other" value="other">
              <label for="other">Other:</label> <input name="affiliation" type="text" id="other" title="Please enter other."></li></ul>
             <br />
          </div>
          <div id="project_boxes"><span id="project_label" class="label">Project/Task*</span><br />
              <ul id="project_check_left"><li><input name="project" type="checkbox" id="administrative" value="administrative" class="required" title="Please check at least 1 project.">
              <label for="administrative">Administrative<br /></label></li>
              <li><input name="project" type="checkbox" id="consulting" value="consulting">
              <label for="consulting">Consulting</label></li>
              <li><input name="project" type="checkbox" id="facilities" value="facilities">
              <label for="facilities">Facilities</label></li>
              <li><input name="project" type="checkbox" id="trip" value="trip">
              <label for="trip">Field Trip/Chaperone</label></li>
              <li><input name="project" type="checkbox" id="fund" value="fund">
              <label for="fund">Fund Development</label></li>
              <li><input name="project" type="checkbox" id="programs" value="programs">
              <label for="programs">Programs <br /></label></li>
              <li><input name="project" type="checkbox" id="social" value="social">
              <label for="social">Social Media/Marketing</label></li>
              <li><input name="project" type="checkbox" id="tutor" value="tutor">
              <label for="tutor">Tutoring/Mentoring</label></li>
              <li><input name="project" type="checkbox" id="other" value="other">
              <label for="other">Other:</label> <input name="affiliation" type="text" id="other" title="Please enter other."></li><br />
          </div>
          </div>
          <div id="volunteer_feedback">
              <label for="feedback" class="label">Feedback</label>
              <textarea name="comments" cols="15" rows="5" id="comments"></textarea>
          </div>
          <div id="volunteer_submit_fix">
              <input type="image" src="images/contactbtn1.png" name="submit" id="submit" value="Submit">
          </div>
          </form>
      </div>
      
     <div class="sideBar">
     
          <a href="https://www.facebook.com/TAMuseum.org" alt="TAM on facebbok"><img src="images/fbi.png" alt="tadori on facebook" class="icon"></a>
          <a href="https://twitter.com/#%21/TAMuseum" alt="TAM on twitter"><img src="images/twi.png" alt="tadori on twitter" class="icon"></a>
          <a href="http://www.flickr.com/photos/57952379@N06/" alt="TAM on flickr"><img src="images/fri.png" alt="tadori on flickr" class="icon"></a>
     
     <hr>
     <b>Tomorrow's Aeronautical Museum</b>
      <br>961 W. Alondra Blvd.
      <br>Compton, CA 90220  
      </p>
      
      <p>(310) 618-1155</p>
      
     </div>
	</div>
   
    
    </div><!--end content-->
    
    <?php include("includes/footer.php");?>

</div> <!--end container-->
</body>
</html>