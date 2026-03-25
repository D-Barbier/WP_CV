# WORDPRESS

## Docker

- creation du fichier **docker-compose.yml** 
  - Dans le terminal `docker compose up` pour la création du container  
  - `docker ps` pour voir les containers actif
  - `docker logs --follow [nom du container]` 
- Installation de WordPress via **localhost:portDuContainer**

---

### Fichier Obligatoire

- `index.php`
- `style.css` + commentaire avec:
  - **Theme Name:** pour le nom du theme.
  - **Description:** pour la description du theme.
  - **Author:** pour le nom de l'auteur.

---

### TIPS POUR LES FICHIERS

- **Template Hierarchy** : https://developer.wordpress.org/themes/classic-themes/basics/template-hierarchy/

---

### Contenu index.php

Si `header.php` / `footer.php` 
- function
  - `get_header();`  
  - `get_footer();`

- Coder la **Boucle WP** 
  - **documentation** : https://capitainewp.io/formations/developper-theme-wordpress/boucle-wordpress-template-tags/
- Function possible
  - `the_title();`  
  - `the_excerpt();`  
  - `the_content();`  
  - `the_post();`  

- **documentation**: https://developer.wordpress.org/reference/functions/


---

### header.php

- function
  - `language_attributes()`  
  - `bloginfo()`  
  - `get_stylesheet_uri()`  
  - `get_stylesheet_directory_uri()`  
  - `wp_head()`  
  - `body_class()`  
  - `wp_body_open()`

- **documentation** : https://capitainewp.io/formations/developper-theme-wordpress/header-footer-theme/

---

### footer.php

- function
  - `wp_footer();`

- **documentation** : https://capitainewp.io/formations/developper-theme-wordpress/header-footer-theme/
  
---

### page.php
### single.php
### archive

- `the_category()`
- `the_date()`
- `the_posts_pagination()` avec ou sans **s**
- `next_posts_link()` avec ou sans **s**
- `previous_posts_link()` avec ou sans **s**
- `the_post_thumbnail`
- `the_author_link()`

- **documentation**: https://developer.wordpress.org/reference/functions/

---


## Plugin

- `[nom].php + dossier avec le même nom`
  
### Commentaire

- **Plugin Name:** pour le nom du plugin.
- **Description:** pour la description du plugin.
- **Author:** pour le nom de l'auteur.


### Function

- add_shortcode('[tag]', '[nomFonction]')
  - `[tag]` à utiliser ou l'on veut voir le code apparaitre.
  - **Documentation:** https://developer.wordpress.org/reference/functions/add_shortcode/
- add_filter('[hookName]','[nomFonction]')
  - `[hookName]` Le nom du filtre auquel ajouter la fonction de rappel.
  - **exemple:** the_content, the_title
  - **Documentation:** https://developer.wordpress.org/reference/functions/add_filter/

## Custom post-type

### Si Plugin

- `[nom].php + dossier avec le même nom`
  
### Commentaire

- **Plugin Name:** pour le nom du plugin.
- **Description:** pour la description du plugin.
- **Author:** pour le nom de l'auteur.

### Function

- $arg = []
  - key => value


