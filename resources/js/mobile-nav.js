window.addEventListener('click', function (e) {
    let tofuburger = e.target.closest('.tih-nav-bar__tofuburger-button');
    if (!tofuburger) return;
    let mobileMenu = document.querySelector('.tih-mobile-menu');
    let links = mobileMenu.querySelectorAll('.tih-mobile-menu__button');

    if (mobileMenu.open) {
        mobileMenu.open = false;
        mobileMenu.setAttribute('aria-hidden', 'true');
        mobileMenu.animate([
            { opacity: '1', visibility: 'visible', transform: 'translateY(0)' },
            { opacity: '0', visibility: 'hidden', transform: 'translateY(100px)' },
        ], {
            duration: 500,
            easing: 'ease-in-out',
            fill: 'forwards',
        });
        links.forEach(function (link) {
            link.style.opacity = '0';
            link.style.transform = 'translateY(100px)';
        });
    } else {
        mobileMenu.open = true;
        mobileMenu.setAttribute('aria-hidden', 'false');
        mobileMenu.animate([
            { opacity: '0', visibility: 'hidden', transform: 'translateY(100px)' },
            { opacity: '1', visibility: 'visible', transform: 'translateY(0)' },
        ], {
            duration: 500,
            easing: 'ease-in-out',
            fill: 'forwards',
        });
        links.forEach(function (link, index) {
            setTimeout(() => {
                link.animate([
                    { opacity: '0', transform: 'translateY(100px)' },
                    { opacity: '1', transform: 'translateY(0)' },
                ], {
                    duration: 250,
                    easing: 'ease-in-out',
                    fill: 'forwards',
                });
            }, 100 * index + 500);
        });
    }
});
