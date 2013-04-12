<?php
/*
Template Name: Projects
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

		    <?php $the_query = new WP_Query('category_name=projects&showposts=1000'); ?>
		    
		    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

			    <div class="showpost">
			    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

			    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail'); ?></a> 

			    	<!-- READ MORE >> -->

					<?php
						global $more;
						$more = 0;
					?>

					 
					<?php the_content('Read More >>'); ?>

				<div class="clearfloat"></div></div>

		    <?php endwhile;?>
    
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar('projects'); ?>
<div class="clearfix"></div>
<?php get_footer(); ?>