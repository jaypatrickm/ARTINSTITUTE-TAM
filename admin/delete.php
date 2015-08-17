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
			//remove backslashes
		nukeMagicQuotes();
		
		//create database connection 
		$conn = dbConnect('admin');
		
		//initialize flags
		$OK = false;
		$deleted= false;
		//echo $_GET['event_id'];
		
		
		if (isset($_GET['event_id']) && !$_POST) {
			//prepare SQL query
			$sql = 'SELECT event_id, title, date
					FROM events
					WHERE event_id = ?';
					
			//initialize statement
			$stmt = $conn->stmt_init();
			
			if ($stmt->prepare($sql)) {
				//bind the query parameters
				$stmt->bind_param('i', $_GET['event_id']);
				
				//bind the results to variables
				$stmt->bind_result($event_id, $title, $date);
				
				//execute the query, and get the result
				$OK = $stmt->execute();
				$stmt->fetch();
				
				//echo $title . $event_id;
				//echo $_GET['event_id'];
			}
		} //end if stmt
		
//redirect page if cancel button clicked

if (array_key_exists('cancel_delete', $_POST)) {
	$conf_msg = "Process cancelled";
	$_SESSION['conf_msg'] = $conf_msg;
	$class = "msg";
	$_SESSION['class'] = $class;
	header('Location: admin.php');  
	exit;
}

//redirect page if  $GET['attraction_id'] not defined

if (!isset($_GET['event_id'])) {
	$conf_msg = "There was an error processing your request. Please try again later";
	$_SESSION['conf_msg'] = $conf_msg;
	$class = "error";
	$_SESSION['class'] = $class;
	header('Location: admin.php');
	exit;
}

	//if confirm deletion button has been clicked, delete the record
		if (array_key_exists('delete', $_POST)) {
			//prepare delete query
			$sql = 'DELETE FROM events
					WHERE event_id = ?';
					
			echo $sql;
			
			//initialize statement
			$stmt = $conn->stmt_init();
			if ($stmt->prepare($sql)) {
				$stmt->bind_param('i', $_POST['event_id']);
				$deleted = $stmt->execute();
			}
			
			//redirect page if  $GET['attraction_id'] not defined

			if ($deleted) {
				$conf_msg = "Entry has been deleted.";
				$_SESSION['conf_msg'] = $conf_msg;
				$class = "msg";
				$_SESSION['class'] = $class;
				header('Location: admin.php');
				exit;
			}
			

		} // end array_key_exists 
		
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
       <h2> delete event</h2>
          
<?php 
        	if($event_id == 0) { ?>
                <p>INVALID REQUEST: record does not exist.</p>
                <?php } else { ?>
                    
            
                <p>Are you sure you want to delete <b><?php echo $title .' on '.date('F j, Y', strtotime($date)); ?></b>?</p>
                <h6>this cannot be undone!</h6> 


        
                <?php } ?>
            
                <form id="delete" name="delete" method="post" action="" class="buttons">
                    <p>
                        <?php if ($event_id > 0 ) { ?>
                            <input type="submit" name="delete" value="Delete" />
                        <?php } ?>
                            <input type="submit" name="cancel_delete" value="Cancel" />
                        <?php if ($event_id > 0 ) { ?>
                            <input type="hidden" name="event_id" value="<?php echo $event_id; ?>" />
			
                        <?php } ?>
                    </p>
               </form>     
            
                <?php
                    //close db
                    dbClose($conn);
                ?>
           
          
         <?php include("../includes/footerAdmin.php");?></div><!--end content-->


  

</div> <!--end container-->
</body>
</html>