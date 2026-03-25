<div class="teaser-block">
  <div class="teaser-block__wrapper">
    <div class="teaser-block__content">
      <?php if ($title = $args['fields']['title']): ?>
        <div class="teaser-block__title">
          <?php echo nl2br($title); ?>
        </div>
      <?php endif; ?>
      <?php if ($desc = $args['fields']['desc']): ?>
        <div class="teaser-block__desc">
          <?php echo $desc; ?>
        </div>
      <?php endif; ?>
      <?php if ($url = $args['fields']['url']): ?>
        <div class="teaser-block__more">
          <a href="<?php echo esc_url($url); ?>" class="btn-more">
            <span class="btn-more__inner">
              <span class="btn-more__text">Подробнее</span>
              <span class="btn-more__icon icon icon-arrow-right"></span>
            </span>
          </a>
        </div>
      <?php endif; ?>
    </div>
    <?php if ($photo = $args['fields']['photo']): ?>
      <figure class="teaser-block__photo">
        <?php echo wp_get_attachment_image($photo, 'full'); ?>
      </figure>
    <?php endif; ?>
  </div>
</div>
