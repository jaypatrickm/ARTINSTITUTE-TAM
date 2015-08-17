<?php
session_start();
ob_start();  // need to buffer output - need this since adding logout via external file
//if session variable not set, redirect to login page
if (!isset($_SESSION['authenticated'])) {
	header('Location: index.php');
	exit;
}

?>
<?php
 	//session_start();
	include("../includes/functions.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">


<link rel="stylesheet" href="../css/style02.css" />
<script src="../js/jquery.js"></script>
<script src="../js/js2.js"></script>
<script>
  
   
   
</script>


<title>Tomorrow's Aeronautical Museum</title>
</head>

<body>
<div id="container">

	<?php include("../includes/headerAdmin.php");?>
    
	<div id="contentAdmin">
    
        
       <h1>Admin</h1>
          

           
           <div id="list">
          		<h2>events</h2>
                            <?php 
				if (isset($_SESSION['conf_msg'])) {
					echo '<p class="'. $_SESSION['class']. '">'. $_SESSION['conf_msg'] . '</p>';
					unset($_SESSION['conf_msg']); //unsetting the session variable
					unset($_SESSION['conf_msg']); //unsetting the page's variable
				}// echo '<p class="'. $class. '">'. $conf_msg . '</p>';
            ?>  
                <?php
				
						$conn = dbConnect('query');
						$sectionName = setSectionName();
						
							$sql = "SELECT * FROM events
								WHERE date > CURDATE()
								ORDER BY date ASC;";
					
								//submit the SQL query to the database and get the result
								$result = $conn->query($sql) or die(mysqli_error($conn));
								//echo $sql;
								
						while ($row = $result->fetch_assoc()) {
			
					
					
					echo '<div class="eventDisp2">';
					
					echo '<h2>'.$row['title'].'</h2>';
					
					$date= date('F j, Y', strtotime($row['date']));
					echo "<h3> $date</h3>";
					
					
					
					if ($row['start_time'] !=NULL){
					 echo $row['start_time'];
					 	if($row['end_time']!=NULL){
							 echo '&nbsp;&ndash;&nbsp;'.$row['end_time'].'<br>';
						}
					  echo '<br>';
					}
					
				
					
					if ($row['location'] !=NULL){
						echo '<b>@ '.ucwords($row['location']).'</b><br>';
					}
					
					?>
                    
                    <div class="buttons">
                        <a href="update.php?event_id=<?php echo $row['event_id']; ?>">EDIT</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                        <a href="delete.php?event_id=<?php echo $row['event_id']; ?>">DELETE</a>
                    </div>
					
					<?php	  
					echo '</div>';//<!--end event disp-->
						  
				}//end of the while loop
	
				
				?>
                
                
                
           </div><!--end add-->
         <?php include("../includes/footerAdmin.php");?></div><!--end content-->


  

</div> <!--end container-->
</body>
</html>