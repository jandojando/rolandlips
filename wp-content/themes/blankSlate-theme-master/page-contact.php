<?php
/*
Template Name: Contact
*/

/**
 *
 * @package WordPress
 * @subpackage blankSlate
 * @since blankSlate 3.5
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>
    
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar('contact'); ?>
<div class="clearfix"></div>
<?php get_footer(); ?>