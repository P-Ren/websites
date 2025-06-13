<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product & Category Page</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/47bc1c429d.js" crossorigin="anonymous"></script>
    <style>
        /* Custom styles for the Inter font */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>

</head>

<body class="bg-gray-100 min-h-screen">
    <!-- Navbar -->


    <!-- Main Content Area -->
    <div class="container mx-auto px-4 py-8 flex flex-col lg:flex-row gap-6">
        <!-- Left Sidebar - Filters -->
        <aside class="lg:w-1/4 bg-white p-6 rounded-xl shadow-lg h-full lg:sticky lg:top-24">
            <h2 class="font-bold text-xl mb-6 text-gray-800">Filters</h2>

            <!-- Category Filter -->
            <div class="mb-6 pb-4 border-b border-gray-200">
                <h3 class="font-semibold text-lg mb-3 text-gray-700">Category</h3>
                <ul>
                    <li class="mb-2"><a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors duration-200">Electronics</a></li>
                    <li class="mb-2"><a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors duration-200">Home Appliances</a></li>
                    <li class="mb-2"><a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors duration-200">Fashion</a></li>
                    <li class="mb-2"><a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors duration-200">Books</a></li>
                    <li class="mb-2"><a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors duration-200">Sports & Outdoors</a></li>
                </ul>
            </div>

            <!-- Price Range Filter -->
            <div class="mb-6 pb-4 border-b border-gray-200">
                <h3 class="font-semibold text-lg mb-3 text-gray-700">Price Range</h3>
                <input type="range" min="0" max="1000" value="500" class="w-full h-2 bg-indigo-200 rounded-lg appearance-none cursor-pointer">
                <div class="flex justify-between text-sm text-gray-600 mt-2">
                    <span>$0</span>
                    <span>$1000+</span>
                </div>
            </div>

            <!-- Brand Filter -->
            <div class="mb-6 pb-4 border-b border-gray-200">
                <h3 class="font-semibold text-lg mb-3 text-gray-700">Brand</h3>
                <ul>
                    <li class="mb-2"><input type="checkbox" id="brand1" class="mr-2 rounded text-indigo-600"><label for="brand1" class="text-gray-600">Brand A</label></li>
                    <li class="mb-2"><input type="checkbox" id="brand2" class="mr-2 rounded text-indigo-600"><label for="brand2" class="text-gray-600">Brand B</label></li>
                    <li class="mb-2"><input type="checkbox" id="brand3" class="mr-2 rounded text-indigo-600"><label for="brand3" class="text-gray-600">Brand C</label></li>
                </ul>
            </div>

            <!-- Rating Filter -->
            <div class="mb-6 pb-4 border-b border-gray-200">
                <h3 class="font-semibold text-lg mb-3 text-gray-700">Customer Reviews</h3>
                <ul>
                    <li class="mb-2 flex items-center">
                        <input type="radio" id="rating5" name="rating" class="mr-2 rounded-full text-indigo-600"><label for="rating5" class="text-gray-600 flex items-center">
                            <span class="text-yellow-400">★★★★★</span> & Up
                        </label>
                    </li>
                    <li class="mb-2 flex items-center">
                        <input type="radio" id="rating4" name="rating" class="mr-2 rounded-full text-indigo-600"><label for="rating4" class="text-gray-600 flex items-center">
                            <span class="text-yellow-400">★★★★☆</span> & Up
                        </label>
                    </li>
                    <li class="mb-2 flex items-center">
                        <input type="radio" id="rating3" name="rating" class="mr-2 rounded-full text-indigo-600"><label for="rating3" class="text-gray-600 flex items-center">
                            <span class="text-yellow-400">★★★☆☆</span> & Up
                        </label>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Product Grid -->
        <main class="lg:w-3/4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6">
            <!-- Product Card 1 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <img src="https://placehold.co/300x200/A78BFA/ffffff?text=Product+1" alt="Product Image" class="w-full h-36 object-cover mb-4 rounded-lg">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Wireless Headphones</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">High-fidelity sound with comfortable earcups.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★☆</span>
                    <span class="text-gray-500 text-sm ml-2">(120 reviews)</span>
                </div>
                <p class="text-indigo-600 font-bold text-xl mb-4">$99.99</p>
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition-colors duration-200 w-full">Add to Cart</button>
            </div>

            <!-- Product Card 2 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <img src="https://placehold.co/300x200/FDBA74/ffffff?text=Product+2" alt="Product Image" class="w-full h-36 object-cover mb-4 rounded-lg">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Smart Watch</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">Track your fitness and receive notifications.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-gray-500 text-sm ml-2">(85 reviews)</span>
                </div>
                <p class="text-indigo-600 font-bold text-xl mb-4">$199.50</p>
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition-colors duration-200 w-full">Add to Cart</button>
            </div>

            <!-- Product Card 3 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <img src="https://placehold.co/300x200/93C5FD/ffffff?text=Product+3" alt="Product Image" class="w-full h-36 object-cover mb-4 rounded-lg">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Portable Bluetooth Speaker</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">Loud and clear sound, perfect for outdoors.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★☆</span>
                    <span class="text-gray-500 text-sm ml-2">(210 reviews)</span>
                </div>
                <p class="text-indigo-600 font-bold text-xl mb-4">$45.00</p>
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition-colors duration-200 w-full">Add to Cart</button>
            </div>

            <!-- Product Card 4 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <img src="https://placehold.co/300x200/FDA47AF/ffffff?text=Product+4" alt="Product Image" class="w-full h-36 object-cover mb-4 rounded-lg">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Gaming Mouse</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">Ergonomic design with programmable buttons.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-gray-500 text-sm ml-2">(150 reviews)</span>
                </div>
                <p class="text-indigo-600 font-bold text-xl mb-4">$60.25</p>
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition-colors duration-200 w-full">Add to Cart</button>
            </div>

            <!-- Product Card 5 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <img src="https://placehold.co/300x200/818CF8/ffffff?text=Product+5" alt="Product Image" class="w-full h-36 object-cover mb-4 rounded-lg">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Ultra HD Monitor</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">Crystal clear display for work and entertainment.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★☆</span>
                    <span class="text-gray-500 text-sm ml-2">(90 reviews)</span>
                </div>
                <p class="text-indigo-600 font-bold text-xl mb-4">$349.99</p>
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition-colors duration-200 w-full">Add to Cart</button>
            </div>

            <!-- Product Card 6 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <img src="https://placehold.co/300x200/C084FC/ffffff?text=Product+6" alt="Product Image" class="w-full h-36 object-cover mb-4 rounded-lg">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Noise-Cancelling Earbuds</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">Immersive audio with active noise cancellation.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-gray-500 text-sm ml-2">(180 reviews)</span>
                </div>
                <p class="text-indigo-600 font-bold text-xl mb-4">$129.00</p>
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition-colors duration-200 w-full">Add to Cart</button>
            </div>

            <!-- Product Card 7 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <img src="https://placehold.co/300x200/FCA5A5/ffffff?text=Product+7" alt="Product Image" class="w-full h-36 object-cover mb-4 rounded-lg">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Robot Vacuum Cleaner</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">Automated cleaning for a spotless home.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★☆</span>
                    <span class="text-gray-500 text-sm ml-2">(250 reviews)</span>
                </div>
                <p class="text-indigo-600 font-bold text-xl mb-4">$299.99</p>
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition-colors duration-200 w-full">Add to Cart</button>
            </div>

            <!-- Product Card 8 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <img src="https://placehold.co/300x200/BEF264/ffffff?text=Product+8" alt="Product Image" class="w-full h-36 object-cover mb-4 rounded-lg">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Espresso Machine</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">Brew rich and aromatic coffee at home.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-gray-500 text-sm ml-2">(70 reviews)</span>
                </div>
                <p class="text-indigo-600 font-bold text-xl mb-4">$150.00</p>
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition-colors duration-200 w-full">Add to Cart</button>
            </div>
        </main>
    </div>
</body>

</html>