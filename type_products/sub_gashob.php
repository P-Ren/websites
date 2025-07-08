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
                    <li class="mb-2"><a href="Oven.php" class="text-gray-600 hover:text-indigo-600 transition-colors duration-200">Microwave & Oven</a></li>
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
                <a href="gashob_detail/2808.php"><img src="pic/1888_1.png" alt="Product Image" class="w-full h-42 object-cover mb-4 rounded-lg"></a>
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Built-In Gashob</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">Larger Heat Area up to 55% Reduce Gas Consumpition.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★☆</span>
                    <span class="text-gray-500 text-sm ml-2">(120 reviews)</span>
                </div>
                <p class="text-cyan-500 font-bold text-xl mb-4">RC.1888Q</p>
                <a href="gashob_detail/2808.php"><button class="bg-orange-400 text-white px-4 py-4 rounded-full hover:bg-orange-500 transition-colors duration-200 w-80">View Details</button></a>
            </div>
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <a href="gashob_detail/2808.php"><img src="pic/2808_1.png" alt="Product Image" class="w-full h-42 object-cover mb-4 rounded-lg"></a>
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Built-In Gashob</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">2Burners Tempered Glass, Stainless Steel.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★☆</span>
                    <span class="text-gray-500 text-sm ml-2">(120 reviews)</span>
                </div>
                <p class="text-cyan-500 font-bold text-xl mb-4">RC.2808Q</p>
                <a href="gashob_detail/2808.php"><button class="bg-orange-400 text-white px-4 py-4 rounded-full hover:bg-orange-500 transition-colors duration-200 w-80">View Details</a>
            </div>
            <!-- Product Card 2 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <a href="gashob_detail/2818.php"><img src="pic/2818_1.png" alt="Product Image" class="w-full h-42 object-cover mb-5 rounded-lg"></a>
                <h3 class="font-semibold text-lg text-gray-800 mb-4 mt-3">Built-In Gashob</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">2Burners Tempered Glass, Stainless Steel.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-gray-500 text-sm ml-2">(85 reviews)</span>
                </div>
                <p class="text-cyan-500 font-bold text-xl mb-4">RC.2818Q</p>
                <button class="bg-orange-400 text-white px-4 py-4 rounded-full hover:bg-orange-500 transition-colors duration-200 w-80"><a href="gashob_detail/2818.php">View Details</a> </button>
            </div>

            <!-- Product Card 3 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <a href="gashob_detail/2828.php"><img src="pic/2828_1.png" alt="Product Image" class="w-full h-42 object-cover mb-4 rounded-lg"></a>
                <h3 class="font-semibold text-lg text-gray-800 mb-2 mt-4">Built-In Gashob</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">LPG (or Natural Gas with conversion kit).</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★☆</span>
                    <span class="text-gray-500 text-sm ml-2">(210 reviews)</span>
                </div>
                <p class="text-cyan-500 font-bold text-xl mb-4">RC.2828Q</p>
                <button class="bg-orange-400 text-white px-4 py-4 rounded-full hover:bg-orange-500 transition-colors duration-200 w-80"><a href="gashob_detail/2828.php">View Details</a></button>
            </div>

            <!-- Product Card 4 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <a href="gashob_detail/2838.php"><img src="pic/2838_1.png" alt="Product Image" class="w-full h-42 object-cover mb-4 rounded-lg"></a>
                <h3 class="font-semibold text-lg text-gray-800 mb-2 mt-5">Built-In Gashob</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">2Burners Tempered Glass, Stainless Steel.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-gray-500 text-sm ml-2">(150 reviews)</span>
                </div>
                <p class="text-cyan-500 font-bold text-xl mb-4">RC.2838Q</p>
                <button class="bg-orange-400 text-white px-4 py-4 rounded-full hover:bg-orange-500 transition-colors duration-200 w-80"><a href="gashob_detail/2838.php">View Details</a> </button>
            </div>

            <!-- Product Card 5 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <a href="gashob_detail/2868.php"><img src="pic/2868_1.png" alt="Product Image" class="w-full h-42 object-cover mb-4 rounded-lg"></a>
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Built-In Gashob</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">2Burners Tempered Glass, Stainless Steel.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★☆</span>
                    <span class="text-gray-500 text-sm ml-2">(90 reviews)</span>
                </div>
                <p class="text-cyan-500 font-bold text-xl mb-4">RC.2868Q</p>
                <button class="bg-orange-400 text-white px-4 py-4 rounded-full hover:bg-orange-500 transition-colors duration-200 w-80"><a href="gashob_detail/2868.php">View Details</a></button>
            </div>

            <!-- Product Card 6 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <a href="gashob_detail/2878.php"><img src="pic/2878_1.png" alt="Product Image" class="w-full h-42 object-cover mb-4 rounded-lg"></a>
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Built_In Gashob</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">Larger Heat Area up to 55% Reduce Gas Consumpition.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-gray-500 text-sm ml-2">(180 reviews)</span>
                </div>
                <p class="text-cyan-500 font-bold text-xl mb-4">RC.2878Q</p>
                <button class="bg-orange-400 text-white px-4 py-4 rounded-full hover:bg-orange-500 transition-colors duration-200 w-80"><a href="gashob_detail/2878.php">View Details</a></button>
            </div>

            <!-- Product Card 7 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <a href="gashob_detail/2888.php"><img src="pic/2888_1.png" alt="Product Image" class="w-full h-42 object-cover mb-4 rounded-lg"></a>
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Built_In Gashob</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">Black Tempered Glass 10mm, Cast lron Pan Support</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★☆</span>
                    <span class="text-gray-500 text-sm ml-2">(250 reviews)</span>
                </div>
                <p class="text-cyan-500 font-bold text-xl mb-4">RC.2888Q</p>
                <button class="bg-orange-400 text-white px-4 py-4 rounded-full hover:bg-orange-500 transition-colors duration-200 w-80"><a href="gashob_detail/2888.php">View Details</a></button>
            </div>

            <!-- Product Card 8 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <a href="gashob_detail/2858.php"><img src="pic/2858_1.png" alt="Product Image" class="w-full h-42 object-cover mb-4 rounded-lg"></a>
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Built_In Gashob</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">Black Tempered Glass 8mm,Cast lron Pan Suppor.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-gray-500 text-sm ml-2">(180 reviews)</span>
                </div>
                <p class="text-cyan-500 font-bold text-xl mb-4">RC.2858Q</p>
                <button class="bg-orange-400 text-white px-4 py-4 rounded-full hover:bg-orange-500 transition-colors duration-200 w-80"><a href="gashob_detail/2858.php">View Details</a></button>
            </div>
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <a href="gashob_detail/3818.php"><img src="pic/3818_1.png" alt="Product Image" class="w-full h-42 object-cover mb-4 rounded-lg"></a>
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Built_In Gashob</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">3Burners Tempered Glass, Stainless Steel.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-gray-500 text-sm ml-2">(70 reviews)</span>
                </div>
                <p class="text-cyan-500 font-bold text-xl mb-4">RC.3818Q</p>
                <button class="bg-orange-400 text-white px-4 py-4 rounded-full hover:bg-orange-500 transition-colors duration-200 w-80"><a href="gashob_detail/3818.php">View Details</a></button>
            </div>
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <a href="#"><img src="pic/2872_1.png" alt="Product Image" class="w-full h-42 object-cover mb-4 rounded-lg"></a>
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Built_In Gashob</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">Larger Heat Area up to 55% Reduce Gas Consumpition.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-gray-500 text-sm ml-2">(250 reviews)</span>
                </div>
                <p class="text-cyan-500 font-bold text-xl mb-4">RC.2872Q</p>
                <button class="bg-orange-400 text-white px-4 py-4 rounded-full hover:bg-orange-500 transition-colors duration-200 w-80"><a href="#">View Details</a></button>
            </div>
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <a href="#"><img src="pic/2882_1.png" alt="Product Image" class="w-full h-42 object-cover mb-4 rounded-lg"></a>
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Built_In Gashob</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">Larger Heat Area up to 55% Reduce Gas Consumpition</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-gray-500 text-sm ml-2">(220 reviews)</span>
                </div>
                <p class="text-cyan-500 font-bold text-xl mb-4">RC.2882Q</p>
                <button class="bg-orange-400 text-white px-4 py-4 rounded-full hover:bg-orange-500 transition-colors duration-200 w-80"><a href="#">View Details</a></button>
            </div>
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <a href="gashob_detail/4888.php"><img src="pic/4888_1.png" alt="Product Image" class="w-full h-42 object-cover mb-4 rounded-lg"></a>
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Built_In Gashob</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">Black Tempered Glass and SUS 304, Cast Iron Pan Support</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-gray-500 text-sm ml-2">(170 reviews)</span>
                </div>
                <p class="text-cyan-500 font-bold text-xl mb-4">RC.4888Q</p>
                <button class="bg-orange-400 text-white px-4 py-4 rounded-full hover:bg-orange-500 transition-colors duration-200 w-80"><a href="gashob_detail/4888.php">View Details</a></button>
            </div>
        </main>
    </div>
</body>

</html>