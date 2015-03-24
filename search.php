<?php
/**
 * The template for displaying search results pages.
 *
 * @package underscores-cascade
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<div class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'underscores-cascade' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</div><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</div><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
