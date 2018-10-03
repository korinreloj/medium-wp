<?php
	$author_ID = get_the_author_meta('ID');
	$profile = get_field('user_profile' , "user_$author_ID");
	$profile_id = $profile->ID;
	$author = get_the_title($profile_id);
    $age= get_field('age', $profile_id);
    $birthplace = get_field('birthplace', $profile_id);
    $profession = get_field('profession', $profile_id);
    $profile_picture = get_avatar('ID');

if( $author_ID && $profile ): 
?>

    <p><a href="<?php the_permalink($profile_id); ?>"><?php echo $author; ?></a></p>
	<?php echo "$age $birthplace $profession"; ?>

	<div class="description">
		<?php echo "description"; ?>
  	</div>

<?php endif; ?>
      