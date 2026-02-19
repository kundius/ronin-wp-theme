<?php
$photos = carbon_get_the_post_meta('photos');
?>
<article class="activity-card">
  <figure class="activity-card__figure">
    <?php if (has_post_thumbnail()): ?>
      <?php the_post_thumbnail('medium-crop'); ?>
    <?php elseif ($photos): ?>
      <?php echo wp_get_attachment_image($photos[0], 'medium-crop'); ?>
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
  <div class="activity-card__photos">
    <?php foreach ($photos as $item): ?>
      <a href="<?php echo esc_attr(wp_get_attachment_url($item)); ?>" class="activity-card__maximize" data-fslightbox="photo-report-<?php echo get_the_ID(); ?>">
        <span class="icon icon-maximize"></span>
      </a>
    <?php endforeach; ?>
  </div>
</article>