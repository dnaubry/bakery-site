<?php

if ( is_home() ) :
	get_header( 'home' );
else :
	get_header();
endif;

?>

<!-- contact and menu -->
<div class="contact-menu">

<?php

$contact_query = new WP_Query( array( 'category_name' => 'contact' ) );

if ($contact_query->have_posts()) :
    while ($contact_query->have_posts()) :
        $contact_query->the_post(); ?>

<div class="contact-menu__contact">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php the_content();

        endwhile;
        wp_reset_query();
    else :
        echo '<p>No content found</p>';

    endif; ?>

</div>

<?php

$menu_query = new WP_Query( array( 'category_name' => 'menu' ) );

if ($menu_query->have_posts()) :
    while ($menu_query->have_posts()) :
        $menu_query->the_post(); ?>

<div class="contact-menu__menu">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php the_content();

        endwhile;
        wp_reset_query();
    else :
        echo '<p>No content found</p>';

    endif; ?>

</div>

</div><!-- contact and menu -->

<!-- articles -->
<div class="article-posts">

    <h2>Articles</h2>
    <div class="articles flex__container">

<?php

$args = array('category_name' => 'articles', 'posts_per_page' => '6');
$category_posts = new WP_Query($args);

if ($category_posts->have_posts()) :
    while ($category_posts->have_posts()) : 
        $category_posts->the_post(); ?>

    <article class="post flex__item">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php the_post_thumbnail('large'); ?>
        <?php the_excerpt(); ?>
    </article>

    <?php 
        endwhile;
        wp_reset_query();
    else :
        echo '<p>No content found</p>';

    endif; ?>
    
    </div>
    <div class="article-posts__more">
        <p>more <a href="/category/articles">Articles</a></p>
    </div>
</div><!-- articles -->

<?php

get_footer();

?>