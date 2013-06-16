<?php	header('Access-Control-Allow-Origin: *');?>		
<!doctype html>
<html lang="en">
	<head>	
		<meta charset="UTF-8">	
		<title>TWITTER API</title>	
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>			
		<header class="container mt50">	
			<div class="row">		
				<h1 class="span4">TWITTER API</h1>	
			</div>	
		</header>		
		<section id="main" class="container">		
			<div class="row">			
				<div id="get-timeline" class="span8">				
					<input type="text" id="account"/>				
					<button type="button" onclick="getTimeline(document.getElementById('account').value)">Get timeline</button>		
				</div>			
				<div id="timeline_results" class="span8">					
					<h3>Aqui van los resultados</h3>			
				</div>				
			</div>
			<div class="row">
				<div id="post-tweet" class="span8">
					<textarea id="tweet" rows="5"/></textarea>			
					<button type="button" onclick="postTweet(document.getElementById('tweet').value)">Tweet</button>
					<span id="post_results"></span>
				</div>
			</div>
		</section>			
	<!-- SCRIPTS -->
	<script src="js/jquery.min-1.9.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/twitter_functions.js?<?php echo date('l jS \of F Y h:i:s A'); ?>"></script>
	</body>
</html>