<!doctype html>
<html class="no-js" data-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>খেলাধুলা</title>
    <meta name="author" content="Tnews">
    <meta name="description" content="Tnews - News & Magazine HTML Template">
    <meta name="keywords" content="Tnews - News & Magazine HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{url('frontend/assets/css/bootstrap.min.css')}}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{url('frontend/assets/css/fontawesome.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{url('frontend/assets/css/magnific-popup.min.css')}}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{url('frontend/assets/css/slick.min.css')}}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{url('frontend/assets/css/style.css')}}">
    <!-- Newstyle CSS -->
    <link rel="stylesheet" href="{{url('frontend/assets/css/sports.css')}}">

</head>

<body>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Categories Page</title>

        <!-- Add Font Awesome for icons -->
        <link href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css')}}" rel="stylesheet">

        <header class="header">
            <div class="logo">
                <a href="index.html"> <img src="{{url('frontend/img/jibonjoyi.png')}}" alt="Logo" class="logo"></a>
            </div>

            <div class="buttons">
                <button class="" style="background-color: #c87283;"
                    onclick="markButton(this); showContent('history')">ইতিহাস</button>
                <button class="" style="background-color: #a9c1b8;"
                    onclick="markButton(this); showContent('philosophy')">দর্শন</button>
                <button class="" style="background-color: #a9b99e;"
                    onclick="markButton(this); showContent('religion')">ধর্ম</button>
                <button class="" style="background-color: #d9b8bb;"
                    onclick="markButton(this); showContent('sports')">খেলাধুলা</button>
                <button class="" style="background-color: #86abd9;"
                    onclick="markButton(this); showContent('travel')">ভ্রমণ</button>
                <button class="" style="background-color: #c6cbb8;"
                    onclick="markButton(this); showContent('liberation')">মুক্তিযুদ্ধ</button>
                <button style="background-color: #a9b99e;"
                    onclick="markButton(this); showContent('world')">বিশ্ব</button>
                <button class="" style="background-color: #c6cbb8;"
                    onclick="markButton(this); showContent('economy')">অর্থনীতি</button>
                <button style="background-color: #e1a0ad;"
                    onclick="markButton(this); showContent('politics')">রাজনীতি</button>
                <button class="" style="background-color: #beae82;"
                    onclick="markButton(this); showContent('science')">বিজ্ঞান</button>
            </div>


            <script>
                function markButton(clickedButton) {
                    // Remove the 'bold' class from all buttons
                    const buttons = document.querySelectorAll('.buttons button');
                    buttons.forEach(button => button.classList.remove('bold'));

                    // Add the 'bold' class to the clicked button
                    clickedButton.classList.add('bold');
                }

                function showContent(section) {
                    // Implement your logic to display the content
                    console.log('Show content for:', section);
                }
            </script>

            <div class="top-right">
                <div class="menu-icon" onclick="toggleMenu()" style="font-size: 30px;">☰</div>
                <div class="search-icon" onclick="toggleSearch()" style="font-size: 30px;">🔍</div>
            </div>

            <div class="menu-bar" id="menu-bar">
            <ul class="menu-links">
                    <li><a href="{{ route('default') }}">Home</a></li>
                    <li><a href="{{ route('jibonjoyi_details') }}">Details</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="search-bar" id="search-bar">
                <input type="text" placeholder="Search...">
            </div>

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


        </header>

    </head>

    <body>

        <div class="container content" id="history" style="background-color: #f0f5f8">
            <div style="background-color: #f0f5f8;">
                <div class="headerr">
                    <h1>ইতিহাস</h1>
                    <pp>আজাকের বাণী</pp>
                    <p class="quote">মানুষের পুরো জীবনটা হচ্ছে একটা সরল অংক, যতই দিন যাচ্ছে ততই আমরা তার সমাধানের দিকে
                        যাচ্ছি।</p>
                    <p class="quote">-হুমায়ুন আহমেদ</p>
                </div>

                <div class="card-container">
                    <!-- First Card -->
                    <div class="card">
                        <img src="{{url('frontend/assets/img/U1.png')}}" alt="Historical Image" style="border-radius: 10px;">
                        <div class="card-content">
                            <h3 class="card-title">গিয়াসউদ্দিন আজম শাহ: বাংলা সানাতনাতের সাহিত্যচরিতানুরাগী এক
                                আদর্শচনশীল শাসক</h3>
                            <p class="card-meta">
                                <span>
                                    <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                        style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                    সুস্মিতা রায় অন্যন্যা
                                </span>
                                <span
                                    style="font-size: 16px; font-weight: lighter;margin-left: 1%;margin-right: 1%;">|</span>
                                <span>
                                    <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                        style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                    নভেম্বর 24, 2024
                                </span>
                            </p>

                            <p class="card-description">বাংলা সালতানাতের গোড়াপত্তন হয়েছিল শামসউদ্দিন ইলিয়াস শাহের হাত
                                ধরে। তারই দৌহিত্র ছিলেন গিয়াসউদ্দিন। স্বভাবে তিনি ছিলেন আবেগপ্রবণ গোছের। মধ্যযুগে গদিতে
                            </p>
                            <div class="rating-section"
                                style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                                <h3
                                    style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-right:-5% ;">
                                    ইতিহাস
                                </h3>
                                <div style="display: flex; align-items: center; color: #6c757d;">
                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                        style="width: 16px; height: 16px; margin-right: 5px;">
                                    ৩.৫
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Second Card -->
                    <div class="card">
                        <img src="{{url('frontend/assets/img/U2.png')}}" alt="Historical Image" style="border-radius: 10px;">
                        <div class="card-content">
                            <h3 class="card-title">মৈথেলিক সমরোহতের ইতিহাস</h3>
                            <p class="card-meta">
                                <span>
                                    <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                        style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                    সুস্মিতা রায় অন্যন্যা
                                </span>
                                <span
                                    style="font-size: 16px; font-weight: lighter;margin-left: 1%;margin-right: 1%;">|</span>
                                <span>
                                    <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                        style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                    নভেম্বর 24, 2024
                                </span>
                            </p>
                            <p class="card-description">দিগ্‌বিজয়ী গ্রিকবীর আলেকজান্ডার দ্য গ্রেটের মনোবাসনা ছিল,
                                পৃথিবীর প্রতিটি অংশকেই তিনি জয় করে নেবেন। প্রাচীনকালের ভারতবর্ষ আয়তনে ছিল বিশাল,
                                ধনসম্পদেরও ছিল না কোনো কমতি। তাই, বাকি সকলের মতো আলেকজান্ডারেরও দৃষ্টি পড়েছিল এই ভূমির
                                উপরে।</p>
                            <div class="rating-section"
                                style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                                <h3
                                    style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;margin-right:-5% ">
                                    ইতিহাস
                                </h3>
                                <div style="display: flex; align-items: center; color: #6c757d;">
                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                        style="width: 16px; height: 16px; margin-right: 5px;">
                                    ৩.৫
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container content" id="philosophy" class="container content" id="history" style="background-color: #f0f5f8">
            <div class="headerr" style="background-color: #f0f5f8;">
                <h1>দর্শন</h1>
                <pp>আজাকের বাণী</pp>
                <p class="quote">মানুষের পুরো জীবনটা হচ্ছে একটা সরল অংক, যতই দিন যাচ্ছে ততই আমরা তার সমাধানের দিকে
                    যাচ্ছি ।
                </p>
                <p class="quote">-হুমায়ুন আহমেদ</p>
            </div>
            <div class="card-container">
                <div class="card">
                    <img src="{{url('frontend/assets/img/U2.png')}}" alt="Historical Image">
                    <div class="card-content">
                        <h3 class="card-title">মৈথেলিক সমরোহতের ইতিহাস</h3>
                        <p class="card-meta">
                            <span>
                                <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                সুস্মিতা রায় অন্যন্যা
                            </span>
                            <span
                                style="font-size: 16px; font-weight: lighter;margin-left: 1%;margin-right: 1%;">|</span>
                            <span>
                                <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                নভেম্বর 24, 2024
                            </span>
                        </p>
                        <p class="card-description">মৈথেলিক সমরোহতের সুন্দরীয় পর্যালোচনার সরীনিক প্রবার্তিরধিশা
                            সিলেন...
                        </p>
                        <div class="rating-section"
                            style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                            <h3
                                style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-right:-5% ;">
                                দর্শন
                            </h3>
                            <div style="display: flex; align-items: center; color: #6c757d;">
                                <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                    style="width: 16px; height: 16px; margin-right: 5px;">
                                ৩.৫
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="{{url('frontend/assets/img/U1.png')}}" alt="Historical Image">
                    <div class="card-content">
                        <h3 class="card-title">গিয়াসউদ্দিন আজম শাহ: বাংলা সানাতনাতের সাহিত্যচরিতানুরাগী এক আদর্শচনশীল
                            শাসক
                        </h3>
                        <p class="card-meta">
                            <span>
                                <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                সুস্মিতা রায় অন্যন্যা
                            </span>
                            <span
                                style="font-size: 16px; font-weight: lighter;margin-left: 1%;margin-right: 1%;">|</span>
                            <span>
                                <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                নভেম্বর 24, 2024
                            </span>
                        </p>
                        <p class="card-description">বাংলা সানাতনাতের সাহিত্যচরিতানুরাগীর এক মহানকারী চিত্র স্বিহারশতরের
                            কথা
                            এক সহত চর্চিত্রসু...</p>
                        <div class="rating-section"
                            style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                            <h3
                                style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-right:-5% ;">
                                দর্শন
                            </h3>
                            <div style="display: flex; align-items: center; color: #6c757d;">
                                <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                    style="width: 16px; height: 16px; margin-right: 5px;">
                                ৩.৫
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container content" id="religion" class="container content" id="history" style="background-color: #f0f5f8">
            <div class="headerr" style="background-color: #f0f5f8;">
                <h1>ধর্ম</h1>
                <pp>আজাকের বাণী</pp>
                <p class="quote">মানুষের পুরো জীবনটা হচ্ছে একটা সরল অংক, যতই দিন যাচ্ছে ততই আমরা তার সমাধানের দিকে
                    যাচ্ছি ।
                </p>
                <p class="quote">-হুমায়ুন আহমেদ</p>
            </div>

            <div class="card-container">
                <!-- First Card -->
                <div class="card">
                    <img src="{{url('frontend/img/U1.png')}}" alt="Historical Image">
                    <div class="card-content">
                        <h3 class="card-title">গিয়াসউদ্দিন আজম শাহ: বাংলা সানাতনাতের সাহিত্যচরিতানুরাগী এক আদর্শচনশীল
                            শাসক
                        </h3>
                        <p class="card-meta">
                            <span>
                                <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                সুস্মিতা রায় অন্যন্যা
                            </span>
                            <span
                                style="font-size: 16px; font-weight: lighter;margin-left: 1%;margin-right: 1%;">|</span>
                            <span>
                                <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                নভেম্বর 24, 2024
                            </span>
                        </p>
                        <p class="card-description">বাংলা সানাতনাতের সাহিত্যচরিতানুরাগীর এক মহানকারী চিত্র স্বিহারশতরের
                            কথা
                            এক সহত চর্চিত্রসু...</p>
                        <div class="rating-section"
                            style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                            <h3
                                style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-right:-5% ;">
                                ধর্ম
                            </h3>
                            <div style="display: flex; align-items: center; color: #6c757d;">
                                <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                    style="width: 16px; height: 16px; margin-right: 5px;">
                                ৩.৫
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second Card -->
                <div class="card">
                    <img src="{{url('frontend/assets/img/U2.png')}}" alt="Historical Image">
                    <div class="card-content">
                        <h3 class="card-title">মৈথেলিক সমরোহতের ইতিহাস</h3>
                        <p class="card-meta">
                            <span>
                                <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                সুস্মিতা রায় অন্যন্যা
                            </span>
                            <span
                                style="font-size: 16px; font-weight: lighter;margin-left: 1%;margin-right: 1%;">|</span>
                            <span>
                                <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                নভেম্বর 24, 2024
                            </span>
                        </p>
                        <p class="card-description">মৈথেলিক সমরোহতের সুন্দরীয় পর্যালোচনার সরীনিক প্রবার্তিরধিশা
                            সিলেন...
                        </p>
                        <div class="rating-section"
                            style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                            <h3
                                style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-right:-5% ;">
                                ধর্ম
                            </h3>
                            <div style="display: flex; align-items: center; color: #6c757d;">
                                <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                    style="width: 16px; height: 16px; margin-right: 5px;">
                                ৩.৫
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container content" id="sports" class="container content" id="history" style="background-color: #f0f5f8">
            <div class="headerr" style="background-color: #f0f5f8;">
                <h1>খেলাধুলা</h1>
                <pp>আজাকের বাণী</pp>
                <p class="quote">মানুষের পুরো জীবনটা হচ্ছে একটা সরল অংক, যতই দিন যাচ্ছে ততই আমরা তার সমাধানের দিকে
                    যাচ্ছি ।
                </p>
                <p class="quote">-হুমায়ুন আহমেদ</p>
            </div>

            <div class="card-container">
                <!-- First Card -->
                <div class="card">
                    <img src="{{url('frontend/assets/img/U2.png')}}" alt="Historical Image">
                    <div class="card-content">
                        <h3 class="card-title">গিয়াসউদ্দিন আজম শাহ: বাংলা সানাতনাতের সাহিত্যচরিতানুরাগী এক আদর্শচনশীল
                            শাসক
                        </h3>
                        <p class="card-meta">
                            <span>
                                <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                সুস্মিতা রায় অন্যন্যা
                            </span>
                            <span
                                style="font-size: 16px; font-weight: lighter;margin-left: 1%;margin-right: 1%;">|</span>
                            <span>
                                <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                নভেম্বর 24, 2024
                            </span>
                        </p>
                        <p class="card-description">বাংলা সানাতনাতের সাহিত্যচরিতানুরাগীর এক মহানকারী চিত্র স্বিহারশতরের
                            কথা
                            এক সহত চর্চিত্রসু...</p>
                        <div class="rating-section"
                            style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                            <h3
                                style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-right:-5% ;">
                                খেলাধুলা
                            </h3>
                            <div style="display: flex; align-items: center; color: #6c757d;">
                                <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                    style="width: 16px; height: 16px; margin-right: 5px;">
                                ৩.৫
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second Card -->
                <div class="card">
                    <img src="{{url('frontend/assets/img/U2.png')}}" alt="Historical Image">
                    <div class="card-content">
                        <h3 class="card-title">মৈথেলিক সমরোহতের ইতিহাস</h3>
                        <p class="card-meta">
                            <span>
                                <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                সুস্মিতা রায় অন্যন্যা
                            </span>
                            <span
                                style="font-size: 16px; font-weight: lighter;margin-left: 1%;margin-right: 1%;">|</span>
                            <span>
                                <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                নভেম্বর 24, 2024
                            </span>
                        </p>
                        <p class="card-description">মৈথেলিক সমরোহতের সুন্দরীয় পর্যালোচনার সরীনিক প্রবার্তিরধিশা
                            সিলেন...
                        </p>
                        <div class="rating-section"
                            style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                            <h3
                                style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-right:-5% ;">
                                খেলাধুলা
                            </h3>
                            <div style="display: flex; align-items: center; color: #6c757d;">
                                <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                    style="width: 16px; height: 16px; margin-right: 5px;">
                                ৩.৫
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container content" id="travel" class="container content" id="history" style="background-color: #f0f5f8">
            <div class="headerr" style="background-color: #f0f5f8;">
                <h1>ভ্রমণ</h1>
                <pp>আজাকের বাণী</pp>
                <p class="quote">মানুষের পুরো জীবনটা হচ্ছে একটা সরল অংক, যতই দিন যাচ্ছে ততই আমরা তার সমাধানের দিকে
                    যাচ্ছি ।
                </p>
                <p class="quote">-হুমায়ুন আহমেদ</p>
            </div>

            <div class="card-container">
                <!-- First Card -->
                <div class="card">
                    <img src="{{url('frontend/assets/img/U1.png')}}" alt="Historical Image">
                    <div class="card-content">
                        <h3 class="card-title">গিয়াসউদ্দিন আজম শাহ: বাংলা সানাতনাতের সাহিত্যচরিতানুরাগী এক আদর্শচনশীল
                            শাসক
                        </h3>
                        <p class="card-meta">
                            <span>
                                <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                সুস্মিতা রায় অন্যন্যা
                            </span>
                            <span
                                style="font-size: 16px; font-weight: lighter;margin-left: 1%;margin-right: 1%;">|</span>
                            <span>
                                <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                নভেম্বর 24, 2024
                            </span>
                        </p>
                        <p class="card-description">বাংলা সানাতনাতের সাহিত্যচরিতানুরাগীর এক মহানকারী চিত্র স্বিহারশতরের
                            কথা
                            এক সহত চর্চিত্রসু...</p>
                        <div class="rating-section"
                            style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                            <h3
                                style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-right:-5% ;">
                                ইতিহাস
                            </h3>
                            <div style="display: flex; align-items: center; color: #6c757d;">
                                <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                    style="width: 16px; height: 16px; margin-right: 5px;">
                                ৩.৫
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second Card -->
                <div class="card">
                    <img src="{{url('frontend/assets/img/U1.png')}}" alt="Historical Image">
                    <div class="card-content">
                        <h3 class="card-title">মৈথেলিক সমরোহতের ইতিহাস</h3>
                        <p class="card-meta">
                            <span>
                                <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                সুস্মিতা রায় অন্যন্যা
                            </span>
                            <span
                                style="font-size: 16px; font-weight: lighter;margin-left: 1%;margin-right: 1%;">|</span>
                            <span>
                                <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                নভেম্বর 24, 2024
                            </span>
                        </p>
                        <p class="card-description">মৈথেলিক সমরোহতের সুন্দরীয় পর্যালোচনার সরীনিক প্রবার্তিরধিশা
                            সিলেন...
                        </p>
                        <div class="rating-section"
                            style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                            <h3
                                style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-right:-5% ;">
                                ইতিহাস
                            </h3>
                            <div style="display: flex; align-items: center; color: #6c757d;">
                                <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                    style="width: 16px; height: 16px; margin-right: 5px;">
                                ৩.৫
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container content" id="liberation" class="container content" id="history" style="background-color: #f0f5f8">
            <div class="headerr" style="background-color: #f0f5f8;">
                <h1>মুক্তিযুদ্ধ</h1>
                <pp>আজাকের বাণী</pp>
                <p class="quote">মানুষের পুরো জীবনটা হচ্ছে একটা সরল অংক, যতই দিন যাচ্ছে ততই আমরা তার সমাধানের দিকে
                    যাচ্ছি ।
                </p>
                <p class="quote">-হুমায়ুন আহমেদ</p>
            </div>

            <div class="card-container">
                <!-- First Card -->
                <div class="card">
                    <img src="{{url('frontend/assets/img/U1.png')}}" alt="Historical Image">
                    <div class="card-content">
                        <h3 class="card-title">গিয়াসউদ্দিন আজম শাহ: বাংলা সানাতনাতের সাহিত্যচরিতানুরাগী এক আদর্শচনশীল
                            শাসক
                        </h3>
                        <p class="card-meta">
                            <span>
                                <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                সুস্মিতা রায় অন্যন্যা
                            </span>
                            <span
                                style="font-size: 16px; font-weight: lighter;margin-left: 1%;margin-right: 1%;">|</span>
                            <span>
                                <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                নভেম্বর 24, 2024
                            </span>
                        </p>
                        <p class="card-description">বাংলা সানাতনাতের সাহিত্যচরিতানুরাগীর এক মহানকারী চিত্র স্বিহারশতরের
                            কথা
                            এক সহত চর্চিত্রসু...</p>
                        <div class="rating-section"
                            style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                            <h3
                                style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-right:-5% ;">
                                মুক্তিযুদ্ধ
                            </h3>
                            <div style="display: flex; align-items: center; color: #6c757d;">
                                <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                    style="width: 16px; height: 16px; margin-right: 5px;">
                                ৩.৫
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second Card -->
                <div class="card">
                    <img src="{{url('frontend/assets/img/U2.png')}}" alt="Historical Image">
                    <div class="card-content">
                        <h3 class="card-title">মৈথেলিক সমরোহতের ইতিহাস</h3>
                        <p class="card-meta">
                            <span>
                                <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                সুস্মিতা রায় অন্যন্যা
                            </span>
                            <span
                                style="font-size: 16px; font-weight: lighter;margin-left: 1%;margin-right: 1%;">|</span>
                            <span>
                                <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                নভেম্বর 24, 2024
                            </span>
                        </p>
                        <p class="card-description">মৈথেলিক সমরোহতের সুন্দরীয় পর্যালোচনার সরীনিক প্রবার্তিরধিশা
                            সিলেন...
                        </p>
                        <div class="rating-section"
                            style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                            <h3
                                style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-right:-5% ;">
                                মুক্তিযুদ্ধ
                            </h3>
                            <div style="display: flex; align-items: center; color: #6c757d;">
                                <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                    style="width: 16px; height: 16px; margin-right: 5px;">
                                ৩.৫
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container content" id="world" class="container content" id="history" style="background-color: #f0f5f8">
            <div class="headerr" style="background-color: #f0f5f8;">
                <h1>বিশ্ব</h1>
                <pp>আজাকের বাণী</pp>
                <p class="quote">মানুষের পুরো জীবনটা হচ্ছে একটা সরল অংক, যতই দিন যাচ্ছে ততই আমরা তার সমাধানের দিকে
                    যাচ্ছি ।
                </p>
                <p class="quote">-হুমায়ুন আহমেদ</p>
            </div>

            <div class="card-container">
                <!-- First Card -->
                <div class="card">
                    <img src="{{url('frontend/assets/img/U2.png')}}" alt="Historical Image">
                    <div class="card-content">
                        <h3 class="card-title">গিয়াসউদ্দিন আজম শাহ: বাংলা সানাতনাতের সাহিত্যচরিতানুরাগী এক আদর্শচনশীল
                            শাসক
                        </h3>
                        <p class="card-meta">
                            <span>
                                <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                সুস্মিতা রায় অন্যন্যা
                            </span>
                            <span
                                style="font-size: 16px; font-weight: lighter;margin-left: 1%;margin-right: 1%;">|</span>
                            <span>
                                <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                নভেম্বর 24, 2024
                            </span>
                        </p>
                        <p class="card-description">বাংলা সানাতনাতের সাহিত্যচরিতানুরাগীর এক মহানকারী চিত্র স্বিহারশতরের
                            কথা
                            এক সহত চর্চিত্রসু...</p>
                        <div class="rating-section"
                            style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                            <h3
                                style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-right:-5% ;">
                                বিশ্ব
                            </h3>
                            <div style="display: flex; align-items: center; color: #6c757d;">
                                <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                    style="width: 16px; height: 16px; margin-right: 5px;">
                                ৩.৫
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second Card -->
                <div class="card">
                    <img src="{{url('frontend/assets/img/U1.png')}}" alt="Historical Image">
                    <div class="card-content">
                        <h3 class="card-title">মৈথেলিক সমরোহতের ইতিহাস</h3>
                        <p class="card-meta">
                            <span>
                                <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                সুস্মিতা রায় অন্যন্যা
                            </span>
                            <span
                                style="font-size: 16px; font-weight: lighter;margin-left: 1%;margin-right: 1%;">|</span>
                            <span>
                                <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                নভেম্বর 24, 2024
                            </span>
                        </p>
                        <p class="card-description">মৈথেলিক সমরোহতের সুন্দরীয় পর্যালোচনার সরীনিক প্রবার্তিরধিশা
                            সিলেন...
                        </p>
                        <div class="rating-section"
                            style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                            <h3
                                style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-right:-5% ;">
                                বিশ্ব
                            </h3>
                            <div style="display: flex; align-items: center; color: #6c757d;">
                                <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                    style="width: 16px; height: 16px; margin-right: 5px;">
                                ৩.৫
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container content" id="economy" class="container content" id="history" style="background-color: #f0f5f8">
            <div class="headerr" style="background-color: #f0f5f8;">
                <h1>অর্থনীতি</h1>
                <pp>আজাকের বাণী</pp>
                <p class="quote">মানুষের পুরো জীবনটা হচ্ছে একটা সরল অংক, যতই দিন যাচ্ছে ততই আমরা তার সমাধানের দিকে
                    যাচ্ছি ।
                </p>
                <p class="quote">-হুমায়ুন আহমেদ</p>
            </div>

            <div class="card-container">
                <!-- First Card -->
                <div class="card">
                    <img src="{{url('frontend/assets/img/U1.png')}}" alt="Historical Image">
                    <div class="card-content">
                        <h3 class="card-title">গিয়াসউদ্দিন আজম শাহ: বাংলা সানাতনাতের সাহিত্যচরিতানুরাগী এক আদর্শচনশীল
                            শাসক
                        </h3>
                        <p class="card-meta">
                            <span>
                                <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                সুস্মিতা রায় অন্যন্যা
                            </span>
                            <span
                                style="font-size: 16px; font-weight: lighter;margin-left: 1%;margin-right: 1%;">|</span>
                            <span>
                                <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                নভেম্বর 24, 2024
                            </span>
                        </p>
                        <p class="card-description">বাংলা সানাতনাতের সাহিত্যচরিতানুরাগীর এক মহানকারী চিত্র স্বিহারশতরের
                            কথা
                            এক সহত চর্চিত্রসু...</p>
                        <div class="rating-section"
                            style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                            <h3
                                style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-right:-5% ;">
                                অর্থনীতি
                            </h3>
                            <div style="display: flex; align-items: center; color: #6c757d;">
                                <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                    style="width: 16px; height: 16px; margin-right: 5px;">
                                ৩.৫
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second Card -->
                <div class="card">
                    <img src="{{url('frontend/assets/img/U1.png')}}" alt="Historical Image">
                    <div class="card-content">
                        <h3 class="card-title">মৈথেলিক সমরোহতের ইতিহাস</h3>
                        <p class="card-meta">
                            <span>
                                <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                সুস্মিতা রায় অন্যন্যা
                            </span>
                            <span
                                style="font-size: 16px; font-weight: lighter;margin-left: 1%;margin-right: 1%;">|</span>
                            <span>
                                <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                নভেম্বর 24, 2024
                            </span>
                        </p>
                        <p class="card-description">মৈথেলিক সমরোহতের সুন্দরীয় পর্যালোচনার সরীনিক প্রবার্তিরধিশা
                            সিলেন...
                        </p>
                        <div class="rating-section"
                            style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                            <h3
                                style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-right:-5% ;">
                                অর্থনীতি
                            </h3>
                            <div style="display: flex; align-items: center; color: #6c757d;">
                                <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                    style="width: 16px; height: 16px; margin-right: 5px;">
                                ৩.৫
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container content" id="politics" class="container content" id="history" style="background-color: #f0f5f8">
            <div class="headerr" style="background-color: #f0f5f8;">
                <h1>রাজনীতি</h1>
                <pp>আজাকের বাণী</pp>
                <p class="quote">মানুষের পুরো জীবনটা হচ্ছে একটা সরল অংক, যতই দিন যাচ্ছে ততই আমরা তার সমাধানের দিকে
                    যাচ্ছি ।
                </p>
                <p class="quote">-হুমায়ুন আহমেদ</p>
            </div>

            <div class="card-container">
                <!-- First Card -->
                <div class="card">
                    <img src="{{url('frontend/assets/img/U2.png')}}" alt="Historical Image">
                    <div class="card-content">
                        <h3 class="card-title">গিয়াসউদ্দিন আজম শাহ: বাংলা সানাতনাতের সাহিত্যচরিতানুরাগী এক আদর্শচনশীল
                            শাসক
                        </h3>
                        <p class="card-meta">
                            <span>
                                <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                সুস্মিতা রায় অন্যন্যা
                            </span>
                            <span
                                style="font-size: 16px; font-weight: lighter;margin-left: 1%;margin-right: 1%;">|</span>
                            <span>
                                <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                নভেম্বর 24, 2024
                            </span>
                        </p>
                        <p class="card-description">বাংলা সানাতনাতের সাহিত্যচরিতানুরাগীর এক মহানকারী চিত্র স্বিহারশতরের
                            কথা
                            এক সহত চর্চিত্রসু...</p>
                        <div class="rating-section"
                            style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                            <h3
                                style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-right:-5% ;">
                                রাজনীতি
                            </h3>
                            <div style="display: flex; align-items: center; color: #6c757d;">
                                <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                    style="width: 16px; height: 16px; margin-right: 5px;">
                                ৩.৫
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second Card -->
                <div class="card">
                    <img src="{{url('frontend/assets/img/U2.png')}}" alt="Historical Image">
                    <div class="card-content">
                        <h3 class="card-title">মৈথেলিক সমরোহতের ইতিহাস</h3>
                        <p class="card-meta">
                            <span>
                                <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                সুস্মিতা রায় অন্যন্যা
                            </span>
                            <span
                                style="font-size: 16px; font-weight: lighter;margin-left: 1%;margin-right: 1%;">|</span>
                            <span>
                                <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                নভেম্বর 24, 2024
                            </span>
                        </p>
                        <p class="card-description">মৈথেলিক সমরোহতের সুন্দরীয় পর্যালোচনার সরীনিক প্রবার্তিরধিশা
                            সিলেন...
                        </p>
                        <div class="rating-section"
                            style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                            <h3
                                style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-right:-5% ;">
                                রাজনীতি
                            </h3>
                            <div style="display: flex; align-items: center; color: #6c757d;">
                                <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                    style="width: 16px; height: 16px; margin-right: 5px;">
                                ৩.৫
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container content" id="science" class="container content" id="history" style="background-color: #f0f5f8">
            <div class="headerr" style="background-color: #f0f5f8;">
                <h1>বিজ্ঞান</h1>
                <pp>আজাকের বাণী</pp>
                <p class="quote">মানুষের পুরো জীবনটা হচ্ছে একটা সরল অংক, যতই দিন যাচ্ছে ততই আমরা তার সমাধানের দিকে
                    যাচ্ছি ।
                </p>
                <p class="quote">-হুমায়ুন আহমেদ</p>
            </div>

            <div class="card-container">
                <!-- First Card -->
                <div class="card">
                    <img src="{{url('frontend/assets/img/U1.png')}}" alt="Historical Image">
                    <div class="card-content">
                        <h3 class="card-title">গিয়াসউদ্দিন আজম শাহ: বাংলা সানাতনাতের সাহিত্যচরিতানুরাগী এক আদর্শচনশীল
                            শাসক
                        </h3>
                        <p class="card-meta">
                            <span>
                                <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                সুস্মিতা রায় অন্যন্যা
                            </span>
                            <span
                                style="font-size: 16px; font-weight: lighter;margin-left: 1%;margin-right: 1%;">|</span>
                            <span>
                                <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                নভেম্বর 24, 2024
                            </span>
                        </p>
                        <p class="card-description">বাংলা সানাতনাতের সাহিত্যচরিতানুরাগীর এক মহানকারী চিত্র স্বিহারশতরের
                            কথা
                            এক সহত চর্চিত্রসু...</p>
                        <div class="rating-section"
                            style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                            <h3
                                style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-right:-5% ;">
                                বিজ্ঞান
                            </h3>
                            <div style="display: flex; align-items: center; color: #6c757d;">
                                <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                    style="width: 16px; height: 16px; margin-right: 5px;">
                                ৩.৫
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second Card -->
                <div class="card">
                    <img src="{{url('frontend/assets/img/U2.png')}}" alt="Historical Image">
                    <div class="card-content">
                        <h3 class="card-title">মৈথেলিক সমরোহতের ইতিহাস</h3>
                        <p class="card-meta">
                            <span>
                                <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                সুস্মিতা রায় অন্যন্যা
                            </span>
                            <span
                                style="font-size: 16px; font-weight: lighter;margin-left: 1%;margin-right: 1%;">|</span>
                            <span>
                                <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                    style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                নভেম্বর 24, 2024
                            </span>
                        </p>
                        <p class="card-description">মৈথেলিক সমরোহতের সুন্দরীয় পর্যালোচনার সরীনিক প্রবার্তিরধিশা
                            সিলেন...
                        </p>
                        <div class="rating-section"
                            style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                            <h3
                                style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-right:-5% ;">
                                বিজ্ঞান
                            </h3>
                            <div style="display: flex; align-items: center; color: #6c757d;">
                                <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                    style="width: 16px; height: 16px; margin-right: 5px;">
                                ৩.৫
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin: 0 auto; width: 80%; max-width: 1200px; min-width: 600px; box-sizing: border-box;">
            <div>
                <div class="space-bottom" style="text-align: center; margin-top: 120px;">
                    <a href="https://www.ridgebenit.com">
                        <img class="w-80 light-img" src="{{url('frontend/assets/img/ad1.png')}}" alt="ads">
                    </a>
                </div>
                <section class="space" style="margin-left: -120px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9">

                                <h2
                                    style="font-size: 20px; background-color: #4045A3; color: white; display: inline-block; padding: 8px 8px; border-radius: 10px;">
                                    সর্বশেষ </h2>
                                <div class="row gy-4">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="blog-style1">
                                            <div class="blog-img">
                                                <img src="{{url('frontend/assets/img/1.png')}}" alt="blog image">
                                            </div>
                                            <h3 class="box-title-20"><a class="hover-line"
                                                    href="{{ route('jibonjoyi_details') }}">সিন্ধু
                                                    সভ্যতার
                                                    উল্লেখযোগ্য যত শহর ও নগর</a></h3>
                                            <p class="card-meta">
                                                <span
                                                    style="font-size: 12px; font-weight: lighter;margin-left: 0%;margin-right: -3%;">সুস্মিতা
                                                    রায় অন্যন্যা</span>
                                                <span
                                                    style="font-size: 12px; font-weight: lighter;margin-left: 5%;margin-right: 5%;">|</span>
                                                <span
                                                    style="font-size: 12px; font-weight: lighter;margin-left: -4%;margin-right: 0%;">০২
                                                    ডিসেম্বর ২০২৪</span>
                                            </p>

                                            <div class="rating-section"
                                                style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                                                <h3
                                                    style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;margin-right: -10%;">
                                                    ইতিহাস
                                                </h3>
                                                <div style="display: flex; align-items: center; color: #6c757d;">
                                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                        style="width: 16px; height: 16px; margin-right: 5px;">
                                                    ৩.৫
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="blog-style1">
                                            <div class="blog-img">
                                                <img src="{{url('frontend/assets/img/2.png')}}" alt="blog image">
                                            </div>
                                            <h3 class="box-title-20"><a class="hover-line"
                                                    href="{{ route('jibonjoyi_details') }}">যেভাবে
                                                    শুরু
                                                    হয়েছিল ২য় বিশ্বযুদ্ধ</a></h3>
                                            <p class="card-meta">
                                                <span
                                                    style="font-size: 12px; font-weight: lighter;margin-left: 0%;margin-right: -3%;">সুস্মিতা
                                                    রায় অন্যন্যা</span>
                                                <span
                                                    style="font-size: 12px; font-weight: lighter;margin-left: 5%;margin-right: 5%;">|</span>
                                                <span
                                                    style="font-size: 12px; font-weight: lighter;margin-left: -4%;margin-right: 0%;">০২
                                                    ডিসেম্বর ২০২৪</span>
                                            </p>

                                            <div class="rating-section"
                                                style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                                                <h3
                                                    style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;margin-right: -10%;">
                                                    ইতিহাস
                                                </h3>
                                                <div style="display: flex; align-items: center; color: #6c757d;">
                                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                        style="width: 16px; height: 16px; margin-right: 5px;">
                                                    ৩.৫
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="blog-style1">
                                            <div class="blog-img">
                                                <img src="{{url('frontend/assets/img/3.png')}}" alt="blog image">
                                            </div>
                                            <h3 class="box-title-20"><a class="hover-line"
                                                    href="{{ route('jibonjoyi_details') }}">অটোমান
                                                    সাম্রাজ্য
                                                    ভাঙন</a></h3>
                                            <p class="card-meta">
                                                <span
                                                    style="font-size: 12px; font-weight: lighter;margin-left: 0%;margin-right: -3%;">সুস্মিতা
                                                    রায় অন্যন্যা</span>
                                                <span
                                                    style="font-size: 12px; font-weight: lighter;margin-left: 5%;margin-right: 5%;">|</span>
                                                <span
                                                    style="font-size: 12px; font-weight: lighter;margin-left: -4%;margin-right: 0%;">০২
                                                    ডিসেম্বর ২০২৪</span>
                                            </p>

                                            <div class="rating-section"
                                                style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                                                <h3
                                                    style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;margin-right: -10%;">
                                                    ইতিহাস
                                                </h3>
                                                <div style="display: flex; align-items: center; color: #6c757d;">
                                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                        style="width: 16px; height: 16px; margin-right: 5px;">
                                                    ৩.৫
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="blog-style1">
                                            <div class="blog-img">
                                                <img src="{{url('frontend/assets/img/4.png')}}" alt="blog image">
                                            </div>
                                            <h3 class="box-title-20"><a class="hover-line"
                                                    href="{{ route('jibonjoyi_details') }}">মোগল
                                                    সাম্রাজ্যের
                                                    পতন</a></h3>
                                            <p class="card-meta">
                                                <span
                                                    style="font-size: 12px; font-weight: lighter;margin-left: 0%;margin-right: -3%;">সুস্মিতা
                                                    রায় অন্যন্যা</span>
                                                <span
                                                    style="font-size: 12px; font-weight: lighter;margin-left: 5%;margin-right: 5%;">|</span>
                                                <span
                                                    style="font-size: 12px; font-weight: lighter;margin-left: -4%;margin-right: 0%;">০২
                                                    ডিসেম্বর ২০২৪</span>
                                            </p>

                                            <div class="rating-section"
                                                style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                                                <h3
                                                    style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;margin-right: -10%;">
                                                    ইতিহাস
                                                </h3>
                                                <div style="display: flex; align-items: center; color: #6c757d;">
                                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                        style="width: 16px; height: 16px; margin-right: 5px;">
                                                    ৩.৫
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="blog-style1">
                                            <div class="blog-img">
                                                <img src="{{url('frontend/assets/img/5.png')}}" alt="blog image">
                                            </div>
                                            <h3 class="box-title-20"><a class="hover-line"
                                                    href="{{ route('jibonjoyi_details') }}">প্রাচীন পারস্য
                                                    সভ্যতা</a></h3>
                                            <p class="card-meta">
                                                <span
                                                    style="font-size: 12px; font-weight: lighter;margin-left: 0%;margin-right: -3%;">সুস্মিতা
                                                    রায় অন্যন্যা</span>
                                                <span
                                                    style="font-size: 12px; font-weight: lighter;margin-left: 5%;margin-right: 5%;">|</span>
                                                <span
                                                    style="font-size: 12px; font-weight: lighter;margin-left: -4%;margin-right: 0%;">০২
                                                    ডিসেম্বর ২০২৪</span>
                                            </p>

                                            <div class="rating-section"
                                                style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                                                <h3
                                                    style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;margin-right: -10%;">
                                                    ইতিহাস
                                                </h3>
                                                <div style="display: flex; align-items: center; color: #6c757d;">
                                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                        style="width: 16px; height: 16px; margin-right: 5px;">
                                                    ৩.৫
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="blog-style1">
                                            <div class="blog-img">
                                                <img src="{{url('frontend/assets/img/6.png')}}" alt="blog image">
                                            </div>
                                            <h3 class="box-title-20"><a class="hover-line"
                                                    href="{{ route('jibonjoyi_details') }}">প্রাচীন মিশরের
                                                    সমাধি</a></h3>
                                            <p class="card-meta">
                                                <span
                                                    style="font-size: 12px; font-weight: lighter;margin-left: 0%;margin-right: -3%;">সুস্মিতা
                                                    রায় অন্যন্যা</span>
                                                <span
                                                    style="font-size: 12px; font-weight: lighter;margin-left: 5%;margin-right: 5%;">|</span>
                                                <span
                                                    style="font-size: 12px; font-weight: lighter;margin-left: -4%;margin-right: 0%;">০২
                                                    ডিসেম্বর ২০২৪</span>
                                            </p>

                                            <div class="rating-section"
                                                style="display: flex; align-items: center; margin-top: 5px; gap: 50px; font-size: 14px;">
                                                <h3
                                                    style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;margin-right: -10%;">
                                                    ইতিহাস
                                                </h3>
                                                <div style="display: flex; align-items: center; color: #6c757d;">
                                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                        style="width: 16px; height: 16px; margin-right: 5px;">
                                                    ৩.৫
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="mt-30">
                                    <div class="">

                                        <div style="width: 100%;">
                                            <div class="blog-style1">
                                                <h2
                                                    style="font-size: 20px; background-color: #4045A3; color: white; display: inline-block; padding: 8px 8px; border-radius: 10px;margin-top: 7%;">
                                                    সকল পোস্ট </h2>
                                                <div class="blog-container">
                                                    <div class="blog-img">
                                                        <img src="{{url('frontend/assets/img/7.png')}}" alt="blog image">
                                                    </div>
                                                    <div class="blog-content">
                                                        <h3 class="box-title-24">
                                                            <a class="hover-line" href="{{ route('jibonjoyi_details') }}"
                                                                style="font-size: 20px;">বাংলা ভাষা: উৎপত্তি ও
                                                                ক্রমবিকাশ</a>
                                                        </h3>
                                                        <div class="blog-meta">
                                                            <p class="card-meta">
                                                                <span>
                                                                    <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                                                        style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                                                    সুস্মিতা রায় অন্যন্যা
                                                                </span>
                                                                <span
                                                                    style="font-size: 16px; font-weight: lighter;margin-left: -4%;margin-right: -3%;">|</span>
                                                                <span>
                                                                    <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                                                        style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                                                    নভেম্বর 24, 2024
                                                                </span>
                                                            </p>

                                                            <div style="white-space: 10px;">
                                                                <p style="font-size: 15px;">
                                                                    আরবি নামটি শুনলে প্রথমেই আমাদের মনে আসে এটি পবিত্র
                                                                    কুরআনের ভাষা, যা
                                                                    ইসলাম ধর্মের সাথে সম্পর্কিত। সারা বিশ্বের মুসলমানরা
                                                                    প্রতিদিন তাদের
                                                                    প্রার্থনায় আরবি ভাষায় কুরআনের কিছ
                                                                </p>
                                                            </div>


                                                            <div class="rating-section"
                                                                style="display: flex; align-items: center; margin-top: 5px; gap: 10px; font-size: 20px;">
                                                                <h6
                                                                    style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; margin: 0; padding: 5px;">
                                                                    ইতিহাস
                                                                </h6>
                                                                <h6
                                                                    style="font-size: 14px; background-color: #FFF5F5; color: #DC8D8D; margin: 0; padding: 5px; display: flex; align-items: center;">
                                                                    ধর্ম
                                                                </h6>
                                                                <h3>
                                                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                                        style="height: 20px; margin-left: 5px; margin-right: 5px;">
                                                                    <span>৩.৫</span>
                                                                </h3>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="blog-style1">
                                                <div class="blog-container">
                                                    <div class="blog-img">
                                                        <img src="{{url('frontend/assets/img/8.png')}}" alt="blog image">
                                                    </div>
                                                    <div class="blog-content">
                                                        <h3 class="box-title-24">
                                                            <a class="hover-line" href="{{ route('jibonjoyi_details') }}"
                                                                style="font-size: 20px;">বাংলা ভাষা: উৎপত্তি ও
                                                                ক্রমবিকাশ</a>
                                                        </h3>
                                                        <div class="blog-meta">
                                                            <p class="card-meta">
                                                                <span>
                                                                    <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                                                        style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                                                    সুস্মিতা রায় অন্যন্যা
                                                                </span>
                                                                <span
                                                                    style="font-size: 16px; font-weight: lighter;margin-left: -4%;margin-right: -3%;">|</span>
                                                                <span>
                                                                    <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                                                        style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                                                    নভেম্বর 24, 2024
                                                                </span>
                                                            </p>
                                                            <div>
                                                                <p style="font-size: 15px; ">
                                                                    ভাষা মনের ভাব প্রকাশের সর্বোত্তম মাধ্যম। প্রাণিজগতে
                                                                    সকলেরই নিজস্ব
                                                                    ভাষা আছে। ভাষার মাধ্যমে সবাই নিজেদের মধ্যে যোগাযোগ ও
                                                                    ভাব বিনিময় করে
                                                                    থাকে। তবে অন্যান্য প্রাণী শুধু আওয়াজের মাধ্যমে
                                                                </p>
                                                            </div>
                                                            <div class="rating-section"
                                                                style="display: flex; align-items: center; margin-top: 5px; gap: 10px; font-size: 20px;">
                                                                <h6
                                                                    style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; margin: 0; padding: 5px;">
                                                                    ইতিহাস
                                                                </h6>
                                                                <h6
                                                                    style="font-size: 14px; background-color: #FFF5F5; color: #DC8D8D; margin: 0; padding: 5px; display: flex; align-items: center;">
                                                                    ধর্ম
                                                                </h6>
                                                                <h3>
                                                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                                        style="height: 20px; margin-left: 5px; margin-right: 5px;">
                                                                    <span>৩.৫</span>
                                                                </h3>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="blog-style1">
                                                <div class="blog-container">
                                                    <div class="blog-img">
                                                        <img src="assets/img/9.png" alt="blog image">
                                                    </div>
                                                    <div class="blog-content">
                                                        <h3 class="box-title-24">
                                                            <a class="hover-line" href="{{ route('jibonjoyi_details') }}"
                                                                style="font-size: 20px;">চর্যাপদের কবিগণ
                                                            </a>
                                                        </h3>
                                                        <div class="blog-meta">
                                                            <p class="card-meta">
                                                                <span>
                                                                    <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                                                        style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                                                    সুস্মিতা রায় অন্যন্যা
                                                                </span>
                                                                <span
                                                                    style="font-size: 16px; font-weight: lighter;margin-left: -4%;margin-right: -3%;">|</span>
                                                                <span>
                                                                    <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                                                        style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                                                    নভেম্বর 24, 2024
                                                                </span>
                                                            </p>
                                                            <div>
                                                                <p style="font-size: 15px;">
                                                                    চর্যাপদ, বাংলা সাহিত্যের প্রাচীন যুগের একমাত্র
                                                                    নির্ভরযোগ্য নিদর্শন।
                                                                    বৌদ্ধ সিদ্ধাচার্যদের রচিত এই চর্যাপদগুলো সম্পর্কে
                                                                    ১৯০৭ সালের পূর্বে
                                                                    কেউই তেমন কিছু জানত না। ১৯০৭ সালে সর্বপ্রথম হরপ্রসাদ
                                                                    শাস্ত্রীর
                                                                </p>
                                                            </div>
                                                            <div class="rating-section"
                                                                style="display: flex; align-items: center; margin-top: 5px; gap: 10px; font-size: 20px;">
                                                                <h6
                                                                    style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; margin: 0; padding: 5px;">
                                                                    ইতিহাস
                                                                </h6>
                                                                <h6
                                                                    style="font-size: 14px; background-color: #FFF5F5; color: #DC8D8D; margin: 0; padding: 5px; display: flex; align-items: center;">
                                                                    ধর্ম
                                                                </h6>
                                                                <h3>
                                                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                                        style="height: 20px; margin-left: 5px; margin-right: 5px;">
                                                                    <span>৩.৫</span>
                                                                </h3>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="blog-style1">
                                                <div class="blog-container">
                                                    <div class="blog-img">
                                                        <img src="{{url('frontend/assets/img/10.png')}}" alt="blog image">
                                                    </div>
                                                    <div class="blog-content">
                                                        <h3 class="box-title-24">
                                                            <a class="hover-line" href="{{ route('jibonjoyi_details') }}"
                                                                style="font-size: 20px;">লোথাল: প্রাচীন সিন্ধু সভ্যতার
                                                                এক গুরুত্বপূর্ণ বন্দর</a>
                                                        </h3>
                                                        <div class="blog-meta">
                                                            <p class="card-meta">
                                                                <span>
                                                                    <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                                                        style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                                                    সুস্মিতা রায় অন্যন্যা
                                                                </span>
                                                                <span
                                                                    style="font-size: 16px; font-weight: lighter;margin-left: -4%;margin-right: -3%;">|</span>
                                                                <span>
                                                                    <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                                                        style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                                                    নভেম্বর 24, 2024
                                                                </span>
                                                            </p>

                                                            <p style="font-size: 15px;">
                                                                সিন্ধু সভ্যতার সময়কার এক গুরুত্বপূর্ণ বন্দর হিসেবে
                                                                ইতিহাসের পাতায় ঠাঁই
                                                                নিয়েছে ‘লোথাল’। গুজরাটি ভাষায় ‘লোথ’ শব্দের অর্থ ‘মৃতের
                                                                স্তূপ’। কথিত আছে,
                                                                মৃত মানুষের ইতিহাস নাকি ছুঁয়ে দেখা যায় এই প্রত্ন
                                                            </p>

                                                            <div class="rating-section"
                                                                style="display: flex; align-items: center; margin-top: 5px; gap: 10px; font-size: 20px;">
                                                                <h6
                                                                    style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; margin: 0; padding: 5px;">
                                                                    ইতিহাস
                                                                </h6>
                                                                <h6
                                                                    style="font-size: 14px; background-color: #FFF5F5; color: #DC8D8D; margin: 0; padding: 5px; display: flex; align-items: center;">
                                                                    ধর্ম
                                                                </h6>
                                                                <h3>
                                                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                                        style="height: 20px; margin-left: 5px; margin-right: 5px;">
                                                                    <span>৩.৫</span>
                                                                </h3>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="blog-style1">
                                                <div class="blog-container">
                                                    <div class="blog-img">
                                                        <img src="{{url('frontend/assets/img/11.png')}}" alt="blog image">
                                                    </div>
                                                    <div class="blog-content">
                                                        <h3 class="box-title-24">
                                                            <a class="hover-line" href="{{ route('jibonjoyi_details') }}"
                                                                style="font-size: 20px;">বদর: ইসলামের প্রথম যুদ্ধ</a>
                                                        </h3>
                                                        <div class="blog-meta">
                                                            <p class="card-meta">
                                                                <span>
                                                                    <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                                                        style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                                                    সুস্মিতা রায় অন্যন্যা
                                                                </span>
                                                                <span
                                                                    style="font-size: 16px; font-weight: lighter;margin-left: -4%;margin-right: -3%;">|</span>
                                                                <span>
                                                                    <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                                                        style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                                                    নভেম্বর 24, 2024
                                                                </span>
                                                            </p>
                                                            <p style="font-size: 15px;">
                                                                ইসলামের অভ্যুদয় পৃথিবীর ইতিহাসের সবচেয়ে তাৎপর্যপূর্ণ
                                                                ঘটনাগুলোর মধ্যে
                                                                একটি। ৬১০ খ্রিস্টাব্দে হযরত মুহাম্মদ (সা.) এর মাধ্যমে
                                                                মক্কায় ইসলামের
                                                                প্রচার শুরু হয়। তৎকালীন আরবের পৌত্তলি
                                                            </p>
                                                            <div class="rating-section"
                                                                style="display: flex; align-items: center; margin-top: 5px; gap: 10px; font-size: 20px;">
                                                                <h6
                                                                    style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; margin: 0; padding: 5px;">
                                                                    ইতিহাস
                                                                </h6>
                                                                <h6
                                                                    style="font-size: 14px; background-color: #FFF5F5; color: #DC8D8D; margin: 0; padding: 5px; display: flex; align-items: center;">
                                                                    ধর্ম
                                                                </h6>
                                                                <h3>
                                                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                                        style="height: 20px; margin-left: 5px; margin-right: 5px;">
                                                                    <span>৩.৫</span>
                                                                </h3>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="blog-style1">
                                                <div class="blog-container">
                                                    <div class="blog-img">
                                                        <img src="{{url('frontend/assets/img/12.png')}}" alt="blog image">
                                                    </div>
                                                    <div class="blog-content">
                                                        <h3 class="box-title-24">
                                                            <a class="hover-line" href="{{ route('jibonjoyi_details') }}"
                                                                style="font-size: 20px;">জাহানারা: মুঘল সাম্রাজ্যের
                                                                সবচেয়ে প্রভাবশালী শাহজাদী</a>
                                                        </h3>
                                                        <div class="blog-meta">
                                                            <p class="card-meta">
                                                                <span>
                                                                    <img src="{{url('frontend/assets/img/w1.png')}}" alt="Author"
                                                                        style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                                                    সুস্মিতা রায় অন্যন্যা
                                                                </span>
                                                                <span
                                                                    style="font-size: 16px; font-weight: lighter;margin-left: -4%;margin-right: -3%;">|</span>
                                                                <span>
                                                                    <img src="{{url('frontend/assets/img/date.png')}}" alt="Date"
                                                                        style="width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;">
                                                                    নভেম্বর 24, 2024
                                                                </span>
                                                            </p>


                                                            <p style="font-size: 15px;">মুঘল সম্রাট শাহজাহান তার জ্যেষ্ঠ
                                                                কন্যা শাহজাদী
                                                                জাহানারার সঙ্গে দাবা খেলায় মগ্ন ছিলেন, এরই মধ্যে
                                                                সম্রাটের স্ত্রী মমতাজ
                                                                মহলের কক্ষ থেকে খবর এলো, সম্রাজ্ঞী সঙ্কটাপন্ন অবস্থায়
                                                                আছেন। সংবাদ শুনে
                                                                জা</p>


                                                            <div class="rating-section"
                                                                style="display: flex; align-items: center; margin-top: 5px; gap: 10px; font-size: 20px;">
                                                                <h6
                                                                    style="font-size: 14px; background-color: #F9F5FF; color: #6941C6; margin: 0; padding: 5px;">
                                                                    ইতিহাস
                                                                </h6>
                                                                <h6
                                                                    style="font-size: 14px; background-color: #FFF5F5; color: #DC8D8D; margin: 0; padding: 5px; display: flex; align-items: center;">
                                                                    ধর্ম
                                                                </h6>
                                                                <h3>
                                                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                                        style="height: 20px; margin-left: 5px; margin-right: 5px;">
                                                                    <span>৩.৫</span>
                                                                </h3>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="pagination" style="padding-left: 400px;padding-top: 50px;">
                                                    <button class="page-btn prev-btn">← Prev.</button>
                                                    <button class="page-btn">1</button>
                                                    <button class="page-btn">2</button>
                                                    <button class="page-btn">3</button>
                                                    <button class="page-btn next-btn active">Next →</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-3 mt-35 mt-xl-0 sidebar-wrap mb-10">
                                <div style="width: 440px; padding: 25px; ">

                                    <h2
                                        style="font-size: 20px; background-color: #4045A3; color: white; display: inline-block; padding: 8px 8px; border-radius: 10px;">
                                        সবচেয়ে পঠিত</h2>
                                    <div class="row gy-4">
                                        <div class="col-xl-12 col-md-6 border-blog">
                                            <div class="blog-style2">
                                                <div>
                                                    <img style="height: 130px;width: 150px;border-radius: 10px;"
                                                        src="{{url('frontend/assets/img/s1.png')}}" alt="blog image">
                                                </div>
                                                <div class="blog-content">
                                                    <p class="box-title-18"
                                                        style="font-size: 12px; font-weight: bold; margin-bottom: 0;"><a
                                                            class="hover-line" href="{{ route('jibonjoyi_details') }}">প্রাচীন
                                                            মেসোপটেমীয় সভ্যতায় জাদুবিদ্যা</a></p>
                                                    <div class="blog-meta">
                                                        <img src="{{url('frontend/assets/img/w1.png')}}" alt="" />
                                                        <a href="{{ route('sports') }}" class="cats_item"
                                                            style="font-size: 13px;">সুস্মিতা
                                                            রায় অন্যন্যা</a>
                                                        <div class="rating-section"
                                                            style="display: flex; align-items: center; margin-top: 5px; gap: 10px; font-size: 14px;">
                                                            <h3
                                                                style="font-size: 10px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;">
                                                                ইতিহাস
                                                            </h3>
                                                            <h3
                                                                style="font-size: 10px; background-color: #FFF5F5; color: #DC8D8D; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;">
                                                                ধর্ম
                                                            </h3>
                                                            <div
                                                                style="display: flex; align-items: center; color: #6c757d; margin-left: 0;">
                                                                <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                                    style="width: 10px; height: 10px; margin-right: 5px;">
                                                                <span style="font-size: 10px;">৩.৫</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-md-6 border-blog">
                                            <div class="blog-style2">
                                                <div>
                                                    <img style="height: 130px;width: 150px;border-radius: 10px;"
                                                        src="{{url('frontend/assets/img/s2.png')}}" alt="blog image">
                                                </div>
                                                <div class="blog-content">

                                                    <p class="box-title-18"
                                                        style="font-size: 12px; font-weight: bold; margin-bottom: 0;"><a
                                                            class="hover-line" href="{{ route('jibonjoyi_details') }}">প্রাচীন
                                                            গিয়াসউদ্দিন আজম শাহ: বাংলা সালতানাতের সাহিত্যানুরাগী এক
                                                            আবেগ</a></p>
                                                    <div class="blog-meta">
                                                        <img src="{{url('frontend/assets/img/w1.png')}}" alt="" />
                                                        <a href="{{ route('sports') }}" class="cats_item"
                                                            style="margin-top: -2px; font-size: 13px;">সুস্মিতা
                                                            রায় অন্যন্যা</a>
                                                        <div class="rating-section"
                                                            style="display: flex; align-items: center; margin-top: 5px; gap: 10px; font-size: 14px;">
                                                            <h3
                                                                style="font-size: 10px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;">
                                                                ইতিহাস
                                                            </h3>
                                                            <h3
                                                                style="font-size: 10px; background-color: #FFF5F5; color: #DC8D8D; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;">
                                                                ধর্ম
                                                            </h3>
                                                            <div
                                                                style="display: flex; align-items: center; color: #6c757d; margin-left: 0;">
                                                                <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                                    style="width: 10px; height: 10px; margin-right: 5px;">
                                                                <span style="font-size: 10px;">৩.৫</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-md-6 border-blog">
                                            <div class="blog-style2">
                                                <div>
                                                    <img style="height: 130px;width: 150px;border-radius: 10px;"
                                                        src="{{url('frontend/assets/img/s3.png')}}" alt="blog image">
                                                </div>
                                                <div class="blog-content">

                                                    <p class="box-title-18"
                                                        style="font-size: 12px; font-weight: bold; margin-bottom: 0;"><a
                                                            class="hover-line" href="{{ route('jibonjoyi_details') }}">প্রাচীন
                                                            বদর: ইসলামের প্রথম যুদ্ধ</a></p>
                                                    <div class="blog-meta">
                                                        <img src="{{url('frontend/assets/img/w1.png')}}" alt="" />
                                                        <a href="{{ route('sports') }}" class="cats_item"
                                                            style="margin-top: -2px;">সুস্মিতা
                                                            রায় অন্যন্যা</a>
                                                        <div class="rating-section"
                                                            style="display: flex; align-items: center; margin-top: 5px; gap: 10px; font-size: 14px;">
                                                            <h3
                                                                style="font-size: 10px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;">
                                                                ইতিহাস
                                                            </h3>
                                                            <h3
                                                                style="font-size: 10px; background-color: #FFF5F5; color: #DC8D8D; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;">
                                                                ধর্ম
                                                            </h3>
                                                            <div
                                                                style="display: flex; align-items: center; color: #6c757d; margin-left: 0;">
                                                                <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                                    style="width: 10px; height: 10px; margin-right: 5px;">
                                                                <span style="font-size: 10px;">৩.৫</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-md-6 border-blog">
                                            <div class="blog-style2">
                                                <div>
                                                    <img style="height: 130px;width: 150px;border-radius: 10px;"
                                                        src="{{url('frontend/assets/img/s4.png')}}" alt="blog image">
                                                </div>
                                                <div class="blog-content">

                                                    <p class="box-title-18"
                                                        style="font-size: 12px; font-weight: bold; margin-bottom: 0;"><a
                                                            class="hover-line" href="{{ route('jibonjoyi_details') }}">প্রাচীন
                                                            মেসোপটেমীয় সভ্যতায় জাদুবিদ্যা</a></p>
                                                    <div class="blog-meta">
                                                        <img src="{{url('frontend/assets/img/w1.png')}}" alt="" />
                                                        <a href="{{ route('sports') }}" class="cats_item"
                                                            style="margin-top: -2px;">সুস্মিতা
                                                            রায় অন্যন্যা</a>
                                                        <div class="rating-section"
                                                            style="display: flex; align-items: center; margin-top: 5px; gap: 10px; font-size: 14px;">
                                                            <h3
                                                                style="font-size: 10px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;">
                                                                ইতিহাস
                                                            </h3>
                                                            <h3
                                                                style="font-size: 10px; background-color: #FFF5F5; color: #DC8D8D; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;">
                                                                ধর্ম
                                                            </h3>
                                                            <div
                                                                style="display: flex; align-items: center; color: #6c757d; margin-left: 0;">
                                                                <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                                    style="width: 10px; height: 10px; margin-right: 5px;">
                                                                <span style="font-size: 10px;">৩.৫</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-md-6 border-blog">
                                            <div class="blog-style2">
                                                <div>
                                                    <img style="height: 130px;width: 150px;border-radius: 10px;"
                                                        src="{{url('frontend/assets/img/s5.png')}}" alt="blog image">
                                                </div>
                                                <div class="blog-content">

                                                    <p class="box-title-18"
                                                        style="font-size: 12px; font-weight: bold; margin-bottom: 0;"><a
                                                            class="hover-line" href="{{ route('jibonjoyi_details') }}">প্রাচীন
                                                            ব্রিটিশ ভারতের ফুটবলকথন</a></p>
                                                    <div class="blog-meta">
                                                        <img src="{{url('frontend/assets/img/w1.png')}}" alt="" />
                                                        <a href="{{ route('sports') }}" class="cats_item"
                                                            style="margin-top: -2px;">সুস্মিতা
                                                            রায় অন্যন্যা</a>
                                                        <div class="rating-section"
                                                            style="display: flex; align-items: center; margin-top: 5px; gap: 10px; font-size: 14px;">
                                                            <h3
                                                                style="font-size: 10px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;">
                                                                ইতিহাস
                                                            </h3>
                                                            <h3
                                                                style="font-size: 10px; background-color: #FFF5F5; color: #DC8D8D; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;">
                                                                ধর্ম
                                                            </h3>
                                                            <div
                                                                style="display: flex; align-items: center; color: #6c757d; margin-left: 0;">
                                                                <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                                    style="width: 10px; height: 10px; margin-right: 5px;">
                                                                <span style="font-size: 10px;">৩.৫</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-md-6 border-blog">
                                            <div class="blog-style2">
                                                <div>
                                                    <img style="height: 130px;width: 150px;border-radius: 10px;"
                                                        src="{{url('frontend/assets/img/s6.png')}}" alt="blog image">
                                                </div>
                                                <div class="blog-content">

                                                    <p class="box-title-18"
                                                        style="font-size: 12px; font-weight: bold; margin-bottom: 0;"><a
                                                            class="hover-line" href="{{ route('jibonjoyi_details') }}">প্রাচীন
                                                            মেসোপটেমীয় সভ্যতায় জাদুবিদ্যা</a></p>
                                                    <div class="blog-meta">
                                                        <img src="{{url('frontend/assets/img/w1.png')}}" alt="" />
                                                        <a href="{{ route('sports') }}" class="cats_item"
                                                            style="margin-top: -2px;">সুস্মিতা
                                                            রায় অন্যন্যা</a>
                                                        <div class="rating-section"
                                                            style="display: flex; align-items: center; margin-top: 5px; gap: 10px; font-size: 14px;">
                                                            <h3
                                                                style="font-size: 10px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;">
                                                                ইতিহাস
                                                            </h3>
                                                            <h3
                                                                style="font-size: 10px; background-color: #FFF5F5; color: #DC8D8D; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;">
                                                                ধর্ম
                                                            </h3>
                                                            <div
                                                                style="display: flex; align-items: center; color: #6c757d; margin-left: 0;">
                                                                <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                                    style="width: 10px; height: 10px; margin-right: 5px;">
                                                                <span style="font-size: 10px;">৩.৫</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="">
                                                <a href="https://themeforest.net/user/themeholy/portfolio">
                                                    <img style="width: 450px;" class="w-80 light-img"
                                                        src="{{url('frontend/assets/img/ad2.png')}}" alt="ads">
                                                </a>
                                            </div>
                                        </div>




                                        <div class="poll-container">
                                            <h3>আজকের জরিপ ০১</h3>
                                            <p>আপনি কোন সাহিত্যিকের কবিতা বা রচনা রোমান্টিক আন্দোলনের সাথে সম্পর্কিত মনে
                                                করেন?</p>
                                            <form id="pollForm">
                                                <div class="option">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" class="checkbox-input" />
                                                        <span class="checkbox-box"></span>
                                                        <input type="radio" name="poet" value="rabindranath">
                                                        <span class="option-text">কবি রবীন্দ্রনাথ ঠাকুর</span>
                                                        <span class="percentage">২০%</span>
                                                    </label>
                                                </div>
                                                <div class="option">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" class="checkbox-input" />
                                                        <span class="checkbox-box"></span>
                                                        <input type="radio" name="poet" value="kaliprasanna">
                                                        <span class="option-text">কবি কালীপ্রসন্ন সিংহ</span>
                                                        <span class="percentage">৬০%</span>
                                                    </label>
                                                </div>
                                                <div class="option">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" class="checkbox-input" />
                                                        <span class="checkbox-box"></span>
                                                        <input type="radio" name="poet" value="govind">
                                                        <span class="option-text">কবি গোবিন্দচন্দ্র দে</span>
                                                        <span class="percentage">৩০%</span>
                                                    </label>
                                                </div>
                                                <div class="option">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" class="checkbox-input" />
                                                        <span class="checkbox-box"></span>
                                                        <input type="radio" name="poet" value="none">
                                                        <span class="option-text">কাউকেই না</span>
                                                        <span class="percentage">০%</span>
                                                    </label>
                                                </div>
                                                <button type="button" id="submitBtn">মতামত প্রদান</button>
                                            </form>
                                        </div>
                                        <div class="space223"></div>
                                        <div class="poll-container">
                                            <h3>আজকের জরিপ ০২</h3>
                                            <p>আপনি কোন সাহিত্যিকের কবিতা বা রচনা রোমান্টিক আন্দোলনের সাথে সম্পর্কিত মনে
                                                করেন?</p>
                                            <form id="pollForm">
                                                <div class="option">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" class="checkbox-input" />
                                                        <span class="checkbox-box"></span>
                                                        <input type="radio" name="poet" value="rabindranath">
                                                        <span class="option-text">কবি রবীন্দ্রনাথ ঠাকুর</span>
                                                        <span class="percentage">২০%</span>
                                                    </label>
                                                </div>
                                                <div class="option">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" class="checkbox-input" />
                                                        <span class="checkbox-box"></span>
                                                        <input type="radio" name="poet" value="kaliprasanna">
                                                        <span class="option-text">কবি কালীপ্রসন্ন সিংহ</span>
                                                        <span class="percentage">৬০%</span>
                                                    </label>
                                                </div>
                                                <div class="option">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" class="checkbox-input" />
                                                        <span class="checkbox-box"></span>
                                                        <input type="radio" name="poet" value="govind">
                                                        <span class="option-text">কবি গোবিন্দচন্দ্র দে</span>
                                                        <span class="percentage">৩০%</span>
                                                    </label>
                                                </div>
                                                <div class="option">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" class="checkbox-input" />
                                                        <span class="checkbox-box"></span>
                                                        <input type="radio" name="poet" value="none">
                                                        <span class="option-text">কাউকেই না</span>
                                                        <span class="percentage">০%</span>
                                                    </label>
                                                </div>
                                                <button type="button" id="submitBtn">মতামত প্রদান</button>
                                            </form>
                                        </div>
                                        <div class="poll-container">
                                            <form id="pollForm">
                                                <div style="height: 200px;">
                                                    <p style="text-align: center;padding: 60px; font-weight: bolder;">
                                                        Lets Met</p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
            </div>
        </div>


        <div class="container1">
            <div class="headerr">
                <h1 style="color: #0056b3;text-decoration: underline;">আজকের বাণী</h1>
                <p class="quote">মানুষের পুরো জীবনটা হচ্ছে একটা সরল অংক, যতই দিন যাচ্ছে ততই আমরা তার সমাধানের দিকে
                    যাচ্ছি ।</p>
                <p class="quote">-হুমায়ুন আহমেদ</p>
            </div>
        </div>

        <footer class="footer">
            <!-- First footer row -->
            <div class="footer-wrapper">
                <div class="notice-container">
                    <div class="static-text">বিভাগের নোটিশ:</div>
                    <div class="scrolling-text" id="scrollingText">
                        <!-- Dynamic text will appear here -->
                    </div>
                </div>
            </div>

            <!-- Second footer row -->
            <div class="footer-bottom">
                <div class="footer">
                    <div class="static-text1">সর্বস্বর্ত্ব ২০২৪ জীবনজয়ী</div>
                </div>
            </div>
            <script>
                const scrollingText = document.getElementById('scrollingText');
                const noticeContainer = document.querySelector('.notice-container');

                // Array of messages to scroll
                const messages = [
                    "আরবি নামটি শুনলে প্রথমেই আমাদের মনে আসে এটি পবিত্র কুরআনের ভাষা, যা ইসলাম ধর্মের সাথে সম্পর্কিত।"
                ];

                let currentMessageIndex = 0;

                function updateScrollingText() {
                    // Update the text content
                    scrollingText.textContent = messages[currentMessageIndex];

                    // Adjust the animation duration
                    const textWidth = scrollingText.offsetWidth;
                    const containerWidth = noticeContainer.offsetWidth;
                    const duration = (textWidth / containerWidth) * 15; // Adjust multiplier as needed
                    scrollingText.style.animationDuration = `${duration}s`;

                    // Listen for animation end
                    scrollingText.addEventListener('animationend', handleAnimationEnd, { once: true });
                }

                function handleAnimationEnd() {
                    // Update to the next message
                    currentMessageIndex = (currentMessageIndex + 1) % messages.length; // Loop through messages
                    scrollingText.style.animation = 'none'; // Reset animation
                    void scrollingText.offsetWidth; // Trigger reflow to restart animation
                    scrollingText.style.animation = ''; // Reapply animation
                    updateScrollingText(); // Update the text
                }

                // Initialize on page load
                window.onload = updateScrollingText;

                // Recalculate on resize
                window.onresize = () => {
                    scrollingText.style.animation = 'none'; // Reset animation
                    void scrollingText.offsetWidth; // Trigger reflow
                    updateScrollingText(); // Restart scrolling
                };
            </script>
        </footer>
        <!-- Jquery -->
        <script>
            function markButton(button) {
                // Remove the 'active' class from all buttons
                const buttons = document.querySelectorAll(".buttons button");
                buttons.forEach(btn => btn.classList.remove("active"));

                // Add the 'active' class to the clicked button
                button.classList.add("active");
            }

            function showContent(id) {
                // Hide all content divs
                const contentDivs = document.querySelectorAll(".content");
                contentDivs.forEach(div => {
                    div.style.display = "none"; // Hide all other content
                });

                // Show the selected content div
                const selectedDiv = document.getElementById(id);
                if (selectedDiv) {
                    selectedDiv.style.display = "block"; // Display selected content
                }
            }

            // Mark the default button as active when the page loads
            document.addEventListener("DOMContentLoaded", function () {
                const defaultButton = document.querySelector(".buttons button:nth-child(4)"); // Adjust based on button order
                if (defaultButton) {
                    defaultButton.classList.add("active");
                }
            });
        </script>

    </body>

</html>