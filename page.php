<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-8">

			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content-page', get_post_format() );
				endwhile; endif; 
			?>

		</div> <!-- /.col -->
			<?php get_sidebar(); ?>
		
	</div> <!-- /.row -->
</div>
<?php get_footer(); ?>