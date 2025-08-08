import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import Swiper from "swiper";
import "swiper/css";
gsap.registerPlugin(ScrollTrigger);

// Swiper start
const swiper1 = new Swiper(".swiper1", {
    slidesPerView: "auto",
    spaceBetween: 30,
    grabCursor: true,
    freeMode: true,
});

const swiper2 = new Swiper(".swiper2", {
    slidesPerView: "auto",
    spaceBetween: 30,
    grabCursor: true,
    freeMode: true,
});

const swiper3 = new Swiper(".swiper3", {
    slidesPerView: "auto",
    spaceBetween: 30,
    grabCursor: true,
    freeMode: true,
});

const swiper4 = new Swiper(".swiper4", {
    slidesPerView: "auto",
    spaceBetween: 30,
    grabCursor: true,
    freeMode: true,
});

const swiper5 = new Swiper(".swiper5", {
    slidesPerView: "auto",
    spaceBetween: 30,
    grabCursor: true,
    freeMode: true,
});

const swiper6 = new Swiper(".swiper6", {
    slidesPerView: "auto",
    spaceBetween: 30,
    grabCursor: true,
    freeMode: true,
});
// Swiper end

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

// Product Filters and Cards with Mata Gerinda Integration
// Product Filters and Cards with Mata Gerinda Integration
document.addEventListener('DOMContentLoaded', function () {
    // === KONFIGURASI & ELEMEN DOM ===
    const filtersContainer = document.getElementById('product-filters-container');
    const defaultContainer = document.getElementById('product-cards-container');
    const machinesContainer = document.getElementById('machines-cards-container');
    const komowrapContainer = document.getElementById('komowrap-cards-container');
    const reinforcementContainer = document.getElementById('reinforcement-cards-container');
    const mataGerindaContainer = document.getElementById('mata-gerinda-container');

    const filtersApiUrl = 'http://127.0.0.1:8000/api/content/products/filters';
    const productsApiUrl = 'http://127.0.0.1:8000/api/content/products';
    const initialCategory = "Material Komofloor";

    /**
     * Fungsi utama yang bertindak sebagai "router".
     */
    function displayProducts(products) {
        // Gabungkan semua kontainer yang mungkin ada
        const allContainers = [
            defaultContainer, 
            machinesContainer, 
            komowrapContainer, 
            reinforcementContainer,
            mataGerindaContainer
        ].filter(Boolean);

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
        } else if (category === 'Mata Gerinda') {
            renderMataGerinda(products);
        } else {
            renderDefaultProducts(products);
        }

        if (typeof initFlowbite === 'function') {
            initFlowbite();
        }
    }

    /**
     * Render untuk kategori 'Mata Gerinda' dengan multiple swipers.
     */
    function renderMataGerinda(products) {
        if (!mataGerindaContainer) return;
        mataGerindaContainer.style.display = 'block';

        // Debug log for products data
        console.log('=== Mata Gerinda Products Data ===');
        products.forEach((product, index) => {
            console.log(`Product ${index + 1}:`, {
                id: product.id,
                name: product.name,
                description: product.description,
                sub_category: product.sub_category
            });
        });
        console.log('===================================');

        // Group products by subcategory
        const groupedProducts = groupMataGerindaProducts(products);
        
        // Add missing Cover Debu category if not present in data
        if (!groupedProducts['Cover debu']) {
            groupedProducts['Cover debu'] = [
                {
                    id: 'cover-debu-1',
                    name: 'Cover Debu',
                    image: 'images/material/mata-gerinda/img-content-cover-debu-7-4-material.webp',
                    description: '7" & 4"'
                },
                {
                    id: 'cover-debu-2', 
                    name: 'Cover Debu Alat Pemotong',
                    image: 'images/material/mata-gerinda/img-content-cover-debu-alat-pemotong-4-8-material.webp',
                    description: '4" & 8"'
                }
            ];
        }
        
        let containerHtml = '';

        // Define the order of categories to match your original template
        const categoryOrder = [
            'Untuk beton medium',
            'Untuk beton keras (Menghilangkan Lapisan Epoxy, Coating, Rekatan dan Coaltar)',
            'Untuk beton halus',
            'PCD',
            'Segmented PCD grinding plates',
            'Cover debu'
        ];

        // Render each category in the specified order
        categoryOrder.forEach((subcategory, index) => {
            if (groupedProducts[subcategory] && groupedProducts[subcategory].length > 0) {
                const swiperClass = `swiper${index + 1}`;
                const swiperId = `swiper-${index + 1}`;
                
                containerHtml += `
                    <div id="${swiperId}" class="${index > 0 ? 'mt-12.5' : ''}">
                        <div class="mb-5">
                            <p class="text-black text-2xl font-medium leading-7 tracking-tightest">${subcategory}</p>
                        </div>
                        <div class="swiper ${swiperClass}">
                            <div class="swiper-wrapper">
                                ${renderMataGerindaCards(groupedProducts[subcategory])}
                            </div>
                        </div>
                    </div>
                `;
            }
        });

        mataGerindaContainer.innerHTML = containerHtml;
        
        // Initialize swipers (count actual rendered categories)
        const renderedCategories = categoryOrder.filter(cat => 
            groupedProducts[cat] && groupedProducts[cat].length > 0
        );
        initializeMataGerindaSwipers(renderedCategories.length);
    }

    /**
     * Group Mata Gerinda products by subcategory.
     */
    function groupMataGerindaProducts(products) {
        const groups = {};
        
        products.forEach(product => {
            let subcategory = 'Lainnya'; // Default subcategory
            
            // Use sub_category from JSON if available
            if (product.sub_category) {
                subcategory = product.sub_category;
                // Add description for "Untuk beton keras"
                if (subcategory === 'Untuk beton keras') {
                    subcategory = 'Untuk beton keras (Menghilangkan Lapisan Epoxy, Coating, Rekatan dan Coaltar)';
                }
            } else {
                // Fallback: determine from product name and description
                const name = product.name.toLowerCase();
                const description = product.description?.toLowerCase() || '';
                
                if (name.includes('pcd')) {
                    if (name.includes('grinding plates') || name.includes('holder') || name.includes('diamond grinding')) {
                        subcategory = 'Segmented PCD grinding plates';
                    } else {
                        subcategory = 'PCD';
                    }
                } else if (name.includes('cover') && name.includes('debu')) {
                    subcategory = 'Cover debu';
                } else if (description.includes('keras') || name.includes('mega') || name.includes('ultra')) {
                    subcategory = 'Untuk beton keras (Menghilangkan Lapisan Epoxy, Coating, Rekatan dan Coaltar)';
                } else if (description.includes('halus') || name.includes('gold')) {
                    subcategory = 'Untuk beton halus';
                } else {
                    subcategory = 'Untuk beton medium';
                }
            }
            
            if (!groups[subcategory]) {
                groups[subcategory] = [];
            }
            groups[subcategory].push(product);
        });
        
        return groups;
    }

    /**
     * Render cards for Mata Gerinda products.
     */
    function renderMataGerindaCards(products) {
        console.log('=== Rendering Mata Gerinda Cards ===');
        console.log('Total products:', products.length);
        
        return products.map(product => {
            const size = extractSize(product);
            const additionalInfo = extractAdditionalInfo(product);
            
            console.log(`Card: ${product.name}`);
            console.log(`- Size: "${size}"`);
            console.log(`- Additional Info: "${additionalInfo}"`);
            console.log(`- Description: "${product.description}"`);
            console.log('---');
            
            // Extract main title (remove parentheses content)
            const mainTitle = product.name.replace(/\s*\([^)]*\)/, '');
            
            return `
                <div class="swiper-slide bg-white w-[289px] sm:w-[250px] md:w-[289px] flex-shrink-0">
                    <div class="bg-stone-50 flex justify-center items-center h-72">
                        <img src="/${product.image}" 
                             alt="${product.name}" 
                             class="object-cover ${getImageSize(product)}">
                    </div>
                    <div class="flex justify-between items-start">
                        <p class="text-black text-lg font-medium tracking-tightest flex-1 pr-2">${mainTitle}</p>
                        ${size ? `<p class="text-neutral-400 text-lg font-medium tracking-tightest flex-shrink-0">${size}</p>` : ''}
                    </div>
                    ${additionalInfo ? `
                        <div class="mt-1">
                            <p class="text-neutral-400 text-lg font-medium tracking-tightest">${additionalInfo}</p>
                        </div>
                    ` : ''}
                </div>
            `;
        }).join('');
    }

    /**
     * Extract size information from product - Enhanced version with fallback
     */
    function extractSize(product) {
        console.log('Extracting size for product:', product.name, 'Description:', product.description); // Debug log
        
        // Manual fallback for specific products if needed
        const manualSizes = {
            'pcd-cup-wheel-3': '4"',
            'pcd-cup-wheel-4': '7"',
            // Add more manual mappings as needed
        };
        
        if (manualSizes[product.id]) {
            console.log('Using manual size mapping for:', product.id, '->', manualSizes[product.id]);
            return manualSizes[product.id];
        }
        
        // First check description for size (like "4"", "7"")
        if (product.description) {
            const descriptionMatch = product.description.match(/(\d+["'])/);
            if (descriptionMatch) {
                console.log('Size found in description:', descriptionMatch[1]); // Debug log
                return descriptionMatch[1];
            }
            
            // Also check for patterns like "4 inch", "7 inch"
            const inchMatch = product.description.match(/(\d+)\s*inch/i);
            if (inchMatch) {
                console.log('Size found (inch) in description:', inchMatch[1] + '"'); // Debug log
                return inchMatch[1] + '"';
            }
            
            // Check for just numbers in description (assume inches)
            const numberMatch = product.description.match(/^(\d+)$/);
            if (numberMatch) {
                console.log('Size found (number only) in description:', numberMatch[1] + '"'); // Debug log
                return numberMatch[1] + '"';
            }
        }
        
        // Check if size is in details
        if (product.details && product.details.length > 0) {
            const sizeDetail = product.details.find(detail => 
                detail.key?.toLowerCase().includes('size') || 
                detail.key?.toLowerCase().includes('ukuran') ||
                detail.key?.toLowerCase().includes('diameter')
            );
            if (sizeDetail) {
                console.log('Size found in details:', sizeDetail.value); // Debug log
                return sizeDetail.value;
            }
        }
        
        // Check in name for size patterns like 4", 7"
        const nameMatch = product.name.match(/(\d+["']?)/);
        if (nameMatch) {
            const size = nameMatch[1] + (nameMatch[1].includes('"') ? '' : '"');
            console.log('Size found in name:', size); // Debug log
            return size;
        }
        
        // Check in image filename for size hints
        if (product.image) {
            const imageMatch = product.image.match(/[_-](\d+)[_-]/);
            if (imageMatch) {
                const size = imageMatch[1] + '"';
                console.log('Size found in image filename:', size); // Debug log
                return size;
            }
        }
        
        console.log('No size found for product:', product.name); // Debug log
        return null;
    }

    /**
     * Extract additional info like color or special purpose - Enhanced version
     */
    function extractAdditionalInfo(product) {
        const name = product.name.toLowerCase();
        const description = product.description?.toLowerCase() || '';
        
        console.log('Extracting additional info for:', product.name, 'Description:', product.description); // Debug log
        
        // Check for specific purposes in product name (prioritize these over colors)
        if (name.includes('penghilang uretan') || name.includes('uretan')) {
            return '(Penghilang Uretan)';
        }
        if (name.includes('penghilang epoxy') || name.includes('epoxy')) {
            return '(Penghilang Epoxy)';
        }
        if (name.includes('untuk mesin') || description.includes('mesin')) {
            return '(untuk mesin)';
        }
        
        // Check for grit numbers (like #30, #40, etc.)
        const gritMatch = name.match(/#(\d+)/);
        if (gritMatch) {
            return `#${gritMatch[1]}`;
        }
        
        // Only show color info if the color is NOT already in the product name
        const colors = ['hitam', 'merah', 'biru', 'oranye', 'putih', 'gray', 'red', 'blue', 'black', 'orange', 'white', 'super red'];
        
        // Check if any color is already in the name
        const colorInName = colors.some(color => name.includes(color));
        
        if (!colorInName) {
            // Only check for colors in description if no color in name
            for (const color of colors) {
                if (description.includes(color)) {
                    return color.charAt(0).toUpperCase() + color.slice(1);
                }
            }
        }
        
        console.log('No additional info found for:', product.name); // Debug log
        return null;
    }

    /**
     * Get appropriate image size class based on product type.
     */
    function getImageSize(product) {
        const name = product.name.toLowerCase();
        
        if (name.includes('pcd') && !name.includes('cup wheel')) {
            return 'w-40 h-40'; // Wider for PCD plates
        }
        if (name.includes('cover debu')) {
            if (name.includes('alat pemotong')) {
                return 'w-52 h-20'; // Specific for cutting tool covers
            }
            return 'w-64 h-32'; // Regular dust covers
        }
        if (name.includes('grinding plates') || name.includes('segment')) {
            return 'w-28 h-20'; // Smaller for grinding plates
        }
        
        return 'w-40 h-40'; // Default size
    }

    /**
     * Initialize Swiper instances for Mata Gerinda.
     */
    function initializeMataGerindaSwipers(count) {
        // Wait for DOM to be ready
        setTimeout(() => {
            for (let i = 1; i <= count; i++) {
                try {
                    new Swiper(`.swiper${i}`, {
                        slidesPerView: 'auto',
                        spaceBetween: 16,
                        freeMode: true,
                        breakpoints: {
                            640: {
                                slidesPerView: 2,
                                spaceBetween: 16,
                            },
                            768: {
                                slidesPerView: 3,
                                spaceBetween: 20,
                            },
                            1024: {
                                slidesPerView: 4,
                                spaceBetween: 24,
                            },
                        }
                    });
                } catch (error) {
                    console.error(`Error initializing swiper${i}:`, error);
                }
            }
        }, 100);
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
            const simpleCategories = ['Material Komowrap'];
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