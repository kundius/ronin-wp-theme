<?php
$videos = carbon_get_the_post_meta('videos');
$rutube_thumb_id = null;
if (is_array($videos) && !empty($videos)) {
  $rutube_thumb_id = extract_rutube_id($videos[0]['url']);
}
?>
<article class="activity-card">
  <figure class="activity-card__figure">
    <?php if (has_post_thumbnail()): ?>
      <?php the_post_thumbnail('medium-crop'); ?>
    <?php elseif ($rutube_thumb_id): ?>
      <img src="https://rutube.ru/api/video/<?php echo $rutube_thumb_id; ?>/thumbnail/?redirect=1" alt="">
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
    <?php foreach ($videos as $key => $video): ?>
      <?php $rutube_id = extract_rutube_id($video['url']); ?>
      <?php if ($rutube_id): ?>
        <a href="#video-<?php echo esc_attr($rutube_id); ?>" target="_blank" class="activity-card__maximize" data-fslightbox="video-report-<?php echo get_the_ID(); ?>">
          <span class="icon icon-maximize"></span>
        </a>
        <div class="hidden">
          <iframe id="video-<?php echo esc_attr($rutube_id); ?>" width="720" height="405" src="https://rutube.ru/play/embed/<?php echo esc_attr($rutube_id); ?>/" style="border: none;" allow="clipboard-write; autoplay" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
      <?php else: ?>
        <a href="<?php echo esc_attr($video); ?>" target="_blank" class="activity-card__maximize" data-fslightbox="video-report-<?php echo get_the_ID(); ?>">
          <span class="icon icon-maximize"></span>
        </a>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</article>