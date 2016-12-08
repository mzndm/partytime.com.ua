<?php
/*
	Template name: Main Party Time
*/
?>

<?php get_header(); ?>

	<section id="slider">
		<?php if ( have_posts() ) : query_posts('p=106');
				while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
		<? endwhile; endif; wp_reset_query();  ?>
	</section>
	<!--  Start Section MAIN Banner -->
	<section class="services-main">
		<div class="container">
			<p class="section-header__p"><?php echo get_the_title( 94 ) ?></p>

			<?php if ( have_posts() ) : query_posts('p=94');
					while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
			<? endwhile; endif; wp_reset_query();  ?>
		</div>

	</section>


	<!--  Start Section Gallery -->
	<section class="gallery">
		<div class="container">
			<p class="section-header__p"><?php echo get_the_title( 89 ) ?></p>

			<?php if ( have_posts() ) : query_posts('p=89');
					while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
			<? endwhile; endif; wp_reset_query();  ?>
	</section>
<!-- Over gallery  -->

<!--  Start We work -->
<section class="we work">
	<div class="container">
		<p class="section-header__p"><?php echo get_the_title( 87 ) ?></p>

		<div class="infoBlock">
			<?php if ( have_posts() ) : query_posts('p=87');
					while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
			<? endwhile; endif; wp_reset_query();  ?>
		</div>
	</div>
	</section>
<!--  Over We work -->
<!-- Start calculation  -->

<section class="calc">
	<div class="calc__item-background">
	<div class="container">
		<div class="calc__item-word">
			<?php if ( have_posts() ) : query_posts('p=84');
					while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
			<? endwhile; endif; wp_reset_query();  ?>

		</div>
	</div>
	</div>
</section>

<!-- Over calculation  -->


<!-- start Require  -->

<section class="req background-f8">
	<div class="container">
		<p class="section-header__p"><?php echo get_the_title( 81 ) ?></p>
		<div class="carousel-container">
			<?php if ( have_posts() ) : query_posts('p=81');

					while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
			<? endwhile; endif; wp_reset_query();  ?>
    </div>
	</div>
</section>
<!-- over Require  -->


<!-- Start Why we  -->

<section class="why-we">
	<div class="why-we__item-background">
			<div class="container">
				<div class="why-we__item-ul">
					<p class="section-header__p white-color"><?php echo get_the_title( 79 ) ?></p>
							<?php if ( have_posts() ) : query_posts('p=79');

									while (have_posts()) : the_post(); ?>
									<?php the_content(); ?>
							<? endwhile; endif; wp_reset_query();  ?>
				</div>
			</div>
	</div>
</section>

<!--Over Why we  -->

<!-- Start Comand  -->

<section class="comand background-f8">
	<div class="container">
		<p class="section-header__p"><?php echo get_the_title( 57 ) ?></p>


						<?php if ( have_posts() ) : query_posts('p=57');

						while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
						<? endwhile; endif; wp_reset_query();  ?>

	</div>
</section>

<!--Over comand  -->

<!-- start HELP  -->

<section class="help">
	<div class="container">
		<p class="section-header__p">Наша команда всегда придет Вам на помощь</p>
	</div>
	<div class="help-img pull-left">
		<?php if ( is_active_sidebar( 'form-photo' ) ) : ?>
				<?php dynamic_sidebar( 'form-photo' ); ?>
		<?php endif; ?>
	</div>
	<div class="help-form">
		<div class="container">

			<div class="form">
				<?php if ( is_active_sidebar( 'form' ) ) : ?>
						<?php dynamic_sidebar( 'form' ); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

</section>


<!-- Over HELP  -->

<!-- start Wrapper  -->
<section class="wrap background-f8">
	<div class="container">
		<p class="section-header__p"><?php echo get_the_title( 1 ) ?></p>
		<div class="wrap__item-text">
			<div class="wrap__item-text-content">
				<?php if ( have_posts() ) : query_posts('p=1');

				while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query();  ?>
			</div>
			<span class="wrap__item-btn">Подробнее</span>
		</div>

	</div>

</section>

<!-- start Wrapper  -->

        <?php get_footer();?>
<!-- </body>
</html> -->
