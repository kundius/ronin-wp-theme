<?php
/*
Template Name: Главная
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/WebSite">

<head>
  <?php get_template_part('partials/head'); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <div class="page-layout">
    <?php get_template_part('partials/header'); ?>

    <section class="intro">
      <div class="container">
        <div class="intro-content">
          <?php if ($intro_title = carbon_get_the_post_meta('intro_title')): ?>
            <div class="intro-content__title">
              <?php echo nl2br($intro_title); ?>
            </div>
          <?php endif; ?>
          <div class="intro-content__desc">
              <?php if ($intro_desc = carbon_get_the_post_meta('intro_desc')): ?>
              <?php echo nl2br($intro_desc); ?>
              <?php endif; ?>
          </div>
          <?php if ($intro_slogan = carbon_get_the_post_meta('intro_slogan')): ?>
            <div class="intro-content__slogan">
              <?php echo $intro_slogan; ?>
            </div>
          <?php endif; ?>
          <?php if ($intro_vartical = carbon_get_the_post_meta('intro_vartical')): ?>
            <div class="intro-content__vartical">
              <?php echo $intro_vartical; ?>
            </div>
          <?php endif; ?>
          <?php if ($intro_advantages = carbon_get_the_post_meta('intro_advantages')): ?>
            <div class="intro__advantages">
              <div class="advantages-list">
                <?php foreach ($intro_advantages as $item): ?>
                  <div class="advantages-list__item">
                    <?php echo nl2br($item['content']); ?>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <?php if ($intro_bg_image = carbon_get_the_post_meta('intro_bg_image')): ?>
        <div class="intro__bg-image">
          <img src="<?php echo esc_attr(wp_get_attachment_url($intro_bg_image)); ?>" alt="">
        </div>
      <?php endif; ?>

      <?php if ($intro_bg_video = carbon_get_the_post_meta('intro_bg_video')): ?>
        <div class="intro__bg-video">
          <video muted playsinline autoplay loop src="<?php echo esc_attr(wp_get_attachment_url($intro_bg_video)); ?>"></video>
        </div>
      <?php endif; ?>
    </section>

    <?php if ($intro_advantages = carbon_get_the_post_meta('intro_advantages')): ?>
      <div class="mobile-advantages">
        <div class="advantages-list">
          <?php foreach ($intro_advantages as $item): ?>
            <div class="advantages-list__item">
              <?php echo nl2br($item['content']); ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endif; ?>

    <section class="schedule">
      <div class="container">
        <div class="schedule-content">
          <?php if ($schedule_title = carbon_get_the_post_meta('schedule_title')): ?>
            <div class="schedule-content__title">
              <?php echo nl2br($schedule_title); ?>
            </div>
          <?php endif; ?>
          <?php if ($schedule_desc = carbon_get_the_post_meta('schedule_desc')): ?>
            <div class="schedule-content__desc">
              <?php echo nl2br($schedule_desc); ?>
            </div>
          <?php endif; ?>
          <?php if ($schedule_button_text = carbon_get_the_post_meta('schedule_button_text')): ?>
            <a href="<?php echo esc_attr(carbon_get_the_post_meta('schedule_button_link')); ?>" class="schedule-content__button">
              <?php echo $schedule_button_text; ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="1018px" height="1018px" class="schedule__star">
        <path fill-rule="evenodd"
          d="M509.002,1017.999 C227.891,1017.999 0.002,790.111 0.002,508.999 C0.002,227.888 227.891,-0.000 509.002,-0.000 C790.114,-0.000 1017.998,227.888 1017.998,508.999 C1017.998,790.111 790.114,1017.999 509.002,1017.999 ZM510.503,130.991 C300.911,130.991 130.994,300.902 130.994,510.499 C130.994,720.097 300.911,890.007 510.503,890.007 C720.100,890.007 890.011,720.097 890.011,510.499 C890.011,300.902 720.100,130.991 510.503,130.991 ZM646.1000,544.999 L733.121,784.797 L517.1000,641.1000 L515.1000,151.1000 L593.1000,386.999 L851.561,388.135 L646.1000,544.999 ZM286.878,784.797 L372.1000,544.999 L168.439,388.135 L425.1000,386.999 L503.1000,151.1000 L501.1000,641.1000 L286.878,784.797 Z" />
      </svg>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="637px" height="659px" class="schedule__triangle">
        <path fill-rule="evenodd"
          d="M636.645,658.755 L0.583,443.627 L504.798,-0.010 L636.645,658.755 Z" />
      </svg>
    </section>

    <section class="directions">
      <div class="container">
        <div class="directions-content">
          <div class="directions-content__text">
            <?php echo carbon_get_the_post_meta('directions_content'); ?>
          </div>
        </div>
        <div class="directions-grid">
          <?php if ($directions_items = carbon_get_the_post_meta('directions_items')): ?>
            <?php foreach ($directions_items as $key => $item): ?>
              <div class="directions-grid__cell">
                <div class="directions-item">
                  <img src="<?php echo esc_attr(wp_get_attachment_url($item['image'])); ?>" alt="" class="directions-item__image">
                  <div class="directions-item__body">
                    <div class="directions-item__title">
                      <?php echo nl2br($item['title']); ?>
                    </div>
                    <?php if ($url = $item['url']): ?>
                      <a href="<?php echo esc_url($url); ?>" class="btn-more directions-item__more">
                        <span class="btn-more__inner">
                          <span class="btn-more__text">Подробнее</span>
                          <span class="btn-more__icon icon icon-arrow-right"></span>
                        </span>
                      </a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
          <div class="directions-grid__cell directions-grid__cell--form">
            <form
              class="directions-form"
              action="<?php echo admin_url('admin-ajax.php'); ?>"
              data-feedback-form
              data-feedback-form-goal=""
              data-feedback-form-action="feedback_form">
              <input type="hidden" name="submitted" value="">
              <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('feedback-nonce'); ?>">
              <input type="hidden" name="page" value="<?php echo esc_html(get_self_link()); ?>">
              <input type="hidden" name="subject" value="Записаться">

              <div class="directions-form__title">
                <?php echo nl2br(carbon_get_the_post_meta('directions_form_title')); ?>
              </div>

              <div class="directions-form__controls">
                <div class="directions-form__phone">
                  <span class="directions-form__phone-label">Ваш телефон</span>
                  <input type="text" value="" name="phone" data-maska="+7 (###) ###-##-##" placeholder="+7 (000) 000-00-00" class="directions-form__phone-input" required>
                </div>

                <button type="submit" class="directions-form__submit">Записаться</button>
              </div>

              <?php
              $privacy_policy = array_first(carbon_get_theme_option('crb_theme_privacy_policy_page'));
              $user_agreement = array_first(carbon_get_theme_option('crb_theme_user_agreement_page'));
              ?>
              <?php if ($privacy_policy && $user_agreement): ?>
                <div class="directions-form__rules">
                  Нажимая «Записаться», вы подтверждаете, что ознакомились с <a href="<?php the_permalink($privacy_policy['id']); ?>">политикой конфиденциальности</a> и даете <a href="<?php the_permalink($user_agreement['id']); ?>">согласие на обработку персональных данных</a>
                </div>
              <?php endif; ?>

              <div class="directions-form-errors" data-feedback-form-errors></div>

              <div class="directions-form-success">
                <div class="directions-form-success__title">
                  Сообщение успешно отправлено
                </div>
                <div class="directions-form-success__desc">
                  Мы свяжемся с вами в ближайшее время
                </div>
                <button type="button" class="directions-form-success__close" data-feedback-form-reset>Закрыть</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <div class="page-layout__body">
      <div class="container">
        <div class="page-content">
          <?php the_content(); ?>
        </div>
      </div>
    </div>

    <?php get_template_part('partials/contacts'); ?>
    <?php get_template_part('partials/footer'); ?>
  </div>
</body>

</html>