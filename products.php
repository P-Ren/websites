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
                <h2 class="font-semibold text-lg mb-3 text-gray-700">Category</h2>
                <ul>
                    <li class="mb-2"><a href="Gashob.php" class="text-gray-600 hover:text-indigo-600 transition-colors duration-200">Built-In Gashob</a></li>
                    <li class="mb-2"><a href="Gas_stove.php" class="text-gray-600 hover:text-indigo-600 transition-colors duration-200">Gas Stove</a></li>
                    <li class="mb-2"><a href="Hob.php" class="text-gray-600 hover:text-indigo-600 transition-colors duration-200">Cooker Hob</a></li>
                    <li class="mb-2"><a href="Hood.php" class="text-gray-600 hover:text-indigo-600 transition-colors duration-200">Hood</a></li>
                    <li class="mb-2"><a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors duration-200">Microwave & Oven</a></li>
                </ul>
            </div>

            
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
                <img src="pic/2808_1.png" alt="Product Image" class="w-full h-36 object-cover mb-4 rounded-lg">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Built-In Gashob</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">2Burners Tempered Glass, Stainless Steel.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★☆</span>
                    <span class="text-gray-500 text-sm ml-2">(120 reviews)</span>
                </div>
                <p class="text-indigo-600 font-bold text-xl mb-4">RC.2808Q</p>
               <button class="bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition-colors duration-200 w-full"> <a href="gashob_detail/2808.php">Add to Cart</a></button>
            </div>

            <!-- Product Card 2 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <img src="https://placehold.co/300x200/FDBA74/ffffff?text=Product+2" alt="Product Image" class="w-full h-36 object-cover mb-4 rounded-lg">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Built-In Gashob</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">2Burners Tempered Glass, Stainless Steel.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-gray-500 text-sm ml-2">(85 reviews)</span>
                </div>
                <p class="text-indigo-600 font-bold text-xl mb-4">RC.2818Q</p>
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition-colors duration-200 w-full"><a href="gashob_detail/2818.php">View More</a></button>
            </div>

            <!-- Product Card 3 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <img src="https://placehold.co/300x200/93C5FD/ffffff?text=Product+3" alt="Product Image" class="w-full h-36 object-cover mb-4 rounded-lg">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Built-In Gashob</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">LPG (or Natural Gas with conversion kit).</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★☆</span>
                    <span class="text-gray-500 text-sm ml-2">(210 reviews)</span>
                </div>
                <p class="text-indigo-600 font-bold text-xl mb-4">RC.2828Q</p>
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition-colors duration-200 w-full"><a href="gashob_detail/2828.php">View More</a></button>
            </div>

            <!-- Product Card 4 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <img src="https://placehold.co/300x200/FDA47AF/ffffff?text=Product+4" alt="Product Image" class="w-full h-36 object-cover mb-4 rounded-lg">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Cooker Hob</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">2Burners Tempered Glass, Stainless Steel.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-gray-500 text-sm ml-2">(150 reviews)</span>
                </div>
                <p class="text-indigo-600 font-bold text-xl mb-4">RC.822G</p>
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition-colors duration-200 w-full">Add to Cart</button>
            </div>

            <!-- Product Card 5 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <img src="https://placehold.co/300x200/818CF8/ffffff?text=Product+5" alt="Product Image" class="w-full h-36 object-cover mb-4 rounded-lg">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Cooker Hob</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">2Burners Tempered Glass, Stainless Steel.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★☆</span>
                    <span class="text-gray-500 text-sm ml-2">(90 reviews)</span>
                </div>
                <p class="text-indigo-600 font-bold text-xl mb-4">RC.8322G</p>
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition-colors duration-200 w-full">Add to Cart</button>
            </div>

            <!-- Product Card 6 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <img src="https://placehold.co/300x200/C084FC/ffffff?text=Product+6" alt="Product Image" class="w-full h-36 object-cover mb-4 rounded-lg">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Cooker Hood</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">2Burners Tempered Glass, Stainless Steel.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-gray-500 text-sm ml-2">(180 reviews)</span>
                </div>
                <p class="text-indigo-600 font-bold text-xl mb-4">RC.6001B</p>
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition-colors duration-200 w-full">Add to Cart</button>
            </div>

            <!-- Product Card 7 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <img src="https://placehold.co/300x200/FCA5A5/ffffff?text=Product+7" alt="Product Image" class="w-full h-36 object-cover mb-4 rounded-lg">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Cooker Hood</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">2Burners Tempered Glass, Stainless Steel.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★☆</span>
                    <span class="text-gray-500 text-sm ml-2">(250 reviews)</span>
                </div>
                <p class="text-indigo-600 font-bold text-xl mb-4">RC.7001S</p>
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition-colors duration-200 w-full">Add to Cart</button>
            </div>

            <!-- Product Card 8 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <img src="https://placehold.co/300x200/BEF264/ffffff?text=Product+8" alt="Product Image" class="w-full h-36 object-cover mb-4 rounded-lg">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Cooker Hood</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">3Burners Tempered Glass, Stainless Steel.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-gray-500 text-sm ml-2">(70 reviews)</span>
                </div>
                <p class="text-indigo-600 font-bold text-xl mb-4">RC.9888H</p>
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition-colors duration-200 w-full">Add to Cart</button>
            </div>
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <img src="https://placehold.co/300x200/BEF264/ffffff?text=Product+8" alt="Product Image" class="w-full h-36 object-cover mb-4 rounded-lg">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Cooker Hood</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">3Burners Tempered Glass, Stainless Steel.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-gray-500 text-sm ml-2">(70 reviews)</span>
                </div>
                <p class="text-indigo-600 font-bold text-xl mb-4">RC.79H25DC90</p>
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition-colors duration-200 w-full">Add to Cart</button>
            </div>
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <img src="https://placehold.co/300x200/BEF264/ffffff?text=Product+8" alt="Product Image" class="w-full h-36 object-cover mb-4 rounded-lg">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Diswasher</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">3Burners Tempered Glass, Stainless Steel.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-gray-500 text-sm ml-2">(70 reviews)</span>
                </div>
                <p class="text-indigo-600 font-bold text-xl mb-4">RC.6066L</p>
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition-colors duration-200 w-full">Add to Cart</button>
            </div>
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <img src="https://placehold.co/300x200/BEF264/ffffff?text=Product+8" alt="Product Image" class="w-full h-36 object-cover mb-4 rounded-lg">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Microwave</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">3Burners Tempered Glass, Stainless Steel.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-gray-500 text-sm ml-2">(70 reviews)</span>
                </div>
                <p class="text-indigo-600 font-bold text-xl mb-4">RC.2505L</p>
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition-colors duration-200 w-full">Add to Cart</button>
            </div>
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <img src="https://placehold.co/300x200/BEF264/ffffff?text=Product+8" alt="Product Image" class="w-full h-36 object-cover mb-4 rounded-lg">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Oven</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">3Burners Tempered Glass, Stainless Steel.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-gray-500 text-sm ml-2">(70 reviews)</span>
                </div>
                <p class="text-indigo-600 font-bold text-xl mb-4">RC.7080L</p>
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition-colors duration-200 w-full">Add to Cart</button>
            </div>
        </main>
    </div>
</body>

</html>