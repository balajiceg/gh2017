<?php
include_once("inc/facebook.php"); //include facebook SDK
######### Facebook API Configuration ##########
$appId = '817859875021472'; //Facebook App ID
$appSecret = '2470c72312622c44f46262815713d6f4'; // Facebook App Secret
$homeurl = 'http://geohorizon.in/alhomora/facebook_login_with_php/facebook_login_with_php/';  //return to home
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret

));
$fbuser = $facebook->getUser();
?>