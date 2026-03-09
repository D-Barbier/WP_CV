<aside>
    <?php
    if (have_comments()) : //S'il y a des commentaires
    ?>
        <h3>
            <?php echo get_comments_number() ?> commentaire(s).
        </h3>

        <?php
        wp_list_comments([
            'style' => 'ol',
            'short_ping' => false,
            'avatar_size' => 64,
        ]);
        ?>

        <div>
            <?php comment_form(); ?>
        </div>

    <?php
    else : //si aucun commentaire
    ?>
        <p>Aucun commentaire</p>;
    <?php
    endif
    ?>
</aside>