<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style_detail.css">
</head>
<body class="p-4 p-md-5 p-lg-5">
=
    <!-- Navbar -->
   <?php include "healder2.php"?>
    <!-- Top Slide Section - Kitchen Appliances -->
   <?php include "slide.php"?>

    <!-- Product Detail Section -->
    <?php include "main.php"?>
    <!-- You May Also Like Section -->
    <h2 class="h3 fw-bold text-dark mt-5 mb-4">You may also like</h2>
    <div class="row flex-nowrap overflow-auto pb-3 position-relative">
        <!-- Scroll Buttons -->
        <button class="scroll-button position-absolute start-0 top-50 translate-middle-y z-3" onclick="scrollProducts(-1)">
            <i class="fas fa-chevron-left"></i>
        </button>

        <!-- Product Cards -->
        <div class="col-6 col-md-4 col-lg-3 mb-4 flex-shrink-0">
            <div class="card h-100 shadow-sm rounded-lg">
                <div class="product-image-container w-100" style="height: 180px;">
                    <img src="https://placehold.co/800x600/e0e0e0/ffffff?text=Related+Prod1" alt="Related Product 1">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title fw-semibold text-truncate mb-1">"Beast" Unisex Tank</h5>
                    <p class="card-text fw-bold text-dark mb-2">$20</p>
                    <div class="star-rating mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-4 flex-shrink-0">
            <div class="card h-100 shadow-sm rounded-lg">
                <div class="product-image-container w-100" style="height: 180px;">
                    <img src="https://placehold.co/800x600/a0c4ff/ffffff?text=Related+Prod2" alt="Related Product 2">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title fw-semibold text-truncate mb-1">Best Friend Bracelet</h5>
                    <p class="card-text fw-bold text-dark mb-2">$25</p>
                    <div class="star-rating mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-4 flex-shrink-0">
            <div class="card h-100 shadow-sm rounded-lg">
                <div class="product-image-container w-100" style="height: 180px;">
                    <img src="https://placehold.co/800x600/caffbf/ffffff?text=Related+Prod3" alt="Related Product 3">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title fw-semibold text-truncate mb-1">Heart Shaped Pendant Necklace</h5>
                    <p class="card-text fw-bold text-dark mb-2">$95+</p>
                    <div class="star-rating mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i> 
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-4 flex-shrink-0">
            <div class="card h-100 shadow-sm rounded-lg">
                <div class="product-image-container w-100" style="height: 180px;">
                    <img src="https://placehold.co/800x600/ffd6a5/ffffff?text=Related+Prod4" alt="Related Product 4">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title fw-semibold text-truncate mb-1">Bangles</h5>
                    <p class="card-text fw-bold text-dark mb-2">$79+</p>
                    <div class="star-rating mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add more product cards as needed -->

        <button class="scroll-button position-absolute end-0 top-50 translate-middle-y z-3" onclick="scrollProducts(1)">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>

    <!-- Main Banner Section -->
    <div class="banner mt-5 mb-5">
        <img src="https://placehold.co/1200x300/e0e0e0/ffffff?text=Special+Offer+Banner" alt="Special Offer Banner" class="banner-image">
        <h3 class="h4 fw-bold mb-3">Limited Time Offer!</h3>
        <p class="lead mb-4">Get 20% off all jewelry for a limited time. Don't miss out!</p>
        <button class="btn btn-primary btn-lg rounded-pill">Shop Now</button>
    </div>

    <!-- Contact Section -->
    <div class="contact-section mt-5 mb-5 p-4 rounded-lg shadow-sm text-center">
        <h2 class="h3 fw-bold text-dark mb-4">Contact Us</h2>
        <p class="lead mb-4">Have questions or need assistance? Reach out to us!</p>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
                <i class="fas fa-envelope fa-2x text-primary mb-2"></i>
                <h5 class="fw-bold">Email Us</h5>
                <p><a href="mailto:info@example.com" class="text-decoration-none text-muted">info@example.com</a></p>
            </div>
            <div class="col-md-4 mb-3">
                <i class="fas fa-phone fa-2x text-primary mb-2"></i>
                <h5 class="fw-bold">Call Us</h5>
                <p><a href="tel:+1234567890" class="text-decoration-none text-muted">+1 (234) 567-890</a></p>
            </div>
            <div class="col-md-4 mb-3">
                <i class="fas fa-map-marker-alt fa-2x text-primary mb-2"></i>
                <h5 class="fw-bold">Our Location</h5>
                <p class="text-muted">123 Main Street, Anytown, USA</p>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        function updateQuantity(change) {
            const quantityInput = document.getElementById('quantity');
            let currentQuantity = parseInt(quantityInput.value);
            currentQuantity += change;
            if (currentQuantity < 1) {
                currentQuantity = 1;
            }
            quantityInput.value = currentQuantity;
        }

        function scrollProducts(direction) {
            const container = document.querySelector('.row.flex-nowrap');
            const scrollAmount = 300; // Adjust as needed
            container.scrollBy({
                left: direction * scrollAmount,
                behavior: 'smooth'
            });
        }

        // Product images array (would be fetched from PHP backend)
        const productImages = [
            "pic/2808.png",
            "pic/2808Q-1.png",
            "../pic/2808_2.png",
        ];
        let currentImageIndex = 0;

        // Function to set the main product image based on an index
        function setMainImage(index) {
            if (index >= 0 && index < productImages.length) {
                document.getElementById('mainProductImage').src = productImages[index];
                currentImageIndex = index;
            }
        }

        // Function to change the main product image to next/previous
        function changeProductImage(direction) {
            currentImageIndex += direction;
            if (currentImageIndex >= productImages.length) {
                currentImageIndex = 0; // Wrap around to the first image
            } else if (currentImageIndex < 0) {
                currentImageIndex = productImages.length - 1; // Wrap around to the last image
            }
            document.getElementById('mainProductImage').src = productImages[currentImageIndex];
        }

        // Initial image load
        document.addEventListener('DOMContentLoaded', () => {
            setMainImage(0); // Set the first image on load
        });
    </script>
</body>
</html>
