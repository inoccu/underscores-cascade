<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package underscores-cascade
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="main" class="site-main" role="main">

			<div class="error-404 not-found">
				<div class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'underscores-cascade' ); ?></h1>
				</div><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'underscores-cascade' ); ?></p>

					<?php get_search_form(); ?>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php if ( underscores_cascade_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php _e( 'Most Used Categories', 'underscores-cascade' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>

					<?php
						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'underscores-cascade' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div><!-- .page-content -->
			</div><!-- .error-404 -->

		</div><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
