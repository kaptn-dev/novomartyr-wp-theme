<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<p><a class="link-month" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
<?php endwhile; endif; ?>