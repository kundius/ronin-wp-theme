<div class="header-anchor" data-sticky-header-anchor></div>

<div class="header" data-sticky-header data-mobile-menu="closed">
  <div class="container">
    <div class="header-layout">
      <a href="/" class="header-logo"></a>

      <?php wp_nav_menu([
        'theme_location' => 'menu-main',
        'container' => null,
        'menu_class' => 'header-nav',
      ]); ?>

      <div class="header-phone">
        <div class="header-phone__number">
          <?php echo carbon_get_theme_option('crb_theme_phone_number'); ?>
        </div>
        <div class="header-phone__time">
          <?php echo carbon_get_theme_option('crb_theme_phone_time'); ?>
        </div>
      </div>

      <button type="button" class="header-callback" data-callback-button>
        Записаться
      </button>

      <button type="button" class="header-toggle" data-mobile-menu-toggle>
        <span class="icon icon-menu"></span>
        <span class="icon icon-close"></span>
      </button>
    </div>
  </div>
</div>