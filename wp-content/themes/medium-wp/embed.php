<section class="embed">
	<div class="embed__container">
		<?php $embed = get_sub_field('embed'); ?>
		<?php $file_embed = str_replace("watch?v=","embed/",$embed);?>
	    <iframe src="<?php echo $file_embed?> "></iframe>
	</div>
	<?php $caption = get_sub_field('caption'); ?>
      
	<?php if( !empty($caption) ): ?>
		<div class="embed__caption">
			<p><?php echo $caption ?> </p>
		</div>
	<?php endif; ?>
</section>


    