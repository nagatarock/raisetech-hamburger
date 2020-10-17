<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); //head内に必ずいる記述
    ?> 
</head>
<!-- body -->
<body> <?php body_class(); ?>
<div class="menu-bg"></div>
    <div class="l-main_flexbox">
     <div class="l-main_wrapper">
    <!-- header -->
    <header>
        <button class="p-sidebar_button">
            <div class="p-sidebar_button_line">
            <span class="p-sidebar_button_lines p-sidebar_button_line_1"></span>
            <span class="p-sidebar_button_lines p-sidebar_button_line_2"></span>
            <span class="p-sidebar_button_lines p-sidebar_button_line_3"></span>
        </div>
            <h2>Menu</h2></button>
            <h1><a href="<?php echo esc_url( home_url( '/' ) ) ?>"><h1><?php bloginfo('name'); ?></h1></a></h1> <!--ホームページの名前を出力、トップページに戻る-->
        <?php get_search_form(); ?>
    </header>