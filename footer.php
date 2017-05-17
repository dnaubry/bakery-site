        <footer class="site-footer">
            <p>&copy; <?php echo date('Y');  ?> - <?php bloginfo('name'); ?> // 
            Photos from <a href="https://unsplash.com" target="_blank">Unsplash</a></p>
            
            <?php

                $args = array(
                    'theme_location' => 'footer'
                );

                ?>
            <nav class="footer-nav">
                <?php wp_nav_menu( $args ); ?>
            </nav>

        </footer>

    </div><!-- container -->
<?php wp_footer(); ?>
</body>
</html>