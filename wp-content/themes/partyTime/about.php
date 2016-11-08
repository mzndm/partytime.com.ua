<?php
/*
	Template name:about
*/
?>

<?php get_header(); ?>
<section class="breadcrumbs">
	<div class="container">
			<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' » '); ?>
	</div>
</section>
<!--
	<section id="slider">
		< ?php if ( have_posts() ) : query_posts('p=106');
				while (have_posts()) : the_post(); ?>
				< ?php the_content(); ?>
		< ? endwhile; endif; wp_reset_query();  ?>
	</section> -->


  <!-- Start Events  -->
<section class="paket-servis">
		<div class="container">
			<!-- <p class="section-header__p"><?php echo get_the_title() ?></p> -->
			<div class="tabs-servis">
				<?php if (have_posts()) : while (have_posts()) : the_post();?>
				  <?php the_content(); ?>
				<?php endwhile; endif; ?>

			</div>
		</div>
	</section>
	<!-- Over Events  -->



  <!-- Start Other sersices  -->
  <!-- <section class="otherServ background-f8">
    <div class="container">
      <p class="section-header__p">< ?php echo get_the_title( 186 ) ?></p>
      <div class="otherServ__container">
        < ?php if ( have_posts() ) : query_posts('p=186');
            while (have_posts()) : the_post(); ?>
            < ?php the_content(); ?>
        < ? endwhile; endif; wp_reset_query();  ?>

      </div>
    </div>

  </section> -->
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
    <!-- <section class="fullWidthBg">
      <div class="fullWidthBg__item-background">
      <div class="container">
        <p class="section-header__p white-color">< ?php echo get_the_title( 183 ) ?></p>
        < ?php if ( have_posts() ) : query_posts('p=183');
            while (have_posts()) : the_post(); ?>
            < ?php the_content(); ?>
        < ? endwhile; endif; wp_reset_query();  ?>
      </div>
      </div>
    </section> -->
    <!-- Over VideoRecomend  -->

    <!--  Start Section Gallery -->
		<!-- <section class="gallery">
			<div class="container">
				<p class="section-header__p">< ?php echo get_the_title( 89 ) ?></p>

				< ?php if ( have_posts() ) : query_posts('p=89');
						while (have_posts()) : the_post(); ?>
						< ?php the_content(); ?>
				< ? endwhile; endif; wp_reset_query();  ?>
		</section> -->
	<!-- Over gallery  -->
  <!--  Start We work -->
  <!-- <section class="we work">
  	<div class="container">
  		<p class="section-header__p">< ?php echo get_the_title( 87 ) ?></p>
  		<div class="infoBlock">
  			< ?php if ( have_posts() ) : query_posts('p=87');
  					while (have_posts()) : the_post(); ?>
  					< ?php the_content(); ?>
  			< ? endwhile; endif; wp_reset_query();  ?>
  		</div>
  	</div>
  	</section> -->
  <!--  Over We work -->

  <!-- start Require  -->
<!--
  <section class="req background-f8">
  	<div class="container">
  		<p class="section-header__p">< ?php echo get_the_title( 81 ) ?></p>
  		<div class="carousel-container">
  			< ?php if ( have_posts() ) : query_posts('p=81');

  					while (have_posts()) : the_post(); ?>
  					< ?php the_content(); ?>
  			< ? endwhile; endif; wp_reset_query();  ?>
      </div>
  	</div>
  </section> -->
  <!-- over Require  -->


  <!-- Start Why we  -->

  <!-- <section class="why-we">
  	<div class="why-we__item-background">
  			<div class="container">
  				<div class="why-we__item-ul">
  					<p class="section-header__p white-color">< ?php echo get_the_title( 79 ) ?></p>
  							< ?php if ( have_posts() ) : query_posts('p=79');

  									while (have_posts()) : the_post(); ?>
  									< ?php the_content(); ?>
  							< ? endwhile; endif; wp_reset_query();  ?>
  				</div>
  			</div>
  	</div>
  </section> -->

  <!--Over Why we  -->

  <!-- Start Comand  -->

  <!-- <section class="comand background-f8">
  	<div class="container">
  		<p class="section-header__p">< ?php echo get_the_title( 57 ) ?></p>


  						< ?php if ( have_posts() ) : query_posts('p=57');

  						while (have_posts()) : the_post(); ?>
  								< ?php the_content(); ?>
  						< ? endwhile; endif; wp_reset_query();  ?>

  	</div>
  </section> -->

  <!--Over comand  -->

  <!--  Start Section MAIN Banner -->
  <!-- <section class="services-main">
  	<div class="container">
  		<p class="section-header__p">< ?php echo get_the_title( 94 ) ?></p>

  		< ?php if ( have_posts() ) : query_posts('p=94');
  				while (have_posts()) : the_post(); ?>
  				< ?php the_content(); ?>
  		< ? endwhile; endif; wp_reset_query();  ?>
  	</div>

  </section> -->


    <?php the_meta(); ?>
    <?php get_footer();?>
  </body>
  </html>
