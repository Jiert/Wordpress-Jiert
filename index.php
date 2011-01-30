<?php
/**
 * Template: Index.php
 *
 * @package WordPress
 * @subpackage Theme_Name
 */
get_header();
?>

<div id="contentWrapper">
<div id="content">

<!-- Are there any posts published? -->
<?php if (have_posts()) : ?> 
	
	<?php while (have_posts()) : the_post(); ?> 
	
	<!-- each post will have this div applied to it -->
		
	<div class="postWrapper shadow" id="post-<?php the_ID(); ?>">
	
	<div class="postBorderTop roundCornerTop">
		<p class="meta">Posted under: <?php the_category(', '); ?></p>
		<p id="date" class="meta"><?php the_time('F jS, Y'); ?></p>
	</div>
	
	 
	
		
	
		<div class="post">
		<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2> 

		<!-- custom field that is attached to this Post. Here, the key of "Post Thumb," which returns an <img /> tag symbolizing this Post. -->
		<img class="alignleft" src="<?php echo get_post_meta($post->ID, "postImage", true);?>" />  


		
		<!-- the full content of the post -->
		<?php the_content('<br/>More &raquo;'); ?>
	</div><!-- end post -->
		

	<div class="postBorderBottom roundCornerBottom">
			<p class="meta">By: <?php the_author_posts_link(); ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?><?php the_tags(' | Tags: ', ', ', ''); ?> </p>
			<p id="edit" class="meta"><?php edit_post_link('Edit this entry'); ?></p>
	</div>
	
	</div><!-- postWrapper -->
	
	<!-- end of loop -->
	<?php endwhile; ?> <!-- End of the loop -->

	<!-- links to older/newer posts -->
	<?php previous_posts_link('<div id="newer" class="button">&laquo; Newer Posts</div>'); ?>
	<?php next_posts_link('<div id="older" class="button">Older Posts &raquo;</div>'); ?>
	
	
	<!-- in case there are no posts -->
	<?php else : ?>

		<!-- display this -->
		<h2>Nothing Found</h2>

<?php endif; ?>

</div><!-- end content -->

<?php get_sidebar(); ?>
</div><!-- end contentWrapper -->
<?php get_footer(); ?>