<?php
get_header();
?>
<div class="single container">
    <div class="primary">
        <?php
        if ( have_posts() ) :
            while( have_posts() ) :
                the_post();
                ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            <?php
            endwhile;
        endif;
        ?>
    </div>
    <div class="secondary">
        <?php
        get_sidebar();
        ?>
    </div>
</div>
<?php
get_footer();