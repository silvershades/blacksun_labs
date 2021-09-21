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
            <img src="{{asset("img/logo2.svg")}}" alt="Black Sun Labs logo" class="object-contain h-16">
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

                <p class="font-mono text-lg text-gray-500">  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                    </svg> Welcome to BSL! Let's work together to create something unique for your needs.</p>
{{--                <a href="#" class="border-blue-400 border-2 p-4 rounded text-2xl mt-20">Write to us</a>--}}
            </div>

        </div>
        <div class="p-5">
            <img src="{{asset("img/banner.svg")}}" alt="Black Sun Labs logo" class="object-contain h-full">
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10  absolute bottom-8 mx-auto " fill="none" viewBox="0 0 24 24" stroke="url(#grad1)" >
            <defs>
                <linearGradient id="grad1" x1="0%" y1="50%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:#3b82f6;stop-opacity:1" />
                    <stop offset="50%" style="stop-color:#8b5cf6;stop-opacity:1" />
                </linearGradient>
            </defs>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 17l-4 4m0 0l-4-4m4 4V3" />
        </svg>
    </div>
</header>

<main class="">
    <div class="grid grid-cols-3 gap-4 items-center h-full">
        <div class="items-center">
            <div>
                <h2 class="text-6xl">Web <br>Development</h2>
                <div class="p-4">
                    <img src="{{asset("img/maintenance.svg")}}" alt="web design svg" class="max-h-64 my-8 mx-auto">
                </div>
                <p class="text-lg">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eveniet impedit pariatur repellat. Accusantium aut enim facere fugit laboriosam maxime praesentium quasi sint sunt temporibus? Assumenda autem
                    dolorem maxime perferendis.
                </p>
                <div class="text-center mt-8">
                    <a href="#" class="inline-block bg-yellow-400 p-3 text-2xl rounded">See more</a>
                </div>
            </div>
        </div>

    </div>
    <section class="min-h-screen container mx-auto align-middle items-center" id="services">
        <h2 class="text-7xl mb-8">Services</h2>
        <div class="flex">
            {{--            <div class="inline-block bg-indigo-50 text-white p-2 w-20 text-2xl text-center mr-5 " id="editorNumbers">--}}

            {{--            </div>--}}
            <div class="h-auto" id="services_div">
                <div>

                    <!-- WEB DEVELOPMENT -->
                    <h3 class="text-5xl mb-8 inline-block">Web Development</h3>
                    <div class="grid grid-cols-1  lg:grid-cols-3 gap-8 items-center mb-8">
                        <div class="p-4 ">
                            <h4 class="mt-5 mb-5 text-yellow-400 text-4xl text-center">FRONTEND</h4>
                            <h5 class=" mb-5 font-mono text-md text-center text-indigo-400">/** Responsive - Innovative - Compatible */</h5>
                            <div class="p-4">
                                <img src="{{asset("img/web_design.svg")}}" alt="web design svg" class=" mx-auto">
                            </div>
                            <p class="mt-1 text-xl  ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, autem consequatur cupiditate delectus deserunt dolor ea eaque est, impedit ipsum
                                itaque
                                maxime nam numquam quisquam sed velit voluptatibus. Fugit, optio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet, assumenda aut consequatur
                                consequuntur, eveniet fugiat in incidunt magni, </p>
                        </div>
                        <div class=" p-4 ">
                            <h4 class="mt-5 mb-5 text-yellow-400 text-4xl text-center">BACKEND</h4>
                            <h5 class=" mb-5 font-mono text-md text-center text-indigo-400">/** Robust - Secure - Escalable */</h5>
                            <div class="p-4">
                                <img src="{{asset("img/backend.svg")}}" alt="web design svg" class="mx-auto">
                            </div>
                            <p class="mt-1 text-xl  ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, autem consequatur cupiditate delectus deserunt dolor ea eaque est, impedit ipsum
                                itaque
                                maxime nam numquam quisquam sed velit voluptatibus. Fugit, optio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet, assumenda aut consequatur
                                consequuntur, eveniet fugiat in incidunt magni, </p>
                        </div>
                        <div class=" p-4 ">
                            <h4 class="mt-5 mb-5 text-yellow-400 text-4xl text-center">MAINTENANCE</h4>
                            <h5 class=" mb-5 font-mono text-md text-center text-indigo-400">/** Hosting - Updates - Backups */</h5>
                            <div class="p-4">
                                <img src="{{asset("img/maintenance.svg")}}" alt="web design svg">
                            </div>
                            <p class="mt-1 text-xl  ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, autem consequatur cupiditate delectus deserunt dolor ea eaque est, impedit ipsum
                                itaque
                                maxime nam numquam quisquam sed velit voluptatibus. Fugit, optio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet, assumenda aut consequatur
                                consequuntur, eveniet fugiat in incidunt magni, </p>
                        </div>
                    </div>
                    <p class="text-5xl mb-8 font-light text-gray-200 ">}</p>
                    <!-- BRAND CREATION -->
                    <h3 class="text-5xl mb-8 inline-block"><span class="font-light text-gray-200 ">function </span>Branding<span class="font-light text-gray-200">(){</span>
                    </h3>
                    <div class="grid grid-cols-1  lg:grid-cols-3 gap-8 items-center mb-8">
                        <div class="p-4 ">
                            <h4 class="mt-5 mb-5 text-yellow-400 text-4xl text-center">FRONTEND</h4>
                            <h5 class=" mb-5 font-mono text-md text-center">{Responsive - Innovative - SEO - Compatible}</h5>
                            <div class="p-4">
                                <img src="{{asset("img/web_design.svg")}}" alt="web design svg" class=" mx-auto">
                            </div>
                            <p class="mt-1 text-xl  ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, autem consequatur cupiditate delectus deserunt dolor ea eaque est, impedit ipsum
                                itaque
                                maxime nam numquam quisquam sed velit voluptatibus. Fugit, optio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet, assumenda aut consequatur
                                consequuntur, eveniet fugiat in incidunt magni, </p>
                        </div>
                        <div class=" p-4 ">
                            <h4 class="mt-5 mb-5 text-yellow-400 text-4xl text-center">BACKEND</h4>
                            <h5 class=" mb-5 font-mono text-md text-center">{Robust - Secure - No Shorcuts - Escalable}</h5>
                            <div class="p-4">
                                <img src="{{asset("img/backend.svg")}}" alt="web design svg" class="mx-auto">
                            </div>
                            <p class="mt-1 text-xl  ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, autem consequatur cupiditate delectus deserunt dolor ea eaque est, impedit ipsum
                                itaque
                                maxime nam numquam quisquam sed velit voluptatibus. Fugit, optio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet, assumenda aut consequatur
                                consequuntur, eveniet fugiat in incidunt magni, </p>
                        </div>
                        <div class=" p-4 ">
                            <h4 class="mt-5 mb-5 text-yellow-400 text-4xl text-center">MAINTENANCE</h4>
                            <h5 class=" mb-5 font-mono text-md text-center">{Host - Bugs/errors - Updates - Backups}</h5>
                            <div class="p-4">
                                <img src="{{asset("img/maintenance.svg")}}" alt="web design svg">
                            </div>
                            <p class="mt-1 text-xl  ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, autem consequatur cupiditate delectus deserunt dolor ea eaque est, impedit ipsum
                                itaque
                                maxime nam numquam quisquam sed velit voluptatibus. Fugit, optio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet, assumenda aut consequatur
                                consequuntur, eveniet fugiat in incidunt magni, </p>
                        </div>
                    </div>
                    <p class="text-5xl mb-8 font-light text-gray-200 ">}</p>
                    <!-- SOFTWARE DEVELOPMENT -->
                    <h3 class="text-5xl mb-8 inline-block"><span class="font-light text-gray-200 ">function </span>Software<span class="font-light text-gray-200">_</span>Development<span
                            class="font-light text-gray-200">(){</span>
                    </h3>
                    <div class="grid grid-cols-1  lg:grid-cols-3 gap-8 items-center mb-8">
                        <div class="p-4 ">
                            <h4 class="mt-5 mb-5 text-yellow-400 text-4xl text-center">FRONTEND</h4>
                            <h5 class=" mb-5 font-mono text-md text-center">{Responsive - Innovative - SEO - Compatible}</h5>
                            <div class="p-4">
                                <img src="{{asset("img/web_design.svg")}}" alt="web design svg" class=" mx-auto">
                            </div>
                            <p class="mt-1 text-xl  ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, autem consequatur cupiditate delectus deserunt dolor ea eaque est, impedit ipsum
                                itaque
                                maxime nam numquam quisquam sed velit voluptatibus. Fugit, optio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet, assumenda aut consequatur
                                consequuntur, eveniet fugiat in incidunt magni, </p>
                        </div>
                        <div class=" p-4 ">
                            <h4 class="mt-5 mb-5 text-yellow-400 text-4xl text-center">BACKEND</h4>
                            <h5 class=" mb-5 font-mono text-md text-center">{Robust - Secure - No Shorcuts - Escalable}</h5>
                            <div class="p-4">
                                <img src="{{asset("img/backend.svg")}}" alt="web design svg" class="mx-auto">
                            </div>
                            <p class="mt-1 text-xl  ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, autem consequatur cupiditate delectus deserunt dolor ea eaque est, impedit ipsum
                                itaque
                                maxime nam numquam quisquam sed velit voluptatibus. Fugit, optio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet, assumenda aut consequatur
                                consequuntur, eveniet fugiat in incidunt magni, </p>
                        </div>
                        <div class=" p-4 ">
                            <h4 class="mt-5 mb-5 text-yellow-400 text-4xl text-center">MAINTENANCE</h4>
                            <h5 class=" mb-5 font-mono text-md text-center">{Host - Bugs/errors - Updates - Backups}</h5>
                            <div class="p-4">
                                <img src="{{asset("img/maintenance.svg")}}" alt="web design svg">
                            </div>
                            <p class="mt-1 text-xl  ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, autem consequatur cupiditate delectus deserunt dolor ea eaque est, impedit ipsum
                                itaque
                                maxime nam numquam quisquam sed velit voluptatibus. Fugit, optio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet, assumenda aut consequatur
                                consequuntur, eveniet fugiat in incidunt magni, </p>
                        </div>
                    </div>
                    <p class="text-5xl mb-8 font-light text-gray-200 ">}</p>
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
