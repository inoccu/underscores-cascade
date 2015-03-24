<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package underscores-cascade
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</div><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'underscores-cascade' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<div class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'underscores-cascade' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-footer -->
</div><!-- #post-## -->
