<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

	<head>
	
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		
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
		
		<!-- stylesheets -->
		<link rel='stylesheet' href='<?php bloginfo("stylesheet_url"); ?>' type='text/css' media='screen' />
		<link rel='stylesheet' href='<?php bloginfo("template_url"); ?>/css/main.css' type='text/css' media='screen' />
		
		<?php wp_enqueue_script('jquery'); ?>
		
		<?php wp_head(); ?>
    
	    <script type="text/javascript">
	
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-5589782-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
	
		</script>
    
    
	</head>

	<body>
		<div id="headerWrap">

			<div id="header">
		    	<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		    	<p><?php bloginfo('description'); ?></p>
		      

			    <div id="navigation">

			    	<?php wp_list_categories("title_li="); ?>
			    </div>
		    
		    </div><!-- header -->
		   	    
		</div><!-- headerWrap -->