import Cookies from 'js-cookie';

let alert = document.querySelector(".tih-alert");
let alertContainer = document.querySelector(".tih-alert__container");
let alertContent = document.querySelector(".tih-alert__content");
let alertClose = document.querySelector(".tih-alert__close");


const openAlert = () => {
    setTimeout(() => {
        console.log(alertContent.scrollHeight);
        alertContainer.animate([
            { maxHeight: 0, offset: 0 },
            { maxHeight: alertContent.scrollHeight + "px", offset: 1 },
            { maxHeight: "unset", offset: 1 }
        ], {
            duration: 500,
            easing: "ease-in-out",
            fill: "forwards"
        });
        setTimeout(() => {
            alertClose.animate([
                { opacity: 0, visibility: "hidden", offset: 0 },
                { opacity: 1, visibility: "visible", offset: 1 }
            ], {
                duration: 500,
                easing: "ease-in-out",
                fill: "forwards"
            });
        }, 850);
    }, 2000);
}

const closeAlert = () => {
    alertContainer.animate([
        { maxHeight: alertContent.scrollHeight + "px", offset: 0 },
        { maxHeight: 0, offset: 1 }
    ], {
        duration: 500,
        easing: "ease-in-out",
        fill: "forwards"
    });
    alertClose.animate([
        { opacity: 1, visibility: "visible", offset: 0 },
        { opacity: 0, visibility: "hidden", offset: 1 }
    ], {
        duration: 500,
        easing: "ease-in-out",
        fill: "forwards"
    });
}

window.addEventListener("load", function () {
    if (Cookies.get("tih-alert-closed")) {
        return;
    }
    openAlert();

    alertClose.addEventListener("click", function (e) {
        e.stopPropagation();
        Cookies.set("tih-alert-closed", "true", { expires: 7 });
        closeAlert();
    });

    alert.addEventListener("click", function () {
        Cookies.set("tih-alert-closed", "true", { expires: 7 });
        window.location.href = "/abstimmung";
    });
});
