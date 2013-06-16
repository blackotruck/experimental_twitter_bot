<?php
require_once('../tmhoauth/tmhoauth.php');

// tokens
$consumer_key='2wu0QO6eQ5Q9fgPS8Jtog';
$consumer_secret = '86DeOM2ACBcGGO8srC20VuNHqt4zKD4frsP4ljd5RQ';

$user_token= '957681248-oTsl1jS9jCciz9P5W0vWIgFtK3KUSrIlCHvM6qi8';
$user_secret= 'Uu6YjMDV0yzQ84l3p5oLp9sjtFMARF0SPdCErPXQAs';	
	
// Create an OAuth connection to the Twitter API 
$connection = new tmhOAuth(array( 'consumer_key' => $consumer_key, 'consumer_secret' => $consumer_secret, 'user_token' => $user_token, 'user_secret' => $user_secret ));
?>