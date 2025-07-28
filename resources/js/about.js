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
    iconOpen.classList.toggle("hidden");
    iconClose.classList.toggle("hidden");
});

// Navbar end

// gsap start
window.addEventListener("DOMContentLoaded", () => {
    // Animasi judul dan deskripsi hero
    gsap.from("#section-1-about", {
        y: 50,
        opacity: 0,
        duration: 1,
        delay: 0.2,
    });
});

gsap.from("#section-2-about", {
    y: 60,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: "#section-2-about",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

gsap.from("#section-3-about", {
    y: 60,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: "#section-3-about",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

gsap.from("#section-4-about", {
    y: 60,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: "#section-4-about",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

gsap.from("#section-5-about-1", {
    y: 60,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: "#section-5-about-1",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

gsap.from("#section-5-about-2", {
    y: 60,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: "#section-5-about-2",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

gsap.from("#section-6-about", {
    y: 60,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: "#section-6-about",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

gsap.from("#contact-us-about", {
    y: 60,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: "#contact-us-about",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

// gsap end
