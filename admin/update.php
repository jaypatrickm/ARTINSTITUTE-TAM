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
		$done= false;
		//echo $_GET['event_id'];
		
		
		if (isset($_GET['event_id']) && !$_POST) {
			//prepare SQL query
			$sql = 'SELECT event_id, title, date, start_time, end_time, location, address, address2, city, state, zip, description
					FROM events
					WHERE event_id = ?';
					
			//initialize statement
			$stmt = $conn->stmt_init();
			
			if ($stmt->prepare($sql)) {
				//bind the query parameters
				$stmt->bind_param('i', $_GET['event_id']);
				
				//bind the results to variables
				$stmt->bind_result($event_id, $title, $date, $start_time, $end_time, $location, $address, $address2, $city, $state, $zip, $description);
				
				//execute the query, and get the result
				$OK = $stmt->execute();
				$stmt->fetch();
				
				//echo $date;
				//echo $_GET['event_id'];
			}
			$y= date('Y', strtotime($date));
			
			$m= date('m', strtotime($date));
			$m=$m-1;
			$d= date('d', strtotime($date));
			//echo $m;
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
		
		#####################################
		#####################################
		#####################################
		
	if (array_key_exists('update', $_POST)) {
		
		$OK=false;
		
		//remove backslashes
		nukeMagicQuotes();
		//create variables to use in spot-category lookup table insert
		$event_id = $_POST['event_id'];
		$title = $_POST['title'];
		$date = date('Y-m-d', strtotime($_POST['datepicker']));
		//$title = $_POST['title'] ;
		
		if ($_POST['startH']==NULL){
			$startH=00;
		}else{$startH=$_POST['startH'];
		}
		
		if ($_POST['startM']==NULL){
			$startM=00;
		}else{$startM=$_POST['startM'];
		}
		if ($_POST['endH']==NULL){
			$endH=00;
		}else{$endH=$_POST['endH'];
		}
		if ($_POST['endM']==NULL){
			$endM=00;
		}else{$endM=$_POST['endM'];
		}
		
		
		$start_time = $_POST['start_time'];
			$newStart= $startH.':'.$startM.' '.$_POST['ampm']; 
		$end_time = $_POST['end_time'] ;
			$newEnd= $endH.':'.$endM.' '.$_POST['ampm2']; 
		
		$location = $_POST['location'] ;
		$address = $_POST['address'] ;
		$address2 = $_POST['address2'] ;
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zip = $_POST['zip'];
		$description = $_POST['description'];
		
		echo $event_id .'<br>';
		echo $title  . '<br>';
		echo $date  .'<br>';
		echo $title  . '<br>';
		
		echo $start_time  . '<br>';
			echo $newStart .'<br>';
		echo $end_time . '<br>';
			echo $newEnd.'<br>';
		
		echo $location  . '<br>';
		echo $address . '<br>';
		echo $address2  . '<br>';
		echo $city.  '<br>';
		echo $state. '<br>';
		echo $zip . '<br>';
		echo $description . '<br>';
		
		if (!$_POST['timeChange']){
			$start_time = $start_time;
			$end_time = $end_time;
			$OK= true;
			echo 'same time';
		}else{
			$start_time= $newStart;
			$end_time= $newEnd; 
			echo 'new time';
			$OK=true;
		}
		
		
		if ($OK) {
			
			$sql = 'UPDATE events 
						SET title = ?, date = ?, start_time= ?, end_time= ?, location= ?, address= ?, address2= ?, city= ?, state= ?, zip= ?, description= ?
						WHERE event_id = ?';
				
				//initialize statement
				$stmt = $conn->stmt_init();
				if ($stmt->prepare($sql)) {
					$stmt->bind_param('sssssssssssi', $title, $date, $start_time, $end_time, $location, $address, $address2, $city, $state, $zip, $description, $event_id);
					$done = $stmt->execute();
					echo 'entry updated';
				 }else{
					 echo 'NOT UPDATED';
				}
			
			}
		
}//end POST

if ($done) {
			$conf_msg = "Your entry was successfully updated.";
	  		$_SESSION['conf_msg'] = $conf_msg;
			$class = "msg";
	  		$_SESSION['class'] = $class;
			header('Location: admin.php');  
			exit;
		} 
		
		
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="../css/ui-lightness/jquery-ui-1.8.21.custom.css"/>
<link rel="stylesheet" href="../css/style02.css" />
<script src="../js/jquery.js"></script>
<script src="../js/jquery-ui-1.8.21.custom.min.js"></script>
<script>
// JavaScript Document
var $eDate = '<?php echo $y.',	'.$m.', '.$d;?>';
var d = new Date(<?php echo $y.',	'.$m.', '.$d;?>);


</script>
<script src="../js/js2.js"></script>





<title>Tomorrow's Aeronautical Museum</title>
</head>

<body>
<div id="container">

	<?php include("../includes/headerAdmin.php");?>
    
	<div id="contentAdmin">
    
        
       <h1>Admin</h1>
       <h2> edit event</h2>
          
<h3>General Information</h3>
           <form id="inputEvent" name="inputEvent" method="post" action="" enctype="multipart/form-data">
           <p>
                    <label for="title">Event Title:</label><br />
                    <input name="title" id="title" type="text" size="50" maxlength="50"  class="required" value="<?php echo htmlentities($title); ?>"/>
           </p>
           <p>
                    <label for="desription">Description:</label><br />
                    <textarea name="description" id="description" cols="40" rows="5"><?php 
					if (htmlentities($description) !=NULL){ 
						echo htmlentities($description);
					}else{
						echo 'No Current Information';
						} ?></textarea>
           </p>
 
           <p>Date: <input type="text" name="datepicker" id="datepicker" value="<?php echo date('m/d/Y', strtotime($date)); ?>"></p>
           Time: <?php echo htmlentities($start_time);
		   		if($end_time != NULL){
					echo ' - '. htmlentities($end_time);
				}
			 ?>
           <p>Change Time: <input name="timeChange" id="timeChange" type="checkbox"/></p>
           <div id="newTime">
           <p>Change Start Time:
           <input name="startH" id="startH" type="text" size="2" maxlength="2"  class="required"> :
           <input name="startM" id="startM" type="text" size="2" maxlength="2"  class="required">
           <select name="ampm" id="ampm">
           <option value="AM">AM</option>
            <option value="AM">PM</option>
           </select></p>
           
           <p>Change End Time:
            <input name="endH" id="endH" type="text" size="2" maxlength="2"  class="required"> :
           <input name="endM" id="endM" type="text" size="2" maxlength="2"  class="required">
           <select name="ampm2" id="ampm2">
           <option value="AM">AM</option>
            <option value="AM">PM</option>
            </select></p>
           </div>
            <p>
            <label for="location">Location:</label><br />
                    <input name="location" id="location" type="text" size="50" maxlength="50"  class="required" value="<?php echo htmlentities($location); ?>"/>
            </p>
			<p>
            <label for="address">Address:</label><br />
                    <input name="address" id="address" type="text" size="50" maxlength="50"  class="required" value="<?php echo htmlentities($address); ?>"/>
            </p>
            <p><label for="address2">Line 2:</label><br />
                    <input name="address2" id="address2" type="text" size="50" maxlength="50"  class="required" value="<?php echo htmlentities($address2); ?>"/></p>
            <p><label for="city">City:</label><br />
                    <input name="city" id="city" type="text" size="50" maxlength="50"  class="required" value="<?php echo htmlentities($city); ?>"/></p>
            <p>State:<select name="state" id="state">
            <?php $length = count($states_arr);
			//echo $length;
			//<option value="">Select Existing Habitat</option>
			foreach ($states_arr as $key => $value){
				echo $key.' '. $value.' ' .'<br>';
				if ($key == $state){
				echo '<option value="'.$key.'" selected>'.$value.'</option>';
				}else{
				echo '<option value="'.$key.'">'.$value.'</option>';
				}
			}
			

			?></select>
            
            <label for="title">Zip:</label>
                    <input name="zip" id="zip" type="text" size="10" maxlength="10"  class="required" value="<?php echo htmlentities($zip); ?>"/></p>

<input name="event_id" id="event_id" type="hidden" value="<?php echo htmlentities($event_id); ?>"/>
<input name="start_time" id="start_time" type="hidden" value="<?php echo htmlentities($start_time); ?>"/>
<input name="end_time" id="end_time" type="hidden" value="<?php echo htmlentities($end_time); ?>"/>

 <div class="buttons"><input type="submit" name="update" value="edit event" id="submit" /></div>
            
                <?php
                    //close db
                    dbClose($conn);
              	?>
           
          
         <?php include("../includes/footerAdmin.php");?></div><!--end content-->


  

</div> <!--end container-->
</body>
</html>