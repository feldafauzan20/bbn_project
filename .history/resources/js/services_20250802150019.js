import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { Carousel } from "flowbite";

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

// Carousel start
const carouselElement = document.getElementById("my-carousel");

const items = [
    {
        position: 0,
        el: document.getElementById("carousel-item-1"),
    },
    {
        position: 1,
        el: document.getElementById("carousel-item-2"),
    },
    {
        position: 2,
        el: document.getElementById("carousel-item-3"),
    },
    {
        position: 3,
        el: document.getElementById("carousel-item-4"),
    },
];

// options with default values
const options = {
    defaultPosition: 1,
    interval: 3000,
    indicators: {
        activeClasses: "border-t-2 border-black",
        inactiveClasses: "border-t-0 border-black/60 bg-transparent",
        items: [
            {
                position: 0,
                el: document.getElementById("carousel-indicator-1"),
            },
            {
                position: 1,
                el: document.getElementById("carousel-indicator-2"),
            },
            {
                position: 2,
                el: document.getElementById("carousel-indicator-3"),
            },
            {
                position: 3,
                el: document.getElementById("carousel-indicator-4"),
            },
        ],
    },
    onChange: (carousel) => {
        currentPosition = carousel._activeItem?.position ?? 0;
        updateVisibleIndicators(currentPosition);
    },
};

let currentPosition = options.defaultPosition;

function updateVisibleIndicators(activeIndex) {
    const allIndicators = document.querySelectorAll(".indicator-item");
    allIndicators.forEach((el, index) => {
        el.classList.remove("flex", "hidden");

        // Untuk layar kecil/md: tampilkan hanya aktif dan setelahnya
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

// instance options
const instanceOptions = {
    id: "my-carousel",
    override: true,
};

const carousel = new Carousel(carouselElement, items, options, instanceOptions);
carousel.cycle();

updateVisibleIndicators(currentPosition);

window.addEventListener("resize", () => {
    updateVisibleIndicators(currentPosition);
});
// Carousel end

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

// gsap.from("#card-5-projects", {
//     y: 60,
//     delay: 0,
//     opacity: 0,
//     duration: 1.5,
//     scrollTrigger: {
//         trigger: "#card-5-projects",
//         start: "top 80%",
//         toggleActions: "play none none none",
//     },
// });

// gsap.from("#card-below", {
//     y: 60,
//     delay: 0,
//     opacity: 0,
//     duration: 1.5,
//     scrollTrigger: {
//         trigger: "#card-below",
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

// GSAP animation end
