<?php
/**
 * @package WordPress
 * @subpackage Agrilife_Theme
 */
 /*
Template Name: News Main Page
*/
get_header();
?>
<div id="content">
	<div id="sidecontent">
    <?php if ( function_exists( "yoast_breadcrumb" ) ) yoast_breadcrumb('', ''); ?>
    
<div id="main_content"> 


<?php // tward $args = array( 'cat' => '-'.$GLOBALS[portfolio_id], 'paged'=> $paged ); query_posts($args); ?>
<?php query_posts('posts_per_page=5'); ?>
<?php //end tward ?>
<?php if (have_posts()) : $count = 0; ?>


<?php while (have_posts()) : the_post(); $count++; ?>
            
            
            
<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
	
	<div class="post-meta left-col">
		<div class="date-tab-t"></div>
		<div class="date-tab">
		<h3 class="thedate">
			<span class="day"><?php the_time('d');?></span>
			<span class="month"><?php the_time('M'); ?>
				<span class="year"><?php the_time('Y'); ?></span>
			</span>
		</h3>
		<h4 class="author"><?php the_author() ?></h4>
		<?php /* 
		<h4 class="comments"><?php comments_popup_link(__(''), __('1'), __('%')); ?></h4>
		*/ ?>
		</div>
		<div class="date-tab-b"></div>
	</div>
	
	<div class="post-content right-col">
		<h2 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<div class="storycontent">
		<?php if ( function_exists( 'get_the_image' ) ) { get_the_image( array( 'custom_key' => array( 'Thumbnail', 'thumbnail' ),'default_size' => 'medium', 'link_to_post' => true ,'image_scan' => 'true', 'image_class' => 'alignright' ) ); };?>
		<?php the_excerpt(); ?>
		<?php //echo '<a href="'. get_permalink($post->ID) . '">' . 'Read More >>' . '</a>'; ?>
	</div>
	</div>
	

</div>

	
	<?php //comments_template(); // Get wp-comments.php template ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<div class="navigation">
	<?php posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>
</div>
				</div><!-- #main_content -->
			</div><!-- #sidecontent -->
			<?php get_sidebar(); ?>
			<div class="clear"></div>	
		</div><!-- #content -->
	</div><!-- #main-box -->
	<div id="main-box-bottom"></div>
</div><!-- #main -->

<?php get_footer(); ?>
