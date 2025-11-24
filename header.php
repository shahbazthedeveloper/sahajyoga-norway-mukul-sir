<div x-data="appState()" x-cloak>
<header class="bg-white sticky top-0 z-50 shadow-sm">
        <div class="container mx-auto flex justify-between items-center p-4">
            <!-- Logo -->
            <div class="flex items-center order-1 lg:order-none">
                <a href="index.php"><img src="assets/img/logo.png" alt="Sahaja Yoga Logo" class="h-8 md:h-10"></a>
            </div>

            <!-- Language buttons (mobile only) -->
            <div class="shah space-x-1 flex order-2 lg:order-none lg:hidden">
                <button @click="setLanguage('en')" :class="{ 'active': language === 'en' }" class="language-btn px-0 py-1 rounded-md text-sm">
                    English
                </button>
                <span>/</span>
                <button @click="setLanguage('no')" :class="{ 'active': language === 'no' }" class="language-btn px-0 py-1 rounded-md text-sm">
                    Norsk
                </button>
            </div>

            <!-- Hamburger (mobile only) -->
            <button @click="open = !open" class="lg:hidden focus:outline-none text-gray-700 z-50 order-3">
                <!-- Hamburger -->
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <!-- Close -->
                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Nav Menu -->
            <nav class="fixed lg:static top-0 right-0 h-full w-64 lg:w-auto bg-white lg:bg-transparent shadow-md lg:shadow-none 
                 transform translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out z-40"
                :class="{ 'translate-x-0': open }">
                <ul class="flex flex-col lg:flex-row lg:space-x-6 p-6 lg:p-0">
                    <li>
                        <a href="about-sahajyog-meditation.php" class="block py-2 font-semibold text-gray-600 hover:text-gray-800">
                        <span x-show="language === 'en'">About SY Meditation</span>
                        <span x-show="language === 'no'">Om SY-meditasjon</span>
                    </a>
                    </li>
                    <!-- <li><a href="meditation-courses.php" class="block py-2 font-semibold text-gray-600 hover:text-gray-800">Meditation Courses</a></li> -->
                    <li><a href="oslo-center.php" class="block py-2 font-semibold text-gray-600 hover:text-gray-800">Oslo</a></li>
                    <li><a href="bergen-center.php" class="block py-2 font-semibold text-gray-600 hover:text-gray-800">Bergen</a></li>
                    <li><a href="moss-center.php" class="block py-2 font-semibold text-gray-600 hover:text-gray-800">Moss</a></li>
                    <li><a href="horten-center.php" class="block py-2 font-semibold text-gray-600 hover:text-gray-800">Horten</a></li>
                    <li><a href="online-meditation-program.php" class="block py-2 font-semibold text-gray-600 hover:text-gray-800">Online</a></li>
                </ul>
            </nav>
            
            <!-- Language buttons (desktop only) -->
            <div class="shah space-x-2 hidden lg:flex order-last">
                <button @click="setLanguage('en')" :class="{ 'active': language === 'en' }" class="language-btn px-3 py-2 text-gray-600 font-semibold">
                    English
                </button>
                <button @click="setLanguage('no')" :class="{ 'active': language === 'no' }" class="language-btn px-3 py-2 text-gray-600 font-semibold">
                    Norsk
                </button>
            </div>
        </div>
    </header>
