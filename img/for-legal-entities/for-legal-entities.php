<?php

/*
Template Name: Для юридических лиц
*/
?>

<?php get_header(); ?>

<main class="pt">
    <div class="container">
        <div class="breadcrumbs">
            <span>Главная</span>
            <span class="current">Для юридических лиц</span>
        </div>
    </div>

    <section class="for-legal-entities">
        <div class="container">
            <div class="for-legal-entities__top-text">
                <p><?php the_field('glavnyj_zagolovok_straniczy'); ?></p>
            </div>

            <div class="for-legal-entities__inner">
                <div class="for-legal-entities__row">
                    <div class="for-legal-entities__item for-legal-entities__item-big item-big-01">
                        <span><?php the_field('shag_1'); ?></span>
                        <?php the_field('nazvanie_shaga'); ?>
                    </div>
                    <div class="for-legal-entities__item">
                        <picture>

                            <img src="<?php the_field('izobrazhenie_shaga_pervogo_pod_nomerom_1'); ?>" alt="#" />
                        </picture>
                    </div>
                    <div class="for-legal-entities__item">
                        <picture>

                            <img src="<?php the_field('izobrazhenie_shaga_pervogo_pod_nomerom_2'); ?>" alt="#" />
                        </picture>
                    </div>
                </div>
                <div class="for-legal-entities__row">
                    <div class="for-legal-entities__item">
                        <picture>
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/for-legal-entities/image-3.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/img/for-legal-entities/image-3@2x.webp 2x"
                                type="image/webp" />
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/for-legal-entities/image-3.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/img/for-legal-entities/image-3@2x.jpg 2x"
                                type="image/jpeg" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/for-legal-entities/image-3.jpg"
                                alt="#" />
                        </picture>
                    </div>
                    <div class="for-legal-entities__item">
                        <picture>
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/for-legal-entities/be-one-circle.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/img/for-legal-entities/be-one-circle@2x.webp 2x"
                                type="image/webp" />
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/for-legal-entities/be-one-circle.png 1x, <?php echo get_template_directory_uri(); ?>/assets/img/for-legal-entities/be-one-circle@2x.png 2x"
                                type="image/png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/for-legal-entities/be-one-circle.png"
                                alt="#" />
                        </picture>
                    </div>
                    <div class="for-legal-entities__item for-legal-entities__item-big item-big-02">
                        <span><?php the_field('shag_2'); ?></span>
                        <?php the_field('nazvanie_shaga_2'); ?>

                        <?php if (have_rows('pochta_v_shage_2_grup')): ?>
					<?php while (have_rows('pochta_v_shage_2_grup')):
						the_row(); ?>

							<a href="mailto:<?php the_sub_field('email_grup'); ?>"><?php the_sub_field('name_email'); ?> </a>
						
					<?php endwhile; ?>
				<?php endif; ?>
                        



                        
                        

                        
                        <button type="button" class="for-legal-entities__btn" data-modal="cta">
                        <?php if (have_rows('pochta_v_shage_2_grup')): ?>
					<?php while (have_rows('pochta_v_shage_2_grup')):
						the_row(); ?>

							<a href="mailto:<?php the_sub_field('email_grup'); ?>"><?php the_sub_field('name_email'); ?> </a>
						
					<?php endwhile; ?>
				<?php endif; ?>
                            <svg class="icon icon--arrow-right-bottom">
                                <use
                                    href="<?php echo get_template_directory_uri(); ?>/assets/img/svgsprite/sprite.symbol.svg#arrow-right-bottom">
                                </use>
                            </svg>
                        </button>
                        
                        
                        
                        <button type="button" class="for-legal-entities__btn" data-modal="cta">
                            связаться с&#160;нами
                            <svg class="icon icon--arrow-right-bottom">
                                <use
                                    href="<?php echo get_template_directory_uri(); ?>/assets/img/svgsprite/sprite.symbol.svg#arrow-right-bottom">
                                </use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="for-legal-entities__row">
                    <div class="for-legal-entities__item">
                        <picture>
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/for-legal-entities/image-4.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/img/for-legal-entities/image-4@2x.webp 2x"
                                type="image/webp" />
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/for-legal-entities/image-4.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/img/for-legal-entities/image-4@2x.jpg 2x"
                                type="image/jpeg" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/for-legal-entities/image-4.jpg"
                                alt="#" />
                        </picture>
                    </div>
                    <div class="for-legal-entities__item for-legal-entities__item-big item-big-03">
                        <span>03</span>
                        <p>Оплатите счет и&#160;мы&#160;отгрузим ваш заказ сразу после поступления денег на&#160;счет
                            компании be&#160;one</p>
                    </div>
                    <div class="for-legal-entities__item">
                        <picture>
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/for-legal-entities/image-5.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/img/for-legal-entities/image-5@2x.webp 2x"
                                type="image/webp" />
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/for-legal-entities/image-5.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/img/for-legal-entities/image-5@2x.jpg 2x"
                                type="image/jpeg" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/for-legal-entities/image-5.jpg"
                                alt="#" />
                        </picture>
                    </div>
                </div>
            </div>
            <!-- <button type="button" class="for-legal-entities__btn for-legal-entities__btn--mobile" data-modal="cta">
                        связаться с&#160;нами
                        <svg class="icon icon--arrow-right-bottom">
                            <use href="<?php echo get_template_directory_uri(); ?>/assets/img/svgsprite/sprite.symbol.svg#arrow-right-bottom"></use>
                        </svg>
                    </button> -->
        </div>
    </section>
</main>
<?php get_footer(); ?>