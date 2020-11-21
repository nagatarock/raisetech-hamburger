<!-- サイドバー -->
<section class="l-sidebar">

        <h2 class="l-sidebar_title">Menu</h2>
    <ul class="l-sidebar_menu"> <!--参考サイトhttps://shu-sait.com/wordpress-custom-menu-class/-->
           <?php 
                wp_nav_menu( array(
                    'menu' => 'category-menu',
                    'theme_location' => 'category-menu'
                ) ); 
            ?>
<!--カテゴリーウィジェットの関数 テーマチェック用-->
<?php if( is_active_sidebar('category_widget')):
dynamic_sidebar('category_widget');
endif;
?>
    </ul>
    </section>