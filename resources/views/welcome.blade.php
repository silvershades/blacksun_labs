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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,600;0,700;1,400;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    {{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>--}}
</head>
<body class="font-serif text-gray-700 bg-gray-50">
<header class="min-h-screen container mx-auto relative">
    <nav class="h-20 absolute top-0 left-0 right-0 z-10 flex" id="navbar">
        <div class="flex flex-row items-center w-1/3 space-x-4">
            <img src="{{asset("img/logo.svg")}}" alt="Black Sun Labs logo" class="object-contain h-12">
            <h1 class="text-3xl font-bold text-gray-700">Black Sun <span class="font-light">Labs</span></h1>
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
                <h1 class="text-7xl font-bold mb-2 text-gray-700 text-transparent bg-clip-text"><span class="font-light text-gray-700">Development of </span>
                    Webs, Apps, Software and Brands</h1>

                <p class="text-lg text-gray-500">

                    Welcome to BSL! Let's work together to create somelightg unique for your needs.
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
                    <stop offset="50%" style="stop-color:#374151;stop-opacity:1"/>
                </linearGradient>
            </defs>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 17l-4 4m0 0l-4-4m4 4V3"/>
        </svg>
    </div>
</header>
<div class="divider-bsl">
    <div class="h-10 bg-gradient-to-l to-gray-700 from-blue-500 shadow-inner"></div>
    <div class="h-10 bg-gradient-to-l from-gray-700 to-blue-500"></div>
    <div class="h-10 bg-gradient-to-l from-gray-700 to-gray-50 shadow-innertop"></div>
</div>


