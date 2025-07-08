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
                <a href="./detail/hob/822.php"><img src="pic/822_1.png" alt="Product Image" class="w-full h-38 object-cover mb-3 rounded-lg"></a>
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Cooker Hob</h3>
                <p class="text-gray-600 mb-2 line-clamp-2">Two Infrared Hob,Sensor Touch and Sliding Control</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★☆</span>
                    <span class="text-gray-500 text-sm ml-2">(120 reviews)</span>
                </div>
                <p class="text-cyan-400 font-bold text-xl mb-4">RC.822G</p>
                <a href="./detail/hob/822.php" class="bg-orange-400 text-white px-3 py-5 rounded-full hover:bg-orange-500 transition-colors duration-200 w-80"><button>View More</button></a>
            </div>

            <!-- Product Card 2 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <a href="./detail/hob/855.php"><img src="pic/855_1.png" alt="Product Image" class="w-full h-38 object-cover mb-5 rounded-lg"></a>
                <h3 class="font-semibold text-lg text-gray-800 mb-3">Cooker Hob</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">Two Infrared Hob,Sensor Touch and Sliding Control</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-gray-500 text-sm ml-2">(85 reviews)</span>
                </div>
                <p class="text-cyan-400 font-bold text-xl mb-2">RC.855G</p>
                <a href="./detail/hob/855.php"><button class="bg-orange-400 text-white px-3 py-5 rounded-full hover:bg-orange-500 transition-colors duration-200 w-80">View More</button></a>
            </div>

            <!-- Product Card 3 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <a href="./detail/hob/811.php"><img src="pic/811_1.png" alt="Product Image" class="w-full h-38 object-cover mb-4 rounded-lg"></a>
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Cooker Hob</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">Two Induction Hob,Sensor Touch  and Sliding Control</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★☆</span>
                    <span class="text-gray-500 text-sm ml-2">(210 reviews)</span>
                </div>
                <p class="text-cyan-400 font-bold text-xl mb-4">RM.811</p>
                <a href="./detail/hob/811.php" class="bg-orange-400 text-white px-3 py-5 rounded-full hover:bg-orange-500 transition-colors duration-200 w-80 "><button >View More</button></a>
            </div>

            <!-- Product Card 4 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <a href="./detail/hob/877.php"><img src="pic/877_1.png" alt="Product Image" class="w-full h-38 object-cover mb-4 rounded-lg"></a>
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Cooker Hob</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">Two Induction Hob,Sensor Touch  Control.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-gray-500 text-sm ml-2">(150 reviews)</span>
                </div>
                <p class="text-cyan-400 font-bold text-xl mb-4">RC.877G</p>
                <a href="./detail/hob/877.php"><button class="bg-orange-400 text-white px-3 py-5 rounded-full hover:bg-orange-500 transition-colors duration-200 w-80">View More</button></a>
            </div>

            <!-- Product Card 5 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <a href="./detail/hob/8322.php"><img src="pic/8322_1.png" alt="Product Image" class="w-80 h-38 object-cover mb-4 rounded-lg"></a>
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Cooker Hob</h3>
                <p class="text-gray-600 mb-3 line-clamp-2">3 Cooking Zones,Sensor Touch  Control.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★☆</span>
                    <span class="text-gray-500 text-sm ml-2">(90 reviews)</span>
                </div>
                <p class="text-cyan-400 font-bold text-xl mb-4">RC.8322G</p>
                <a href="./detail/hob/8322.php"><button class="bg-orange-400 text-white px-3 py-5 rounded-full hover:bg-orange-500 transition-colors duration-200 w-80">View More</button></a>
            </div>

            <!-- Product Card 6 -->
            <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-200 ease-in-out">
                <a href="./detail/hob/866.php"><img src="pic/866_1.png" alt="Product Image" class="w-80 h-38 object-cover mb-4 rounded-lg"></a>
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Cooker Hob</h3>
                <p class="text-gray-600 mb-3 line-clamp-2"> Infrared Hob Domino,Sensor Touch  Control.</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-gray-500 text-sm ml-2">(180 reviews)</span>
                </div>
                <p class="text-cyan-400 font-bold text-xl mb-4">RC.866G</p>
                <a href="./detail/hob/866.php"><button class="bg-orange-400 text-white px-3 py-5 rounded-full hover:bg-orange-500 transition-colors duration-200 w-80">View More</button></a>
            </div>

            
           
            
        </main>
    </div>
</body>

</html>