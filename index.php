<?php get_header(); ?>

	<div class="container">

		<div class="row">
				<div class="col-md-7">
					<div class="blog-title left">
						<a href="https://twitter.com/malobillo?lang=en">@malobillo</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blog-title right">
						<a href="https://github.com/Neniah">Github</a>
					</div>
				</div>

		</div>
    <div class="row">

  		<div class="col-sm-10 blog-main">

  			<?php
  			if ( have_posts() ) : while ( have_posts() ) : the_post();

  				get_template_part( 'content-single', get_post_format() );

					if ( comments_open() || get_comments_number() ) :
	  				comments_template();
					endif;

  			endwhile; ?>

				<nav>
					<ul class="pager">
						<li><?php next_posts_link( 'Previous' ); ?></li>
						<li><?php previous_posts_link( 'Next' ); ?></li>
					</ul>
				</nav>

			<?php endif;?>

  		</div> <!-- /.blog-main -->

  		<?php //get_sidebar(); ?>

  	</div> <!-- /.row -->

	<?php get_footer(); ?>
</div><!-- container -->
