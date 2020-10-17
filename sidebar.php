<!-- サイドバー -->
<section class="l-sidebar">

        <h2 class="l-sidebar_title">Menu</h2>
    <ul class="l-sidebar_menu"> <!--参考サイトhttps://shu-sait.com/wordpress-custom-menu-class/-->
           <?php 
                wp_nav_menu( array(
                    'menu' => 'cateogry-menu',
                ) ); 
            ?>
    </ul>
    </section>