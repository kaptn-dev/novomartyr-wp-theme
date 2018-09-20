<?php $the_query = new WP_Query('cat=8&showposts=40'); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<div class="blog-post">
  <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <p class="blog-post-meta"><img src="<?php bloginfo('template_url'); ?>/img/calendar.svg" class="icon"> <?php echo get_the_date('d.m.Y'); ?> <img src="<?php bloginfo('template_url'); ?>/img/clock.svg" class="icon"> <?php echo get_the_time(); ?></p>
  
  <div class="post-preview row">  	
	  <?php if (has_post_thumbnail()) {
	  	echo '<div class="post-img col-lg-4">';
	    echo get_the_post_thumbnail($id, array(800, 532), array('class' => 'img-fluid'));
	    }
	    echo '</div><!-- end post-img -->'; ?>
  	<div class="col-lg-8">
  		<?php the_excerpt(); ?>
  		<a href="<?php echo get_permalink(); ?>"> [ Читать далее → ]</a>
  	</div><!-- end post-text -->
  </div><!-- end post-preview -->
</div><!-- end blogpost -->

