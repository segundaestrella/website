

<?php global $optimizer; ?>

<div id="stat_img" class="<?php if(!empty($optimizer['static_image_id']['url'])){ ?> stat_has_img<?php } ?><?php if(!empty($optimizer['static_gallery'])){ ?> stat_has_slideshow<?php } ?>">
<div class="color-overlay" ></div>
	<div class="stat_content stat_content_<?php echo $optimizer['slider_content_align']; ?>">

    	<div class="stat_content_inner">
            <div class="center">
				<div class="desc-wrapper" data-content-field="description" >
				    <p  class="title">Segunda Estrella</p>
				    <p ><strong data-shrink-original-size="86" class="description">Bright solutions for your ideas</strong></p>
				    <p ><a href="#moreau-hayden">View Our Work</a></p>
				</div>
            </div>
        </div>

	</div>
    

	<?php $statimg = $optimizer['static_image_id']; ?>
		<?php if(!empty($statimg['url'])){ ?>
            <img id="statimg_99" class="stat_bg_img" src="<?php echo esc_url($statimg['url']); ?>" alt="<?php bloginfo('name') ;?>" />
		<?php } ?>

</div>