<main class="">
    <!-- SERVICES ------------->
    <section class="min-h-screen bg-gray-50 p-8">
        <div class="container mx-auto ">
            <h3 class="inline-block text-6xl font-bold leading-tight"><span class="font-light text-gray-700">Our</span> Services</h3>
            <p class="text-gray-500 text-lg">We offer Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, vero.</p>
            <div class="grid grid-cols-1 gap-10 mt-10 text-center">
                <div class="bg-white border shadow-sm rounded-lg p-8 overflow-hidden">
                    <h4 class="inline-block text-5xl bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text font-bold leading-normal">Web & App <span class="font-light text-gray-700"> Development</span></h4>
                    <p class=" text-lg mt-2">Give a new face to your online precense</p>

                    <div class="my-5 h-96 bg-gradient-to-bl from-gray-700 to-blue-500 -mx-8  shadow-md grid grid-cols-2 gap-4 items-center">
                        <div>
                            <p class="text-white font-light text-3xl leading-10">Responsive</p>
                            <p class="text-white font-light text-3xl leading-10">Compatible</p>
                            <p class="text-white font-light text-3xl leading-10">Multi-platform</p>
                        </div>
                        <div>
                            <img src="{{asset("img/web_2.png")}}" alt="Black Sun Labs logo" class="object-cover h-96 w-full object-top ">
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-10 text-left">
                        <div class="col-span-2 grid grid-cols-2 gap-10 ">
                            <div class="col-span-2">
                                <p class="text-3xl mb-3 font-bold bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text">Full development <span class="font-normal">experience</span></p>
                                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium delectus libero maxime porro voluptates! Aspernatur deserunt dolor, hic itaque laboriosam libero natus
                                    repellat? A alias consequatur eius saepe temporibus! Alias at ducimus harum nam odio officiis, sapiente totam. Assumenda blanditiis corporis cupiditate est excepturi iusto necessitatibus nisi
                                    quas sed veniam.</p>
                            </div>
                            <div>
                                <p class="text-3xl mb-3 font-bold bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text">UI & UX <span class="font-normal">intelligent design</span></p>
                                <p class="text-gray-700">We update our knowledge everyday. That is why we offer our services along side the best and newest technologies.</p>
                            </div>
                            <div>
                                <p class="text-3xl mb-3 font-bold bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text">SEO <span class="font-normal">optimization</span></p>
                                <p class="text-gray-700">We update our knowledge everyday. That is why we offer our services along side the best and newest technologies.</p>
                            </div>
                        </div>

                        <div>
                            <p class="text-3xl mb-3 font-bold bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text">Technologies <span class="font-normal">at hand</span></p>
                            <p class="text-gray-700">We update our knowledge everyday. That is why we offer our services along side the best and newest technologies.</p>
                            <div class="grid grid-cols-4 gap-3 text-center items-center justify-center my-5 relative p-8">
                                <img class="w-12 mx-auto" src="{{asset("img/html.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/css.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/js.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/php.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/node.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/mysql.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/react.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/vue.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/angular.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/ps.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/ai.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/idea.png")}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center mt-6 mb-2 space-x-4">
                        <div>
                            <a href="#" class="inline-block flex items-center justify-center py-3 border rounded shadow transition-all duration-300
                                hover:shadow-md  hover:text-white w-64 hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                View more
                            </a>
                        </div>
                        <div>
                            <a href="#" class="inline-block flex items-center justify-center py-3 border rounded shadow transition-all duration-300
                                hover:shadow-md  hover:text-white w-64 hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                Hire service
                            </a>
                        </div>
                    </div>

                </div>

            </div>
            <div class="grid grid-cols-1 gap-10 mt-10 text-center">
                <div class="bg-white border shadow-sm rounded-lg p-8 overflow-hidden">
                    <h4 class="inline-block text-5xl bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text font-bold leading-normal">Branding <span class="font-light text-gray-700"> Development</span></h4>
                    <p class=" text-lg mt-2">Give a new face to your online precense</p>

                    <div class="my-5 h-96 bg-gradient-to-bl from-gray-700 to-blue-500 -mx-8  shadow-md grid grid-cols-2 gap-4 items-center">
                        <div>
                            <p class="text-white font-light text-3xl leading-10">Responsive</p>
                            <p class="text-white font-light text-3xl leading-10">Compatible</p>
                            <p class="text-white font-light text-3xl leading-10">Multi-platform</p>
                        </div>
                        <div>
                            <img src="{{asset("img/web_2.png")}}" alt="Black Sun Labs logo" class="object-cover h-96 w-full object-top ">
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-10 text-left">
                        <div class="col-span-2 grid grid-cols-2 gap-10 ">
                            <div class="col-span-2">
                                <p class="text-3xl mb-3 font-bold bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text">Full development <span class="font-normal">experience</span></p>
                                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium delectus libero maxime porro voluptates! Aspernatur deserunt dolor, hic itaque laboriosam libero natus
                                    repellat? A alias consequatur eius saepe temporibus! Alias at ducimus harum nam odio officiis, sapiente totam. Assumenda blanditiis corporis cupiditate est excepturi iusto necessitatibus nisi
                                    quas sed veniam.</p>
                            </div>
                            <div>
                                <p class="text-3xl mb-3 font-bold bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text">UI & UX <span class="font-normal">intelligent design</span></p>
                                <p class="text-gray-700">We update our knowledge everyday. That is why we offer our services along side the best and newest technologies.</p>
                            </div>
                            <div>
                                <p class="text-3xl mb-3 font-bold bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text">SEO <span class="font-normal">optimization</span></p>
                                <p class="text-gray-700">We update our knowledge everyday. That is why we offer our services along side the best and newest technologies.</p>
                            </div>
                        </div>

                        <div>
                            <p class="text-3xl mb-3 font-bold bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text">Technologies <span class="font-normal">at hand</span></p>
                            <p class="text-gray-700">We update our knowledge everyday. That is why we offer our services along side the best and newest technologies.</p>
                            <div class="grid grid-cols-4 gap-3 text-center items-center justify-center my-5 relative p-8">
                                <img class="w-12 mx-auto" src="{{asset("img/html.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/css.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/js.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/php.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/node.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/mysql.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/react.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/vue.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/angular.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/ps.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/ai.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/idea.png")}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center mt-6 mb-2 space-x-4">
                        <div>
                            <a href="#" class="inline-block flex items-center justify-center py-3 border rounded shadow transition-all duration-300
                                hover:shadow-md  hover:text-white w-64 hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                View more
                            </a>
                        </div>
                        <div>
                            <a href="#" class="inline-block flex items-center justify-center py-3 border rounded shadow transition-all duration-300
                                hover:shadow-md  hover:text-white w-64 hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                Hire service
                            </a>
                        </div>
                    </div>

                </div>

            </div>
            <div class="grid grid-cols-1 gap-10 mt-10 text-center">
                <div class="bg-white border shadow-sm rounded-lg p-8 overflow-hidden">
                    <h4 class="inline-block text-5xl bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text font-bold">Software <span class="font-light text-gray-700"> Development</span></h4>
                    <p class=" text-lg mt-2">Give a new face to your online precense</p>

                    <div class="my-5 h-96 bg-gradient-to-bl from-gray-700 to-blue-500 -mx-8  shadow-md grid grid-cols-2 gap-4 items-center">
                        <div>
                            <p class="text-white font-light text-3xl leading-10">Responsive</p>
                            <p class="text-white font-light text-3xl leading-10">Compatible</p>
                            <p class="text-white font-light text-3xl leading-10">Multi-platform</p>
                        </div>
                        <div>
                            <img src="{{asset("img/web_2.png")}}" alt="Black Sun Labs logo" class="object-cover h-96 w-full object-top ">
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-10 text-left">
                        <div class="col-span-2 grid grid-cols-2 gap-10 ">
                            <div class="col-span-2">
                                <p class="text-3xl mb-3 font-bold bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text">Full development <span class="font-normal">experience</span></p>
                                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium delectus libero maxime porro voluptates! Aspernatur deserunt dolor, hic itaque laboriosam libero natus
                                    repellat? A alias consequatur eius saepe temporibus! Alias at ducimus harum nam odio officiis, sapiente totam. Assumenda blanditiis corporis cupiditate est excepturi iusto necessitatibus nisi
                                    quas sed veniam.</p>
                            </div>
                            <div>
                                <p class="text-3xl mb-3 font-bold bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text">UI & UX <span class="font-normal">intelligent design</span></p>
                                <p class="text-gray-700">We update our knowledge everyday. That is why we offer our services along side the best and newest technologies.</p>
                            </div>
                            <div>
                                <p class="text-3xl mb-3 font-bold bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text">SEO <span class="font-normal">optimization</span></p>
                                <p class="text-gray-700">We update our knowledge everyday. That is why we offer our services along side the best and newest technologies.</p>
                            </div>
                        </div>

                        <div>
                            <p class="text-3xl mb-3 font-bold bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text">Technologies <span class="font-normal">at hand</span></p>
                            <p class="text-gray-700">We update our knowledge everyday. That is why we offer our services along side the best and newest technologies.</p>
                            <div class="grid grid-cols-4 gap-3 text-center items-center justify-center my-5 relative p-8">
                                <img class="w-12 mx-auto" src="{{asset("img/html.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/css.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/js.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/php.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/node.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/mysql.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/react.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/vue.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/angular.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/ps.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/ai.png")}}" alt="">
                                <img class="w-12 mx-auto" src="{{asset("img/idea.png")}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center mt-6 mb-2 space-x-4">
                        <div>
                            <a href="#" class="inline-block flex items-center justify-center py-3 border rounded shadow transition-all duration-300
                                hover:shadow-md  hover:text-white w-64 hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                View more
                            </a>
                        </div>
                        <div>
                            <a href="#" class="inline-block flex items-center justify-center py-3 border rounded shadow transition-all duration-300
                                hover:shadow-md  hover:text-white w-64 hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                Hire service
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <div class="divider-bsl">
        <div class="h-10 bg-gradient-to-l to-gray-700 from-blue-500 shadow-inner"></div>
        <div class="h-10 bg-gradient-to-l from-gray-700 to-blue-500"></div>
        <div class="h-10 bg-gradient-to-l from-gray-700 to-gray-50 "></div>
    </div>
    <!-- BENEFTIS ------------->
    <section class="min-h-screen bg-gray-50 p-8">
        <div class="container mx-auto ">
            <h3 class="inline-block text-6xl font-bold leading-tight"><span class="font-light text-gray-700">Our </span> Benefits</h3>
            <p class="text-gray-500 text-lg">We offer Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, vero.</p>

            <div class="grid grid-cols-3 gap-10 my-10">
                <div class="col-span-2 row-span-2 border shadow rounded bg-white p-8">
                    <div class="flex items-center justify-center space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        <h4 class="text-center text-4xl bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text font-bold">BSL <span class="font-light text-gray-700"> Control Panel</span></h4>
                    </div>
                    <p class="text-lg mt-2 text-center">Manage all aspects of your projects with us</p>
                    <p class="mt-10">We offer you access to our control panel where you can administrate all aspects of your projects with us. Deadlines, bugs, reports, maintenance and more.</p>
                    <div class="grid grid-cols-2 gap-10 mt-5">
                        <div>
                            <p class="text-3xl mb-3 font-bold bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text">Deadlines <span class="font-normal">viewer</span></p>
                            <p class="text-gray-700">We update our knowledge everyday. That is why we offer our services along side the best and newest technologies.</p>
                        </div>
                        <div>
                            <p class="text-3xl mb-3 font-bold bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text">Bug & Error <span class="font-normal">report system</span></p>
                            <p class="text-gray-700">We update our knowledge everyday. That is why we offer our services along side the best and newest technologies.</p>
                        </div>
                        <div>
                            <p class="text-3xl mb-3 font-bold bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text">Payments <span class="font-normal">timeline</span></p>
                            <p class="text-gray-700">We update our knowledge everyday. That is why we offer our services along side the best and newest technologies.</p>
                        </div>
                        <div>
                            <p class="text-3xl mb-3 font-bold bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text">Backups <span class="font-normal">managment</span></p>
                            <p class="text-gray-700">We update our knowledge everyday. That is why we offer our services along side the best and newest technologies.</p>
                        </div>
                        <div class="col-span-2">
                            <p class="text-3xl mb-3 font-bold bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text">Client <span class="font-normal">priority changes</span></p>
                            <p class="text-gray-700">We update our knowledge everyday. That is why we offer our services along side the best and newest technologies.</p>
                        </div>
                        <div class="col-span-2">
                            <div>
                                <a href="#" class="inline-block flex items-center justify-center py-3 border rounded shadow transition-all duration-300
                                hover:shadow-md  hover:text-white w-64 hover:bg-gray-700 mx-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                    View demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border shadow rounded bg-white p-8">
                    <h4 class="text-center text-4xl bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text font-bold">BSL <span class="font-light text-gray-700"> Hosting management</span></h4>

                </div>
                <div class="border shadow rounded bg-white p-8">
                    <h4 class="text-center text-4xl bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text font-bold">BSL <span class="font-light text-gray-700"> Periodic maintenance</span></h4>

                </div>
            </div>
        </div>
    </section>
    <div class="divider-bsl">
        <div class="h-4 bg-gradient-to-l to-gray-700 from-blue-500 shadow-inner"></div>
        <div class="h-4 bg-gradient-to-l from-gray-700 to-blue-500"></div>
        <div class="h-4 bg-gradient-to-l from-gray-700 to-gray-50 "></div>
    </div>
    <!-- CONTACT ------------->
    <section class="min-h-screen bg-gray-50 p-8">
        <div class="container mx-auto ">
            <h3 class="inline-block text-6xl font-bold leading-tight">Contact <span class="font-light text-gray-700">Us </span></h3>
            <p class="text-gray-500 text-lg">We offer Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, vero.</p>
            <form method="post" action="" class="my-10 grid grid-cols-3 gap-10">
                <div class="col-span-3">
                    <p class="text-3xl mb-3 font-bold bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text">Required <span class="font-normal">fields</span></p>
                </div>
                <div>
                    <div>
                        <label for="" class="block text-lg mb-2">Full name</label>
                        <input type="text" class="px-3 py-3 bg-white text-lg border rounded w-full">
                    </div>
                    <div class="mt-5">
                        <label for="" class="block text-lg mb-2">Email address</label>
                        <input type="text" class="px-3 py-3 bg-white text-lg border rounded w-full">
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="" class="block text-lg mb-2">Tell us what you need</label>
                    <textarea name="" id="" cols="30" rows="5" class="resize-none px-3 py-3 bg-white border text-lg rounded w-full"></textarea>
                    <p class="text-gray-500">The more details the better.</p>
                </div>
                <div class="col-span-3">
                    <p class="text-3xl mb-3 font-bold bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text">Optional <span class="font-normal">fields</span></p>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2">Have we worked together already?</label>
                    <input type="text" class="px-3 py-3 bg-white text-lg border rounded w-full">
                </div>
                <div class="">
                    <label for="" class="block text-lg mb-2">Email address</label>
                    <input type="text" class="px-3 py-3 bg-white text-lg border rounded w-full">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2">Where do you know us from?</label>
                    <input type="text" class="px-3 py-3 bg-white text-lg border rounded w-full">
                </div>
                <div class="col-start-2">
                    <a href="#" class="inline-block flex items-center justify-center py-3 border rounded shadow transition-all duration-300
                                hover:shadow-md  hover:text-white w-64 hover:bg-gray-700 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                        Send message
                    </a>
                </div>
            </form>
        </div>
    </section>
</main>


</body>

</html>
