<section class="about-info">
  <div class="container">
    <div class="about-info__layout">
      <div class="about-info__left">
        <div class="about-registration">
          <?php if ($registration_title = carbon_get_theme_option('registration_title')): ?>
          <div class="about-registration__title">
            <?php echo nl2br($registration_title); ?>
          </div>
          <?php endif; ?>
          <?php if ($registration_list = carbon_get_theme_option('registration_list')): ?>
          <div class="about-registration__rows">
            <?php foreach ($registration_list as $item): ?>
            <div class="about-registration__row">
              <?php echo nl2br($item['text']); ?>
            </div>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
          <div class="about-registration__button">
            <button type="button" class="btn-primary" data-callback-button>
              Записаться на занятие
            </button>
          </div>
        </div>
      </div>
      <div class="about-info__right">
        <div class="about-faq">
          <?php if ($faq_title = carbon_get_theme_option('faq_title')): ?>
          <div class="about-faq__title">
            <?php echo nl2br($faq_title); ?>
          </div>
          <?php endif; ?>
          <?php if ($faq_list = carbon_get_theme_option('faq_list')): ?>
          <div class="about-faq__rows">
            <?php foreach ($faq_list as $item): ?>
            <details class="about-faq__accordion">
              <summary class="about-faq__question">
                <?php echo nl2br($item['question']); ?>
              </summary>
              <div class="about-faq__answer">
                <?php echo nl2br($item['answer']); ?>
              </div>
            </details>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>