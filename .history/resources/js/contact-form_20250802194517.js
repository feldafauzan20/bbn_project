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
    iconOpen.classList.toggle("hidden");
    iconClose.classList.toggle("hidden");

    // Jika menu terbuka, navbar putih & icon hitam
    if (!mobileMenu.classList.contains("hidden")) {
        navbar.classList.add("bg-white");
        navbar.classList.remove("bg-transparent");
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

// Fungsi toggle logo
function toggleLogo(isWhiteBg) {
    if (isWhiteBg) {
        logoWhite.classList.add("hidden");
        logoBlue.classList.remove("hidden");
    } else {
        logoWhite.classList.remove("hidden");
        logoBlue.classList.add("hidden");
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
        toggleLogo(true); // Logo biru
        toggleWhatsapp(true); // Whatsapp hitam
    } else {
        navbar.classList.remove("bg-white");
        navbar.classList.add("bg-transparent");
        iconOpen.classList.remove("text-black");
        iconOpen.classList.add("text-white");
        toggleLogo(false); // Logo putih
        toggleWhatsapp(false);
    }
});
// Navbar end

// gsap start
// window.addEventListener("DOMContentLoaded", () => {
//     // Animasi judul dan deskripsi hero
//     gsap.from("#big-hero-content-1", {
//         y: 50,
//         opacity: 0,
//         duration: 1,
//         delay: 0.2,
//     });
// });

// gsap.from("#big-hero-content-2", {
//     y: 60,
//     opacity: 0,
//     duration: 1,
//     scrollTrigger: {
//         trigger: "#big-hero-content-2",
//         start: "top 80%",
//         toggleActions: "play none none none",
//     },
// });

// gsap.from("#big-hero-content-4", {
//     y: 60,
//     opacity: 0,
//     duration: 1,
//     scrollTrigger: {
//         trigger: "#big-hero-content-4",
//         start: "top 80%",
//         toggleActions: "play none none none",
//     },
// });

// gsap.from("#middle-section", {
//     y: 60,
//     opacity: 0,
//     duration: 1,
//     scrollTrigger: {
//         trigger: "#middle-section",
//         start: "top 80%",
//         toggleActions: "play none none none",
//     },
// });

// gsap.from("#about-us", {
//     y: 60,
//     opacity: 0,
//     duration: 1,
//     scrollTrigger: {
//         trigger: "#about-us",
//         start: "top 80%",
//         toggleActions: "play none none none",
//     },
// });

// gsap.from("#big-hero-content-projects", {
//     y: 60,
//     opacity: 0,
//     duration: 1,
//     scrollTrigger: {
//         trigger: "#big-hero-content-projects",
//         start: "top 80%",
//         toggleActions: "play none none none",
//     },
// });

// gsap.from("#big-hero-content-projects-h2", {
//     y: 60,
//     opacity: 0,
//     duration: 1,
//     scrollTrigger: {
//         trigger: "#big-hero-content-projects-h2",
//         start: "top 80%",
//         toggleActions: "play none none none",
//     },
// });

// gsap.from("#big-hero-content-projects-p", {
//     y: 60,
//     opacity: 0,
//     duration: 1,
//     scrollTrigger: {
//         trigger: "#big-hero-content-projects-p",
//         start: "top 80%",
//         toggleActions: "play none none none",
//     },
// });

// gsap.from("#big-hero-content-projects-grid-clients", {
//     opacity: 0,
//     delay: 0.5,
//     duration: 3,
//     ease: "power2.out",
//     scrollTrigger: {
//         trigger: "#big-hero-content-projects-grid-clients",
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
