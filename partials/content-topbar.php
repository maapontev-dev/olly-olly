<?php
$announcement = get_field('ab_announcement');
$location     = get_field('ab_location');
$phone        = get_field('ab_phone');

if (!empty($announcement) || !empty($location) || !empty($phone)) :
?>
  <section class="c-topbar">
    <div class="o-container">
      <div class="o-grid o-grid--between">
        <?php if (!empty($announcement)) : ?>
          <div class="c-topbar__announcement">
            <?php echo $announcement; ?>
          </div>
        <?php endif;
        if (!empty($location) || !empty($phone)) : ?>
          <div class="c-topbar__ctas">
            <?php if (!empty($location)) :
              $title  = $location['title'];
              $url    = esc_url($location['url']);
              $target = !empty($location['target']) ?: '_self';
            ?>
              <a href="<?php echo $url; ?>" class="c-btn c-btn--icon" target="<?php echo $target; ?>">
                <i class="c-icon c-icon--location" aria-label="Location icon"></i>
                <span><?php echo $title; ?></span>
              </a>
            <?php endif; ?>
            <?php if (!empty($phone)) :
              $title  = $phone['title'];
              $url    = esc_url($phone['url']);
              $target = !empty($phone['target']) ?: '_self';
            ?>
              <a href="<?php echo $url; ?>" class="c-btn c-btn--icon c-btn--secondary" target="<?php echo $target; ?>">
                <i class="c-icon c-icon--phone" aria-label="Phone icon"></i>
                <span><?php echo $title; ?></span>
              </a>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php endif; ?>