<?php
/*
	Template name: Events Catalog1
*/
?>

<?php get_header(); ?>
<section class="breadcrumbs">
	<div class="container">
			<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' » '); ?>
	</div>
</section>





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





			<?php the_meta(); ?>

        <?php get_footer();?>
</body>
</html>
