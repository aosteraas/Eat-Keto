<div class="blog-post">
	<div class="row">
		<div class="col-md-12">
			<?php the_post_thumbnail('insane'); ?>
			<h2 class="blog-post-title"><a><?php the_title(); ?></a></h2>
			<p class="blog-post-meta">&nbsp;</p>
	
			<?php if(get_post_meta($post->ID, "foodpress_servings", true) || get_post_meta($post->ID, "foodpress_cooking_time", true)) { ?>
			<div class="bs-component">
				<div class="panel panel-primary">
					<div class="panel-heading">
					<h4>Yeild, Time, and Ingredients</h4>
				</div>
				<div class="panel-body">
				
					<?php if(get_post_meta($post->ID, "foodpress_servings", true)) { ?>
					<p>Yeild:  <?php echo get_post_meta($post->ID, "foodpress_servings", true); ?></p> 
					<?php } ?>
					<?php if(get_post_meta($post->ID, "foodpress_cooking_time", true)) { ?>
					<p>Cooking Time: ~<?php echo get_post_meta($post->ID, "foodpress_cooking_time", true); ?></p>
					<?php } ?>
					<?php
						$get_ingredients = get_post_meta($post->ID, "foodpress_ingredients", true);
						$ingredients = explode("\r", $get_ingredients);
						echo '<ul>';
						foreach($ingredients as $ingredient) {      
							echo '<li>' . $ingredient . '</li>';
							} 
						echo '</ul>';
					?>
				</div><!-- /.panel-body -->
				</div> <!-- /.panel-primary -->
			</div> <!-- /.bs-component -->
			<?php } ?>
 		<?php the_content(); ?>
		</div>
	</div>
</div><!-- /.blog-post -->
