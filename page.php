<?php

if ( is_home() ) :
	get_header( 'home' );
else :
	get_header();
endif;

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class="page">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </article>

    <?php endwhile;

    else :
        echo '<p>No content found</p>';

    endif;

get_footer();

?>