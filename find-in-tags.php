<?php
/*
* Plugin Name: Find in Twitter TAGS Explorer
* Description: Shortcode for a twitter TAGS lookup form
* Version: 0.2
* Author: @cogdog
* Author URI: https://cog.dog

*/


function tags_explorer_lookup( $atts ){

	// get the parameter from shortcode
	extract( shortcode_atts( array( "url" => ''), $atts ) );  
	
	// This thing won't work without an URL, Earl
	if ( empty($url) ) {
		return '<p style="color:red">Ooops, no URL provided for Twitter TAGS Conversation Explorer! This needs to come from the worksheets set up from <a href="https://tags.hawksey.info">https://tags.hawksey.info</a></p>';
		
	} else {
		// insert a small form
		return '<h3>Find Twitter Name in TAGS Conversation Explorer</h3><form action="javascript:t=document.getElementById(\'tweeter\').value;if(t.charAt(0)===\'@\')t=t.substr(1);window.open(\'' . $url . '&name=\' + t, \'_blank\')" id="findtagsform">
<label for="twitter">Twitter Name</label><br /><input type="input" id="tweeter"> <input type="submit" value="Find">
				</form>';
	} 
}

add_shortcode('findintags', 'tags_explorer_lookup');
?>