// SIWS College Website JavaScript
// Author: SIWS College Development Team
// Version: 2.1

document.addEventListener('DOMContentLoaded', function () {

    // ========================================
    // SMOOTH SCROLLING FOR NAVIGATION LINKS
    // ========================================

    const smoothScrollLinks = document.querySelectorAll('a[href^="#"]');

    smoothScrollLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            // Skip if the href is just "#" (often used for buttons)
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            e.preventDefault();

            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                // Get navbar height for offset
                const navbarHeight = document.querySelector('.navbar').offsetHeight;

                // Calculate position with offset
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - navbarHeight;

                // Smooth scroll with offset
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });

                // Close mobile menu if open
                const navbarCollapse = document.querySelector('.navbar-collapse');
                if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                    navbarCollapse.classList.remove('show');
                }
            }
        });
    });

    // ========================================
    // NAVBAR SCROLL EFFECT
    // ========================================

    const navbar = document.querySelector('.navbar');
    const heroSection = document.querySelector('.hero-section');

    // Initialize navbar state
    if (window.scrollY === 0 && heroSection) {
        navbar.classList.add('navbar-transparent');
    }

    window.addEventListener('scroll', function () {
        // Add scrolled class when scrolling down
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
            navbar.classList.remove('navbar-transparent');
        } else {
            navbar.classList.remove('scrolled');
            // Only add transparent class on home page (with hero section)
            if (heroSection) {
                navbar.classList.add('navbar-transparent');
            }
        }

        // Animate elements when they come into view
        animateOnScroll();
    });

    // ========================================
    // ANIMATE ELEMENTS ON SCROLL - DISABLED
    // ========================================

    function animateOnScroll() {
        // Animation functionality removed for stability
        // All elements will remain visible
    }

    // No need to initialize animations
    // setTimeout(animateOnScroll, 100);

    // ========================================
    // COUNTER ANIMATION
    // ========================================

    function animateCounters() {
        const counters = document.querySelectorAll('.counter');
        const speed = 200; // The lower the slower

        counters.forEach(counter => {
            // Skip if already animated
            if (counter.classList.contains('animated')) return;

            const target = +counter.innerText;
            const increment = target / speed;
            let currentCount = 0;

            const updateCount = () => {
                if (currentCount < target) {
                    currentCount += increment;
                    counter.innerText = Math.ceil(currentCount);
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = target;
                    counter.classList.add('animated');
                }
            };

            // Only start animation when element is in viewport
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        updateCount();
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });

            observer.observe(counter);
        });
    }

    // Initialize counter animation
    setTimeout(animateCounters, 500);

    // ========================================
    // BACK TO TOP BUTTON
    // ========================================

    const backToTopButton = document.createElement('a');
    backToTopButton.href = '#';
    backToTopButton.className = 'back-to-top';
    backToTopButton.innerHTML = '<i class="fas fa-arrow-up"></i>';
    document.body.appendChild(backToTopButton);

    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            backToTopButton.classList.add('visible');
        } else {
            backToTopButton.classList.remove('visible');
        }
    });

    backToTopButton.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // ========================================
    // FORM VALIDATION
    // ========================================

    const forms = document.querySelectorAll('form');

    forms.forEach(form => {
        form.addEventListener('submit', function (e) {
            if (!validateForm(this)) {
                e.preventDefault();
                return false;
            }
        });
    });

    function validateForm(form) {
        let isValid = true;
        const requiredFields = form.querySelectorAll('[required]');

        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                showError(field, 'This field is required');
                isValid = false;
            } else {
                clearError(field);
            }
        });

        // Email validation
        const emailFields = form.querySelectorAll('input[type="email"]');
        emailFields.forEach(field => {
            if (field.value && !isValidEmail(field.value)) {
                showError(field, 'Please enter a valid email address');
                isValid = false;
            }
        });

        // Phone validation
        const phoneFields = form.querySelectorAll('input[type="tel"]');
        phoneFields.forEach(field => {
            if (field.value && !isValidPhone(field.value)) {
                showError(field, 'Please enter a valid phone number');
                isValid = false;
            }
        });

        return isValid;
    }

    function showError(field, message) {
        clearError(field);
        field.classList.add('is-invalid');

        const errorDiv = document.createElement('div');
        errorDiv.className = 'invalid-feedback';
        errorDiv.textContent = message;
        field.parentNode.appendChild(errorDiv);
    }

    function clearError(field) {
        field.classList.remove('is-invalid');
        const errorDiv = field.parentNode.querySelector('.invalid-feedback');
        if (errorDiv) {
            errorDiv.remove();
        }
    }

    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function isValidPhone(phone) {
        const phoneRegex = /^[\+]?[0-9\s\-\(\)]{10,}$/;
        return phoneRegex.test(phone);
    }

    // ========================================
    // ANIMATED COUNTERS
    // ========================================

    const statNumbers = document.querySelectorAll('.stat-number');

    function animateStatNumber(counter) {
        const target = parseInt(counter.textContent.replace(/[^0-9]/g, ''));
        const increment = target / 100;
        let current = 0;

        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }

            // Preserve original format (%, ₹, +, etc.)
            const originalText = counter.textContent;
            const prefix = originalText.match(/^[^\d]*/)[0];
            const suffix = originalText.match(/[^\d]*$/)[0];

            counter.textContent = prefix + Math.floor(current) + suffix;
        }, 20);
    }

    // Intersection Observer for counter animation
    const statObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateStatNumber(entry.target);
                statObserver.unobserve(entry.target);
            }
        });
    });

    statNumbers.forEach(counter => {
        statObserver.observe(counter);
    });

    // ========================================
    // CARD HOVER EFFECTS
    // ========================================

    const cards = document.querySelectorAll('.card, .program-card, .feature-card, .contact-card');

    cards.forEach(card => {
        card.addEventListener('mouseenter', function () {
            this.style.transform = 'translateY(-10px)';
            this.style.boxShadow = '0 8px 25px rgba(0,0,0,0.15)';
        });

        card.addEventListener('mouseleave', function () {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '0 4px 6px rgba(0,0,0,0.1)';
        });
    });

    // ========================================
    // LOADING ANIMATION
    // ========================================

    function showLoading() {
        const loadingDiv = document.createElement('div');
        loadingDiv.id = 'loading-overlay';
        loadingDiv.innerHTML = `
            <div class="loading-spinner">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        `;
        loadingDiv.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255,255,255,0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        `;
        document.body.appendChild(loadingDiv);
    }

    function hideLoading() {
        const loadingDiv = document.getElementById('loading-overlay');
        if (loadingDiv) {
            loadingDiv.remove();
        }
    }

    // ========================================
    // NOTIFICATION SYSTEM
    // ========================================

    function showNotification(message, type = 'success') {
        const notification = document.createElement('div');
        notification.className = `alert alert-${type} notification`;
        notification.innerHTML = `
            <strong>${type === 'success' ? 'Success!' : 'Error!'}</strong> ${message}
            <button type="button" class="btn-close" aria-label="Close"></button>
        `;

        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1050;
            min-width: 300px;
            animation: slideIn 0.3s ease;
        `;

        document.body.appendChild(notification);

        // Auto remove after 5 seconds
        setTimeout(() => {
            notification.remove();
        }, 5000);

        // Manual close
        const closeBtn = notification.querySelector('.btn-close');
        closeBtn.addEventListener('click', () => {
            notification.remove();
        });
    }

    // ========================================
    // SEARCH FUNCTIONALITY
    // ========================================

    const searchInput = document.querySelector('input[type="search"]');
    if (searchInput) {
        searchInput.addEventListener('input', function () {
            const searchTerm = this.value.toLowerCase();
            const searchableElements = document.querySelectorAll('.card, .program-card, .feature-card');

            searchableElements.forEach(element => {
                const text = element.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    element.style.display = 'block';
                } else {
                    element.style.display = 'none';
                }
            });
        });
    }

    // ========================================
    // MODAL FUNCTIONALITY
    // ========================================

    function createModal(title, content) {
        const modal = document.createElement('div');
        modal.className = 'modal fade';
        modal.innerHTML = `
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">${title}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        ${content}
                    </div>
                </div>
            </div>
        `;

        document.body.appendChild(modal);
        const bsModal = new bootstrap.Modal(modal);
        bsModal.show();

        modal.addEventListener('hidden.bs.modal', function () {
            this.remove();
        });
    }

    // ========================================
    // FORM SUBMISSION HANDLER
    // ========================================

    const contactForm = document.querySelector('form[action=""]');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            if (validateForm(this)) {
                showLoading();

                // Simulate form submission
                setTimeout(() => {
                    hideLoading();
                    showNotification('Your message has been sent successfully!');
                    this.reset();
                }, 2000);
            }
        });
    }

    // ========================================
    // ACCORDION FUNCTIONALITY
    // ========================================

    const accordionHeaders = document.querySelectorAll('.accordion-header button');

    accordionHeaders.forEach(header => {
        header.addEventListener('click', function () {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';

            // Close all other accordions
            accordionHeaders.forEach(otherHeader => {
                if (otherHeader !== this) {
                    otherHeader.setAttribute('aria-expanded', 'false');
                    otherHeader.classList.add('collapsed');
                }
            });

            // Toggle current accordion
            this.setAttribute('aria-expanded', !isExpanded);
            this.classList.toggle('collapsed');
        });
    });

    // ========================================
    // LAZY LOADING FOR IMAGES
    // ========================================

    const images = document.querySelectorAll('img[data-src]');

    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });

    images.forEach(img => {
        imageObserver.observe(img);
    });

    // ========================================
    // MOBILE MENU TOGGLE
    // ========================================

    const mobileMenuToggle = document.querySelector('.navbar-toggler');
    const mobileMenu = document.querySelector('.navbar-collapse');

    if (mobileMenuToggle && mobileMenu) {
        mobileMenuToggle.addEventListener('click', function () {
            mobileMenu.classList.toggle('show');
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function (e) {
            if (!mobileMenuToggle.contains(e.target) && !mobileMenu.contains(e.target)) {
                mobileMenu.classList.remove('show');
            }
        });
    }

    // ========================================
    // UTILITY FUNCTIONS
    // ========================================

    window.SIWSCollege = {
        showNotification: showNotification,
        showLoading: showLoading,
        hideLoading: hideLoading,
        createModal: createModal,
        validateForm: validateForm
    };

    // Initialize tooltips
    if (typeof bootstrap !== 'undefined') {
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });

        // Initialize popovers
        const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
        popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl);
        });
    }

    console.log('SIWS College Website JavaScript loaded successfully!');
});

// Add CSS for animations
const style = document.createElement('style');
style.textContent = `
    @keyframes slideIn {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    .navbar.scrolled {
        background-color: rgba(44, 62, 80, 0.95) !important;
        backdrop-filter: blur(10px);
    }
    
    .back-to-top:hover {
        background: #e74c3c !important;
        transform: translateY(-2px);
    }
    
    .card {
        transition: all 0.3s ease;
    }
    
    .lazy {
        opacity: 0;
        transition: opacity 0.3s;
    }
    
    .lazy.loaded {
        opacity: 1;
    }
    
    .notification {
        animation: slideIn 0.3s ease;
    }
`;
document.head.appendChild(style);