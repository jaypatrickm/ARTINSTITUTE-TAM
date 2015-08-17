<?php
#########################
# Lori Piedad
# Connection Script
##########################

function dbConnect($type) {
	if ($type == 'query') {
		$user = 'tamquery';
		$pwd = 'tam';
	} elseif ($type == 'admin') {
		$user = 'tamadmin';
		$pwd = 'tam';
	} else {
		exit('Unrecognized connection type');
	}
	//connection code goes here
	$conn = new mysqli('localhost', $user, $pwd, 'tam') or die ('Cannot open database');
	//echo "database connected<br>";  //for troubleshooting
	return $conn;
}

function setSectionName(){
	
}

#########################
# Lori Piedad
# Connection CLOSE
##########################

function dbClose($conn) {
	mysqli_close($conn);
}


#########################
# Lori Piedad
# YEAR
##########################

$time = time () ; 
 //This line gets the current time off the server

$year= date("Y",$time);
$today=date("Y-m-d");


#########################
# Lori Piedad
# MAX # to show in GALLERY
##########################

define('SHOWMAX', 4);




function nukeMagicQuotes() {
  if (get_magic_quotes_gpc()) {
    function stripslashes_deep($value) {
      $value = is_array($value) ? array_map('stripslashes_deep', $value) : stripslashes($value);
      return $value;
      }
    $_POST = array_map('stripslashes_deep', $_POST);
    $_GET = array_map('stripslashes_deep', $_GET);
    $_COOKIE = array_map('stripslashes_deep', $_COOKIE);
    }
  }




 $states_arr = array('AL'=>"Alabama",'AK'=>"Alaska",'AZ'=>"Arizona",'AR'=>"Arkansas",'CA'=>"California",'CO'=>"Colorado",'CT'=>"Connecticut",'DE'=>"Delaware",'DC'=>"District Of Columbia",'FL'=>"Florida",'GA'=>"Georgia",'HI'=>"Hawaii",'ID'=>"Idaho",'IL'=>"Illinois", 'IN'=>"Indiana", 'IA'=>"Iowa",  'KS'=>"Kansas",'KY'=>"Kentucky",'LA'=>"Louisiana",'ME'=>"Maine",'MD'=>"Maryland", 'MA'=>"Massachusetts",'MI'=>"Michigan",'MN'=>"Minnesota",'MS'=>"Mississippi",'MO'=>"Missouri",'MT'=>"Montana",'NE'=>"Nebraska",'NV'=>"Nevada",'NH'=>"New Hampshire",'NJ'=>"New Jersey",'NM'=>"New Mexico",'NY'=>"New York",'NC'=>"North Carolina",'ND'=>"North Dakota",'OH'=>"Ohio",'OK'=>"Oklahoma", 'OR'=>"Oregon",'PA'=>"Pennsylvania",'RI'=>"Rhode Island",'SC'=>"South Carolina",'SD'=>"South Dakota",'TN'=>"Tennessee",'TX'=>"Texas",'UT'=>"Utah",'VT'=>"Vermont",'VA'=>"Virginia",'WA'=>"Washington",'WV'=>"West Virginia",'WI'=>"Wisconsin",'WY'=>"Wyoming");