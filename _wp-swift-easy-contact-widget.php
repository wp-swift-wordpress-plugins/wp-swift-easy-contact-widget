<?php 
$widget_id = "widget_" . $args["widget_id"];
if ( get_field('address', 'option') ) :
	$address = get_field('address', 'option');
endif;
?>
<article class="widget widget_nav_menu <?php echo $widget_id; ?>">
<?php if (function_exists('easy_contact_widget')) {
	easy_contact_widget($widget_id);
} ?>
</article>