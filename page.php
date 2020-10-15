<?php get_header();?>
<?php if (is_page()): ?> <!--固定ページかどうかを判定する-->
    <article class="p-pc_top_pic">
                <div class="p-pc_pic">
                <?php if(has_post_thumbnail());?>
        <?php the_post_thumbnail();?>
        <div class="p-pc_text">
<h1><?php the_title(); ?></h1>
</div>
        <?php
        else:
        endif;
?>
</div>
    </article>
    <div class="p-editor_style">
    <h2><?php the_title(); ?></h2>
    <?php the_content() ; ?>
    </div>
    </div>
<?php get_sidebar();?>
</div>
<?php get_footer();?>