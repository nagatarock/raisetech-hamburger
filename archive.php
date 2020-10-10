<?php get_header();?>
<article class="p-archive_top_pic">
                <div class="p-archive_pic">
                <img src="<?php echo esc_url( get_theme_file_uri('/img/archive_top_pic.png'));?>" alt="TOP画像">
            <div class="p-archive_text">
            <?php if(is_category()) : ?>
                Menu:
                <?php single_cat_title(); ?>
<?php endif; ?>
            </div>
            </div>
            </article>

<div class="p-archive_container">
<div class="p-archive_container_text">
<h2><?php echo category_description( $category_id ); ?></h2>
</div>
<ul>
        <?php if(have_posts()): ?><!--記事があるかを調べ -->
            <?php while(have_posts()): //次の記事があるかを調べ
            the_post(); ?>     <!-- 次の記事を表示する -->
            <li class="p-archive_container_card1">
            <div class="p-archive_container_card1_pic">
                <?php if(has_post_thumbnail());?>
                    <?php the_post_thumbnail();?>
                    <div class="p-archive_container_card1_textbox">
                <?php the_title(); ?>
                <?php the_excerpt(); ?>
                <div class="c-button">
                    <button onclick="location.href='<?php the_permalink(); ?>'">詳しく見る</button>
                </div>
            </div>                
            <?php endwhile; //投稿データがない場合
        else:?>
                    <?php endif; ?>
            </div>

        </li>
        </ul>
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
        <?php get_sidebar();?>
    </div>
<?php get_footer();?>