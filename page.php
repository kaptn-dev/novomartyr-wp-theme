<?php get_header(); ?>
<?php get_template_part( 'entry-header' ); ?>
<?php get_sidebar(); ?>

<div class="col-sm-12 col-lg-9 blog-main">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
    
    <?php if (has_post_thumbnail()) {
        echo get_the_post_thumbnail($id, array(800, 532), array('class' => 'img-fluid'));
    } ?>
    <article>
        <?php the_content(); ?>
    </article>
    
    <?php endwhile; endif; ?>
    </div><!-- end blogmain -->
  </div><!-- end row -->
</div><!-- end container -->

<?php get_footer(); ?>
