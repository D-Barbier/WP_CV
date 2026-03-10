</main>
<!-- DEBUT FOOTER -->
<!-- Contenu principal terminé -->

<footer>
     <!-- Texte de copyright fixe -->
    <p id="copyright">Copyright DAMIEN BARBIER</p>
    
    <!-- Affiche les widgets du footer s’ils sont activés dans l’admin WordPress -->
    <?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'footer-sidebar' ); ?>
    <?php endif; ?>
    
    <!-- Menu de pied de page (commenté = désactivé pour l’instant) -->
    <!-- <?php wp_nav_menu(['theme_location' => 'foot']) ?> -->
</footer>

<!-- Nécessaire pour que WordPress et les plugins ajoutent leurs scripts en fin de page -->
<?php wp_footer(); ?>

</body>
</html>
<!-- FIN FOOTER -->
