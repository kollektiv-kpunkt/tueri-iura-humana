import ScrollReveal from 'scrollreveal'

window.addEventListener('load', () => {
    let sections = document.querySelectorAll(".tih-content-section:not(#intro)");
    let elements = document.querySelectorAll(".tih-appear-on-scroll");
    let sr = ScrollReveal({
        origin: "bottom",
        distance: "100px",
        opacity: 0,
        duration: 1000,
        reset: false,
        delay: 500,
    });
    sections.forEach(section => {
        sr.reveal(section);
    });
    elements.forEach(element => {
        sr.reveal(element);
    });
});
