// ===== XTRA GADGETS - MAIN JAVASCRIPT WITH ANIMATIONS =====

// ===== STICKY HEADER WITH SCROLL EFFECT =====
function handleStickyHeader() {
    const header = document.querySelector('.header');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
}

// ===== SCROLL REVEAL ANIMATIONS =====
function initScrollReveal() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    const elementsToReveal = document.querySelectorAll('.categories, .promo-banners, .featured-products, .deal-of-day, .latest-news, .newsletter');
    
    elementsToReveal.forEach(el => {
        el.classList.add('scroll-reveal');
        observer.observe(el);
    });
}

// ===== LAZY LOAD IMAGES (OPTIONAL) =====
function initLazyLoading() {
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.classList.add('loaded');
                observer.unobserve(img);
            }
        });
    });
    
    // Only lazy load images with 'lazy' class
    const lazyImages = document.querySelectorAll('img.lazy');
    lazyImages.forEach(img => {
        imageObserver.observe(img);
    });
}

// ===== SHOPPING CART FUNCTIONALITY WITH ANIMATIONS =====
let cart = [];

function addToCart(productName, price, button) {
    cart.push({
        name: productName,
        price: price,
        quantity: 1
    });
    
    if (button) {
        button.classList.add('added');
        button.textContent = '✓ Added!';
        
        setTimeout(() => {
            button.classList.remove('added');
            button.innerHTML = '<i class="fas fa-shopping-cart"></i> Add to Cart';
        }, 2000);
    }
    
    updateCartBadge();
    jiggleCartIcon();
    showNotification(productName + ' added to cart!');
}

function updateCartBadge() {
    const badge = document.querySelector('.badge');
    if (badge) {
        badge.textContent = cart.length;
        badge.classList.add('updated');
        
        setTimeout(() => {
            badge.classList.remove('updated');
        }, 400);
    }
}

function jiggleCartIcon() {
    const cartWrapper = document.querySelector('.fa-shopping-cart');
    if (cartWrapper) {
        const iconWrapper = cartWrapper.closest('.icon-wrapper');
        if (iconWrapper) {
            iconWrapper.classList.add('cart-jiggle');
            setTimeout(() => {
                iconWrapper.classList.remove('cart-jiggle');
            }, 500);
        }
    }
}

function showNotification(message) {
    const notification = document.createElement('div');
    notification.className = 'notification';
    notification.textContent = message;
    notification.style.cssText = 'position: fixed; top: 100px; right: 20px; background: linear-gradient(135deg, #007bff, #0056b3); color: white; padding: 16px 24px; border-radius: 8px; box-shadow: 0 4px 16px rgba(0, 123, 255, 0.3); z-index: 10000; animation: slideInRight 0.3s ease; font-family: Poppins, sans-serif; font-weight: 500;';
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.opacity = '0';
        setTimeout(() => {
            if (notification.parentNode) {
                document.body.removeChild(notification);
            }
        }, 300);
    }, 3000);
}

function initAddToCartButtons() {
    const addToCartButtons = document.querySelectorAll('.btn-add-cart');
    
    addToCartButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            
            const productCard = button.closest('.product-card');
            if (productCard) {
                const nameEl = productCard.querySelector('.product-name');
                const priceEl = productCard.querySelector('.new-price');
                const productName = nameEl ? nameEl.textContent : 'Product';
                const price = priceEl ? priceEl.textContent : '$0.00';
                
                addToCart(productName, price, button);
            }
        });
    });
}

// ===== COUNTDOWN TIMER FOR DEAL OF THE DAY =====
function startCountdown() {
    const countDownDate = new Date().getTime() + (5 * 24 * 60 * 60 * 1000);
    
    const countdownTimer = setInterval(function() {
        const now = new Date().getTime();
        const distance = countDownDate - now;
        
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        const daysEl = document.getElementById("days");
        const hoursEl = document.getElementById("hours");
        const minutesEl = document.getElementById("minutes");
        const secondsEl = document.getElementById("seconds");
        
        if (daysEl) daysEl.innerHTML = String(days).padStart(2, '0');
        if (hoursEl) hoursEl.innerHTML = String(hours).padStart(2, '0');
        if (minutesEl) minutesEl.innerHTML = String(minutes).padStart(2, '0');
        if (secondsEl) secondsEl.innerHTML = String(seconds).padStart(2, '0');
        
        if (distance < 0) {
            clearInterval(countdownTimer);
            if (daysEl) daysEl.innerHTML = "00";
            if (hoursEl) hoursEl.innerHTML = "00";
            if (minutesEl) minutesEl.innerHTML = "00";
            if (secondsEl) secondsEl.innerHTML = "00";
        }
    }, 1000);
}

