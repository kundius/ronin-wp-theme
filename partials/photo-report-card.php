<?php
$gallery = carbon_get_the_post_meta('gallery');
?>
<article class="activity-card">
  <figure class="activity-card__figure">
    <?php if (has_post_thumbnail()): ?>
      <?php the_post_thumbnail('medium-crop'); ?>
    <?php elseif ($gallery): ?>
      <?php echo wp_get_attachment_image($gallery[0], 'medium-crop'); ?>
    <?php else: ?>
      <img src="" alt="">
    <?php endif; ?>
  </figure>
  <div class="activity-card__body">
    <div class="activity-card__content">
      <div class="activity-card__title">
        <?php the_title(); ?>
      </div>
      <div class="activity-card__date">
        <?php echo get_the_date('d.m.Y'); ?>
      </div>
    </div>
  </div>
  <div class="activity-card__gallery">
    <?php foreach ($gallery as $item): ?>
      <a href="<?php echo esc_attr(wp_get_attachment_url($item)); ?>" class="activity-card__maximize" data-fslightbox="gallery-<?php echo get_the_ID(); ?>">
        <span class="icon icon-maximize"></span>
      </a>
    <?php endforeach; ?>
  </div>
</article>