// script.js
document.addEventListener("DOMContentLoaded", function () {
    const submenuLink = document.querySelector('.submenu-link');
    const submenu = document.querySelector('.submenu');

    submenuLink.addEventListener('click', function (e) {
        e.preventDefault();
        submenu.style.display = (submenu.style.display === 'block') ? 'none' : 'block';
    });
});
