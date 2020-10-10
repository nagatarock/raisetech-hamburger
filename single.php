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
                <?php if(has_post_thumbnail());?>
                    <?php the_post_thumbnail();?>  



<?php get_sidebar();?>
<?php get_footer();?>