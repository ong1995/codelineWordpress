<?php
/**
 * @package unite
 */
?>
<div class="description">Category</div>
<?php

	$args = array( 'post_type' => 'films', 'posts_per_page' => 10 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	  the_title();
	  echo '<div class="entry-content">';
	  the_field('country');
	  testing();
	  echo '</div>';
	endwhile;

?>