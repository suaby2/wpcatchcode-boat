<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WPCatchcode_Boat_Theme
 */

?>

<footer id="colophon" class="site-footer section flex">
    <div class="section-wrapper">
        <div class="columns">
            <div class="column wider">
                <a href="#">
                    <img src="<?= get_template_directory_uri() . '/assets/images/Generix_logo.png'; ?>" alt="Generix Logo">
                </a>
                <p>
                    Generix Express provides customized services for customers around the world from 50+ leading industries. For more
                    information please
                </p>
            </div>
            <div class="column">
                <h3>Products</h3>
                <nav>
                    <ul>
                        <li>
                            <a href="#">
                                Features
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Enterpise
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Customer Stories
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="column">
                <h3>Products</h3>
                <nav>
                    <ul>
                        <li>
                            <a href="#">
                                Features
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Enterpise
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Enterpise
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="column">
                <h3>Products</h3>
                <p>
                    123 Anywhere St., Any City, ST 12345
                </p>
                <h3>Products</h3>
                <p>
                    123 Anywhere St., Any City, ST 12345
                </p>
            </div>
        </div>
        <div class="site-footer__bottom-bar">
            <div class="copyright">
                © <?= date('Y'); ?> All rights reserved - Generix
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
