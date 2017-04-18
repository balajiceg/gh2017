<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('www.geohorizon.in');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('balaji.9th@gmail.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'148.72.232.183',
                      /*username*/'idiot',
                      /*password*/'alhomora2017',
                      /*database name*/'geologin',
                      /*table name*/'fgusers3');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('qSRcVS6DrTzrPvr');

?>