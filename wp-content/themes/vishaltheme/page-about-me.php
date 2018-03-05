
<?php get_header(); ?>
<div class="container">
<div class="row">
  <div class="col-xs-12 col-md-8">
<?php 

if (have_posts()) :

    while (have_posts()) : the_post(); ?>
		
			<h3><?php the_title(); ?></h3>
			
			<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
			
			<p><?php the_content(); ?></p>
			
			<hr>
		
		<?php endwhile;

    endif;

    ?>
</div>
</div>
</div>
<?php get_footer(); ?>