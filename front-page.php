<?php get_header(); ?>
<?php
if( have_posts())://1.投稿データがあるかの条件分岐
    while( have_posts())://2.表示する投稿データがあれば繰り返し処理開始
        the_post();//3.ループ処理に必要なカウント処理等
    endwhile;
else:
    ?><p>表示する記事がありません</p><?php
endif;?>
            <article class="p-main_top_pic">
                <div class="p-main_pic">
                <img src="<?php echo esc_url( get_theme_file_uri('/img/top.png'));?> " alt="TOP画像">
            <div class="p-main_text">
                ダミーサイト
            </div>
            </div>
            </article>
            <!-- コンテンツ -->
    <div class="p-main_container">
        <section class="p-main_container_left">
            <h2>Take Out
                <p>＿</p>
                </h2>
                <div class="c-main_container_left_box1">
                <h3>小見出しが入ります
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </h3>
                </div>
                <div class="c-main_container_left_box2">
                <h3>小見出しが入ります
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </h3>
            </div>
        </section> 
        <section class="p-main_container_right">
            <h2>Eat In
                <p>＿</p>
                </h2>
                <div class="c-main_container_right_box1">
                <h3>小見出しが入ります
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </h3>
                </div>
                <div class="c-main_container_right_box2">
                <h3>小見出しが入ります
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </h3>
            </div>
        </section> 
        </div>
        <!-- 地図 -->
        <section class="p-main_map">   
            <div class="p-main_map_container">
                見出しが入ります
                    <p>＿＿</p>
                    <p class="c-main_map_container_text">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>     
                </div>
            <img src="<?php echo esc_url( get_theme_file_uri('/img/map.png'));?> "alt="店舗地図">
            </section>
        </div>
        <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>