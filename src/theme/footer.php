



<footer>
      <div class="wrap">
        <div class="head_footer two_col">
          <div class="col logo fade_in">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_footer.webp" alt="logo" />
          </div>

          <div class="col menu_footer fade_in">
            <ul>
              <li><a href="#about">О нас</a></li>
              <li><a href="#services">Услуги</a></li>
              <li><a href="#equipment">Оборудование</a></li>
              <li><a href="#contacts">Контакты</a></li>
            </ul>
          </div>
          <div class="col buttons_inner fade_in">
            <div class="buttons_wrap">
              <button class="btn_hs white footer" data-open-popup>
                <p>Оставить заявку</p>
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_in_circle_bl.svg"
                  alt="arrow in circle"
                />
              </button>
              <button class="btn_hs transporent footer" data-open-popup>
                <p>Узнать больше</p>
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_in_circle_w.svg"
                  alt="arrow in circle"
                />
              </button>
            </div>
          </div>
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
            <a href="">Политика обработки данных</a>
          </div>
          <div class="col col_prodaction">
            <div class="wrap_prodaction">
              <a href="https://fernandes-media.com/" class="wrap_content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fernandes_logo.webp" alt="" />
                <div>
                  <div class="title">FERNANDES MEDIA</div>
                  <div class="descriptios">разработка сайта</div>
                </div>
              </a>
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
      </div>
    </footer>
    <div id="popup-overlay" class="hidden">
      <div id="popup" class="popup">
        <div class="wrap_popup">
          <button class="popoup__close" data-close-popup>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cross.svg" alt="Закрыть окно" />
          </button>
          <div class="head_popup">
            <h2>Оставьте заявку</h2>
            <p>
              Оставьте свой номер телефона, и мы свяжемся с вами как можно
              скорее.
            </p>
          </div>
          <div class="form_wrap">
            <form
              id="custom-contact-form-popup"
              class="contact-form"
              action=""
              method="post"
              enctype="multipart/form-data"
            >
			<?php wp_nonce_field('custom_contact_form_popup', 'custom_contact_form_popup_nonce'); ?>    

              <div class="fields">
                <label class="form-phone" from="your_name">
                  <input
                    id="your_name"
                    class="contact-form-input"
                    type="text"
                    name="your_name"
                    placeholder="Ваше имя"
                    required
                  />
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
                    required
                  />
                  <input
                    type="hidden"
                    name="phone_e164"
                    id="phone_e164_popUp"
                  />
                  <small
                    id="phone_error_popup"
                    class="input-hint"
                    style="display: none"
                  >
                    Введите корректный номер
                  </small>
                </label>
              </div>

              <button
                class="btn_hs leave_request mobile_full_width"
                type="submit"
              >
                <p>Оставить заявку</p>
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_diag_in_circle_W.svg"
                  alt="button"
                />
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
