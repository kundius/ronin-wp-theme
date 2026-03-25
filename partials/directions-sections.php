<?php if ($sections = $args['fields']['sections']): ?>
<div class="directions-sections">
  <?php foreach ($sections as $item): ?>
  <div class="directions-section">
    <div class="directions-section__image">
      <?php echo wp_get_attachment_image($item['photo'], 'full'); ?>
    </div>
    <a href="<?php echo esc_attr($item['link']); ?>" class="directions-section__title">
      <?php echo nl2br($item['title']); ?>
    </a>
  </div>
  <?php endforeach; ?>
</div>
<?php endif; ?>