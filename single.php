<?php get_header(); ?>

<div class="col-md-8">
  <?php if(have_posts()) : ?>
		   <?php while(have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" class="center-block">
				<a href="<?php the_permalink(); ?>"><?php the_title('<h2>','</h2>'); ?></a>
        <small>Writen in <i class="fa fa-calendar"></i>
 <?php the_time('F jS, Y') ?> by <i class="fa fa-user"></i>
 <?php the_author() ?></small><hr>
        <div class="img-rounded">
       <a href="<?php the_permalink(); ?>"> <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail('thumbnail','class=img-rounded');
            }
        ?></a>
      </div>
		 		<?php the_content(); ?> <a class="btn-info btn" href="<?php the_permalink(); ?>">Read More</a>
			</div><hr>

       <?php endwhile; ?>
     <?php else : ?>

  <div class="alert alert-info">
    <strong>No content in this loop</strong>
  </div>

  <?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
