/**
 * KHIND RTO - Main JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS
    AOS.init({
        duration: 600,
        once: true,
        offset: 50,
        easing: 'ease-out-cubic'
    });

    // Navbar scroll effect
    initNavbar();
    
    // Mobile menu toggle
    initMobileMenu();
    
    // Product filter
    initProductFilter();
    
    // Notification toast
    initNotificationToast();
    
    // Smooth scroll
    initSmoothScroll();
});

/**
 * Navbar scroll effect - hide on scroll down, show on scroll up (Dynamic Island)
 */
function initNavbar() {
    const navbar = document.getElementById('navbar');
    if (!navbar) return;
    
    let lastScrollY = window.scrollY;
    let ticking = false;
    const scrollThreshold = 10;
    const showAtTop = 80;
    
    // References for closing mobile menu on hide
    const toggle = document.getElementById('navToggle');
    const menu = document.getElementById('navMenu');
    const overlay = document.getElementById('navMenuOverlay');
    
    function closeMobileMenu() {
        if (toggle && menu) {
            toggle.classList.remove('active');
            menu.classList.remove('active');
            if (overlay) overlay.classList.remove('active');
            document.body.classList.remove('menu-open');
        }
    }
    
    function updateNavbar() {
        const currentScrollY = window.scrollY;
        const scrollDelta = currentScrollY - lastScrollY;
        
        if (currentScrollY <= showAtTop) {
            // At the top - always show, remove hidden class
            navbar.classList.remove('nav-hidden');
            navbar.classList.remove('nav-visible');
        } else if (scrollDelta > scrollThreshold) {
            // Scrolling DOWN - hide & close mobile menu
            navbar.classList.add('nav-hidden');
            navbar.classList.remove('nav-visible');
            closeMobileMenu();
        } else if (scrollDelta < -scrollThreshold) {
            // Scrolling UP - show
            navbar.classList.remove('nav-hidden');
            navbar.classList.add('nav-visible');
        }
        
        lastScrollY = currentScrollY;
        ticking = false;
    }
    
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(updateNavbar);
            ticking = true;
        }
    }, { passive: true });
}

/**
 * Mobile menu toggle
 */
function initMobileMenu() {
    const toggle = document.getElementById('navToggle');
    const menu = document.getElementById('navMenu');
    const overlay = document.getElementById('navMenuOverlay');
    if (!toggle || !menu) return;

    function openMenu() {
        toggle.classList.add('active');
        menu.classList.add('active');
        if (overlay) overlay.classList.add('active');
        document.body.classList.add('menu-open');
    }

    function closeMenu() {
        toggle.classList.remove('active');
        menu.classList.remove('active');
        if (overlay) overlay.classList.remove('active');
        document.body.classList.remove('menu-open');
    }
    
    toggle.addEventListener('click', function() {
        if (menu.classList.contains('active')) {
            closeMenu();
        } else {
            openMenu();
        }
    });
    
    // Close menu when clicking a link
    menu.querySelectorAll('.nav-link').forEach(function(link) {
        link.addEventListener('click', function() {
            closeMenu();
        });
    });
    
    // Close menu when clicking overlay or outside
    if (overlay) {
        overlay.addEventListener('click', closeMenu);
    }
    document.addEventListener('click', function(e) {
        if (!toggle.contains(e.target) && !menu.contains(e.target)) {
            closeMenu();
        }
    });
}

/**
 * Product category filter
 */
function initProductFilter() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('.product-card');
    const catalogCategories = document.querySelectorAll('.catalog-category');
    
    filterBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            const filter = this.dataset.filter;
            
            // Update active button
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            // Activate all buttons with same filter value
            document.querySelectorAll('.filter-btn[data-filter="' + filter + '"]').forEach(b => b.classList.add('active'));
            
            // Filter product cards (index page)
            if (productCards.length > 0) {
                productCards.forEach(function(card) {
                    if (filter === 'all' || card.dataset.category === filter) {
                        card.classList.remove('hidden');
                        card.style.display = '';
                    } else {
                        card.classList.add('hidden');
                        card.style.display = 'none';
                    }
                });
            }
            
            // Filter catalog categories (catalog page)
            if (catalogCategories.length > 0) {
                catalogCategories.forEach(function(cat) {
                    if (filter === 'all' || cat.dataset.category === filter) {
                        cat.style.display = '';
                    } else {
                        cat.style.display = 'none';
                    }
                });
            }
        });
    });
}

/**
 * Notification toast - Fake social proof
 */
