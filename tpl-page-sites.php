 <?php
  // Template name: Сайты
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

 while(have_posts() ){
 	the_post();
 	?>		
 	<div class="layout-page relative" id="pjax-container">
 		<div class="wrapper container-page">
 			<?php get_template_part( 'template-parts/layouts/layouts','btn-sites'); ?>
 			<section class="section-projects">
 				<div class="fp-table" >
 					<div class="fp-tableCell h100vh">
 						<div class="flex center flex-wrap">
 							<?php

 							if( have_rows('sites') ):
 								$c = 0.1;
 								$d = 0.3;
 								while ( have_rows('sites') ) : the_row();

 									if( get_row_layout() == 'add_info' ):

 										if(get_row_index() == 4){
 											?>

 											<div class="btn-pink pink activat-tab wow zoomIn none "  data-wow-delay="0.5s" data-wow-duration="0.7s" style="background: <?php the_sub_field('color_title'); ?>;width: 100%;" data="<?php the_sub_field('nazvanie_galerei')?>" data-title="<?php the_sub_field('title')?>">
 												<a href="#tabs" class="mobile-t">
 													<?php the_sub_field('title')?>
 												</a>
 											</div>
 											<?php
 										}

 										else{
 											?>
 											<div class="block-work block-h wow fadeInRight none2"  data-wow-delay="<?= $c+=0.2?>s" data-wow-duration="<?= $d+= 0.1?>s" data-title="<?php the_sub_field('title')?>">
 												<div class="header-lyt" style="background: <?php the_sub_field('color_title')?>" ><?php the_sub_field('title')?></div>
 												<div class="content-txt">
 													<?php the_sub_field('desc')?>
 												</div>
 												<div class="absolute">
 													<div class="price">
 														<?php the_sub_field('czena')?>
 													</div>
 													<div class="button-flex flex">
 														<a href="#form" class="green2 mr1" style="background:<?php the_sub_field('osnovnoj_czvet')?> "><?= pll__('Заказать')?></a>
 														<a href="#tabs" class="green2 activat-tab mobile-t" data="<?php the_sub_field('nazvanie_galerei')?>"  style="background:<?php the_sub_field('osnovnoj_czvet')?> " data-title="<?= get_sub_field('title')?>"><?= pll__('Пример')?></a>
 													</div>
 												</div>
 											</div>

 											<?php

 										}
 									endif;

 								endwhile;


 							endif;

 							?>

 						</div>
 					</div>

 				</div>
 			</section>

 			<section class="section-project none">
 				<?php

 				if( have_rows('sites') ):
 					$a = 0.7;
 					$b = 0.2;
 					while ( have_rows('sites') ) : the_row();
 						if( get_row_layout() == 'add_info' ):?>

 						<div class="sec-worck mb90 section-each sec-work-site flex space-between flex-wrap none" data-attr="<?= get_sub_field('title')?>" data-title="<?= get_sub_field('title')?>">
 							<div class="block-work wow " data-wow-delay="0.7s" data-wow-duration="0.8s" data-title="<?= get_sub_field('title')?>">
 								<div class="header-lyt" style="background: <?php the_sub_field('color_title')?>" ><?php the_sub_field('title')?></div>
 								<div class="content-txt">
 									<div class="mobile-hidden">
 										<?php the_sub_field('desc')?>
 									</div>
 									<div class="mobile-block">
 										<?php the_sub_field('kontent')?>
 									</div>
 								</div>
 								<div class="absolute pr-a">
 									<div class="price">
 										<?php the_sub_field('czena')?>
 									</div>
 									<div class="button-flex flex">
 										<a href="#form" class="green2 mr1" style="background:<?php the_sub_field('osnovnoj_czvet')?> "><?= pll__('Заказать')?></a>
 										<a href="#tabs" class="green2  mobile-t" data="<?php the_sub_field('nazvanie_galerei')?>"  style="background:<?php the_sub_field('osnovnoj_czvet')?>" ><?= pll__('Пример');?></a>
 									</div>
 								</div>
 							</div>
 							<div class="content wow fadeInRight "   data-wow-delay="0.9s" data-wow-duration="1s">
 								<?php the_sub_field('kontent')?>
 							</div>
 						</div>

 						<?php
 					endif;

 				endwhile;


 			endif;

 			?>

 		</section>


 		<div class="fp-table table-none" >
 			<div class="fp-tableCell h100vh">
 				<div class="tabs"  id="tabs">
 					<div class="container-tab">
 						<?php

 						if( have_rows('sites') ):?>
 						<ul class="accordion-tabs">
 							<?php
 							while ( have_rows('sites') ) : the_row();
 								if( get_row_layout() == 'add_info' ):
 									?>
 									<li class="tab-head-cont" data-attr="<?php the_sub_field('nazvanie_galerei')?>">
 										<a href="#"  style="background: <?php the_sub_field('color_title')?>"><?php the_sub_field('nazvanie_galerei')?></a>
 										<section class="mobile-none">
 											<div class="flex flex-wrap space-between section-work">

 												<?php
 												$i = 0.4;
 												$j = 0.5;
 												if( have_rows('foto_gal') ):
 													while ( have_rows('foto_gal') ) : the_row();?>
 													<div class="wow fadeInUp portf" data-wow-delay="<?= $i+=0.1?>s" data-wow-duration="<?= $j+=0.1?>s">
 														<a href="<?= get_sub_field('link_for_img'); ?>" target="_blank" class="link_site">
 															<img src="<?= get_sub_field('add_img'); ?>"  alt="<?= get_sub_field('nazvanie_galerei')?>" />
 														</a>
 													</div>
 													<?php
 												endwhile;

 											endif;
 											?>

 											<div class="wow fadeInUp all-project" data-wow-delay="1s" data-wow-duration="1.3s">
 												<a href="<?= $work?>">
 													<?= pll__('Cмотреть все');?>
 												</a>
 											</div>

 										</div>
 									</section>
 								</li>
 								<?php
 							endif;
 						endwhile;


 						?>
 					</ul>
 					<?php
 				endif;

 				?>


 			</div>

 		</div>
 	</div>
 </div>

 <div class="section-mobile-tabs" id="tabs2">

 	<div class="container-tab-mobile">
 		<?php

 		if( have_rows('sites') ):?>
 		<ul class="accordion-tabs-mobile">
 			<?php
 			while ( have_rows('sites') ) : the_row();
 				if( get_row_layout() == 'add_info' ):
 					?>
 					<li class="tab-head-cont-mobile" style="background: <?php the_sub_field('color_title')?>" data-attr="<?php the_sub_field('nazvanie_galerei')?>">
 						<a href="#"><?php the_sub_field('nazvanie_galerei')?></a>
 					</li>
 					<?php
 				endif;
 			endwhile;


 			?>
 		</ul>
 		<?php
 	endif;



 	if( have_rows('sites') ):?>

 	<?php
 	while ( have_rows('sites') ) : the_row();
 		if( get_row_layout() == 'add_info' ):
 			?>
 			<section data-attr="<?php the_sub_field('nazvanie_galerei')?>">
 				<div class="flex flex-wrap space-between section-work">
 					<?php
 					$i = 0.4;
 					$j = 0.5;
 					if( have_rows('foto_gal') ):
 						while ( have_rows('foto_gal') ) : the_row();?>

 						<div class="wow fadeInUp portf" data-wow-delay="<?= $i+=0.1?>s" data-wow-duration="<?= $j+=0.1?>s">
 							<a href="<?= get_sub_field('link_for_img'); ?>" target="_blank" class="link_site">
 								<img src="<?= get_sub_field('add_img'); ?>"  alt="<?= get_sub_field('nazvanie_galerei')?>">
 							</a>
 						</div>
 						<?php
 					endwhile;

 				endif;
 				?>

 				<div class="wow fadeInUp all-project" data-wow-delay="1s" data-wow-duration="1.3s">
 					<a href="<?= $work?>">
 						<?= pll__('Cмотреть все');?>
 					</a>
 				</div>

 			</div>
 		</section>
 		<?php
 	endif;
 endwhile;


 ?>
 <?php
endif;

?>

</div>

</div>

</div>

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

</div>

<?php
}

get_footer();

?>