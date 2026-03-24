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
              <?php the_title(); ?>
            </h1>
            <div class="about-content__text">
              <?php the_content(); ?>
            </div>
          </div>
          <div class="about-content__right">
            <?php if ($photos = carbon_get_the_post_meta('photos')): ?>
            <div class="about-content__photos">
              <?php foreach ($photos as $photo): ?>
                <div class="about-content__photo">
                  <?php echo wp_get_attachment_image($photo, 'medium-crop'); ?>
                </div>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>
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