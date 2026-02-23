<article class="news-card">
  <figure class="news-card__figure">
    <?php if (has_post_thumbnail()): ?>
      <?php the_post_thumbnail('medium-crop'); ?>
    <?php else: ?>
      <img src="<?php bloginfo('template_url'); ?>/assets/noimage.jpg" alt="">
    <?php endif; ?>
  </figure>
  <div class="news-card__body">
    <div class="news-card__date">
      <?php echo get_the_date('d.m.Y'); ?>
    </div>
    <div class="news-card__title">
      <?php the_title(); ?>
    </div>
    <div class="news-card__excerpt">
      <?php echo get_custom_excerpt(60); ?>
    </div>
    <div class="news-card__more">
      <a href="<?php the_permalink(); ?>" class="btn-more">
        <span class="btn-more__inner">
          <span class="btn-more__text">
            Подробнее
          </span>
          <span class="btn-more__icon icon icon-arrow-right"></span>
        </span>
      </a>
    </div>
  </div>
</article>