<div class="col-sm-12 col-md-9 blog-main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="blog-post">
    <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="blog-post-meta"><img src="<?php bloginfo('template_url'); ?>/img/calendar.svg" class="icon"> <?php echo get_the_date('d.m.Y'); ?> <img src="<?php bloginfo('template_url'); ?>/img/clock.svg" class="icon"> <?php echo get_the_time(); ?></p>
    
    <div class="post-preview row">  	
  	<?php if (has_post_thumbnail()) {
  		echo '<div class="post-img col-md-4">';
  	  echo get_the_post_thumbnail($id, '', array('class' => 'img-fluid'));
  	  echo '</div><!-- end post-img -->';
    	echo '<div class="col-md-8">';
      } else { 
        echo '<div class="col-md-12">';
      } ?>
    		<?php the_excerpt(); ?>
    		<a href="<?php echo get_permalink(); ?>"> [ Читать далее → ]</a>
    	</div><!-- end post-text -->
    </div><!-- end post-preview -->
  </div><!-- end blogpost -->
<?php endwhile; else: ?>
<p><?php _e('<h2>Пока нет записей на данной странице!</h2>'); ?></p>
<?php endif; ?>
<?php the_posts_pagination(); ?>
</div><!-- end blogmain -->
