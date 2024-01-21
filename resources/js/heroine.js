import Typewriter from 'typewriter-effect/dist/core';

document.addEventListener('DOMContentLoaded', function () {
    window.scrollTo(0, 0);
    document.body.style.overflow = "hidden";
});


window.addEventListener('load', function () {
    let title = document.querySelector("#intro h1 span");
    let typewriter = new Typewriter(title, {
        loop: false,
        delay: 75,
        deleteSpeed: 75
    });

    setTimeout(() => {
        typewriter.typeString('Demokratie.')
            .pauseFor(1000)
            .deleteAll()
            .typeString('unser Recht.')
            .pauseFor(500)
            .deleteAll()
            .changeDelay(50)
            .changeDeleteSpeed(50)
            .typeString('Fortschritt.')
            .pauseFor(100)
            .deleteAll()
            .changeDelay(25)
            .changeDeleteSpeed(25)
            .typeString("Feminismus.")
            .pauseFor(10)
            .deleteAll()
            .typeString("Pride.")
            .pauseFor(10)
            .deleteAll()
            .typeString("Vielfalt.")
            .pauseFor(5)
            .deleteAll()
            .changeDelay(100)
            .changeDeleteSpeed(100)
            .typeString("kein Verbrechen.")
            .start();
    }, 1000);

    setTimeout(() => {
        let p = document.querySelector("#intro p")
        p.animate([
            { opacity: 0, maxHeight: 0, offset: 0 },
            { opacity: 1, maxHeight: p.scrollHeight + "px", offset: 0.99 },
            { opacity: 1, maxHeight: "unset", offset: 1 }
        ], {
            duration: 1000,
            fill: "forwards",
            easing: "ease-in-out"
        });
    }, 15000);

    let proceedButton = document.querySelector("#intro .tih-proceed-button");
    proceedButton.addEventListener("click", function () {
        let intro = document.querySelector("#intro");
        window.scrollTo(0, intro.scrollHeight);
    });

    setTimeout(() => {
        proceedButton.animate([
            { opacity: 1, transform: "translateY(100%)", offset: 0 },
            { opacity: 1, transform: "translateY(0)", offset: 1 }
        ], {
            duration: 1000,
            fill: "forwards",
            easing: "cubic-bezier(0.215, 0.61, 0.355, 1)"
        });
        document.body.style.overflow = "unset";
    }, 16000);


});
