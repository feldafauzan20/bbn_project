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
    gsap.from("#hero-section", {
        y: 50,
        opacity: 0,
        duration: 1,
        delay: 0.2,
    });
});

gsap.from("#experiences-section", {
    y: 60,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: "#experiences-section",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

gsap.from("#best-from-us-section", {
    y: 60,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: "#best-from-us-section",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

gsap.from("#services-section-1", {
    y: 60,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: "#services-section-1",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

gsap.from("#services-section-2", {
    y: 60,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: "#services-section-2",
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
