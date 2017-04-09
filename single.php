<div class="blog-post">
	<h2 class="blog-post-title">
    <?php the_title(); ?>
  </h2>

 <?php the_content(); ?>
 <p class="blog-post-meta"><?php the_date(); ?></p>


</div><!-- /.blog-post -->

<a href="<?php comments_link(); ?>">
	<?php
	printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( 						get_comments_number() ) ); ?>
</a>
