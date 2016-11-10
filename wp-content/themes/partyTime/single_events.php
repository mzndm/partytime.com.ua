<?php
/*
	Template name: Single Events1
*/
?>

<?php get_header(); ?>
<section class="breadcrumbs">
	<div class="container">
			<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' » '); ?>
	</div>
</section>
	<section id="slider">
    <div id="owl1" class="owl-carousel">
  		<?php
          $images1 = rwmb_meta( 'imgadv1', array('multiple' => true) );
          $text1 = rwmb_meta( 'imgcap1', array('type' => 'text') );
          foreach ($images1 as $im1 => $image1):
      ?>
        <div>
          <?php echo wp_get_attachment_image($im1, 'gallery-primary'); ?>
          <p><?php echo array_shift($text1); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
	</section>


  <!-- Start Events  -->
  <section class="paket-servis">
		<div class="container">
			<p class="section-header__p"><?php echo get_the_title() ?></p>
			<div class="tabs-servis">
				<?php if (have_posts()) : while (have_posts()) : the_post();?>
				  <?php the_content(); ?>
				<?php endwhile; endif; wp_reset_postdata(); ?>

			</div>
		</div>
	</section>
	<!-- Over Events  -->



  <!-- Start Other sersices  -->
 <section class="otherServ background-f8">
    <div class="container">
      <p class="section-header__p">Заказывайте отдельные услуги</p>
      <div class="otherServ__container">
        <div id="owl2" class="owl-carousel">
          <?php
              $images2 = rwmb_meta( 'imgadv2', array('multiple' => true) );
              $text2 = rwmb_meta( 'imgcap2', array('type' => 'text') );
              foreach ($images2 as $im2 => $image2):
          ?>
            <div>
              <?php echo wp_get_attachment_image($im2, 'gallery-secondary'); ?>
              <p><?php echo array_shift($text2); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
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

  <section class="workWith">
    <div class="container">
      <p class="section-header__p">С нами работали (Наши клиенты)</p>
      <div class="workWith__container">
        <div id="owl3" class="owl-carousel">
          <?php
              $images3 = rwmb_meta( 'imgadv3', array('multiple' => true) );
              $text3 = rwmb_meta( 'imgcap3', array('type' => 'text') );
              foreach ($images3 as $im3 => $image3):
          ?>
            <div>
              <?php echo wp_get_attachment_image($im3, 'gallery-tertiary'); ?>
              <p><?php echo array_shift($text3); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

  </section>


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


    <?php the_meta(); ?>
    <?php get_footer();?>
  </body>
  </html>
