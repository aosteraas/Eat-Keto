<div class="blog-post">
	
	
<?php if ( has_post_thumbnail() ) {?>
	<div class="row">
		<div class="col-md-12">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_excerpt(); ?>
			<!--<p class="blog-post-meta">-->
			<div class="col-md-4"><?php the_date(); ?></div>
			
			<a href="<?php comments_link(); ?>">
			<div class="col-md-4 middle-btn">
			<?php
			printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( 						get_comments_number() ) ); ?>
			</div></a>
			<a href="<?php the_permalink()?>"><div class="col-md-4">Read More »</div></a>
			<!--</p>-->
		</div>
	</div>
	<?php } else { ?>
	<?php the_excerpt(); ?>
	<?php } ?>

</div><!-- /.blog-post -->