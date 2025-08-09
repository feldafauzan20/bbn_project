import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { Carousel } from "flowbite";

gsap.registerPlugin(ScrollTrigger);

// Navbar start
const menuButton = document.getElementById("mobile-menu-button");
const mobileMenu = document.getElementById("mobile-menu");
const iconOpen = document.getElementById("icon-open");
const iconClose = document.getElementById("icon-close");

if (menuButton && mobileMenu) {
    menuButton.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
        mobileMenu.classList.toggle("md:hidden");
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

// Image Loading Helper Functions Start
function createImageSkeleton() {
    const skeleton = document.createElement('div');
    skeleton.className = 'image-skeleton absolute inset-0 bg-gradient-to-r from-gray-200 via-gray-300 to-gray-200 animate-pulse rounded';
    skeleton.style.backgroundSize = '200% 100%';
    skeleton.style.animation = 'shimmer 1.5s infinite linear';
    return skeleton;
}

function createLoadingSpinner() {
    const spinner = document.createElement('div');
    spinner.className = 'loading-spinner absolute inset-0 flex items-center justify-center bg-gray-100 rounded';
    spinner.innerHTML = `
        <div class="w-8 h-8 border-4 border-gray-300 border-t-blue-500 rounded-full animate-spin"></div>
    `;
    return spinner;
}

function setupImageLoading(img, container) {
    // Set container position relative jika belum
    if (getComputedStyle(container).position === 'static') {
        container.style.position = 'relative';
    }
    
    // Sembunyikan image dari awal dan reset src
    img.style.opacity = '0';
    img.style.visibility = 'hidden';
    img.style.transition = 'opacity 0.3s ease-in-out, visibility 0.3s ease-in-out';
    
    // Buat loading elements
    const skeleton = createImageSkeleton();
    const spinner = createLoadingSpinner();
    
    // Tambahkan loading elements ke container
    container.appendChild(skeleton);
    container.appendChild(spinner);
    
    // Store original src
    const originalSrc = img.getAttribute('data-src') || img.src;
    
    // Clear src untuk mencegah loading otomatis
    img.removeAttribute('src');
    
    // Handle successful image load
    img.onload = function() {
        // Fade in image
        img.style.opacity = '1';
        img.style.visibility = 'visible';
        
        // Remove loading elements dengan delay untuk smooth transition
        setTimeout(() => {
            if (skeleton.parentNode) skeleton.remove();
            if (spinner.parentNode) spinner.remove();
        }, 300);
    };
    
    // Handle error loading
    img.onerror = function() {
        // Buat placeholder error
        const errorPlaceholder = document.createElement('div');
        errorPlaceholder.className = 'absolute inset-0 bg-gray-200 flex items-center justify-center rounded';
        errorPlaceholder.innerHTML = `
            <div class="text-center text-gray-500">
                <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                <p class="text-sm">Gambar tidak dapat dimuat</p>
            </div>
        `;
        
        // Remove loading elements
        if (skeleton.parentNode) skeleton.remove();
        if (spinner.parentNode) spinner.remove();
        
        // Add error placeholder
        container.appendChild(errorPlaceholder);
        
        // Hide broken image completely
        img.style.display = 'none';
    };
    
    // Start loading image setelah setup selesai
    setTimeout(() => {
        img.src = originalSrc;
    }, 50);
}

// Add shimmer animation CSS dynamically
if (!document.querySelector('#shimmer-animation')) {
    const style = document.createElement('style');
    style.id = 'shimmer-animation';
    style.textContent = `
        @keyframes shimmer {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }
        .image-skeleton {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: shimmer 1.5s infinite linear;
        }
    `;
    document.head.appendChild(style);
}
// Image Loading Helper Functions End

// --- TESTIMONIAL CAROUSEL START ---
let testimonialCarousel = null;
let testimonialsData = [];

async function loadTestimonials() {
    try {
        const response = await fetch('/api/content/services');
        const services = await response.json();
        
        // Filter services that have testimonial data
        testimonialsData = services.filter(service => 
            service.testimonial && 
            service.nama && 
            service.jabatan &&
            service.testimonial.trim() !== '' &&
            service.nama.trim() !== '' &&
            service.jabatan.trim() !== ''
        );
        
        if (testimonialsData && testimonialsData.length > 0) {
            renderTestimonials(testimonialsData);
            initializeTestimonialCarousel(testimonialsData);
        } else {
            // No testimonials found, use static content
            showStaticTestimonialContent();
        }
    } catch (error) {
        console.error('Error loading testimonials:', error);
        // Fallback to existing static content if API fails
        showStaticTestimonialContent();
    }
}

function renderTestimonials(testimonials) {
    const carouselContainer = document.querySelector('#my-carousel .testimonial-content');
    const indicatorsContainer = document.querySelector('#my-carousel .testimonial-indicators');
    const loadingElement = document.getElementById('testimonial-loading');
    
    if (!carouselContainer || !indicatorsContainer) return;
    
    // Hide loading
    if (loadingElement) {
        loadingElement.style.display = 'none';
    }
    
    // Show carousel containers
    carouselContainer.style.display = 'block';
    indicatorsContainer.style.display = 'flex';
    
    // Clear existing content
    carouselContainer.innerHTML = '';
    indicatorsContainer.innerHTML = '';
    
    // Render testimonial items
    testimonials.forEach((testimonial, index) => {
        // Create testimonial slide - hanya yang pertama yang visible
        const slideDiv = document.createElement('div');
        slideDiv.className = index === 0 ? 
            'duration-700 ease-in-out block' : 
            'duration-700 ease-in-out hidden';
        slideDiv.id = `carousel-item-${index + 1}`;
        
        slideDiv.innerHTML = `
            <h2 class="text-black text-4xl lg:text-6xl lg:leading-16 font-semibold tracking-tightest leading-10">
                "${testimonial.testimonial}"
            </h2>
        `;
        
        carouselContainer.appendChild(slideDiv);
        
        // Create indicator yang bisa diklik
        const indicatorDiv = document.createElement('div');
        const isVisibleOnMobile = index < 2;
        const baseClasses = 'gap-y-2.5 pt-8 md:pt-13 border-t-1 w-1/2 indicator-item cursor-pointer transition-all duration-300';
        
        // Set classes berdasarkan visibility dan active state
        if (index === 0) {
            // Active indicator
            indicatorDiv.className = isVisibleOnMobile ? 
                `${baseClasses} border-t-2 border-black block lg:block` : 
                `${baseClasses} border-t-2 border-black hidden lg:block`;
        } else {
            // Inactive indicators
            indicatorDiv.className = isVisibleOnMobile ? 
                `${baseClasses} border-black/60 block lg:block hover:border-black/80` : 
                `${baseClasses} border-black/60 hidden lg:block hover:border-black/80`;
        }
        
        indicatorDiv.id = `carousel-indicator-${index + 1}`;
        indicatorDiv.setAttribute('aria-label', `Slide ${index + 1}`);
        indicatorDiv.setAttribute('data-position', index);
        
        indicatorDiv.innerHTML = `
            <div>
                <h2 class="text-black text-lg font-semibold leading-relaxed tracking-tightest">
                    ${testimonial.nama}
                </h2>
            </div>
            <div>
                <h3 class="text-black text-lg font-normal leading-relaxed tracking-tight">
                    ${testimonial.jabatan}
                </h3>
            </div>
        `;
        
        // Add click event untuk manual navigation
        indicatorDiv.addEventListener('click', () => {
            if (testimonialCarousel) {
                testimonialCarousel.slideTo(index);
            }
        });
        
        indicatorsContainer.appendChild(indicatorDiv);
    });
}

function showStaticTestimonialContent() {
    const loadingElement = document.getElementById('testimonial-loading');
    const staticContent = document.getElementById('static-testimonials');
    
    if (loadingElement) {
        loadingElement.style.display = 'none';
    }
    
    if (staticContent) {
        staticContent.style.display = 'block';
        initializeStaticTestimonialCarousel();
    }
}

function initializeTestimonialCarousel(testimonials) {
    const carouselElement = document.getElementById("my-carousel");
    
    if (!carouselElement) return;
    
    // Destroy existing carousel if it exists
    if (testimonialCarousel) {
        try {
            testimonialCarousel.destroy();
        } catch (error) {
            console.log('Error destroying testimonial carousel:', error);
        }
    }
    
    // Build items array dynamically
    const items = testimonials.map((_, index) => ({
        position: index,
        el: document.getElementById(`carousel-item-${index + 1}`),
    })).filter(item => item.el); // Filter out null elements
    
    // Build indicators array dynamically
    const indicators = testimonials.map((_, index) => ({
        position: index,
        el: document.getElementById(`carousel-indicator-${index + 1}`),
    })).filter(item => item.el);
    
    if (items.length === 0) return;
    
    const options = {
        defaultPosition: 0,
        interval: 5000, // 5 detik auto slide
        indicators: {
            activeClasses: "border-t-2 border-black",
            inactiveClasses: "border-t-1 border-black/60",
            items: indicators,
        },
        onChange: (carousel) => {
            const currentPosition = carousel._activeItem?.position ?? 0;
            updateVisibleTestimonialIndicators(currentPosition);
            updateActiveTestimonialIndicator(currentPosition);
        },
    };
    
    const instanceOptions = {
        id: "my-carousel",
        override: true,
    };
    
    try {
        testimonialCarousel = new Carousel(carouselElement, items, options, instanceOptions);
        testimonialCarousel.cycle();
        
        // Initial setup
        updateVisibleTestimonialIndicators(0);
        updateActiveTestimonialIndicator(0);
    } catch (error) {
        console.error('Error initializing testimonial carousel:', error);
    }
}

function updateActiveTestimonialIndicator(activeIndex) {
    const allIndicators = document.querySelectorAll("#my-carousel .indicator-item");
    allIndicators.forEach((el, index) => {
        if (index === activeIndex) {
            // Active indicator
            el.classList.remove("border-t-1", "border-black/60");
            el.classList.add("border-t-2", "border-black");
        } else {
            // Inactive indicators
            el.classList.remove("border-t-2", "border-black");
            el.classList.add("border-t-1", "border-black/60");
        }
    });
}

function updateVisibleTestimonialIndicators(activeIndex) {
    const allIndicators = document.querySelectorAll("#my-carousel .indicator-item");
    allIndicators.forEach((el, index) => {
        el.classList.remove("flex", "hidden", "block");

        // Untuk layar kecil/md: tampilkan hanya aktif dan setelahnya (max 2)
        if (window.innerWidth < 1024) {
            if (index === activeIndex || index === activeIndex + 1) {
                el.classList.add("block");
            } else {
                el.classList.add("hidden");
            }
        } else {
            // Untuk layar besar: tampilkan semua
            el.classList.add("block");
        }
    });
}

function initializeStaticTestimonialCarousel() {
    // Fallback initialization for static content
    const carouselElement = document.getElementById("my-carousel");
    
    const items = [
        {
            position: 0,
            el: document.getElementById("static-carousel-item-1"),
        },
        {
            position: 1,
            el: document.getElementById("static-carousel-item-2"),
        },
        {
            position: 2,
            el: document.getElementById("static-carousel-item-3"),
        },
        {
            position: 3,
            el: document.getElementById("static-carousel-item-4"),
        },
    ].filter(item => item.el);
    
    const indicators = [
        {
            position: 0,
            el: document.getElementById("static-carousel-indicator-1"),
        },
        {
            position: 1,
            el: document.getElementById("static-carousel-indicator-2"),
        },
        {
            position: 2,
            el: document.getElementById("static-carousel-indicator-3"),
        },
        {
            position: 3,
            el: document.getElementById("static-carousel-indicator-4"),
        },
    ].filter(item => item.el);
    
    if (items.length === 0) return;
    
    const options = {
        defaultPosition: 0,
        interval: 3000,
        indicators: {
            activeClasses: "border-t-2 border-black",
            inactiveClasses: "border-t-1 border-black/60",
            items: indicators,
        },
        onChange: (carousel) => {
            const currentPosition = carousel._activeItem?.position ?? 0;
            updateVisibleTestimonialIndicators(currentPosition);
        },
    };
    
    const instanceOptions = {
        id: "my-carousel",
        override: true,
    };
    
    testimonialCarousel = new Carousel(carouselElement, items, options, instanceOptions);
    testimonialCarousel.cycle();
    
    updateVisibleTestimonialIndicators(0);
}
// --- TESTIMONIAL CAROUSEL END ---

// --- Projects Gallery Start ---
function truncateText(text, maxLength) {
    if (!text) return '';
    return text.length > maxLength ? text.substring(0, maxLength) + '...' : text;
}

function loadProjects(url = 'http://127.0.0.1:8000/api/content/projects-gallery') {
    const gridContainer = document.querySelector('.grid.grid-cols-1.md\\:grid-cols-2');
    const paginationContainer = document.getElementById('pagination-container');
    
    if (!gridContainer) return;
    
    fetch(url)
        .then(response => {
            if (!response.ok) throw new Error('Gagal mengambil data dari API.');
            return response.json();
        })
        .then(projects => {
            const data = projects.data || [];
            
            // Hapus isi kartu lama
            const cards = gridContainer.querySelectorAll('[id^="card-"]');
            cards.forEach(card => card.style.display = 'none');

            if (data.length > 0) {
                data.forEach((project, index) => {
                    const card = document.getElementById(`card-${index + 1}-projects`);
                    if (card) {
                        card.style.display = 'flex';
                        const img = card.querySelector('img');
                        const title = card.querySelector('h5');
                        const desc = card.querySelector('p');
                        const link = card.querySelector('a');

                        if (img) {
                            // Setup loading animation untuk image SEBELUM set src
                            const imageContainer = img.parentElement;
                            
                            // Store src in data attribute instead of setting directly
                            img.setAttribute('data-src', `/storage/${project.foto_head}`);
                            img.alt = project.judul;
                            
                            // Setup loading animation (akan handle src setting)
                            setupImageLoading(img, imageContainer);
                        }
                        if (title) title.textContent = project.judul;
                        if (desc) desc.textContent = truncateText(project.desc_lengkap, 180);
                        if (link) link.href = `/projects/${project.id}`;
                    }
                });
            } else {
                gridContainer.innerHTML = '<p class="text-center text-gray-500 col-span-full">Tidak ada proyek yang tersedia.</p>';
            }

            // Render pagination
            if (paginationContainer) {
                renderPagination(projects.links, paginationContainer);
            }

            // Scroll langsung ke posisi gridContainer tanpa smooth
            document.documentElement.style.scrollBehavior = 'auto';
            gridContainer.scrollIntoView({ behavior: 'auto', block: 'start' });
            document.documentElement.style.scrollBehavior = '';
        })
        .catch(error => {
            console.error('Error fetching project gallery:', error);
            gridContainer.innerHTML = '<p class="text-center text-red-500 col-span-full">Gagal memuat proyek.</p>';
        });
}

function renderPagination(links, paginationContainer) {
    paginationContainer.innerHTML = '';
    paginationContainer.className = 'flex gap-2 justify-center mt-6';

    links.forEach(link => {
        const button = document.createElement('button');
        button.innerHTML = link.label;
        
        button.className = `
            px-4 py-2 rounded-lg border text-sm font-medium
            transition-all duration-200 ease-in-out
            ${link.active 
                ? 'bg-blue-600 text-white border-blue-600 shadow-md' 
                : 'bg-white text-gray-700 border-gray-300 hover:bg-gray-100'}
        `;
        
        button.disabled = link.url === null;
        if (link.url) {
            button.addEventListener('click', () => loadProjects(link.url));
        } else {
            button.classList.add('opacity-50', 'cursor-not-allowed');
        }

        paginationContainer.appendChild(button);
    });
}

// --- Projects Gallery End ---

// DOM Ready Event
document.addEventListener('DOMContentLoaded', function() {
    // Initialize testimonials
    loadTestimonials();
    
    // Initialize projects gallery if the grid container exists
    const gridContainer = document.querySelector('.grid.grid-cols-1.md\\:grid-cols-2');
    if (gridContainer) {
        loadProjects();
    }
    
    // Add resize listener for testimonial indicators
    window.addEventListener("resize", () => {
        const currentPosition = testimonialCarousel?._activeItem?.position ?? 0;
        updateVisibleTestimonialIndicators(currentPosition);
    });
});