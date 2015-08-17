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


<title>Tomorrow's Aeronautical Museum - The Tuskegee Airmen</title>
</head>

<body>
<div id="container">

	<?php include("includes/header.php");?>
    
    <div id="title">
    	<img id="tuskegee_header_shift" src="images/header_tuskegee.png" alt="TAM">
    </div>
    
	<div id="tuskegee_content">
    
    	<div id="tuskegee_left" class="tuskegee_float">
     		<img src="images/tuskegee1.jpg" alt="TAM">
            <p>The Tuskegee Airmen embody the mentality and strength to overcome the odds. They are a great example of people who have reached success despite the obstacles in front of them. As inspiration for our youth, the Tuskeegee Airmen are featured on the grounds of Tomorrow's Aeronautical Museum. <a href="visit.php">Visit TAM today.</a></p>
        </div>
         
        <div id="tuskegee_right" class="tuskegee_float">
        	<p>In spite of adversity and limited opportunities, African Americans have played a significant role in U.S. military history over the past 300 years. They were denied military leadership roles and skilled training because many believed they lacked qualifications for combat duty. Before 1940, African Americans were barred from flying for the U.S. military. Civil rights organizations and the black press exerted pressure that resulted in the formation of an all African-American pursuit squadron based in tuskegee, Alabama, in 1941. They became known as the tuskegee Airmen.</p>
            <p id="tuskegee_ifix">-Tuskegee Airmen Inc.</p>
        </div>
  
    </div><!--end tuskegee content-->
    
    <?php include("includes/footer.php");?>

</div> <!--end container-->
</body>
</html>