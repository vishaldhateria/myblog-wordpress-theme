
<?php get_header();?>
<section class="featured-posts no-padding-top">
<div class="container">

<?php

if (have_posts()):

    while (have_posts()): the_post();?>


		  <div class="row d-flex align-items-stretch">
		          <div class="image col-lg-5"><?php the_post_thumbnail('large');?></div><div class="text col-lg-7">
		            <div class="text-inner d-flex align-items-center">
		              <div class="content">
		                <header class="post-header">
		                  <div class="category"> <?php the_time('F j, Y');?> at <?php the_time('g:i a');?>, in <?php the_category();?>
		                  <h2 class="h4">
		                   <?php the_title();?>
				</h2></a>
		                </header>
					<p>
				<?php the_content();?></p>
		      <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
		                    <div class="avatar"><img src="img/avatar-2.jpg" alt="..." class="img-fluid"></div>
		                    <div class="title"><span>John Doe</span></div></a>
		                  <div class="date"><i class="icon-clock"></i> 2 months ago</div>
		                  <div class="comments"><i class="icon-comment"></i>12</div>
		                </footer>
				<?php endwhile;

endif;

?>
    </div>
    <div class="col-xs-12 col-sm-4">
    <?php get_sidebar();?>
    </div>
 </section>

 <div class="container">
    <div class="row">
        <?php 
            $lastBlog = new WP_Query('type=post&posts_per_page=1');
          
            if ($lastBlog->have_posts()):

    while ($lastBlog->have_posts()): $lastBlog->the_post();?>


				  <div class="row d-flex align-items-stretch">
				          <div class="image col-lg-5"><?php the_post_thumbnail('large');?></div><div class="text col-lg-7">
				            <div class="text-inner d-flex align-items-center">
				              <div class="content">
				                <header class="post-header">
				                  <div class="category"> <?php the_time('F j, Y');?> at <?php the_time('g:i a');?>, in <?php the_category();?>
				                  <h2 class="h4">
				                   <?php the_title();?>
						</h2></a>
				                </header>
							<p>
						<?php the_content();?></p>
				      <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
				                    <div class="avatar"><img src="img/avatar-2.jpg" alt="..." class="img-fluid"></div>
				                    <div class="title"><span>John Doe</span></div></a>
				                  <div class="date"><i class="icon-clock"></i> 2 months ago</div>
				                  <div class="comments"><i class="icon-comment"></i>12</div>
				                </footer>
						<?php endwhile;

endif;

wp_reset_postdata();
       ?>
			 </div>
				</div>
				</div>
				</div>
    </div>
 </div>


//printing out the 2 posts except 1st one 

 <div class="container">
    <div class="row">
        <?php 
        $lastBlog = new WP_Query('type=post&posts_per_page=2&offset=1');
        
        if ($lastBlog->have_posts()) :

            while ($lastBlog->have_posts()) : $lastBlog->the_post(); ?>


				  <div class="row d-flex align-items-stretch">
				          <div class="image col-lg-5"><?php the_post_thumbnail('large'); ?></div><div class="text col-lg-7">
				            <div class="text-inner d-flex align-items-center">
				              <div class="content">
				                <header class="post-header">
				                  <div class="category"> <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?>
				                  <h2 class="h4">
				                   <?php the_title(); ?>
						</h2></a>
				                </header>
							<p>
						<?php the_content(); ?></p>
				      <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
				                    <div class="avatar"><img src="img/avatar-2.jpg" alt="..." class="img-fluid"></div>
				                    <div class="title"><span>John Doe</span></div></a>
				                  <div class="date"><i class="icon-clock"></i> 2 months ago</div>
				                  <div class="comments"><i class="icon-comment"></i>12</div>
				                </footer>
						<?php endwhile;

        endif;

        wp_reset_postdata();
        ?>
				</div>
				</div>
				</div>
				</div>
				<hr>

				//print only tutorials which is having category 7 
				<?php
$lastBlog = new WP_Query('type=post&posts_per_page=-1&cat=7');

if ($lastBlog->have_posts()):

    while ($lastBlog->have_posts()): $lastBlog->the_post();?>


						  <div class="row d-flex align-items-stretch">
						          <div class="image col-lg-5"><?php the_post_thumbnail('large');?></div><div class="text col-lg-7">
						            <div class="text-inner d-flex align-items-center">
						              <div class="content">
						                <header class="post-header">
						                  <div class="category"> <?php the_time('F j, Y');?> at <?php the_time('g:i a');?>, in <?php the_category();?>
						                  <h2 class="h4">
						                   <?php the_title();?>
								</h2></a>
						                </header>
									<p>
								<?php the_content();?></p>
						      <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
						                    <div class="avatar"><img src="img/avatar-2.jpg" alt="..." class="img-fluid"></div>
						                    <div class="title"><span>John Doe</span></div></a>
						                  <div class="date"><i class="icon-clock"></i> 2 months ago</div>
						                  <div class="comments"><i class="icon-comment"></i>12</div>
						                </footer>
								<?php endwhile;

endif;

wp_reset_postdata();
?></div>
				</div>
				</div>
				</div>
    </div>
 </div>
<?php get_sidebar();?>
<?php get_footer();?>
