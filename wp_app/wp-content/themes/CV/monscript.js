const menuToogle = document.getElementById('menuToggle');
const menu = document.getElementById('menu-cv');

document.querySelector('main').addEventListener('click', function() {
    menu.classList.remove('active');
});


const searchsubmit = document.querySelector('.search-submit');

if(searchsubmit){
    searchsubmit.value = "🔍";
}
