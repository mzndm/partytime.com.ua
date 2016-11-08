<?php
/*
	Template name: Main events
*/
?>

<?php get_header(); ?>

	<!--  Start Section MAIN Banner -->
	<section class="services-main">
		<div class="container">
			<p class="section-header__p">Что мы можем</p>

			<div class="blockBanner">
				<div class="blockBanner__item">
						<div class="banner__header">
						<p>КОРПОРАТИВНЫЕ МЕРОПРИЯТИЯ</p>
					</div>
					<div class="banner__img">
						<img src="img/img-ban.png" alt="">
					</div>
					<div class="banner__list">
						<ul>
							<li><a href="#">Юбилеи компании</a></li>
							<li><a href="#">Летний корпоратив</a></li>
							<li><a href="#">Новогодний корпоратив</a></li>
							<li><a href="#">Командообразовательные программы</a></li>
						</ul>
					</div>
					<div class="banner__info">
						<div class="banner__info__event">
							<p class="number">100</p>
							<p class="word">мероприятий</p>
						</div>
						<div class="banner__info__people">
							<p class="number">6000</p>
							<p class="word">счасливых<br>гостей</p>
						</div>
						<div class="banner__info__shampain">
							<p class="number">5000</p>
							<p class="word">литров<br>шампанского</p>
						</div>
					</div>
				</div>
				<div class="blockBanner__item">
					<div class="banner__header">
						<p>частные МЕРОПРИЯТИЯ</p>
					</div>
					<div class="banner__img">
						<img src="img/img-ban2.png" alt="">
					</div>
					<div class="banner__list">
						<ul>
							<li><a href="#">Организация свадьбы</a></li>
							<li><a href="#">Организация дня рожденя</a></li>
							<li><a href="#">Выпускной вечер</a></li>
						</ul>
					</div>
					<div class="banner__info">
						<div class="banner__info__event">
							<p class="number">100</p>
							<p class="word">мероприятий</p>
						</div>
						<div class="banner__info__people">
							<p class="number">6000</p>
							<p class="word">счасливых<br>гостей</p>
						</div>
						<div class="banner__info__shampain">
							<p class="number">5000</p>
							<p class="word">литров<br>шампанского</p>
						</div>
					</div>
				</div>
				<div class="blockBanner__item blockBanner__item-simple">
						<a class="background__calc" href="#">
							<img src="img/img-ban3.png" alt="">
							<span class="blockBanner__item__inside blockBanner__item__calc__icon"></span>
							<p class="blockBanner__item__inside blockBanner__item-simple__word">
								Рассчитайте <br/>
								свой праздник <br/>
								в 3 шага <br/>
								всего за 2 минуты</p>
							<span class="blockBanner__item__inside blockBanner__item__calc__btn">
								Рассчитать праздник
							</span>
						</a>
				</div>
				<div class="blockBanner__item blockBanner__item-simple">
						<a class="background__pres" href="#">
							<img src="img/img-ban3.png" alt="">
							<span class="blockBanner__item__inside blockBanner__item__pres__icon"></span>
							<p class="blockBanner__item__inside blockBanner__item-simple__word">
								При заказе мероприятия<br/>
								под ключ - <br/>сценарий в подарок
							</p>
							<span class="blockBanner__item__inside blockBanner__item__pres__btn">
								Хочу подарок
							</span>
						</a>
				</div>
				<div class="blockBanner__item">
					<div class="banner__header">
						<p>бизнес МЕРОПРИЯТИЯ</p>
					</div>
					<div class="banner__img">
						<img src="img/img-ban5.png" alt="">
					</div>
					<div class="banner__list">
						<ul>
							<li><a href="#">Проведение презентаций</a></li>
							<li><a href="#">Организация конференций</a></li>
							<li><a href="#">Выставки</a></li>
							<li><a href="#">Организация форумов</a></li>
							<li><a href="#">Организация круглых столов</a></li>
							<li><a href="#">Открытие торговых точек</a></li>
						</ul>
					</div>
					<div class="banner__info">
						<div class="banner__info__event">
							<p class="number">100</p>
							<p class="word">мероприятий</p>
						</div>
						<div class="banner__info__people">
							<p class="number">6000</p>
							<p class="word">счасливых<br>гостей</p>
						</div>
						<div class="banner__info__shampain">
							<p class="number">5000</p>
							<p class="word">литров<br>шампанского</p>
						</div>
					</div>
				</div>
				<div class="blockBanner__item">
					<div class="banner__header">
						<p>специальные МЕРОПРИЯТИЯ</p>
					</div>
					<div class="banner__img">
						<img src="img/img-ban6.png" alt="">
					</div>
					<div class="banner__list">
						<ul>
							<li><a href="#">Организация концертов</a></li>
							<li><a href="#">Организация фестивалей</a></li>
							<li><a href="#">Городские праздники</a></li>
							<li><a href="#">Рекламные акции</a></li>
							<li><a href="#">Вечерние балы</a></li>
							<li><a href="#">Аукционы</a></li>
						</ul>
					</div>
					<div class="banner__info">
						<div class="banner__info__event">
							<p class="number">100</p>
							<p class="word">мероприятий</p>
						</div>
						<div class="banner__info__people">
							<p class="number">6000</p>
							<p class="word">счасливых<br>гостей</p>
						</div>
						<div class="banner__info__shampain">
							<p class="number">5000</p>
							<p class="word">литров<br>шампанского</p>
						</div>
					</div>
				</div>
			</div>

		</div>

	</section>
<!-- Over HELP  -->

<!-- start Wrapper  -->
<section class="wrap background-f8">
	<?php if ( have_posts() ) : query_posts('');
											 while (have_posts()) : the_post(); ?>
	<div class="container">
		<p class="section-header__p"><?php the_title();?></p>
		<div class="wrap__item-text">
			<div class="wrap__item-text-content">
						<?php the_content(); ?>
			</div>
			<span class="wrap__item-btn">Подробнее</span>
		</div>

	</div>
    <? endwhile; endif; wp_reset_query();  ?>
</section>

<!-- start Wrapper  -->

        <?php get_footer();?>
</body>
</html>
