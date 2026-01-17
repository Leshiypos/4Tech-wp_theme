<?php
$it_services_url = get_permalink(pll_get_post(118));
$office_equipmen_url = get_permalink(pll_get_post(65));
$network_equipment_url = get_permalink(pll_get_post(104));
$licensed_software_url = get_permalink(pll_get_post(84));
?>
<footer>
	<div class="wrap">
		<div class="mobile_menu">
			<ul>
				<?php
				if (is_page_template('template-equipment.php')) {
				?>
					<li><a href="<?php echo $office_equipmen_url; ?>"><?php pll_e("Оргтехника"); ?></a></li>
					<li><a href="<?php echo $licensed_software_url; ?>"><?php pll_e("ПО"); ?></a></li>
					<li><a href="<?php echo $network_equipment_url; ?>"><?php pll_e("Сетевое оборудование"); ?></a></li>
					<li><a href="<?php echo $it_services_url; ?>">IT</a></li>
				<?php
				} else {
				?>
					<li><a href="#about"><?php pll_e("О нас"); ?></a></li>
					<li><a href="#partners"><?php pll_e("Партнеры"); ?></a></li>
					<li><a href="#services"><?php pll_e("Услуги"); ?></a></li>
					<li><a href="#equipment"><?php pll_e("Оборудование"); ?></a></li>
				<?php
				}
				?>
			</ul>
		</div>

		<div class="foot_footer two_col">
			<div class="col col_info fade_in">
				<div class="wrap_content">
					<div class="text_logo">4TECH LLC</div>
					<div class="address">
						Al. Bolestawa Krzywoustego 40-870 Katowice
					</div>
				</div>
			</div>
			<div class="col col_privacy_mobile fade_in">
				<a href=""><?php pll_e("Политика обработки данных"); ?></a>
			</div>
			<div class="col fade_in flex_center desktop_visible">
				<div class="wrap_content">
					<div class="label">E-Mail</div>
					<div class="content">
						<a href="mailto: houserenov@renovation.com">houserenov@renovation.com</a>
					</div>
				</div>
			</div>
			<div class="col fade_in flex_center desktop_visible">
				<div class="wrap_content">
					<div class="label">Phone number</div>
					<div class="content">
						<a href="tel: 7121111244">(712)-11-11-244</a>
					</div>
				</div>
			</div>
			<div class="col fade_in office_address flex_center desktop_visible">
				<div class="wrap_content">
					<div class="label">Main Office</div>
					<div class="content">
						Астана, ул. Дінмұхамед Қонаев, з.12/1, ВП 51, 010000
					</div>
				</div>
			</div>

			<div class="col col_privacy fade_in">
				<ul>
					<li><a href="">Privacy</a></li>
					<li><a href="">Policy</a></li>
					<li><a href="">Terms & Conditions</a></li>
				</ul>
			</div>
		</div>

		<div class="head_footer two_col">
			<div class="col logo fade_in">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_footer.webp" alt="logo" />
			</div>

			<div class="col menu_footer fade_in">
				<ul>
					<?php
					if (is_page_template('template-equipment.php')) {
					?>
						<li><a href="<?php echo $office_equipmen_url; ?>"><?php pll_e("Оргтехника"); ?></a></li>
						<li><a href="<?php echo $licensed_software_url; ?>"><?php pll_e("Лицензионное ПО"); ?></a></li>
						<li><a href="<?php echo $network_equipment_url; ?>"><?php pll_e("Сетевое оборудование"); ?></a></li>
						<li><a href="<?php echo $it_services_url; ?>"><?php pll_e("IT-услуги"); ?></a></li>
						<li><a href="#contacts"><?php pll_e("Контакты"); ?></a></li>
					<?php
					} else {
					?>
						<li><a href="#about"><?php pll_e("О нас"); ?></a></li>
						<li><a href="#partners"><?php pll_e("Партнеры"); ?></a></li>
						<li><a href="#services"><?php pll_e("Услуги"); ?></a></li>
						<li><a href="#equipment"><?php pll_e("Оборудование"); ?></a></li>
						<li><a href="#contacts"><?php pll_e("Контакты"); ?></a></li>
					<?php
					}
					?>
				</ul>
			</div>
			<div class="col buttons_inner fade_in">
				<div class="buttons_wrap">
					<button class="btn_hs white footer" data-open-popup>
						<p><?php pll_e("Оставить заявку"); ?></p>
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_in_circle_bl.svg"
							alt="arrow in circle" />
					</button>
					<button class="btn_hs transporent footer" data-open-popup>
						<p><?php pll_e("Узнать больше"); ?></p>
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_in_circle_w.svg"
							alt="arrow in circle" />
					</button>
				</div>
			</div>
		</div>

		<div class="prodaction_block">
			<div class="wrap_prodaction">
				<a href="https://fernandes-media.com/" class="wrap_content">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/fernandes_logo.webp" alt="" />
					<div>
						<div class="title">FERNANDES MEDIA</div>
						<div class="descriptios"> <?php pll_e("разработка сайта"); ?></div>
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="whatsap_buttom hidden">
		<a href="https://wa.me/971521344198?text=Hello%2C%20I%20would%20like%20to%20get%20legal%20consultation%20about%20my%20case.%20(EN-LAWHUB)" class="widget">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/what_sapp.png" alt="">
		</a>
	</div>
</footer>

<div id="popup-overlay" class="hidden">
	<div id="popup" class="popup">
		<div class="wrap_popup">
			<button class="popoup__close" data-close-popup>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cross.svg" alt="Закрыть окно" />
			</button>
			<div class="head_popup">
				<h2><?php pll_e("Оставьте заявку"); ?></h2>
				<p>
					<?php pll_e("Оставьте свой номер телефона, и мы свяжемся с вами как можно скорее."); ?>
				</p>
			</div>
			<div class="form_wrap">
				<form
					id="custom-contact-form-popup"
					class="contact-form"
					action=""
					method="post"
					enctype="multipart/form-data">
					<?php wp_nonce_field('custom_contact_form_popup', 'custom_contact_form_popup_nonce'); ?>

					<div class="fields">
						<label class="form-phone" from="your_name">
							<input
								id="your_name"
								class="contact-form-input"
								type="text"
								name="your_name"
								placeholder="Ваше имя"
								required />
						</label>
						<label class="form-phone" from="number_visible">
							<input
								id="number_popup"
								class="contact-form-input"
								type="tel"
								name="number_visible"
								inputmode="tel"
								autocomplete="tel"
								placeholder="Ваш телефон"
								required />
							<input
								type="hidden"
								name="phone_e164"
								id="phone_e164_popUp" />
							<small
								id="phone_error_popup"
								class="input-hint"
								style="display: none">
								<?php pll_e("Введите корректный номер"); ?>
							</small>
						</label>
					</div>

					<button
						class="btn_hs leave_request mobile_full_width"
						type="submit">
						<p><?php pll_e("Оставить заявку"); ?></p>
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
							alt="button" />
					</button>
				</form>
				<div id="form-message_popup"></div>
			</div>
		</div>
	</div>
</div>
</body>
<?php wp_footer() ?>

</html>