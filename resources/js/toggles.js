window.addEventListener("click", (e) => {
    let toggle = e.target.closest(".tih-details-toggle");
    if (!toggle) return;
    if (e.target.closest(".tih-details-toggle__content")) return;
    let content = toggle.querySelector(".tih-details-toggle__content");
    let icon = toggle.querySelector(".tih-details-toggle__icon-wrapper");
    if (toggle.open) {
        content.animate([
            { maxHeight: content.scrollHeight + "px", offset: 0 },
            { maxHeight: 0, offset: 1 }
        ], {
            duration: 500,
            fill: "forwards",
            easing: "ease-in-out"
        });
        icon.animate([
            { transform: "rotate(180deg)", offset: 0 },
            { transform: "rotate(0)", offset: 1 }
        ], {
            duration: 500,
            fill: "forwards",
            easing: "ease-in-out"
        });
        toggle.open = false;
    } else {
        content.animate([
            { maxHeight: 0, offset: 0 },
            { maxHeight: content.scrollHeight + "px", offset: 1 },
            { maxHeight: "unset", offset: 1 }
        ], {
            duration: 500,
            fill: "forwards",
            easing: "ease-in-out"
        });
        icon.animate([
            { transform: "rotate(0)", offset: 0 },
            { transform: "rotate(180deg)", offset: 1 }
        ], {
            duration: 500,
            fill: "forwards",
            easing: "ease-in-out"
        });
        toggle.open = true;
    }
});
