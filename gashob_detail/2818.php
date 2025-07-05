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
    <div class="card shadow-lg mb-5 rounded-lg p-4 p-lg-7">
        <div class="row">
            <!-- Product Image Gallery -->
            <div class="col-12 col-lg-6 d-flex flex-column align-items-center mb-4 mb-lg-0 position-relative">
                <div class="w-full h-4 mb-4 product-image-container">
                    <img id="mainProductImage" src="../pic/2818_2.png" alt="Main Product Image">
                    <div class="product-image-controls">
                        <button class="btn btn-sm btn-light rounded-circle" onclick="changeProductImage(-1)">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="btn btn-sm btn-light rounded-circle" onclick="changeProductImage(1)">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
                <div class="d-flex flex-row flex-lg-column justify-content-center w-100 overflow-auto space-x-2 space-y-lg-2">
                    <div class="product-image-container flex-shrink-0 cursor-pointer" style="width: 80px; height: 80px; margin-left: 2rem;" onclick="setMainImage(0)">
                        
                        <img src="../pic/2818_1.png" alt="Thumbnail 1">
                    </div>
                    <div class="product-image-container flex-shrink-0 cursor-pointer" style="width: 80px; height: 80px;  margin-left: 2rem;" onclick="setMainImage(1)">
                        <img src="../pic/2818_2.png" alt="Thumbnail 2">
                    </div>
                    <div class="product-image-container flex-shrink-0 cursor-pointer" style="width: 80px; height: 80px;  margin-left: 2rem;" onclick="setMainImage(2)">
                        <img src="../pic/2818_3.png" alt="Thumbnail 3">
                    </div>
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-12 col-lg-6">
               <img src="../img/logo.svg" alt="" style="width:20%;">
                <h1 class="display-6 fw-bold text-dark mb-2 magin_left">Built-In Gashob</h1>
                <div class="d-flex align-items-center mb-3 magin_left">
                    <div class="star-rating fs-5 me-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <!-- Updated: "5 reviews" is now a clickable link to the reviews tab -->
                    <a href="#reviews" class="text-muted text-decoration-none" data-bs-toggle="tab" role="tab" aria-controls="reviews">5 reviews</a>
                </div>
                <!-- <p class="h1 fw-bold text-dark mb-4">$25</p> -->

                <div class="mb-3 magin_left">
                    <label for="animal" class="form-label fw-semibold mb-1 font_color2">MODEL : 2808Q</label>
                  <p class="fw-semibold mb-2">Product Detail</p>
                    <ul class="list-unstyled">
                        <li><strong>PRODUCT DIMENSIONS:</strong>( W x D x H ) 740 x 420 x 150 mm</li>
                        <li><strong>CUT-OUT DIMENSIONS:</strong> ( W x D x H ) 650 x 350 mm</li>
                    </ul>
                    </div>
                    <div class="d-flex align-items-center text-muted text-sm mb-4 magin_left">
                    <span class="me-4">Availability: <span class="fw-bold text-success"> in stock</span></span>
                </div>

                <div class="d-flex align-items-center mb-5 magin_left">
                    <button class="btn fw-semibold py-2 px-4 rounded-md btn_shop text-white">Shop Now</button>
                </div>

                <div class="d-flex align-items-center text-muted text-sm magin_left">
                    <span class="me-3">SHARE ON:</span>
                    <a href="#" class="me-2 text-muted hover-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="me-2 text-muted hover-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="me-2 text-muted hover-link"><i class="fab fa-pinterest"></i></a>
                    <a href="#" class="text-muted hover-link"><i class="fab fa-instagram"></i></a>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Description & Additional Information Tabs -->
    <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews (5)</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active p-4 bg-white rounded-lg shadow-sm" id="description" role="tabpanel" aria-labelledby="description-tab">
            <div class="row">
                <div class="col-lg-6">
                    <p class="mb-3">Support AMA Animal Rescue by showing how much you love your pet with "I Love My Cat/Dog" charm bracelet. And remember, every purchase made
                         off of the AMA SHOP goes directly to the medical expenses of our fur children.</p>    
                </div>
                <div class="col-lg-6">
                     <p class="fw-semibold mb-2">Products details:</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check-circle text-success me-2"></i>Material : Black Tempered Glass</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i>2 Burners Power : 5.0KW X 2</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i>Larger Heat Area up to 55% Reduce Gas Consumpition</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i>Flame Failure Device With FFD</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-pane fade p-4 bg-white rounded-lg shadow-sm" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
            <h3 class="h5 mb-3">Customer Reviews</h3>
            <!-- Example Review -->
            <div class="mb-4 pb-3 border-bottom">
                <div class="d-flex align-items-center mb-2">
                    <div class="star-rating me-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="text-muted small">By John Doe on 2023-04-15</span>
                </div>
                <p>"Absolutely love this bracelet! The charms are adorable and it feels very well made."</p>
            </div>
            <!-- More reviews could go here -->
            <p class="text-muted">No more reviews to display.</p>
        </div>
    </div>
    <!-- You May Also Like Section -->
   <?php include "related.php"?>
    <!-- Main Banner Section -->
   <?php include "footer2.php"?>
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
            "../pic/2818_1.png",
            "../pic/2818_2.png",
            "../pic/2818_3.png",
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
