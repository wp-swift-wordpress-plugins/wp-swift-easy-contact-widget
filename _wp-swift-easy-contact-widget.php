<?php $widget_id = "widget_" . $args["widget_id"]; ?>
<article class="widget widget_nav_menu <?php echo $widget_id; ?>">
	<?php if ( get_field('widget_header', $widget_id) ) : ?>
		<h6><?php echo get_field('widget_header', $widget_id); ?></h6>
	<?php endif; ?>
</article>