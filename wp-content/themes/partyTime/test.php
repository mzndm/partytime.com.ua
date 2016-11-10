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



 <section>
	 <div class="tab_form">
		 <?php if (have_posts()) : while (have_posts()) : the_post();?>
			 <?php the_content(); ?>
		 <?php endwhile; endif; ?>
	 </div>
</section>



    <?php get_footer();?>
  </body>
  </html>
