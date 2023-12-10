import './bootstrap';

const nav_toggle = document.querySelector('.toggle_button');

nav_toggle.addEventListener('click', function () {
    this.classList.toggle('menu_is_active');
    document.querySelector('.main_header__main__center__nav_menu').classList.toggle('menu_is_active');
});
window.addEventListener('scroll', function () {
    if (this.window.scrollY > 100) {
        document.querySelector('.main_header').classList.add('scrolled');
    } else {

        document.querySelector('.main_header').classList.remove('scrolled');
    }
})
