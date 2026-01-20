<?php
/*
 *
Template name: Home
Template post type: page
 */
?>

<?php

get_header();

// Получаем ссылки на лендинги
$it_services_url = get_permalink(pll_get_post(118));
$office_equipmen_url = get_permalink(pll_get_post(65));
$network_equipment_url = get_permalink(pll_get_post(104));
$licensed_software_url = get_permalink(pll_get_post(84));
?>

<main>
	<!-- Мобильное меню -->
	<nav id="burger-menu" class="menu_mobile">
		<div class="head_burger">
			<img class="logo_burger" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="logo" />
			<div class="lang_switcher">
				<?php
				$polylang_args = [
					"dropdown" => 1,
					"display_names_as" => "slug",
					"id" => "lang_1"
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
				<a href="#begin"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="" class="logo" /></a>
				<nav>
					<ul class="main_menu">
						<li><a href="/#about"><?php pll_e("О нас"); ?></a></li>
						<li><a href="/#services"><?php pll_e("Услуги"); ?></a></li>
						<li><a href="/#soft"><?php pll_e("Софт"); ?></a></li>
						<li><a href="/#equipment"><?php pll_e("Оборудование"); ?></a></li>
						<li><a href="/#protect"><?php pll_e("Кибербезопасность"); ?></a></li>
						<li><a href="/#outsourcing"><?php pll_e("Аутсорсинг"); ?></a></li>
						<li><a href="/#solution"><?php pll_e("Этапы"); ?></a></li>
						<li><a href="/#development"><?php pll_e("Разработка"); ?></a></li>
						<li><a href="/#partners"><?php pll_e("Партнеры"); ?></a></li>
						<li><a href="/#solutions"><?php pll_e("Решения"); ?></a></li>
						<li><a href="/#contacts"><?php pll_e("Контакты"); ?></a></li>
					</ul>
				</nav>
				<div class="wrap_btns">
					<?php /** 
					<a href="#" class="leave_req_btn" data-dropdownmenu-open>
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/burger_btn_desktop.svg"
							alt="leave a request" /></a>
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
	<section id="begin" class="hero_section">
		<div class="wrap_section">
			<video
				class="video_background"
				poster="<?php echo get_template_directory_uri(); ?>/assets/video/section_hero.webp"
				muted=""
				autoplay=""
				loop=""
				playsinline=""
				preload="auto">
				<!-- десктоп -->
				<source
					src="<?php echo get_template_directory_uri(); ?>/assets/video/section_hero.mp4"
					type="video/mp4"
					media="(min-width: 1001px)" />
				<!-- мобильный -->
				<source
					src="<?php echo get_template_directory_uri(); ?>/assets/video/mobile/section_hero.mp4"
					type="video/mp4"
					media="(max-width: 1000px)" />
			</video>

			<div class="wrap_content">
				<div class="head_content">
					<div class="pre_title">
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/check_mark.svg"
							alt="check_mark" />
						<span><?php pll_e("От оборудования до облачных серверов — все в одном месте"); ?></span>
					</div>
				</div>
				<h1>
					<?php pll_e("Комплексные решение, для цифровой трансформации вашей компании"); ?>
				</h1>
				<div class="pre_title_mob">
					<?php pll_e("От оборудования до облачных серверов"); ?>
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
						<a href="#about">

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

	<!-- Секция Ваш надежный поставщик -->
	<section id="about" class="reliable_supplier_section">
		<div class="side_decor_text">
			<div>Talent.</div>
			<div>Power.</div>
			<div>Future.</div>
		</div>
		<div class="wrap_section">
			<div class="head_content">
				<div class="title">
					<h2 class="fade_in">
						<?php pll_e("Ваш надежный поставщик<br />IT решений"); ?>
					</h2>
				</div>
				<div class="description_wrap fade_in">
					<div class="wrap">
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_section.svg"
							alt="logo-section" />
						<div class="description">
							<?php pll_e("Мы предоставляем нашему рынку все необходимые инструменты для оптимизаций и безопасности бизнес проектов: от IT оборудования до облачных серверов"); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="main_content two_col">
				<div class="left_col">
					<div class="two_col">
						<div class="left_col">
							<h3 class="fade_in"><?php pll_e("Внедряем технологии, которые работают"); ?></h3>
							<p class="fade_in">
								<?php pll_e("Мы трансформируем ваш бизнес с помощью IT-решений: автоматизируем процессы, ускоряем работу сотрудников и минимизируем ошибки."); ?>
							</p>
							<p class="fade_in">
								<?php pll_e("Это не просто цифровизация — это рост эффективности и снижение затрат с первого месяца."); ?>
							</p>
						</div>
						<div class="right_col our_mission">
							<h3 class="fade_in">
								<?php pll_e("Наша <br />миссия"); ?>
							</h3>
							<p class="fade_in">
								<?php pll_e("Повысить эффективность клиентов за счет улучшения поддерживающей IT-инфраструктуры. Гарантией качественной работы является опыт и квалификация сотрудников, а также	отличное знание всего спектра предлагаемых услуг и продукции"); ?>
							</p>
						</div>
					</div>
					<button class="btn_hs leave_request fade_in_fast" data-open-popup>
						<p><?php pll_e("Оставить заявк"); ?>у</p>
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
							alt="" />
					</button>
				</div>
				<div class="right_col fade_in">
					<video
						poster="<?php echo get_template_directory_uri(); ?>/assets/video/cube.webp"
						class="video_background"
						muted=""
						loop=""
						playsinline=""
						preload="none"
						data-autoplay="delay">
						<!-- десктоп -->
						<source
							src="<?php echo get_template_directory_uri(); ?>/assets/video/cube.mp4"
							type="video/mp4"
							media="(min-width: 1001px)" />
						<!-- мобильный -->
						<source
							src="<?php echo get_template_directory_uri(); ?>/assets/video/mobile/cube.mp4"
							type="video/mp4"
							media="(max-width: 1000px)" />
					</video>

					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_section_big.webp"
						class="logo_section"
						alt="" />
				</div>
			</div>
		</div>
	</section>

	<!-- Секция Все в одном месте -->
	<section id="services" class="overyone_here_section">
		<div class="wrap_section">
			<div class="column content">
				<h2 class="fade_in">
					<?php pll_e("Все в одном <br> месте - от ПО <br> до облачных <br> серверов"); ?>
				</h2>
				<p class="fade_in">
					<?php pll_e('У нас вы найдёте всё для построения эффективной IT-инфраструктуры: лицензионное программное обеспечение, облачные решения, серверное оборудование и техподдержку. Закрываем любые задачи — от простой поставки до комплексных проектов "под ключ"'); ?>
				</p>
				<button class="btn_hs leave_request fade_in" data-open-popup>
					<p><?php pll_e("Узнать больше"); ?></p>
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
						alt="button" />
				</button>
			</div>

			<a href="<?php echo $it_services_url; ?>" class="column card fade_in desktop">
				<img
					src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
					class="arrow_diag"
					alt="" />
				<img
					src="<?php echo get_template_directory_uri(); ?>/assets/images/bg_card_compItServices.webp"
					class="cover"
					alt="components" />
				<div class="card_content fade_in">
					<h3>
						<?php pll_e("IT <br />услуги"); ?>
					</h3>
					<p><?php pll_e("Поддержка бизнесв 24/7 в любой точке мира"); ?></p>
					<button class="btn_hs leave_request fade_in read_more" style="margin-top:20px">
						<p><?php pll_e("Подробнее"); ?></p>
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
							alt="button" />
					</button>
				</div>
			</a>

			<a href="<?php echo $office_equipmen_url; ?>" class="column card fade_in desktop">
				<img
					src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
					class="arrow_diag"
					alt="" />
				<img
					src="<?php echo get_template_directory_uri(); ?>/assets/images/bg_card_compAnfComp.webp"
					class="cover"
					alt="components" />
				<div class="card_content fade_in">
					<h3>
						<?php pll_e("Комьютеры <br />и комплектующие"); ?>
					</h3>
					<p><?php pll_e("Надёжная техника для стабильной работы вашей команды"); ?></p>
					<button class="btn_hs leave_request fade_in read_more" style="margin-top:20px">
						<p><?php pll_e("Подробнее"); ?></p>
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
							alt="button" />
					</button>
				</div>
			</a>

			<a href="<?php echo $network_equipment_url; ?>" class="column card fade_in desktop">
				<img
					src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
					class="arrow_diag"
					alt="" />
				<img
					src="<?php echo get_template_directory_uri(); ?>/assets/images/bg_card_server_equipment.webp"
					class="cover"
					alt="components" />
				<div class="card_content fade_in">
					<h3>
						<?php pll_e("Серверное <br />оборудование"); ?>
					</h3>
					<p>
						<?php pll_e("Мощные решения для бесперебойной работы вашей инфраструктуры"); ?>
					</p>
					<button class="btn_hs leave_request fade_in read_more" style="margin-top:20px">
						<p><?php pll_e("Подробнее"); ?></p>
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
							alt="button" />
					</button>
				</div>
			</a>

			<a href="<?php echo $licensed_software_url; ?>" class="column card fade_in desktop">
				<img
					src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
					class="arrow_diag"
					alt="" />
				<img
					src="<?php echo get_template_directory_uri(); ?>/assets/images/bg_card_sistema_storage.webp"
					class="cover"
					alt="components" />
				<div class="card_content fade_in">
					<h3>
						<?php pll_e("Системы хранения <br />данных"); ?>
					</h3>
					<p><?php pll_e("Безопасное и масштабируемое хранение ваших данных"); ?></p>
					<button class="btn_hs leave_request fade_in read_more" style="margin-top:20px">
						<p><?php pll_e("Подробнее"); ?></p>
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
							alt="button" />
					</button>
				</div>

			</a>
		</div>
		<!-- начало слайдера -->
		<div class="wrap_mobile">
			<div class="swiper overyone_here_slider">
				<div class="swiper-wrapper">
					<a href="<?php echo $it_services_url; ?>" class="swiper-slide card fade_in">
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
							class="arrow_diag"
							alt="" />
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/bg_card_compItServices.webp"
							class="cover"
							alt="components" />
						<div class="card_content fade_in">
							<h3>
								<?php pll_e("IT <br />услуги"); ?>
							</h3>
							<p><?php pll_e("Поддержка бизнесв 24/7 в любой точке мира"); ?></p>
							<button class="btn_hs leave_request fade_in read_more" style="margin-top:20px">
								<p><?php pll_e("Подробнее"); ?></p>
								<img
									src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
									alt="button" />
							</button>
						</div>
					</a>

					<a href="<?php echo $office_equipmen_url; ?>" class="swiper-slide card fade_in">
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
							class="arrow_diag"
							alt="" />
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/bg_card_compAnfComp.webp"
							class="cover"
							alt="components" />
						<div class="card_content fade_in">
							<h3>
								<?php pll_e("Комьютеры <br />и комплектующие"); ?>
							</h3>
							<p><?php pll_e("Надёжная техника для стабильной работы вашей команды"); ?></p>
							<button class="btn_hs leave_request fade_in read_more" style="margin-top:20px">
								<p><?php pll_e("Подробнее"); ?></p>
								<img
									src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
									alt="button" />
							</button>
						</div>
					</a>

					<a href="<?php echo $network_equipment_url; ?>" class="swiper-slide card fade_in">
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
							class="arrow_diag"
							alt="" />
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/bg_card_server_equipment.webp"
							class="cover"
							alt="components" />
						<div class="card_content fade_in">
							<h3>
								<?php pll_e("Серверное <br />оборудование"); ?>
							</h3>
							<p>
								<?php pll_e("Мощные решения для бесперебойной работы вашей инфраструктуры"); ?>
							</p>
							<button class="btn_hs leave_request fade_in read_more" style="margin-top:20px">
								<p><?php pll_e("Подробнее"); ?></p>
								<img
									src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
									alt="button" />
							</button>
						</div>
					</a>

					<a href="<?php echo $licensed_software_url; ?>" class="swiper-slide card fade_in">
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
							class="arrow_diag"
							alt="" />
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/bg_card_sistema_storage.webp"
							class="cover"
							alt="components" />
						<div class="card_content fade_in">
							<h3>
								<?php pll_e("Системы хранения <br />данных"); ?>
							</h3>
							<p><?php pll_e("Безопасное и масштабируемое хранение ваших данных"); ?></p>
							<button class="btn_hs leave_request fade_in read_more" style="margin-top:20px">
								<p><?php pll_e("Подробнее"); ?></p>
								<img
									src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
									alt="button" />
							</button>
						</div>
					</a>
				</div>
			</div>
		</div>
		<!-- Конец слайдера -->
	</section>

	<!-- Секуия Лицинзионное ПО -->
	<section id="soft" class="licensed_software_section">
		<div class="wrap_section">
			<!-- <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/licensed_software_BG-section.webp"
            alt="background"
            class="cover fade_in"
          /> -->
			<video
				class="video_background cover fade_in"
				poster="<?php echo get_template_directory_uri(); ?>/assets/video/licensed_software_section_BG.webp"
				muted=""
				loop=""
				playsinline=""
				preload="none"
				data-autoplay="delay">
				<!-- десктоп -->
				<source
					src="<?php echo get_template_directory_uri(); ?>/assets/video/licensed_software_section_BG.mp4"
					type="video/mp4"
					media="(min-width: 1001px)" />
				<!-- мобильный -->
				<source
					src="<?php echo get_template_directory_uri(); ?>/assets/video/mobile/licensed_software_section_BG.mp4"
					type="video/mp4"
					media="(max-width: 1000px)" />
			</video>

			<div class="wrap_content">
				<div class="content_top">
					<h2 class="fade_in">
						<?php pll_e("Предоставляем лицензионное ПО <br />для вашей компании"); ?>
					</h2>
					<div class="description fade_in">
						<?php pll_e("4tech является авторизированным партнером международных производителей программного обеспечения"); ?>
					</div>
					<button class="btn_hs leave_request fade_in" data-open-popup>
						<p><?php pll_e("Оставить заявку"); ?></p>
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
							alt="button" />
					</button>
				</div>
				<div class="content_bottom fade_in">
					<div class="swiper our_clients_slider">
						<div class="swiper-wrapper our_clients">
							<div class="swiper-slide">
								<div class="card_client">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/adobe.webp" alt="adobe" />
								</div>
							</div>
							<div class="swiper-slide">
								<div class="card_client">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/images/microsoft.webp"
										alt="microsoft" />
								</div>
							</div>

							<div class="swiper-slide">
								<div class="card_client">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/images/team_viewer.webp"
										alt="team_viewer" />
								</div>
							</div>

							<div class="swiper-slide">
								<div class="card_client">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/esset.webp" alt="esset" />
								</div>
							</div>

							<div class="swiper-slide">
								<div class="card_client">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/symantec.webp" alt="symantec" />
								</div>
							</div>
							<div class="swiper-slide">
								<div class="card_client">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/images/kaspersky.webp"
										alt="kaspersky" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Секция каталога -->
	<section id="equipment" class="catalog_section">
		<div class="wrap_section">
			<div class="head_content">
				<div class="title fade_in">
					<h2><?php pll_e("каталог"); ?></h2>
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_title_catalog.svg"
						alt="arrow title" />
				</div>
				<div class="description_wrap fade_in">
					<div class="wrap">
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_section.svg"
							alt="logo-section" />
						<div class="description">
							<?php pll_e("Мы предоставляем нашему рынку все необходимые инструменты для оптимизаций и безопасности бизнес проектов: от IT оборудования до облачных серверов"); ?>
						</div>
					</div>
				</div>
			</div>

			<div class="row_catalog">
				<div class="card text">
					<h3 class="fade_in"><?php pll_e("Компьютерное оборудование и ноутбуки"); ?></h3>
					<p class="fade_in">
						<?php pll_e("Надёжная техника для стабильной работы вашей команды"); ?>
					</p>
				</div>
				<div class="card parent_cl_w mobile_visible">
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/caralog_row_1_1.webp"
						alt="itam1"
						class="cover fade_in" />
				</div>
				<div class="card">
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/caralog_row_1_2.webp"
						alt="itam2"
						class="cover fade_in" />
				</div>
				<div class="card">
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/caralog_row_1_3.webp"
						alt="itam3"
						class="cover fade_in" />
				</div>
				<div class="card">
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/caralog_row_1_4.webp"
						alt="itam4"
						class="cover fade_in" />
				</div>
			</div>

			<div class="row_catalog">
				<div class="card mobile_visible">
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/caralog_row_2_1.webp"
						alt="itam1"
						class="cover fade_in" />
				</div>
				<div class="card">
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/caralog_row_2_2.webp"
						alt="itam2"
						class="cover fade_in" />
				</div>
				<div class="card">
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/caralog_row_2_3.webp"
						alt="itam3"
						class="cover fade_in" />
				</div>
				<div class="card">
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/caralog_row_2_4.webp"
						alt="itam4"
						class="cover fade_in" />
				</div>
				<div class="card text">
					<h3 class="fade_in"><?php pll_e("Серверное оборудование"); ?></h3>
					<p class="fade_in">
						<?php pll_e("Мощные решения для бесперебойной работы вашей инфраструктуры"); ?>
					</p>
				</div>
			</div>

			<div class="row_catalog">
				<div class="card text">
					<h3 class="fade_in"><?php pll_e("Системы хранения данных"); ?></h3>
					<p class="fade_in">
						<?php pll_e("Безопасное и масштабируемое хранения ваших данных"); ?>
					</p>
				</div>
				<div class="card mobile_visible">
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/caralog_row_3_1.webp"
						alt="itam1"
						class="cover fade_in" />
				</div>
				<div class="card">
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/caralog_row_3_2.webp"
						alt="itam2"
						class="cover fade_in" />
				</div>
				<div class="card">
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/caralog_row_3_3.webp"
						alt="itam3"
						class="cover fade_in" />
				</div>
				<div class="card">
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/caralog_row_3_4.webp"
						alt="itam4"
						class="cover fade_in" />
				</div>
			</div>

			<div class="row_catalog last">
				<div class="card child_cl_w mobile_visible">
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/caralog_row_4_1.webp"
						alt="itam3"
						class="cover fade_in" />
				</div>
				<div class="card child_cl_w">
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/caralog_row_4_2.webp"
						alt="itam4"
						class="cover fade_in" />
				</div>
				<div class="card text">
					<h3 class="small fade_in"><?php pll_e("Телекоммуникационное оборудование"); ?></h3>
					<p class="fade_in">
						<?php pll_e("Обеспечиваем стабильную и высокоскоростную связь для офиса, дата-центра или распределённой инфраструктуры"); ?>
					</p>
					<button class="btn_hs leave_request fade_in" data-open-popup>
						<p><?php pll_e("Смотреть больше"); ?></p>
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
							alt="button" />
					</button>
				</div>
			</div>
			<div class="mobile_btns_wrap">
				<button
					class="btn_hs leave_request mobile_full_width fade_in"
					data-open-popup>
					<p><?php pll_e("Смотреть больше"); ?></p>
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
						alt="button" />
				</button>
			</div>
		</div>
	</section>

	<!-- Секция Защита бизнеса -->
	<section id="protect" class="protect_section">
		<div class="wrap_section">
			<video
				class="video_background fade_in"
				poster="<?php echo get_template_directory_uri(); ?>/assets/video/protected_section_bg.webp"
				muted=""
				loop=""
				playsinline=""
				preload="none"
				data-autoplay="delay">
				<!-- десктоп -->
				<source
					src="<?php echo get_template_directory_uri(); ?>/assets/video/protected_section_bg.mp4"
					type="video/mp4"
					media="(min-width: 1001px)" />
				<!-- мобильный -->
				<source
					src="<?php echo get_template_directory_uri(); ?>/assets/video/mobile/protected_section_bg.mp4"
					type="video/mp4"
					media="(max-width: 1000px)" />
			</video>

			<div class="wrap_content">
				<h2 class="fade_in">
					<?php pll_e("Защищаем бизнес и данные <br />от цифровых угроз"); ?>
				</h2>
				<p class="fade_in">
					<?php pll_e("Обеспечиваем кибербезопасность на всех уровнях — от антивирусной защиты рабочих станций до комплексных систем предотвращения атак и утечек данных"); ?>
				</p>
				<button
					class="btn_hs leave_request mobile_full_width fade_in_fast"
					data-open-popup>
					<p><?php pll_e("Оставить заявку"); ?></p>
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
						alt="button" />
				</button>
			</div>
			<div class="overlay_content"></div>
		</div>
	</section>

	<!-- Секция Аутсортинг -->
	<section id="outsourcing" class="outsourcing_section">
		<div class="wrap_section">
			<div class="head_content">
				<div class="title">
					<h2 class="fade_in"><?php pll_e("IT аутсорсинг"); ?></h2>
				</div>
				<div class="description_wrap fade_in">
					<div class="wrap">
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_section.svg"
							alt="logo-section" />
						<div class="description">
							<?php pll_e("Берём на себя поддержку, обслуживание и администрирование —<br /> чтобы вы фокусировались на бизнесе, а не на сбоях."); ?>
						</div>
					</div>
				</div>
			</div>

			<div class="main_content">
				<div class="row_cont">
					<div class="col">
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/autsort_row_1_1.webp"
							class="from_descr fade_in"
							alt="outsourcing" />
						<div class="content">
							<div class="wrap min_width">
								<h3 class="fade_in">
									<?php pll_e("техническая <br />поддержка ПК"); ?>
								</h3>
								<p class="fade_in">
									<?php pll_e("Обеспечиваем бесперебойную работу рабочих мест, оперативно устраняем неполадки и обновляем системы."); ?>
								</p>
							</div>
						</div>
					</div>
					<div class="col img">
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/autsort_row_1_2.webp"
							alt="outsourcing "
							class="fade_in" />
					</div>
				</div>

				<div class="row_cont">
					<div class="col img">
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/autsort_row_2_1.webp"
							alt="outsourcing "
							class="fade_in cover_left" />
					</div>
					<div class="col">
						<div class="content">
							<div class="wrap">
								<h3 class="fade_in">
									<?php pll_e("Тех. обслуживание <br />серверного оборудования"); ?>
								</h3>
								<p class="fade_in long">
									<?php pll_e("Следим за стабильной работой серверов: мониторим, настраиваем и предотвращаем сбои до их возникновения."); ?>
								</p>
							</div>
						</div>
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/autsort_row_2_2.webp"
							class="from_descr fade_in"
							alt="outsourcing " />
					</div>
				</div>

				<div class="row_cont">
					<div class="col">
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/autsort_row_3_1.webp"
							class="from_descr fade_in"
							alt="outsourcing " />
						<div class="content">
							<div class="wrap">
								<h3 class="fade_in">
									<?php pll_e("администрирование <br />серверных приложений"); ?>
								</h3>
								<p class="fade_in long">
									<?php pll_e("Настраиваем, обновляем и сопровождаем системное ПО, чтобы ваши сервисы работали надёжно и без простоев."); ?>
								</p>
							</div>
						</div>
					</div>
					<div class="col img">
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/autsort_row_3_2.webp"
							class="fade_in cover_right"
							alt="outsourcing" />
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Секция Комплексное решение  -->
	<section id="solution" class="solution_section">
		<div class="wrap_section">
			<div class="head_content">
				<div class="title">
					<h2 class="fade_in">
						<?php pll_e("комплексное <br />решение"); ?>
					</h2>
					<div class="four_steps">
						<video
							class="video_background fade_in"
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
							<p class="number">4</p>
							<p>шага</p>
						</div>
					</div>
				</div>
				<div class="description_wrap fade_in">
					<div class="wrap">
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_section.svg"
							alt="logo-section" />
						<div class="description">
							<?php pll_e("Осуществляем решения «под ключ» для компаний. От изучения задач <br />и проблем клиента, до подбора оборудования, поставки и пусконаладки"); ?>
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
							<?php pll_e("Проводим глубокую оценку текущей IT-инфраструктуры, выявляем	технические и бизнес-проблемы, определяем зоны риска и формируем основу для цифровой трансформации."); ?>
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
									<h3 class="fade_in">полный аудит</h3>
									<p class="fade_in">
										<?php pll_e("Проводим глубокую оценку текущей IT-инфраструктуры, выявляем технические и бизнес-проблемы, определяем зоны риска и формируем основу для цифровой трансформации."); ?>
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

	<!-- Секция Разработка  -->
	<section id="development" class="development_section">
		<div class="wrap_section">
			<div class="cover_wrapper">
				<img
					src="<?php echo get_template_directory_uri(); ?>/assets/images/development_section_BG.webp"
					class="cover fade_in"
					alt="" />
			</div>

			<div class="wrap_content">
				<h2 class="fade_in">
					<?php pll_e("Разрабатываем цифровые продукты и приложения"); ?>
				</h2>
				<div class="our_stecs">
					<div class="row">
						<div class="card_stec fade_in">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cheked_icon.svg"
								alt="adobe" />
							<div class="content">
								<h3>Back-end</h3>
								<p>PHP: Laravel, lumen, Symfony, Cake PHP, Slim</p>
							</div>
						</div>

						<div class="card_stec fade_in">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cheked_icon.svg"
								alt="adobe" />
							<div class="content">
								<h3>Database</h3>
								<p>MySQL, PostgreSQL, RethinkDB, MariaDB</p>
							</div>
						</div>

						<div class="card_stec fade_in">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cheked_icon.svg"
								alt="adobe" />
							<div class="content">
								<h3>Mobile</h3>
								<p>ReactNative, Flutter Native Mobile app</p>
							</div>
						</div>

						<div class="card_stec fade_in">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cheked_icon.svg"
								alt="adobe" />
							<div class="content">
								<h3>CMS</h3>
								<p>Wordpress, WooCommerce</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="card_stec fade_in">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cheked_icon.svg"
								alt="adobe" />
							<div class="content">
								<h3>Front-end</h3>
								<p>JavaScript, CSS, React/Redux, TypeScript</p>
							</div>
						</div>

						<div class="card_stec fade_in">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cheked_icon.svg"
								alt="adobe" />
							<div class="content">
								<h3>DevOps</h3>
								<p>CI/CD Pipelines, Automatic Deployment</p>
							</div>
						</div>

						<div class="card_stec fade_in">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cheked_icon.svg"
								alt="adobe" />
							<div class="content">
								<h3>API-<?php pll_e("интеграции"); ?></h3>
								<p>PHP: Laravel, Lumen, Symfony, Cake PHP, Slim</p>
							</div>
						</div>

						<div class="card_stec fade_in">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cheked_icon.svg"
								alt="adobe" />
							<div class="content">
								<h3>UI/UX <?php pll_e("Дизайн"); ?></h3>
								<p><?php pll_e("Инструменты"); ?>: Figma, Adobe XD, Sketch</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="overlay_content"></div>
		</div>
	</section>
	<section id="partners" class="partners_cluster">
		<!-- Секция Наши партнеры -->
		<section class="partners_section">
			<div class="wrap_section">
				<h2 class="fade_in"><?php pll_e("Наши партнеры"); ?></h2>
				<div class="main_content">
					<div class="swiper partners_slider fade_in">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img
									src="<?php echo get_template_directory_uri(); ?>/assets/images/adobe.webp"
									alt=""
									class="partner_logo" />
							</div>
							<div class="swiper-slide">
								<img
									src="<?php echo get_template_directory_uri(); ?>/assets/images/microsoft.webp"
									alt=""
									class="partner_logo" />
							</div>
							<div class="swiper-slide">
								<img
									src="<?php echo get_template_directory_uri(); ?>/assets/images/team_viewer.webp"
									alt=""
									class="partner_logo" />
							</div>
							<div class="swiper-slide">
								<img
									src="<?php echo get_template_directory_uri(); ?>/assets/images/esset.webp"
									alt=""
									class="partner_logo" />
							</div>
							<div class="swiper-slide">
								<img
									src="<?php echo get_template_directory_uri(); ?>/assets/images/symantec.webp"
									alt=""
									class="partner_logo" />
							</div>
							<div class="swiper-slide">
								<img
									src="<?php echo get_template_directory_uri(); ?>/assets/images/kaspersky.webp"
									alt=""
									class="partner_logo" />
							</div>
							<div class="swiper-slide">
								<img
									src="<?php echo get_template_directory_uri(); ?>/assets/images/microsoft.webp"
									alt=""
									class="partner_logo" />
							</div>
							<div class="swiper-slide">
								<img
									src="<?php echo get_template_directory_uri(); ?>/assets/images/team_viewer.webp"
									alt=""
									class="partner_logo" />
							</div>
							<div class="swiper-slide">
								<img
									src="<?php echo get_template_directory_uri(); ?>/assets/images/esset.webp"
									alt=""
									class="partner_logo" />
							</div>
							<div class="swiper-slide">
								<img
									src="<?php echo get_template_directory_uri(); ?>/assets/images/symantec.webp"
									alt=""
									class="partner_logo" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Секция Наши Клиенты -->
		<section class="partners_section">
			<div class="wrap_section">
				<h2 class="fade_in"><?php pll_e("Наши Клиенты"); ?></h2>
				<div class="main_content">
					<div class="sliders_wrap">
						<!-- Первый слайдер -->
						<div class="swiper partners_slider fade_in">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/images/adobe.webp"
										alt=""
										class="partner_logo" />
								</div>
								<div class="swiper-slide">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/images/microsoft.webp"
										alt=""
										class="partner_logo" />
								</div>
								<div class="swiper-slide">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/images/team_viewer.webp"
										alt=""
										class="partner_logo" />
								</div>
								<div class="swiper-slide">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/images/esset.webp"
										alt=""
										class="partner_logo" />
								</div>
								<div class="swiper-slide">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/images/symantec.webp"
										alt=""
										class="partner_logo" />
								</div>
								<div class="swiper-slide">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/images/kaspersky.webp"
										alt=""
										class="partner_logo" />
								</div>
								<div class="swiper-slide">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/images/microsoft.webp"
										alt=""
										class="partner_logo" />
								</div>
								<div class="swiper-slide">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/images/team_viewer.webp"
										alt=""
										class="partner_logo" />
								</div>
								<div class="swiper-slide">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/images/esset.webp"
										alt=""
										class="partner_logo" />
								</div>
								<div class="swiper-slide">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/images/symantec.webp"
										alt=""
										class="partner_logo" />
								</div>
							</div>
						</div>
						<!-- Второй слайдер -->
						<div class="swiper partners_slider fade_in">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/images/adobe.webp"
										alt=""
										class="partner_logo" />
								</div>
								<div class="swiper-slide">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/images/microsoft.webp"
										alt=""
										class="partner_logo" />
								</div>
								<div class="swiper-slide">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/images/team_viewer.webp"
										alt=""
										class="partner_logo" />
								</div>
								<div class="swiper-slide">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/images/esset.webp"
										alt=""
										class="partner_logo" />
								</div>
								<div class="swiper-slide">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/images/symantec.webp"
										alt=""
										class="partner_logo" />
								</div>
								<div class="swiper-slide">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/images/kaspersky.webp"
										alt=""
										class="partner_logo" />
								</div>
								<div class="swiper-slide">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/images/microsoft.webp"
										alt=""
										class="partner_logo" />
								</div>
								<div class="swiper-slide">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/images/team_viewer.webp"
										alt=""
										class="partner_logo" />
								</div>
								<div class="swiper-slide">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/images/esset.webp"
										alt=""
										class="partner_logo" />
								</div>
								<div class="swiper-slide">
									<img
										src="<?php echo get_template_directory_uri(); ?>/assets/images/symantec.webp"
										alt=""
										class="partner_logo" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
	<!-- Секция ИТ Решения -->
	<section id="solutions" class="it_solutions_section">
		<div class="wrap_section">
			<video
				class="video_background fade_in"
				poster="<?php echo get_template_directory_uri(); ?>/assets/video/it_solutions.webp"
				muted=""
				loop=""
				playsinline=""
				preload="none"
				data-autoplay="delay">
				<!-- десктоп -->
				<source
					src="<?php echo get_template_directory_uri(); ?>/assets/video/it_solutions.mp4"
					type="video/mp4"
					media="(min-width: 1001px)" />
				<!-- мобильный -->
				<source
					src="<?php echo get_template_directory_uri(); ?>/assets/video/mobile/it_solutions.mp4"
					type="video/mp4"
					media="(max-width: 1000px)" />
			</video>

			<div class="wrap_content">
				<h2 class="fade_in">
					<?php pll_e("Предлагаем IT решения для разных секторов экономики"); ?>
				</h2>
				<div class="our_stecs">
					<div class="row">
						<div class="card_stec fade_in">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/it_solutions_icons_1.svg"
								alt="adobe" />
							<div class="content">
								<h3><?php pll_e("здравоохранение"); ?></h3>
							</div>
						</div>

						<div class="card_stec fade_in">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/it_solutions_icons_2.svg"
								alt="adobe" />
							<div class="content">
								<h3><?php pll_e("образование"); ?></h3>
							</div>
						</div>

						<div class="card_stec fade_in">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/it_solutions_icons_3.svg"
								alt="adobe" />
							<div class="content">
								<h3><?php pll_e("государственный сегмент"); ?></h3>
							</div>
						</div>

						<div class="card_stec fade_in">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/it_solutions_icons_4.svg"
								alt="adobe" />
							<div class="content">
								<h3><?php pll_e("медицина"); ?></h3>
							</div>
						</div>
						<div class="card_stec fade_in">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/it_solutions_icons_5.svg"
								alt="adobe" />
							<div class="content">
								<h3><?php pll_e("горнорудная промышленность"); ?></h3>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="card_stec fade_in">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/it_solutions_icons_6.svg"
								alt="adobe" />
							<div class="content">
								<h3><?php pll_e("агропромышенный комплекс"); ?></h3>
							</div>
						</div>

						<div class="card_stec fade_in">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/it_solutions_icons_7.svg"
								alt="adobe" />
							<div class="content">
								<h3><?php pll_e("жилищно-коммунальные службы"); ?></h3>
							</div>
						</div>

						<div class="card_stec fade_in">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/it_solutions_icons_8.svg"
								alt="adobe" />
							<div class="content">
								<h3><?php pll_e("сотовые операторы"); ?></h3>
							</div>
						</div>

						<div class="card_stec fade_in">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/it_solutions_icons_9.svg"
								alt="adobe" />
							<div class="content">
								<h3><?php pll_e("банковский сектор"); ?></h3>
							</div>
						</div>
						<div class="card_stec fade_in">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/it_solutions_icons_10.svg"
								alt="adobe" />
							<div class="content">
								<h3><?php pll_e("сфера услуг"); ?></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="overlay_content"></div>
		</div>
	</section>

	<!-- Секция Контактная форма -->
	<section id="contacts" class="contact_form_section">
		<div class="wrap_section">
			<div class="two_column">
				<div class="col">
					<div class="head_content">
						<h2 class="fade_in">
							<?php pll_e("введите ваш номер <br />телефона"); ?>
						</h2>
						<p class="description fade_in">
							<?php pll_e("Оставьте заявку, и мы подберем решения, которые повысят эффективность вашего бизнеса и сэкономят ресурсы за счет автоматизации. Все — под ключ и без лишней головной боли."); ?>
						</p>
					</div>
					<div class="form_wrap">
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
								<small id="phone_error" class="input-hint"><?php pll_e("Введите корректный номер"); ?></small>
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
						autoplay="autoplay"
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
