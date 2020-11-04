<form id="l-header_form1"   action="<?php echo home_url('/'); ?>" method="get"> <!--actionとmethodがの順番が逆だとトップページ以外で検索した場合うまく表示されないので注意-->
            <input type="text"  class="l-header_search" name="s" id="search">
            <input type="submit" name="submit" value="検索" class="l-header_button" src="<?php bloginfo('template_url');?>">
        </form>