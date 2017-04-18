<?php
require_once("./include/membersite_config.php");


if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
$name = $fgmembersite->UserFullName();
 $link = mysql_connect("148.72.232.183", "idiot", "alhomora2017");
   mysql_select_db("geologin");
$result = mysql_query("SELECT score FROM fgusers3 WHERE name='$name'");
if (mysql_num_rows($result)) {
            while ($row = mysql_fetch_assoc($result)) {
                $score = $row['score'];
				}
				}
if($score == 2)
header("Location: http://geohorizon.in/alhomora/source/q2.php");
else if($score == 3)
header("Location: http://geohorizon.in/alhomora/source/q3.php");
else if($score == 4)
header("Location: http://geohorizon.in/alhomora/source/q4.php");
else if($score == 5)
header("Location: http://geohorizon.in/alhomora/source/q5.php");
else if($score == 6)
header("Location: http://geohorizon.in/alhomora/source/q6.php");
else if($score == 7)
header("Location: http://geohorizon.in/alhomora/source/q7.php");
else if($score == 8)
header("Location: http://geohorizon.in/alhomora/source/q8.php");
else if($score == 9)
header("Location: http://geohorizon.in/alhomora/source/q9.php");
else if($score == 10)
header("Location: http://geohorizon.in/alhomora/source/q10.php");

?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>WELCOME TO GEOHORIZON 2017</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<style >
		body {
    background-color: #66e0ff;
     width: 700px ;
  	margin: 0  auto;
}

	#nav1 {
    background-color: #040000;
}



		</style>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><strong><a href="http://www.geohorizon.in/">GEOHORIZON</a></strong>2017</h1>
				<nav id="nav">
					<ul>
						<li><a href="http://geohorizon.in/alhomora/source/q1.php">GAME</a></li>
            <li><a href="rules.html">RULES</a></li>
            <li><a href="page.html">CLUES</a></li>
            <li><a href="http://www.geohorizon.in/alhomora/forum.html" target="_blank">FORUM</a></li>
             <li><a href="http://geohorizon.in/alhomora/AddScore.php">LEADER BOARD</a></li>
						
					</ul>
				</nav>
			</header>

		<!-- Main -->
			
			<section id="two" class="wrapper style2 special">
			
					<div class="container">
						<header class="major">
							<h2>ALOHOMORA</h2><br />

							<h2>Game Over! Please wait for the results.</h2><br />
							
<ul class="actions">
						
				</section>
				

		

	</body>
</html>