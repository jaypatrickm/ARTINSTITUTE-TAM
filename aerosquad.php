<?php
 	//session_start();
	include("includes/functions.php");
	$conn = dbConnect('query');
	
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="css/style01.css" />
<script src="js/jquery.js"></script>
<script src="js/js1.js"></script>


<title>Tomorrow's Aeronautical Museum - Aero Squad Afterschool</title>
</head>

<body>
<div id="container">

	<?php include("includes/header.php");?>
    <div id="title">
    	<img id="aerosquad_header_shift" src="images/header_aerosquad.png" alt="TAM" />
    </div>
    
	<div id="aerosquad_content">
    	<div id="aerosquad_top">
        	<div id="aerosquad_top_left" class="aerosquad_top_float">
            	<img src="images/aerosquad1.jpg" alt="TAM" />
            </div>
         	<div id="aerosquad_top_right" class="aerosquad_top_float">
            	<p>Designed to immerse and engage students in fun, accessible, and engaging learning activities Monday through Saturday, the Aero Squad Afterschool Program (AS) aims to:</p>
                <ul>
                	<li>
                		<img src="images/participate_bullet1.png" alt="TAM" />
                    	<p>Develop positive youth attitudes toward education.</p>
					</li>
                    <li>
                		<img src="images/participate_bullet2.png" alt="TAM" />
                    	<p>Improve academic performance in school.</p>
					</li>
                    <li>
                		<img src="images/aerosquad_bullet3.png" alt="TAM" />
                    	<p>Improve college readiness (e.g. graduating high school, improve SAT test-taking skills).</p>
					</li>
                    <li>
                		<img src="images/aerosquad_bullet4.png" alt="TAM" />
                    	<p>Develop positive character traits and leadership qualities.</p>
					</li>
                    <li>
                		<img src="images/aerosquad_bullet5.png" alt="TAM" />
                    	<p>Provide a viable pathway toward a career in aviation.</p>
					</li>
                    <li>
                		<img src="images/aerosquad_bullet6.png" alt="TAM" />
                    	<p>Instill a lifelong interest in STEM, including electing a STEM major in college.</p>
					</li>
                </ul>
               
            </div>
        </div>
        <div id="aerosquad_bottom">
        	<h1>Aero Squads</h1>
            <ul>
            	<li>
                	<img src="images/aerosquad2.jpg" alt="TAM" />
                    <h2>Aviation Explorer's Post 409 (AE)</h2>
                    <p>Aviation Explorers is Post Number 409 of Learning for Life’s Aviation Career Exploring program--one of several career exploration programs where young men and women, between eight to 21 years of age, can receive hands-on learning in different career fields. Individual Post participants are referred to as aviation explorer students. With an aviation focus, AE consists of two complimentary programs, the Flight Sim Cadet Course and Youth Leadership Council.</p>
                </li>
                <li>
                	<img src="images/aerosquad3.jpg" alt="TAM" />
                    <h2>Fly to Success STEM Academy (FTS)</h2>
                    <p>Fly to Success is an afterschool STEM enrichment program with a hands-on experiential, project, and inquiry-based approach to learning. Designed to be fun and engaging, the FTS curriculum takes STEM out of the textbook, makes it relevant to students’ daily lives, and encourages them to explore their natural curiosity of how the world works. The program is focused on improving STEM literacy and familiarizing students with STEM fields.</p>
                </li>
                <li>
                	<img src="images/aerosquad4.jpg" alt="TAM" />
                    <h2>Youth Leadership Council (YLC)</h2>
                    <p>The Youth Leadership Council is a youth and career development program for high-school-aged AE students. The program serves two purposes: to expose students to different career fields in the aeronautics and other STEM-based industries; and to build positive character traits and leadership qualities necessary to succeed in college and professional careers.</p>
                    <p>Guided by volunteer adult advisers, the YLC maintains a cabinet of rotating youth officers who are responsible for organizing group activities for members. Activities include field trips to aviation and aeronautics-related destinations (e.g. science/aviation museums, air shows, Air Force bases), guest lectures on topics ranging from STEM to job interview skills, and fundraisers to raise money for activities.</p>
                </li>
                <li>
                	<img src="images/aerosquad5.jpg" alt="TAM" />
                    <h2>Flight Sim Cadet Course(FS)</h2>
                    <p>The Flight Sim Cadet Course engages AE students in aviation history and provides high quality flight training through computer-based simulators under the direction of a professionally trained pilot.</p>
					<p>Through aviation learning, students are immersed in a real-life application of the math and science lessons they learn in school and in our Fly to Success STEM Academy. If students choose to pursue piloting as a profession, the course makes learning to fly more cost-efficient by teaching procedures in the simulator rather than in the cockpit. Once a student moves from the simulator to actual flying, they will have attained a tangible skill that will help them stand out in college and job applications.</p>
                </li>
            </ul>
        </div>	
            
    
    </div><!--end content-->
    
    <?php include("includes/footer.php");?>

</div> <!--end container-->
</body>
</html>