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
		<div class="entry-content-blog">
			<div class="flex wrap-archive">
				<?php
				$lang = pll_current_language();

				if ( $lang == 'eng' ) { ?>
				<a href="<?php the_permalink()?>" class="post-thumbnail">
					<?php the_post_thumbnail(); ?>
				</a>

				<?php
			}
			else{
				corporates_post_thumbnail();
			}

			?>
			<div class="wrap-content">
				<h3><a href="<?php the_permalink()?>"><?= get_the_title()?></a></h3>
				<?php
				the_truncated_post(350);
				?>
				<div class="btn-more">
					<a href="<?php the_permalink()?>"><?= pll__('Подробнее');?>...</a>
				</div>
			</div>
		</div>
		<div class="wrp-share-archive">
			<?php get_template_part( 'template-parts/layouts/share','btn'); ?>
		</div>
	</div>
</div><!-- .entry-content -->
</div>

</article><!-- #post-<?php the_ID(); ?> -->
