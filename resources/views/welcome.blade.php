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

    {{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>--}}
</head>
<body class="font-serif text-gray-700 bg-gray-50">
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
                <h1 class="text-7xl font-bold mb-2 text-gray-700 text-transparent bg-clip-text"><span class="font-thin text-gray-700">Development of </span>
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
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10  absolute bottom-8 mx-auto z-10" fill="none" viewBox="0 0 24 24" stroke="url(#grad1)">
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
    <section class="min-h-screen bg-gray-50 p-8">
        <!-- WEB DEVELOPMENT ------------->
        <div class="container mx-auto ">
            <h3 class="inline-block text-6xl font-bold leading-tight"><span class="font-thin text-gray-700">Our</span> Services</h3>
            <p class="font-mono text-gray-500">Available services: <span>10</span></p>
            <div class="grid grid-cols-3 gap-10 mt-10 text-center">
                <div class="bg-white border shadow-sm rounded-lg p-8 overflow-hidden">
                    <p class=" p-2 -mx-8 font-mono text-sm">Web Development</p>
                    <h4 class="inline-block text-4xl bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text font-bold">UI/UX <span class="font-thin text-gray-700">Design</span></h4>
                    {{--                    <p class=" text-lg mt-2">Give a new face to your business</p>--}}

                    <div class="my-5 h-64 bg-gradient-to-bl from-gray-600 to-blue-700 -mx-8 p-4  shadow-md grid grid-cols-2 gap-4 items-center">
                        <div>
                            <p class="text-white font-thin text-3xl leading-10">Responsive</p>
                            <p class="text-white font-thin text-3xl leading-10">Compatible</p>
                            <p class="text-white font-thin text-3xl leading-10">Multi-platform</p>
                        </div>
                        <div>
                            <img src="{{asset("img/phone.svg")}}" alt="Black Sun Labs logo" class="object-contain max-w-full max-h-56 mx-auto ">
                        </div>
                    </div>
                    <p class="text-gray-700 text-lg mt-7 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus eligendi iusto molestias, nobis odit officiis quaerat reiciendis repellendus rerum
                        vel?</p>
                    <div class="grid grid-cols-2 gap-4 items-center justify-center mt-6 mb-2">
                        <div>
                            <a href="#" class="inline-block flex items-center justify-center py-3 border rounded shadow transition-all duration-300
                                hover:shadow-md bg-gradient-to-bl hover:from-gray-600 hover:to-blue-700  hover:from-white hover:to-white hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                View more
                            </a>
                        </div>
                        <div>
                            <a href="#" class="inline-block flex items-center justify-center p-4 border rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                Contact BSL
                            </a>
                        </div>
                    </div>

                </div>
                <div class="bg-white border shadow-sm rounded-lg p-8 overflow-hidden">
                    <p class=" p-2 -mx-8 font-mono text-sm">Web Development</p>
                    <h4 class="inline-block text-4xl bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text font-bold">UI/UX <span class="font-thin text-gray-700">Design</span></h4>
                    {{--                    <p class=" text-lg mt-2">Give a new face to your business</p>--}}

                    <div class="my-5 h-64 bg-gradient-to-bl from-gray-600 to-blue-700 -mx-8 p-4  shadow-md grid grid-cols-2 gap-4 items-center">
                        <div>
                            <p class="text-white font-thin text-3xl leading-10">Responsive</p>
                            <p class="text-white font-thin text-3xl leading-10">Compatible</p>
                            <p class="text-white font-thin text-3xl leading-10">Multi-platform</p>
                        </div>
                        <div>
                            <img src="{{asset("img/phone.svg")}}" alt="Black Sun Labs logo" class="object-contain max-w-full max-h-56 mx-auto ">
                        </div>
                    </div>
                    <p class="text-gray-700 text-lg mt-10 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus eligendi iusto molestias, nobis odit officiis quaerat reiciendis repellendus rerum
                        vel?</p>

                </div>
                <div class="bg-white border shadow-sm rounded-lg p-8 overflow-hidden">
                    <p class=" p-2 -mx-8 font-mono text-sm">Web Development</p>
                    <h4 class="inline-block text-4xl bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text font-bold">UI/UX <span class="font-thin text-gray-700">Design</span></h4>
                    {{--                    <p class=" text-lg mt-2">Give a new face to your business</p>--}}

                    <div class="my-5 h-64 bg-gradient-to-bl from-gray-600 to-blue-700 -mx-8 p-4  shadow-md grid grid-cols-2 gap-4 items-center">
                        <div>
                            <p class="text-white font-thin text-3xl leading-10">Responsive</p>
                            <p class="text-white font-thin text-3xl leading-10">Compatible</p>
                            <p class="text-white font-thin text-3xl leading-10">Multi-platform</p>
                        </div>
                        <div>
                            <img src="{{asset("img/phone.svg")}}" alt="Black Sun Labs logo" class="object-contain max-w-full max-h-56 mx-auto ">
                        </div>
                    </div>
                    <p class="text-gray-700 text-lg mt-10 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus eligendi iusto molestias, nobis odit officiis quaerat reiciendis repellendus rerum
                        vel?</p>

                </div>
                <div class="bg-white border shadow-sm rounded-lg p-8 overflow-hidden">
                    <p class=" p-2 -mx-8 font-mono text-sm">Web Development</p>
                    <h4 class="inline-block text-4xl bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text font-bold">UI/UX <span class="font-thin text-gray-700">Design</span></h4>
                    {{--                    <p class=" text-lg mt-2">Give a new face to your business</p>--}}

                    <div class="my-5 h-64 bg-gradient-to-bl from-gray-600 to-blue-700 -mx-8 p-4  shadow-md grid grid-cols-2 gap-4 items-center">
                        <div>
                            <p class="text-white font-thin text-3xl leading-10">Responsive</p>
                            <p class="text-white font-thin text-3xl leading-10">Compatible</p>
                            <p class="text-white font-thin text-3xl leading-10">Multi-platform</p>
                        </div>
                        <div>
                            <img src="{{asset("img/phone.svg")}}" alt="Black Sun Labs logo" class="object-contain max-w-full max-h-56 mx-auto ">
                        </div>
                    </div>
                    <p class="text-gray-700 text-lg mt-10 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus eligendi iusto molestias, nobis odit officiis quaerat reiciendis repellendus rerum
                        vel?</p>

                </div>
                <div class="bg-white border shadow-sm rounded-lg p-8 overflow-hidden">
                    <p class=" p-2 -mx-8 font-mono text-sm">Web Development</p>
                    <h4 class="inline-block text-4xl bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text font-bold">UI/UX <span class="font-thin text-gray-700">Design</span></h4>
                    {{--                    <p class=" text-lg mt-2">Give a new face to your business</p>--}}

                    <div class="my-5 h-64 bg-gradient-to-bl from-gray-600 to-blue-700 -mx-8 p-4  shadow-md grid grid-cols-2 gap-4 items-center">
                        <div>
                            <p class="text-white font-thin text-3xl leading-10">Responsive</p>
                            <p class="text-white font-thin text-3xl leading-10">Compatible</p>
                            <p class="text-white font-thin text-3xl leading-10">Multi-platform</p>
                        </div>
                        <div>
                            <img src="{{asset("img/phone.svg")}}" alt="Black Sun Labs logo" class="object-contain max-w-full max-h-56 mx-auto ">
                        </div>
                    </div>
                    <p class="text-gray-700 text-lg mt-10 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus eligendi iusto molestias, nobis odit officiis quaerat reiciendis repellendus rerum
                        vel?</p>

                </div>
                <div class="bg-white border shadow-sm rounded-lg p-8 overflow-hidden">
                    <p class=" p-2 -mx-8 font-mono text-sm">Web Development</p>
                    <h4 class="inline-block text-4xl bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text font-bold">UI/UX <span class="font-thin text-gray-700">Design</span></h4>
                    {{--                    <p class=" text-lg mt-2">Give a new face to your business</p>--}}

                    <div class="my-5 h-64 bg-gradient-to-bl from-gray-600 to-blue-700 -mx-8 p-4  shadow-md grid grid-cols-2 gap-4 items-center">
                        <div>
                            <p class="text-white font-thin text-3xl leading-10">Responsive</p>
                            <p class="text-white font-thin text-3xl leading-10">Compatible</p>
                            <p class="text-white font-thin text-3xl leading-10">Multi-platform</p>
                        </div>
                        <div>
                            <img src="{{asset("img/phone.svg")}}" alt="Black Sun Labs logo" class="object-contain max-w-full max-h-56 mx-auto ">
                        </div>
                    </div>
                    <p class="text-gray-700 text-lg mt-10 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus eligendi iusto molestias, nobis odit officiis quaerat reiciendis repellendus rerum
                        vel?</p>

                </div>
                <div class="bg-white border shadow-sm rounded-lg p-8 overflow-hidden">
                    <p class=" p-2 -mx-8 font-mono text-sm">Web Development</p>
                    <h4 class="inline-block text-4xl bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text font-bold">UI/UX <span class="font-thin text-gray-700">Design</span></h4>
                    {{--                    <p class=" text-lg mt-2">Give a new face to your business</p>--}}

                    <div class="my-5 h-64 bg-gradient-to-bl from-gray-600 to-blue-700 -mx-8 p-4  shadow-md grid grid-cols-2 gap-4 items-center">
                        <div>
                            <p class="text-white font-thin text-3xl leading-10">Responsive</p>
                            <p class="text-white font-thin text-3xl leading-10">Compatible</p>
                            <p class="text-white font-thin text-3xl leading-10">Multi-platform</p>
                        </div>
                        <div>
                            <img src="{{asset("img/phone.svg")}}" alt="Black Sun Labs logo" class="object-contain max-w-full max-h-56 mx-auto ">
                        </div>
                    </div>
                    <p class="text-gray-700 text-lg mt-10 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus eligendi iusto molestias, nobis odit officiis quaerat reiciendis repellendus rerum
                        vel?</p>

                </div>
            </div>

        </div>

    </section>
</main>


</body>

</html>
