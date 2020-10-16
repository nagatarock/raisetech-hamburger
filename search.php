<?php get_header();?>
<?php if (have_posts()): ?>
    <article class="p-archive_top_pic">
                <div class="p-archive_pic">
                <img src="<?php echo esc_url( get_theme_file_uri('/img/archive_top_pic.png'));?>" alt="TOP画像">
            <div class="p-archive_text">
                Menu:
                <?php the_search_query(); ?>
            </div>
            </div>
            </article>

<?php
  if (isset($_GET['s']) && empty($_GET['s'])) {
    echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
  } else {
    echo '“'.$_GET['s'] .'”の検索結果：'.$wp_query->found_posts .'件'; // 検索キーワードと該当件数を表示
  }
?>
<?php if(have_posts()); ?><!--記事があるかを調べ -->
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
                    <button onclick="location.href='<?php the_permalink(); ?>'">詳しく見る</button><!--疑問詳しく見るボタンの位置が揃っていない-->
                </div>
            </div>                
            <?php endwhile; ?>
            <?php else: ?>
検索されたキーワードにマッチする記事はありませんでした
            <?php endif; ?>
</li>
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
</div>
<?php get_sidebar();?>
</div>
<?php get_footer();?>