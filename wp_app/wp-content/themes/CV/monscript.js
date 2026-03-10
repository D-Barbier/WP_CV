const menuToogle = document.getElementById('menuToggle');
const menu = document.getElementById('menu-cv');

document.querySelector('main').addEventListener('click', function() {
    menu.classList.remove('active');
});

// menuToggle.addEventListener('click', function() {
//     menu.classList.toggle('active');
// });


document.getElementById('searchsubmit').value = "🔍";