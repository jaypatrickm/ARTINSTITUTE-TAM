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


<title>Tomorrow's Aeronautical Museum - Participate</title>
</head>

<body>
<div id="container">

	<?php include("includes/header.php");?>
    <div id="title">
    	<img src="images/header_participate.png">
    </div>
    
	<div id="participate_content">
    	<div id="participate_top">
        	<div id="participate_top_left">
            	<p>Tomorrow's Aeronautical Museum reach over 6,000 community youth every year through our Aero Squad Afterschool program, Positive Vibrations program, and numerous community events. Our programs were designed with two basic beliefs in mind:</p>
                <div id="participate_bullet">
                	<div id="participate_bullet_top">
                		<img src="images/participate_bullet1.png" alt="TAM" />
                    	<p>All youth should have access to afterschool educational, career development, and mentoring resources.
</p>
					</div>
                    <div id="participate_bullet_bottom">
						<img src="images/participate_bullet2.png" alt="TAM" />
                		<p>Regardless of who they are and where they live, all youth are capable of excellence if they have the right attitude.</p>
                    </div>
                </div>
            </div>
            <div id="participate_top_right">
            <img src="images/participate1.jpg" alt="TAM" />
            </div>
        </div>
        
        <div id="participate_middle">
        	<h1>Programs</h1>
        	<ul>
            <li><div id="participate_mid_col1">
            	<a href="aerosquad.php"><img src="images/participatebtn1.png" alt="TAM" /></a>
            	<a href="aerosquad.php"><h2>Aero Squad Afterschool</h2></a>
                <p>The afterschool programs are primarily for youths as young as 8 and up. There are different programs for students who wish to learn more about flying and becoming a pilot, a program to expose students to other career fields in aeronautics, and enrichment programs to further progress students learning abilities through STEM academics. <a href="aerosquad.php">Learn More.</a></p>
            </div></li>
            <li><div id="participate_mid_col2">
            	<a href="positive.php"><img src="images/participatebtn2.png" alt="TAM" /></a>
            	<a href="positive.php"><h2>Positive Vibrations</h2></a>
                <p>Positive Vibrations is an outreach mentoring program that visits schools to inspire students, teachers, and parents to create a more positive community through different initiatives. <a href="positive.php">Learn More.</a></p>
            </div></li>
            <li><div id="participate_mid_col3">
            	<a href="fixedwing.php"><img src="images/participatebtn3.png" alt="TAM" /></a>
            	<a href="fixedwing.php"><h2>Fixed-Wing Flight School</h2></a>
                <p>Fixed-Wing flight school is tailored for potential pilots who dream of flying. Our wide variety of aircraft, well-maintained equipment, and professional staff are here to serve your aviation needs. We offer customizable programs, financing, and job placements. <a href="fixedwing.php">Learn More.</a></p>
            </div></li>
            </ul>
        </div>
        
        <div id="participate_bottom">
        	<div id="participate_btm_left">
            	<h1>Events</h1>
                <p>TAM events are always family oriented and everyone is always invited to come learn, help out the community, and have some fun! We have a list of events so that you can plan accordingly and bring your family along for some good times.</p>
                <a href="events.php"><img src="images/participatebtn4.png" alt="TAM"/></a>
            </div>
            <div id="participate_btm_rt">
            <img src="images/participate2.jpg" alt="TAM"/>
            </div>
        </div>

    </div><!--end content-->
    
    <?php include("includes/footer.php");?>

</div> <!--end container-->
</body>
</html>