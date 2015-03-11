<?php

		/*
		Plugin Name: Reddit Social Button
		Plugin URI: http://github.com/dydx/reddit-social-button
		Description: Adds a Reddit upvote/downvote button to the bottom of your posts
		Version:  1.0
		Author: Joshua Sandlin
		Author URI: http://thenullbyte.org
		License: GPLv2
	 */

	add_filter( 'the_content', function($the_content) {
		$new_content = $the_content;
		$new_content .= "<script type='text/javascript' src='//www.redditstatic.com/button/button1.js'></script>";
		return $new_content;
	});

?>