 <?php
  // Template name: Сайт
 get_header();
 $fields = get_fields();
 $lang = pll_current_language();
 $class ="";  
 $active ="";
 if ( $lang == 'eng' ) { 
 	$p_fields = get_fields(380);
 	$home = PATH . 'eng/home';
 	$path = PATH . 'eng/sites';
 	$work = PATH .  'eng/work';
 } 
 elseif($lang == 'rus') {
 	$p_fields = get_fields(378);
 	$home = PATH;
 	$path = PATH . 'site';
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
 	<div class="layout-page relative">
 		<div class="wrapper container-page">
 			<?php get_template_part( 'template-parts/layouts/layout','btn-site'); ?>
 			<section class="section-project">

 				<?php
 				$a = 0.7;
 				$b = 0.2;
 				?>

 				<div class="sec-worck mb90 section-each sec-work-site flex space-between flex-wrap" data-attr="<?= the_title()?>" data-title="<?= the_title();?>">
 					<div class="block-work" data-wow-delay="0.1s" data-wow-duration="0.1s" data-title="<?= the_title();?>">
 						<div class="header-lyt" style="background: <?=  $fields['color_title']?>" >
 							<?php the_title()?>
 						</div>
 						<div class="content-txt">
 							<div class="mobile-hidden">
 								<?= $fields['desc']?>
 							</div>
 							<div class="mobile-block">
 								<?php the_content();?>
 							</div>
 						</div>
 						<div class="absolute pr-a">
 							<div class="price">
 								<?= $fields['czena']?>
 							</div>
 							<div class="button-flex flex">
 								<a href="#form" class="green2 mr1" style="background:<?= $fields['color'];?> "><?= pll__('Заказать')?></a>
 								<a href="#tabs" class="green2  mobile-t tb-page" data="<?=  $fields['color_title']?>"  style="background:<?= $fields['color'];?>" ><?= pll__('Пример');?></a>
 							</div>
 						</div>
 					</div>
 					<div class="content wow fadeInRight content-none"   data-wow-delay="0.3s" data-wow-duration="0.5s">
 						<?php the_content()?>
 					</div>
 				</div>

 			</section>


 			<div class="fp-table table-none" >
 				<div class="fp-tableCell h100vh">
 					<div class="tabs"  id="tabs">
 						<div class="container-tab">
 							<ul class="accordion-tabs">
 								<?php
 								foreach ($p_fields as $value) {
 									foreach ($value as $val) {
 										?>
 										<li class="tab-head-cont" data-attr="<?= $val['nazvanie_galerei']?>" data="<?= $val['color_title']?>" >

 											<a href="#"  style="background: <?= $val['color_title']?>" class="">
 												<?= $val['nazvanie_galerei']?>
 											</a>
 											<section class="mobile-none <?= $open;?>">
 												<div class="flex flex-wrap space-between section-work">
 													<?php
 													foreach ($val['foto_gal'] as $v) {
 														?>
 														<div class="wow fadeInUp portf" data-wow-delay="<?= $i+=0.1?>s" data-wow-duration="<?= $j+=0.1?>s">
 															<a href="<?= $v['link_for_img'] ?>" target="_blank" class="link_site">
 																<img src="<?= $v['add_img'];?>"  alt="<?= $val['nazvanie_galerei']?>" />
 															</a>
 														</div>

 														<?php
 													}
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

 									}	

 								}
 								?>
 							</ul>

 						</div>

 					</div>
 				</div>
 			</div>

 			<div class="section-mobile-tabs" id="tabs2">
 				<div class="container-tab-mobile">
 					<ul class="accordion-tabs-mobile">
 						<?php
 						foreach ($p_fields as $value) {
 							foreach ($value as $val) {
 								?>
 								<li class="tab-head-cont-mobile" style="background: <?= $val['color_title']?>" data-attr="<?= $val['nazvanie_galerei']?>" >
 									<a href="#" data-attr="<?= $val['nazvanie_galerei']?>"  data="<?= $val['color_title']?>"><?= $val['nazvanie_galerei']?></a>
 								</li>
 								<?php
 							}
 						}
 						?>
 					</ul>
 					<?php
 					foreach ($p_fields as $value) {
 						foreach ($value as $val) {?>

 						<section data-attr="<?= $val['nazvanie_galerei']?>" data="<?= $val['color_title']?>" >
 							<div class="flex flex-wrap space-between section-work">
 								<?php
 								$i = 0.4;
 								$j = 0.5;
 								?>
 								<?php
 								foreach ($val['foto_gal'] as $v) {
 									?>

 									<div class="wow fadeInUp portf" data-wow-delay="<?= $i+=0.1?>s" data-wow-duration="<?= $j+=0.1?>s">
 										<a href="<?= $v['link_for_img'] ?>" target="_blank" class="link_site">
 											<img src="<?= $v['add_img'];?>"  alt="<?= $val['nazvanie_galerei']?>">
 										</a>
 									</div>
 									<?php
 								}?>

 								<div class="wow fadeInUp all-project" data-wow-delay="1s" data-wow-duration="1.3s">
 									<a href="work">
 										<?= pll__('Cмотреть все');?>
 									</a>
 								</div>

 							</div>
 						</section>

 						<?php
 					}
 				}
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