<?php get_header(); ?>
<div class="container">
<div class="row">
<?php get_sidebar(); ?>
      <div class="col-sm-8 blog-main">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <h1><?php single_post_title(); ?></h1>
            <p class="blog-post-meta"><?php echo get_the_date('d.m.Y'); ?> <?php echo get_the_time(); ?></p>
            <?php
              if (has_post_thumbnail()) {
                echo get_the_post_thumbnail($id, array(800, 532), array('class' => 'img-fluid'));
              }
            ?>
            <article>
            	<?php the_content(); ?>
            </article>
       
  </div><!-- end blogmain -->
  </div><!-- end row -->
</div><!-- end container -->

<?php get_footer(); ?>
