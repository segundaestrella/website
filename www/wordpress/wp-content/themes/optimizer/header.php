<?php 
/**
 * The Header for Optimizer
 *
 * Displays all of the <head> section and everything
 *
 * @package Optimizer
 * 
 * @since Optimizer 1.0
 */
/*OPTION DEFAULTS*/ 
global $optimizer;
$optimizer = optimizer_option_defaults();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo( 'charset' ); ?>" />	
<?php // Google Chrome Frame for IE ?>
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="profile" href="http://gmpg.org/xfn/11"/>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /> 
<?php wp_head(); ?>
<link rel='stylesheet' id='open-sans-css'  href='/wordpress/wp-content/themes/optimizer/custom.css' type='text/css' media='all' />
<script src="https://use.fontawesome.com/9460db961f.js"></script>
</head>

<body <?php body_class();?>>
<!--HEADER-->
<div class="header_wrap layer_wrapper">
	<?php get_template_part('template_parts/head','type1'); ?>
</div><!--layer_wrapper class END-->
<!-- mattia edit commented php if
 -->
	<!-- Slider START
		  -->
		<?php if (is_front_page()) { ?>
            <div id="slidera" class="layer_wrapper <?php if(!empty($optimizer['hide_mob_slide'])){ echo 'mobile_hide_slide';} ?>">
                <?php $slidertype = $optimizer['slider_type_id']; ?>
                <?php get_template_part('frontpage/slider',''.$slidertype.''); ?>
            </div> 
            
          <?php } ?> 
       <!--Slider END-->
<script type="text/javascript">
/*
	var el = document.getElementsByClassName('fadein');
	console.log(el.length)
	window.onscroll = function(){
		var el = document.getElementsByClassName('fadein');
		if(el.length == 0) return; 	
		
		var doc = document.documentElement;
		var top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
		var bottom_of_window = top + window.innerHeight;
		console.log(el[1].offsetTop,el[1].offsetHeight,bottom_of_window)
		for (var i=0;i< el.length; i++){
			var offsets = el[i].getBoundingClientRect();
			var top = offsets.top;
			var height = el[i].offsetHeight;
			var bottom_of_element = top + height;
			
			if(bottom_of_window > bottom_of_element){
				//el[i].classList.remove('fadein');
			}
		}
	}
	*/
	jQuery(document).ready(function() {
    
    /* Every time the window is scrolled ... */
    jQuery(window).scroll( function(){
        /* Check the location of each desired element */
        jQuery('.fadein').each( function(i){
            var bottom_of_object = jQuery(this).offset().top + ( jQuery(this).outerHeight() / 2 );
            var bottom_of_window = jQuery(window).scrollTop() + jQuery(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if(jQuery(this).hasClass('halt')) return;
            var el = this;
            if( bottom_of_window > bottom_of_object ){
				
                jQuery(this).addClass('faded');
                jQuery(this).addClass('halt');    
                
            }else if(bottom_of_window < jQuery(this).offset().top){
            	jQuery(this).removeClass('faded');
            	jQuery(this).addClass('halt');
            }

            setTimeout(function(){
            	jQuery(el).removeClass('halt');
            },200);
            
        }); 
    
    });
    
});
</script>

