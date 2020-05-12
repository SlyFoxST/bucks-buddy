<?php
//Template name: Работы
get_header();

$lang = pll_current_language();
$class ="";  
$active ="";
if ( $lang == 'eng' ) { 
	$p_fields = get_fields(380);
	$home = PATH . 'eng/home';
	$path = PATH . 'eng/sites';
} 
elseif($lang == 'rus') {
	$p_fields = get_fields(378);
	$home = PATH;
	$path = PATH . 'site';
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
<div class="layout-page-tab relative">
	<div class="wrapper container-page">
		<?php get_template_part( 'template-parts/layouts/layouts','btn-sites'); ?>
		<div class="container-tab">
			<ul class="accordion-tabs">
				<li class="tab-head-cont" data-attr="vse">
					<a href="#"  style="background: gold"><?= pll__('Все')?></a>
					<section class="mobile-none">
						<div class="flex flex-wrap space-between">
							<div class="wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.7s">
								<div class="flex flex-wrap section-work-all">
									<?php
									$i=0.1;
									$j=0.1;

									foreach ($p_fields as $value) {
										foreach ($value as $val) {
											foreach ($val['foto_gal'] as $v) {
												?>

												<div class="wow fadeInUp portf" data-wow-delay="<?= $i+=0.1?>s" data-wow-duration="<?= $j+=0.1?>s">
													<a href="<?= $v['link_for_img'] ?>" target="_blank" class="link_site">
														<img src="<?= $v['add_img'];?>"  alt="<?= $val['nazvanie_galerei']?>">
													</a>
												</div>


												<?php
											}
										}
									}
									?>

								</div>
							</div>
						</div>
					</section>
				</li>
				<?php
				$i=0.1;
				$j=0.1;
				foreach ($p_fields as $value) {
					foreach ($value as $val) {
						?>
						<li class="tab-head-cont" data-attr="<?= $val['nazvanie_galerei']?>" data="<?= $val['color_title']?>" >
							<a href="#"  style="background: <?= $val['color_title']?>" class="">
								<?= $val['nazvanie_galerei']?>
							</a>
							<section class="mobile-none <?= $open;?>">
								<div class="flex flex-wrap justify-start section-work">
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
	<div class="section-mobile-tabs" id="tabs">
		<div class="container-tab-mobile">

			<ul class="accordion-tabs-mobile">
				<li class="tab-head-cont-mobile" style="background: gold" data-attr="<?php the_sub_field('nazvanie_galerei')?>">
					<a href="#"><?= pll__('Все')?></a>
				</li>
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
				foreach ($value as $val) {
					foreach ($val['foto_gal'] as $v) {
						//print_r($v);
					}
				}
			}
			?>
			<section data-attr="vse" data="<?= $val['color_title']?>" >
				<div class="flex flex-wrap space-between section-work">
					<?php
					$i = 0.4;
					$j = 0.5;
					?>
					<?php
					foreach ($p_fields as $value) {

						foreach ($value as $val) {
							foreach ($val['foto_gal'] as $v) {
								?>
								<div class="wow fadeInUp portf" data-wow-delay="<?= $i+=0.1?>s" data-wow-duration="<?= $j+=0.1?>s">
									<a href="<?= $v['link_for_img'] ?>" target="_blank" class="link_site">
										<img src="<?= $v['add_img'];?>"  alt="<?= $val['nazvanie_galerei']?>">
									</a>
								</div>
								<?php
							}
						}
					}?>

				</div>
			</section>

			<section data-attr="<?= pll__('Все')?>">
				<div class="flex flex-wrap space-between section-work">
					<?php

					foreach ($p_fields as $value) {
						foreach ($value as $val) {?>
						>
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
						}
					}
				}?>

			</div>
		</section>
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
				</div>
			</section>
			<?php
		}
	}
	?>

</div>
</div>


<div class=" section-footer p52  blue2 p52">
	<div class="fp-table blue2">
		<div class="fp-tableCell h100vh">
			<div class="container">
				<div class="flex form-flex">
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

<?php get_footer()?>
