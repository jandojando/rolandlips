<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage blankSlate
 * @since blankSlate 3.5
 */
?>


		<div id="sidebar" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-4' ); ?>
			
<h2>Overview</h2>

<ul>
	  <?php
 
	  // The Query
	  query_posts( array ( 'category_name' => 'appliedwork', 'posts_per_page' => -1 ) );
 
	  // The Loop
	  while ( have_posts() ) : the_post(); ?>
	   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="sidebar-list"> <li>
	    <?php the_post_thumbnail('thumbnail'); ?> 
	    <?php the_title(); ?><div class="clearfix"></div>
	  	</li></a><div class="clearfix"></div>
 
	  <?php endwhile;
 
	  // Reset Query
	  wp_reset_query();
 
	  ?>
</ul>




		</div><!-- #secondary -->


