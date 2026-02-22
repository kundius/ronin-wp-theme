<section class="contacts">
  <div class="container">
    <div class="contacts__wrapper">
      <div class="contacts__content">
        <?php if ($contacts_title = carbon_get_theme_option('crb_contacts_title')): ?>
          <div class="contacts__title">
            <?php echo nl2br($contacts_title); ?>
          </div>
        <?php endif; ?>
        <?php if ($contacts_list = carbon_get_theme_option('crb_contacts_list')): ?>
          <div class="contacts__list">
            <?php foreach ($contacts_list as $item): ?>
              <div class="contacts__row">
                <div class="contacts__row-title">
                  <?php echo nl2br($item['title']); ?>
                </div>
                <div class="contacts__row-desc">
                  <?php echo nl2br($item['desc']); ?>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
      <?php if ($contacts_map = carbon_get_theme_option('crb_contacts_map')): ?>
        <figure class="contacts__map">
          <?php echo $contacts_map; ?>
        </figure>
      <?php endif; ?>
    </div>
  </div>
</section>