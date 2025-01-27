<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>জীবনজয়ী</title>
</head>

<body>
    <script>
        function loadContent() {
            const width = window.innerWidth;
            const height = window.innerHeight;

            // Small screen HTML content
            const htmlSmallScreen = `
            <!-- home CSS -->
             <link rel="stylesheet" href="{{url('frontend/css/home.css')}}">
            
            <div class="container">
                <img class="logo" src="{{url('frontend/img/jibonjoyi.png')}}" alt="Logo" width="100">
                <div class="top-right">
            <div class="menu-icon" onclick="toggleMenu()"style="font-size: 30px;">☰</div>
            <div class="search-icon" onclick="toggleSearch()"style="font-size: 30px;">🔍</div>
        </div>

        <div class="menu-bar" id="menu-bar">
            <button class="close-btn" onclick="toggleMenu()">✖</button>
            <ul class="menu-links">
                <li><a href="#">Home</a></li>
                <li><a href="{{ route('jibonjoyi_details') }}">Details</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

        <div class="search-bar" id="search-bar">
            <input type="text" placeholder="Search...">
        </div>
            <div>    
                <img class="background-image" src="{{url('frontend/img/homes.png')}}" alt="Tree Background">
                <div class="label history" onclick="window.location.href='history.html'">ইতিহাস</div>
                <div class="label philosophy" onclick="window.location.href='{{ route('science') }}'">দর্শন</div>
                <div class="label religion"onclick="window.location.href='2nd.html'">ধর্ম</div>
                <div class="label travel" onclick="window.location.href='2nd.html'">ভ্রমণ</div>
                <div class="label games" onclick="window.location.href='2nd.html'">খেলাধুলা</div>
                <div class="label literature" onclick="window.location.href='2nd.html'">সাহিত্য</div>
                <div class="label freedom" onclick="window.location.href='2nd.html'">মুক্তিযুদ্ধ</div>
                <div class="label economics" onclick="window.location.href='2nd.html'">অর্থনীতি</div>
                <div class="label politics" onclick="window.location.href='2nd.html'">রাজনীতি</div>
                <div class="label science" onclick="window.location.href='2nd.html'">বিজ্ঞান</div>
                <div class="label world" onclick="window.location.href='2nd.html'">বিশ্ব</div>
            </div>
            <footer>
                <p>সর্বস্বর্ত্ব ২০২৪ জীবনজয়ী</p>
            </footer>

            
            `;

            // Large screen HTML content (unchanged)
            const htmlLargeScreen = `
            <!-- Largehome CSS -->
            <link rel="stylesheet" href="{{url('frontend/css/homelarge.css')}}">
            
            <div class="container" style="background-image: url('frontend/img/home.png');">
                <div class="tree">
                    <a href="index.html"> <img src="{{url('frontend/img/jibonjoyi.png')}}" alt="Logo" class="logo"></a>
                    <div class="top-right">
                        <div class="search-icon" onclick="toggleSearch()"style="font-size: 30px;">🔍</div>
            <div class="menu-icon" onclick="toggleMenu()"style="font-size: 30px;">☰</div>
            
        </div>

        <div class="menu-bar" id="menu-bar">
            <button class="close-btn" onclick="toggleMenu()">✖</button>
            <ul class="menu-links">
                <li><a href="{{ route('stories.create') }}">Admin</a></li>
                <li><a href="{{ route('jibonjoyi_details')}}">jibonjoyi_details</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

        <div class="search-bar" id="search-bar">
            <input type="text" placeholder="Search...">
        </div>
                </div>
                <div class="label label-2" onclick="window.location.href='{{ route('science') }}'">বিজ্ঞান</div>
                <div class="label label-3" onclick="window.location.href='{{ route('sports') }}'">খেলাধুলা</div>
                <div class="label label-4" onclick="window.location.href='{{ route('literature') }}'">সাহিত্য</div>
                <div class="label label-5" onclick="window.location.href='{{ route('economy') }}'">অর্থনীতি</div>
                <div class="label label-6" onclick="window.location.href='{{ route('history') }}'">ইতিহাস</div>
                <div class="label label-7" onclick="window.location.href='{{ route('travel') }}'">ভ্রমণ</div>
                <div class="label label-8" onclick="window.location.href='{{ route('philosophy') }}'">দর্শন</div>
                <div class="label label-9" onclick="window.location.href='{{ route('religion') }}'">ধর্ম</div>
                 <div class="label label-10" onclick="window.location.href='{{ route('liberation') }}'">মুক্তিযুদ্ধ</div>

            
                <div class="footer">
                    <p>সর্বস্বর্ত্ব ২০২৪ জীবনজয়ী</p>
                </div>
            </div>
        `   ;
            document.body.innerHTML = width <= 768 ? htmlSmallScreen : htmlLargeScreen;
        }

        window.addEventListener('resize', loadContent);
        loadContent(); // Call initially to check for screen size
    </script>
    <script>
        function toggleMenu() {
            const menu = document.getElementById('menu-bar');
            if (menu.classList.contains('active')) {
                menu.classList.remove('active');
            } else {
                menu.classList.add('active');
            }
        }

        function toggleSearch() {
            const searchBar = document.getElementById('search-bar');
            searchBar.style.display = searchBar.style.display === 'block' ? 'none' : 'block';
        }

        document.addEventListener('click', function (event) {
            const menu = document.getElementById('menu-bar');
            const menuIcon = document.querySelector('.menu-icon');
            const searchBar = document.getElementById('search-bar');
            const searchIcon = document.querySelector('.search-icon');

            if (!menu.contains(event.target) && !menuIcon.contains(event.target)) {
                menu.classList.remove('active');
            }

            if (!searchBar.contains(event.target) && !searchIcon.contains(event.target)) {
                searchBar.style.display = 'none';
            }
        });
    </script>
</body>

</html>