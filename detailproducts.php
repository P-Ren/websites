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
    <link rel="stylesheet" href="css/style_detail.css">
</head>
<body class="p-4 p-md-5 p-lg-5">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded-lg shadow-sm mb-5">
        <div class="container-fluid">
        
                <img src="img/logo.svg" alt="Logo" class="d-inline-block align-text-top me-2 rounded"  style="width: 150px;"> 
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item magin">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link magin" href="#">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link magin" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link magin" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link magin" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Top Slide Section - Kitchen Appliances -->
    <div class="mb-5">
        <h2 class="h3 fw-bold text-dark text-center mb-4">Kitchen Appliances</h2>
        <div id="kitchenApplianceCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#kitchenApplianceCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#kitchenApplianceCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#kitchenApplianceCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner rounded-lg shadow-sm">
                <div class="carousel-item active">
                    <img src="https://placehold.co/1200x300/a0c4ff/ffffff?text=Modern+Blender" class="d-block w-100" alt="Modern Blender">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>High-Performance Blenders</h5>
                        <p>Blend your way to healthy living.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://placehold.co/1200x300/caffbf/ffffff?text=Smart+Coffee+Maker" class="d-block w-100" alt="Smart Coffee Maker">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Smart Coffee Makers</h5>
                        <p>Your perfect brew, every morning.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://placehold.co/1200x300/ffadad/ffffff?text=Gourmet+Toaster" class="d-block w-100" alt="Gourmet Toaster">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Gourmet Toasters</h5>
                        <p>Crispy and golden, just how you like it.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#kitchenApplianceCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#kitchenApplianceCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Navigation Breadcrumbs -->
    <nav class="mb-4">
        <ol class="breadcrumb bg-transparent p-0">
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">HOME</a></li>
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Detail</a></li>
        </ol>
    </nav>

    <!-- Product Detail Section -->
    <div class="card shadow-lg mb-5 rounded-lg p-4 p-lg-5">
        <div class="row">
            <!-- Product Image Gallery -->
            <div class="col-12 col-lg-5 d-flex flex-column align-items-center mb-4 mb-lg-0 position-relative">
                <div class="w-100 mb-4 product-image-container" style="height: 320px;">
                    <img id="mainProductImage" src="pic/2808Q-1.PNG" alt="Main Product Image">
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
                    <div class="product-image-container flex-shrink-0 cursor-pointer" style="width: 80px; height: 80px;" onclick="setMainImage(0)">
                        <img src="pic/2808.png" alt="Thumbnail 1">
                    </div>
                    <div class="product-image-container flex-shrink-0 cursor-pointer" style="width: 80px; height: 80px;" onclick="setMainImage(1)">
                        <img src="pic/2808Q-1.PNG" alt="Thumbnail 2">
                    </div>
                    <div class="product-image-container flex-shrink-0 cursor-pointer" style="width: 80px; height: 80px;" onclick="setMainImage(2)">
                        <img src="pic/2808_2.png" alt="Thumbnail 3">
                    </div>
                </div>
                <!-- Add a simple file input for demonstration of selection -->
                <div class="mt-4 w-100">
                    <label for="productImageUpload" class="form-label">Upload Product Image (PHP handles this)</label>
                    <input class="form-control" type="file" id="productImageUpload" name="product_image_upload">
                    <small class="text-muted">This input would be processed by a PHP script on the server.</small>
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-12 col-lg-7">
                <span class="text-uppercase text-muted fw-semibold mb-2 d-block">JEWELRY</span>
                <h1 class="display-6 fw-bold text-dark mb-2">I Love My Pet Charm Bracelet</h1>
                <div class="d-flex align-items-center mb-3">
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
                <p class="h1 fw-bold text-dark mb-4">$25</p>

                <div class="mb-3">
                    <label for="animal" class="form-label text-muted fw-semibold mb-1">Bracelet animal</label>
                    <div class="input-group">
                        <select id="animal" class="form-select rounded-md">
                            <option>Dog</option>
                            <option>Cat</option>
                            <option>Bird</option>
                        </select>
                        <span class="input-group-text bg-white border-0 py-0 pe-0">
                            <i class="custom-dropdown-arrow"></i>
                        </span>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="color" class="form-label text-muted fw-semibold mb-1">Color:</label>
                    <div class="input-group">
                        <select id="color" class="form-select rounded-md">
                            <option>Turquoise</option>
                            <option>Red</option>
                            <option>Blue</option>
                        </select>
                        <span class="input-group-text bg-white border-0 py-0 pe-0">
                            <i class="custom-dropdown-arrow"></i>
                        </span>
                    </div>
                </div>

                <div class="d-flex align-items-center text-muted text-sm mb-4">
                    <span class="me-4">Availability: <span class="fw-bold text-success">10 in stock</span></span>
                    <span>SKU: <span class="fw-bold">ILMPT-C</span></span>
                </div>

                <div class="d-flex align-items-center mb-5">
                    <div class="input-group me-3" style="width: 120px;">
                        <button class="btn btn-outline-secondary rounded-start-md" type="button" onclick="updateQuantity(-1)">-</button>
                        <input type="text" id="quantity" value="1" class="form-control text-center border-start-0 border-end-0" readonly>
                        <button class="btn btn-outline-secondary rounded-end-md" type="button" onclick="updateQuantity(1)">+</button>
                    </div>
                    <button class="btn btn-dark fw-semibold py-2 px-4 rounded-md">Add to cart</button>
                </div>

                <div class="d-flex align-items-center text-muted text-sm">
                    <span class="me-3">SHARE ON:</span>
                    <a href="#" class="me-2 text-muted hover-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="me-2 text-muted hover-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="me-2 text-muted hover-link"><i class="fab fa-pinterest"></i></a>
                    <a href="#" class="text-muted hover-link"><i class="fab fa-instagram"></i></a>
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
                <div class="col-lg-8">
                    <p class="mb-3">Support AMA Animal Rescue by showing how much you love your pet with "I Love My Cat/Dog" charm bracelet. And remember, every purchase made off of the AMA SHOP goes directly to the medical expenses of our fur children.</p>
                    <p class="fw-semibold mb-2">Products details:</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check-circle text-success me-2"></i>Exclusively handmade</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i>Antique gold charms</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i>Semi precious round smooth gemstone</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i>8mm beads</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <p class="fw-semibold mb-2">Additional Information</p>
                    <ul class="list-unstyled">
                        <li><strong>DIMENSIONS:</strong> 3x3x3</li>
                        <li><strong>WEIGHT:</strong> 0.75 lbs</li>
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
            "pic/2808_2.png",
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
