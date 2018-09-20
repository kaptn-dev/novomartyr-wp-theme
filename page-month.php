<?php get_header(); ?>
<?php get_template_part( 'entry-header' ); ?>
<?php get_sidebar(); ?>

	<div class="col-sm-9 blog-main">

		<?php query_posts('category_name=14'); ?>
		<?php if ( have_posts() ) {
			echo '<h1 class="blog-title-month">Январь</h1>';
		} ?>
		<?php get_template_part( 'entry-month' ); ?>

		<?php query_posts('category_name=15'); ?>
		<?php if ( have_posts() ) {
			echo '<h1 class="blog-title-month">Февраль</h1>';
		} ?>
		<?php get_template_part( 'entry-month' ); ?>

		<?php query_posts('category_name=16'); ?>
		<?php if ( have_posts() ) {
			echo '<h1 class="blog-title-month">Март</h1>';
		} ?>
		<?php get_template_part( 'entry-month' ); ?>

		<?php query_posts('category_name=17'); ?>
		<?php if ( have_posts() ) {
			echo '<h1 class="blog-title-month">Апрель</h1>';
		} ?>
		<?php get_template_part( 'entry-month' ); ?>

		<?php query_posts('category_name=18'); ?>
		<?php if ( have_posts() ) {
			echo '<h1 class="blog-title-month">Май</h1>';
		} ?>
		<?php get_template_part( 'entry-month' ); ?>

		<?php query_posts('category_name=19'); ?>
		<?php if ( have_posts() ) {
			echo '<h1 class="blog-title-month">Июнь</h1>';
		} ?>
		<?php get_template_part( 'entry-month' ); ?>

		<?php query_posts('category_name=20'); ?>
		<?php if ( have_posts() ) {
			echo '<h1 class="blog-title-month">Июль</h1>';
		} ?>
		<?php get_template_part( 'entry-month' ); ?>

		<?php query_posts('category_name=21'); ?>
		<?php if ( have_posts() ) {
			echo '<h1 class="blog-title-month">Август</h1>';
		} ?>
		<?php get_template_part( 'entry-month' ); ?>

		<?php query_posts('category_name=22'); ?>
		<?php if ( have_posts() ) {
			echo '<h1 class="blog-title-month">Сентябрь</h1>';
		} ?>
		<?php get_template_part( 'entry-month' ); ?>

		<?php query_posts('category_name=23'); ?>
		<?php if ( have_posts() ) {
			echo '<h1 class="blog-title-month">Октябрь</h1>';
		} ?>
		<?php get_template_part( 'entry-month' ); ?>

		<?php query_posts('category_name=24'); ?>
		<?php if ( have_posts() ) {
			echo '<h1 class="blog-title-month">Ноябрь</h1>';
		} ?>
		<?php get_template_part( 'entry-month' ); ?>

		<?php query_posts('category_name=25'); ?>
		<?php if ( have_posts() ) {
			echo '<h1 class="blog-title-month">Декабрь</h1>';
		} ?>
		<?php get_template_part( 'entry-month' ); ?>
			
	</div>
</div>
</div>

<?php get_footer(); ?>