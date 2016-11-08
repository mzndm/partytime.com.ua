<?php
/*
	Template name: Single Page Events
*/
?>

<?php get_header(); ?>
<section class="breadcrumbs">
	<div class="container">
			<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' » '); ?>
	</div>
</section>
	<section id="slider">
		<?php if ( have_posts() ) : query_posts('p=106');
				while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
		<? endwhile; endif; wp_reset_query();  ?>
	</section>


		<!-- Start Services  -->

	<section class="paket-servis">
			<div class="container">
				<p class="section-header__p"><?php echo get_cat_name(7);?></p>

				<div class="tabs-servis">
							<ul class="tabs-servis__item item-nav">
								<li class="tabs-servis__item__links"><a href="mini"><?php echo get_cat_name(10);?></a></li>
								<li class="tabs-servis__item__links"><a href="ekonom"><?php echo get_cat_name(9);?></a></li>
								<li class="tabs-servis__item__links active"><a href="standart"><?php echo get_cat_name(8);?></a></li>
								<li class="tabs-servis__item__links"><a href="ekstra"><?php echo get_cat_name(11);?></a></li>
								<li class="tabs-servis__item__links"><a href="personCost"><?php echo get_cat_name(12);?></a></li>
						</ul>
					<div class="tabs-servis__item item-container">
								<div class="mini">
									<div class="tabs-servis__item__consist">
											<div class="tabs-servis__item__consist__icons">
												<?php if ( have_posts() ) : query_posts('p=169');
														while (have_posts()) : the_post(); ?>
														<?php the_content(); ?>
												<? endwhile; endif; wp_reset_query();  ?>
											</div>
											<div class="tabs-servis__item__consist__banner">
												<?php if ( have_posts() ) : query_posts('p=168');
														while (have_posts()) : the_post(); ?>
														<?php the_content(); ?>
												<? endwhile; endif; wp_reset_query();  ?>
											</div>
									</div>
								</div>
								<div class="ekonom">
									<div class="tabs-servis__item__consist">
											<div class="tabs-servis__item__consist__icons">
												<?php if ( have_posts() ) : query_posts('p=138');
														while (have_posts()) : the_post(); ?>
														<?php the_content(); ?>
												<? endwhile; endif; wp_reset_query();  ?>
											</div>
											<div class="tabs-servis__item__consist__banner">
												<?php if ( have_posts() ) : query_posts('p=140');
														while (have_posts()) : the_post(); ?>
														<?php the_content(); ?>
												<? endwhile; endif; wp_reset_query();  ?>
											</div>
									</div>
								</div>
								<div class="standart active">
									<div class="tabs-servis__item__consist">
											<div class="tabs-servis__item__consist__icons">
												<?php if ( have_posts() ) : query_posts('p=125');
														while (have_posts()) : the_post(); ?>
														<?php the_content(); ?>
												<? endwhile; endif; wp_reset_query();  ?>
											</div>
											<div class="tabs-servis__item__consist__banner">
												<?php if ( have_posts() ) : query_posts('p=129');
														while (have_posts()) : the_post(); ?>
														<?php the_content(); ?>
												<? endwhile; endif; wp_reset_query();  ?>
											</div>
									</div>
								</div>
								<div class="ekstra">
									<div class="tabs-servis__item__consist">
											<div class="tabs-servis__item__consist__icons">
												<?php if ( have_posts() ) : query_posts('p=172');
														while (have_posts()) : the_post(); ?>
														<?php the_content(); ?>
												<? endwhile; endif; wp_reset_query();  ?>
											</div>
											<div class="tabs-servis__item__consist__banner">
												<?php if ( have_posts() ) : query_posts('p=173');
														while (have_posts()) : the_post(); ?>
														<?php the_content(); ?>
												<? endwhile; endif; wp_reset_query();  ?>
											</div>
									</div>
								</div>
								<div class="personCost">
									<div class="tabs-servis__item__consist">
											<div class="tabs-servis__item__consist__icons">
												<?php if ( have_posts() ) : query_posts('p=177');
														while (have_posts()) : the_post(); ?>
														<?php the_content(); ?>
												<? endwhile; endif; wp_reset_query();  ?>
											</div>
											<div class="tabs-servis__item__consist__banner">
												<?php if ( have_posts() ) : query_posts('p=178');
														while (have_posts()) : the_post(); ?>
														<?php the_content(); ?>
												<? endwhile; endif; wp_reset_query();  ?>
											</div>
									</div>
								</div>
					</div>
					<div class="modal-window">
						<div class="modal-window__bg"></div>
						<div class="modal-window__container">
							<span class="modal-window__container__close"></span>
							<?php if ( have_posts() ) : query_posts('p=181');
									while (have_posts()) : the_post(); ?>
									<?php the_content(); ?>
							<? endwhile; endif; wp_reset_query();  ?>
						</div>
					</div>
				</div>
			</div>
	</section>
		<!-- Over  Services  -->

	<!-- Start Other sersices  -->
	<section class="otherServ background-f8">
		<div class="container">
			<p class="section-header__p"><?php echo get_the_title( 186 ) ?></p>
			<div class="otherServ__container">
				<?php if ( have_posts() ) : query_posts('p=186');
						while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query();  ?>

			</div>
		</div>

	</section>
	<!-- Over Other sersices  -->
	<!-- start HELP  -->
	<section class="help">
		<div class="container">
			<p class="section-header__p">Наша команда всегда прийдет Вам на помощь</p>
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


		<!-- Start VideoRecomend  -->
		<section class="fullWidthBg">
			<div class="fullWidthBg__item-background">
			<div class="container">
				<p class="section-header__p white-color"><?php echo get_the_title( 183 ) ?></p>
				<?php if ( have_posts() ) : query_posts('p=183');
						while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query();  ?>
			</div>
			</div>
		</section>
		<!-- Over VideoRecomend  -->

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


		<!-- Start Wedding gallery -->

		<!-- <section class="gallery">
			<div class="container">
				<p class="section-header__p">Галерея</p> -->
									<!-- Add Pagination -->
			<!-- </div>
			< ?php if ( have_posts() ) : query_posts('p=89');
					while (have_posts()) : the_post(); ?>
					< ?php the_content(); ?>
			< ? endwhile; endif; wp_reset_query();  ?>
		</section> -->

	<!-- Over Wedding gallery -->

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
<!-- start Wrapper  -->
<!-- <section class="wrap background-f8">
	<div class="container">
		<p class="section-header__p">< ?php echo get_the_title( 1 ) ?></p>
		<div class="wrap__item-text">
			<div class="wrap__item-text-content">
				< ?php if ( have_posts() ) : query_posts('p=1');

				while (have_posts()) : the_post(); ?>
						< ?php the_content(); ?>
				< ? endwhile; endif; wp_reset_query();  ?>
			</div>
			<span class="wrap__item-btn">Подробнее</span>
		</div>

	</div>

</section> -->

<!-- start Wrapper  -->
<!-- Start Events  -->
<section class="eventsCatalog background-f8">
	<div class="container">
		<p class="section-header__p"><?php echo get_the_title() ?></p>
		<div class="eventsCatalog__container">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>

		</div>
	</div>
</section>
<!-- Over Events  -->

        <?php get_footer();?>
</body>
</html>
