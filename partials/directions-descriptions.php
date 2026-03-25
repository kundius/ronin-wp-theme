<?php if ($descriptions = $args['fields']['descriptions']): ?>
<div class="directions-descriptions">
  <div class="directions-descriptions__bg"></div>
  <div class="directions-descriptions__layout">
    <div class="directions-descriptions__left">
      <div class="directions-description-left">
        <div class="directions-description-left__title">
          <?php echo nl2br($descriptions[0]['title']); ?>
        </div>
        <div class="directions-description-left__content">
          <?php echo $descriptions[0]['content']; ?>
        </div>
      </div>
    </div>
    <div class="directions-descriptions__right">
      <div class="directions-description-right">
        <div class="directions-description-right__title">
          <?php echo nl2br($descriptions[0]['title']); ?>
        </div>
        <div class="directions-description-right__content">
          <?php echo $descriptions[0]['content']; ?>
        </div>
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