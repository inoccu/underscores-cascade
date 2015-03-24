<?php
/**
 * @package underscores-cascade
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php underscores_cascade_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</div><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'underscores-cascade' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'underscores-cascade' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<div class="entry-footer">
		<?php underscores_cascade_entry_footer(); ?>
	</div><!-- .entry-footer -->
</div><!-- #post-## -->