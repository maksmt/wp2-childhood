<?php
    /*
    Template Name: Мой шаблон для категории мягких игрушек
    Template Post Type: category, soft_toys
    */
?>

<?php

get_header();
?>
<div id="primary" class="content-area">
    <main id="primary" class="site-main container toys">
        <h2 class="subtitle">Все товары из категории "Мягкие игрушки"</h2>

        <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_posts() );

		endwhile; // End of the loop.
		?>

    </main><!-- #main -->
</div>

<?php
get_footer();