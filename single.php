<?php get_header();?>
<?php
  if(have_posts()):
    while( have_posts()):
        the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2 class="post__ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php
        endwhile;
        else:

        endif;
?>
      </div>
      </div>
<?php get_sidebar();?>
      </div>
<?php get_footer();?>