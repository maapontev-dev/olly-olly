<section class="c-menu">
  <?php get_template_part('partials/content', 'topbar'); ?>
  <div class="o-container">
    <nav class="c-menu__wrapper">
      <a href="<?php bloginfo('wpurl'); ?>" class="c-menu__logo">
        <img src=" <?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="<?php bloginfo('name'); ?>">
      </a>
      <?php
      $MenuArgs = array(
        'menu'            => "main-menu",
        'menu_class'      => "c-menu__container",
        'theme_location'  => "main-menu",
        'container'       => "",
      );

      wp_nav_menu($MenuArgs);
      ?>
    </nav>
  </div>
</section>