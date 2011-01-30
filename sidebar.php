<?php
/**
 * Template: sidebar.php
 *
 * @package WordPress
 * @subpackage Heard Mentallity
 */
?>

<div id="sidebar" class="roundCornerTop">

<!-- 
	<ul>
		<?php// if (!function_exists('dynamic_sidebar') || !dynamic_sidebar()) : ?>
			<li></li>
		<?php// endif; ?>
	</ul>
-->

	
	<ul id="blogroll">	
		<?php wp_list_bookmarks('title_before=<div class="sideBarHeader roundCornerTop"><h3>&title_after=</h3></div>');?>
	</ul>


</div>
