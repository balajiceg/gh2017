<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
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
            <li><a href="http://geohorizon.in/events/alhomora/source/q1.php">GAME</a></li>
            <li><a href="http://geohorizon.in/events/alhomora/source/rules.html">RULES</a></li>
            <li><a href="page.html">CLUES</a></li>
            <li><a href="http://www.geohorizon.in/alhomora/forum.html" target="_blank">FORUM</a></li>
             <li><a href="http://geohorizon.in/events/alhomora/AddScore.php">LEADER BOARD</a></li>
          </ul>
        </nav>
      </header>

    <!-- Main -->
      

             <section id="main" class="wrapper">
        <div class="container">

          <header class="major special">
            <h2>LEADER BOARD</h2> 
            </header>
            </div>
            </section>
  
<?php

  $database =mysql_connect("148.72.232.183", "idiot", "alhomora2017") or die('Could not connect: ' . mysql_error());
  mysql_select_db('geologin') or die('Could not select database');

  $query = "SELECT * FROM `fgusers3` ORDER by `score` DESC";
  $result = mysql_query($query) or die('Query failed: ' . mysql_error());

  $num_results = mysql_num_rows($result);  
  $ranking = 1;

?>

  <div class="container marketing">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <table class="gradienttable">
        <tr>
          <th>Position</th>
          <th>User Name</th>      
         <th>Score</th>
        </tr>
  <?php
         while($row = mysql_fetch_array($result)){
           ?>
           <tr>
             <td><?php echo $ranking; ?></td>
             <td><?php echo $row['name']; ?></td>       
             <td><?php echo $row['score']; ?></td>
           <?php
             $ranking = $ranking + 1; /* INCREMENT RANKING BY 1 */
           ?>
           </tr>
       <?php
         } /* END OF WHILE LOOP */
       ?>

      </table>
    </div>
  </div>

<hr class="featurette-divider">
</body>
</html>