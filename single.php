<?php get_header(); ?>
<?php
if( have_posts())://1.投稿データがあるかの条件分岐
    while( have_posts())://2.表示する投稿データがあれば繰り返し処理開始
        the_post();//3.ループ処理に必要なカウント処理等
    endwhile;
else:
    ?><p>表示する記事がありません</p><?php
endif;?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>single</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
</head>
<!-- body -->
<body>
    <div class="l-single_flexbox">
     <div class="l-single_wrapper">
    <!-- header -->
    <header>
        <h1>HamburgerR</h1>
        <form id="l-header_form1" action="#" method="post">
            <input type="text" name="text" class="l-header_search">
            <input type="submit" name="submit" value="検索" class="l-header_button">
        </form>
    </header>
            <article class="p-single_top_pic">
                <div class="p-single_pic">
                <img src="img/single.png" alt="TOP画像">
            <div class="p-single_text">
                <h1>h1 チーズバーガー</h1>
            </div>
            </div>
            </article>
            <!-- コンテンツ -->
    <div class="p-single_container">
        <article class="p-single_container_topic">
           <h2>見出しh2
               <p>pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。</p>
           </h2>
           <h3>見出しh3</h3>
           <h4>見出しh4</h4>
           <h4>見出しh3</h4>
           <h4>見出しh4</h4>
           <h5>見出しh5</h5>
           <h6>見出しh6</h6>
           <div class="p-single_container_topic_quote">
               <blockquote>
               Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
               引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
               引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ<br>
               <br><br>
               出典元： <a href="#">○○○○○○○○○○</a>
            </blockquote>
           </div>
        </article>
        <article class="p-single_container_pic">
        <div class="p-single_container_pic_top">
            <img src="img/single_container_pic.png" alt="バーガーとポテトのイメージ写真">
        </div>
        <div class="p-single_container_pic_menu1">
                <img src="img/single_container_pic_menu1.png" alt="バーガーとポテトのメニュー1">
            <div class="p-single_container_pic_menu1_text">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </div>
        </div>
        <div class="p-single_container_pic_menu2">
                <div class="p-single_container_pic_menu2_text">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </div>
                <img src="img/single_container_pic_menu1.png" alt="バーガーとポテトのメニュー2">
            </div>
            <div class="p-single_container_pic_menu3">
            <div class="p-single_container_pic_menu3_pic">        
            <img src="img/single_container_pic_menu1.png" alt="バーガーとポテトのメニュー3">
        </div>        
        </div>
        <div class="p-single_container_pic_library">
            <div class="p-single_container_pic_library_pic1">
                <img src="img/p-single_container_library_pic.png" alt="バーガーとポテトグリッド画像1">
            </div>
            <div class="p-single_container_pic_library_pic1">
                <img src="img/p-single_container_library_pic.png" alt="バーガーとポテトグリッド画像1">
            </div><div class="p-single_container_pic_library_pic1">
                <img src="img/p-single_container_library_pic.png" alt="バーガーとポテトグリッド画像1">
            </div><div class="p-single_container_pic_library_pic1">
                <img src="img/p-single_container_library_pic.png" alt="バーガーとポテトグリッド画像1">
            </div><div class="p-single_container_pic_library_pic1">
                <img src="img/p-single_container_library_pic.png" alt="バーガーとポテトグリッド画像1">
            </div><div class="p-single_container_pic_library_pic1">
                <img src="img/p-single_container_library_pic.png" alt="バーガーとポテトグリッド画像1">
            </div><div class="p-single_container_pic_library_pic1">
                <img src="img/p-single_container_library_pic.png" alt="バーガーとポテトグリッド画像1">
            </div><div class="p-single_container_pic_library_pic1">
                <img src="img/p-single_container_library_pic.png" alt="バーガーとポテトグリッド画像1">
            </div><div class="p-single_container_pic_library_pic1">
                <img src="img/p-single_container_library_pic.png" alt="バーガーとポテトグリッド画像1">
            </div>
        </div>
        <section class="p-single_container_list">
        <ol class="p-single_container_list1">
            <li>1.リストリストリスト</li>
            <li>2.リストリストリスト</li>
            <ol class="p-single_container_list1_list">
                <li>1.リスト2リスト2リスト2</li>
                <li>2.リスト2リスト2リスト2</li>
            </ol>
        </ol>
        <ol class="p-single_container_list2">
            <li>1.リストリストリスト</li>
            <li>2.リストリストリスト</li>
        </ol>
        <br>
        <br>
        <ul class="p-single_container_list3">
            <li>リストリストリスト</li>
            <li>リストリストリスト</li>
            <ul class="p-single_container_list3_list">
                <li>リスト2リスト2リスト2</li>
                <li>リスト2リスト2リスト2</li>
            </ul>
        </ul>
        <ul class="p-single_container_list4">
            <li>リストリストリスト</li>
            <li>リストリストリスト</li>
        </ul>
        <div class="p-single_container_list_zone">
            <ul>
                <li>&lt;html&gt;</li>
                <ul>
                    <li>&lt;head&gt;</li>
                    <li>&lt;/head&gt;</li>
                    <li>&lt;body&gt;</li>
                    <li>&lt;/body&gt;</li>
                </ul>
                &lt;/html&gt;
            </ul>
        </div>
    </section>
    <section class="p-single_container_table">
        <table class="p-single_container_table_item" border="1">
            <tr>
                <th>テーブル</th>
                <td>テーブル</td>
            </tr>
            <tr>
                <th>テーブル</th>
                <td>テーブル</td>
            </tr>
            <tr>
                <th>テーブル</th>
                <td>テーブル</td>
            </tr>
            <tr>
                <th>テーブル</th>
                <td>テーブル</td>
            </tr>
        </table>        
    </section>
    <div class="p-single_container_button">
    <div class="c-single-button">
        <button onclick="location.href='#'">ボタン</button>
    </div>
    <p>boldboldboldboldboldboldbold</p>
</div>
        </article>        
        </div>
        </div>
    <!-- サイドバー -->
    <section class="l-sidebar">
        Menu
    <ul class="l-sidebar_menu">
            <li>バーガー
        <ul class="l-sidebar_menu_burger">
            <li><a href="#">ハンバーガー</a></li>
            <li><a href="#">チーズバーガー</a></li>
            <li><a href="#">テリヤキバーガー</a></li>
            <li><a href="#">アボカドバーガー</a></li>
            <li><a href="#">フィッシュバーガー</a></li>
            <li><a href="#">ベーコンバーガー</a></li>
            <li><a href="#">チキンバーガー</a></li>
            <br>
        </ul>
    </li>
    <li>サイド
        <ul class="l-sidebar_menu_side">
            <li><a href="#">ポテト</a></li>
            <li><a href="#">サラダ</a></li>
            <li><a href="#">ナゲット</a></li>
            <li><a href="#">コーン</a></li>
            <br>
        </ul>
    </li>
    <li>ドリンク
        <ul class="l-sidebar_menu_drink">
            <li><a href="#">コーラ</a></li>
            <li><a href="#">ファンタ</a></li>
            <li><a href="#">オレンジ</a></li>
            <li><a href="#">アップル</a></li>
            <li><a href="#">紅茶(Ice/Hot)</a></li>
            <li><a href="#">コーヒー(Ice/Hot)</a></li>
        </ul>
    </li>
    </ul>
    </section>
</div>
<!-- footer -->
<footer>
    ショップ情報|ヒストリー
    <p><small>Copyright: RaiseTech</small></p>
</footer>
</body>
</html>