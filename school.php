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
    <h1>Fixed-Wing Flight School</h1>
    
    <p>We have brought together all of the proper elements to provide you with the most thrilling, rewarding, and complete aviation experience possible. We think the combination of seasoned professional instructors, clean, well maintained equipment, a wide variety of standard & exotic aircraft, state of the are facilities, and a staff that is focused on the same goal of providing excellent customer service is the right one for unparalleled satisfaction.The Aero Squad is based at Compton Woodley Airport, 961 West Alondra Blvd., Compton, CA, 90220. Click here for directions This school is a branch of Tomorrow’s Aeronautical Museum, a 501(c)3 non-profit educational institute that integrates youth mentorin with aviation, community involvement, outreach and social action. The museum is a dynamic integral part of the community serving the children, young adults and their families. </p>

<p>The Aero Squad is designed to fill the needs of potential pilots all across the United States and we will be opening new locations in towns across the country. All of the locations operate under one central management team who all share a passion for satisfied customers and helping the young adults of our communities.</p>
		
    <h4>World Class Flight Training</h4>
    <p>
    Our facilities boast all the amenities of a world class flight training school, it is the perfect combination of luxury and functionality. We are equipped with a Lounge area complete with Big Screen TV. Outdoor patio Cafe to relax, eat, and watch aircraft takeoff & land. Virtual Reality computer center, complete with the latest Flight Simulator Software on all 22 computers. Flight Simulator room for instrument training. FAA CATS Computer Testing Center. Ground School Center, complete with 7 place computer lab and video training center. Preflight briefing areas. 7,000 square foot hanger. From the moment you walk through the door, you will be given the VIP Hollywood treatment.
    </p>

    <h4>Location, Location, Location!</h4>
    <p>Our location is the key; Compton Airport is an uncontrolled airport with two 3,800 foot runways. The fact that it has no control tower means that you do not have to wait for clearance and you can fly in any weather without delays. This will save you lots of money because you spend your lesson flying, not waiting for clearance. This airport is less than a five minute flight to airports with control towers so you can practice ATC work when you want. The LA basin has the perfect weather pattern which gives us beautiful flying conditions year-round. Hotels and other accommodations are within walking distance of our location. World Famous Southern California Beaches are just a few minutes drive, as well as Disneyland, Universal Studios, Hollywood, Beverly Hills, Getty Center, Staples Center, Dodgers Stadium, and more. Complimentary airport pickup from LAX and residential guide/councilors are available for foreign students to help with housing placement and culture acclimation. 
    </p>
    
    <h4>Customize Your Own Program</h4>
    <p>
    Your training program is customizable so you have the choice of one-on-one ground school, or you can participate in a classroom group ground school, and even on-line. Your choice of instructor is a very important one because he/she will play a major role in your enjoyable flight training experience.</p>

<p>We have a comprehensive training program that is flexible enough to train you for any license you are seeking. Weather it is to simply make the joy of flying an everyday occurrence, strictly for pleasure as a private pilot, or to secure a rewarding career as a professional pilot flying airliners all around the world. </p>

	<h4>Financing Available</h4>
    <p>
    We can finance your entire training program, even living expenses. Our professional pilot program will get you financed, trained, and employed, all before you have to make any payments. Give us a call (310) 618-1155 <a href="pilotcareer.org" alt="financing">Click here for Financing.</a></p>

<p>Even if you have already taken some lessons and are either frustrated, trying to save money, looking to upgrade the quality of your training, got a license from a previous school, or never taken a lesson at all, but know what license you want, just click on the appropriate button above. We do have several choices for financing your training and you can check out the different options for each of the license you look at by clicking the button. We are also a great place to rent the airplane of your choice so you can exercise the privilege of your certificate.</p>
    
    
	<h4>Become a Career Pilot</h4>
    <p>
    If you are serious about a career in aviation, then we suggest you check out the Professional Program, where you will find information on the Professional Collegiate Pilot Training Program. This is the ultimate training program because it provides a complete package, including all the flight training, ground training, Time building, college credits, a college degree, and even job-placement as either a Flight Instructor, or on a commuter airline. This is important because many of the major airlines require a college degree before hiring and if you have a degree, generally you will get paid more. You can get 100% financing, including academic loans and even use the G.I. Bill to cover the cost of your training. We can help you to coordinate a program that will allow you to finish the flight training, get placed in a job so you can build time, make money, and into the industry in a career position, all before you have to make one loan payment.</p>
    
   	<h4>Job Placement</h4>
    <p>
    We have an excellent job placement record. We have placed many of our students in positions all over the world. Some work as flight instructors, commuter pilots, scenic tour pilots, major airline pilots, and business jet pilots.</p>
    
       	<h4>Help The Kids & Give Back</h4>
    <p>
   The Aero Squad Aviation Explorers and <a href="aerosquad" alt="aerosquad">Tomorrow’s Aeronautical Museum’s After School Program (A.S.P)</a>is the way we recycle your training dollar. We provide scholarships to K-12 grade school students to give them flight training to become pilots. While you are having the time of your life achieving your goal of flying the wide blue yonder, we are using the proceeds to fund our scholarship program. By “Realizing Your Dream” you are helping a child to do the same. Our program is widely accepted by school districts, including Compton Unified School District, Los Angeles County Office of Education and is under review by several others.</p>
   
       	<h4>Ready for Take-Off</h4>
    <p>
   You can choose more advanced or specialized training. Whatever your goal is, we can help you to achieve it. Corporate, Military, Air show, Flight Instructor, we will train you for your dream career. Give us a call (310) 618-1155.</p>
     
    
    </div><!--end content-->
    
    <?php include("includes/footer.php");?>

</div> <!--end container-->
</body>
</html>