<?php
$coaches = new WP_Query([
  'post_type' => 'coach',
  'posts_per_page' => -1,
  'post_status' => 'publish',
  'orderby' => 'menu_order',
  'order' => 'ASC'
]);
?>
<div class="coaches">
  <div class="coaches__main">
    <?php if ($coaches_title = $args['fields']['title']): ?>
    <div class="coaches__title">
      <?php echo nl2br($coaches_title); ?>
    </div>
    <?php endif; ?>
    <?php if ($coaches_desc = $args['fields']['description']): ?>
    <div class="coaches__desc">
      <?php echo nl2br($coaches_desc); ?>
    </div>
    <?php endif; ?>
    <?php if ($coaches->have_posts()): ?>
      <div class="coaches__list">
        <?php while ($coaches->have_posts()): $coaches->the_post(); ?>
          <div class="coaches-item">
            <?php if (has_post_thumbnail()): ?>
              <div class="coaches-item__photo">
                <?php the_post_thumbnail('full'); ?>
              </div>
            <?php endif; ?>
            
            <?php if ($displayname = carbon_get_the_post_meta('displayname')): ?>
              <div class="coaches-item__name">
                <?php echo nl2br($displayname); ?>
              </div>
            <?php endif; ?>
            
            <?php if ($description = carbon_get_the_post_meta('description')): ?>
              <div class="coaches-item__desc">
                <?php echo nl2br($description); ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    <?php endif; ?>
  </div>
</div>
