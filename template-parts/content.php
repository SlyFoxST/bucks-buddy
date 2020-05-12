<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package corporates
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php get_template_part( 'template-parts/layouts/layout','btn-post'); ?>
	<header class="entry-header">
		<div class="container flex wrap-post-content">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			?>
			<div class="bredcrumbs-wrap">
				<?php
				if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
			</div>
		</header><!-- .entry-header -->


		<div class="container">
			<div class="entry-content">
				<?php corporates_post_thumbnail(); ?>
				<div class="wrap-content">
					<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'corporates' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					?>
				</div>
				<?php get_template_part( 'template-parts/layouts/share','btn'); ?>
				</div>
				<?php

		// След./Пред. Пост.
				the_post_navigation( array(
					'next_text' => '<div class="meta-nav" aria-hidden="true">&rarr;</div> ' .
					'<div class="screen-reader-text">'. pll__('Следующая статья') .'</div> ' .
					'<div class="post-title">%title</div>',
					'prev_text' => '<div class="meta-nav" aria-hidden="true">&larr;</div> ' .
					'<div class="screen-reader-text">'. pll__('Предыдущая статья') .'</div> ' .
					'<div class="post-title">%title</div>',
					'screen_reader_text' => ' ',
				) );

				?>

			</div><!-- .entry-content -->
		</div>

	</article><!-- #post-<?php the_ID(); ?> -->
