<!-- DEBUT FOOTER -->
</main>

<footer>
    <?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'footer-sidebar' ); ?>
    <?php endif; ?>
    <p id="Copyright">Copyright DAMIEN BARBIER</p>
    <?php wp_nav_menu(['theme_location' => 'foot']) ?>
</footer>

<?php wp_footer(); ?>


</body>
</html>
<!-- FIN FOOTER -->