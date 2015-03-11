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

  class Reddit_Social_Link {
    function __construct() {

      add_filter( 'the_content', function($content) {
        return $content .=
        "<script type='text/javascript' src='//www.redditstatic.com/button/button1.js'></script>";
      });

    }
  }

  $my_reddit_social_link = new Reddit_Social_Link();

?>