import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { Carousel } from "flowbite";

gsap.registerPlugin(ScrollTrigger);

// Navbar start
const menuButton = document.getElementById("mobile-menu-button");
const mobileMenu = document.getElementById("mobile-menu");
const iconOpen = document.getElementById("icon-open");
const iconClose = document.getElementById("icon-close");

if (menuButton) {
    menuButton.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
        iconOpen.classList.toggle("hidden");
        iconClose.classList.toggle("hidden");
    });
}
// Navbar end

// GSAP animation start
gsap.from("#hero-section", {
    y: 50,
    opacity: 0,
    duration: 1,
    delay: 0.2,
});

gsap.from("#card-1-projects", {
    y: 60,
    delay: 1,
    opacity: 0,
    duration: 1.5,
    scrollTrigger: {
        trigger: "#card-1-projects",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

gsap.from("#card-2-projects", {
    y: 60,
    delay: 0,
    opacity: 0,
    duration: 1.5,
    scrollTrigger: {
        trigger: "#card-2-projects",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

gsap.from("#card-5-projects", {
    y: 60,
    delay: 0,
    opacity: 0,
    duration: 1.5,
    scrollTrigger: {
        trigger: "#card-5-projects",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

gsap.from("#card-below", {
    y: 60,
    delay: 0,
    opacity: 0,
    duration: 1.5,
    scrollTrigger: {
        trigger: "#card-below",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

gsap.from("#big-hero-content-projects-grid-clients", {
    opacity: 0,
    delay: 0.5,
    duration: 3,
    ease: "power2.out",
    scrollTrigger: {
        trigger: "#big-hero-content-projects-grid-clients",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});
// GSAP animation end

// --- Carousel start ---
let currentPosition = 0;
function updateVisibleIndicators(activeIndex) {
    const allIndicators = document.querySelectorAll(".indicator-item");
    allIndicators.forEach((el, index) => {
        el.classList.remove("flex", "hidden");

        if (window.innerWidth < 1024) {
            if (index === activeIndex || index === activeIndex + 1) {
                el.classList.add("flex");
            } else {
                el.classList.add("hidden");
            }
        } else {
            el.classList.add("flex");
        }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    const apiUrl = 'http://127.0.0.1:8000/api/content/services';
    const carouselContainer = document.getElementById('testimonial-carousel-container');
    const myCarouselElement = document.getElementById('my-carousel');

    if (!carouselContainer || !myCarouselElement) {
        console.error('Elemen #testimonial-carousel-container atau #my-carousel tidak ditemukan.');
        return;
    }

    fetch(apiUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error('Gagal mengambil data dari API.');
            }
            return response.json();
        })
        .then(services => {
            if (services.length > 0) {
                let itemsForCarousel = [];
                let indicatorsForCarousel = [];

                services.forEach((service, index) => {
                    // Membuat item testimonial secara dinamis
                    const carouselItem = document.createElement('div');
                    carouselItem.classList.add('hidden', 'duration-700', 'ease-in-out');
                    carouselItem.id = `carousel-item-${index + 1}`;
                    carouselItem.innerHTML = `
                        <h2 class="text-black text-4xl lg:text-6xl lg:leading-16 font-semibold tracking-tightest leading-10">
                            “${service.testimonial}”
                        </h2>
                    `;
                    carouselContainer.appendChild(carouselItem);
                    
                    itemsForCarousel.push({
                        position: index,
                        el: carouselItem,
                    });
                    
                    // Membuat indikator secara dinamis
                    // Asumsi ada div dengan data-carousel-indicators di HTML Anda
                    const indicatorButton = document.createElement('button');
                    indicatorButton.type = 'button';
                    indicatorButton.className = 'indicator-item';
                    indicatorsForCarousel.push({
                        position: index,
                        el: indicatorButton,
                    });
                });
                
                // Inisialisasi carousel setelah elemen dibuat
                const options = {
                    defaultPosition: 0,
                    interval: 3000,
                    indicators: {
                        activeClasses: "border-t-2 border-black",
                        inactiveClasses: "border-t-0 border-black/60 bg-transparent",
                        items: indicatorsForCarousel,
                    },
                    onChange: (carousel) => {
                        currentPosition = carousel._activeItem?.position ?? 0;
                        updateVisibleIndicators(currentPosition);
                    },
                };
                
                const instanceOptions = {
                    id: "my-carousel",
                    override: true,
                };
                
                const carousel = new Carousel(myCarouselElement, itemsForCarousel, options, instanceOptions);
                carousel.cycle();

                // Panggil fungsi setelah semua elemen dibuat dan carousel diinisialisasi
                updateVisibleIndicators(currentPosition);

                window.addEventListener("resize", () => {
                    updateVisibleIndicators(currentPosition);
                });
                
            } else {
                carouselContainer.innerHTML = '<p>Tidak ada testimonial yang tersedia.</p>';
            }
        })
        .catch(error => {
            console.error('Error:', error);
            carouselContainer.innerHTML = '<p>Gagal memuat testimonial.</p>';
        });
});
// --- Carousel end ---

// --- Projects Gallery Start ---
document.addEventListener('DOMContentLoaded', function() {
    const apiUrl = 'http://127.0.0.1:8000/api/content/projects-gallery';

    // Fungsi untuk memotong teks dan menambahkan elipsis
    function truncateText(text, maxLength) {
        if (!text) return '';
        if (text.length > maxLength) {
            return text.substring(0, maxLength) + '...';
        }
        return text;
    }
    
    fetch(apiUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error('Gagal mengambil data dari API.');
            }
            return response.json();
        })
        .then(projects => {
            if (projects.length > 0) {
                for (let i = 0; i < 6; i++) {
                    const card = document.getElementById(`card-${i + 1}-projects`);
                    const project = projects[i];

                    if (!card || !project) {
                        if (card) card.style.display = 'none';
                        continue;
                    }

                    const img = card.querySelector('img');
                    const title = card.querySelector('h5');
                    const desc = card.querySelector('p');
                    const link = card.querySelector('a');

                    if (img) img.src = `/storage/${project.foto_head}`;
                    if (img) img.alt = project.judul;
                    if (title) title.textContent = project.judul;
                    
                    // Baris ini yang diubah: Memotong deskripsi menjadi 180 karakter
                    if (desc) desc.textContent = truncateText(project.desc_lengkap, 180);
                    
                    if (link) link.href = `/projects/${project.id}`;
                }
            } else {
                const container = document.querySelector('.grid.grid-cols-1.md\\:grid-cols-2');
                if (container) {
                    container.innerHTML = '<p class="text-center text-gray-500 col-span-full">Tidak ada proyek yang tersedia.</p>';
                }
            }
        })
        .catch(error => {
            console.error('Error fetching project gallery:', error);
            const container = document.querySelector('.grid.grid-cols-1.md\\:grid-cols-2');
            if (container) {
                container.innerHTML = '<p class="text-center text-red-500 col-span-full">Gagal memuat proyek.</p>';
            }
        });
});
// --- Projects Gallery End ---