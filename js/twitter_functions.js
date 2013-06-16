
/* ALL TWITTER FUNCTIONS MUST BE HERE **/
function getTimeline(Tuser)
{	$.ajax({ 	url: 'twitter_functions/get_timeline.php', 	data: {user:Tuser},	type:'POST',		success: function(data){ $('#timeline_results').html(data); }, 	error: function(data) { $('#timeline_results').html('Ajax request failed');}	});
}function postTweet(tweet){$.ajax({ 	url: 'twitter_functions/post_tweet.php',	data: {tweet:tweet},	type:'POST',		success: function(data){ $('#post_results').html(data); }, 	error: function(data) { $('#post_results').html('Ajax request failed');}	});}