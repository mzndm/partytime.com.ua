<?php
/*
	Template name: test
*/
?>

<?php get_header(); ?>
<section class="breadcrumbs">
	<div class="container">
			<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' » '); ?>
	</div>
</section>
	<!-- <section id="slider">
		< ?php if ( have_posts() ) : query_posts('p=106');
				while (have_posts()) : the_post(); ?>
				< ?php the_content(); ?>
		< ? endwhile; endif; wp_reset_query();  ?>
	</section> -->

<!-- <section id="slider">


 < ?php the_field('weddng_slider_afc'); ?>


</section> -->

 <section>
	 <div class="tab_form">
		 <?php if (have_posts()) : while (have_posts()) : the_post();?>
			 <?php the_content(); ?>
		 <?php endwhile; endif; ?>
	 </div>
</section>



<!-- Start Events  -->
<section class="otherServ background-f8">
	 <div class="container">
		 <p class="section-header__p">Заказывайте отдельные услуги</p>
		 <div class="otherServ__container">

			 <p class="section-header__p white-color"><?php echo get_the_title( 186 ) ?></p>
			 <?php if ( have_posts() ) : query_posts('p=186');
					 while (have_posts()) : the_post(); ?>
					 <?php the_content(); ?>
			 <? endwhile; endif; wp_reset_query();  ?>

		</div>
	</div>
</section>
<!-- Over Events  -->


    <?php get_footer();?>
  </body>
  </html>