// ===== FORM VALIDATION WITH SHAKE ANIMATION =====
function initFormValidation() {
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        form.addEventListener('submit', (e) => {
            const inputs = form.querySelectorAll('input[required], textarea[required]');
            let isValid = true;
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add('error');
                    
                    setTimeout(() => {
                        input.classList.remove('error');
                    }, 400);
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                showNotification('Please fill in all required fields');
            }
        });
    });
}

// ===== NEWSLETTER SUBSCRIPTION =====
function initNewsletter() {
    const newsletterForm = document.querySelector('.newsletter-form');
    
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const emailInput = newsletterForm.querySelector('input[type="email"]');
            const email = emailInput.value;
            
            if (email) {
                showNotification('Thank you for subscribing to our newsletter!');
                emailInput.value = '';
            }
        });
    }
}

// ===== SEARCH BAR FUNCTIONALITY =====
function initSearchBar() {
    const searchInputs = document.querySelectorAll('.search-bar input, .search-box-large input');
    
    searchInputs.forEach(searchInput => {
        searchInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                e.preventDefault();
                const searchTerm = searchInput.value;
                if (searchTerm.trim()) {
                    showNotification('Searching for: ' + searchTerm);
                }
            }
        });
    });
}

// ===== SEARCH TAGS CLICK HANDLER =====
function initSearchTags() {
    const tags = document.querySelectorAll('.tag');
    
    tags.forEach(tag => {
        tag.addEventListener('click', () => {
            const searchTerm = tag.textContent;
            showNotification('Searching for: ' + searchTerm);
        });
    });
}

// ===== QUANTITY CONTROLS FOR ORDER PAGE =====
function initQuantityControls() {
    const qtyButtons = document.querySelectorAll('.qty-btn');
    
    qtyButtons.forEach(btn => {
        btn.addEventListener('click', (e) => {
            const input = btn.parentElement.querySelector('input[type="number"]');
            const currentValue = parseInt(input.value) || 1;
            
            if (btn.textContent === '+') {
                input.value = currentValue + 1;
            } else if (btn.textContent === '-' && currentValue > 1) {
                input.value = currentValue - 1;
            }
        });
    });
}

// ===== REMOVE FROM CART =====
function initRemoveButtons() {
    const removeButtons = document.querySelectorAll('.remove-btn');
    
    removeButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const cartItem = btn.closest('.cart-item');
            if (cartItem) {
                cartItem.style.opacity = '0';
                cartItem.style.transform = 'translateX(-20px)';
                setTimeout(() => {
                    cartItem.remove();
                    showNotification('Item removed from cart');
                }, 300);
            }
        });
    });
}

// ===== CHECKOUT FORM HANDLING =====
function initCheckoutForm() {
    const checkoutForm = document.getElementById('checkoutForm');
    
    if (checkoutForm) {
        checkoutForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const confirmationMessage = document.querySelector('.confirmation-message');
            const checkoutLayout = document.querySelector('.checkout-layout');
            
            if (confirmationMessage && checkoutLayout) {
                checkoutLayout.style.display = 'none';
                confirmationMessage.style.display = 'block';
                window.scrollTo({ top: 0, behavior: 'smooth' });
            } else {
                showNotification('Processing payment...');
                setTimeout(() => {
                    showNotification('Payment successful! Thank you for your purchase.');
                }, 2000);
            }
        });
    }
}

// ===== ORDER FORM HANDLING =====
function initOrderForm() {
    const orderForm = document.getElementById('orderForm');
    
    if (orderForm) {
        orderForm.addEventListener('submit', (e) => {
            e.preventDefault();
            showNotification('Proceeding to checkout...');
            setTimeout(() => {
                window.location.href = 'checkout.html';
            }, 1500);
        });
    }
}

// ===== INITIALIZE ALL FUNCTIONS ON PAGE LOAD =====
document.addEventListener('DOMContentLoaded', () => {
    handleStickyHeader();
    initScrollReveal();
    initLazyLoading();
    initAddToCartButtons();
    startCountdown();
    initFormValidation();
    initNewsletter();
    initSearchBar();
    initSearchTags();
    initQuantityControls();
    initRemoveButtons();
    initCheckoutForm();
    initOrderForm();
    
    console.log('XtraGadgets website loaded with animations!');
});
