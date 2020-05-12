<?php
//Template name: Продвижение
get_header();
 $lang = pll_current_language();
 $class ="";  
 if ( $lang == 'eng' ) { 
 	$path = PATH . 'en/home/';
 	$work = PATH .  'eng/work';
 } 
 elseif($lang == 'rus') {
 	$path = PATH;
 	$work = PATH .  'work';
 }
 else{
 	$class ="";
 	$path = PATH;
 }
 if ( $lang == 'eng' ){
 	$class ="active";
 }
 else{
 	$class ="noactive";
 }
 if ( $lang == 'rus' ){
 	$class2 ="active";
 }
 else{
 	$class2 ="noactive";
 }

?>
 	<div class="layout-page relative" id="pjax-container">
 		<div class="wrapper container-page">
 			<?php get_template_part( 'template-parts/layouts/layouts','btn-sites'); ?>
 			<section class="section-projects">
 				<div class="fp-table" >
 					<div class="fp-tableCell h100vh">
 						<div class="flex center flex-wrap">
 							<?php

 							if( have_rows('aplication') ):
 								$c = 0.1;
 								$d = 0.3;
 								while ( have_rows('aplication') ) : the_row();

 									if( get_row_layout() == 'add_info' ):

 										?>
 											<div class="block-work block-h wow fadeInRight none2"  data-wow-delay="<?= $c+=0.2?>s" data-wow-duration="<?= $d+= 0.1?>s" data-title="<?php the_sub_field('title')?>">
 												<div class="header-lyt" style="background: <?php the_sub_field('color_title')?>" ><?php the_sub_field('title')?></div>
 												<div class="content-txt">
 													<?php the_sub_field('desc')?>
 												</div>
 												<div class="absolute">
 										
 													<div class="button-flex flex">
 														<a href="#form" class="green2 mr1" style="background:<?php the_sub_field('osnovnoj_czvet')?> "><?= pll__('Заказать')?></a>
 														<a href="<?php the_sub_field('link_project')?>" class="green2" data="<?php the_sub_field('nazvanie_galerei')?>"  style="background:<?php the_sub_field('osnovnoj_czvet')?> " data-title="<?= get_sub_field('title')?>"><?= pll__('Сервисы')?></a>
 													</div>
 												</div>
 											</div>

 											<?php
 									endif;

 								endwhile;


 							endif;

 							?>

 						</div>
 					</div>

 				</div>
 			</section>

</div>

<div class="section-footer green2 p-footer" >
	<div class="fp-table" >
		<div class="fp-tableCell h100vh green2">
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

</div>
<?php
get_footer();
?>