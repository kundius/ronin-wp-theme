<?php
$title_tag = 'div';
if (!empty($args['fields']['title_level'])) {
  $title_tag = 'h' . $args['fields']['title_level'];
}
?>
<div class="content-block">
  <div class="content-block__layout">
    <div class="content-block__left">
      <?php if ($title = $args['fields']['title']): ?>
      <<?php echo $title_tag; ?> class="content-block__title">
        <?php echo nl2br($title); ?>
      </<?php echo $title_tag; ?>>
      <?php endif; ?>
      <?php if ($content = $args['fields']['content']): ?>
      <div class="content-block__text">
        <?php echo $content; ?>
      </div>
      <?php endif; ?>
    </div>
    <div class="content-block__right">
      <?php if ($gallery = $args['fields']['gallery']): ?>
      <div class="content-block__photos">
        <?php foreach ($gallery as $item): ?>
        <a class="content-block__photo" href="<?php echo esc_attr(wp_get_attachment_url($item)); ?>" data-fslightbox="about">
          <?php echo wp_get_attachment_image($item, 'medium-wide-crop'); ?>
        </a>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</div>
