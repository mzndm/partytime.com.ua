


<!-- start map -->
	<section>
		<div id="map">

		</div>
		<div class="info-map">
			<?php if ( is_active_sidebar( 'info_map' ) ) : ?>
					<?php dynamic_sidebar( 'info_map' ); ?>
			<?php endif; ?>
		</div>
	</section>
<!-- over map -->

<footer>
<div id="scrollTop">
	<a></a>
</div>

	<div class="footer__menu-top">
		<?php
				wp_nav_menu( array(
							 'menu_class'=>'container footer__menu-top-menu',
							 'theme_location'=>'footer',
							 'menu_id' => 'footer-menu',
							 'menu'            => '',
							 'container'       => false,
							 'container_class' => '',
							 'container_id'    => '',
							 'echo'            => true,
							 'fallback_cb'     => 'wp_page_menu',
							 'before'          => '',
							 'after'           => '',
							 'link_before'     => '',
							 'link_after'      => '',
							 'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
							 'depth'           => 1,
							 'walker'          => '',
					 )
		); ?>
	</div>
	<div class="footer__menu-bottom">
		<p class="copyright">© 2005 - 2016, Киев, Украина - рartytime.com.ua</p>
	</div>
</footer>


<div id="under_construction" class="modal_div modal_construction" >
		<span class="modal_close modal-window__container__close construction_close"></span>
		<span class="icons__servis modal-window_iconTop"></span>
		<p>Данный раздел находится в разработке.</p>
		<p>Воспользуйтесь онлайн-заказом. </p>

		<a href="/zakaz-prazdnika.html" class="button__modal button_zakaz">Онлайн - заказ</a>
</div>

<?php
    $modaltext = rwmb_meta( 'wysiwyg', array('type' => 'wysiwyg') );
?>

<div id="learn_more_mini" class="modal_div modal_learn_more" >
	<span class="modal_close modal-window__container__close learn_close"></span>
	<?php echo array_shift($modaltext); ?>
</div>

<div id="learn_more_economic" class="modal_div modal_learn_more" >
	<span class="modal_close modal-window__container__close learn_close"></span>
	<?php echo array_shift($modaltext); ?>
</div>

<div id="learn_more_standard" class="modal_div modal_learn_more" >
	<span class="modal_close modal-window__container__close learn_close"></span>
	<?php echo array_shift($modaltext); ?>
</div>

<div id="learn_more_extra" class="modal_div modal_learn_more" >
	<span class="modal_close modal-window__container__close learn_close"></span>
	<?php echo array_shift($modaltext); ?>
</div>

<div id="overlay"></div>


	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jQuery.v3.1.0.min.js" type="text/javascript"></script>
	<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js" type="text/javascript"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/classie.js" type="text/javascript"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/clipboard.min.js" type="text/javascript"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.js" type="text/javascript"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.featureCarousel.js" type="text/javascript"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/map.js" type="text/javascript"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsYaYJAkTYvpetZz0NmrR4K6ZAk-NjLG4" async defer></script>

	<!-- Initialize Common -->

	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/common.js"></script>
		<!-- CHAT-->
	<script id="rhlpscrtg" type="text/javascript" charset="utf-8" async="async"
		src="https://web.redhelper.ru/service/main.js?c=spieler">
	</script>
		<!-- END CHAT-->


	<?php wp_footer(); ?>

	</body>
</html>
