
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div id="intro-small" class="solar">
            <div class="row">
                <div class="background5">
                    <h1>Strategie</h1>
                </div>
            </div>
            </div>
        
        <div id="main" class="width1"> 
            <br>
            <?php the_content(); ?>
            <br>
        </div>
    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
