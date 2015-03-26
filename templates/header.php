<?php use Roots\Sage\Nav\NavWalker; ?>

<div class="contain-to-grid">
  <nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
      <li class="name">
        <h1> <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
      </li>
      <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
      <li class="toggle-topbar menu-icon"><a href="#"><span><?= __('Toggle navigation', 'sage'); ?></span></a></li>
    </ul>

    <section class="top-bar-section">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new NavWalker(), 'menu_class' => 'right']);
      endif;
      ?>
    </section>
  </nav>
</div> <!-- contain-to-grid -->
