import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

// Navbar start
const menuButton = document.getElementById("mobile-menu-button");
const mobileMenu = document.getElementById("mobile-menu");
const iconOpen = document.getElementById("icon-open");
const iconClose = document.getElementById("icon-close");
const navbar = document.getElementById("navbar");
const logoWhite = document.getElementById("logo-white");
const logoBlue = document.getElementById("logo-blue");
const whatsappChat = document.getElementById("whatsapp-chat-md-to-lg");
const whatsappLink = whatsappChat?.querySelector("a");

menuButton.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
    mobileMenu.classList.toggle("md:hidden");
    iconOpen.classList.toggle("hidden");
    iconClose.classList.toggle("hidden");

    // Jika menu terbuka, navbar putih & icon hitam
    if (!mobileMenu.classList.contains("hidden")) {
        navbar.classList.add("bg-white");
        // navbar.classList.remove("bg-transparent");
        iconOpen.classList.remove("text-black");
        iconOpen.classList.add("text-black");
        toggleLogo(true);
        toggleWhatsapp(true); // Logo biru
    } else {
        // Jika menu tertutup, cek posisi scroll
        if (window.scrollY > 50) {
            navbar.classList.add("bg-white");
            navbar.classList.remove("bg-transparent");
            iconOpen.classList.remove("text-black");
            iconOpen.classList.add("text-black");
            toggleLogo(true); // Logo biru
            toggleWhatsapp(true);
        } else {
            navbar.classList.remove("bg-white");
            navbar.classList.add("bg-transparent");
            iconOpen.classList.remove("text-black");
            iconOpen.classList.add("text-black");
            toggleLogo(false); // Logo putih
            toggleWhatsapp(false);
        }
    }
});

function toggleWhatsapp(isWhiteBg) {
    if (!whatsappLink) return;
    if (isWhiteBg) {
        whatsappLink.classList.remove("text-white", "border-b-white");
        whatsappLink.classList.add("text-black", "border-b-black");
    } else {
        whatsappLink.classList.remove("text-black", "border-b-black");
        whatsappLink.classList.add("text-white", "border-b-white");
    }
}

// Navbar background change on scroll
window.addEventListener("scroll", () => {
    // Jika menu terbuka, jangan ubah bg (biarkan putih)
    if (!mobileMenu.classList.contains("hidden")) return;

    if (window.scrollY > 50) {
        navbar.classList.add("bg-white");
        navbar.classList.remove("bg-transparent");
        iconOpen.classList.remove("text-white");
        iconOpen.classList.add("text-black");
        toggleWhatsapp(true); // Whatsapp hitam
    } else {
        navbar.classList.remove("bg-white");
        navbar.classList.add("bg-transparent");
        iconOpen.classList.remove("text-black");
        iconOpen.classList.add("text-white");
        toggleWhatsapp(false);
    }
});
// Navbar end

// gsap start
// window.addEventListener("DOMContentLoaded", () => {
//     // Animasi judul dan deskripsi hero
//     gsap.from("#hero-section", {
//         y: 60,
//         opacity: 0,
//         duration: 1,
//     });
// });

// gsap.from("#description-section", {
//     y: 60,
//     opacity: 0,
//     delay: 1,
//     duration: 1,
//     scrollTrigger: {
//         trigger: "#description-section",
//         start: "top 80%",
//         toggleActions: "play none none none",
//     },
// });

// gsap.from("#img-description-section", {
//     y: 60,
//     opacity: 0,
//     duration: 1,
//     scrollTrigger: {
//         trigger: "#img-description-section",
//         start: "top 80%",
//         toggleActions: "play none none none",
//     },
// });

// gsap.from("#another-projects-h2-section", {
//     y: 60,
//     opacity: 0,
//     duration: 1,
//     scrollTrigger: {
//         trigger: "#another-projects-h2-section",
//         start: "top 80%",
//         toggleActions: "play none none none",
//     },
// });

// gsap.from("#another-projects-grid-section", {
//     y: 60,
//     opacity: 0,
//     duration: 1,
//     scrollTrigger: {
//         trigger: "#another-projects-grid-section",
//         start: "top 80%",
//         toggleActions: "play none none none",
//     },
// });

// gsap.from("#another-projects-2-h2-section", {
//     y: 60,
//     opacity: 0,
//     duration: 1,
//     scrollTrigger: {
//         trigger: "#another-projects-2-h2-section",
//         start: "top 80%",
//         toggleActions: "play none none none",
//     },
// });

// gsap.from("#another-projects-2-img-section", {
//     y: 60,
//     opacity: 0,
//     duration: 1,
//     scrollTrigger: {
//         trigger: "#another-projects-2-img-section",
//         start: "top 80%",
//         toggleActions: "play none none none",
//     },
// });

// gsap.from("#next-projects-section", {
//     y: 60,
//     opacity: 0,
//     duration: 1,
//     scrollTrigger: {
//         trigger: "#next-projects-section",
//         start: "top 80%",
//         toggleActions: "play none none none",
//     },
// });

// gsap.from("#contact-us-section", {
//     y: 60,
//     opacity: 0,
//     duration: 1,
//     ease: "power2.out",
//     scrollTrigger: {
//         trigger: "#contact-us-section",
//         start: "top 80%",
//         toggleActions: "play none none none",
//     },
// });

// gsap.from("#big-hero-content-contact-us", {
//     y: 60,
//     opacity: 0,
//     duration: 1,
//     scrollTrigger: {
//         trigger: "#big-hero-content-contact-us",
//         start: "top 80%",
//         toggleActions: "play none none none",
//     },
// });

// gsap end
