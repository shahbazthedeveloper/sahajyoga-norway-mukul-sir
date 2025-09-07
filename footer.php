<footer class="bg-[#f6f8eb] text-gray-700 py-10 border-t border-gray-200">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 px-6">

            <!-- Quick Access -->
            <div>
                <h3 class="text-gray-900 font-bold text-lg mb-2" x-show="language === 'en'">Quick Access</h3>
                <h3 class="text-gray-900 font-bold text-lg mb-2" x-show="language === 'no'">Hurtigtilgang</h3>
                <hr class="border-gray-300 mb-3">
                <ul class="flex flex-wrap gap-x-2 gap-y-1 text-sm">
                    <li><a href="about-sahajyog-meditation.php" class="hover:text-gray-800" x-show="language === 'en'">About SY Meditation</a><a href="about-sahajyog-meditation.php" class="hover:text-gray-800" x-show="language === 'no'">Om SY Meditasjon</a> |</li>
                    <!-- <li><a href="editation-courses.php" class="hover:text-gray-800" x-show="language === 'en'">Meditation Courses</a><a href="#courses" class="hover:text-gray-800" x-show="language === 'no'">Meditasjonskurs</a> |</li> -->
                    <li><a href="oslo-center.php" class="hover:text-gray-800" x-show="language === 'en'">Oslo</a><a href="#events" class="hover:text-gray-800" x-show="language === 'no'">Oslo</a> |</li>
                    <li><a href="bergen-center.php" class="hover:text-gray-800" x-show="language === 'en'">Bergen</a><a href="#contact" class="hover:text-gray-800" x-show="language === 'no'">Bergen</a> |</li>
                    <li><a href="moss-center.php" class="hover:text-gray-800" x-show="language === 'en'">Moss</a><a href="#contact" class="hover:text-gray-800" x-show="language === 'no'">Moss</a> |</li>
                    <li><a href="online-meditation-program.php" class="hover:text-gray-800" x-show="language === 'en'">Online</a><a href="#contact" class="hover:text-gray-800" x-show="language === 'no'">Online</a></li>
                </ul>
            </div>

            <!-- Stay Connected -->
            <div>
                <h3 class="text-gray-900 font-bold text-lg mb-2" x-show="language === 'en'">Stay Connected</h3>
                <h3 class="text-gray-900 font-bold text-lg mb-2" x-show="language === 'no'">Hold Kontakten</h3>
                <hr class="border-gray-300 mb-3">
                <ul class="flex flex-wrap gap-4 text-sm">
                    <!-- <li><a href="mailto:kurs@sahajayoga.no" class="flex items-center hover:text-gray-800">📧 Email</a></li> -->
                    <li><a href="https://www.instagram.com/sahajayoganorge/?igsh=bHJkMnRhYXh2M29q#" class="flex items-center hover:text-gray-800" target="_blank"><i class="fa fa-instagram"></i> &nbsp; Instagram</a></li>
                    <li><a href="https://www.facebook.com/sahajayogaoslo" target="_blank" class="flex items-center hover:text-gray-800"> <i class="fa fa-facebook"></i> &nbsp; Facebook Oslo</a></li>
                    <li><a href="https://www.facebook.com/sahajayoga.ibergen" target="_blank" class="flex items-center hover:text-gray-800"> <i class="fa fa-facebook"></i> &nbsp; Facebook Bergen</a></li>
                    <li><a href="https://www.meetup.com/sahaja-yoga-meditation-norway" target="_blank" class="flex items-center hover:text-gray-800">▶️ Meetup</a></li>
                    <!-- <li><a href="#" class="flex items-center hover:text-gray-800">💬 WhatsApp</a></li> -->
                </ul>
            </div>
        </div>
        <div class="container mx-auto grid grid-cols-1 mt-5 gap-8 px-6">
            <div class="text-xs text-gray-500 mt-1 mx-auto text-center md:text-left border-gray-200 w-full pt-2">
                © 2025 Sahaja Yoga Meditation. <span x-show="language === 'en'">All rights reserved.</span><span x-show="language === 'no'">Alle rettigheter reservert.</span>
            </div>
        </div>
    </footer>

    </div>
    
  <!-- Load Alpine.js -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('appState', () => ({
            language: localStorage.getItem('language') || 'en', // default
            open: false, // for mobile menu
            setLanguage(lang) {
                this.language = lang;
                localStorage.setItem('language', lang);
            }
        }));
    });
</script>
