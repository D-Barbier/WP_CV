# WORDPRESS

## Docker

- **docker-compose.yml** pour la création du container  
  - `docker compose up`  
  - `docker ps`  
  - `docker logs --follow [nom du container]`
- Installation de WordPress via **localhost:portDuContainer**

---

### Fichier Obligatoire

- `index.php`
- `style.css` + commentaire avec `Theme Name : [NomDuTheme]`

---

### TIPS

- **Template Hierarchy** : https://developer.wordpress.org/themes/classic-themes/basics/template-hierarchy/

---

### Contenu

- h2[NomDeLaPage]

### index.php

- Boucle WP 
  - **documentation** : https://capitainewp.io/formations/developper-theme-wordpress/boucle-wordpress-template-tags/
- Function
  - `the_title();`  
  - `the_excerpt();`  
  - `the_content();`  
  - `the_post();`  
  - `get_header();`  
  - `get_footer();`

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

---

### footer.php

- function
  - `wp_footer();`

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


