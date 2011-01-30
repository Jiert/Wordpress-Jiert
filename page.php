<?php
/**
 * Template: Page.php
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

	<div class="postWrapper shadow">
	
	<div class="postBorderTop roundCornerTop">
		<!--<p class="meta">Posted under: <?php the_category(', '); ?></p>-->
		<p id="date" class="meta"><?php the_time('F jS, Y'); ?></p>
	</div>

		<div class="post" id="post-<?php the_ID(); ?>">
		
			<h2><?php the_title(); ?></h2>		
			<?php the_content(); ?>	
		</div>
		
		<div class="comments-template">
	            <?php comments_template(); ?>
	        </div><!-- comments-template -->
		
		<div class="postBorderBottom roundCornerBottom">
			<p class="meta">By: <?php the_author_posts_link(); ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?><?php the_tags(' | Tags: ', ', ', ''); ?> </p>
			<p id="edit" class="meta"><?php edit_post_link('Edit this entry'); ?></p>
	</div>
		
		
		
		
				
		</div><!-- postWrapper -->
	<?php endwhile; ?> <!-- End of the loop -->
	
		<!-- links to older/newer posts -->	
				
	<?php endif; ?>

	
</div>

<?php get_sidebar(); ?>
</div><!-- end contentWrapper -->
<?php get_footer(); ?>