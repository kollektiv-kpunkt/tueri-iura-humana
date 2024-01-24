window.addEventListener('click', function (e) {
    let tofuburger = e.target.closest('.tih-nav-bar__tofuburger-button');
    if (!tofuburger) return;
    let mobileMenu = document.querySelector('.tih-mobile-menu');
    let links = mobileMenu.querySelectorAll('.tih-mobile-menu__button');
    let inners = mobileMenu.querySelectorAll('.tih-mobile-menu__button-inner');

    links.forEach(function (link) {
        link.addEventListener('click', function (e) {
            mobileMenu.open = false;
            document.documentElement.style.overflow = 'auto';
            mobileMenu.setAttribute('aria-hidden', 'true');
            mobileMenu.animate([
                { opacity: '1', visibility: 'visible', transform: 'translateY(0)' },
                { opacity: '0', visibility: 'hidden', transform: 'translateY(100px)' },
            ], {
                duration: 500,
                easing: 'ease-in-out',
                fill: 'forwards',
            });
            inners.forEach(function (inner) {
                inner.animate([
                    { opacity: '1', transform: 'translateY(0)' },
                    { opacity: '0', transform: 'translateY(100%)' },
                ], {
                    duration: 250,
                    easing: 'ease-in-out',
                    fill: 'forwards',
                });
            });
        }
        );
    });

    if (mobileMenu.open) {
        mobileMenu.open = false;
        document.documentElement.style.overflow = 'auto';
        mobileMenu.setAttribute('aria-hidden', 'true');
        mobileMenu.animate([
            { opacity: '1', visibility: 'visible', transform: 'translateY(0)' },
            { opacity: '0', visibility: 'hidden', transform: 'translateY(100px)' },
        ], {
            duration: 500,
            easing: 'ease-in-out',
            fill: 'forwards',
        });
        inners.forEach(function (inner) {
            inner.animate([
                { opacity: '1', transform: 'translateY(0)' },
                { opacity: '0', transform: 'translateY(100%)' },
            ], {
                duration: 250,
                easing: 'ease-in-out',
                fill: 'forwards',
            });
        });
    } else {
        mobileMenu.open = true;
        if (window.scrollY < window.innerHeight) {
            window.scrollTo(0, window.innerHeight);
        }
        document.documentElement.style.overflow = 'hidden';
        mobileMenu.setAttribute('aria-hidden', 'false');
        mobileMenu.animate([
            { opacity: '0', visibility: 'hidden', transform: 'translateY(100px)' },
            { opacity: '1', visibility: 'visible', transform: 'translateY(0)' },
        ], {
            duration: 500,
            easing: 'ease-in-out',
            fill: 'forwards',
        });
        inners.forEach(function (inner, index) {
            setTimeout(() => {
                inner.animate([
                    { opacity: '0', transform: 'translateY(100%)' },
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
