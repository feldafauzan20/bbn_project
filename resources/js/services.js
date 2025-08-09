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
        iconOpen.classList.toggle("hidden");
        iconClose.classList.toggle("hidden");
    });
}
// Navbar end

// Testimonial API Integration using Services endpoint
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
            initializeCarousel(testimonialsData);
        } else {
            // No testimonials found, use static content
            showStaticContent();
        }
    } catch (error) {
        console.error('Error loading testimonials:', error);
        // Fallback to existing static content if API fails
        showStaticContent();
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

function showStaticContent() {
    const loadingElement = document.getElementById('testimonial-loading');
    const staticContent = document.getElementById('static-testimonials');
    
    if (loadingElement) {
        loadingElement.style.display = 'none';
    }
    
    if (staticContent) {
        staticContent.style.display = 'block';
        initializeStaticCarousel();
    }
}

function initializeCarousel(testimonials) {
    const carouselElement = document.getElementById("my-carousel");
    
    if (!carouselElement) return;
    
    // Destroy existing carousel if it exists
    if (testimonialCarousel) {
        try {
            testimonialCarousel.destroy();
        } catch (error) {
            console.log('Error destroying carousel:', error);
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
            updateVisibleIndicators(currentPosition);
            updateActiveIndicator(currentPosition);
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
        updateVisibleIndicators(0);
        updateActiveIndicator(0);
    } catch (error) {
        console.error('Error initializing carousel:', error);
    }
}

function updateActiveIndicator(activeIndex) {
    const allIndicators = document.querySelectorAll(".indicator-item");
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

function updateVisibleIndicators(activeIndex) {
    const allIndicators = document.querySelectorAll(".indicator-item");
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

function initializeStaticCarousel() {
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
            updateVisibleIndicators(currentPosition);
        },
    };
    
    const instanceOptions = {
        id: "my-carousel",
        override: true,
    };
    
    testimonialCarousel = new Carousel(carouselElement, items, options, instanceOptions);
    testimonialCarousel.cycle();
    
    updateVisibleIndicators(0);
}

// Initialize testimonials when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    loadTestimonials();
});

window.addEventListener("resize", () => {
    const currentPosition = testimonialCarousel?._activeItem?.position ?? 0;
    updateVisibleIndicators(currentPosition);
});

// GSAP animation start (aktifkan bila dibutuhkan)
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