<?php get_header(); ?>
<div class="container">
  <div class="row">
    <?php get_sidebar(); ?>

    <div class="col-sm-12 col-lg-9">
      <h1 class="blog-post__title blog-page__title"><?php the_title(); ?></h1> 
      <div class="blog-main blog-wrapper">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
        
        <?php if (has_post_thumbnail()) {
            echo "<div class='blog-post__image'>" . get_the_post_thumbnail($id, '', array('class' => 'img-fluid')) . "</div>";
        } ?>
        <article>
            <?php the_content(); ?>
        </article>
            
        <?php endwhile; endif; ?>
      </div>
    </div><!-- end blogmain -->
  </div><!-- end row -->
</div><!-- end container -->

<?php get_footer(); ?>
