<?php
/**
 * Template: category.php
 *
 * @package WordPress
 * @subpackage Jiert
 */
get_header();
?>
<div id="contentWrapper">
<div id="content">

	<?php if (have_posts()) : ?> 
	<?php while (have_posts()) : the_post(); ?> 
		
	<div class="postWrapper">
	
	<div class="postBorderTop roundCornerTop">
		<p class="meta">Posted under: <?php the_category(', '); ?></p>
		<p id="date" class="meta"><?php the_time('F jS, Y'); ?></p>
	</div>
		
		<div class="post" id="post-<?php the_ID(); ?>"> 
				
				<!-- header and permalink -->
				<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2> 
				<img class="alignleft" src="<?php echo get_post_meta($post->ID, "postImage", true);?>" />				
				<!-- the full content of the post -->
				<?php the_content('<br/>More &raquo;'); ?>
			
			<!-- end post -->
			</div>
			
			<div class="postBorderBottom roundCornerBottom">
			<p class="meta">By: <?php the_author_posts_link(); ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?><?php the_tags(' | Tags: ', ', ', ''); ?> </p>
			<p id="edit" class="meta"><?php edit_post_link('Edit this entry'); ?></p>
	</div>	

						
			<div class="comments-template">
	            <?php comments_template(); ?>
	        </div><!-- comments-template -->
        
        	
        
        
		<!-- end postWrapper -->	
		</div>

		
                    
        


		<!-- end of loop -->
		<?php endwhile; ?>
			
		<!-- in case there are no posts -->
		<?php else : ?>
	
			<!-- display this -->
			<h2>Nothing Found</h2>
	
	<?php endif; ?>

<!-- end content -->
</div>

<?php get_sidebar(); ?>
</div><!-- end contentWrapper -->
<?php get_footer(); ?>



