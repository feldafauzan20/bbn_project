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

// Product Filters and Cards
document.addEventListener('DOMContentLoaded', function () {
    const filtersContainer = document.getElementById('product-filters-container');
    const cardsContainer = document.getElementById('product-cards-container');

    const filtersApiUrl = 'http://127.0.0.1:8000/api/content/products/filters';
    const productsApiUrl = 'http://127.0.0.1:8000/api/content/products';
    const initialCategory = "Material Komofloor";

    function displayProducts(products) {
        if (!cardsContainer) return;
        cardsContainer.innerHTML = '';

        if (products.length > 0) {
            products.forEach(product => {
                let cardHtml = '';

                // Card layout khusus kategori tanpa bg dan detail
                const simpleCategories = [
                    'Material Komowrap',
                    'Perkuatan Struktur',
                    'Mesin dan Perlengkapan',
                    'Mata Gerinda'
                ];

                if (simpleCategories.includes(product.category)) {
                    cardHtml = `
                        <div class="bg-stone-50 w-full md:w-96 lg:w-full md:flex-1 rounded-[20px] shadow-sm overflow-hidden">
                            <div class="h-96 flex justify-center items-center rounded-t-[20px] overflow-hidden">
                                <div class="w-full h-full">
                                    <img src="/storage/image-product/${product.image}" class="object-cover w-full h-full" alt="${product.name}">
                                </div>
                            </div>
                            <div class="py-4 px-5 h-24 md:h-28">
                                <p class="text-lg md:text-xl font-normal tracking-tight leading-relaxed md:leading-loose text-black">
                                    ${product.name}
                                </p>
                                <p class="text-2xl md:text-3xl font-semibold tracking-tighter leading-9 md:leading-10 text-black">
                                    ${product.description || product.id.toUpperCase()}
                                </p>
                            </div>
                        </div>
                    `;
                } else {
                    // Layout lengkap seperti di gambar
                    const descriptionHtml = product.description
                        ? `<li>${product.description}</li>`
                        : '';

                    const detailsHtml = product.details.map(detail => {
                        if (detail.key) {
                            return `<li>${detail.key} - ${detail.value}</li>`;
                        } else {
                            return `<li>${detail.value}</li>`;
                        }
                    }).join('');

                    cardHtml = `
                        <div class="bg-stone-50 w-full md:flex-1 rounded-[20px] shadow-sm overflow-hidden">
                            <div class="relative h-40 2xl:h-56 rounded-t-[20px] px-5 py-7.5 overflow-hidden">
                                <div class="absolute inset-0 bg-cover bg-center"
                                    style="background-image: url('/storage/${product['bg-image']}');">
                                </div>
                                <div class="absolute inset-0 bg-black/50"></div>
                                <div class="relative">
                                    <div class="w-28 2xl:w-36 h-28 2xl:h-36">
                                        <img src="/storage/image-product/${product.image}" class="object-cover w-full h-full" alt="${product.name}">
                                    </div>
                                </div>
                            </div>

                            <div class="py-4 px-5">
                                <h5 class="text-xl font-bold tracking-tight leading-loose text-black">
                                    ${product.name}
                                </h5>
                                <p class="text-lg font-normal tracking-tightest leading-relaxed text-black mb-1.5">
                                    ${product.details[0] ? product.details[0].key + " - " + product.details[0].value : ''}
                                </p>
                                <h2 class="text-3xl font-semibold tracking-tightest leading-10 text-black mb-1.5">
                                    ${product.id.toUpperCase()}
                                </h2>
                                <ul class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                    ${descriptionHtml}
                                    ${detailsHtml}
                                </ul>
                            </div>
                        </div>
                    `;
                }

                cardsContainer.innerHTML += cardHtml;
            });
        } else {
            cardsContainer.innerHTML = '<p>Tidak ada produk dalam kategori ini.</p>';
        }
    }

    function fetchProducts(category = null) {
        let url = productsApiUrl;
        if (category) {
            url += `?category=${encodeURIComponent(category)}`;
        }

        fetch(url)
            .then(response => response.json())
            .then(products => displayProducts(products))
            .catch(error => console.error('Error fetching products:', error));
    }

    function displayFilters(filters) {
        if (!filtersContainer) return;
        filtersContainer.innerHTML = '';

        filters.forEach(filter => {
            const button = document.createElement('a');
            button.href = '#';
            button.textContent = filter;
            button.className = 'tracking-tightest text-lg leading-relaxed text-black filter-link';

            if (filter === initialCategory) {
                button.classList.add('active-filter');
            }

            button.addEventListener('click', (e) => {
                e.preventDefault();
                fetchProducts(filter);
                document.querySelectorAll('.filter-link').forEach(btn => btn.classList.remove('active-filter'));
                button.classList.add('active-filter');
            });

            filtersContainer.appendChild(button);
        });
    }

    // Initial fetch
    fetch(filtersApiUrl)
        .then(response => response.json())
        .then(filters => {
            displayFilters(filters);
            fetchProducts(initialCategory);
        })
        .catch(error => console.error('Error fetching filters:', error));
});
