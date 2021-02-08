<?php
require_once get_template_directory(). '/header.php';
?>
<div class="home">
    <div class="container">
        <div class="primary">
            <?php
            if ( have_posts() ) :
                while( have_posts() ) :
                    the_post();
                    ?>
                    <a href="<?php echo the_permalink(); ?>">
                        <div class="posts">
                            <span class="time"><?php echo the_modified_date(); ?></span>
                            <h2><?php the_title(); ?></h2>
                        </div>
                    </a>
                <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>
<?php
require_once get_template_directory(). '/footer.php';
?>
