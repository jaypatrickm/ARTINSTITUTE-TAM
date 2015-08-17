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


<title>Tomorrow's Aeronautical Museum - Positive Vibrations</title>
</head>

<body>
<div id="container">

	<?php include("includes/header.php");?>
    
    <div id="title">
    	<img id="positive_header_shift" src="images/header_positive.png" />
    </div>
    
	<div id="positive_content">
    	<div id="positive_top">
        	<div id="positive_top_left">
        		<p>Positive Vibrations is a unique youth mentoring program, which utilizes positive and constructive initiatives to teach and assist parents and teachers to motivate and inspire youth to reach their maximum potential.</p>
            	<p>One of the most well-known activities of the Positive Vibrations Youth Mentoring Program is when Tomorrow’s Aeronautical Museum’s founder Robin Petgrave visits the front lines, reaching out to local schools. Robin does not just visit the school, he lands with a helicopter elevating the excitement and attention of both students and teachers.</p>
            	<p>The Positive Vibrations helicopter school visits have been proven to be an effective motivational and inspiration event for the school year. Some students will remember Robin visiting their school for the rest of their lives and will retain the important messages he projects. Teachers have noticed a different level of motivation from their students after the school visits.</p>
            </div>
            <div id="positive_top_right">
            	<img src="images/positive1.jpg" alt="TAM" />
            </div>
        </div>
        <div id="positive_mid_top">
        	<div id="positive_mid_top_left">
        		<img src="images/positive2.jpg" alt="TAM" /> 
            </div>
            <div id="positive_mid_top_right">
            	<h1>Realizing your dream</h1>
            	<p>Robin is able to connect with the kids on a different level, their level. He truly touches them by relating. Robin also speaks about serious and adverse affects of the real world such as the gangs and other dangers on their streets. He addresses the importance of staying focused in school in order to be a successful person just like himself. Robin says “you can fly helicopters just like me, be in movies, ride rollercoasters, or do anything else you love and want to do and you can get paid for it. You just need to stay focused and you will realize your dreams”.</p>
            </div>
        </div>
        
        <div id="positive_mid_bottom">
        	<h1>A place to go after school & stay motivated</h1>
            <img src="images/positive3.jpg" alt="TAM" />
            <p>Tomorrow’s Aeronautical Museum was originally conceptualized as a facility to harbor the Positive Vibrations Program providing a place for students to go after school. Originally designed as a place to offer assistance, mentoring, and other educational services, Tomorrow’s Aeronautical Museum also provides a route for kids interested in becoming pilots proving their committment with sweat, equity, and hard work. Aside from the students who have chosen to become pilots, many others have been positively moved changing the direction of their lives from the effects of being exposed to opportunities and resources available at Tomorrow’s Aeronautical Museum.</p>
            <p>With the outreach of Boeing, Northrup Grumman, Southwest Airlines, Orange Coast College, The Tuskegee Airmen and a few other organizations actively invoveld with the at-risk community many students have changed the course of their lives from the opportunities at hand. Positive Vibrations has proven that hard work pays off and you CAN realize your dreams.</p>
        </div>
        
        <div id="positive_bottom">
        	<div id="positive_bottom_left">
            	<img src="images/positive4.jpg" alt="TAM" />
            </div>
            <div id="positive_bottom_right">
            	<h1>Have positive vibrations visit your school</h1>
            	<p>Positive Vibrations Youth Mentoring Program helicopter school visits have been performed at all levels Pre-School to High Schools to even Correction Facilities. Robin has a non-intrusive and subtle way of dealing with today’s youth and has been successful in communicating positivity into the community. Positive Vibrations encourages positive activity in impoverished areas and is very popular during Drug-Free week, Class Assemblies, and Career Fairs to name a few ideas. Also on ocassion Robin will bring a distinguished Celebrity along with him during the school visit to make an even more effective impact.</p>
            	<p>If you would like to schedule a Positive Vibration’s Helicopter Visit at your school or facility please feel free to contact us at (310) 618-1155. This program is a one of kind event that is all about positivity in your community.</p>
            </div>

        </div>
        
    </div><!--end content-->
    
    <?php include("includes/footer.php");?>

</div> <!--end container-->
</body>
</html>