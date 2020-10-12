<?php if (get_post_type() === 'news') {
  if (is_active_sidebar('widgetarea-3')) : ?>
    <div class="widgetSection ">
      <?php dynamic_sidebar('widgetarea-3'); ?>
    </div>
  <?php endif;
} else {
  if (is_active_sidebar('widgetarea-1')) : ?>
    <div class="widgetSection1 ">
      <?php dynamic_sidebar('widgetarea-1'); ?>
    </div>
  <?php endif;
    if (is_active_sidebar('widgetarea-2')) : ?>
      <div class="widgetSection2">
        <?php dynamic_sidebar('widgetarea-2'); ?>
      </div>
    <?php endif;
} ?>
<!-- .widget-area -->