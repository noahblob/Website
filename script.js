// JS for hiding navbar on scroll down and showing on scroll up

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

// JS for anchor links smooth scroll

document.querySelectorAll('a[href^="#"]').forEach(anchor => { 
    anchor.addEventListener("click", function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute("href")).scrollIntoView({
            behavior: "smooth"
        });
    })
});