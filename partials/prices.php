<?php if ($prices = $args['fields']['prices']): ?>
  <div class="prices">
    <div class="prices-list">
      <?php foreach ($prices as $item): ?>
        <div class="prices-item">
          <div class="prices-item__price">
            <div class="prices-item__price-val">
              <?php echo $item['price']; ?>
            </div>
            <div class="prices-item__price-cur">
              ₽
            </div>
          </div>
          <div class="prices-item__name">
            <?php echo $item['name']; ?>
          </div>
          <div class="prices-item__title">
            <?php echo nl2br($item['title']); ?>
          </div>
          <div class="prices-item__desc">
            <?php echo nl2br($item['desc']); ?>
          </div>
          <div class="prices-item__order">
            <button type="submit" class="btn-more" data-callback-button>
              <span class="btn-more__inner">
                <div class="btn-more__text">
                  Записаться
                </div>
              </span>
            </button>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="prices__order">
      <button type="button" class="btn-primary" data-callback-button>Записаться на занятие</button>
    </div>
  </div>
<?php endif; ?>