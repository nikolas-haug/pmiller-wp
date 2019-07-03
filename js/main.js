// for the scroll to top button

const scrollButton = document.querySelector('.scroll__top-btn');

function scrollBtnDisplay() {
    if (window.scrollY > 50) {
        scrollButton.style.display = 'block';
    } else {
        scrollButton.style.display = 'none';
    }
}

function topFunction() {
    window.scroll({
        top: 0,
        left: 0,
        behavior: "smooth"
    });
}

window.addEventListener('scroll', scrollBtnDisplay);
scrollButton.addEventListener('click', topFunction);

// for the dropdown skull navigation

const skull = document.querySelector('.main__logo');
const navCollapse = document.querySelector('.main__collapse');

function openMenu() {
    navCollapse.classList.toggle('main__nav--open');
}

skull.addEventListener('click', openMenu);