<?php
 	//session_start();
	include("includes/functions.php");
	$conn = dbConnect('query');
	
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="images/favicon.ico"/>
<link rel="stylesheet" href="css/style01.css" />
<script src="js/jquery.js"></script>
<script src="js/jquery.cycle.all.js"></script>
<script src="js/js1.js"></script>
<script type="text/javascript">
$(document).ready(function() {
//main slideshow											 
$('#gallery').cycle({
	fx: 'fade',
	timeout: 6000,
	speed: 1000,
	delay: -1000,
	pager: '#pager',
	next: '#next',
	prev: '#prev'
});

$('#playControl').toggle(
		function() {
			$('#gallery').cycle('pause');
		},
		function() {
			$('#gallery').cycle('resume');
		});

}); // end ready()
</script>
<title>Tomorrow's Aeronautical Museum</title>
</head>

<body>
<div id="container">

	<?php include("includes/header.php");?>
   
	<div id="content">
    
    	<div class="slide">
        	<div id="controls">
  				<span id="prev" class="control"><img id="downpre" src="images/prev.png" alt="prev"></span>
    			<span id="pager"></span>
    			<span id="next" class="control"><img id="downnex" src="images/next.png" alt="prev"></span>
    			<span id="playControl" class="control"><a href="#"><img id="downpau" src="images/pause.png" alt="prev"></a></span>
 			</div>
  			<div id="gallery">
    		<div><img src="images/tams1.jpg" width="978" height="337" alt="fly to success"></div>
    		<div><img src="images/tams2.jpg" width="978" height="337" alt="toy drive"></div>
            <div><img src="images/tams3.jpg" width="978" height="337" alt="nasa"></div>
  			</div>
        </div>
        
        <img src="images/believeheader.jpg" id="believeheader" alt="TAM">
        <img src="images/believebar.jpg" id="believebar" alt="TAM">
        
        <div class="colContainer">
        	<div class="col">
            <p>We are a non-profit organization that believes all youth should have access to afterschool education, career development, and mentoring resources, regardless of who they are and where they live. All youth are capable of excellence. <a href="about.php" class="linkyellow" alt="About TAM">Learn more</a> or <a href="help.php" class="linkyellow" alt="Help">Donate.</a></p>
            </div>
            
            <div class="col2">
            	<p>
           		<p id="percent"> 100%</p>
            	<span id="rt_col">of donations made to TAM are distributed between our educational programs, airport maintenance, and staff of instructors. </span>
            	</p>
            </div>
       
        </div>
    
    
    </div><!--end content-->
    
    <?php include("includes/footer.php");?>

</div> <!--end container-->
</body>
</html>