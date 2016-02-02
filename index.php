<?php get_header(); ?>
<div class="col-md-8">
  <?php if(have_posts()) : ?>
		   <?php while(have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_title('<h2>','</h2>'); ?>
        <div class="thumbnail">
       <a href="<?php the_permalink(); ?>"> <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail('index-size');
            }
        ?></a>
      </div>
		 		<?php the_excerpt(); ?> <a class="btn-info " href="<?php the_permalink(); ?>">Read More</a>
			</div>

       <?php endwhile; ?>
     <?php else : ?>

  <div class="alert alert-info">
    <strong>No content in this loop</strong>
  </div>

  <?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
