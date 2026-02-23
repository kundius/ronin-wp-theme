<?php
$content = get_post_field('post_content', get_the_ID());
$separator = '<!--more-->';
$noteaser = '<!--noteaser-->';
$excerpt = null;
if (strpos($content, $separator) !== false && strpos($content, $noteaser) === false) {
  $parts = explode($separator, $content);
  $excerpt = $parts[0];
  $excerpt = apply_filters('the_content', $excerpt);
}
$prev = get_previous_post(true);
$next = get_next_post(true);
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

    <div class="page-layout__body">
      <div class="container">
        <ol class="breadcrumbs" itemscope="" itemtype="https://schema.org/BreadcrumbList" aria-label="Хлебные крошки">
          <li class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
            <a class="breadcrumbs__link" itemprop="item" href="/">
              <span itemprop="name">Главная</span>
            </a>
            <meta itemprop="position" content="1">
          </li>
          <li class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
            <span class="breadcrumbs__text" itemprop="item" aria-current="page">
              <span itemprop="name"><?php the_title(); ?></span>
            </span>
            <meta itemprop="position" content="2">
          </li>
        </ol>

        <div class="news-header">
          <div class="news-header__body">
            <div class="news-header__neighbors">
              <?php if ($prev): ?>
                <a href="<?php echo get_permalink($prev); ?>" class="news-header__neighbor">
                  <span class="icon icon-arrow-left"></span>
                </a>
              <?php endif; ?>
              <?php if ($next): ?>
                <a href="<?php echo get_permalink($next); ?>" class="news-header__neighbor">
                  <span class="icon icon-arrow-right"></span>
                </a>
              <?php endif; ?>
            </div>
            <div class="news-header__date">
              <?php echo get_the_date('d.m.Y'); ?>
            </div>
            <h1 class="news-header__title">
              <?php the_title(); ?>
            </h1>
            <?php if (!empty($excerpt)): ?>
              <div class="news-header__excerpt">
                <?php echo $excerpt; ?>
              </div>
            <?php endif; ?>
          </div>
          <?php if (!empty($excerpt) && has_post_thumbnail()): ?>
            <figure class="news-header__figure">
              <?php the_post_thumbnail('medium-crop'); ?>
            </figure>
          <?php endif; ?>
        </div>

        <div class="page-content">
          <?php the_content(null, true); ?>
        </div>

        <div class="news-footer">
          <div class="news-footer__share">
          </div>
          <div class="news-footer__neighbors">
            <?php if ($prev): ?>
              <a href="<?php echo get_permalink($prev); ?>" class="btn-more">
                <div class="btn-more__inner">
                  <div class="btn-more__icon icon icon-arrow-left"></div>
                  <div class="btn-more__text">Предыдущая новость</div>
                </div>
              </a>
            <?php endif; ?>
            <?php if ($next): ?>
              <a href="<?php echo get_permalink($next); ?>" class="btn-more">
                <div class="btn-more__inner">
                  <div class="btn-more__text">Следующая новость</div>
                  <div class="btn-more__icon icon icon-arrow-right"></div>
                </div>
              </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>

    <?php get_template_part('partials/contacts'); ?>

    <?php get_template_part('partials/footer'); ?>
  </div>
</body>

</html>