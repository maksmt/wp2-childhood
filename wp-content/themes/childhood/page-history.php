<?php
    /*
    Template Name: Наша история
    */
?>

<?php get_header();?>

<div class="aboutus">
    <div class="container">
        <h1 class="title">Наша история</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history_name') ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history_descr')?>

                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('history_image') ?>" alt=" мир детства">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('history_image2') ?>" alt="мир детства">
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history_name2') ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history_descr2')?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history_name3') ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history_descr3')?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('history_image3') ?>" alt="мир детства">
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>