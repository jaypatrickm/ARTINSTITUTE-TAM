<?php
 	//session_start();
	include("includes/functions.php");
	$conn = dbConnect('query');
	$sectionName = setSectionName();
	
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


<title>Tomorrow's Aeronautical Museum - Events</title>
</head>

<body>
<div id="container">

	<?php include("includes/header.php");?>
    <div id="title">
    	<img id="events_header_shift" src="images/header_events.png" alt="TAM" />
    </div>
    
	<div id="events_content">      
           <?php
    while ($row = $result->fetch_assoc()) {
			
					
					
					echo '<div id="events_display">';
					echo '<h1>Join in on the fun</h1>';
					echo '<div id="event_titles"><ul><li><h2 id="event_title">Event</h2><li><li><h2 id="date_title">Date</h2></li><li><h2 id="start_title">Start Time</h2></li><li><h2 id="end_title">End Time</h2></li></div>';
					echo '<div id="event_body">';
					echo '<div id="event_body_left"><h2>'.$row['title'].'</h2>';
					
					if ($row['location'] !=NULL){
						echo '<div id="event_location"><p>'.ucwords($row['location']).'</p></div>';
					}
					
					if ($row['address'] != NULL){
						echo '<div class="event_address"><p>'.ucwords($row['address']).'<br>';
							if ($row['address2']!=NULL){
								echo ucwords($row['address2']).'<br>';
							}
						echo ucwords($row['city']).', '. strtoupper($row['state']).' '.$row['zip'].'</p></div>';			
					}
					
					
					if($row['description']!=NULL){
						echo '<div class="event_description"><p>'.$row['description'].'</p></div></div>';
					}
						  
				
					echo'<div id="event_body_right"><div id="event_date">';
					$date= date('F j, Y', strtotime($row['date']));
					echo "<h3> $date</h3></div>";
					
					
					
					if ($row['start_time'] !=NULL){
					 echo '<div id="event_start_time"><p>' .$row['start_time'] . '</p></div>';
					 	if($row['end_time']!=NULL){
							 echo '<div id="event_end_time"><p>'.$row['end_time'].'</p></div>';
						}
					  
					}
					
				
					echo '</div></div></div>';
				}//end of the while loop
	?>

    </div><!--end content-->
    
    <?php include("includes/footer.php");?>

</div> <!--end container-->
</body>
</html>