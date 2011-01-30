<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

	<!-- begin head -->
	<head>
	
		<!-- set content type -->
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		
		<!-- smart page titles -->
		<title>
			<?php if (function_exists('is_tag') && is_tag()) {
		        single_tag_title('Tag Archive for &quot;'); echo '&quot; - ';
		    } elseif (is_archive()) {
		        wp_title(''); echo ' Archive - ';
		    } elseif (is_search()) {
		        echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';
		    } elseif (!(is_404()) && (is_single()) || (is_page())) {
		        wp_title(''); echo ' - ';
		    } elseif (is_404()) {
		        echo 'Not Found - ';
		    }
		    if (is_home()) {
		        bloginfo('name'); echo ' - '; bloginfo('description');
		    } else {
		        bloginfo('name');
		    }
		    if ($paged > 1) {
		        echo ' - page '. $paged;
		    } ?>
		</title>
		
		<!-- link to main stylesheet -->
		<link rel='stylesheet' href='<?php bloginfo("stylesheet_url"); ?>' type='text/css' media='screen' />
		<link rel='stylesheet' href='<?php bloginfo("template_url"); ?>/css/main.css' type='text/css' media='screen' />
		
		<!-- loads jquery -->
		<?php wp_enqueue_script('jquery'); ?>
		
		<!-- provides a hook for the head -->
		<?php wp_head(); ?>
		
		<!-- use the following method to link to other assets -->
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/MYSCRIPT.js"></script>
		

		
		<!-- use if custom assets are needed; will load only in those cases; uses page ID -->
		<?php if (is_page("PAGE-ID-NUMBER")) { ?>
		    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/MYSTYLE.css" type="text/css" media="screen" />
			<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/MYSCRIPT.js"></script>
		<?php } ?>  
	
	<!-- end head -->   
	</head>

	<!-- begin body -->
	<body>
		<div id="headerWrap">
			<!-- begin header -->
			<div id="header">
		    	<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		    	<p><?php bloginfo('description'); ?></p>
		      
			    <!-- begin navigation -->
			    <div id="navigation">
			    	<?php wp_list_pages("title_li="); ?>
			    	<?php wp_list_categories("title_li="); ?>
			    <!-- end navigation -->	
			    </div>
		    
		     <!-- end header -->
		    </div>
		   	    
		</div><!-- end headerWrap -->