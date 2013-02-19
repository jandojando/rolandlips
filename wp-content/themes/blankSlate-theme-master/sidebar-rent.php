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
			<?php dynamic_sidebar( 'sidebar-5' ); ?>


<ul>
	  <?php
 
	  // The Query
	  query_posts( array ( 'category_name' => 'Rent', 'posts_per_page' => -1 ) );
 
	  // The Loop
	  while ( have_posts() ) : the_post(); ?>
	    <li>
	    <em><?php the_time('M'); ?> <?php the_time('j'); ?> <?php the_time('Y'); ?></em> &nbsp; <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	  	</li>
 
	  <?php endwhile;
 
	  // Reset Query
	  wp_reset_query();
 
	  ?>
</ul>




		</div><!-- #secondary -->


