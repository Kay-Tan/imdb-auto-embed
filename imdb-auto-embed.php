<?php
/*
* Plugin Name: IMDB Auto Embed
* Description: Automatically embed any movie stream using a shortcode and the films IMDB code. With this plugin you can automate your streaming website without having to worry about broken links or searching and uploading movies. Multiple streaming sources are fetched automatically giving you access to more than 10,000 movies.
* Version: 1.2
* Author: Hydra Movies
* Author URI: https://hydramovies.com
*/

// Fetches the stream via the Hydra Movies API.

function hydra_connect($atts){
	extract(shortcode_atts( array(
			'id' => 'tt0063350',
			'width' => '640',
			'height' => '360',
			'scrolling' => 'no',
			'class' => 'hydra-iframe',
			'frameborder' => '0'		   	   
		), $atts ));
	return "<!-- Hydra Movies IMDB Auto Embed Plugin by https://hydramovies.com/ -->\n<iframe src=\"//hydramovies.com/streams/api/video-player.php?id={$id}\" class=\"{$class}\" width=\"{$width}\" height=\"{$height}\" frameborder=\"{$frameborder}\" scrolling=\"{$scrolling}\" allowfullscreen=\"allowfullscreen\"></iframe>"
	;
}
add_shortcode('IMDB', 'hydra_connect');
?>