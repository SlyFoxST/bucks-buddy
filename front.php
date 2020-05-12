<?php
//Template name: Главная
get_header();
$lat = get_field('lat', 'option');
$lng = get_field('lang', 'option');
$fields = get_fields();
$lang = pll_current_language();
$class ="";  
if ( $lang == 'eng' ) { 
	$path = PATH . 'eng/sites';
	$visitka = PATH . 'eng/business-card';
	$corporate = PATH . 'eng/corporate/';
	$shop = PATH . 'eng/shop';
	$application = PATH . 'eng/applications';
	$work = PATH .  'eng/work';
	$google = PATH . 'eng/google';
	$facebook = PATH . 'eng/facebook';
	$application = PATH . 'eng/application';
	$promotion = PATH . 'eng/promotion';
	$mobile = 'mb-block';
} 
elseif($lang == 'rus') {
	$path = PATH . 'sites';
	$visitka = PATH . 'business-card';
	$corporate = PATH . 'corporate';
	$shop = PATH . 'store';
	$application = PATH . 'applications';
	$work = PATH .  'work';
	$google = PATH . 'google';
	$facebook = PATH . 'facebook';
	$application = PATH . 'application';
	$promotion = PATH . 'promotion';
	$mobile = 'mb-none';
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
while(have_posts()){
	the_post();
	?>
	<div class="wrapper-section" id="pjax-container">
		<div id="fullpage">
			<section class="section section_light section_1">
				<div class="flex space-around height100 sec-top-flex">
					<div class="yellow width50 flex center relative  wow fadeInLeft none2" data-wow-delay="0.4s" data-wow-duration="0.3s" >
						<ul  class="language_list lang_home lang1">
							<li class="<?= $class;?>">
								<a lang="eng-US" hreflang="eng-US" href="<?= PATH?>/eng/home">Eng</a>
							</li> 
							<li   class="<?= $mobile;?>">
								<a lang="ru-RU" hreflang="ru-RU" href="<?= PATH?>" class="">Rus</a>
							</li> 
						</ul>
						<div class="block1">
							<div class="mobile-logo2 none2">
							
								<div class="flex gold-logo-title">
									<img src="<?= get_template_directory_uri()?>/images/bucks.svg" alt="<?php the_title()?>" class="imgs-pol1" />
									<img src="<?= get_template_directory_uri()?>/images/buddy-white.svg" alt="<?php the_title()?>" class="imgs-pol2" />
								</div>
							</div>
							<img src="<?= get_template_directory_uri()?>/images/bucks.svg" alt="<?php the_title()?>" class="imgs-polygon5  none2" />
							<img src="<?= get_template_directory_uri()?>/images/dolar.svg" alt="<?php the_title()?>" class="imgs-polygon3 none2"/>
							<img src="<?= get_template_directory_uri()?>/images/head2.svg" alt="<?php the_title()?>" class="imgs-polygon2 none2"/>

							<div class="btn-white btn-header btn-page">
								<a href="<?= $path;?>">
									<?= pll__('Создать сайт'); ?>
								</a>
							</div>
							<div class="btn-white wow fadeInUp btn-header btn-list hide" data-wow-delay="0.6s" data-wow-duration="0.5s">
								<?= pll__('Создать сайт'); ?>
							</div>
							<div class="btn-site2 flex none2 hide">
								<div class="btn2 activat-tab  wht-f b" style="background:#1bd179 " data="Визитка" data-title="Сайт Визитка">
									<a href="<?= $visitka?>">
										<?= pll__('Визитка')?>
									</a>									
								</div>
								<div class="btn2 activat-tab  wht-f b" style="background:#ffb547 " data="Корпоративный" data-title="КОРПОРАТИВНЫЙ">
									<a href="<?= $corporate?>">
										<?= pll__('Корпоративный')?>	
									</a>									
								</div>
								<div class="btn2 activat-tab  wht-f b" style="background:#4285f4 " data="Магазин" data-title="Интернет магазин">
									<a href="<?= $shop?>">
										<?= pll__('Магазин')?>	
									</a>								
								</div>
								<div class="btn2 activat-tab  wht-f b" style="background:#ff83dc " data="Уникальный" data-title="УНИКАЛЬНЫЙ САЙТ + ПРИЛОЖЕНИЯ">
									<a href="<?= $application; ?>">
										<?=  pll__('Уникальный');?>		
									</a>							
								</div>
							</div>
						</div>
					</div>

					<div class="white width50 flex center relative  wow fadeInRight none2" data-wow-delay="0.7s" data-wow-duration="0.6s">

						<ul  class="language_list lang_home lang2">
							<li class="<?= $class2?>">
								<a lang="ru-RU" hreflang="ru-RU" href="<?= PATH?>" class="">Rus</a>
							</li> 
						</ul>

						<div class="block2">
							<div class="mobile-logo none2">
								<div class="flex gold-logo-title">
									<img src="<?= get_template_directory_uri()?>/images/bucks-gold.svg" alt="<?php the_title()?>" class="imgs-pol1" />
									<img src="<?= get_template_directory_uri()?>/images/buddy.svg" alt="<?php the_title()?>" class="imgs-pol2" />
								</div>
							</div>
							<img src="<?= get_template_directory_uri()?>/images/buddy.svg" alt="<?php the_title()?>" class="imgs-polygon6 buddy none2"/>
							<img src="<?= get_template_directory_uri()?>/images/dolar2.svg" alt="<?php the_title()?>" class="imgs-polygon4 none2"/>
							<img src="<?= get_template_directory_uri()?>/images/head.svg" alt="<?php the_title()?>" class="imgs-polygon none2"/>
							<div class="btn-yellow  btn-header" >
								<span>
									<a href="<?= $promotion;?>"><?= pll__('Продвинуть сайт'); ?></a></span>
								</div>
								<div  class="btn-site flex none2">
									<div class="btn green wht-f btn-google" data="google">
										<a href="<?= $google ?>">Google</a>
									</div>
									<div class="btn blue wht-f btn-facebook" data="facebok">
										<a href="<?= $facebook; ?>">
											Facebook
										</a>
									</div>
									<div class="btn pink wht-f btn-mobile" data="application">
										<a href="<?= $application?>">
											Mobile Application
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section section_light section_2 ">
					<div class="">
						<div class="container flex p70 section-work center">
							<?php

							if( have_rows('add_worck') ):
								$a = 0.1;
								$b = 0.2;
								while ( have_rows('add_worck') ) : the_row();?>
								<div class="wow fadeInUp" data-wow-delay="<?= $a += 0.2?>s" data-wow-duration="<?= $b += 0.2?>s">
									<a href="<?= get_sub_field('link_img');?>" target="_blank">
										<img src="<?= wp_img_resize(get_sub_field('dobavit_prevyu_raboty'),'event-thumbnail',true); ?>" />
									</a>
								</div>
								<?php

							endwhile;
						endif;
						?>

						<div class="wow fadeInUp all-project" data-wow-delay="1s" data-wow-duration="1.3s">
							<a href=<?= $work;?>>
								<?= pll__('Cмотреть все');?>
							</a>
						</div>
					</div>

				</div>
			</section>

			<section class="section section_light section_3  green3">
				<div class="">
					<div class="container p120">

						<div class="flex heig400 section3-flex">
							<div class="flex heig400 w830 mobile-hidden">
								<div class=" relative">
									<div class="wrap-personal wow zoomIn"   data-wow-delay="0.5s" data-wow-duration="0.8s">
										<div class="title-white"><?= pll__('Дизайнер');?></div>
										<img src="<?= wp_img_resize($fields['design'],'programming',true);?>" />
									</div>
									<img src="<?= get_template_directory_uri()?>/images/V1.png" alt="<?php the_title()?>" class="img1 wow zoomIn v1" data-wow-delay="0.8s" data-wow-duration="1.1s"/>
								</div>
								<div class="relative  flex flex-wrap flex-end">
									<div class="wrap-personal wow zoomIn  img5" data-wow-delay="1.1s" data-wow-duration="1.4s">
										<img src="<?= wp_img_resize($fields['programmist'],'programming',true);?>" alt="<?php the_title()?>">
										<div class="title-white"><?= pll__('Программист');?></div>
									</div>
									<img src="<?= get_template_directory_uri()?>/images/v3.png" alt="<?php the_title()?>"  class="absolute1 v2 wow zoomIn"  data-wow-delay="2.3s" data-wow-duration="1s"/>
								</div>

								<div class="relative">
									<div class="wrap-personal  absolute1 img3 wow zoomIn" data-wow-delay="3s" data-wow-duration="2.1s">
										<div class="title-white"><?= pll__('Копирайтер');?></div>
										<img src="<?= wp_img_resize($fields['kopirajter'],'programming',true);?>" alt="<?php the_title()?>">
									</div>
									<img src="<?= get_template_directory_uri()?>/images/v4.png" alt="<?php the_title()?>"  class="v4 wow zoomIn" data-wow-delay="3.5s" data-wow-duration="1s"/>
								</div>
								<div class="relative flex flex-wrap flex-end">
									<div class="wow zoomIn wrap-personal img6"  data-wow-delay="4.1s" data-wow-duration="1s">
										<img src="<?= wp_img_resize($fields['google_analitik'],'programming',true);?>" alt="<?php the_title()?>">
										<div class="title-white"><?= pll__('Google аналитик');?></div>
									</div>
									<img src="<?= get_template_directory_uri()?>/images/v5.png" alt="<?php the_title()?>"  class="v5 wow zoomIn"   data-wow-delay="5s" data-wow-duration="1s"/>
								</div>
								<div class="relative">
									<div class="wow zoomIn  wrap-personal  absolute1 img4"   data-wow-delay="6s" data-wow-duration="1s">
										<div class="title-white"><?= pll__('Facebook маркетолог');?></div>
										<img src="<?= wp_img_resize($fields['fac_m'],'programming',true);?>" alt="<?php the_title()?>">
									</div>
									<img src="<?= get_template_directory_uri()?>/images/v6.png" alt="<?php the_title()?>"  class="v6 wow zoomIn" data-wow-delay="6.5s" data-wow-duration="1s"/>
								</div>
							</div>
							<div class="mobile-block">
								<div class="wrap-personal wow zoomIn"   data-wow-delay="1.5s" data-wow-duration="1.8s">
									<div class="wrap-img">
										<img src="<?= wp_img_resize($fields['design'],'programming');?>" alt="<?php the_title()?>" />
									</div>
									<div class="title-white"><?= pll__('Дизайнер');?></div>

								</div>
								<div class="wrap-personal wow zoomIn"   data-wow-delay="1.5s" data-wow-duration="1.8s">
									<div class="wrap-img">
										<img src="<?= wp_img_resize($fields['programmist'],'programming',true);?>" alt="<?php the_title()?>" />
									</div>
									<div class="title-white"><?= pll__('Программист');?></div>

								</div>
								<div class="wrap-personal wow zoomIn"   data-wow-delay="1.5s" data-wow-duration="1.8s">
									<div class="wrap-img">
										<img src="<?= wp_img_resize($fields['kopirajter'],'programming',true);?>" alt="<?php the_title()?>" />
									</div>
									<div class="title-white"><?= pll__('Копирайтер');?></div>

								</div>
								<div class="wrap-personal wow zoomIn"   data-wow-delay="1.5s" data-wow-duration="1.8s">
									<div class="wrap-img">
										<img src="<?= wp_img_resize($fields['google_analitik'],'programming',true);?>" alt="<?php the_title()?>" />
									</div>
									<div class="title-white"><?= pll__('Google аналитик');?></div>

								</div>
								<div class="wrap-personal wow zoomIn"   data-wow-delay="1.5s" data-wow-duration="1.8s">
									<div class="wrap-img">
										<img src="<?= wp_img_resize($fields['fac_m'],'programming',true);?>" alt="<?php the_title()?>" />
									</div>
									<div class="title-white"><?= pll__('Facebook маркетолог');?></div>

								</div>
							</div>
							<div class="flex heig400">
								<div class="wow zoomIn relative" data-wow-delay="1.3s" data-wow-duration="1.5s">
									<div class="wrap-personal">
										<img src="<?= get_template_directory_uri()?>/images/portfolio8.png" alt="<?php the_title()?>" class="wow zoomIn" data-wow-delay="7s" data-wow-duration="1s" />
									</div>
									<div class="group-money">
										<img src="<?= get_template_directory_uri()?>/images/Group.png" alt="<?php the_title()?>" class="img_mon wow fadeInDown" data-wow-delay="7s" data-wow-duration="1s" />
									</div>

								</div>
							</div>
						</div>
					</div>

				</section>		

				<section class="section section_light section_4  blue2 p52" style="padding-top: 35px">
					<div class="">
						<div class="flex container form-flex2">
							<div class="section-form">
								<?php get_template_part( 'template-parts/layouts/form','layout' );?>
							</div>
							<div class="section-contact front-contact">
								<div class="map_container wow fadeIn" data-wow-delay="1.3s" data-wow-duration="2s">
									<div class="gmap" data-url="data/1.json" data-coords="{&quot;lat&quot;: 36.742833, &quot;lng&quot;: -98.3142106}" data-marker="one"></div>
								</div>
								<?php get_template_part( 'template-parts/layouts/contacts','layout' );?>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>

		<div class="scroll-top" id="top"><img src="<?= get_template_directory_uri()?>/images/top.png"></div>
	</div>


	<?php
}
get_footer();


?>