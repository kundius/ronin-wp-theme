<section class="footer">
  <div class="container">
    <div class="footer-primary">
      <div class="footer-primary__about">
        <a href="/" class="footer-primary__logo"></a>

        <div class="footer-primary__address">
          <?php echo carbon_get_theme_option('crb_theme_address'); ?>
        </div>
      </div>

      <div class="footer-primary__contacts">
        <div class="footer-primary__phone">
          <div class="footer-primary__phone-ico">
            <span class="icon icon-phone"></span>
          </div>
          <div class="footer-primary__phone-val">
            <?php echo carbon_get_theme_option('crb_theme_phone_number'); ?>
          </div>
        </div>

        <div class="footer-primary__messengers">
          <?php if ($crb_theme_telegram = carbon_get_theme_option('crb_theme_telegram')): ?>
            <a href="<?php echo esc_attr($crb_theme_telegram); ?>" class="footer-primary__telegram">
              <span class="footer-primary__telegram-ico">
                <span class="icon icon-telegram"></span>
              </span>
              <span class="footer-primary__telegram-val">
                Telegram
              </span>
            </a>
          <?php endif; ?>

          <?php if ($crb_theme_telegram = carbon_get_theme_option('crb_theme_max')): ?>
            <a href="<?php echo esc_attr($crb_theme_telegram); ?>" class="footer-primary__max">
              <span class="footer-primary__max-ico">
                <span class="icon icon-max"></span>
              </span>
              <span class="footer-primary__max-val">
                MAX
              </span>
            </a>
          <?php endif; ?>
        </div>
      </div>

      <div class="footer-primary__menu">
        <?php wp_nav_menu([
          'menu' => 'Меню в подвале',
          'container' => null,
          'menu_class' => 'menu-footer',
        ]); ?>
      </div>

      <div class="footer-primary__divider-1"></div>

      <?php if ($footer_widget = carbon_get_theme_option('crb_footer_widget')): ?>
        <div class="footer-primary__vk-widget">
          <?php echo $footer_widget; ?>
        </div>
      <?php endif; ?>

      <div class="footer-primary__fs">
        <a href="#" class="footer-primary__fs-logo"></a>
      </div>

      <div class="footer-primary__ending">
        <div class="footer-primary__links">
          <?php
          $privacy_policy = array_first(carbon_get_theme_option('crb_theme_privacy_policy_page'));
          $user_agreement = array_first(carbon_get_theme_option('crb_theme_user_agreement_page'));
          ?>
          <?php if ($privacy_policy_id = $privacy_policy['id']): ?>
            <a href="<?php the_permalink($privacy_policy_id); ?>"><?php echo get_the_title($privacy_policy_id); ?></a>
          <?php endif; ?>
          <?php if ($user_agreement_id = $user_agreement['id']): ?>
            <a href="<?php the_permalink($user_agreement_id); ?>"><?php echo get_the_title($user_agreement_id); ?></a>
          <?php endif; ?>
        </div>

        <div class="footer-primary__no-oferta">
          <?php echo carbon_get_theme_option('crb_footer_no_oferta'); ?>
        </div>
      </div>
    </div>

    <div class="footer-secondary">
      <div class="footer-secondary__copyright">
        <?php echo nl2br(carbon_get_theme_option('crb_footer_copyright')); ?>
        <?php echo carbon_get_theme_option('crb_footer_counters'); ?>
      </div>
      <?php
      $sitemap = array_first(carbon_get_theme_option('crb_theme_sitemap_page'));
      ?>
      <?php if ($sitemap_id = $sitemap['id']): ?>
        <a href="<?php the_permalink($sitemap_id); ?>" class="footer-secondary__sitemap"><?php echo get_the_title($sitemap_id); ?></a>
      <?php endif; ?>
      <a href="https://domenart-studio.ru/" class="footer-secondary__creator" target="_blank">
        <img src="<?php bloginfo('template_url'); ?>/assets/creator.png" alt="creator" width="138" height="30" />
      </a>
    </div>
  </div>
</section>

<div id="modal-callback" aria-hidden="true" class="modal">
  <div class="modal__overlay" tabindex="-1" data-modal-close>
    <div class="modal__container modal__container--default" role="dialog" aria-modal="true">

      <div class="modal__dialog">
        <button class="modal__close" aria-label="Закрыть" data-modal-close></button>

        <div class="modal__title">Заказать звонок</div>

        <form
          action="<?php echo admin_url('admin-ajax.php'); ?>"
          class="modal-form"
          data-feedback-form
          data-feedback-form-goal=""
          data-feedback-form-action="feedback_form">
          <input type="hidden" name="submitted" value="">
          <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('feedback-nonce'); ?>">
          <input type="hidden" name="page" value="<?php echo esc_html(get_self_link()); ?>">
          <input type="hidden" name="subject" value="Заказать звонок">

          <div class="modal-form__field">
            <label class="input-field">
              <span class="input-field__label">Ваш номер телефона<span>*</span></span>
              <input class="input-field__input" type="text" name="phone" value="" data-maska="+ 7 (###) - ### - ## - ##" placeholder="+ 7 (___)  - ___ - __ - __" required>
            </label>
          </div>

          <div class="modal-form__errors" data-feedback-form-errors></div>

          <div class="modal-form__submit">
            <button type="submit" class="modal-form__submit-button">
              Отправить сообщение
            </button>
          </div>

          <div class="modal-form__rules">
            Нажимая «Отправить», вы подтверждаете, что ознакомились с <a href="/privacy-policy/">Политикой конфиденциальности</a> и даете согласие на <a href="/user-agreement/">Обработку персональных данных</a>
          </div>

          <div class="modal-form-success">
            <div class="modal-form-success__title">
              Сообщение успешно отправлено
            </div>
            <div class="modal-form-success__desc">
              Мы свяжемся с вами в ближайшее время
            </div>
            <button type="button" class="modal-form-success__close" data-feedback-form-reset>Закрыть</button>
          </div>
        </form>

      </div>

    </div>
  </div>
</div>

<?php wp_footer(); ?>