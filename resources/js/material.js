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
    // === KONFIGURASI & ELEMEN DOM ===
    const filtersContainer = document.getElementById('product-filters-container');
    const defaultContainer = document.getElementById('product-cards-container');
    const machinesContainer = document.getElementById('machines-cards-container');
    const komowrapContainer = document.getElementById('komowrap-cards-container');
    const reinforcementContainer = document.getElementById('reinforcement-cards-container');

    const filtersApiUrl = 'http://127.0.0.1:8000/api/content/products/filters';
    const productsApiUrl = 'http://127.0.0.1:8000/api/content/products';
    const initialCategory = "Material Komofloor";

    /**
     * Fungsi utama yang bertindak sebagai "router".
     */
    function displayProducts(products) {
        // Gabungkan semua kontainer yang mungkin ada
        const allContainers = [defaultContainer, machinesContainer, komowrapContainer, reinforcementContainer].filter(Boolean);

        allContainers.forEach(container => {
            container.innerHTML = '';
            container.style.display = 'none';
        });

        if (!products || products.length === 0) {
            defaultContainer.innerHTML = '<p>Tidak ada produk dalam kategori ini.</p>';
            defaultContainer.style.display = 'grid';
            return;
        }

        const category = products[0].category;

        if (category === 'Mesin dan Perlengkapan') {
            renderMachinesAsCarousel(products);
        } else if (category === 'Perkuatan Struktur') {
            renderReinforcement(products);
        } else {
            renderDefaultProducts(products);
        }

        if (typeof initFlowbite === 'function') {
            initFlowbite();
        }
    }

    /**
     * Render untuk kategori 'Perkuatan Struktur'.
     */
    function renderReinforcement(products) {
        if (!reinforcementContainer) return;
        reinforcementContainer.style.display = 'grid';

        products.forEach(product => {
        const cardHtml = `
                    <div class="h-[424px] lg:h-[323px]">
                        <div class="bg-stone-50 h-96 md:h-72 flex items-center justify-center rounded-lg shadow-sm">
                            
                            <img src="/${product.image}"
                                class="max-w-[250px] max-h-[200px] object-contain" 
                                alt="${product.name}">
                                
                        </div>
                        <div class="mt-4">
                            <p class="text-black text-lg text-center font-medium leading-relaxed tracking-tighter">
                                ${product.name}
                            </p>
                        </div>
                    </div>
                `;
            reinforcementContainer.innerHTML += cardHtml;
        });
    }

    /**
     * Render untuk kategori 'Mesin dan Perlengkapan' sebagai Carousel.
     */
    function renderMachinesAsCarousel(products) {
        if (!machinesContainer) return;
        machinesContainer.style.display = 'grid';

        const groupedMachines = {};
        products.forEach(product => {
            if (!groupedMachines[product.name]) {
                groupedMachines[product.name] = [];
            }
            groupedMachines[product.name].push(product);
        });

        for (const machineName in groupedMachines) {
            const machineGroup = groupedMachines[machineName];
            const baseIdMatch = machineName.match(/\(([^)]+)\)/);
            if (!baseIdMatch) continue;

            const baseId = baseIdMatch[1].toUpperCase();
            const carouselId = `carousel-${baseId.toLowerCase().replace(/\s/g, '-')}`;
            const slidesHtml = machineGroup.map((slideData, index) => {
                const detailsHtml = (slideData.details || []).map(detail => `<li>${detail.key || ''} ${detail.value}</li>`).join('');
                return `
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="${index === 0 ? 'active' : ''}">
                        <div class="h-[714px] bg-stone-50 rounded-2xl">
                            <div class="h-96 bg-white overflow-hidden px-5 py-4 flex justify-center items-center">
                                <img src="/${slideData.image}" class="max-w-full max-h-full object-contain" alt="${slideData.name}">
                            </div>
                            <div class="px-5 py-4">
                                <div class="mt-4"><p class="text-black text-xl font-normal leading-loose tracking-tightest">${slideData.name.split('(')[0].trim()}</p></div>
                                <div><h2 class="text-black text-3xl font-semibold leading-10 tracking-tightest">${baseId}</h2></div>
                                <div><ul class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">${slideData.description ? `<li>${slideData.description}</li>` : ''}${detailsHtml}</ul></div>
                            </div>
                        </div>
                    </div>`;
            }).join('');
            const indicatorsHtml = machineGroup.map((_, index) => `<button type="button" class="w-3 h-3 rounded-full" aria-current="${index === 0}" aria-label="Slide ${index + 1}" data-carousel-slide-to="${index}"></button>`).join('');
            const carouselHtml = `<div id="${carouselId}" class="relative w-full" data-carousel="static"><div class="relative h-[714px] overflow-hidden rounded-lg">${slidesHtml}</div><div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">${indicatorsHtml}</div></div>`;
            machinesContainer.innerHTML += carouselHtml;
        }
    }

    /**
     * Render untuk semua kategori lain.
     */
    function renderDefaultProducts(products) {
        const category = products[0].category;
        let targetContainer = defaultContainer;
        
        if (category === 'Material Komowrap' && komowrapContainer) {
            targetContainer = komowrapContainer;
        }
        
        if (!targetContainer) return;
        targetContainer.style.display = 'grid';

        products.forEach(product => {
            let cardHtml = '';
            const simpleCategories = ['Material Komowrap', 'Mata Gerinda'];
            if (simpleCategories.includes(product.category)) {
                cardHtml = `
                    <div class="bg-stone-50 w-full md:w-96 lg:w-full md:flex-1 rounded-[20px] shadow-sm overflow-hidden">
                        <div class="h-96 flex justify-center items-center rounded-t-[20px] overflow-hidden">
                            <img src="/${product.image}" class="object-cover w-90 h-90" alt="${product.name}">
                        </div>
                        <div class="py-4 px-5 h-24 md:h-28">
                            <p class="text-lg md:text-xl font-normal tracking-tight leading-relaxed text-black">${product.name}</p>
                            <p class="text-2xl md:text-3xl font-semibold tracking-tighter leading-9 text-black">${product.description || product.id.toUpperCase()}</p>
                        </div>
                    </div>`;
            } else {
                const descriptionHtml = product.description ? `<li>${product.description}</li>` : '';
                const detailsHtml = (product.details || []).map(detail => `<li>${detail.key} - ${detail.value}</li>`).join('');
                cardHtml = `
                    <div class="bg-stone-50 w-full md:flex-1 rounded-[20px] shadow-sm overflow-hidden">
                        <div class="relative h-40 2xl:h-56 rounded-t-[20px] px-5 py-7.5 overflow-hidden">
                            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/${product['bg-image']}');"></div>
                            <div class="absolute inset-0 bg-black/50"></div>
                            <div class="relative"><div class="w-28 2xl:w-36 h-28 2xl:h-36"><img src="/${product.image}" class="object-cover w-full h-full" alt="${product.name}"></div></div>
                        </div>
                        <div class="py-4 px-5">
                            <h5 class="text-xl font-bold tracking-tight leading-loose text-black">${product.name}</h5>
                            <p class="text-lg font-normal tracking-tightest leading-relaxed text-black mb-1.5">${product.details && product.details[0] ? `${product.details[0].key} - ${product.details[0].value}` : ''}</p>
                            <h2 class="text-3xl font-semibold tracking-tightest leading-10 text-black mb-1.5">${product.id.toUpperCase()}</h2>
                            <ul class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">${descriptionHtml}${detailsHtml}</ul>
                        </div>
                    </div>`;
            }
            targetContainer.innerHTML += cardHtml;
        });
    }
    
    // === FUNGSI FETCH DATA & FILTERS ===
    function fetchProducts(category = null) {
        let url = productsApiUrl;
        if (category) { url += `?category=${encodeURIComponent(category)}`; }
        fetch(url)
            .then(response => response.json())
            .then(data => {
                let productsArray = [];
                if (data && Array.isArray(data.products)) { productsArray = data.products; } 
                else if (Array.isArray(data)) { productsArray = data; }
                displayProducts(productsArray);
            })
            .catch(error => {
                console.error('Error fetching products:', error);
                if (defaultContainer) {
                    defaultContainer.innerHTML = `<p class="text-red-500">Gagal memuat produk. Cek console (F12).</p>`;
                    defaultContainer.style.display = 'block';
                }
            });
    }

    function displayFilters(filters) {
        if (!filtersContainer) return;
        filtersContainer.innerHTML = '';
        filters.forEach(filter => {
            const button = document.createElement('a');
            button.href = '#';
            button.textContent = filter;
            button.className = 'tracking-tightest text-lg leading-relaxed text-black filter-link';
            if (filter === initialCategory) { button.classList.add('active-filter'); }
            button.addEventListener('click', (e) => {
                e.preventDefault();
                fetchProducts(filter);
                document.querySelectorAll('.filter-link').forEach(btn => btn.classList.remove('active-filter'));
                button.classList.add('active-filter');
            });
            filtersContainer.appendChild(button);
        });
    }

    // === INITIAL FETCH ===
    fetch(filtersApiUrl)
        .then(response => response.json())
        .then(data => {
            displayFilters(data);
            fetchProducts(initialCategory);
        })
        .catch(error => console.error('Error fetching filters:', error));
});