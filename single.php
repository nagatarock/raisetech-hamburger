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
        <?php the_tags('タグ：','|'); ?> <!--タグの表示-->
        <div class="c-nav-link">
        <?php the_post_navigation( array(
                'prev_text'      => '<<%title',
                'next_text'      => '%title>>',
        )); ?> <!--前後記事へのリンク-->
        <?php wp_list_comments(); ?> <!--エラーチェック用の記述 コメント表示のテンプレートタグ-->
        <?php posts_nav_link(); ?> <!--エラーチェック用の記述 ページネーションのテンプレートタグ-->
        </div>
        </div>
<?php get_sidebar();?>
      </div>
<?php get_footer();?>