
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

// Fungsi untuk update indikator
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

// GSAP animation start
gsap.from("#hero-section", {
    y: 50,
    opacity: 0,
    duration: 1,
    delay: 0.2,
});

gsap.from("#services-section", {
    y: 60,
    delay: 1,
    opacity: 0,
    duration: 1.5,
    scrollTrigger: {
        trigger: "#services-section",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

gsap.from("#big-hero-content-contact-us", {
    y: 60,
    delay: 0,
    opacity: 0,
    duration: 1.5,
    scrollTrigger: {
        trigger: "#big-hero-content-contact-us",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});
// GSAP animation end

// --- Carousel start ---
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
                    const indicatorButton = document.createElement('button');
                    indicatorButton.type = 'button';
                    indicatorButton.className = 'indicator-item'; // Tambahkan kelas untuk custom CSS
                    indicatorsForCarousel.push({
                        position: index,
                        el: indicatorButton,
                    });
                });
                
                // --- Kode Inisialisasi Carousel yang Dipindahkan ke Sini ---
                // Pastikan elemen indikator dibuat di HTML terlebih dahulu
                const indicatorsContainer = document.querySelector('[data-carousel-indicators]');

                const options = {
                    defaultPosition: 0,
                    interval: 3000,
                    indicators: {
                        activeClasses: "border-t-2 border-black",
                        inactiveClasses: "border-t-0 border-black/60 bg-transparent",
                        items: indicatorsForCarousel, // Gunakan indikator yang dibuat dinamis
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