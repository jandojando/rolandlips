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
			<?php dynamic_sidebar( 'sidebar-1' ); ?>

<?php


//if on single page
if ( is_single() ) :
//setup post data
global $post;
//get the category(s) of current post
$categories = get_the_category();
//loop through each category the post belongs too
foreach ($categories as $category) :
?>

<li class="sidebar_links">
<h2><?php echo $category->name; ?></h2>

<ul>
<?php
//how many other posts from each of the current posts category
$posts = get_posts('numberposts=100&category='. $category->term_id);
//loop through posts
foreach($posts as $post) :
?>

	   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="sidebar-list"> <li>
	    <?php the_post_thumbnail('thumbnail'); ?> 
	    <?php the_title(); ?><div class="clearfix"></div>
	  	</li></a><div class="clearfix"></div>
<?php endforeach; ?>
</ul>

</li>
<?php
//end categories loop
endforeach; endif ; ?>




		</div><!-- #secondary -->


