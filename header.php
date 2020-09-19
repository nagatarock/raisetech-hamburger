<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>front-page</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <script src="js/jquery-3.5.1.min.js"></script>
    <h1 class="header__ttl">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?><span class="header__ttl__sub">static</span></a>
</h1>
<p class="header__descrition"><?php bloginfo( 'description' ); ?></p>
</head>
<!-- body -->
<body>
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
        <h1>Hamburger</h1>
        <form id="l-header_form1" action="#" method="post">
            <input type="text" name="text" class="l-header_search">
            <input type="submit" name="submit" value="検索" class="l-header_button">
        </form>
    </header>