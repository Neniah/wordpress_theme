<div class="blog-post">
	<div class="row">
		<div class="col-md-12">
			<div class="blog-post-title">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		  </div>
			<?php the_excerpt(); ?>
		</div>

	</div>
	<div class="row">
		<div class="col-md-5 right">
			<?php //the_content(); ?>

 		 <p class="blog-post-date"><?php the_date(); ?></p>
		</div>
	</div>


</div><!-- /.blog-post -->
