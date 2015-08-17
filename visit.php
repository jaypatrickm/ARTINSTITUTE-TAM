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


<title>Tomorrow's Aeronautical Museum - See</title>
</head>

<body>
<div id="container">

	<?php include("includes/header.php");?>
    <div id="title">
     		<img id="see_header_shift" src="images/header_see.png" alt="TAM">
    </div>
	<div id="see_content">  
        <div id="see_background">
   			<div id="see_left">
        		<h1>Visit</h1>
    			<div class="map">
 					<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Tomorrow's+Aeronautical+Museum,+Compton,+CA&amp;aq=0&amp;oq=tomorrow's+aeronaut&amp;sll=37.0625,-95.677068&amp;sspn=58.816238,135.263672&amp;ie=UTF8&amp;hq=Tomorrow's+Aeronautical+Museum,+Compton,+CA&amp;t=m&amp;cid=11456923306544528482&amp;hnear=&amp;ll=33.900912,-118.240356&amp;spn=0.034195,0.054932&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Tomorrow's+Aeronautical+Museum,+Compton,+CA&amp;aq=0&amp;oq=tomorrow's+aeronaut&amp;sll=37.0625,-95.677068&amp;sspn=58.816238,135.263672&amp;ie=UTF8&amp;hq=Tomorrow's+Aeronautical+Museum,+Compton,+CA&amp;t=m&amp;cid=11456923306544528482&amp;hnear=&amp;ll=33.900912,-118.240356&amp;spn=0.034195,0.054932&amp;z=14&amp;iwloc=A" style="color:#ffde00;text-align:left" target="_blank">View Larger Map</a></small>
				</div>
        	</div>
       		<div id="see_right">
        		<h4>Tomorrow's Aeronautical Museum</h4>
    			<p>961 W. Alondra Blvd.,
				<br />Compton, CA 90220
				<br />(310) 618-1155.</p><br />
            	<p>Mon-Fri: 8am-7pm
				<br/>Sat-Sun: 8am-5pm</p><br />
            	<p>Tomorrow's Aeronautical Museum is open to the public throughout the year, except for major holidays.</p><br />
            	<p>If you are with a group, please contact Project Director Myra Petgrave to schedule a visit.<br>myra@tamuseum.org</p>
        	</div>
        	<div id="see_bottom">
        	<p>Come see our Tuskegee Airmen permanent display consisting of historic photos and artifacts, and aircraft, including two Bell UH-1 Iroquois, a Hughes OH-6 Cayuse, experimental planes, Robinson Helicopters, and a fleet of eight airplanes featuring red tails in honor of the Tuskegee Airmen.</p>
        	</div>
		</div>
    </div><!--end content-->
    
    <?php include("includes/footer.php");?>

</div> <!--end container-->
</body>
</html>