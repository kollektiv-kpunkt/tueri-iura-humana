import ScrollReveal from 'scrollreveal'

window.addEventListener('load', function () {
    let donationBar = document.querySelector('.tih-donation-bar');
    if (!donationBar) return;
    let donationBarInner = donationBar.querySelector('.tih-donation-bar__inner');
    let reveal = ScrollReveal({
        reset: true,
        distance: '0',
        afterReveal: function () {
            donationBarInner.animate([
                { width: '0' },
                { width: donationBarInner.dataset.percentage + '%' },
            ], {
                duration: 500,
                easing: 'ease-in-out',
                fill: 'forwards',
            });
            setTimeout(() => {
                donationBarInner.querySelector('.tih-donation-bar__amount').animate([
                    { opacity: '0' },
                    { opacity: '1' },
                ], {
                    duration: 550,
                    easing: 'ease-in-out',
                    fill: 'forwards',
                });
            }, 750);
        },
    });
    reveal.reveal(donationBar);
});
