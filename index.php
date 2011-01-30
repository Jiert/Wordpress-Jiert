<?php
/*
 * Template: Index.php
 *
 * @package WordPress
 * @subpackage Theme_Name
 */
get_header();
?>

<div id="contentWrapper">
	<div id="content">

	<?php if (have_posts()) : ?> 
	
	<?php while (have_posts()) : the_post(); ?> 
		
	<div class="postWrapper shadow" id="post-<?php the_ID(); ?>">
	
	<div class="postBorderTop roundCornerTop">
		<p class="meta">Posted under: <?php the_category(', '); ?></p>
		<p id="date" class="meta"><?php the_time('F jS, Y'); ?></p>
	</div>
	
		<div class="post">
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2> 

			<img class="alignleft" src="<?php echo get_post_meta($post->ID, "postImage", true);?>" />  


			<?php the_content('<br/>More &raquo;'); ?>
		</div><!-- post -->
		

	<div class="postBorderBottom roundCornerBottom">
			<p class="meta">By: <?php the_author_posts_link(); ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?><?php the_tags(' | Tags: ', ', ', ''); ?> </p>
			<p id="edit" class="meta"><?php edit_post_link('Edit this entry'); ?></p>
	</div>
	
	</div><!-- postWrapper -->
	
	<?php endwhile; ?>

	<?php previous_posts_link('<div id="newer" class="button">&laquo; Newer Posts</div>'); ?>
	<?php next_posts_link('<div id="older" class="button">Older Posts &raquo;</div>'); ?>
	
	<?php else : ?>

		<h2>Nothing Found</h2>

	<?php endif; ?>

</div><!-- end content -->

<?php get_sidebar(); ?>
</div><!-- contentWrapper -->
<?php get_footer(); ?>