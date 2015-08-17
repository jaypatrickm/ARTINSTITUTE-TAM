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


<title>Tomorrow's Aeronautical Museum - Learn</title>
</head>

<body>
<div id="container">

	<?php include("includes/header.php");?>
    <div id="title">
    	<img src="images/header_about.png" alt="TAM">
    </div>
    
	<div id="about_content">
		
            
            
            <div id="about_top">
        		<img id="about1" src="images/about1.jpg" alt="TAM">
            	
                <div id="about_top_col">
                	<h1>Our Mission</h1>
            
            		<p>Tomorrow's Aeronautical Museum is a living classroom that brings aviation history to life and empowers underprivileged youth's dreams to take flight, literally and figuratively. Interactive exhibits explore racial diversity in the evolution of modern flight, while our dynamic nonprofit flight academy and afterschool programs provide STEM (science, technology, engineering, and math) instruction and compelling alternatives to drugs, gangs, violence and other self-destructive activities.</p>
                </div>
        	</div>
        
        	<div id="about_middle">
        		<div id="about_mid_col">
                	<h1>Our Vision</h1>
            		<p>We envision healthy communities where all youth receive the support they need to graduate high school, go to college, give back to their communities, and become future leaders and innovators in science, aeronautics, and technology.</p>
        		</div>
            </div>
        
        	<div id="about_bottom">
        		<h1>Learn More</h1>
            	<div id="about_col1" class="about_btm_width">
            		<a href="founder.php"><img id="about_btn1" src="images/aboutbtn1.png" alt="TAM"></a>
                	<p>Tomorrow's Aeronautical Museum was founded by Robin Petgrave as an opportunity to motivate and mentor at risk youth.</p>
            	</div>
            	<div id="about_col2" class="about_btm_width">
            		<a href="tuskegee.php"><img id="about_btn2" src="images/aboutbtn2.png" alt="TAM"></a>
                	<p>The Tuskegee Airmen were the first African-American miliary aviators in the United States armed forces. They are featured at the Tomorrow's Aeronautical Museum.</p>
            	</div>
            	<div id="about_col3" class="about_btm_width">
            		<a href="participate.php"><img id="about_btn3" src="images/aboutbtn3.png" alt="TAM"></a>
                	<p>We offer various programs for you or your child to enroll and learn what it takes to be an aviator.</p>
            	</div>
        	</div>
            
    	
    </div><!--end about content-->
    
    <?php include("includes/footer.php");?>

</div> <!--end container-->
</body>
</html>