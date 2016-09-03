<div class="blog-post">
<div class="row">
	<div class="col-md-12">
		<?php the_post_thumbnail('insane'); ?>
		<h2 class="blog-post-title"><a><?php the_title(); ?></a></h2>
		<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
	
		<?php if(get_post_meta($post->ID, "foodpress_servings", true) || get_post_meta($post->ID, "foodpress_cooking_time", true)) { ?>
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
                  	} ?>
		<?php } ?>
	
 	<?php the_content(); ?>
	</div>
</div>
	
	

</div><!-- /.blog-post -->
