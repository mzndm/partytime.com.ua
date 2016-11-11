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

		<!-- //   replace -->
	<script type="text/javascript">
		$(document).ready(function() {
			var lastDisplay = $(".wpcf7-mail-sent-ok").css("display");
			var timer = setInterval(function() {
				var curDisplay = $(".wpcf7-mail-sent-ok").css("display");
		  	if (curDisplay!=lastDisplay) {
					$(".wpcf7-mail-sent-ok").html("<div class=\"step_container\"><div class=\"step step1_active\"><span class=\"step_item step_number_1\"><img src=\"/wp-content/themes/partyTime/img/check.png\"></span><p class=\"step_tab_p\">Шаг 1</p></div>  <div class=\"step step2_active\"><span class=\"step_item step_number_2\"><img src=\"/wp-content/themes/partyTime/img/check.png\"></span><p class=\"step_tab_p\">Шаг 2</p></div><div class=\"step step3_active\"><span class=\"step_item step_number_3\"><img src=\"/wp-content/themes/partyTime/img/check.png\"></span><p class=\"step_tab_p\">Шаг 3</p></div><div class=\"step step4_active\"><span class=\"step_item step_number_4\"><img src=\"/wp-content/themes/partyTime/img/check.png\"></span><p class=\"step_tab_p\">Шаг 4</p></div><div class=\"step step5_active\"><span class=\"step_item step_number_5\"><img src=\"/wp-content/themes/partyTime/img/check.png\"></span><p class=\"step_tab_p\">Шаг 5</p></div></div><div class=\"form_wrapper active_wrap5 submited\"><img src=\"/wp-content/themes/partyTime/img/ball.png\"><p>Ура! Ваш заказ успешно отправлен.</p><p>Мы свяжемся с Вами сразу после его обработки.</p><p>Хорошего дня! :)</p></div>");
		    	clearInterval( timer );
		  	}
			}, 500);
		});
	</script>
  </body>
  </html>
