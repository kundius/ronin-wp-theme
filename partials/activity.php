<?php
$activity_per_page = 10;
$news_cat = 6;
$photo_reports = new WP_Query([
  'post_type' => 'photo_report',
  'orderby' => 'date',
  'order' => 'DESC',
  'posts_per_page' => $activity_per_page,
]);
$video_reports = new WP_Query([
  'post_type' => 'video_report',
  'orderby' => 'date',
  'order' => 'DESC',
  'posts_per_page' => $activity_per_page,
]);
$news = new WP_Query([
  'post_type' => 'post',
  'cat' => $news_cat,
  'orderby' => 'date',
  'order' => 'DESC',
  'posts_per_page' => $activity_per_page,
]);
?>
<section class="activity">
  <div class="container">
    <div class="activity-tabs">
      <div class="activity-tabs__nav">
        <label class="activity-tabs__label">
          <input type="radio" name="activity-tabs" checked>
          Новости
        </label>
        <label class="activity-tabs__label">
          <input type="radio" name="activity-tabs">
          Фотоотчёты
        </label>
        <label class="activity-tabs__label">
          <input type="radio" name="activity-tabs">
          Видео
        </label>
      </div>

      <div class="activity-tabs__content">
        <?php if ($news->have_posts()): ?>
          <div class="activity-tabs__panel">
            <div class="activity-embla" data-activity-embla>
              <div class="activity-embla__viewport" data-activity-embla-viewport>
                <div class="activity-embla__container">
                  <?php while ($news->have_posts()): ?>
                    <?php $news->the_post(); ?>
                    <div class="activity-embla__slide">
                      <?php get_template_part('partials/activity-card'); ?>
                    </div>
                  <?php endwhile; ?>
                </div>
              </div>
              <div class="activity-embla__footer">
                <div class="activity-embla__controls" data-activity-embla-controls>
                  <button class="activity-embla__control" type="button" data-activity-embla-controls-prev>
                    <span class="icon icon-arrow-left"></span>
                  </button>
                  <button class="activity-embla__control" type="button" data-activity-embla-controls-next>
                    <span class="icon icon-arrow-right"></span>
                  </button>
                </div>
                <?php if ($news->found_posts > $activity_per_page): ?>
                  <a href="<?php echo get_term_link($news_cat); ?>" class="btn-more">
                    <span class="btn-more__inner">
                      <span class="btn-more__text">Смотреть все</span>
                      <span class="btn-more__icon icon icon-arrow-right"></span>
                    </span>
                  </a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        <?php if ($photo_reports->have_posts()): ?>
          <div class="activity-tabs__panel">
            <div class="activity-embla" data-activity-embla>
              <div class="activity-embla__viewport" data-activity-embla-viewport>
                <div class="activity-embla__container">
                  <?php while ($photo_reports->have_posts()): ?>
                    <?php $photo_reports->the_post(); ?>
                    <div class="activity-embla__slide">
                      <?php get_template_part('partials/photo-report-card'); ?>
                    </div>
                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
                </div>
              </div>
              <div class="activity-embla__footer">
                <div class="activity-embla__controls" data-activity-embla-controls>
                  <button class="activity-embla__control" type="button" data-activity-embla-controls-prev>
                    <span class="icon icon-arrow-left"></span>
                  </button>
                  <button class="activity-embla__control" type="button" data-activity-embla-controls-next>
                    <span class="icon icon-arrow-right"></span>
                  </button>
                </div>
                <?php if ($photo_reports->found_posts > $activity_per_page): ?>
                  <a href="/photo_report" class="btn-more">
                    <span class="btn-more__inner">
                      <span class="btn-more__text">Смотреть все</span>
                      <span class="btn-more__icon icon icon-arrow-right"></span>
                    </span>
                  </a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        <?php if ($video_reports->have_posts()): ?>
          <div class="activity-tabs__panel">
            <div class="activity-embla" data-activity-embla>
              <div class="activity-embla__viewport" data-activity-embla-viewport>
                <div class="activity-embla__container">
                  <?php while ($video_reports->have_posts()): ?>
                    <?php $video_reports->the_post(); ?>
                    <div class="activity-embla__slide">
                      <?php get_template_part('partials/video-report-card'); ?>
                    </div>
                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
                </div>
              </div>
              <div class="activity-embla__footer">
                <div class="activity-embla__controls" data-activity-embla-controls>
                  <button class="activity-embla__control" type="button" data-activity-embla-controls-prev>
                    <span class="icon icon-arrow-left"></span>
                  </button>
                  <button class="activity-embla__control" type="button" data-activity-embla-controls-next>
                    <span class="icon icon-arrow-right"></span>
                  </button>
                </div>
                <?php if ($video_reports->found_posts > $activity_per_page): ?>
                  <a href="/video_report" class="btn-more">
                    <span class="btn-more__inner">
                      <span class="btn-more__text">Смотреть все</span>
                      <span class="btn-more__icon icon icon-arrow-right"></span>
                    </span>
                  </a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
</section>