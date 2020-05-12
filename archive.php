<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package corporates
 */
get_header();
$obj = get_queried_object();
//print_r($obj);
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="entry-header">
				<div class="container flex wrap-post-content">
					<h1 class="entry-title"><?= $obj->name;?></h1>	
					<div class="bredcrumbs-wrap">
						<div class="bredcrumbs-wrap">
							<div class="breadcrumbs breadcrumbs-blog" itemscope="" itemtype="http://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
								<a class="breadcrumbs__link" href="https://bucks-buddy.com/" itemprop="item">
									<span itemprop="name"><?= pll__('Главная'); ?></span>
								</a>
							</div>		
						</div>
					</div>
				</header>


				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/category', get_post_type() );

			endwhile;

			?>
			<div class="archive-navigation">
				<?php
				the_posts_pagination( array(
					'mid_size'  => 4,
					'end_size' => 1,
					'prev_text' => '&larr;',
					'next_text' => '&rarr;',
				) );
				?>
			</div>
			<?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->
</div><!-- #primary -->


<div class="section-footer orange2  p52" >
	<div class="fp-table" >
		<div class="fp-tableCell h100vh orange2">
			<div class="container">
				<div class="flex form-flex"  id="form">
					<div class="section-form">
						<?php get_template_part( 'template-parts/layouts/form','layout' );?>
					</div>
					<div class="section-contact">
						<div class="map_container wow fadeIn" data-wow-delay="1.3s" data-wow-duration="2s">
							<div class="gmap" data-url="data/1.json" data-coords="{&quot;lat&quot;: 36.742833, &quot;lng&quot;: -98.3142106}" data-marker="one"></div>
						</div>
						<?php get_template_part( 'template-parts/layouts/contacts','layout' );?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
