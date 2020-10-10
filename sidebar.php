<!-- サイドバー -->
<section class="l-sidebar">
<button class="p-sidebar_button">
            <div class="p-sidebar_button_line">
            <span class="p-sidebar_button_lines p-sidebar_button_line_1"></span>
            <span class="p-sidebar_button_lines p-sidebar_button_line_2"></span>
            <span class="p-sidebar_button_lines p-sidebar_button_line_3"></span>
        </div>
            <h2>Menu</h2></button>
        <h2 class="l-sidebar_title">Menu</h2>
    <ul class="l-sidebar_menu"> <!--参考サイトhttps://shu-sait.com/wordpress-custom-menu-class/-->
           <?php 
                wp_nav_menu( array(
                    'menu' => 'cateogry-menu',
                ) ); 
            ?>
    </ul>
    </section>