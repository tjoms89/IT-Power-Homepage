<?php get_header(); ?>
<?php /*
Template Name: Infrastruktur Template
*/
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div id="intro-small" class="cabos">
            <div class="row">
                <div class="background5">
                    <h1>IT-Infrastruktur</h1>
                </div>

            </div>
        </div>


        <div id="main" style="width: 60%;">
            <div class="col-md-12">

                <br>
                    <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>