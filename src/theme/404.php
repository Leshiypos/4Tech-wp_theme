<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package fourtech
 */

get_header();
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
					<a href="https://4tech.kz/#about" data-link-burger>О нас</a>
				</li>
				<li class="burger__list-link">
					<a href="https://4tech.kz/#services" data-link-burger>Услуги</a>
				</li>
				<li class="burger__list-link">
					<a href="https://4tech.kz/#soft" data-link-burger>Софт</a>
				</li>
				<li class="burger__list-link">
					<a href="https://4tech.kz/#equipment" data-link-burger>Оборудование</a>
				</li>
				<li class="burger__list-link">
					<a href="https://4tech.kz/#protect" data-link-burger>Кибербезопасность</a>
				</li>
				<li class="burger__list-link">
					<a href="https://4tech.kz/#outsourcing" data-link-burger>Аутсорсинг</a>
				</li>
				<li class="burger__list-link">
					<a href="https://4tech.kz/#solution" data-link-burger>Этапы</a>
				</li>
				<li class="burger__list-link">
					<a href="https://4tech.kz/#development" data-link-burger>Разработка</a>
				</li>
				<li class="burger__list-link">
					<a href="https://4tech.kz/#partners" data-link-burger>Партнеры</a>
				</li>
				<li class="burger__list-link">
					<a href="https://4tech.kz/#solutions" data-link-burger>Решения</a>
				</li>
				<li class="burger__list-link">
					<a href="https://4tech.kz/#contacts" data-link-burger>Контакты</a>
				</li>
			</ul>

			<div class="burger__button">
				<button
					class="btn_hs leave_request mobile_full_width"
					data-open-popup>
					<p>Оставить заявку</p>
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
						<li><a href="https://4tech.kz/#about">О нас</a></li>
						<li><a href="https://4tech.kz/#services">Услуги</a></li>
						<li><a href="https://4tech.kz/#soft">Софт</a></li>
						<li><a href="https://4tech.kz/#equipment">Оборудование</a></li>
						<li><a href="https://4tech.kz/#protect">Кибербезопасность</a></li>
						<li><a href="https://4tech.kz/#outsourcing">Аутсорсинг</a></li>
						<li><a href="https://4tech.kz/#solution">Этапы</a></li>
						<li><a href="https://4tech.kz/#development">Разработка</a></li>
						<li><a href="https://4tech.kz/#partners">Партнеры</a></li>
						<li><a href="https://4tech.kz/#solutions">Решения</a></li>
						<li><a href="https://4tech.kz/#contacts">Контакты</a></li>
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
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="" class="logo" />
			<button class="burger_btn" data-toggle-menu>
				<img
					src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/burger_btn.svg"
					alt="button burger" />
			</button>
		</div>
	</header>

	<!-- Секция Контактная форма -->
	<section id="contacts" class="contact_form_section">
		<div class="wrap_section">
			<div class="two_column">
				<div class="col">
					<div class="head_content">
						<h2 class="fade_in">
							Ошибка 404 <br />
							Страница не найдена
						</h2>
						<p class="description fade_in">
							Оставьте заявку, и мы подберем решения, которые повысят
							эффективность вашего бизнеса и сэкономят ресурсы за счет
							автоматизации. Все — под ключ и без лишней головной боли.
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
								<small id="phone_error" class="input-hint">Введите корректный номер</small>
								<div id="form-message"></div>
							</div>

							<button
								class="btn_hs leave_request fade_in mobile_full_width"
								type="submit">
								<p>Оставить заявку</p>
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
									Лет поставляем решения в сфере IT-технологий
								</div>
							</div>
						</div>
						<div class="col_foot_content fade_in">
							<div>
								<div class="stat">50+</div>
								<div class="description_stat">
									Компаний-партнеров, известных по всему миру
								</div>
							</div>
						</div>
						<div class="col_foot_content fade_in">
							<div>
								<div class="stat">70+</div>
								<div class="description_stat">
									Довольных и постоянных клиентов по всему миру
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
get_footer();
