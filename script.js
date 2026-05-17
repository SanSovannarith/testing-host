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
                // Optionally unobserve after revealing
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Observe all sections and elements that should animate on scroll
    const elementsToReveal = document.querySelectorAll(`
        .categories,
        .promo-banners,
        .featured-products,
        .deal-of-day,
        .latest-news,
        .newsletter
    `);
    
    elementsToReveal.forEach(el => {
        el.classList.add('scroll-reveal');
        observer.observe(el);
    });
}

// ===== LAZY LOAD IMAGES =====
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
    
    const images = document.querySelectorAll('img');
    images.forEach(img => {
        imageObserver.observe(img);
    });
}

// ===== SHOPPING CART FUNCTIONALITY WITH ANIMATIONS =====
let cart = [];

// Add to cart with animation
function addToCart(productName, price, button) {
    cart.push({
        name: productName,
        price: price,
        quantity: 1
    });
    
    // Animate button
    if (button) {
        button.classList.add('added');
        
        // Check if button has .btn-text span (product detail page)
        const btnText = button.querySelector('.btn-text');
        if (btnText) {
            btnText.textContent = '✓ Added!';
        } else {
            // Regular button (product cards)
            button.textContent = '✓ Added!';
        }
        
        setTimeout(() => {
            button.classList.remove('added');
            if (btnText) {
                btnText.textContent = 'Add to Cart';
            } else {
                button.innerHTML = '<i class="fas fa-shopping-cart"></i> Add to Cart';
            }
        }, 2000);
    }
    
    // Update cart with jiggle animation
    updateCartBadge();
    jiggleCartIcon();
    showNotification(`${productName} added to cart!`);
}

// Update cart badge count with animation
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

// Jiggle cart icon
function jiggleCartIcon() {
    const cartIcon = document.querySelector('.icon-wrapper:has(.fa-shopping-cart)');
    if (cartIcon) {
        cartIcon.classList.add('cart-jiggle');
        
        setTimeout(() => {
            cartIcon.classList.remove('cart-jiggle');
        }, 500);
    }
}

