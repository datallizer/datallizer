const header = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
    const scrollPos = window.scrollY;
    if (scrollPos > 100 ) {
        header.classList.add('scrolled','shadow');
    }
    else {
        header.classList.remove('scrolled','shadow');
    }
});
