<?php
 	//session_start();
	include("includes/functions.php");
	$conn = dbConnect('query');
	
		$sql = "SELECT * FROM events
			WHERE date > CURDATE()
			ORDER BY date ASC;";

			//submit the SQL query to the database and get the result
			$result = $conn->query($sql) or die(mysqli_error($conn));
			//echo $sql;
	
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">


<link rel="stylesheet" href="css/style01.css" />
<script src="js/jquery.js"></script>
<script src="js/js1.js"></script>


<title>Tomorrow's Aeronautical Museum - Video Gallery</title>
</head>

<body>
<div id="container">

	<?php include("includes/header.php");?>
    
    <div id="title">
    	<img id="video_header_shift" src="images/header_videogallery.png" alt="TAM"/>
    </div>
	<div id="video_content">
    	<div id="video_bg">
       		<h1>Watch what we've been doing</h1>
       		<div id="video_left">
       			<div id="video_left_top">
            		<h2>A fifteen minute introduction</h2>
                	<p>This is a fifteen minute video describing the many things we strive to accomplish here at Tomorrow's Aeronautical Museum.</p>
            	</div>
           		<div class="video_left_bottom">
    				<iframe width="450" height="338" src="http://www.youtube.com/embed/vvqx4K_1ZH4" frameborder="0" allowfullscreen></iframe>
    			</div>
       		</div>
       		<div id="video_right">
       			<div id="video_right_top">
           			<h2>Featured on CNN</h2>
                	<p>Back in April, Tomorrow's Aeronautical Museum was featured on CNN. Reported by Thelma Gutierrez.</p>
            	</div>
 				<div id="video_right_bottom">      
					<object  width="450" height="405" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="ep"><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="wmode" value="transparent" /><param name="movie" value="http://i.cdn.turner.com/cnn/.element/apps/cvp/3.0/swf/cnn_416x234_embed.swf?context=embed&videoId=us/2012/04/28/freedom-of-flight.cnn" /><param name="bgcolor" value="#000000" /><embed src="http://i.cdn.turner.com/cnn/.element/apps/cvp/3.0/swf/cnn_416x234_embed.swf?context=embed&videoId=us/2012/04/28/freedom-of-flight.cnn" type="application/x-shockwave-flash" bgcolor="#000000" allowfullscreen="true" allowscriptaccess="always" width="405" wmode="transparent" height="380"></embed></object>
            	</div>
			</div>
        </div>
    </div>
    <?php include("includes/footer.php");?>

</div> <!--end container-->
</body>
</html>