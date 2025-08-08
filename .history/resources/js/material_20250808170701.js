import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import Swiper from "swiper";
import "swiper/css";
gsap.registerPlugin(ScrollTrigger);

// Swiper start
const swiper1 = new Swiper(".swiper1", {
    slidesPerView: "auto",
    spaceBetween: 30,
    grabCursor: true,
    freeMode: true,
});

const swiper2 = new Swiper(".swiper2", {
    slidesPerView: "auto",
    spaceBetween: 30,
    grabCursor: true,
    freeMode: true,
});
// Swiper end

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

gsap.from("#consultant-section", {
    y: 60,
    delay: 1,
    opacity: 0,
    duration: 1.5,
    scrollTrigger: {
        trigger: "#consultant-section",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

gsap.from("#planner-section", {
    y: 60,
    opacity: 0,
    duration: 1.5,
    scrollTrigger: {
        trigger: "#planner-section",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

gsap.from("#construction-section", {
    y: 60,
    opacity: 0,
    duration: 1.5,
    scrollTrigger: {
        trigger: "#construction-section",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

gsap.from("#final-review-section", {
    y: 60,
    opacity: 0,
    duration: 1.5,
    scrollTrigger: {
        trigger: "#final-review-section",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

gsap.from("#journal-section", {
    y: 60,
    opacity: 0,
    duration: 1.5,
    scrollTrigger: {
        trigger: "#journal-section",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

gsap.from("#contact-us-section", {
    y: 60,
    opacity: 0,
    duration: 1.5,
    scrollTrigger: {
        trigger: "#contact-us-section",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

// gsap end
