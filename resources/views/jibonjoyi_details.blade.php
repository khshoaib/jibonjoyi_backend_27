<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="it-rating" content="it-rat-cd303c3f80473535b3c667d0d67a7a11" />
    <meta name="cmsmagazine" content="3f86e43372e678604d35804a67860df7" />
    <title>More Details</title>
    <meta name='description' content="" />
    <meta name="keywords" content="" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="{{url('frontend/css/style.css')}}" class="styles" />
    <link rel="stylesheet" type="text/css" href="{{url('frontend/css/3rdpage.css')}}" class="styles" />
</head>

<body class="loaded">
    <!-- Add Font Awesome for icons -->
    <link href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css')}}" rel="stylesheet">

    <header class="header">
        <div class="logo" style="margin-top: 40px;">
            <a href="index.html"> <img src="{{url('frontend/img/jibonjoyi.png')}}" alt="Logo" class="logo"></a>
        </div>

        <div class="top-right">
            <div class="search-icon" onclick="toggleSearch()" style="font-size: 30px;">🔍</div>
            <div class="menu-icon" onclick="toggleMenu()" style="font-size: 30px;">☰</div>

        </div>

        <div class="menu-bar" id="menu-bar">
            <ul class="menu-links">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('liberation') }}">2nd</a></li>
                <li><a href="{{ route('stories.create') }}">Admin</a></li>
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

    <!-- BEGIN BODY -->
    <div class="main-wrapper" style="margin-top: 120px;">
        <!-- BEGIN CONTENT -->
        <main class="content">
            <div class="section-post">
                <div class="wrapper">

                    <div class="columns">
                        <div class="columns_center">
                            <article class="article">

                                <div class="article_txt">
                                    <a href="#" class="bann"><img data-src="{{url('frontend/img/ad1.png')}}"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"
                                            alt="" /></a>
                                    <h1 style="font-size: 32px; font-weight: bold;">গিয়াসউদ্দিন আজম শাহ: বাংলা
                                        সালতানাতের সাহিত্যানুরাগী এক আবেগপ্রবণ শাসক</h1>
                                    <h2 style="font-size: 25px; font-weight: normal;">রাজ্যের সীমানা বিস্তারের খুব বেশি
                                        আগ্রহ ছিল না তার</h2>
                                    <div class="popular_item_infoline infoline"
                                        style="display: flex; align-items: center;">
                                        <img src="{{url('frontend/img/w1.png')}}" alt="" />
                                        <a href="{{ route('jibonjoyi_details') }}" class="cats_item"
                                            style="margin-top: -2px;">সুস্মিতা রায়
                                            অন্যন্যা</a>

                                        <class="popular_item_infoline infoline"
                                            style="display: flex; align-items: center;">
                                            <img src="{{url('frontend/img/date.png')}}" alt="" />
                                            <a href="{{ route('jibonjoyi_details') }}" class="cats_item"
                                            style="margin-top: -2px;">০২
                                                ডিসেম্বর ২০২৪</a>
                                    </div>


                                    <p class="short"> তাঁরা সিকান্দারের কাছে নালিশ জানায়, এভাবে লোকের কানে ফুঁস-মন্তর
                                        দিয়ে গিয়াসউদ্দিন সিংহাসন দখলের মতলব আঁটছে! সিকান্দর শাহ নিজ পুত্রদের জানিয়ে
                                        দিলেন, যদি গিয়াসউদ্দিন সিংহাসনে বসার যোগ্য হয়, তবে সে-ই বসবে। কিন্তু কেউ একজন
                                        চক্রান্ত করে গিয়াসউদ্দিনের কাছে প্রেরণ করল এই সংবাদের বিকৃত রূপ। তিনি ভাবলেন,
                                        বাবা হয়ত তাঁর বিরুদ্ধে যুদ্ধে নামতে চান। তাই আগেভাগেই তিনি যুদ্ধের প্রস্তুতি
                                        সারলেন।পিতার বিরুদ্ধে বিদ্রোহ করার সিদ্ধান্ত নিলেন তিনি। সুবর্ণগ্রাম থেকে ফৌজ
                                        নিয়ে পাণ্ডুয়ার উত্তরে নাগরি নদীর তীরে গোয়ালপাড়া এলাকায় শিবির গাড়লেন। প্রিয়
                                        সন্তানের বিদ্রোহের খবর শুনতে পেয়ে মাথায় আকাশ ভেঙে পড়ল পিতার। কিছু সৈন্য নিয়ে
                                        তিনি পৌঁছলেন গোয়ালপাড়ায়। কিন্তু গিয়াসউদ্দিনের বাহিনীর নিকট তার দলকে শোচনীয় পরাজয়
                                        বরণ করতে হয়। </p>
                                </div>

                                <div class="">
                                    <img src="{{url('frontend/img/1.png')}}" alt="" />

                                </div>

                                <div class="article_txt">
                                    <p class="short"><span style="font-size: 40px; font-weight: bold;">বাং</span>লা
                                        সালতানাতের গোড়াপত্তন হয়েছিল শামসউদ্দিন ইলিয়াস শাহের হাত ধরে। তারই দৌহিত্র ছিলেন
                                        গিয়াসউদ্দিন তিনি . আবেগপ্রবণ গোছের। মধ্যযুগে গদিতে বসে শাসনকার্য চালাতে হলে আবেগ
                                        নিয়ন্ত্রণ করাটা ছিল সর্বাপেক্ষা জরুরি। অধিকাংশ সময়েই শাসকদের যেতে হতো বিভিন্ন
                                        জটিল রাজনৈতিক ও কূটনৈতিক মারপ্যাঁচের মধ্য দিয়ে। তাই তারা প্রেম, ভালোবাসা,
                                        মায়া-মমতা, বন্ধুত্ব, আবেগ-অনুভূতি, নাচ-গান ইত্যাদি সাময়িক উপভোগ করলেও তাতে
                                        পুরোপুরি ডুবে যেতেন না। কিন্তু এর ভাগ্যের ফেরে এই ঘটনাচক্রের ব্যতিক্রম ছিলেন
                                        গিয়াসউদ্দিন। ইলিয়াস শাহের মৃত্যুর পর সিংহাসনে বসেন তার পুত্র সিকান্দর শাহ।
                                        সিকান্দর শাহ-এর পর বাংলা সালতানাতের তৃতীয় সুলতান হিসেবে সিংহাসনে স্থলাভিষিক্ত হন
                                        গিয়াসউদ্দিনসিকান্দর শাহ-এর পুত্রসংখ্যা ছিল আঠারোজন। গিয়াসউদ্দিন ছিলেন সবার ছোট।
                                        ছোটবেলা থেকেই নিজ মেধার প্রস্ফুটনে সকলের দৃষ্টি কেড়েছিলেন তিনি। তার যোগ্যতার উপর
                                        পরিপূর্ণ আস্থা ছিল সিকান্দর শাহর। তাই তিনি তাকে সুবর্ণগ্রামের দায়িত্ব অর্পণ
                                        করেন। এর ফলে তিনি তার অন্য সন্তানদের নিকট পরিণত হয়েছিলেন বিরাগের পাত্রে।
                                        অল্পসময়েই সৈন্য ও প্রজাদের মাঝে জনপ্রিয়তা অর্জন করে নেন গিয়াসউদ্দিন। তা দেখে
                                        ঈর্ষান্বিত হয়ে পড়েন সিকান্দরের বাকি পুত্রগণ। তাঁরা সিকান্দারের কাছে নালিশ জানায়,
                                        এভাবে লোকের কানে ফুঁস-মন্তর দিয়ে গিয়াসউদ্দিন সিংহাসন দখলের মতলব আঁটছে! সিকান্দর
                                        শাহ নিজ পুত্রদের জানিয়ে দিলেন, যদি গিয়াসউদ্দিন সিংহাসনে বসার যোগ্য হয়, তবে সে-ই
                                        বসবে। কিন্তু কেউ একজন চক্রান্ত করে গিয়াসউদ্দিনের কাছে প্রেরণ করল এই সংবাদের
                                        বিকৃত রূপ। তিনি ভাবলেন, বাবা হয়ত তাঁর বিরুদ্ধে যুদ্ধে নামতে চান। তাই আগেভাগেই
                                        তিনি যুদ্ধের প্রস্তুতি সারলেন।পিতার বিরুদ্ধে বিদ্রোহ করার সিদ্ধান্ত নিলেন তিনি।
                                        সুবর্ণগ্রাম থেকে ফৌজ নিয়ে পাণ্ডুয়ার উত্তরে নাগরি নদীর তীরে গোয়ালপাড়া এলাকায়
                                        শিবির গাড়লেন। প্রিয় সন্তানের বিদ্রোহের খবর শুনতে পেয়ে মাথায় আকাশ ভেঙে পড়ল পিতার।
                                        কিছু সৈন্য নিয়ে তিনি পৌঁছলেন গোয়ালপাড়ায়। কিন্তু গিয়াসউদ্দিনের বাহিনীর নিকট তার
                                        দলকে শোচনীয় পরাজয় বরণ করতে হয়। যুদ্ধের শুরুতে তিনি সৈন্যদের আদেশ দিয়েছিলেন, তার
                                        পিতার উপর যাতে কোনোপ্রকার আঘাত করা না হয়। কিন্তু যুদ্ধে ঝাঁপিয়ে পড়ার পর
                                        রণোন্মত্ত সেনাদের কারও মাথায় রইলো না সে কথা। যুদ্ধে মারাত্মকভাবে জখম হলেন
                                        সিকান্দার শাহ। গিয়াসউদ্দিন ছুটে গেলেন বাবার কাছে।।</p>
                                </div>




                                <div class="">
                                    <img src="{{url('frontend/img/2.png')}}" alt="" />

                                </div>

                                <div class="article_infoline infoline">
                                    <!--    <div class="infoline_date">Jul 06, 2021</div> <span class="dash"></span> -->
                                    <div class="infoline_author">
                                        <!--   <div class="ava"><img data-src="img/ava.png" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt=""/></div> -->
                                        সেই লড়াইয়ে। জীবিত থাকা বাকি সকলকে তিনি অন্ধ করে দেন
                                    </div>
                                </div>

                                <div class="article_txt">
                                    <p class="short">বাবা তাকে বললেন, “তুমি রাজ্য শাসন করতে চেয়েছিলে, সে আশা পূরণ হয়েছে।
                                        এবার সর্বস্ব দিয়ে সে রাজ্যে রক্ষা কোরো।” এই বলেই শেষ নিঃশ্বাস ত্যাগ করেন তিনি।
                                        গিয়াসউদ্দিনের ভাইদের কেউ কেউ প্রাণ হারান সেই লড়াইয়ে। জীবিত থাকা বাকি সকলকে তিনি
                                        অন্ধ করে দেন। সিংহাসন সুরক্ষিত রাখার উদ্দেশ্য মধ্যযুগে তা ছিল খুবই পরিচিত এক
                                        প্রক্রিয়া। বাবার মৃতদেহকে আদিনা মসজিদ চত্বরে সমাহিত করার পর পাণ্ডুয়া ত্যাগ করেন
                                        তিনি। কারণ, এই জায়গা তাকে পিতৃবিয়োগের তীব্র বেদনা স্মরণ করিয়ে দিত বারংবার।
                                        সিংহাসনের বসার পর আজম শাহ উপাধি গ্রহণ করেন তিনি। সুবর্ণগ্রামকে পরিণত করেন
                                        রাজধানীতে।বাবা-ভাই হত্যার ঘটনা তাঁকে সর্বদাই তাড়িয়ে বেড়াত। ভীষণ মানসিক পীড়ায়
                                        ভুগতেন তিনি। তাই তিনি সিদ্ধান্ত নিলেন, এসব যুদ্ধ-বিগ্রহ ত্যাগ করতে হবে। রাজ্যের
                                        সীমানা বিস্তারের খুব বেশি আগ্রহ ছিল না তার। সকলের সাথে বন্ধুত্বপূর্ণ মনোভাব বজায়
                                        রাখার দিকে তিনি ছিলেন অধিক মনোযোগী। জৌনপুরের সুলতান খাজা-ই-জাহান মালিক সারোয়ারের
                                        সাথে বন্ধুত্বপূর্ণ সম্পর্ক গড়ে তুলেন তিনি। চীনা সম্রাটে সাথেও নিয়মিত উপঢৌকন
                                        বিনিময় হতো তার। ইতিহাস থেকে জানা যায়, ১৪০৫, ১৪০৮ এবং ১৪০৯ সালে চীনে দূত প্রেরণ
                                        করেছিলেন তিনি।দেশে সঠিক আইন প্রণয়ন ও পরিচালনায় দারুণ তৎপর ছিলেন গিয়াসউদ্দিন। এই
                                        নিয়ে প্রাচীন বাংলায় এক কিংবদন্তি চালু ছিল। একবার শিকারে বেরিয়ে ভুলবশত এক বিধবার
                                        ছেলেকে তীরবিদ্ধ করে ফেলেন তিনি। সেজন্য সুবর্ণগ্রামের বিচারকের কাছে নালিশ নিয়ে
                                        ছুটে আসেন সে বিধবা। খোঁজখবর নিয়ে বিচারক জানতে পারলেন, অভিযুক্ত সে ব্যক্তি খোদ
                                        সুলতান নিজেই। তিনি বিচারালয়ে তলব করলেন গিয়াসউদ্দিনকে। বিচারকার্যে দোষী হিসেবে
                                        সাব্যস্ত হলেন সুলতান। বিধবার নিকট বিনীত ভঙ্গিতে ক্ষমাপ্রার্থনা করে তিনি
                                        ক্ষতিপূরণ দিতে চান। সে প্রস্তাব মেনে নিয়েছিলেন বিধবা। বিচার প্রক্রিয়া শেষে
                                        সুলতান পোশাকের আড়াল থেকে তলোয়ার বের করে বললেন,
                                        “আজকে আপনি আমার পক্ষে রায় দিলে আপনার গর্দান কেটে নিতাম।”
                                        প্রত্যুত্তরে কাজি নিজ পোশাকের ভেতর থেকে চাবুক বের করে হেসে বললেন,
                                        “আপনি ক্ষমতার অপব্যবহার করে এই বিচার প্রক্রিয়া এড়িয়ে যেতে চাইলে আপনাকেও আমি ছাড়
                                        দিতাম না।”
                                        এই কাহিনি থেকে গিয়াসউদ্দিনের ন্যায়পরায়ণতার প্রমাণ পাওয়া যায়।একবার অসুস্থতার কবলে
                                        পড়লেন তিনি। তার মাঝে ভাবনা উদয় হলো, তার আয়ু বোধহয় ফুরিয়ে এসেছে। তাই তার ইচ্ছা
                                        ছিল প্রিয় তিন উপপত্নী তার মৃতদেহকে গোসল করাবেন। কিন্তু অসুস্থতা কাটিয়ে সুস্থ হয়ে
                                        উঠলেন গিয়াসউদ্দিন। অন্দরমহলের অন্যান্য নারীরা গিয়াসউদ্দিনের প্রিয় তিন উপপত্নীকে
                                        দেখতেন খানিকটা ঈর্ষার চোখে। তিনি সুস্থ হয়ে উঠলে তার উপপত্নীদেরকে লাশ-ধোয়ানি বলে
                                        টিকা-টিপ্পনী কাটতে থাকে বাকিরা। এই বিষয় নিয়ে বেজায় মন ভারী করেছিলেন তিনজন।
                                        গিয়াসউদ্দিন তাদের অন্তর্বেদনা দূর করার উদ্দেশ্যে কবিতা লিখার সিদ্ধান্ত নিলেন।
                                        প্রথম চরণ তিনি লিখলেন। কিন্তু অজানা এক কারণবশত এরপর থেকে শতচেষ্টা করেও কবিতা
                                        নিয়ে সামনে এগোতে পারলেন না। গিয়াসউদ্দিনের সভাকবিরাও বিফল হলেন এই প্রচেষ্টায়।
                                        উদ্বিগ্ন গিয়াসউদ্দিন তখন অতিশয় মূল্যবান উপঢৌকনসমেত দূত প্রেরণ করেন তৎকালীন
                                        পারস্যের যশস্বী কবি হাফিজের কাছে। দূত তাকে কবিতাটি সম্পূর্ণ করে দেওয়ার অনুরোধ
                                        জানানোর পাশাপাশি বাংলায় একবার ঘুরে যাওয়ার শাহী নিমন্ত্রণ জানিয়েছিল। কিন্তু বয়সের
                                        ভারে নুইয়ে পড়ায় গিয়াসউদ্দিনের দ্বিতীয় অনুরোধ রক্ষা করতে পারলেন না কবি। কবি ও
                                        পণ্ডিতগণ ছিলেন গিয়াসউদ্দিনের নিকট দারুণ সমাদৃত। মধ্যযুগীয় খ্যাতনামা বাঙালি
                                        মুসলিম কবি শাহ মুহম্মদ সগীর তার বিখ্যাত রচনা ইউসুফ জুলেখা গিয়াসউদ্দিনের
                                        শাসনামলেই সম্পন্ন করেন। এছাড়াও কৃত্তিবাসের রামায়ণ বাংলায় অনুবাদ করা হয় এই
                                        সময়েই।একসময় বার্ধক্য কাবু করল গিয়াসউদ্দিনকে। বয়স বৃদ্ধির সঙ্গে সঙ্গে ধর্মের সাথে
                                        সম্পর্ক ক্রমশ দৃঢ় হতে লাগল তার। উজির আজম এবং ইয়াহিয়ার পরামর্শক্রমে তিনি
                                        মক্কা-মদিনায় নির্মাণ করলেন মাদ্রাসা। এছাড়াও ওই অঞ্চলের হতদরিদ্র আরবদের জন্য
                                        ত্রাণের ব্যবস্থার পাশাপাশি কূপ খনন করা হয়েছিল তার অর্থায়নেই। সুফি-দরবেশদের প্রতি
                                        ভক্তি-শ্রদ্ধার বৈশিষ্ট্য তিনি বাপ-দাদা থেকে বংশানুক্রমেই পেয়েছিলেন।সেসময়
                                        ভাতুড়িয়ার জমিদার গণেশ ছিলেন একজন গুরুত্বপূর্ণ ব্যক্তিত্ব। বংশপরম্পরায় তার পরিবার
                                        ছিল জমিদারির সাথে সম্পৃক্ত। গিয়াসউদ্দিনের অপসারণ প্রক্রিয়া থেকে বাদ যাননি তিনিও।
                                        ক্ষমতাচ্যুত হিন্দু কর্মকর্তা ও জমিদারদের প্ররোচনায় গণেশ হয়ে ওঠেন প্রতিশোধপরায়ণ।
                                        তবে তিনি গিয়াসউদ্দিনের সাথে প্রত্যক্ষভাবে সংঘর্ষের জড়ালেন না। ঘুষ দিয়ে হাত করে
                                        নিলেন তার ক্ষুব্ধ কিছু সৈনিককে। তাদের অতর্কিত হামলাতেই ৫৩ বছর বয়সে প্রাণ হারান
                                        গিয়াসউদ্দিন আজম শাহ। ক্যালেন্ডারের পাতায় তখন ১৪১১ সাল। বর্তমান নারায়ণগঞ্জের
                                        সোনারগাঁও উপজেলায় তার মাজার রয়েছে, যা বাংলা সুলতানি আমলের এক নিদর্শন। প্রতিবছর
                                        বহু পর্যটক আসেন সেই মাজারে।
                                    </p>
                                </div>



                            </article>
                            <a href="{{ route('jibonjoyi_details') }}" class="bann"><img data-src="{{url('frontend/img/ad1.png')}}"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="" /></a>
                            <section class="popular-news">
                                <h3
                                    style="font-size: 15px; background-color: #4045A3; color: white; display: inline-block; padding: 8px 8px; border-radius: 10px;">
                                    এই বিভাগের আরও পোস্ট</h3>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="blog-style1">
                                            <div class="blog-img">
                                                <img src="{{url('frontend/img/7.png')}}" alt="blog image" style="border-radius: 10px;">
                                                <span class="category"></span>
                                            </div>
                                            <h3 class="box-title-20" style="font-size: 15px;">সিন্ধু সভ্যতার উল্লেখযোগ্য
                                                যত শহর ও নগর</h3>
                                            <div class="blog-meta"
                                                style="display: flex; align-items: center; gap: 5px; font-size: 12px;height: 0px;">
                                                <p> সুস্মিতা রায় অন্যন্যা</p>
                                                <p style="margin-left:2%; margin-right:2%; font-size: 18px;">|</p>
                                                <p> ০২ ডিসেম্বর ২০২৪</p>
                                            </div>

                                            <div class="rating-section"
                                                style="display: flex; align-items: center; margin-top: 5px; gap: 10px; font-size: 14px;">
                                                <h3
                                                    style="font-size: 14px; background-color: rgb(243, 243, 245); color: rgb(88, 58, 158); display: inline-block; padding: 5px 10px; border-radius: 15px; margin: 0; cursor: pointer;">
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
                                                <img src="{{url('frontend/img/3.png')}}" alt="blog image" style="border-radius: 10px;">
                                                <span class="category"></span>
                                            </div>
                                            <h3 class="box-title-20" style="font-size: 15px;">যেভাবে শুরু হয়েছিল ২য়
                                                বিশ্বযুদ্ধ</h3>
                                            <div class="blog-meta"
                                                style="display: flex; align-items: center; gap: 5px; font-size: 12px;height: 0px;">
                                                <p> সুস্মিতা রায় অন্যন্যা</p>
                                                <p style="margin-left:2%; margin-right:2%; font-size: 18px;">|</p>
                                                <p> ০২ ডিসেম্বর ২০২৪</p>
                                            </div>

                                            <div class="rating-section"
                                                style="display: flex; align-items: center; margin-top: 5px; gap: 10px; font-size: 14px;">
                                                <h3
                                                    style="font-size: 14px; background-color: rgb(243, 243, 245); color: rgb(88, 58, 158); display: inline-block; padding: 5px 10px; border-radius: 15px; margin: 0; cursor: pointer;">
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
                                                <img src="{{url('frontend/img/5.png')}}" alt="blog image" style="border-radius: 10px;">
                                                <span class="category"></span>
                                            </div>
                                            <h3 class="box-title-20" style="font-size: 15px;">যেভাবে শুরু হয়েছিল ২য়
                                                বিশ্বযুদ্ধ</h3>
                                            <div class="blog-meta"
                                                style="display: flex; align-items: center; gap: 5px; font-size: 12px;height: 0px;">
                                                <p> সুস্মিতা রায় অন্যন্যা</p>
                                                <p style="margin-left:2%; margin-right:2%; font-size: 18px;">|</p>
                                                <p> ০২ ডিসেম্বর ২০২৪</p>
                                            </div>

                                            <div class="rating-section"
                                                style="display: flex; align-items: center; margin-top: 5px; gap: 10px; font-size: 14px;">
                                                <h3
                                                    style="font-size: 14px; background-color: rgb(243, 243, 245); color: rgb(88, 58, 158); display: inline-block; padding: 5px 10px; border-radius: 15px; margin: 0; cursor: pointer;">
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
                                                <img src="{{url('frontend/img/7.png')}}" alt="blog image" style="border-radius: 10px;">
                                                <span class="category"></span>
                                            </div>
                                            <h3 class="box-title-20" style="font-size: 15px;">মোগল সাম্রাজ্যের পতন</h3>
                                            <div class="blog-meta"
                                                style="display: flex; align-items: center; gap: 5px; font-size: 12px;height: 0px;">
                                                <p> সুস্মিতা রায় অন্যন্যা</p>
                                                <p style="margin-left:2%; margin-right:2%; font-size: 18px;">|</p>
                                                <p> ০২ ডিসেম্বর ২০২৪</p>
                                            </div>
                                            <div class="rating-section"
                                                style="display: flex; align-items: center; margin-top: 5px; gap: 10px; font-size: 14px;">
                                                <h3
                                                    style="font-size: 14px; background-color: rgb(243, 243, 245); color: rgb(88, 58, 158); display: inline-block; padding: 5px 10px; border-radius: 15px; margin: 0; cursor: pointer;">
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
                                                <img src="{{url('frontend/img/5.png')}}" alt="blog image" style="border-radius: 10px;">
                                                <span class="category"></span>
                                            </div>
                                            <h3 class="box-title-20" style="font-size: 15px;">প্রাচীন পারস্য সভ্যতা</h3>
                                            <div class="blog-meta"
                                                style="display: flex; align-items: center; gap: 5px; font-size: 12px;height: 0px;">
                                                <p> সুস্মিতা রায় অন্যন্যা</p>
                                                <p style="margin-left:2%; margin-right:2%; font-size: 18px;">|</p>
                                                <p> ০২ ডিসেম্বর ২০২৪</p>
                                            </div>

                                            <div class="rating-section"
                                                style="display: flex; align-items: center; margin-top: 5px; gap: 10px; font-size: 14px;">
                                                <h3
                                                    style="font-size: 14px; background-color: rgb(243, 243, 245); color: rgb(88, 58, 158); display: inline-block; padding: 5px 10px; border-radius: 15px; margin: 0; cursor: pointer;">
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
                                                <img src="{{url('frontend/img/7.png')}}" alt="blog image" style="border-radius: 10px;">
                                                <span class="category"></span>
                                            </div>
                                            <h3 class="box-title-20" style="font-size: 15px;">প্রাচীন মিশরের সমাধি</h3>
                                            <div class="blog-meta"
                                                style="display: flex; align-items: center; gap: 5px; font-size: 12px;height: 0px;">
                                                <p> সুস্মিতা রায় অন্যন্যা</p>
                                                <p style="margin-left:2%; margin-right:2%; font-size: 18px;">|</p>
                                                <p> ০২ ডিসেম্বর ২০২৪</p>
                                            </div>

                                            <div class="rating-section"
                                                style="display: flex; align-items: center; margin-top: 5px; gap: 10px; font-size: 14px;">
                                                <h3
                                                    style="font-size: 14px; background-color: rgb(243, 243, 245); color: rgb(88, 58, 158); display: inline-block; padding: 5px 10px; border-radius: 15px; margin: 0; cursor: pointer;">
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
                            </section>

                        </div>
                        <aside class="columns_sidebar">
                            <div class="sidebar_widget">
                                <div class="popular">
                                    <h3
                                        style="font-size: 15px; background-color: #4045A3; color: white; display: inline-block; padding: 5px; border-radius: 10px;">
                                        সর্বশেষ</h3>
                                    <div class="popular_item" style="margin-bottom: -25px;">

                                        <div class="popular_item_img">

                                            <a href="{{ route('jibonjoyi_details') }}">
                                                <img data-src="{{url('frontend/img/5.png')}}"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"
                                                    alt="" style="border-radius: 10px; width: 140px; height: auto;" />
                                            </a>
                                        </div>
                                        <div class="popular_item_cont">
                                            <div class="popular_item_title"
                                                style="font-size: 12px; font-weight: bold; margin-bottom: 0;">
                                                <a href="{{ route('jibonjoyi_details') }}">ব্রিটিশ ভারতের ফুটবলকথন</a>
                                                <class="popular_item_infoline infoline"
                                                    style="display: flex; align-items: center; margin-top: 0;">
                                                    <img src="{{url('frontend/img/w1.png')}}" alt="" />
                                                    <a href="{{ route('jibonjoyi_details') }}" class="cats_item"
                                                        style="margin-top: 0px;font-weight: lighter;">সুস্মিতা রায়
                                                        অন্যন্যা</a>
                                            </div>
                                            <div class="rating-section"
                                                style="display: flex; align-items: center; margin-bottom: 30px; font-size: 14px;">
                                                <h3
                                                    style="font-size: 12px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-top: -30%">
                                                    ইতিহাস
                                                </h3>
                                                <h3
                                                    style="font-size: 12px; background-color: #FFF5F5; color: #DC8D8D; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;margin-top: -30%">
                                                    ধর্ম
                                                </h3>
                                                <div
                                                    style="display: flex; align-items: center; color: #6c757d; margin-left: 0;margin-top: -30%">
                                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                        style="width: 10px; height: 10px; margin-right: 5px;">
                                                    <span style="font-size: 10px;">৩.৫</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="popular_item" style="margin-bottom: -25px;">
                                        <div class="popular_item_img">
                                            <a href="{{ route('jibonjoyi_details') }}">
                                                <img data-src="{{url('frontend/img/5.png')}}"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"
                                                    alt="" style="border-radius: 10px; width: 140px; height: auto;" />
                                            </a>
                                        </div>
                                        <div class="popular_item_cont">
                                            <div class="popular_item_title"
                                                style="font-size: 12px; font-weight: bold; margin-bottom: 0;">
                                                <a href="{{ route('jibonjoyi_details') }}">ব্রিটিশ ভারতের ফুটবলকথন</a>
                                                <class="popular_item_infoline infoline"
                                                    style="display: flex; align-items: center; margin-top: 0;">
                                                    <img src="{{url('frontend/img/w1.png')}}" alt="" />
                                                    <a href="{{ route('jibonjoyi_details') }}" class="cats_item"
                                                        style="margin-top: -2px;font-weight: lighter;">সুস্মিতা রায়
                                                        অন্যন্যা</a>
                                            </div>
                                            <div class="rating-section"
                                                style="display: flex; align-items: center; margin-bottom: 30px; font-size: 14px;">
                                                <h3
                                                    style="font-size: 12px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-top: -30%">
                                                    ইতিহাস
                                                </h3>
                                                <h3
                                                    style="font-size: 12px; background-color: #FFF5F5; color: #DC8D8D; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;margin-top: -30%">
                                                    ধর্ম
                                                </h3>
                                                <div
                                                    style="display: flex; align-items: center; color: #6c757d; margin-left: 0;margin-top: -30%">
                                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                        style="width: 10px; height: 10px; margin-right: 5px;">
                                                    <span style="font-size: 10px;">৩.৫</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="popular_item" style="margin-bottom: -25px;">
                                        <div class="popular_item_img">
                                            <a href="{{ route('jibonjoyi_details') }}">
                                                <img data-src="{{url('frontend/img/6.png')}}"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"
                                                    alt="" style="border-radius: 10px; width: 140px; height: auto;" />
                                            </a>
                                        </div>
                                        <div class="popular_item_cont">
                                            <div class="popular_item_title"
                                                style="font-size: 12px; font-weight: bold; margin-bottom: 0;">
                                                <a href="{{ route('jibonjoyi_details') }}">মোগল সাম্রাজ্যের পতন</a>
                                                <class="popular_item_infoline infoline"
                                                    style="display: flex; align-items: center; margin-top: 0;">
                                                    <img src="{{url('frontend/img/w1.png')}}" alt="" />
                                                    <a href="{{ route('jibonjoyi_details') }}" class="cats_item"
                                                        style="margin-top: -2px;font-weight: lighter;">সুস্মিতা রায়
                                                        অন্যন্যা</a>
                                            </div>
                                            <div class="rating-section"
                                                style="display: flex; align-items: center; margin-bottom: 30px; font-size: 14px;">
                                                <h3
                                                    style="font-size: 12px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-top: -30%">
                                                    ইতিহাস
                                                </h3>
                                                <h3
                                                    style="font-size: 12px; background-color: #FFF5F5; color: #DC8D8D; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;margin-top: -30%">
                                                    ধর্ম
                                                </h3>
                                                <div
                                                    style="display: flex; align-items: center; color: #6c757d; margin-left: 0;margin-top: -30%">
                                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                        style="width: 10px; height: 10px; margin-right: 5px;">
                                                    <span style="font-size: 10px;">৩.৫</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="popular_item" style="margin-bottom: -25px;">
                                        <div class="popular_item_img">
                                            <a href="{{ route('jibonjoyi_details') }}">
                                                <img data-src="{{url('frontend/img/7.png')}}"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"
                                                    alt="" style="border-radius: 10px; width: 140px; height: auto;" />
                                            </a>
                                        </div>
                                        <div class="popular_item_cont">
                                            <div class="popular_item_title"
                                                style="font-size: 12px; font-weight: bold; margin-bottom: 0;">
                                                <a href="{{ route('jibonjoyi_details') }}">গিয়াসউদ্দিন আজম শাহ: বাংলা সালতানাতের
                                                    সাহিত্যানুরাগী এক আবেগ</a>
                                                <class="popular_item_infoline infoline"
                                                    style="display: flex; align-items: center; margin-top: 0;">
                                                    <img src="{{url('frontend/img/w1.png')}}" alt="" />
                                                    <p><a href="{{ route('jibonjoyi_details') }}" class="cats_item"
                                                            style="margin-top: -2px;font-weight: lighter;">সুস্মিতা রায়
                                                            অন্যন্যা</a></p>
                                            </div>
                                            <div class="rating-section"
                                                style="display: flex; align-items: center; margin-bottom: 0px; font-size: 14px;">
                                                <h3
                                                    style="font-size: 12px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-top: -30%">
                                                    ইতিহাস
                                                </h3>
                                                <h3
                                                    style="font-size: 12px; background-color: #FFF5F5; color: #DC8D8D; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;margin-top: -30%">
                                                    ধর্ম
                                                </h3>
                                                <div
                                                    style="display: flex; align-items: center; color: #6c757d; margin-left: 0;margin-top: -30%">
                                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                        style="width: 10px; height: 10px; margin-right: 5px;">
                                                    <span style="font-size: 10px;">৩.৫</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="popular_item" style="margin-bottom: -25px;">
                                        <div class="popular_item_img">
                                            <a href="{{ route('jibonjoyi_details') }}">
                                                <img data-src="{{url('frontend/img/8.png')}}"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"
                                                    alt="" style="border-radius: 10px; width: 140px; height: auto;" />
                                            </a>
                                        </div>
                                        <div class="popular_item_cont">
                                            <div class="popular_item_title"
                                                style="font-size: 12px; font-weight: bold; margin-bottom: 0;">
                                                <a href="{{ route('jibonjoyi_details') }}">আরবি ভাষার জন্ম ও ক্রমবিকাশ</a>
                                                <class="popular_item_infoline infoline"
                                                    style="display: flex; align-items: center; margin-top: 0;">
                                                    <img src="{{url('frontend/img/w1.png')}}" alt="" />
                                                    <a href="{{ route('jibonjoyi_details') }}" class="cats_item"
                                                        style="margin-top: -2px;font-weight: lighter;">সুস্মিতা রায়
                                                        অন্যন্যা</a>
                                            </div>
                                            <div class="rating-section"
                                                style="display: flex; align-items: center; margin-bottom: 30px; font-size: 14px;">
                                                <h3
                                                    style="font-size: 12px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-top: -30%">
                                                    ইতিহাস
                                                </h3>
                                                <h3
                                                    style="font-size: 12px; background-color: #FFF5F5; color: #DC8D8D; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;margin-top: -30%">
                                                    ধর্ম
                                                </h3>
                                                <div
                                                    style="display: flex; align-items: center; color: #6c757d; margin-left: 0;margin-top: -30%">
                                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                        style="width: 10px; height: 10px; margin-right: 5px;">
                                                    <span style="font-size: 10px;">৩.৫</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="popular_item" style="margin-bottom: -25px;">
                                        <div class="popular_item_img">
                                            <a href="{{ route('jibonjoyi_details') }}">
                                                <img data-src="{{url('frontend/img/9.png')}}"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"
                                                    alt="" style="border-radius: 10px; width: 140px; height: auto;" />
                                            </a>
                                        </div>
                                        <div class="popular_item_cont">
                                            <div class="popular_item_title"
                                                style="font-size: 12px; font-weight: bold; margin-bottom: 0;">
                                                <a href="{{ route('jibonjoyi_details') }}">বদর: ইসলামের প্রথম যুদ্ধ</a>
                                                <class="popular_item_infoline infoline"
                                                    style="display: flex; align-items: center; margin-top: 0;">
                                                    <img src="{{url('frontend/img/w1.png')}}" alt="" />
                                                    <a href="{{ route('jibonjoyi_details') }}" class="cats_item"
                                                        style="margin-top: -2px;font-weight: lighter;">সুস্মিতা রায়
                                                        অন্যন্যা</a>
                                            </div>
                                            <div class="rating-section"
                                                style="display: flex; align-items: center; margin-bottom: 30px; font-size: 14px;">
                                                <h3
                                                    style="font-size: 12px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-top: -30%">
                                                    ইতিহাস
                                                </h3>
                                                <h3
                                                    style="font-size: 12px; background-color: #FFF5F5; color: #DC8D8D; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;margin-top: -30%">
                                                    ধর্ম
                                                </h3>
                                                <div
                                                    style="display: flex; align-items: center; color: #6c757d; margin-left: 0;margin-top: -30%">
                                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                        style="width: 10px; height: 10px; margin-right: 5px;">
                                                    <span style="font-size: 10px;">৩.৫</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3
                                        style="font-size: 15px; background-color: #4045A3; color: white; display: inline-block; padding: 5px 5px; border-radius: 10px;">
                                        সবচেয়ে পঠিত</h3>

                                    <div class="popular_item" style="margin-bottom: -25px;">
                                        <div class="popular_item_img">
                                            <a href="{{ route('jibonjoyi_details') }}">
                                                <img data-src="{{url('frontend/img/3.png')}}"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"
                                                    alt="" style="border-radius: 10px; width: 140px; height: auto;" />
                                            </a>
                                        </div>
                                        <div class="popular_item_cont">
                                            <div class="popular_item_title"
                                                style="font-size: 12px; font-weight: bold; margin-bottom: 0;">
                                                <a href="{{ route('jibonjoyi_details') }}">প্রাচীন মেসোপটেমীয় সভ্যতায়
                                                    জাদুবিদ্যা</a>
                                                <class="popular_item_infoline infoline"
                                                    style="display: flex; align-items: center; margin-top: 0;">
                                                    <img src="{{url('frontend/img/w1.png')}}" alt="" />
                                                    <a href="{{ route('jibonjoyi_details') }}" class="cats_item"
                                                        style="margin-top: -2px;font-weight: lighter;">সুস্মিতা রায়
                                                        অন্যন্যা</a>
                                            </div>
                                            <div class="rating-section"
                                                style="display: flex; align-items: center; margin-bottom: 30px; font-size: 14px;">
                                                <h3
                                                    style="font-size: 12px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-top: -30%">
                                                    ইতিহাস
                                                </h3>
                                                <h3
                                                    style="font-size: 12px; background-color: #FFF5F5; color: #DC8D8D; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;margin-top: -30%">
                                                    ধর্ম
                                                </h3>
                                                <div
                                                    style="display: flex; align-items: center; color: #6c757d; margin-left: 0;margin-top: -30%">
                                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                        style="width: 10px; height: 10px; margin-right: 5px;">
                                                    <span style="font-size: 10px;">৩.৫</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="popular_item" style="margin-bottom: -25px;">
                                        <div class="popular_item_img">
                                            <a href="{{ route('jibonjoyi_details') }}">
                                                <img data-src="{{url('frontend/img/3.png')}}"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"
                                                    alt="" style="border-radius: 10px; width: 140px; height: auto;" />
                                            </a>
                                        </div>
                                        <div class="popular_item_cont">
                                            <div class="popular_item_title"
                                                style="font-size: 12px; font-weight: bold; margin-bottom: 0;">
                                                <a href="{{ route('jibonjoyi_details') }}">ব্রিটিশ ভারতের ফুটবলকথন</a>
                                                <class="popular_item_infoline infoline"
                                                    style="display: flex; align-items: center; margin-top: 0;">
                                                    <img src="{{url('frontend/img/w1.png')}}" alt="" />
                                                    <a href="{{ route('jibonjoyi_details') }}" class="cats_item"
                                                        style="margin-top: -2px;font-weight: lighter;">সুস্মিতা রায়
                                                        অন্যন্যা</a>
                                            </div>
                                            <div class="rating-section"
                                                style="display: flex; align-items: center; margin-bottom: 30px; font-size: 14px;">
                                                <h3
                                                    style="font-size: 12px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-top: -30%">
                                                    ইতিহাস
                                                </h3>
                                                <h3
                                                    style="font-size: 12px; background-color: #FFF5F5; color: #DC8D8D; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;margin-top: -30%">
                                                    ধর্ম
                                                </h3>
                                                <div
                                                    style="display: flex; align-items: center; color: #6c757d; margin-left: 0;margin-top: -30%">
                                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                        style="width: 10px; height: 10px; margin-right: 5px;">
                                                    <span style="font-size: 10px;">৩.৫</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="popular_item" style="margin-bottom: -25px;">
                                        <div class="popular_item_img">
                                            <a href="{{ route('jibonjoyi_details') }}">
                                                <img data-src="{{url('frontend/img/5.png')}}"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"
                                                    alt="" style="border-radius: 10px; width: 140px; height: auto;" />
                                            </a>
                                        </div>
                                        <div class="popular_item_cont">
                                            <div class="popular_item_title"
                                                style="font-size: 12px; font-weight: bold; margin-bottom: 0;">
                                                <a href="{{ route('jibonjoyi_details') }}">মোগল সাম্রাজ্যের পতন</a>
                                                <class="popular_item_infoline infoline"
                                                    style="display: flex; align-items: center; margin-top: 0;">
                                                    <img src="{{url('frontend/img/w1.png')}}" alt="" />
                                                    <a href="{{ route('jibonjoyi_details') }}" class="cats_item"
                                                        style="margin-top: -2px;font-weight: lighter;">সুস্মিতা রায়
                                                        অন্যন্যা</a>
                                            </div>
                                            <div class="rating-section"
                                                style="display: flex; align-items: center; margin-bottom: 30px; font-size: 14px;">
                                                <h3
                                                    style="font-size: 12px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-top: -30%">
                                                    ইতিহাস
                                                </h3>
                                                <h3
                                                    style="font-size: 12px; background-color: #FFF5F5; color: #DC8D8D; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;margin-top: -30%">
                                                    ধর্ম
                                                </h3>
                                                <div
                                                    style="display: flex; align-items: center; color: #6c757d; margin-left: 0;margin-top: -30%">
                                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                        style="width: 10px; height: 10px; margin-right: 5px;">
                                                    <span style="font-size: 10px;">৩.৫</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="popular_item" style="margin-bottom: -25px;">
                                        <div class="popular_item_img">
                                            <a href="{{ route('jibonjoyi_details') }}">
                                                <img data-src="{{url('frontend/img/6.png')}}"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"
                                                    alt="" style="border-radius: 10px; width: 140px; height: auto;" />
                                            </a>
                                        </div>
                                        <div class="popular_item_cont">
                                            <div class="popular_item_title"
                                                style="font-size: 12px; font-weight: bold; margin-bottom: 0;">
                                                <a href="{{ route('jibonjoyi_details') }}">গিয়াসউদ্দিন আজম শাহ: বাংলা সালতানাতের
                                                    সাহিত্যানুরাগী এক আবেগ</a>
                                                <class="popular_item_infoline infoline"
                                                    style="display: flex; align-items: center; margin-top: 0;">
                                                    <img src="{{url('frontend/img/w1.png')}}" alt="" />
                                                    <a href="{{ route('jibonjoyi_details') }}" class="cats_item"
                                                        style="margin-top: -2px;font-weight: lighter;">সুস্মিতা রায়
                                                        অন্যন্যা</a>
                                            </div>
                                            <div class="rating-section"
                                                style="display: flex; align-items: center; margin-bottom: 0px; font-size: 14px;">
                                                <h3
                                                    style="font-size: 12px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-top: -30%">
                                                    ইতিহাস
                                                </h3>
                                                <h3
                                                    style="font-size: 12px; background-color: #FFF5F5; color: #DC8D8D; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;margin-top: -30%">
                                                    ধর্ম
                                                </h3>
                                                <div
                                                    style="display: flex; align-items: center; color: #6c757d; margin-left: 0;margin-top: -30%">
                                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                        style="width: 10px; height: 10px; margin-right: 5px;">
                                                    <span style="font-size: 10px;">৩.৫</span>
                                                </div>
                                            </div>
                                        </div>    
                                    </div>

                                    <div class="popular_item" style="margin-bottom: -25px;">
                                        <div class="popular_item_img">
                                            <a href="{{ route('jibonjoyi_details') }}">
                                                <img data-src="{{url('frontend/img/7.png')}}"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"
                                                    alt="" style="border-radius: 10px; width: 140px; height: auto;" />
                                            </a>
                                        </div>
                                        <div class="popular_item_cont">
                                            <div class="popular_item_title"
                                                style="font-size: 12px; font-weight: bold; margin-bottom: 0;">
                                                <a href="{{ route('jibonjoyi_details') }}">আরবি ভাষার জন্ম ও ক্রমবিকাশ</a>
                                                <class="popular_item_infoline infoline"
                                                    style="display: flex; align-items: center; margin-top: 0;">
                                                    <img src="{{url('frontend/img/w1.png')}}" alt="" />
                                                    <a href="{{ route('jibonjoyi_details') }}" class="cats_item"
                                                        style="margin-top: -2px;font-weight: lighter;">সুস্মিতা রায়
                                                        অন্যন্যা</a>
                                            </div>
                                            <div class="rating-section"
                                                style="display: flex; align-items: center; margin-bottom: 30px; font-size: 14px;">
                                                <h3
                                                    style="font-size: 12px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-top: -30%">
                                                    ইতিহাস
                                                </h3>
                                                <h3
                                                    style="font-size: 12px; background-color: #FFF5F5; color: #DC8D8D; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;margin-top: -30%">
                                                    ধর্ম
                                                </h3>
                                                <div
                                                    style="display: flex; align-items: center; color: #6c757d; margin-left: 0;margin-top: -30%">
                                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                        style="width: 10px; height: 10px; margin-right: 5px;">
                                                    <span style="font-size: 10px;">৩.৫</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popular_item" style="margin-bottom: -25px;">
                                        <div class="popular_item_img">
                                            <a href="{{ route('jibonjoyi_details') }}">
                                                <img data-src="{{url('frontend/img/9.png')}}"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"
                                                    alt="" style="border-radius: 10px; width: 140px; height: auto;" />
                                            </a>
                                        </div>
                                        <div class="popular_item_cont">
                                            <div class="popular_item_title"
                                                style="font-size: 12px; font-weight: bold; margin-bottom: 0;">
                                                <a href="{{ route('jibonjoyi_details') }}">বদর: ইসলামের প্রথম যুদ্ধ</a>
                                                <class="popular_item_infoline infoline"
                                                    style="display: flex; align-items: center; margin-top: 0;">
                                                    <img src="{{url('frontend/img/w1.png')}}" alt="" />
                                                    <a href="{{ route('jibonjoyi_details') }}" class="cats_item"
                                                        style="margin-top: -2px;font-weight: lighter;">সুস্মিতা রায়
                                                        অন্যন্যা</a>
                                            </div>
                                            <div class="rating-section"
                                                style="display: flex; align-items: center; margin-bottom: 30px; gap: 10px; font-size: 14px;">
                                                <h3
                                                    style="font-size: 12px; background-color: #F9F5FF; color: #6941C6; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer; margin-top: -30%">
                                                    ইতিহাস
                                                </h3>
                                                <h3
                                                    style="font-size: 12px; background-color: #FFF5F5; color: #DC8D8D; display: inline-block; padding: 5px 10px; border-radius: 10px; margin: 0; cursor: pointer;margin-top: -30%">
                                                    ধর্ম
                                                </h3>
                                                <div
                                                    style="display: flex; align-items: center; color: #6c757d; margin-left: 0;margin-top: -30%">
                                                    <img src="{{url('frontend/img/Star.png')}}" alt="Star"
                                                        style="width: 10px; height: 10px; margin-right: 5px;">
                                                    <span style="font-size: 10px;">৩.৫</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="space-bottom2234">
                                <a href="{{ route('jibonjoyi_details') }}">
                                    <img width="600x600" src="{{url('frontend/img/ad2.png')}}" alt="ads"
                                        style="width: 700px; margin-top: 20px; bottom: 80px;">
                                </a>
                            </div>

                            <div class="poll-container">
                                <h3>আজকের জরিপ ০১</h3>
                                <p>আপনি কোন সাহিত্যিকের কবিতা বা রচনা রোমান্টিক আন্দোলনের সাথে সম্পর্কিত মনে করেন?</p>
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
                            <div class="space"></div>
                            <div class="poll-container">
                                <h3>আজকের জরিপ ০২</h3>
                                <p>আপনি কোন সাহিত্যিকের কবিতা বা রচনা রোমান্টিক আন্দোলনের সাথে সম্পর্কিত মনে করেন?</p>
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
                            <div class="space"></div>
                            <div class="poll-container">
                                <form id="pollForm">
                                    <div style="height: 200px;">
                                        <p style="text-align: center;padding: 60px; font-weight: bolder;"> Lets Met</p>
                                    </div>
                                </form>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <style>

            </style>
            <div class="container1">
                <div class="headerr">
                    <h1 style="color: #0056b3;text-decoration: underline;">আজকের বাণী</h1>
                    <p class="quote">মানুষের পুরো জীবনটা হচ্ছে একটা সরল অংক, যতই দিন যাচ্ছে ততই আমরা তার সমাধানের দিকে
                        যাচ্ছি ।</p>
                    <p class="quote">-হুমায়ুন আহমেদ</p>
                </div>
            </div>
        </main>
        <!-- CONTENT EOF   -->
        <!-- BEGIN HEADER -->

        <!-- HEADER EOF   -->
        <!-- BEGIN FOOTER -->


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
            <div class="">
                <div class="footer">
                    <div class="static-text1" style="text-align: center;">সর্বস্বর্ত্ব ২০২৪ জীবনজয়ী</div>
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
                    const duration = (textWidth / containerWidth) * 20; // Adjust multiplier as needed
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

        <!-- FOOTER EOF   -->
        <div class="overlay"></div>
    </div>
    <!-- BODY EOF   -->
    <script src="{{url('frontend/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{url('frontend/js/custom.js')}}"></script>
</body>

</html>