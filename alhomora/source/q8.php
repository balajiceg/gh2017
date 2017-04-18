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
if($score <=100)
header("Location: http://geohorizon.in/alhomora/source/q1.php");
else if($score == 200)
header("Location: http://geohorizon.in/alhomora/source/q2.php");
else if($score == 300)
header("Location: http://geohorizon.in/alhomora/source/q3.php");
else if($score == 400)
header("Location: http://geohorizon.in/alhomora/source/q4.php");
else if($score == 500)
header("Location: http://geohorizon.in/alhomora/source/q5.php");
else if($score == 600)
header("Location: http://geohorizon.in/alhomora/source/q6.php");
else if($score == 700)
header("Location: http://geohorizon.in/alhomora/source/q7.php");
else if($score == 2000)
header("Location: http://geohorizon.in/alhomora/source/q20.php");
else if($score == 900)
header("Location: http://geohorizon.in/alhomora/source/q9.php");
else if($score == 1100)
header("Location: http://geohorizon.in/alhomora/source/q11.php");
else if($score == 1200)
header("Location: http://geohorizon.in/alhomora/source/q12.php");
else if($score == 1300)
header("Location: http://geohorizon.in/alhomora/source/q13.php");
else if($score == 1400)
header("Location: http://geohorizon.in/alhomora/source/q14.php");
else if($score == 1500)
header("Location: http://geohorizon.in/alhomora/source/q15.php");
else if($score == 1600)
header("Location: http://geohorizon.in/alhomora/source/q16.php");
else if($score == 1700)
header("Location: http://geohorizon.in/alhomora/source/q17.php");
else if($score == 1800)
header("Location: http://geohorizon.in/alhomora/source/q18.php");
else if($score == 1900)
header("Location: http://geohorizon.in/alhomora/source/q19.php");
else if($score == 1000)
header("Location: http://geohorizon.in/alhomora/source/q10.php");
else if($score == 2100)
header("Location: http://geohorizon.in/alhomora/source/gameover.php");
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



    </style>
  </head>
  <body>

    <!-- Header -->
      <header id="header">
        <h1><strong><a href="index.html">WELCOME TO GEOHORIZON</a></strong>2017</h1>
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
              <h2><u>WELCOME TO ALOHOMORA</u></h2><br />
              
          <section id="main" class="wrapper">
        <div class="container">

          <header class="major special">
            <h2>Q8.Cheer for the unsung hero!</h2>
            <section id="three" class="wrapper style1">
          <div class="container">
            <header class="major special">
              <h2></h2>
            </header>
            <div class="feature-grid">
              <div class="feature">
                <div><img src="media/image15.jpg" alt="" width="300" height="300"/></div>
                <div class="content">
                  <header>
                    <h4></h4><br />
                   <br />
                    <br />
                    
                  </header>
                  
                  <ul class="actions">
            
              
                </ul>
                </div>
              </div>

              
                <div><img src="media/image16.jpg" alt="" width="300" height="300"/></div>
                <div class="content">
                  <header>
                    <h4></h4><br />
                  <br />
                  
                  </header>
                  <form method="POST" name="gameform" action="answer8.php"><br /><br />
  GIVE THE ANSWER HERE:<br>
  <input type="text" name="name">
  <br>
  <input type="submit" value="Submit" ><br>

</form>
                  
                  
                </div>
              </div>
              
            </div>
          </div>
          </div>
          </section>
          </header>
          </div>
          </section>
        

          
            
            </header>
        </section>

  </body>
</html>