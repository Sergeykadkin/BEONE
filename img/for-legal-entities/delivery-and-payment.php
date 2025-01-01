<?php

/*
Template Name: Доставка и оплата
*/
?>

<?php get_header(); ?>


<main class="pt">
	<div class="container">
		<div class="breadcrumbs">
			<span>Главная</span>
			<span class="current">Доставка и&#160;оплата</span>
		</div>
	</div>

	<section class="delivery">
		<div class="container">
			<div class="section-header">
				<h2 class="title title-2">/ доставка</h2>

				<p><?php the_field('title_delivery_sdek'); ?></p>
			</div>

			<div class="delivery__image">
				<picture>

					<img src="<?php the_field('foto_sdek'); ?>" alt="#" />
				</picture>
			</div>

			<div class="delivery__top">
				<p>
					<?php the_field('informacziya_o_sdek'); ?>
				</p>
			</div>

			<div class="delivery__inner">
				<div class="delivery__inner-img">
					<picture>
						<img src="<?php the_field('izobrazhenie_karty_sdek'); ?>" alt="#" />
					</picture>
				</div>

				<?php the_field('paragraph_one'); ?>
				<?php the_field('paragraph_two'); ?>

				<?php if (get_field('lokaczii_sdek')): ?>
					<div class="delivery__text-3">
						<?php echo get_field('lokaczii_sdek'); ?>
					</div>
				<?php endif; ?>


				
				<?php if (have_rows('rasschitat_stoimost_dostavki_sdek_grup')): ?>
					<?php while (have_rows('rasschitat_stoimost_dostavki_sdek_grup')):
						the_row(); ?>
							<a href="<?php the_sub_field('link_btn_grup'); ?>" class="delivery__cost"><?php the_sub_field('text_btn_grup'); ?></a>


						
					<?php endwhile; ?>
				<?php endif; ?>

				
			</div>
		</div>
	</section>
	<section class="payment">
		<div class="container">
			<div class="section-header">
				<h2 class="title title-2"><?php the_field('zagolovok_oplata'); ?></h2>

				<p><?php the_field('zagolovok_sposoby_oplaty'); ?></p>
			</div>

			<div class="payment__inner">
				<div class="payment__text-block">
					<div class="payment__text">
						<h3><?php the_field('zagolovok_pervogo_teksta_sekczii_oplata'); ?></h3>

						<?php the_field('tekst_pervogo_abzacza_sekczii_oplata'); ?>

					</div>
					<div class="payment__text">
						<h3><?php the_field('zagolovok_vtorovogo_teksta_sekczii_oplata'); ?>
						</h3>
						<?php the_field('tekst_vtorogo_abzacza_sekczii_oplata'); ?>
						
					</div>
				</div>



				<?php if (have_rows('knopka_v_sekczii_oplaty_grup')): ?>
					<?php while (have_rows('knopka_v_sekczii_oplaty_grup')):
						the_row(); ?>

							<a href="mailto:<?php the_sub_field('link_btn_grup_2'); ?>" class="btn payment__tocontact"><?php the_sub_field('text_btn_grup_1'); ?> </a>
						
					<?php endwhile; ?>
				<?php endif; ?>

				

				<div class="payment__inner-img">
					<picture>
						<img src="<?php the_field('izobrazhenie_sekczii_oplata'); ?>" alt="#" />
							
					</picture>
				</div>
			</div>
		</div>
	</section>
</main>


<?php get_footer(); ?>