<?php if (get_post_type() === 'news') {
  if (is_active_sidebar('widgetarea-3')) : ?>
    <div class="widget-column l-WidgetArea">
      <?php dynamic_sidebar('widgetarea-3'); ?>
    </div>
  <?php endif;
} else {
  if (is_active_sidebar('widgetarea-1')) : ?>
    <div class="widget-column l-WidgetArea">
      <?php dynamic_sidebar('widgetarea-1'); ?>
    </div>
<?php endif;
} ?>
<!-- .widget-area -->