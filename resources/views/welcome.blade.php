<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BlackSun Labs</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <link rel="stylesheet" href="{{asset("css/styles.css")}}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@100;200;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body class="font-serif text-gray-700">
<header class="min-h-screen container mx-auto relative">
    <nav class="h-20 absolute top-0 left-0 right-0 z-10 flex" id="navbar">
        <div class="flex flex-row items-center w-1/3 space-x-4">
            <img src="{{asset("img/logo8.svg")}}" alt="Black Sun Labs logo" class="object-contain h-12">
            <h1 class="text-3xl font-bold text-gray-700">Black Sun <span class="font-thin">Labs</span></h1>
        </div>
        <ul class=" grid grid-cols-5 gap-4 text-center items-center h-20 text-lg w-2/3">
            <li class=""><a href="#">About us</a></li>
            <li class=""><a href="#">Services</a></li>
            <li class=""><a href="#">Portfolio</a></li>
            <li class=""><a href="#">Contact</a></li>
            <li class=""><a href="#">Clients</a></li>
        </ul>
    </nav>
    <div class="grid grid-cols-2 min-h-screen items-center gap-4 relative">
        <div class="p-5">
            <div class="flex flex-col items-center">
                <h1 class="text-7xl font-bold mb-2 bg-gradient-to-bl from-blue-400 to-purple-500 text-transparent bg-clip-text"><span class="font-thin text-gray-700">Development of </span>
                    Webs, Apps, Software and Brands</h1>

                <p class="font-mono text-lg text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                    </svg>
                    Welcome to BSL! Let's work together to create something unique for your needs.
                </p>
                {{--                <a href="#" class="border-blue-400 border-2 p-4 rounded text-2xl mt-20">Write to us</a>--}}
            </div>

        </div>
        <div class="p-5">
            <img src="{{asset("img/banner.svg")}}" alt="Black Sun Labs logo" class="object-contain h-full">
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10  absolute bottom-8 mx-auto " fill="none" viewBox="0 0 24 24" stroke="url(#grad1)">
            <defs>
                <linearGradient id="grad1" x1="0%" y1="50%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:#3b82f6;stop-opacity:1"/>
                    <stop offset="50%" style="stop-color:#8b5cf6;stop-opacity:1"/>
                </linearGradient>
            </defs>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 17l-4 4m0 0l-4-4m4 4V3"/>
        </svg>
    </div>
</header>

<main class="">
    <section class="min-h-screen  p-8">
        <div class="container mx-auto ">
            <h2 class="inline-block text-6xl bg-gradient-to-bl from-blue-400 to-purple-500 text-transparent bg-clip-text font-bold">Web <span class="font-thin text-gray-700">Development</span></h2>
            <p class="font-mono">Available services: <span>8</span></p>
            <div class="grid grid-cols-3 gap-10 mt-10 text-center">
                <div class="border shadow-sm rounded-lg p-8 overflow-hidden">
                    <h3 class="inline-block text-4xl bg-gradient-to-bl from-blue-400 to-purple-500 text-transparent bg-clip-text font-bold">UI/UX <span class="font-thin text-gray-700">Design</span></h3>
                    <p class=" text-lg mt-2">Give a new face to your business</p>
                    <div class="my-5 h-64 bg-gradient-to-bl from-blue-400 to-purple-500 -mx-8 py-4  shadow-md">
                        <img src="{{asset("img/phone.svg")}}" alt="Black Sun Labs logo" class="object-contain max-h-64 mx-auto ">
                    </div>
                    <p class="text-gray-700 text-lg mt-10 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus eligendi iusto molestias, nobis odit officiis quaerat reiciendis repellendus rerum
                        vel?</p>
                    <ul class="text-lg font-normal my-5">
                        <li class="flex  justify-center items-center space-x-4 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Responsive</span></li>
                        <li class="flex justify-center  items-center space-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Compatible</span></li>
                        <li class="flex justify-center  items-center space-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Responsive</span></li>
                    </ul>
                    <div class="mt-10 mb-2">
                        <a href="#" class="py-2 px-8 bg-gradient-to-bl from-blue-400 to-purple-500 rounded text-white text-lg">Contact BSL</a>
                    </div>
                </div>
                <div class="border shadow-sm rounded-lg p-8 overflow-hidden">
                    <h3 class="inline-block text-4xl bg-gradient-to-bl from-blue-400 to-purple-500 text-transparent bg-clip-text font-bold">SEO<span class="font-thin text-gray-700"> Optimization</span></h3>
                    <p class=" text-lg mt-2">Give a new face to your business</p>
                    <div class="my-5 h-64 bg-gradient-to-bl from-blue-400 to-purple-500 -mx-8 py-4  shadow-md">
                        <img src="{{asset("img/phone.svg")}}" alt="Black Sun Labs logo" class="object-contain max-h-64 mx-auto ">
                    </div>
                    <p class="text-gray-700 text-lg mt-10 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus eligendi iusto molestias, nobis odit officiis quaerat reiciendis repellendus rerum
                        vel?</p>
                    <ul class="text-lg font-normal my-5">
                        <li class="flex  justify-center items-center space-x-4 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Responsive</span></li>
                        <li class="flex justify-center  items-center space-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Compatible</span></li>
                        <li class="flex justify-center  items-center space-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Responsive</span></li>
                    </ul>
                    <div class="mt-10 mb-2">
                        <a href="#" class="py-2 px-8 bg-gradient-to-bl from-blue-400 to-purple-500 rounded text-white text-lg">Contact BSL</a>
                    </div>
                </div>
                <div class="border shadow-sm rounded-lg p-8 overflow-hidden">
                    <h3 class="inline-block text-4xl bg-gradient-to-bl from-blue-400 to-purple-500 text-transparent bg-clip-text font-bold">BACKEND <span class="font-thin text-gray-700">Development</span></h3>
                    <p class=" text-lg mt-2">Give a new face to your business</p>
                    <div class="my-5 h-64 bg-gradient-to-bl from-blue-400 to-purple-500 -mx-8 py-4  shadow-md">
                        <img src="{{asset("img/phone.svg")}}" alt="Black Sun Labs logo" class="object-contain max-h-64 mx-auto ">
                    </div>
                    <p class="text-gray-700 text-lg mt-10 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus eligendi iusto molestias, nobis odit officiis quaerat reiciendis repellendus rerum
                        vel?</p>
                    <ul class="text-lg font-normal my-5">
                        <li class="flex  justify-center items-center space-x-4 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Responsive</span></li>
                        <li class="flex justify-center  items-center space-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Compatible</span></li>
                        <li class="flex justify-center  items-center space-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Responsive</span></li>
                    </ul>
                    <div class="mt-10 mb-2">
                        <a href="#" class="py-2 px-8 bg-gradient-to-bl from-blue-400 to-purple-500 rounded text-white text-lg">Contact BSL</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>


</body>
<script>
    $(document).ready(function () {
        AddEditorNumbers();
    });
    $(window).resize(function () {
        AddEditorNumbers();
    });

    function AddEditorNumbers() {
        var servicesHeight = 0;
        if ($(window).width() > 1006) {
            servicesHeight = $('#services_div  div').height();
        } else {
            servicesHeight = $('#services_div').height();
        }
        console.log(servicesHeight);
        var total = servicesHeight / 32.1;
        var html = "";
        for (i = 1; i < total; i++) {
            html += i + "<br>";
        }

        $("#editorNumbers").html(html);
    }
</script>
</html>
