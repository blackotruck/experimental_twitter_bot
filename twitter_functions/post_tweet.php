<?php
require_once('oauth.php');

$tweet = $_POST['tweet'];

// Send a tweet 
$code = $connection->request('POST', $connection->url('1.1/statuses/update'), array('status' => $tweet)); 
// A response code of 200 is a success 
if ($code == 200) { 
	print "Tweet sent"; 
} else { 
	print "Error: $code"; 
}
?>