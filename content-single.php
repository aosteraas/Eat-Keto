<div class="blog-post">
	<div class="row">
		<div class="col-md-12">
			<?php the_post_thumbnail('insane'); ?>
			<h2 class="blog-post-title">
				<a><?php the_title(); ?></a>
			</h2>
			<p class="blog-post-meta">&nbsp;</p>
	
			<?php if(get_post_meta($post->ID, "foodpress_servings", true) || get_post_meta($post->ID, "foodpress_cooking_time", true)) { ?>
			<div class="row">
				<div class="col-md-6">
				<div class="bs-component">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4>Servings, Time, and Ingredients</h4>
						</div>
						<div class="panel-body" id="left-panel">
				
						<?php if(get_post_meta($post->ID, "foodpress_servings", true)) { ?>
							<p>Servings:  <?php echo get_post_meta($post->ID, "foodpress_servings", true); ?></p> 
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
			</div> <!-- /.col-md-6 -->
			<div class="col-md-6">
				<div class="bs-component">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4>Nutritional Information</h4>
						</div>
						<div class="panel-body" id="right-panel">
							<p>The following only serves as a guide. Actual figures will vary depending on specific ingredients used.</p>
							<?php if (get_field('note')) { ?>
								<p><strong>Note:</strong> <?php the_field('note'); ?></p>
							<?php } ?>
							<p><strong>Protein:</strong> <?php the_field('protein'); ?></p>
							<p><strong>Fat:</strong> <?php the_field('fat'); ?></p>
							<p><strong>Carbs:</strong> <?php the_field('carbs'); ?></p>
						</div>
					</div>
				</div>
			</div>
	</div><!-- /.row -->
	<?php } ?>
 	<?php the_content(); ?>
		</div>
	</div>
</div><!-- /.blog-post -->
