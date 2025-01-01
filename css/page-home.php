<?php

/*
Template Name: Главная страница
*/
?>

<?php get_header(); ?>

<!-- Main -->

<main class="">
			<section class="hero">
				<div class="container-right">
					<div class="hero__wrapper">
						<div class="hero__content">
							<h1 class="title title-1">
							   <?php the_field('title_hero_page');?>
							</h1>
							<p class="hero__text"><?php the_field('subtitle_hero_page');?></p>

							<div class="hero__buttons">
								<button class="btn" type="button">заказать звонок</button>
								<a href="catalog.html" class="btn"
									>Каталог
									<svg class="icon icon--arrow-right-bottom">
										<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#arrow-right-bottom"></use>
									</svg>
								</a>
							</div>

							<ul class="hero__media">
							<?php if(get_field('social_media_repiter')): ?>
								<?php while(has_sub_field('social_media_repiter')) : ?>
									<li><a style="color:<?php the_sub_field('link_social_media_repiter');?>" href="<?php the_sub_field('link_social_media_repiter');?>"><?php the_sub_field('name_social_media_repiter');?></a></li>
							<?php endwhile; ?>
							<?php endif; ?>
							</ul>
						</div>

						<div class="hero__slider-wrapper">
							<div class="hero__slider">
								<div class="hero__slide">
									<picture>
										<source srcset="<?php echo get_template_directory_uri();?>/assets/img/hero/photo-1.webp 1x, <?php echo get_template_directory_uri();?>/assets/img/hero/photo-1@2x.webp 2x" type="image/webp" />
										<source srcset="<?php echo get_template_directory_uri();?>/assets/img/hero/photo-1.jpg 1x, <?php echo get_template_directory_uri();?>/assets/img/hero/photo-1@2x.jpg 2x" type="image/jpeg" />
										<img src="<?php echo get_template_directory_uri();?>/assets/img/hero/photo-1.jpg" alt="Вратарь в профессиональных вратарских перчатках" />
									</picture>
									<div class="play">
										<img src="<?php echo get_template_directory_uri();?>/assets/img/hero/bordered-text.svg" alt="#" />
									</div>
								</div>
								<div class="hero__slide">
									<picture>
										<source srcset="<?php echo get_template_directory_uri();?>/assets/img/hero/photo-1.webp 1x, <?php echo get_template_directory_uri();?>/assets/img/hero/photo-1@2x.webp 2x" type="image/webp" />
										<source srcset="<?php echo get_template_directory_uri();?>/assets/img/hero/photo-1.jpg 1x, <?php echo get_template_directory_uri();?>/assets/img/hero/photo-1@2x.jpg 2x" type="image/jpeg" />
										<img src="<?php echo get_template_directory_uri();?>/assets/img/hero/photo-1.jpg" alt="Вратарь в профессиональных вратарских перчатках" />
									</picture>
									<div class="play">
										<img src="<?php echo get_template_directory_uri();?>/assets/img/hero/bordered-text.svg" alt="#" />
									</div>
								</div>

								<div class="hero__slide">
									<picture>
										<source srcset="<?php echo get_template_directory_uri();?>/assets/img/hero/photo-1.webp 1x, <?php echo get_template_directory_uri();?>/assets/img/hero/photo-1@2x.webp 2x" type="image/webp" />
										<source srcset="<?php echo get_template_directory_uri();?>/assets/img/hero/photo-1.jpg 1x, <?php echo get_template_directory_uri();?>/assets/img/hero/photo-1@2x.jpg 2x" type="image/jpeg" />
										<img src="<?php echo get_template_directory_uri();?>/assets/img/hero/photo-1.jpg" alt="Вратарь в профессиональных вратарских перчатках" />
									</picture>
									<div class="play">
										<img src="<?php echo get_template_directory_uri();?>/assets/img/hero/bordered-text.svg" alt="#" />
									</div>
								</div>
							</div>

							<div class="hero__slider-controls">
								<svg class="icon icon--hero-slider-arrow-left">
									<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#hero-slider-arrow-left"></use>
								</svg>
								<svg class="icon icon--hero-slider-arrow-right">
									<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#hero-slider-arrow-right"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="catalog">
				<div class="container">
					<div class="section-header">
						<h2 class="title title-2">/ <?php the_field('name_section_catalog_page');?></h2>

						<p><?php the_field('slogan_section_catalog_page');?></p>
					</div>

					<div class="catalog-block__tab-row">
						<button type="button" class="sizes">Размерная сетка</button>

						<div class="catalog-block__tabs">
							<button type="button" class="btn active" data-tab="miniCatalog-goalkeeper-gloves">вратарские Перчатки</button>
							<button type="button" class="btn" data-tab="miniCatalog-accessories">аксессуары</button>
							<button type="button" class="btn" data-tab="miniCatalog-childrens-gloves">детские перчатки</button>
						</div>
					</div>

					<ul class="catalog-block__list" data-tab-content id="miniCatalog-goalkeeper-gloves">
						<li class="card">
							<div class="card__inner">
								<button class="card__favourites-button">
									<svg class="icon icon--heart icon--heart-blue">
										<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#heart"></use>
									</svg>
								</button>
								<img class="card__image" src="<?php echo get_template_directory_uri();?>/assets/img/catalog/BE ONE MONSTER TURQUOISE WHITE 3.png" alt="#" />

								<a href="#" class="card__title">BE&#160;ONE MONSTER TURQUOISE/WHITE (+детские) </a>

								<div class="card__footer">
									<div class="card__price">
										<span class="card__sale">-30%</span>
										<span class="card__old-price">5 690 ₽</span>
										<span class="card__new-price">4 690 ₽</span>
									</div>

									<button class="card__cart-button">
										<svg class="icon icon--cart icon--cart-black">
											<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#cart"></use>
										</svg>
									</button>
								</div>
							</div>
						</li>
						<li class="card">
							<div class="card__inner">
								<button class="card__favourites-button">
									<svg class="icon icon--heart icon--heart-blue">
										<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#heart"></use>
									</svg>
								</button>
								<img class="card__image" src="<?php echo get_template_directory_uri();?>/assets/img/catalog/BE ONE WHITE GOLD 1.png" alt="#" />
								<a href="be-one-white-gold.html" class="card__title">BE&#160;ONE WHITE GOLD </a>

								<div class="card__footer">
									<div class="card__price">
										<span class="card__sale">-30%</span>
										<span class="card__old-price">5 690 ₽</span>
										<span class="card__new-price">4 690 ₽</span>
									</div>

									<button class="card__cart-button">
										<svg class="icon icon--cart icon--cart-black">
											<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#cart"></use>
										</svg>
									</button>
								</div>
							</div>
						</li>
						<li class="card">
							<div class="card__inner">
								<button class="card__favourites-button">
									<svg class="icon icon--heart icon--heart-blue">
										<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#heart"></use>
									</svg>
								</button>
								<img class="card__image" src="<?php echo get_template_directory_uri();?>/assets/img/catalog/BE ONE SNOW.png" alt="#" />

								<a href="#" class="card__title">BE&#160;ONE SNOW (+детские) </a>

								<div class="card__footer">
									<div class="card__price">
										<span class="card__sale">-30%</span>
										<span class="card__old-price">5 690 ₽</span>
										<span class="card__new-price">4 690 ₽</span>
									</div>

									<button class="card__cart-button">
										<svg class="icon icon--cart icon--cart-black">
											<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#cart"></use>
										</svg>
									</button>
								</div>
							</div>
						</li>
						<li class="card">
							<div class="card__inner">
								<button class="card__favourites-button">
									<svg class="icon icon--heart icon--heart-blue">
										<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#heart"></use>
									</svg>
								</button>
								<img class="card__image" src="<?php echo get_template_directory_uri();?>/assets/img/catalog/BE ONE MONSTER TURQUOISEWHITE.png" alt="#" />

								<a href="#" class="card__title">BE&#160;ONE MONSTER TURQUOISE/WHITE (+детские) </a>

								<div class="card__footer">
									<div class="card__price">
										<span class="card__sale">-30%</span>
										<span class="card__old-price">5 690 ₽</span>
										<span class="card__new-price">4 690 ₽</span>
									</div>

									<button class="card__cart-button">
										<svg class="icon icon--cart icon--cart-black">
											<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#cart"></use>
										</svg>
									</button>
								</div>
							</div>
						</li>
						<li class="card">
							<div class="card__inner">
								<button class="card__favourites-button">
									<svg class="icon icon--heart icon--heart-blue">
										<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#heart"></use>
									</svg>
								</button>
								<img class="card__image" src="<?php echo get_template_directory_uri();?>/assets/img/catalog/BE ONE PRO WhiteBlue.png" alt="#" />

								<a href="#" class="card__title">BE&#160;ONE PRO White/Blue (+детские) </a>

								<div class="card__footer">
									<div class="card__price">
										<span class="card__sale">-30%</span>
										<span class="card__old-price">5 690 ₽</span>
										<span class="card__new-price">4 690 ₽</span>
									</div>

									<button class="card__cart-button">
										<svg class="icon icon--cart icon--cart-black">
											<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#cart"></use>
										</svg>
									</button>
								</div>
							</div>
						</li>
						<li class="card">
							<div class="card__inner">
								<button class="card__favourites-button">
									<svg class="icon icon--heart icon--heart-blue">
										<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#heart"></use>
									</svg>
								</button>
								<img class="card__image" src="<?php echo get_template_directory_uri();?>/assets/img/catalog/Monster Pink and Black.png" alt="#" />

								<a href="#" class="card__title">Monster Pink and Black (+детские) </a>

								<div class="card__footer">
									<div class="card__price">
										<span class="card__sale">-30%</span>
										<span class="card__old-price">5 690 ₽</span>
										<span class="card__new-price">4 690 ₽</span>
									</div>

									<button class="card__cart-button">
										<svg class="icon icon--cart icon--cart-black">
											<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#cart"></use>
										</svg>
									</button>
								</div>
							</div>
						</li>
						<li class="card">
							<div class="card__inner">
								<button class="card__favourites-button">
									<svg class="icon icon--heart icon--heart-blue">
										<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#heart"></use>
									</svg>
								</button>
								<img class="card__image" src="<?php echo get_template_directory_uri();?>/assets/img/catalog/BE ONE SSO WHITE.png" alt="#" />

								<a href="#" class="card__title">BE&#160;ONE SSO WHITE (детские) </a>

								<div class="card__footer">
									<div class="card__price">
										<span class="card__sale">-30%</span>
										<span class="card__old-price">5 690 ₽</span>
										<span class="card__new-price">4 690 ₽</span>
									</div>

									<button class="card__cart-button">
										<svg class="icon icon--cart icon--cart-black">
											<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#cart"></use>
										</svg>
									</button>
								</div>
							</div>
						</li>
						<li class="card link-to-all">
							<a href="categories.html">
								Смотреть все
								<svg class="icon icon--arrow-right-bottom">
									<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#arrow-right-bottom"></use>
								</svg>
							</a>
						</li>
						<li class="card card-image">
							<picture>
								<source srcset="<?php echo get_template_directory_uri();?>/assets/img/catalog/decor-image-1.webp 1x, <?php echo get_template_directory_uri();?>/assets/img/catalog/decor-image-1@2x.webp 2x" type="image/webp" />
								<source srcset="<?php echo get_template_directory_uri();?>/assets/img/catalog/decor-image-1.png 1x, <?php echo get_template_directory_uri();?>/assets/img/catalog/decor-image-1@2x.png 2x" type="image/png" />
								<img src="<?php echo get_template_directory_uri();?>/assets/img/catalog/decor-image-1.png" alt="" />
							</picture>
						</li>
						<li class="card">
							<div class="card__inner">
								<button class="card__favourites-button">
									<svg class="icon icon--heart icon--heart-blue">
										<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#heart"></use>
									</svg>
								</button>
								<img class="card__image" src="<?php echo get_template_directory_uri();?>/assets/img/catalog/BE ONE PRO Blue.png" alt="#" />

								<a href="#" class="card__title">BE&#160;ONE PRO Blue (+детские) </a>

								<div class="card__footer">
									<div class="card__price">
										<span class="card__sale">-30%</span>
										<span class="card__old-price">5 690 ₽</span>
										<span class="card__new-price">4 690 ₽</span>
									</div>

									<button class="card__cart-button">
										<svg class="icon icon--cart icon--cart-black">
											<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#cart"></use>
										</svg>
									</button>
								</div>
							</div>
						</li>
						<li class="card">
							<div class="card__inner">
								<button class="card__favourites-button">
									<svg class="icon icon--heart icon--heart-blue">
										<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#heart"></use>
									</svg>
								</button>
								<img class="card__image" src="<?php echo get_template_directory_uri();?>/assets/img/catalog/BE ONE SSO BLACK.png" alt="#" />

								<a href="#" class="card__title">BE&#160;ONE SSO BLACK (+детские) </a>

								<div class="card__footer">
									<div class="card__price">
										<span class="card__sale">-30%</span>
										<span class="card__old-price">5 690 ₽</span>
										<span class="card__new-price">4 690 ₽</span>
									</div>

									<button class="card__cart-button">
										<svg class="icon icon--cart icon--cart-black">
											<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#cart"></use>
										</svg>
									</button>
								</div>
							</div>
						</li>
					</ul>

					<ul class="catalog-block__list none" data-tab-content id="miniCatalog-accessories">
						<li class="card">
							<div class="card__inner">
								<button class="card__favourites-button">
									<svg class="icon icon--heart icon--heart-blue">
										<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#heart"></use>
									</svg>
								</button>
								<img class="card__image" src="<?php echo get_template_directory_uri();?>/assets/img/catalog/BE ONE MONSTER TURQUOISE WHITE 3.png" alt="#" />

								<a href="#" class="card__title">BE&#160;ONE MONSTER TURQUOISE/WHITE (+детские) </a>

								<div class="card__footer">
									<div class="card__price">
										<span class="card__sale">-30%</span>
										<span class="card__old-price">5 690 ₽</span>
										<span class="card__new-price">4 690 ₽</span>
									</div>

									<button class="card__cart-button">
										<svg class="icon icon--cart icon--cart-black">
											<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#cart"></use>
										</svg>
									</button>
								</div>
							</div>
						</li>
						<li class="card">
							<div class="card__inner">
								<button class="card__favourites-button">
									<svg class="icon icon--heart icon--heart-blue">
										<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#heart"></use>
									</svg>
								</button>
								<img class="card__image" src="<?php echo get_template_directory_uri();?>/assets/img/catalog/BE ONE WHITE GOLD 1.png" alt="#" />
								<a href="be-one-white-gold.html" class="card__title">BE&#160;ONE WHITE GOLD </a>

								<div class="card__footer">
									<div class="card__price">
										<span class="card__sale">-30%</span>
										<span class="card__old-price">5 690 ₽</span>
										<span class="card__new-price">4 690 ₽</span>
									</div>

									<button class="card__cart-button">
										<svg class="icon icon--cart icon--cart-black">
											<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#cart"></use>
										</svg>
									</button>
								</div>
							</div>
						</li>
					</ul>

					<ul class="catalog-block__list none" data-tab-content id="miniCatalog-childrens-gloves">
						<li class="card">
							<div class="card__inner">
								<button class="card__favourites-button">
									<svg class="icon icon--heart icon--heart-blue">
										<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#heart"></use>
									</svg>
								</button>
								<img class="card__image" src="<?php echo get_template_directory_uri();?>/assets/img/catalog/BE ONE MONSTER TURQUOISE WHITE 3.png" alt="#" />

								<a href="#" class="card__title">BE&#160;ONE MONSTER TURQUOISE/WHITE (+детские) </a>

								<div class="card__footer">
									<div class="card__price">
										<span class="card__sale">-30%</span>
										<span class="card__old-price">5 690 ₽</span>
										<span class="card__new-price">4 690 ₽</span>
									</div>

									<button class="card__cart-button">
										<svg class="icon icon--cart icon--cart-black">
											<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#cart"></use>
										</svg>
									</button>
								</div>
							</div>
						</li>
						<li class="card">
							<div class="card__inner">
								<button class="card__favourites-button">
									<svg class="icon icon--heart icon--heart-blue">
										<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#heart"></use>
									</svg>
								</button>
								<img class="card__image" src="<?php echo get_template_directory_uri();?>/assets/img/catalog/BE ONE WHITE GOLD 1.png" alt="#" />
								<a href="be-one-white-gold.html" class="card__title">BE&#160;ONE WHITE GOLD </a>

								<div class="card__footer">
									<div class="card__price">
										<span class="card__sale">-30%</span>
										<span class="card__old-price">5 690 ₽</span>
										<span class="card__new-price">4 690 ₽</span>
									</div>

									<button class="card__cart-button">
										<svg class="icon icon--cart icon--cart-black">
											<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#cart"></use>
										</svg>
									</button>
								</div>
							</div>
						</li>
						<li class="card">
							<div class="card__inner">
								<button class="card__favourites-button">
									<svg class="icon icon--heart icon--heart-blue">
										<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#heart"></use>
									</svg>
								</button>
								<img class="card__image" src="<?php echo get_template_directory_uri();?>/assets/img/catalog/BE ONE WHITE GOLD 1.png" alt="#" />
								<a href="be-one-white-gold.html" class="card__title">BE&#160;ONE WHITE GOLD </a>

								<div class="card__footer">
									<div class="card__price">
										<span class="card__sale">-30%</span>
										<span class="card__old-price">5 690 ₽</span>
										<span class="card__new-price">4 690 ₽</span>
									</div>

									<button class="card__cart-button">
										<svg class="icon icon--cart icon--cart-black">
											<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#cart"></use>
										</svg>
									</button>
								</div>
							</div>
						</li>
						<li class="card">
							<div class="card__inner">
								<button class="card__favourites-button">
									<svg class="icon icon--heart icon--heart-blue">
										<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#heart"></use>
									</svg>
								</button>
								<img class="card__image" src="<?php echo get_template_directory_uri();?>/assets/img/catalog/BE ONE WHITE GOLD 1.png" alt="#" />
								<a href="be-one-white-gold.html" class="card__title">BE&#160;ONE WHITE GOLD </a>

								<div class="card__footer">
									<div class="card__price">
										<span class="card__sale">-30%</span>
										<span class="card__old-price">5 690 ₽</span>
										<span class="card__new-price">4 690 ₽</span>
									</div>

									<button class="card__cart-button">
										<svg class="icon icon--cart icon--cart-black">
											<use href="<?php echo get_template_directory_uri();?>/assets/img/svgsprite/sprite.symbol.svg#cart"></use>
										</svg>
									</button>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<section class="aboutus">
				<div class="container">
					<div class="section-header">
						<h2 class="title title-2">/ <?php the_field('name_section_about_page');?></h2>
						<p><?php the_field('slogan_section_about_page');?></p>
					</div>

					<div class="aboutus__inner">
						<p class="aboutus__big-text">
						     <?php the_field('about_section_about_page');?>
						</p>
						<div class="aboutus__small-text">
							<span class=""><?php the_field('titleabout_section_about_page');?></span>
						</div>

						<img class="aboutus__image" src="<?php the_field('imgabout_section_about_page');?>" alt="#" />

						<div class="aboutus__empty"></div>
						<p class="aboutus__text text-1">
						    <?php the_field('text1about_section_about_page');?>
						</p>
						<p class="aboutus__text text-2">
						      <?php the_field('text2about_section_about_page');?>
						</p>
						<div class="aboutus__link">
							<a href="#" class="btn--link ">О&#160;компании</a>
						</div>
					</div>
				</div>
			</section>
			<section class="contacts">
				<div class="container">
					<div class="section-header">
						<h2 class="title title-2">/ <?php the_field('naimenovanie_sekczii_contact_page');?></h2>
					</div>

					<div class="contacts__inner">
						<p class="contacts__big-text"><?php the_field('slogan_contact_page');?></p>
						<div class="contacts__empty empty-1"></div>
						<div class="contacts__links links-1">
							<a href="#">контакты</a>
						</div>
						<div class="contacts__links links-2"></div>
						<p class="contacts__text text-1">
						    <?php the_field('pervyj_tekst_contact_page');?>
						</p>
						<p class="contacts__text text-2">
						<?php the_field('two_tekst_contact_page');?>
						</p>

						<ul class="contacts__media">
						<?php if(get_field('soczseti_page_contact_repiter')) ?>
                                                    <?php while(has_sub_field('soczseti_page_contact_repiter')) : ?>
														<li class="icon--instagram">
															<a href="<?php the_sub_field('link_social_media_contact_page_repiter');?>"><?php the_sub_field('svg_kod_ikonki_contact_page_repiter');?></a>
														</li>
                                                        <?php endwhile; ?>
						</ul>
						<form class="form contacts-form" method="POST" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
							<div class="contacts-form__inner">
								<input type="hidden" name="action" value="send_contacts_form">
								<input type="text" name="user_name" placeholder="Имя" />
								<input type="text" name="user_surname" placeholder="Фамилия" />
								<input type="text" name="user_email" placeholder="E-mail" />
								<input type="text" name="user_tel" placeholder="Телефон" />
							</div>
							<div class="contacts-form__textarea">
								<textarea name="user_message" id="user_message" placeholder="Чем помочь?"></textarea>
							</div>
							<div class="contacts-form__button-wrapper">
								<button class="contacts-form__button" type="submit">отправить</button>
							</div>
						</form>
					</div>
				</div>
			</section>
		</main>


<?php get_footer(); ?>