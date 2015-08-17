<?php
 	//session_start();
	include("includes/functions.php");
	$conn = dbConnect('query');
	//$sectionName = setSectionName();
	
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">


<link rel="stylesheet" href="css/style01.css" />
<script src="js/jquery.js"></script>
<script src="js/js1.js"></script>


<title>Tomorrow's Aeronautical Museum - Sponsors</title>
</head>

<body>
<div id="container">

	<?php include("includes/header.php");?>
    <div id="title">
    	<img src="images/header_sponsors.png" alt="TAM" />
    </div>
	<div id="sponsors_content">
  		<div id="sponsors_bg">
        	<div id="sponsors_shift"> 
                <h1>Thank you for all your support</h1>
                <ul> 
                <li><a href="http://www.boeing.com/" alt="boeing" target="_blank"><img src="images/boeing.png" alt="boeing" border="0"></a></li>
                <li><a href="http://www.ilfc.com/" alt="ilfc" target="_blank"><img src="images/ilfc.png" alt="ilfc" border="0"></a></li>
                <li><a href="http://www.pacificcoastwaste.com/" alt="pc" target="_blank"><img src="images/pc.png" alt="pc" border="0"></a></li>
                <li><a href="http://www.ups.com/" alt="ups" target="_blank"><img src="images/ups.png" alt="ups" border="0"></a></li>
                </ul>
    
  			</div>
   		</div>
    
    </div><!--end content-->
    
    <?php include("includes/footer.php");?>

</div> <!--end container-->
</body>
</html>