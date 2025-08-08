import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

// Navbar start
const menuButton = document.getElementById("mobile-menu-button");
const mobileMenu = document.getElementById("mobile-menu");
const iconOpen = document.getElementById("icon-open");
const iconClose = document.getElementById("icon-close");

menuButton.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
    mobileMenu.classList.toggle("md:hidden");
    iconOpen.classList.toggle("hidden");
    iconClose.classList.toggle("hidden");
});
// Navbar end

// gsap start
window.addEventListener("DOMContentLoaded", () => {
    // Animasi judul dan deskripsi hero
    gsap.from("#hero-section", {
        y: 50,
        opacity: 0,
        duration: 1,
        delay: 0.2,
    });
});

gsap.from("#clients-section", {
    opacity: 0,
    delay: 1,
    duration: 2,
    ease: "power2.out",
    scrollTrigger: {
        trigger: "#clients-section",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

gsap.from("#big-hero-content-contact-us", {
    y: 60,
    opacity: 0,
    duration: 1.5,
    scrollTrigger: {
        trigger: "#big-hero-content-contact-us",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

// gsap end
