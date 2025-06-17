<div class="card shadow-lg mb-5 rounded-lg p-4 p-lg-7">
        <div class="row">
            <!-- Product Image Gallery -->
            <div class="col-12 col-lg-6 d-flex flex-column align-items-center mb-4 mb-lg-0 position-relative">
                <div class="w-100 mb-4 product-image-container" style="height: 400px;">
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
                    <div class="product-image-container flex-shrink-0 cursor-pointer" style="width: 80px; height: 80px; margin-left: 2rem;" onclick="setMainImage(0)">
                        
                        <img src="pic/2808.png" alt="Thumbnail 1">
                    </div>
                    <div class="product-image-container flex-shrink-0 cursor-pointer" style="width: 80px; height: 80px;  margin-left: 2rem;" onclick="setMainImage(1)">
                        <img src="pic/2808Q-1.PNG" alt="Thumbnail 2">
                    </div>
                    <div class="product-image-container flex-shrink-0 cursor-pointer" style="width: 80px; height: 80px;  margin-left: 2rem;" onclick="setMainImage(2)">
                        <img src="../pic/2808_2.png" alt="Thumbnail 3">
                    </div>
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-12 col-lg-6">
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
                <!-- <p class="h1 fw-bold text-dark mb-4">$25</p> -->

                <div class="mb-3">
                    <label for="animal" class="form-label text-muted fw-semibold mb-1">Bracelet animal</label>
                  <p class="fw-semibold mb-2">Additional Information</p>
                    <ul class="list-unstyled">
                        <li><strong>PRODUCT DIMENSIONS:</strong> 410 X 720 mm</li>
                        <li><strong>CUT-OUT DIMENSIONS:</strong> 350 X 650 mm</li>
                    </ul>
                    </div>
                    <div class="d-flex align-items-center text-muted text-sm mb-4">
                    <span class="me-4">Availability: <span class="fw-bold text-success"> in stock</span></span>
                </div>

                <div class="d-flex align-items-center mb-5">
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
                        <li><i class="fas fa-check-circle text-success me-2"></i>Exclusively handmade</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i>Antique gold charms</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i>Semi precious round smooth gemstone</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i>8mm beads</li>
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