import Typewriter from 'typewriter-effect/dist/core';
import Cookies from 'js-cookie';

let title;
let typewriter;
let p;
let proceedButtonWrapper;
let proceedButton;

window.addEventListener("load", function () {
    title = document.querySelector("#intro h1 span");
    typewriter = new Typewriter(title, {
        loop: false,
        delay: 75,
        deleteSpeed: 75
    });
    p = document.querySelector("#intro p")
    proceedButtonWrapper = document.querySelector("#intro .tih-proceed-button");
    proceedButton = proceedButtonWrapper.querySelector("span");
    proceedButton.addEventListener("click", function () {
        let intro = document.querySelector("#intro");
        window.scrollTo(0, intro.scrollHeight);
    });

    if (Cookies.get('tih-cookie-consent') === undefined) {
        Cookies.set('tih-cookie-consent', 'true', { expires: 1 });
        document.addEventListener('DOMContentLoaded', function () {
            if (!window.location.hash) {
                window.scrollTo(0, 0);
                document.body.style.overflow = "hidden";
            }
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

        setTimeout(() => {
            proceedButtonWrapper.animate([
                { opacity: 1, transform: "translateY(100%)", offset: 0 },
                { opacity: 1, transform: "translateY(0)", offset: 1 }
            ], {
                duration: 1000,
                fill: "forwards",
                easing: "cubic-bezier(0.215, 0.61, 0.355, 1)"
            });
            document.body.style.overflow = "unset";
        }, 16000);

    } else {
        p.animate([
            { opacity: 0, maxHeight: 0, offset: 0 },
            { opacity: 1, maxHeight: p.scrollHeight + "px", offset: 0.99 },
            { opacity: 1, maxHeight: "unset", offset: 1 }
        ], {
            duration: 1000,
            fill: "forwards",
            easing: "ease-in-out"
        });
        proceedButtonWrapper.animate([
            { opacity: 1, transform: "translateY(100%)", offset: 0 },
            { opacity: 1, transform: "translateY(0)", offset: 1 }
        ], {
            duration: 1000,
            fill: "forwards",
            easing: "cubic-bezier(0.215, 0.61, 0.355, 1)"
        });
    }
});
