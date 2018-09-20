<?php get_header(); ?>
<div class="container">
<div class="row">
<?php get_sidebar(); ?>
      <div class="col-sm-9">
        <div class="blog-main blog-wrapper">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <h1 class="blog-post__title"><?php the_title(); ?></h1>
            <p class="blog-post-meta"><?php echo get_the_date('d.m.Y'); ?> <?php echo get_the_time(); ?></p>
            <?php
              if (has_post_thumbnail()) {
                echo "<div class='blog-post__image'>" . get_the_post_thumbnail($id, '', array('class' => 'img-fluid')) . "</div>";
              }
            ?>
            <article>
            	<?php the_content(); ?>
            </article>
          </div>
            
            <?php endwhile; endif; ?>
  </div><!-- end blogmain -->
  </div><!-- end row -->
</div><!-- end container -->

<?php get_footer(); ?>
