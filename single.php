<?php get_header();?>
<?php if(have_posts()): ?>
            <?php while(have_posts()): 
            the_post(); ?>
 <article class="p-single_top_pic">
                <div class="p-single_pic">
                <?php if(has_post_thumbnail());?>
        <?php the_post_thumbnail();?>
        <?php
        endwhile;
        else:

        endif;
?>
            <div class="p-single_text">
                <h1><?php the_title(); ?></h1>
            </div>
            </div>
            </article>
            <!-- コンテンツ -->
    <div class="p-single_container">
        <article class="p-single_container_topic">
          <?php the_content(); ?>
           <div class="p-single_container_topic_quote">
           </div>
        </article>
        </article>        
        </div>
        </div>
<?php get_sidebar();?>
      </div>
<?php get_footer();?>