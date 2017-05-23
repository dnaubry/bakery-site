<?php

if ( is_home() ) :
	get_header( 'home' );
else :
	get_header();
endif; ?>

<!-- search results -->
<div class="search-results">
    <h2>Search results...</h2>

    <?php

    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
        
        <article class="page">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt(); ?>
        </article>

        <?php endwhile;

        else :
            echo '<p>No content found</p>';

        endif; ?>

</div><!-- search results -->

<?php

get_footer();

?>