function initNotificationToast() {
    const toast = document.getElementById('notifToast');
    if (!toast) return;
    
    const names = [
        'Ahmad', 'Siti', 'Muhammad', 'Nurul', 'Azman', 
        'Farah', 'Hafiz', 'Aisyah', 'Rizal', 'Nadia',
        'Zul', 'Mira', 'Kamil', 'Ain', 'Firdaus'
    ];
    
    const locations = [
        'Kuala Lumpur', 'Selangor', 'Johor Bahru', 'Penang', 
        'Melaka', 'Perak', 'Kedah', 'Negeri Sembilan',
        'Pahang', 'Terengganu', 'Kelantan', 'Sabah', 'Sarawak'
    ];
    
    const products = [
        '2.0HP KOOL Series Aircond', '1.5HP KOOL Series Aircond',
        'Washer Dryer WD1438', 'Washer Dryer WD1468',
        'Mesin Basuh WM150A', 'Pengering DHP90',
        'Peti Sejuk RFM466A', 'Peti Sejuk RFS600A',
        'Seterika Stim SI6029BP'
    ];
    
    function showToast() {
        const nameEl = document.getElementById('toastName');
        const locationEl = document.getElementById('toastLocation');
        const productEl = document.getElementById('toastProduct');
        
        nameEl.textContent = names[Math.floor(Math.random() * names.length)];
        locationEl.textContent = locations[Math.floor(Math.random() * locations.length)];
        productEl.textContent = products[Math.floor(Math.random() * products.length)];
        
        toast.classList.add('show');
        
        setTimeout(function() {
            toast.classList.remove('show');
        }, 5000);
    }
    
    // Initial delay
    setTimeout(showToast, 8000);
    
    // Recurring
    setInterval(showToast, 25000);
}

/**
 * Smooth scroll for anchor links
 */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
}

/**
 * Show product detail modal (simplified - WhatsApp redirect)
 */
function showProductDetail(productId) {
    // For simple version, just scroll to the product or open WhatsApp
    const section = document.getElementById(productId);
    if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
    }
}

/**
 * Handle RTO enquiry form submission
 */
function handleFormSubmit(event) {
    event.preventDefault();
    
    const form = event.target;
    const name = form.querySelector('#fullName').value;
    const phone = form.querySelector('#phone').value;
    const email = form.querySelector('#email').value;
    const plan = form.querySelector('#planSelection').value;
    
    // Redirect to WhatsApp with form data
    const message = `Hai, saya ingin mohon RTO.\n\nNama: ${name}\nTelefon: ${phone}\nEmail: ${email}\nProduk: ${plan}`;
    
    const agentPhone = document.querySelector('.agent-phone') ? 
        document.querySelector('.agent-phone').textContent.trim().replace(/\D/g, '') : 
        '60123456789';
    
    const whatsappUrl = `https://wa.me/${agentPhone}?text=${encodeURIComponent(message)}`;
    window.open(whatsappUrl, '_blank');
    
    // Show success message
    showFormSuccess(form);
}

/**
 * Handle agent join form submission
 */
function handleJoinSubmit(event) {
    event.preventDefault();
    
    const form = event.target;
    const name = form.querySelector('#joinName').value;
    const ic = form.querySelector('#joinIC').value;
    const phone = form.querySelector('#joinPhone').value;
    const email = form.querySelector('#joinEmail').value;
    const state = form.querySelector('#joinState').value;
    const experience = form.querySelector('#joinExperience') ? form.querySelector('#joinExperience').value : '';
    const message = form.querySelector('#joinMessage') ? form.querySelector('#joinMessage').value : '';
    
    // Redirect to WhatsApp with form data
    const whatsappMessage = `Hai, saya berminat untuk menjadi ejen KHIND RTO.\n\nNama: ${name}\nNo. IC: ${ic}\nTelefon: ${phone}\nEmail: ${email}\nNegeri: ${state}\nPengalaman: ${experience}\nMesej: ${message}`;
    
    const agentPhone = document.querySelector('.agent-phone') ? 
        document.querySelector('.agent-phone').textContent.trim().replace(/\D/g, '') : 
        '60123456789';
    
    const whatsappUrl = `https://wa.me/${agentPhone}?text=${encodeURIComponent(whatsappMessage)}`;
    window.open(whatsappUrl, '_blank');
    
    showFormSuccess(form);
}

/**
 * Show form submission success feedback
 */
function showFormSuccess(form) {
    const btn = form.querySelector('button[type="submit"]');
    const originalText = btn.innerHTML;
    
    btn.innerHTML = '<i class="fas fa-check-circle"></i> Berjaya Dihantar!';
    btn.style.background = '#2ecc71';
    btn.style.color = '#fff';
    btn.disabled = true;
    
    setTimeout(function() {
        btn.innerHTML = originalText;
        btn.style.background = '';
        btn.style.color = '';
        btn.disabled = false;
        form.reset();
    }, 3000);
}

/**
 * Counter animation for stats
 */
function animateCounters() {
    const counters = document.querySelectorAll('.stat-number');
    
    counters.forEach(function(counter) {
        const target = parseInt(counter.textContent.replace(/\D/g, ''));
        const suffix = counter.textContent.replace(/[\d,]/g, '');
        let current = 0;
        const increment = target / 60;
        
        const timer = setInterval(function() {
            current += increment;
            if (current >= target) {
                counter.textContent = target.toLocaleString() + suffix;
                clearInterval(timer);
            } else {
                counter.textContent = Math.floor(current).toLocaleString() + suffix;
            }
        }, 30);
    });
}

// Observe stats section for animation
const statsObserver = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
        if (entry.isIntersecting) {
            animateCounters();
            statsObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.5 });

document.querySelectorAll('.cta-stats').forEach(function(el) {
    statsObserver.observe(el);
});
