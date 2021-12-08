const card = document.querySelector(".card");
const THRESHOLD = 5;
const motionMatchMedia = window.matchMedia("(prefers-reduced-motion)");

function handleHover(e) {
    const {clientX, clientY, currentTarget} = e;
    const {clientWidth, clientHeight, offsetLeft, offsetTop} = currentTarget;

    const horizontal = (clientX - offsetLeft) / clientWidth;
    const vertical = (clientY - offsetTop) / clientHeight;

    const rotateX = (THRESHOLD / 2 - horizontal * THRESHOLD).toFixed(3);
    const rotateY = (vertical * THRESHOLD - THRESHOLD / 2).toFixed(3);

    card.style.transform =
        `perspective(${clientWidth}px) rotateX(${rotateY}deg) rotateY(${rotateX}deg) scale3d(1, 1, 1)`;
}

function resetStyles(e) {
    card.style.transform =
        `perspective(${e.currentTarget.clientWidth}px) rotateX(0deg) rotateY(0deg)`;
}

if (!motionMatchMedia.matches) {
    card.addEventListener("mousemove", handleHover);
    card.addEventListener("mouseleave", resetStyles);
}
