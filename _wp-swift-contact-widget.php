<?php 
$widget_id = "widget_" . $args["widget_id"];
if ( get_field('address', 'option') ) :
	$address = get_field('address', 'option');
	$address = str_replace('<br />', ', ', $address);
endif;
if ( function_exists('get_phone') )  {
    $mobile_readable = get_phone('mobile');
    $mobile = get_phone('mobile', true);
	$value = '<span class="key-value phone"><span class="key">Tel: </span><span class="value"><a href="tel:'.$mobile.'">'.$mobile_readable.'</a></span></span>';
}
if( get_field('email', 'option') ) {
    $email = get_field('email', 'option');
}
?>
<article class="column column-block widget widget_nav_menu <?php echo $widget_id; ?>">
<div id="footer-contact-widget">
	<div class="">
		<h5 class="site-name"><a id="_footer-home" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo site_name(); ?></a></h5>
	</div>
	<?php if (isset($address)): ?>
		<div class="contact-method address">
			<span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span><!-- 
			 --><span class="key address">Address</span><!-- 
			 --><span class="value address"> <?php echo $address; ?></span>
		</div>
	<?php endif ?>
	<?php if (isset($mobile)): ?>
		<div class="contact-method phone">
			<span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span><!-- 
			 --><span class="key phone">Telephone</span><!-- 
			 --><span class="value phone"><a href="tel:><?php echo $mobile; ?>"><?php echo $mobile_readable; ?></a></span>
		</div>		
	<?php endif ?>

	<?php if (isset($email)): ?>
		<div class="contact-method email">
			<span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span><!-- 
			 --><span class="key email">Email</span><!-- 
			 --><span class="value email"><a href="mailto:><?php echo $email; ?>"><?php echo $email; ?></a></span>
		</div>	
	<?php endif ?>


	<?php $social_media_links = get_social_media(); ?>
	<?php if ( count($social_media_links) ) : ?>		     

	   		<?php foreach ($social_media_links as $key => $link): 
	   		?><div class="contact-method social-media">
		   		<span class="icon"><i class="fa <?php echo $link['icon']; ?>" aria-hidden="true"></i></span><span class="value email"><a href="<?php echo $link['link']; ?>"><?php echo $link['name']; ?></a></span>
	        </div><?php 
	        endforeach ?>

	<?php endif; ?>	


</div>
</article>

