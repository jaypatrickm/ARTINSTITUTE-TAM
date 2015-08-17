<?php
 	//session_start();
	include("includes/functions.php");
	$conn = dbConnect('query');
	$sectionName = setSectionName();
	
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">


<link rel="stylesheet" href="css/style01.css" />
<script src="js/jquery.js"></script>
<script src="js/js1.js"></script>


<title>Tomorrow's Aeronautical Museum</title>
</head>

<body>
<div id="container">

	<?php include("includes/header.php");?>
    
	<div id="content">
     <img src="images/imgStrip.jpg" alt="TAM">
    <h1>The Tuskeegee Airmen</h1>
    <p>The Tuskegee Airmen were the first African-American military aviators in the United States armed forces. During World War II, African Americans in many U.S. states were still subject to the Jim Crow laws. The American military was racially segregated, as was much of the federal government. The Tuskegee Airmen were subjected to racial discrimination, both within and outside the army. Despite these adversities, they trained and flew with distinction. All black military pilots who trained in the United States trained at Tuskegee, including five Haitians.</p>

<p>Although the 477th Bombardment Group "worked up" on North American B-25 Mitchell bombers, they never served in combat; the Tuskegee 332nd Fighter Group was the only operational unit, first sent overseas as part of Operation Torch, then seeing action in Sicily and Italy, before being deployed as bomber escorts in Europe, where they were very successful.</p>

<p>The Tuskegee Airmen initially were equipped with Curtiss P-40 Warhawks fighter-bomber aircraft, briefly with Bell P-39 Airacobras (March 1944), later with Republic P-47 Thunderbolts (June–July 1944), and finally with the aircraft with which they became most commonly associated, the North American P-51 Mustang (July 1944). When the pilots of the 332nd Fighter Group painted the tails of their P-47s and later, P-51s, red, the nickname "Red Tails" was coined. Bomber crews applied a more effusive "Red-Tail Angels" sobriquet.</p>
    <a href="http://en.wikipedia.org/wiki/Tuskegee_Airmen" alt="reference"><h4>*wikipedia</h4></a> 
    
    
    </div><!--end content-->
    
    <?php include("includes/footer.php");?>

</div> <!--end container-->
</body>
</html>