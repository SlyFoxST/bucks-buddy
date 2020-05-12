<?php
//Template name: Блог
get_header();
$query = new WP_Query( [
	'post_type' => 'post', 
	'order'   => 'DESC',
	'posts_per_page' => 3,
	'paged'          => ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1
] );
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php if ( $query->have_posts() ) : ?>

			<header class="entry-header">
				<div class="container flex wrap-post-content">
					<h1 class="entry-title">Blog</h1>	
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
				while ( $query->have_posts() ) :
					$query->the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/category','post' );

			endwhile;
			$pagination_args = array(
				'prev_text'          => __( 'Previous page', 'theme-domain' ),
				'next_text'          => __( 'Next page', 'theme-domain' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'theme-domain' ) . ' </span>'
			);

			wp_reset_query();
			posts_pagination();
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


?>