// Show notification with animation
function showNotification(message) {
    const notification = document.createElement('div');
    notification.className = 'notification';
    notification.textContent = message;
    notification.style.cssText = `
        position: fixed;
        top: 100px;
        right: 20px;
        background: linear-gradient(135deg, #007bff, #0056b3);
        color: white;
        padding: 16px 24px;
        border-radius: 8px;
        box-shadow: 0 4px 16px rgba(0, 123, 255, 0.3);
        z-index: 10000;
        animation: slideInRight 0.3s ease;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.animation = 'fadeOut 0.3s ease';
        setTimeout(() => {
            if (notification.parentNode) {
                document.body.removeChild(notification);
            }
        }, 300);
    }, 3000);
}

// ===== ADD TO CART BUTTON EVENT LISTENERS =====
function initAddToCartButtons() {
    const addToCartButtons = document.querySelectorAll('.btn-add-cart');
    
    addToCartButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            
            // Get product info from parent card
            const productCard = button.closest('.product-card');
            if (productCard) {
                const productName = productCard.querySelector('.product-name')?.textContent || 'Product';
                const priceElement = productCard.querySelector('.new-price') || productCard.querySelector('.price');
                const price = priceElement ? priceElement.textContent : '$0.00';
                
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
const style = document.createElement('style');
style.textContent = `
@keyframes slideInRight {
    from {
        transform: translateX(400px);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

@keyframes slideOutRight {
    from {
        transform: translateX(0);
        opacity: 1;
    }
    to {
        transform: translateX(400px);
        opacity: 0;
    }
}

@keyframes fadeOut {
    from {
        opacity: 1;
    }
    to {
        opacity: 0;
    }
}
`;
document.head.appendChild(style);

// ===== NEWSLETTER SUBSCRIPTION =====
function handleNewsletterSubmit(e) {
    e.preventDefault();
    const emailInput = e.target.querySelector('input[type="email"]');
    const email = emailInput.value;
    
    if (email) {
        showNotification('Thank you for subscribing to our newsletter!');
        emailInput.value = '';
    }
}

// ===== SMOOTH SCROLL FOR ANCHOR LINKS =====
function smoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href !== '') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });
}

// ===== SEARCH FUNCTIONALITY =====
function handleSearch(e) {
    const searchTerm = e.target.value.toLowerCase();
    
    if (searchTerm.length > 2) {
        console.log('Searching for:', searchTerm);
        // In a real application, this would filter products or redirect to search results
    }
}

// ===== WISHLIST FUNCTIONALITY =====
let wishlist = [];

function toggleWishlist(productName) {
    const index = wishlist.indexOf(productName);
    
    if (index > -1) {
        wishlist.splice(index, 1);
        showNotification(`${productName} removed from wishlist`);
    } else {
        wishlist.push(productName);
        showNotification(`${productName} added to wishlist!`);
    }
}

// ===== NAVIGATE TO PRODUCT DETAIL =====
function navigateToProduct(productData) {
    console.log('Navigating to product detail with data:', productData);
    // Store product data in sessionStorage
    sessionStorage.setItem('currentProduct', JSON.stringify(productData));
    console.log('Stored in sessionStorage:', sessionStorage.getItem('currentProduct'));
    // Navigate to product detail page
    window.location.href = 'product-detail.html';
}

// ===== GET CURRENT PRODUCT DATA =====
function getCurrentProduct() {
    const storedProduct = sessionStorage.getItem('currentProduct');
    if (storedProduct) {
        return JSON.parse(storedProduct);
    }
    // Return default product if none stored
    return {
        name: 'PlayStation 5 Console',
        price: '$449.99',
        originalPrice: '$499.99',
        image: 'https://images.unsplash.com/photo-1606813907291-d86efa9b94db?w=800&h=800&fit=crop',
        category: 'Gaming Consoles',
        rating: 4.5,
        reviews: 125,
        description: 'Experience lightning-fast loading with an ultra-high-speed SSD, deeper immersion with support for haptic feedback, adaptive triggers, and 3D Audio, and an all-new generation of incredible PlayStation® games.',
        inStock: true
    };
}

// ===== PRODUCT CARD INTERACTIONS =====
function setupProductCards() {
    const productCards = document.querySelectorAll('.product-card');
    console.log(`Found ${productCards.length} product cards`);
    
    productCards.forEach((card, index) => {
        const addToCartBtn = card.querySelector('.btn-add-cart');
        const wishlistBtn = card.querySelector('.quick-actions .icon-btn:first-child');
        const viewBtn = card.querySelector('.quick-actions .icon-btn:last-child');
        const productName = card.querySelector('.product-name')?.textContent || 'Product';
        const productPrice = card.querySelector('.new-price')?.textContent || '$0.00';
        
        console.log(`Card ${index + 1}: ${productName}`);
        
        // Add to cart button
        if (addToCartBtn) {
            addToCartBtn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                addToCart(productName, productPrice, addToCartBtn);
            });
        }
        
        // Wishlist button
        if (wishlistBtn) {
            wishlistBtn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                toggleWishlist(productName);
                wishlistBtn.classList.toggle('active');
            });
        }
        
        // Get product data for navigation
        const oldPrice = card.querySelector('.old-price')?.textContent || '';
        const productData = {
            name: productName,
            price: productPrice,
            originalPrice: oldPrice,
            image: card.querySelector('.product-image img')?.src || '',
            category: card.querySelector('.product-category')?.textContent || 'Electronics',
            rating: card.querySelectorAll('.product-rating .fa-star').length || 5,
            description: `High-quality ${productName} with excellent features and performance.`
        };
        
        console.log(`Product data for ${productName}:`, productData);
        
        // View/Quick view button - redirects to product detail page
        if (viewBtn) {
            console.log(`Adding click listener to view button for ${productName}`);
            viewBtn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                console.log(`View button clicked for ${productName}`);
                navigateToProduct(productData);
            });
        } else {
            console.warn(`No view button found for ${productName} - making card clickable instead`);
            // If no view button, make the whole card clickable
            card.style.cursor = 'pointer';
            card.addEventListener('click', (e) => {
                // Don't navigate if clicking on buttons
                if (!e.target.closest('.btn-add-cart') && !e.target.closest('.icon-btn')) {
                    console.log(`Card clicked for ${productName}`);
                    navigateToProduct(productData);
                }
            });
        }
        
        // Make entire product image clickable to view details
        const productImage = card.querySelector('.product-image');
        if (productImage) {
            productImage.style.cursor = 'pointer';
            productImage.addEventListener('click', (e) => {
                // Don't navigate if clicking on buttons
                if (!e.target.closest('.btn-add-cart') && !e.target.closest('.icon-btn')) {
                    navigateToProduct(productData);
                }
            });
        }
        
        // Make product name clickable
        const productNameEl = card.querySelector('.product-name');
        if (productNameEl) {
            productNameEl.style.cursor = 'pointer';
            productNameEl.addEventListener('click', (e) => {
                e.preventDefault();
                navigateToProduct(productData);
            });
        }
    });
}

// ===== STICKY HEADER ON SCROLL =====
function handleStickyHeader() {
    const header = document.querySelector('.header');
    let lastScroll = 0;
    
    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 100) {
            header.style.boxShadow = '0 4px 16px rgba(0, 0, 0, 0.1)';
        } else {
            header.style.boxShadow = '0 2px 8px rgba(0, 0, 0, 0.08)';
        }
        
        lastScroll = currentScroll;
    });
}

// ===== INTERSECTION OBSERVER FOR ANIMATIONS =====
function setupScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Observe product cards
    document.querySelectorAll('.product-card').forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = `all 0.6s ease ${index * 0.1}s`;
        observer.observe(card);
    });
    
    // Observe news cards
    document.querySelectorAll('.news-card').forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = `all 0.6s ease ${index * 0.1}s`;
        observer.observe(card);
    });
    
    // Observe category items
    document.querySelectorAll('.category-item').forEach((item, index) => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(30px)';
        item.style.transition = `all 0.6s ease ${index * 0.1}s`;
        observer.observe(item);
    });
}

// ===== MOBILE MENU TOGGLE =====
function setupMobileMenu() {
    // This would be implemented if we had a hamburger menu for mobile
    // For now, the navigation is hidden on mobile as per the responsive design
}

// ===== CART ICON CLICK =====
function setupCartIcon() {
    const cartIcon = document.querySelector('.fa-shopping-cart').closest('.icon-wrapper');
    
    if (cartIcon) {
        cartIcon.addEventListener('click', () => {
            if (cart.length === 0) {
                showNotification('Your cart is empty');
            } else {
                showNotification(`You have ${cart.length} items in your cart`);
                // In a real application, this would open a cart modal or redirect to cart page
            }
        });
    }
}

// ===== WISHLIST ICON CLICK =====
function setupWishlistIcon() {
    const wishlistIcon = document.querySelector('.fa-heart').closest('.icon-wrapper');
    
    if (wishlistIcon) {
        wishlistIcon.addEventListener('click', () => {
            if (wishlist.length === 0) {
                showNotification('Your wishlist is empty');
            } else {
                showNotification(`You have ${wishlist.length} items in your wishlist`);
                // In a real application, this would open a wishlist modal or redirect to wishlist page
            }
        });
    }
}

// ===== SEARCH BAR FUNCTIONALITY =====
function setupSearchBar() {
    const searchInput = document.querySelector('.search-bar input');
    
    if (searchInput) {
        // Add search on Enter key
        searchInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                e.preventDefault();
                const searchTerm = searchInput.value;
                if (searchTerm.trim()) {
                    showNotification(`Searching for: ${searchTerm}`);
                    // In a real application, this would redirect to search results
                }
            }
        });
        
        // Add search icon click
        const searchIcon = document.querySelector('.search-bar i');
        if (searchIcon) {
            searchIcon.addEventListener('click', () => {
                const searchTerm = searchInput.value;
                if (searchTerm.trim()) {
                    showNotification(`Searching for: ${searchTerm}`);
                }
            });
        }
    }
}

// ===== PROMO BANNER BUTTON CLICKS =====
function setupPromoBanners() {
    const promoBanners = document.querySelectorAll('.promo-banner');
    
    promoBanners.forEach(banner => {
        const button = banner.querySelector('.btn');
        const productName = banner.querySelector('h2').textContent;
        
        if (button) {
            button.addEventListener('click', () => {
                showNotification(`Redirecting to ${productName} page...`);
                // In a real application, this would redirect to the product page
            });
        }
    });
}

// ===== CATEGORY CLICKS =====
function setupCategories() {
    const categoryItems = document.querySelectorAll('.category-item');
    
    categoryItems.forEach(item => {
        item.addEventListener('click', () => {
            const categoryName = item.querySelector('h3').textContent;
            showNotification(`Browsing ${categoryName} category...`);
            // In a real application, this would redirect to the category page
        });
    });
}

// ===== DEAL OF THE DAY BUTTON =====
function setupDealButton() {
    const dealButton = document.querySelector('.deal-of-day .btn-primary');
    
    if (dealButton) {
        dealButton.addEventListener('click', () => {
            showNotification('Redirecting to VR Headset deals...');
            // In a real application, this would redirect to the deal page
        });
    }
}

// ===== INITIALIZE ALL FUNCTIONS ON PAGE LOAD =====
document.addEventListener('DOMContentLoaded', function() {
    // Start countdown timer
    startCountdown();
    
    // Setup newsletter form
    const newsletterForm = document.querySelector('.newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', handleNewsletterSubmit);
    }
    
    // Setup smooth scrolling
    smoothScroll();
    
    // Setup product cards
    setupProductCards();
    
    // Setup sticky header
    handleStickyHeader();
    
    // Setup scroll animations
    setupScrollAnimations();
    
    // Setup cart icon
    setupCartIcon();
    
    // Setup wishlist icon
    setupWishlistIcon();
    
    // Setup search bar
    setupSearchBar();
    
    // Setup promo banners
    setupPromoBanners();
    
    // Setup categories
    setupCategories();
    
    // Setup deal button
    setupDealButton();
    
    console.log('XtraGadgets website initialized successfully!');
});

// ===== HANDLE WINDOW RESIZE =====
let resizeTimer;
window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
        console.log('Window resized');
        // Any responsive adjustments can be added here
    }, 250);
});

// ===== LAZY LOADING FOR IMAGES =====
if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                    observer.unobserve(img);
                }
            }
        });
    });
    
    // Observe all images with data-src attribute
    document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
    });
}
