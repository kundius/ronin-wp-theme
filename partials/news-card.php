<article class="activity-card">
  <figure class="activity-card__figure">
    <?php if (has_post_thumbnail()): ?>
      <?php the_post_thumbnail('medium-crop'); ?>
    <?php else: ?>
      <img src="" alt="">
    <?php endif; ?>
  </figure>
  <div class="activity-card__body">
    <div class="activity-card__content">
      <a href="<?php the_permalink(); ?>" class="activity-card__title">
        <?php the_title(); ?>
      </a>
      <div class="activity-card__date">
        <?php echo get_the_date('d.m.Y'); ?>
      </div>
    </div>
  </div>
</article>