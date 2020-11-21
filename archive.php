<?php get_header();?>
<article class="p-archive_top_pic">
                <div class="p-archive_pic">
                <img src="<?php echo esc_url( get_theme_file_uri('/img/archive_top_pic.png'));?>" alt="TOP画像">
            <div class="p-archive_text">
                Menu:
                <span><?php single_cat_title(); ?></span>
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
            <li class="p-archive_container_card">
            <div class="p-archive_container_card_pic">
                <?php if(has_post_thumbnail());?><!--疑問コーヒーだけ文字レベルの出方が違う！-->
                    <?php the_post_thumbnail();?>
                    </div>
                    <div class="p-archive_container_card_textbox">
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <div class="c-button">
                    <button onclick="location.href='<?php the_permalink(); ?>'">詳しく見る</button><!--疑問 コーヒーの文字レベルが違うせいで詳しく見るボタンの位置が揃っていない-->
                </div>
            </div>                
            <?php endwhile; //投稿データがない場合
        else:?>
                    <?php endif; ?>
        </li>
        </ul>
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
        </div>
        </div>
        <?php get_sidebar(); ?>
        </div>
<?php get_footer();?>