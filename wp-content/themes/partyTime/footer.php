


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
	<!-- <div class="block_content">
		<div class="block_modal_list">
			<p class="list_h1 fiolet">18 услуг</p>
			<ul class="modal_list">
				<li>Декорирование помещения
				<li>Звуковое оборудование</li>
				<li>Световое оборудование</li>
				<li>Технический райдер группы</li>
				<li>Ведущий мероприятия</li>
				<li>Ди-джей</li>
				<li>Шоу-балет</li>
				<li>Кавер-группа</li>
				<li>Шаржист</li>
				<li>Фокусник</li>
				<li>Аниматоры</li>
				<li>Девушка-хостесс</li>
				<li>Технический персонал</li>
				<li>Написание сценария</li>
				<li>Подарки на конкурсы</li>
				<li>Реквизит для конкурсов</li>
			</ul>
			<p class="list_h1 purpur_bg">стоимость: от 13 000$</p>
		</div>

		<div class="block_modal_text">
			<p><span class="purpur">Пакет «Standart»</span> - предполагает универсальное решение по организации различных мероприятий при разумном распределении бюджета. При выборе пакета «Standart» <span class="purpur">Вы получаете</span> 18 услуг, которые позволяют разнообразить праздничную шоу-программу. При этом Вы получаете декорирование помещения, профессиональное звуковое и световое оборудование с учетом технического райдера для кавер-группы, профессионального ведущего или пару ведущих, ди-джея, шоу-балет, кавер-группу, шаржиста, фокусника, аниматоров и девушки-хостесс.</p>
		</div>
		<div class="block_modal_text">
			<p>Под мероприятие составляется оригинальный сценарий концепции мероприятия с учетом выбранной и пожеланий заказчика. Кроме этого, <span class="purpur">в стоимость включен</span> также необходимый реквизит для конкурсов и символические подарки для гостей за участие в конкурсной программе, а также костюмы для персонала. <span class="purpur">В пакете учтено</span> комиссионное вознаграждение агентства за организацию мероприятия, в которую входит разработка идеи, планирование и контроль хода выполнения на площадке. В организации мероприятия всего принимает участие около 30 человек.</p>
		</div>
		<div class="block_modal_text">
			<ul class="modal_list">
			<li>Оптимальное количество гостей – до 100-150 чел.</li>
			<li><span class="purpur">В стоимость не входит</span> питание гостей (ресторан/кейтеринг).</li>
			<li>Вы всегда можете заменить услугу равной ценовой категории или оформить заказ на дополнительные услуги!</li>
		</div>
	</div>
	<div class="block_modal_footer">
		<p class="list_h1 footer_h1">Закажите данный пакет и получите профессиональную фотосъемку (5ч) в подарок!</p>
	</div> -->
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
