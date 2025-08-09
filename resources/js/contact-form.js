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
    iconClose.classList.toggle("hidden");;

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
window.addEventListener("DOMContentLoaded", () => {
    // Animasi judul dan deskripsi hero
    gsap.from("#hero-section", {
        y: 60,
        opacity: 0,
        duration: 1,
        delay: 0.2,
    });
});

gsap.from("#journal-section", {
    y: 60,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: "#journal-section",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

gsap.from("#contact-us-section", {
    y: 60,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: "#contact-us-section",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

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

// Featured Projects Section

document.addEventListener('DOMContentLoaded', function() {
    const apiUrl = 'http://127.0.0.1:8000/api/content/featured-projects';
    const container = document.getElementById('featured-projects-container');

    fetch(apiUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(projects => {
            if (projects.length > 0) {
                projects.forEach(project => {
                    const cardHtml = `
                        <div class="rounded-[20px] overflow-hidden">
                            <div class="relative w-90 lg:w-full h-96 rounded-xl overflow-hidden bg-cover bg-center"
                                style="background-image: url('/storage/${project.foto_head}');">

                                <div class="absolute inset-0 bg-black/60"></div>

                                <div class="relative h-full flex items-end px-6 py-8">
                                    <div class="tracking-tightest">
                                        <div class="w-64 mb-2.5">
                                            <h2 class="text-white text-2xl font-medium leading-9">
                                                ${project.judul}
                                            </h2>
                                        </div>
                                        <div
                                            class="border-b border-b-white w-fit transition duration-500 hover:border-b-blue-500">
                                            <a href="/projects/${project.id}"
                                                class="text-white text-lg hover:text-blue-500 transition duration-500 font-medium leading-relaxed tracking-tight">
                                                Read more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    container.innerHTML += cardHtml;
                });
            } else {
                container.innerHTML = '<p class="text-gray-500 text-center col-span-full">Tidak ada proyek unggulan.</p>';
            }
        })
        .catch(error => {
            console.error('Error fetching featured projects:', error);
            container.innerHTML = '<p class="text-red-500 text-center col-span-full">Gagal memuat proyek.</p>';
        });
});
