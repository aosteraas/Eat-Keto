<div class="blog-post">
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
	<?php if ( has_post_thumbnail() ) { the_post_thumbnail('insane'); } ?>
	<?php if(get_post_meta($post->ID, "foodpress_servings", true)) { ?>
		<h3>Yeild:  <?php echo get_post_meta($post->ID, "foodpress_servings", true); ?></h3> 
		<?php } ?>
		<?php if(get_post_meta($post->ID, "foodpress_cooking_time", true)) { ?>
        <h3>Cooking Time: ~<?php echo get_post_meta($post->ID, "foodpress_cooking_time", true); ?></h3>
        <?php } ?>
		<?php
        	$get_ingredients = get_post_meta($post->ID, "foodpress_ingredients", true);
			$ingredients = explode("\r", $get_ingredients);
            foreach($ingredients as $ingredient) {      
                    echo '<li>' . $ingredient . '</li>';
                  }
		?>
	
 	<?php the_content(); ?>
</div><!-- /.blog-post -->
