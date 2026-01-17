<?php
$image   = get_field('hb_image');
$content = get_field('hb_content');
$visit   = get_field('hb_visit');
$call    = get_field('hb_call');
?>
<!-- Hero component START -->
<section class="c-hero">
  <?php if (!empty($image)) {
    formatImage($image, 'c-hero__image');
  }
  if (!empty($content) || !empty($visit) || !empty($call)) : ?>
    <div class="o-container">
      <div class="c-hero__wrapper">
        <?php if (!empty($content)) : ?>
          <div class="c-hero__wysiwyg">
            <?php echo $content; ?>
          </div>
        <?php endif;
        if (!empty($visit) || !empty($call)) : ?>
          <div class="c-hero__ctas">
            <?php if (!empty($visit)) :
              $title  = $visit['title'];
              $url    = $visit['url'];
              $target = !empty($visit['target']) ?: '_self';
            ?>
              <a href="<?php echo $url; ?>" class="c-btn c-btn--primary" id="form-js" target="<?php echo $target; ?>">
                <span><?php echo $title; ?></span>
              </a>
            <?php endif;
            if (!empty($call)) :
              $title  = $call['title'];
              $url    = $call['url'];
              $target = !empty($call['target']) ?: '_self';
            ?>
              <a href="<?php echo $url; ?>" class="c-btn c-btn--white" target="<?php echo $target; ?>">
                <span><?php echo $title; ?></span>
              </a>
            <?php endif; ?>
          </div>
        <?php endif; ?>
        <!-- Hero component END -->

        <!-- yelp subcomponent START -->
        <section class="c-yelp">
          <div class="c-yelp__wrapper">
            <div class="c-yelp__icon">
              <i class="c-icon c-icon--yelp"></i>
            </div>
            <div class="c-yelp__content">
              <!-- YELP top row START -->
              <div class="c-yelp__stars">
                <ul class="c-yelp__list">
                  <li class="c-yelp__item"><i class="c-icon c-icon--star"></i></li>
                  <li class="c-yelp__item"><i class="c-icon c-icon--star"></i></li>
                  <li class="c-yelp__item"><i class="c-icon c-icon--star"></i></li>
                  <li class="c-yelp__item"><i class="c-icon c-icon--star"></i></li>
                  <li class="c-yelp__item"><i class="c-icon c-icon--star"></i></li>
                </ul>
                <span class="c-yelp__score">4.95/5.00</span>
              </div>
              <!-- YELP top row END -->
              <div class="c-yelp__text">
                <span>Over 14.5k happy customers on <a href="https://www.yelp.com/" target="_blank">Yelp</a></span>
              </div>
            </div>
          </div>
        </section>
        <!-- yelp subcomponent END -->
      </div>
    </div>
  <?php endif; ?>
</section>