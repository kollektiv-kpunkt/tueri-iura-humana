import ScrollReveal from 'scrollreveal'

window.addEventListener('load', () => {
    let sections = document.querySelectorAll(".tih-content-section:not(#intro)");
    sections.forEach(section => {
        let sr = ScrollReveal({
            origin: "bottom",
            distance: "100px",
            opacity: 0,
            duration: 1000,
            reset: false,
            delay: 500,
        });
        sr.reveal(section);
    });
});
