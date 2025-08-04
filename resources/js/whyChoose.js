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