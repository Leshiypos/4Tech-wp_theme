<?php
/*
 *
Template name: Оборудование
Template post type: page
 */
?>

<?php

get_header();

$it_services_url = get_permalink(pll_get_post(118));
$office_equipmen_url = get_permalink(pll_get_post(65));
$network_equipment_url = get_permalink(pll_get_post(104));
$licensed_software_url = get_permalink(pll_get_post(84));

?>

<main class="equipment_page">
	<!-- Мобильное меню -->
	<nav id="burger-menu" class="menu_mobile">
		<div class="head_burger">
			<img class="logo_burger" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="logo" />
			<div class="lang_switcher">
				<?php
				$polylang_args = [
					"dropdown" => 1,
					"display_names_as" => "slug",
					"id" => "lang_1",
				];
				pll_the_languages($polylang_args);
				?>
			</div>
			<button class="close_menu" data-toggle-menu>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cross.svg" alt="Закрыть меню" />
			</button>
		</div>
		<div class="wrap_content">
			<div></div>
			<ul class="burger__list">
				<li class="burger__list-link">
					<a href="/#about" data-link-burger><?php pll_e("О нас"); ?></a>
				</li>
				<li class="burger__list-link">
					<a href="/#services" data-link-burger><?php pll_e("Услуги"); ?></a>
				</li>
				<li class="burger__list-link">
					<a href="/#soft" data-link-burger><?php pll_e("Софт"); ?></a>
				</li>
				<li class="burger__list-link">
					<a href="/#equipment" data-link-burger><?php pll_e("Оборудование"); ?></a>
				</li>
				<li class="burger__list-link">
					<a href="/#protect" data-link-burger><?php pll_e("Кибербезопасность"); ?></a>
				</li>
				<li class="burger__list-link">
					<a href="/#outsourcing" data-link-burger><?php pll_e("Аутсорсинг"); ?></a>
				</li>
				<li class="burger__list-link">
					<a href="/#solution" data-link-burger><?php pll_e("Этапы"); ?></a>
				</li>
				<li class="burger__list-link">
					<a href="/#development" data-link-burger><?php pll_e("Разработка"); ?></a>
				</li>
				<li class="burger__list-link">
					<a href="/#partners" data-link-burger><?php pll_e("Партнеры"); ?></a>
				</li>
				<li class="burger__list-link">
					<a href="/#solutions" data-link-burger><?php pll_e("Решения"); ?></a>
				</li>
				<li class="burger__list-link">
					<a href="/#contacts" data-link-burger><?php pll_e("Контакты"); ?></a>
				</li>
			</ul>

			<div class="burger__button">
				<button
					class="btn_hs leave_request mobile_full_width"
					data-open-popup>
					<p><?php pll_e("Оставить заявку"); ?></p>
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
						alt="button" />
				</button>
			</div>
		</div>
	</nav>
	<!-- Хедер -->
	<header>
		<div class="desktop">
			<div class="wrap_header">
				<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="" class="logo" /></a>
				<nav>
					<ul class="main_menu">
						<li><a href="<?php echo $office_equipmen_url; ?>"><?php pll_e("Оргтехника"); ?></a></li>
						<li><a href="<?php echo $licensed_software_url; ?>"><?php pll_e("Лицензионное ПО"); ?></a></li>
						<li><a href="<?php echo $network_equipment_url; ?>"><?php pll_e("Сетевое оборудование"); ?></a></li>
						<li><a href="<?php echo $it_services_url; ?>"><?php pll_e("IT-услуги"); ?></a></li>

					</ul>
				</nav>
				<div class="wrap_btns">
					<?php /**
					<a href="#" class="leave_req_btn" data-dropdownmenu-open>
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/burger_btn_desktop.svg"
							alt="leave a request" />
					</a>
					 */
					pll_the_languages($polylang_args);
					?>
				</div>
			</div>
		</div>
		<div class="mobile">

			<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="" class="logo" /></a>
			<button class="burger_btn" data-toggle-menu>
				<img
					src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/burger_btn.svg"
					alt="button burger" />
			</button>
		</div>
	</header>

	<!-- Секция HEro section -->
	<?php
	$hero = get_field("hero_section");
	?>
	<section id="begin" class="hero_section">
		<div class="wrap_section">
			<img src="<?php echo $hero["img_url"]; ?>" class="video_background" alt="Изображение">

			<div class="wrap_content">
				<div class="head_content">
					<div class="pre_title">
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/check_mark.svg"
							alt="check_mark" />
						<span><?php echo $hero['description'] ? $hero['description'] : "Описание не установлено"; ?></span>
					</div>
				</div>
				<h1>
					<?php echo $hero['title'] ? $hero['title'] : "Заголовок не установлен"; ?>
				</h1>
				<div class="pre_title_mob">
					<?php echo $hero['description_mob'] ? $hero['description_mob'] : "Описание для мобильной версии не установлено"; ?>
				</div>
				<div class="foot_content two_col">
					<div class="left_col">
						<button class="btn_hs white" data-open-popup>
							<p><?php pll_e("Оставить заявку"); ?></p>
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_in_circle_bl.svg"
								alt="arrow in circle" />
						</button>
						<button class="btn_hs transporent" data-open-popup>
							<p><?php pll_e("Узнать больше"); ?></p>
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_in_circle_w.svg"
								alt="arrow in circle" />
						</button>
					</div>
					<div class="right_col">
						<a href="#solution">

							<button class="btn_hs down just_img">
								<!-- <p>Листайте вниз</p> -->
								<img
									src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_in_circle_down_w.svg"
									alt="arrow in circle" />
							</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Секция Комплексное решение  -->
	<?php
	$solution_section = get_field("solution_section");
	$is_active_solution = $solution_section['is_active'] ? $solution_section['is_active'] : false;

	if ($is_active_solution) {
	?>

		<section id="solution" class="solution_section">
			<div class="wrap_section">
				<div class="head_content">
					<div class="title">
						<h2 class="fade_in">
							<?php pll_e("комплексное решение по внедрению <br />IT архитектуры в вашу компанию"); ?>
						</h2>
						<div class="four_steps fade_in">
							<video
								class="video_background "
								poster="<?php echo get_template_directory_uri(); ?>/assets/video/cube_mini.webp"
								muted=""
								loop=""
								playsinline=""
								preload="none"
								data-autoplay="delay">
								<!-- десктоп -->
								<source
									src="<?php echo get_template_directory_uri(); ?>/assets/video/cube_mini.mp4"
									type="video/mp4"
									media="(min-width: 1001px)" />
								<!-- мобильный -->
								<source
									src="<?php echo get_template_directory_uri(); ?>/assets/video/mobile/cube_mini.mp4"
									type="video/mp4"
									media="(max-width: 1000px)" />
							</video>

							<div class="content fade_in">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_for_cube.png" alt="" />
							</div>
						</div>
					</div>
					<div class="description_wrap fade_in">
						<div class="wrap">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_section.svg"
								alt="logo-section" />
							<div class="description">
								<?php pll_e("Поломки техники, нехватка расходников, завышенные цены — мы решаем эти задачи."); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="main_content">
					<!-- decktop version -->

					<div class="solutions_desktop">
						<div class="col text">
							<h3 class="fade_in">
								<?php pll_e("полный <br />аудит"); ?>
							</h3>
							<p class="fade_in">
								<?php pll_e("Проводим глубокую оценку текущей IT-инфраструктуры, выявляем технические и бизнес-проблемы, определяем зоны риска и формируем основу для цифровой трансформации."); ?>
							</p>
						</div>
						<div class="col img">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_right.svg"
								class="first"
								alt="arrow" />
						</div>
						<div class="col text">
							<h3 class="fade_in">
								<?php pll_e("создание <br />концепции"); ?>
							</h3>
							<p class="fade_in">
								<?php pll_e("Разрабатываем стратегический план развития IT-системы под задачи бизнеса: от архитектуры решений до оптимального набора технологий и инструментов."); ?>
							</p>
						</div>
						<div class="col img">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_right.svg"
								class="second"
								alt="arrow" />
						</div>
						<div class="col text">
							<h3 class="fade_in">
								<?php pll_e("обоснование <br />внедрения IT"); ?>
							</h3>
							<p class="fade_in">
								<?php pll_e("Готовим обоснование с расчётами эффективности, сроков и бюджета внедрения. Согласовываем подходящие решения и прогнозируем результат в цифрах."); ?>
							</p>
						</div>
						<div class="col img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_right.svg" alt="arrow" />
						</div>
						<div class="col text">
							<h3 class="fade_in">
								<?php pll_e("внедрение <br />технологии"); ?>
							</h3>
							<p class="fade_in">
								<?php pll_e("Внедряем технологии с учётом всех этапов — поставка,	настройка, интеграция, обучение и поддержка. Гарантируем стабильную работу и измеримый эффект."); ?>
							</p>
						</div>
					</div>
					<!-- decktop version -->

					<div class="swiper solution-slider">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="two_column">
									<div class="col text">
										<h3 class="fade_in"><?php pll_e("полный аудит"); ?></h3>
										<p class="fade_in">
											<?php pll_e("Проводим глубокую оценку текущей IT-инфраструктуры,	выявляем технические и бизнес-проблемы, определяем зоны риска и формируем основу для цифровой трансформации."); ?>
										</p>
									</div>
									<div class="col img">
										<img
											src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_right_long.svg"
											alt="arrow" />
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="two_column">
									<div class="col text">
										<h3 class="fade_in"><?php pll_e("создание концепции"); ?></h3>
										<p class="fade_in">
											<?php pll_e("Разрабатываем стратегический план развития IT-системы под задачи бизнеса: от архитектуры решений до оптимального набора технологий и инструментов."); ?>
										</p>
									</div>
									<div class="col img">
										<img
											src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_right_long.svg"
											alt="arrow" />
									</div>
								</div>
							</div>

							<div class="swiper-slide fade_in">
								<div class="two_column">
									<div class="col text">
										<h3 class="fade_in"><?php pll_e("обоснование внедрения IT"); ?></h3>
										<p class="fade_in">
											<?php pll_e("Готовим обоснование с расчётами эффективности, сроков и бюджета внедрения. Согласовываем подходящие решения и прогнозируем результат в цифрах."); ?>
										</p>
									</div>
									<div class="col img">
										<img
											src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_right_long.svg"
											alt="arrow" />
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="two_column">
									<div class="col text last">
										<h3 class="fade_in"><?php pll_e("внедрение технологии"); ?></h3>
										<p class="fade_in">
											<?php pll_e("Внедряем технологии с учётом всех этапов — поставка, настройка, интеграция, обучение и поддержка. Гарантируем стабильную работу и измеримый эффект."); ?>
										</p>
									</div>
									<div class="col img">
										<!-- <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_right.svg"
                        alt="arrow"
                      /> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php
	}
	?>

	<!-- Секция Комлпексное решение -->
	<?php
	$solutions_second_section = get_field("solutions_second_section");
	$is_active_solution_second = $solutions_second_section['is_active'] ? $solutions_second_section['is_active'] : false;

	if ($is_active_solution_second) {
	?>

		<section class="solutions_second_section first_section" id="solution">
			<div class="wrap_section">
				<div class="head_content">
					<div class="title">
						<h2 class="fade_in"><?php echo $solutions_second_section['title'] ? $solutions_second_section['title'] : "Заголовок не установлено"; ?></h2>
					</div>
					<div class="description_wrap fade_in">
						<div class="wrap">
							<div class="video_cube">
								<div class="block_cube">
									<video
										class="video_background fade_in"
										poster="<?php echo get_template_directory_uri(); ?>/assets/video/cube_mini.webp"
										muted=""
										loop=""
										playsinline=""
										preload="auto"
										data-autoplay="delay"
										autoplay="">
										<!-- десктоп -->
										<source
											src="<?php echo get_template_directory_uri(); ?>/assets/video/cube_mini.mp4"
											type="video/mp4"
											media="(min-width: 1001px)" />
										<!-- мобильный -->
										<source
											src="<?php echo get_template_directory_uri(); ?>/assets/video/mobile/cube_mini.mp4"
											type="video/mp4"
											media="(max-width: 1000px)" />
									</video>

									<div class="content_logo">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_for_cube.png" alt="" />
									</div>
								</div>
							</div>
							<div class="description">
								<?php echo $solutions_second_section['description'] ? $solutions_second_section['description'] : "Описание не установлено"; ?>
							</div>
						</div>
					</div>
				</div>
				<div class="main_content">
					<div class="wrap_main_content">
						<?php
						$solution_repeater = $solutions_second_section["solution_repeater"];
						if ($solutions_second_section && !empty($solution_repeater)) {
							foreach ($solution_repeater as $repeater) {
						?>
								<div class="single_solution fade_in">
									<img src="<?php echo $repeater["icon_url"] ? $repeater["icon_url"] : get_template_directory_uri() . '/assets/images/icons/sol_1.svg'; ?>" alt="" />
									<div class="right_col">
										<h5><?php echo $repeater["title_rep"]; ?></h5>
										<div class="post_title">
											<?php echo $repeater["description_rep"]; ?>
										</div>
									</div>
								</div>
						<?php
							}
						}
						?>
					</div>
				</div>
			</div>
		</section>
	<?php
	}
	?>
	<!-- Секция Каталог-->
	<?php
	$catalog_section = get_field('catalog_equipment_section');
	$count = $catalog_section['count'] ? $catalog_section['count'] : -1;
	$goods_type = $catalog_section['goods_type'] ? $catalog_section['goods_type']->slug : "";

	$arg = [
		"posts_per_page" 	=> $count,
		"post_type" 		=> "goods",
		"type_goods"		=> $goods_type
	];
	$goods_posts = get_posts($arg);
	?>
	<section class="catalog_equipment_section">
		<div class="wrap_section">
			<div class="head_content fade_in">
				<h2><?php pll_e("Каталог"); ?></h2>
			</div>
			<div class="main_content">

				<?php
				foreach ($goods_posts as $post) {
					setup_postdata($post);
				?>
					<!-- Карточка -->
					<div class="card fade_in">
						<div class="img_wrap">
							<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), "goods_thumb") ? get_the_post_thumbnail_url(get_the_ID(), "goods_thumb") : get_template_directory_uri() . '/assets/images/img_not_found.webp'; ?>" alt="" />
						</div>
						<div class="description_wrap">
							<div class="description">
								<h4><?php the_title(); ?></h4>
								<?php the_excerpt(); ?>
							</div>
						</div>
						<div class="btn_block">
							<button class="btn_hs white" data-open-popup="">
								<p><?php pll_e("Запросить цену"); ?></p>
								<img
									src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_in_circle_bl.svg"
									alt="arrow in circle" />
							</button>
						</div>
					</div>

				<?php
				}
				wp_reset_postdata();
				?>

			</div>
		</div>
	</section>

	<!-- Секция НАШИ преимущества -->
	<?php
	$advantages_section = get_field("advantages_section");
	?>
	<section class="solutions_second_section second_section">
		<div class="wrap_section">
			<div class="head_content">
				<div class="title">
					<h2 class="fade_in"><?php echo $advantages_section['title'] ? $advantages_section['title'] : "Введите заголовок секции";  ?></h2>
				</div>
				<div class="description_wrap fade_in">
					<div class="wrap">
						<div class="video_cube">
							<div class="block_cube">
								<video
									class="video_background fade_in"
									poster="<?php echo get_template_directory_uri(); ?>/assets/video/cube_mini.webp"
									muted=""
									loop=""
									playsinline=""
									preload="auto"
									data-autoplay="delay"
									autoplay="">
									<!-- десктоп -->
									<source
										src="<?php echo get_template_directory_uri(); ?>/assets/video/cube_mini.mp4"
										type="video/mp4"
										media="(min-width: 1001px)" />
									<!-- мобильный -->
									<source
										src="<?php echo get_template_directory_uri(); ?>/assets/video/mobile/cube_mini.mp4"
										type="video/mp4"
										media="(max-width: 1000px)" />
								</video>

								<div class="content_logo">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_for_cube.png" alt="" />
								</div>
							</div>
						</div>
						<div class="description">
							<?php echo $advantages_section['description'] ? $advantages_section['description'] : "Введите описание секции";  ?>
						</div>
					</div>
				</div>
			</div>
			<div class="main_content">
				<div class="wrap_main_content">

					<?php
					$advantages_repeater = $advantages_section["advantages_repeater"];
					if ($advantages_section && !empty($advantages_repeater)) {
						foreach ($advantages_repeater as $repeater) {
					?>
							<div class="single_solution fade_in">
								<img src="<?php echo $repeater["icon_url"] ? $repeater["icon_url"] : get_template_directory_uri() . '/assets/images/icons/sol_1.svg'; ?>" alt="" />
								<div class="right_col">
									<h5><?php echo $repeater["title_rep"]; ?></h5>
									<div class="post_title">
										<?php echo $repeater["description_rep"]; ?>
									</div>
								</div>
							</div>
					<?php
						}
					}
					?>

				</div>
			</div>
		</div>
	</section>

	<!-- Секция Наши кленты -->
	<?php
	$partners_section = get_field("partners_section");
	$row_one =   $partners_section["clients_repeater_row_one"];
	$row_two =   $partners_section["clients_repeater_row_two"];
	?>
	<section id="partners" class="partners_cluster">
		<!-- Секция Наши Клиенты -->
		<section class="partners_section">
			<div class="wrap_section">
				<h2 class="fade_in"><?php echo $partners_section["title"] ? $partners_section["title"] : "Наши клиенты" ?></h2>
				<div class="main_content">
					<div class="sliders_wrap">
						<!-- Первый слайдер -->
						<div class="swiper partners_slider fade_in">
							<div class="swiper-wrapper">
								<?php
								if (!empty($row_one)) {
									foreach ($row_one as $url) {
								?>
										<div class="swiper-slide">
											<img
												src="<?php echo $url; ?>"
												alt=""
												class="partner_logo" />
										</div>
								<?php
									}
								}
								?>
							</div>
						</div>
						<!-- Второй слайдер -->
						<div class="swiper partners_slider fade_in">
							<div class="swiper-wrapper">
								<?php
								if (!empty($row_two)) {
									foreach ($row_two as $url) {
								?>
										<div class="swiper-slide">
											<img
												src="<?php echo $url; ?>"
												alt=""
												class="partner_logo" />
										</div>
								<?php
									}
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>

	<!-- Секция Отзывов -->
	<?php
	$reviews_clients_section = get_field("reviews_clients_section");
	$reviews = $reviews_clients_section["reviews"];
	?>
	<?php
	if ($reviews_clients_section && !empty($reviews)) {
	?>
		<section class="reviews_clients_section">
			<div class="wrap_section">
				<div class="head_content fade_in">
					<h2><?php pll_e("Отзывы клиентов"); ?></h2>
				</div>
				<div class="reviews_block">
					<!-- Одиночный отзыв -->
					<?php
					foreach ($reviews as $review) {
					?>
						<div class="single_review fade_in">
							<div class="head_review">
								<img
									src="<?php echo $review["avatar_url"] ? esc_attr($review["avatar_url"]) : get_template_directory_uri() . "/assets/images/avatar_default.webp"; ?>"
									class="avatar"
									alt="avatar" />
								<div class="wrap_desription">
									<h5 class="name"><?php echo $review["name"]; ?></h5>
									<div class="job_title"><?php echo $review["job_title"]; ?></div>
									<div class="rating_block">
										<img
											src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/stars_rate_active.png"
											class="unactive_rate_stars"
											alt="rating" />
										<div class="wrap_stars_active" style="width: <?php echo $review["rating"] ? round(((int)$review["rating"] / 5) * 100) : 0; ?>%">
											<img
												src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/stars_rate_active.png"
												class="active_rate_stars"
												alt="rating" />
										</div>
									</div>
								</div>
							</div>
							<div class="text_review">
								<?php echo $review["text_review"]; ?>
							</div>
						</div>
					<?php
					}
					?>
				</div>
			</div>
		</section>
	<?php
	}
	?>

	<!-- FAQ -->
	<?php
	$questions_section = get_field("questions_section");
	if ($questions_section) {
	?>

		<section class="questions_section">
			<div class="wrap_section">
				<div class="head_content">
					<h2 class="fade_in">FAQ</h2>
				</div>
				<div class="main_content fade_in">
					<?php
					$i = 0;
					if (!empty($questions_section["repeater"])) {
						foreach ($questions_section["repeater"] as $question) {
							$i++;
					?>

							<div class="single_question <?php echo ($i === 1) ? "active" : ""; ?>">
								<div class="wrap_question">
									<div class="item_number"><?php echo sprintf('%02d', $i) . "/"; ?></div>
									<div class="question_content">
										<h5 class="qestion"><?php echo $question['question']; ?></h5>

										<div class="answer">
											<?php echo $question['answer']; ?>
										</div>
									</div>
								</div>
								<img
									src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_white.svg"
									class="arrow"
									alt="arrow" />
							</div>

					<?php
						}
					}
					?>
				</div>
			</div>
		</section>
	<?php
	}
	?>

	<!-- Секция Контактная форма -->
	<?php
	$form_section = get_field("form_section");
	$is_active_field = $form_section['is_active_field_form'] ? $form_section['is_active_field_form'] : "on";
	?>
	<section id="contacts" class="contact_form_section">
		<div class="wrap_section">
			<div class="two_column">
				<div class="col">
					<div class="head_content">
						<h2 class="fade_in">
							<?php
							echo $form_section["title"] ? $form_section["title"] : "введите ваш номер <br />телефона"
							?>

						</h2>
						<p class="description fade_in">
							<?php
							echo $form_section["description"] ? $form_section["description"] : "
							Оставьте заявку, и мы подберем решения, которые повысят
							эффективность вашего бизнеса и сэкономят ресурсы за счет
							автоматизации. Все — под ключ и без лишней головной боли.
						";
							?>
						</p>
					</div>
					<div class="form_wrap">
						<?php
						if ($is_active_field == "on") {
						?>
							<form
								id="custom-contact-form"
								class="contact-form"
								action=""
								method="post"
								enctype="multipart/form-data">
								<?php wp_nonce_field('custom_contact_form', 'custom_contact_form_nonce'); ?>
								<div class="fields">
									<label class="form-phone">
										<input
											id="number"
											class="contact-form-input fade_in"
											type="tel"
											name="number_visible"
											inputmode="tel"
											autocomplete="tel"
											placeholder="777 777 77 77"
											required />
										<input type="hidden" name="phone_e164" id="phone_e164" />
									</label>
									<small id="phone_error" class="input-hint">Введите корректный номер</small>
									<div id="form-message"></div>
								</div>

								<button
									class="btn_hs leave_request fade_in mobile_full_width"
									type="submit">
									<p><?php pll_e("Оставить заявку"); ?></p>
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
										alt="button" />
								</button>
							</form>
						<?php
						} else {
						?>
							<button class="btn_hs leave_request fade_in write_whatsap mobile_full_width btn_margin_bot" data-open-popup>
								<p><?php pll_e("Написать в"); ?> WhatsApp</p>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg" alt="" />
							</button>
						<?php
						}
						?>
					</div>

					<div class="foot_content">
						<div class="col_foot_content fade_in">
							<div>
								<div class="stat">11+</div>
								<div class="description_stat">
									<?php pll_e("Лет поставляем решения в сфере IT-технологий"); ?>
								</div>
							</div>
						</div>
						<div class="col_foot_content fade_in">
							<div>
								<div class="stat">50+</div>
								<div class="description_stat">
									<?php pll_e("Компаний-партнеров, известных по всему миру"); ?>
								</div>
							</div>
						</div>
						<div class="col_foot_content fade_in">
							<div>
								<div class="stat">70+</div>
								<div class="description_stat">
									<?php pll_e("Довольных и постоянных клиентов по всему миру"); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col video_col">
					<video
						class="video_background fade_in"
						poster="<?php echo get_template_directory_uri(); ?>/assets/video/form_section_BG.webp"
						muted=""
						loop=""
						playsinline=""
						preload="none"
						data-autoplay="delay">
						<!-- десктоп -->
						<source
							src="<?php echo get_template_directory_uri(); ?>/assets/video/form_section_BG.mp4"
							type="video/mp4"
							media="(min-width: 1001px)" />
						<!-- мобильный -->
						<source
							src="<?php echo get_template_directory_uri(); ?>/assets/video/mobile/form_section_BG.mp4"
							type="video/mp4"
							media="(max-width: 1000px)" />
					</video>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_sidebar();
get_footer();
