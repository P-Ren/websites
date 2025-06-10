<?php
// --- Placeholder Product Data (In a real application, this would come from a database) ---
// For demonstration, we'll use a simple array.
$product_id = isset($_GET['id']) ? (int)$_GET['id'] : 1; // Get product ID from URL, default to 1

$products = [
    1 => [
        'name' => 'Built-In Gashob',
        'main_image' => 'img/2808.png', // Main product image
        'thumbnail_images' => [
            'img/2808.png', // Thumbnail 1
            'img/2808Q.png', // Thumbnail 2
            'img/gashob.png', // Thumbnail 3
        ],
        'product_details' => [ // Data for the "Product Details" accordion section
            'Burners' => '2',
            'Material' => 'Tempered Glass, Stainless Steel',
            'Ignition' => 'Automatic Pulse Ignition',
            'Safety Device' => 'Flame Failure Device (FFD)',
            'Gas Type' => 'LPG (or Natural Gas with conversion kit)',
            'Control Type' => 'Knob Control'
        ],
        'product_dimension' => [ // Data for the "Product Dimension" accordion section
            'Overall Dimension' => '730mm (L) x 420mm (W) x 100mm (H)',
            'Cut-Out Dimension' => '680mm (L) x 380mm (W)',
            'Weight' => '8.5 kg'
        ]
    ]
    // Add more products here if needed for dynamic loading by changing `id` in URL
];

// Data for the "Related Products" section
$related_products = [
    [
        'id' => 2,
        'name' => 'Single Burner Gashob',
        'image' => 'img/204.jpg'
    ],
    [
        'id' => 3,
        'name' => '3-Burner Gashob Deluxe',
        'image' => 'img/204.jpg'
    ],
    [
        'id' => 4,
        'name' => 'Compact 2-Burner Gashob',
        'image' => 'img/204.jpg'
    ]
];

// Attempt to get the product based on the ID from the URL, or default to the first one
$product = $products[$product_id] ?? null;

// If product is not found, redirect or show an error
if (!$product) {
    // In a real application, you might redirect to a 404 page or a product listing page
    header("Location: /products.php"); // Example redirect
    exit(); // Terminate script execution after redirect
}

// --- End Placeholder Data ---

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Product Detail</title>
    <?php include "bootstrap.php"?>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_detail.css">

</head>
<body>
    <?php include "healder.php"?>
    <?php include "sections.php"?>
    <!-- Main Container for the entire product detail page -->
    <div class="container container-main my-5 p-4">
        <div class="row">
            <!-- Product Images Column (takes half width on medium screens and up, full width on small) -->
            <div class="col-md-6 mb-4 mb-md-0 d-flex flex-column align-items-center">
                <!-- Main Product Image with its distinct cyan border -->
                <div class="main-image-frame mb-3">
                    <img src="<?php echo htmlspecialchars($product['main_image']); ?>" class="img-fluid" alt="<?php echo htmlspecialchars($product['name']); ?>">
                </div>
                <!-- Thumbnail Image Gallery with manual navigation arrows -->
                <div class="thumbnail-images d-flex justify-content-center justify-content-md-start flex-nowrap overflow-auto py-2 gap-2 position-relative w-100 px-4">
                    <!-- Previous Button for thumbnail carousel -->
                    
                    <?php foreach ($product['thumbnail_images'] as $index => $thumb_img): ?>
                        <!-- Individual thumbnail image -->
                        <img src="<?php echo htmlspecialchars($thumb_img); ?>" alt="Thumbnail <?php echo $index + 1?>" class="thumbnail <?php echo $index === 0 ? 'active' : ''; ?>">
                    <?php endforeach; ?>
                    <!-- Next Button for thumbnail carousel -->
                   
                </div>
            </div>

            <!-- Product Information Column (takes half width on medium screens and up, full width on small) -->
            <div class="col-md-6">
                <div class="product-info">
                    <!-- Product Title -->
                    <h1 class="product-title-gashob mb-4"><?php echo htmlspecialchars($product['name']); ?></h1>

                    <!-- Bootstrap Accordion for Product Details and Product Dimension -->
                    <div class="accordion mb-4" id="productInfoAccordion">
                        <!-- Product Details Accordion Item -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="productDetailsHeading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#productDetailsCollapse" aria-expanded="false" aria-controls="productDetailsCollapse">
                                    Product Details
                                </button>
                            </h2>
                            <div id="productDetailsCollapse" class="accordion-collapse collapse" aria-labelledby="productDetailsHeading" data-bs-parent="#productInfoAccordion">
                                <div class="accordion-body">
                                    <?php foreach ($product['product_details'] as $key => $value): ?>
                                        <p class="mb-1"><strong><?php echo htmlspecialchars($key); ?>:</strong> <?php echo htmlspecialchars($value); ?></p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <!-- Product Dimension Accordion Item -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="productDimensionHeading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#productDimensionCollapse" aria-expanded="false" aria-controls="productDimensionCollapse">
                                    Product Dimension
                                </button>
                            </h2>
                            <div id="productDimensionCollapse" class="accordion-collapse collapse" aria-labelledby="productDimensionHeading" data-bs-parent="#productInfoAccordion">
                                <div class="accordion-body">
                                    <?php foreach ($product['product_dimension'] as $key => $value): ?>
                                        <p class="mb-1"><strong><?php echo htmlspecialchars($key); ?>:</strong> <?php echo htmlspecialchars($value); ?></p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Buy Now Button -->
                    <button class="btn buy-now-btn mb-4" type="button">Buy Now</button>
                </div>
            </div>
        </div>

        <!-- Related Products Section -->
        <div class="related-products-section mt-5 pt-5">
            <h2 class="mb-4 text-uppercase">RELATED PRODUCTS</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($related_products as $related_product): ?>
                    <div class="col">
                        <div class="product-card">
                            <a href="?id=<?php echo htmlspecialchars($related_product['id']); ?>" class="text-decoration-none text-dark">
                                <img src="<?php echo htmlspecialchars($related_product['image']); ?>" class="img-fluid mb-3" alt="<?php echo htmlspecialchars($related_product['name']); ?>">
                                <h3 class=""><?php echo htmlspecialchars($related_product['name']); ?></h3>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php include "footer.php"?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script src="js/js_detail.js"></script>
    <script src="js/js.js"></script>
</body>
</html>