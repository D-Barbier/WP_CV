const menuToogle = document.getElementById('menuToggle');
const menu = document.getElementById('menu-cv');

document.querySelector('main').addEventListener('click', function () {
    menu.classList.remove('active');
});


const searchsubmit = document.querySelector('.search-submit');

if (searchsubmit) {
    searchsubmit.value = "🔍";
}


/**
 * DEBUT accesibilité
 */
const textUp = document.getElementById('textUp');

const textDown = document.getElementById('textDown');

const darkMode = document.getElementById('darkMode');

const textChange = document.getElementById('textChange');

let justeAZero = 16;

/**
 * Augmenter la taille du texte
 */
textUp.addEventListener('click', () => {
    justeAZero += 2;
    document.body.style.fontSize = justeAZero + 'px';
});

/**
 * Diminuer la taille du texte
 */
textDown.addEventListener('click', () => {
    justeAZero -= 2;
    document.body.style.fontSize = justeAZero + 'px';
});


textChange.addEventListener('click', () => {
    document.body.classList.toggle('opendys');
});


darkMode.addEventListener('click', () => {
    document.body.classList.toggle('light');
});

/**
 * FIN ACCESIBILITE
 */