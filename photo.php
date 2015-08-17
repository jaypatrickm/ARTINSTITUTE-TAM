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


<title>Tomorrow's Aeronautical Museum - Photo Gallery</title>
</head>

<body>
<div id="container">

	<?php include("includes/header.php");?>
    
    <div id="title">
    	<img id="photo_header_shift" src="images/header_photo.png" />
    </div>
    
	<div id="photo_content">
   
        <div id="photo_bg">
       		<h1>Take a look at what we do</h1>
            <div id="flickr_gallery">
				<object width="640" height="480"> <param name="flashvars" value="offsite=true&lang=en-us&page_show_url=%2Fphotos%2F57952379%40N06%2Fshow%2F&page_show_back_url=%2Fphotos%2F57952379%40N06%2F&user_id=57952379@N06&jump_to="></param> <param name="movie" value="http://www.flickr.com/apps/slideshow/show.swf?v=109615"></param> <param name="allowFullScreen" value="true"></param><embed type="application/x-shockwave-flash" src="http://www.flickr.com/apps/slideshow/show.swf?v=109615" allowFullScreen="true" flashvars="offsite=true&lang=en-us&page_show_url=%2Fphotos%2F57952379%40N06%2Fshow%2F&page_show_back_url=%2Fphotos%2F57952379%40N06%2F&user_id=57952379@N06&jump_to=" width="640" height="480"></embed></object>
            </div>
       </div>
    </div><!--end content-->
    
    <?php include("includes/footer.php");?>

</div> <!--end container-->
</body>
</html>