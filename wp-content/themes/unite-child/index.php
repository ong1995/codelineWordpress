<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package unite
 */

get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-8">
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content-films', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php unite_paging_nav(); ?>

		<?php else : ?>
			<?php 
				
			$args = array( 'post_type' => 'films', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			 get_template_part( 'content-films', get_post_format() );
			endwhile;

			?>
			

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
