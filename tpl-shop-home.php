<?php
//Template name: Главная - Магазин
get_header('shop2');
$category = array(
	'taxonomy'     => 'product_cat',
	'hide_empty'   => false,
	'hierarchical' => 1,
	'exclude'      => array(52,84,82,86),
	'orderby'       => 'id',
	'order'         => 'ASC',
);
$cat = get_categories($category);

while(have_posts()){
	the_post();?>
	<div class="shop-wrap2">
		<div class="container">
			<section class="gold-karelii">
				<div class="block-ramka">
					<h2>золото карелии</h2>
					<div class="desc-gold">
						Древесина карельской берёзы ценится красотой своей текстуры, неповторимостью её узоров.
						Даже одинаковые по форме изделия имеют свою индивидуальность. Материал очень сложный.
						От мастеров требуется творческий подход, много знаний и опыта в своей профессии краснодеревщика. В технологии изготовления большей частью применяется облицовка шпоном, дополненная деталями токарной или резной обработки из массива. Украшаем изделия наборами маркетри – деревянная мозаика, пирографией – выжигание. Применяем лазерную гравировку. Принимаем заказы, ответим на ваши вопросы, поможем с выбором подарков.
					</div>
					<img class="ramka4" src="<?= get_template_directory_uri()?>/img/ramka.png" alt="<?php the_title();?>" />
					<img class="ramka3" src="<?= get_template_directory_uri()?>/img/ramka.png" alt="<?php the_title();?>" />
					<img class="ramka2" src="<?= get_template_directory_uri()?>/img/ramka.png" alt="<?php the_title();?>" />
					<img class="ramka1" src="<?= get_template_directory_uri()?>/img/ramka.png" alt="<?php the_title();?>" />
				</div>
			</section>
			<div class="slider-front">
				<img src="<?= get_template_directory_uri()?>/img/bg2.png" class="img-fluid" alt="<?php the_title()?>"/>
			</div>
		</div>

	</div>

	<div class="section-white">
		<div class="container">
			<h2>Каталог товаров</h2>
			<div class="txt-cat flex">
				<div class="popular-tab">Популярное</div><div class="other-tab active">ЕЩЕ</div>
			</div>
			<div class="section-popular flex popular-block none">
				<?php
				foreach ($cat as $term){
					if(get_term_meta($term->term_id,'popular',true) == 1){
						$thumbnail_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
						$image = wp_get_attachment_url( $thumbnail_id );
						?>
						<div class="block_popular_term">
							<div class="previu-term">
								<a href="<?= get_term_link($term->term_id,'product_cat');?>">
									<img src="<?= $image?>" alt="<?= $term->name?>" class="img-fluid"/>
								</a>
							</div>
							<div class="title-term">
								<h3><?= $term->name?></h3>
							</div>
							<div class="sum">
								<?= 'от ' . get_term_meta($term->term_id,'price_tax',true) . ' p.';?>
							</div>
							<div class="term_btn">
								<a href="<?= get_term_link($term->term_id,'product_cat');?>">В каталог</a>
							</div>
						</div>

						<?
					}

				}

				?>
			</div>
			<div class="section-popular flex other-block">
				<?php
				foreach ($cat as $term){

					$thumbnail_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
					$image = wp_get_attachment_url( $thumbnail_id );
					?>
					<div class="block_popular_term">
						<div class="previu-term">
							<a href="<?= get_term_link($term->term_id,'product_cat');?>">
								<img src="<?= $image?>" alt="<?= $term->name?>" class="img-fluid"/>
							</a>
						</div>
						<div class="title-term">
							<h3><?= $term->name?></h3>
						</div>
						<div class="sum">
							<?= 'от ' . get_term_meta($term->term_id,'price_tax',true) . ' p.';?>
						</div>
						<div class="term_btn">
							<a href="<?= get_term_link($term->term_id,'product_cat');?>">В каталог</a>
						</div>
					</div>

					<?
					

				}

				?>
			</div>
		</div>
	</div>
	<div class="section-priimushestva">
		<div class="p15">
			<div class="flex block-items">
				<div class="block-icon">
					<div class="img-icon">
						<img src="<?= get_template_directory_uri()?>/img/icon3.png" alt="<?php the_title()?>" />
					</div>
					<div class="icon-title">
						Собственное производство
					</div>
					<div class="icon-desc">
						На нашем собственном производстве работают мастера с более чем 20-летнимм оыптом работы. Мы делаем работу любой сложности, а также выполняем резьбу
					</div>
				</div>
				<div class="block-icon">
					<div class="img-icon">
						<img src="<?= get_template_directory_uri()?>/img/icon.png" alt="<?php the_title()?>" />
					</div>
					<div class="icon-title">
						Прямые продажи
					</div>
					<div class="icon-desc">
						За счет прямых продаж мы можем предложить Вам  самые оптимальные цены.
					</div>
				</div>
				<div class="block-icon">
					<div class="img-icon">
						<img src="<?= get_template_directory_uri()?>/img/icon2.png" alt="<?php the_title()?>" />
					</div>
					<div class="icon-title">
						Награды и премии
					</div>
					<div class="icon-desc">
						Продукция нашей мастерской неоднократно становилась победителем премии МАПП (Международная ассоциация презентационной продукции)
					</div>
				</div>
			</div>

			<div class="desc-dop">
				У нас Вы можете приобрести изысканные подарки для руководителей, vip-клиентов, гос служащих,а также заказать корпоративные подарки для сотрудников. На ваши изделия мы также можем нанести по вашему желанию дарственные надписи. Наши изделия станут уникальным подаром
				на юбилеи, дни рождения, знаменательные события для Ваших близких друзей и родственников.
				Мы выполняем заказы любой степени сложности
			</div>
			<div class="flex dostavka-inf">
				<div class="in-dost pop-up-moscau">Доставка: <span>в Москве</span></div>
				<div class="in-dost pop-up-piter"><span>в Санкт-Петербурге</span></div>
				<div class="in-dost pop-up-other"><span>другой город</span></div>
			</div>
		</div>
	</div>

	<?php	
}

get_footer('shop');
?>