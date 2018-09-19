<section class="embed">
	<div class="embed__container">
	<iframe src="<?php the_sub_field('embed'); ?>"></iframe>
</div>
	<?php $caption = get_sub_field('caption'); ?>
      
	<?php if( !empty($caption) ): ?>
		<div class="embed__caption">
			<p><?php echo $caption ?> </p>
		</div>
	<?php endif; ?>
</section>