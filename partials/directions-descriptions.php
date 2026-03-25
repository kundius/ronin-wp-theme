<?php if ($descriptions = $args['fields']['descriptions']): ?>
<div class="directions-descriptions">
  <div class="directions-descriptions__bg"></div>
  <div class="directions-descriptions__layout">
    <div class="directions-descriptions__left">
      <div class="directions-descriptions__title">
        <?php echo nl2br($descriptions[0]['title']); ?>
      </div>
      <div class="directions-descriptions__content">
        <?php echo $descriptions[0]['content']; ?>
      </div>
    </div>
    <div class="directions-descriptions__right">
      <div class="directions-descriptions__title">
        <?php echo nl2br($descriptions[0]['title']); ?>
      </div>
      <div class="directions-descriptions__content">
        <?php echo $descriptions[0]['content']; ?>
      </div>
    </div>
  </div>
  <div class="directions-descriptions__button">
    <button type="button" class="btn-primary" data-callback-button>
      Записаться на занятие
    </button>
  </div>
</div>
<?php endif; ?>