const nav = document.querySelector(".navbar");
let lastScrollY = window.scrollY;

window.addEventListener("scroll", () => {
    const scrollY = window.scrollY;
    if (scrollY > lastScrollY) {
        nav.classList.add("navbar--hidden");
    } else {
        nav.classList.remove("navbar--hidden");
    }
    lastScrollY = scrollY;
});