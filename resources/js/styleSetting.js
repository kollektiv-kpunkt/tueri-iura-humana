const styleSetting = () => {
    const vh = window.innerHeight * 0.01;
    const vw = window.innerWidth * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
    document.documentElement.style.setProperty('--vw', `${vw}px`);
};

window.addEventListener('resize', styleSetting);
document.addEventListener('DOMContentLoaded', styleSetting);
