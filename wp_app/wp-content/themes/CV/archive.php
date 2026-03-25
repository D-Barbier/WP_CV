<?php
get_header();
?>




<h1>Archive.PHP</h1>
<section class="flex">

    <?php
    if (have_posts()): // si l'url appelé correspond à du contenu  (article, page, auteur, catégorie...)
        while (have_posts()): // pour chaque élément trouvé... 
            the_post(); // on charge les données du contenu
    ?>
            <article class="montheme-article">
                <div class="test">
                    <?php
                // Must be inside a loop.

                if (has_post_thumbnail()) {
                    the_post_thumbnail('medium', ['class' => 'custom-thumb']);
                } else {

                    echo '<img class="custom-thumb" src="' . get_template_directory_uri(). '/images/test.png" />';
                }
                ?>
                <div>
                    <div class="date">
                        <?php echo get_the_date(); ?>
                    </div>
                </div>

                <header>
                    <h1>
                        <a href="<?php the_permalink() ?>">
                            <?php the_title(); // affichage du titre 
                            ?>
                        </a>
                    </h1>
                </header>
                <div>
                    <?php the_excerpt(); // extrait du post 
                    ?>
                </div>
            </article>
    <?php
        endwhile;
    else:
        echo 'Aucun contenu';
    endif;

    //posts_nav_link();
    ?>

    <div class="pagination">
        <div class="pagination-previous">
            <?php previous_posts_link(); ?>
        </div>
        <div class="pagination-next">
            <?php next_posts_link(); ?>
        </div>

        <div>
            <?php the_posts_pagination(); ?>
        </div>
    </div>
</section>

<?php
get_footer();
