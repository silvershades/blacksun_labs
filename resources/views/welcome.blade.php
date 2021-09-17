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
<body class="font-serif text-gray-900">
<header class="h-screen container mx-auto">
    <nav class="h-24" id="navbar">
        <ul class="grid grid-cols-5 gap-4 text-center items-center h-20 text-lg">
            <li class=""><a href="#">About us</a></li>
            <li class=""><a href="#">Services</a></li>
            <li class=""><a href="#">Portfolio</a></li>
            <li class=""><a href="#">Contact</a></li>
            <li class=""><a href="#">Clients</a></li>
        </ul>
    </nav>
    <div>
        <div class="flex items-center h-40 space-x-10 p-20 mt-8">
            <img src="{{asset("img/logo.svg")}}" alt="Black Sun Labs logo" class="w-28 inline-block">
            <div>
                <h1 class="text-6xl font-bold inline-block text-right mb-2">Black Sun <span class="font-thin">Labs</span></h1>
                <p class="font-mono text-lg text-gray-500">/** Web and software development */</p>
            </div>
        </div>
        <div class="mt-20 ">
            <p class="text-7xl text-right inline-block">
                <span class="text-7xl text-right font-light text-gray-200">array[1] = </span>
                <span class="text-yellow-400 "> ["</span>
                Let's work together and create something unique for your needs!
                <span class="text-yellow-400 "> "]</span>
            </p>
            <p class="font-mono text-lg text-right mt-3 text-indigo-400">/** Creating solutions since 2006 */</p>
        </div>
        <div class=" mt-20 text-center space-x-10">
            <a href="#" class="bg-yellow-400 p-4 text-3xl rounded">See more</a>
            <a href="#" class="bg-yellow-400 p-4 text-3xl rounded">Write to us</a>
        </div>
    </div>
</header>
<main class="">

    <section class="min-h-screen container mx-auto align-middle items-center" id="services">
        <h2 class="text-7xl mb-8">Services</h2>
        <div class="flex">
            <div class="inline-block bg-indigo-50 text-white p-2 w-20 text-2xl text-center mr-5 " id="editorNumbers">

            </div>
            <div class="h-auto" id="services_div">
                <div>

                    <!-- WEB DEVELOPMENT -->
                    <h3 class="text-5xl mb-8 inline-block"><span class="font-light text-gray-200 ">function </span>Web<span class="font-light text-gray-200">_</span>Development<span class="font-light text-gray-200">(){</span>
                    </h3>
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
