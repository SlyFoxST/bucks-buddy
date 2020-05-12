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
	<div class="container">
		<div class="entry-content-blog flex wrap-archive">
			<?php corporates_post_thumbnail(); ?>
			<div class="wrap-content">
				<h3><?= get_the_title()?></h3>
				<?php
				the_truncated_post(30);
				?>
			</div>
		</div>
		<?php get_template_part( 'template-parts/layouts/share','btn'); ?>



	</div><!-- .entry-content -->
</div>

</article><!-- #post-<?php the_ID(); ?> -->
