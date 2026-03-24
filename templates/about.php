<?php
/*
Template Name: О клубе
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

    <section class="about-intro">
      <div class="container">
        <div class="about-intro-content">
          <?php if ($intro_title = carbon_get_the_post_meta('intro_title')): ?>
            <div class="about-intro-content__title">
              <?php echo nl2br($intro_title); ?>
            </div>
          <?php endif; ?>
          <div class="about-intro-content__desc">
              <?php if ($intro_desc = carbon_get_the_post_meta('intro_desc')): ?>
              <?php echo nl2br($intro_desc); ?>
              <?php endif; ?>
          </div>
          <?php if ($intro_slogan = carbon_get_the_post_meta('intro_slogan')): ?>
            <div class="about-intro-content__slogan">
              <?php echo nl2br($intro_slogan); ?>
            </div>
          <?php endif; ?>
          <?php if ($intro_ideology = carbon_get_the_post_meta('intro_ideology')): ?>
            <div class="about-intro-content__ideology">
              <?php echo nl2br($intro_ideology); ?>
            </div>
          <?php endif; ?>
          <?php if ($intro_vartical = carbon_get_the_post_meta('intro_vartical')): ?>
            <div class="about-intro-content__vartical">
              <?php echo $intro_vartical; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <?php if ($intro_bg_image = carbon_get_the_post_meta('intro_bg_image')): ?>
        <div class="about-intro__bg-image">
          <img src="<?php echo esc_attr(wp_get_attachment_url($intro_bg_image)); ?>" alt="">
        </div>
      <?php endif; ?>
    </section>

    <section class="about-content">
      <div class="container">
        <div class="about-content__layout">
          <div class="about-content__left">
            <h1 class="about-content__title">
              <?php if ($extended_title = carbon_get_the_post_meta('extended_title')): ?>
              <?php echo nl2br($extended_title); ?>
              <?php else: ?>
              <?php the_title(); ?>
              <?php endif; ?>
            </h1>
            <div class="about-content__text">
              <?php the_content(); ?>
            </div>
          </div>
          <div class="about-content__right">
            <?php if ($photos = carbon_get_the_post_meta('photos')): ?>
            <div class="about-content__photos">
              <?php foreach ($photos as $photo): ?>
              <a class="about-content__photo" href="<?php echo esc_attr(wp_get_attachment_url($photo)); ?>" data-fslightbox="about">
                <?php echo wp_get_attachment_image($photo, 'medium-wide-crop'); ?>
              </a>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <section class="coaches">
      <div class="container">
        <div class="coaches__main">
          <?php if ($coaches_title = carbon_get_the_post_meta('coaches_title')): ?>
          <div class="coaches__title">
            <?php echo nl2br($coaches_title); ?>
          </div>
          <?php endif; ?>
          <?php if ($coaches_desc = carbon_get_the_post_meta('coaches_desc')): ?>
          <div class="coaches__desc">
            <?php echo nl2br($coaches_desc); ?>
          </div>
          <?php endif; ?>
          <?php if ($coaches_list = carbon_get_the_post_meta('coaches_list')): ?>
            <div class="coaches__list">
              <?php foreach ($coaches_list as $item): ?>
                <div class="coaches-item">
                  <?php if ($photo = $item['photo']): ?>
                  <div class="coaches-item__photo">
                    <?php echo wp_get_attachment_image($photo, 'full'); ?>
                  </div>
                  <?php endif; ?>
                  <?php if ($name = $item['name']): ?>
                  <div class="coaches-item__name">
                    <?php echo nl2br($name); ?>
                  </div>
                  <?php endif; ?>
                  <?php if ($desc = $item['desc']): ?>
                  <div class="coaches-item__desc">
                    <?php echo nl2br($desc); ?>
                  </div>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <section class="about-info">
      <div class="container">
        <div class="about-info__layout">
          <div class="about-info__left">
            <div class="about-registration">
              <?php if ($registration_title = carbon_get_the_post_meta('registration_title')): ?>
              <div class="about-registration__title">
                <?php echo nl2br($registration_title); ?>
              </div>
              <?php endif; ?>
              <?php if ($faq_list = carbon_get_the_post_meta('faq_list')): ?>
              <div class="about-registration__rows">
                <?php foreach ($registration_list as $item): ?>
                <div class="about-registration__row">
                  <?php echo nl2br($item['text']); ?>
                </div>
                <?php endforeach; ?>
              </div>
              <?php endif; ?>
              <div class="about-registration__button">
                <button type="button" class="btn-primary" data-callback-button>
                  Записаться на занятие
                </button>
              </div>
            </div>
          </div>
          <div class="about-info__right">
            <div class="about-faq">
              <?php if ($faq_title = carbon_get_the_post_meta('faq_title')): ?>
              <div class="about-faq__title">
                <?php echo nl2br($faq_title); ?>
              </div>
              <?php endif; ?>
              <?php if ($faq_list = carbon_get_the_post_meta('faq_list')): ?>
              <div class="about-faq__rows">
                <?php foreach ($faq_list as $item): ?>
                <details class="about-faq__accordion">
                  <summary class="about-faq__question">
                    <?php echo nl2br($item['question']); ?>
                  </summary>
                  <div class="about-faq__answer">
                    <?php echo nl2br($item['answer']); ?>
                  </div>
                </details>
                <?php endforeach; ?>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php get_template_part('partials/activity'); ?>
    <?php get_template_part('partials/contacts'); ?>
    <?php get_template_part('partials/footer'); ?>
  </div>
</body>

</html>