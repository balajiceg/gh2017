<?php 
require_once("./include/membersite_config.php");


if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

$name = $_POST["name"]; 

if ($name == 'narendramodi')
{
  
 $name1 = $fgmembersite->UserFullName();
$link = mysql_connect("148.72.232.183", "idiot", "alhomora2017");
 mysql_select_db("geologin");
mysql_query("UPDATE fgusers3 SET score = '8' WHERE name='$name1'");
header('Location: q8.php'); 

}
else
{
 header('Location: q7.php');  
}



?>

<html>
<head>
	
</head>

<body>


</body>
</html>