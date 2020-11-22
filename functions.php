<?php //締めタグは不要
    //テーマサポート
    register_nav_menus(); //メニューの表示
    add_theme_support('title-tag');//タイトルの表示
    add_theme_support( 'post-thumbnails' ); //アイキャッチ画像の設定
    add_theme_support( 'automatic-feed-links' );//headタグ内のフィードのリンク
    add_theme_support( "custom-header"); //ヘッダーをカスタムする設定
    add_theme_support( "custom-background"); //テーマで背景画像を設定する
    add_editor_style(); //エディタの内容を投稿の出力結果と同じようにする 
    load_theme_textdomain( $domain, $path ); //テキストドメインの読み込み
    if ( ! isset( $content_width ) ) $content_width = 900; //コンテンツの最大幅の指定
    wp_link_pages( $args ); //記事を数ページに分けた時用のページャー テーマチェック用に記載
    paginate_comments_links(); //ページ送り用の記述
    wp_body_open(); //body要素の直後に何かを挿入する際に使用するアクションを実行する記述           
    comments_template(); //エラーチェック用 コメントテンプレートを読み込む
    comment_form(); //エラーチェック用 コメントフォームを読み込み
    wp_list_comments(); //エラーチェック用の記述 コメント表示のテンプレートタグ
    posts_nav_link(); //エラーチェック用の記述 ページネーションのテンプレートタグ


    //スタイルシートの読み込み
    function raisetech_script(){
        wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap', array() );
        wp_enqueue_style('style-name', esc_url(get_template_directory_uri()).'/css/style.css' , array());
        wp_enqueue_style('style', esc_url(get_template_directory_uri()).'/style.css' , array(),'1.0.0');
        wp_enqueue_script('script-name' , esc_url(get_template_directory_uri()). '/js/jquery-3.5.1.min.js',array('jquery'),'1.0.0',true);    
        wp_enqueue_script('script-sidebar' , esc_url(get_template_directory_uri()). '/js/sidebar.js',array('jquery'),'1.0.0',true);    
    }
    add_action( 'wp_enqueue_scripts', 'raisetech_script');

    //ウィジェット
    function raisetech_widgets_init() {
        register_sidebar (
            array(
                'name'          => 'カテゴリーウィジェット',
                'id'            => 'category_widget',
                'description'   => 'カテゴリー用ウィジェットです',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2><i class="fa fa-folder-open" aria-hidden="true"></i>',
                'after_title'   => "</h2>\n",
            )
        );
    }
    add_action( 'widgets_init', 'raisetech_widgets_init' );
    
    function custom_theme_support(){
        add_theme_support('html5',array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
    }
    
    //コメント返信ボタンの実装
    function demo_script() {
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
    add_action( 'wp_enqueue_scripts', 'demo_script' );