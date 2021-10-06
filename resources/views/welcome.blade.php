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
    <link href="https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,600;0,700;1,400;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&display=swap" rel="stylesheet">
</head>
<body class="font-serif text-gray-700 bg-gray-50 overflow-x-hidden">
<header class="min-h-screen bg-cover bg-right bg-no-repeat bg-lineas-banner-top relative" id="main-header">
    <nav class="absolute top-0 left-0 right-0 z-10  bg-gray-50 px-8" id="navbar">
        <div class="h-20  container mx-auto flex">
            <div class="flex flex-row items-center lg:w-1/3 w-2/3 space-x-4">
                <img src="{{asset("img/logo2.svg")}}" alt="Black Sun Labs logo" class="object-contain h-12">
                <h1 class="text-xl lg:text-3xl font-bold ">Black Sun <span class="font-light">Labs</span></h1>
            </div>
            <ul class="hidden lg:grid grid-cols-5 gap-4 text-center items-center h-20 lg:text-lg w-2/3">
                <li><a href="#services">Services</a></li>
                <li><a href="#benefits">Benefits</a></li>
                <li><a href="#benefits">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#">Clients</a></li>
            </ul>
        </div>
    </nav>
    <div class="container min-h-screen mx-auto relative px-8 py-20 flex items-center justify-center">
        <div class="flex items-center relative mt-20">
            <div class="rounded-3xl bg-bsl-accent transform -rotate-1 h-full shadow-lg">
                <div class="rounded-3xl bg-bsl transform rotate-2 p-1 h-full shadow">
                    <div class="py-10 px-4 lg:px-14 bg-white rounded-3xl transform -rotate-1 h-full shadow ">
                        <div class="flex flex-col items-center space-y-4 lg:space-y-10">
                            <img src="{{asset("img/logo2.svg")}}" alt="Black Sun Labs logo" class="object-contain h-32 mb-3">
                            <h1 class="text-4xl lg:text-7xl mb-2 text-center"><b>Webs</b> <span class="text-bsl"> & </span><b>Brands</b> Development</h1>
                            <p class="text-xl mt-5 text-center mx-auto">Let's create something <span class="font-cursive font-bold text-3xl text-bsl-accent px-2">unique</span> for your needs.</p>
                            <div class="mt-10">
                                <a href="#services" class="button-bsl">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 13l-5 5m0 0l-5-5m5 5V6"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<main>
    {{--    <!-- ABOUT US ------------->--}}
    <div aria-hidden="true" class="h-10 bg-bsl w-full"></div>
{{--    <section id="aboutus1" class="bg-bsl mb-10">--}}
{{--        <div class="container mx-auto py-20 mb-14 px-8 lg:px-0">--}}
{{--            <div class="grid grid-cols-1 lg:grid-cols-3 items-center gap-10">--}}
{{--                <div>--}}
{{--                    <h2 class="text-white "><b>BSL</b> vision</h2>--}}
{{--                </div>--}}
{{--                <div class="text-center p-8">--}}
{{--                    <p class="text-white font-cursive text-4xl">Performance</p>--}}
{{--                </div>--}}
{{--                <div class="text-center p-8">--}}
{{--                    <p class="text-white font-cursive text-4xl">Style</p>--}}
{{--                </div>--}}
{{--                <div class="text-center p-8">--}}
{{--                    <p class="text-white font-cursive text-4xl">Design</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
<!-- SERVICES ------------->
    <section class="mb-20 p-8" id="services">
        <div class="container mx-auto min-h-screen pt-10">
            <h2>Our <b>Services</b></h2>
            <p class="text-gray-500 text-lg">We offer Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore,
                vero.</p>
            <!--WEB DEVELOPMENT -->
            <div class="grid grid-cols-1 gap-20 mt-10">
                <div class="bg-white rounded-3xl  shadow transform  h-full ">
                    <div class="grid grid-cols-1 lg:grid-cols-3">
                        <div class="bg-bsl text-white p-8 rounded-tr-3xl lg:rounded-tr-none rounded-tl-3xl lg:rounded-bl-3xl overflow-hidden relative">
                            <img src="{{asset("img/lines_full.svg")}}" alt="" class="absolute inset-0 w-full h-full object-cover opacity-5 z-0">
                            <div class="relative z-10 flex flex-col space-y-3 lg:space-y-10 items-center justify-center h-full ">
                                <h3 class="text-3xl text-gray-100"><b class="text-6xl block text-white">WEB</b> Design & Development</h3>
                                <img src="{{asset("img/webdev.svg")}}" alt="Web and app development image" class="object-contain p-8 w-full max-h-64 lg:max-h-full">
                                <a href="#contact" class="button-bsl-accent">Contact BSL</a>
                            </div>
                        </div>
                        <div class="lg:col-span-2 space-y-6 p-8">
                            <p class="text-center mx-auto font-cursive font-bold text-2xl text-bsl-accent">Redefine your online presence </p>

                            <div class="flex space-y-5 lg:space-x-4 flex-col lg:flex-row">
                                <div class="lg:w-64 flex items-center justify-center">
                                    <img src="{{asset("img/services/responsive.svg")}}" alt="" class="object-contain w-16 mx-auto">
                                </div>
                                <div class="w-auto">
                                    <p class="font-bold text-xl">Full development <span class="font-normal">spectrum</span></p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet debitis, est officia quod sequi sit ullam velit? Distinctio enim iste maxime recusandae sint! Animi in iure nihil
                                        possimus quae
                                        similique.</p>
                                </div>
                            </div>
                            <div class="flex space-y-5 lg:space-x-4 flex-col lg:flex-row">
                                <div class="lg:w-64 flex items-center justify-center">
                                    <img src="{{asset("img/services/ui.svg")}}" alt="" class="object-contain w-16 mx-auto">
                                </div>
                                <div class="w-auto">
                                    <p class="font-bold text-xl">UX & UI <span class="font-normal">intelligent design</span></p>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet debitis, est officia quod sequi sit ullam velit? Distinctio enim iste maxime recusandae sint! Animi in iure nihil
                                        possimus quae
                                        similique.</p>
                                </div>
                            </div>
                            <div class="flex space-y-5 lg:space-x-4 flex-col lg:flex-row">
                                <div class="lg:w-64 flex items-center justify-center">
                                    <img src="{{asset("img/services/seo.svg")}}" alt="" class="object-contain w-16 mx-auto">
                                </div>
                                <div class="w-auto">
                                    <p class="font-bold text-xl">SEO <span class="font-normal">optimization</span></p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet debitis, est officia quod sequi sit ullam velit? Distinctio enim iste maxime recusandae sint! Animi in iure nihil
                                        possimus quae
                                        similique.</p>
                                </div>
                            </div>
                            <div class="flex space-y-5 lg:space-x-4 flex-col lg:flex-row">
                                <div class="lg:w-64 flex items-center justify-center">
                                    <img src="{{asset("img/services/technos.svg")}}" alt="" class="object-contain w-16 mx-auto">
                                </div>
                                <div class="w-auto">
                                    <p class="font-bold text-xl">Technologies <span class="font-normal">at hand</span></p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet debitis, est officia quod sequi sit ullam velit? Distinctio enim iste maxime recusandae sint! Animi in iure nihil
                                        possimus quae
                                        similique.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--BRANDING -->
            <div class="grid grid-cols-1 gap-20 mt-10">
                <div class="bg-white rounded-3xl  shadow transform  h-full ">
                    <div class="grid grid-cols-1 lg:grid-cols-3">
                        <div class="bg-bsl text-white p-8 rounded-tr-3xl lg:rounded-tr-none rounded-tl-3xl lg:rounded-bl-3xl overflow-hidden relative">
                            <img src="{{asset("img/lines_full.svg")}}" alt="" class="absolute inset-0 w-full h-full object-cover opacity-5 z-0">
                            <div class="relative z-10 flex flex-col space-y-3 lg:space-y-10 items-center justify-center h-full ">
                                <h3 class="text-3xl text-gray-100"><b class="text-6xl block text-white">BRAND</b> Design</h3>
                                <img src="{{asset("img/webdev.svg")}}" alt="Web and app development image" class="object-contain p-8 w-full max-h-64 lg:max-h-full">
                                <a href="#contact" class="button-bsl-accent">Contact BSL</a>
                            </div>
                        </div>
                        <div class="lg:col-span-2 space-y-6 p-8">
                            <p class="text-center mx-auto font-cursive font-bold text-2xl text-bsl-accent">Redefine your online presence </p>

                            <div class="flex space-y-5 lg:space-x-4 flex-col lg:flex-row">
                                <div class="lg:w-64 flex items-center justify-center">
                                    <img src="{{asset("img/services/pallete.png")}}" alt="" class="object-contain w-16 mx-auto">
                                </div>
                                <div class="w-auto">
                                    <p class="font-bold text-xl">Full development <span class="font-normal">spectrum</span></p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet debitis, est officia quod sequi sit ullam velit? Distinctio enim iste maxime recusandae sint! Animi in iure nihil
                                        possimus quae
                                        similique.</p>
                                </div>
                            </div>
                            <div class="flex space-y-5 lg:space-x-4 flex-col lg:flex-row">
                                <div class="lg:w-64 flex items-center justify-center">
                                    <img src="{{asset("img/services/logo.png")}}" alt="" class="object-contain w-16 mx-auto">
                                </div>
                                <div class="w-auto">
                                    <p class="font-bold text-xl">UX & UI <span class="font-normal">intelligent design</span></p>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet debitis, est officia quod sequi sit ullam velit? Distinctio enim iste maxime recusandae sint! Animi in iure nihil
                                        possimus quae
                                        similique.</p>
                                </div>
                            </div>
                            <div class="flex space-y-5 lg:space-x-4 flex-col lg:flex-row">
                                <div class="lg:w-64 flex items-center justify-center">
                                    <img src="{{asset("img/services/mockup.png")}}" alt="" class="object-contain w-16 mx-auto">
                                </div>
                                <div class="w-auto">
                                    <p class="font-bold text-xl">SEO <span class="font-normal">optimization</span></p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet debitis, est officia quod sequi sit ullam velit? Distinctio enim iste maxime recusandae sint! Animi in iure nihil
                                        possimus quae
                                        similique.</p>
                                </div>
                            </div>
                            <div class="flex space-y-5 lg:space-x-4 flex-col lg:flex-row">
                                <div class="lg:w-64 flex items-center justify-center">
                                    <img src="{{asset("img/services/font.png")}}" alt="" class="object-contain w-16 mx-auto">
                                </div>
                                <div class="w-auto">
                                    <p class="font-bold text-xl">Technologies <span class="font-normal">at hand</span></p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet debitis, est officia quod sequi sit ullam velit? Distinctio enim iste maxime recusandae sint! Animi in iure nihil
                                        possimus quae
                                        similique.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TRAJECTORY ------------->
    <section id="aboutus2" class="bg-bsl">

        <div class="container mx-auto text-white py-20 mb-14 px-8 lg:px-0">
            <div class="grid grid-cols-1 lg:grid-cols-5 items-center gap-10">
                <div class="col-span-2">
                    <h2><b>BSL</b> trajectory</h2>
                </div>
                <div class="bg-bsl-accent-light transform -rotate-2  rounded-4xl">
                    <div class="bg-bsl-light transform rotate-3 p-1 rounded-4xl">
                        <div class="bg-white rounded-3xl shadow text-bsl text-center p-8 h-full transform -rotate-1">
                            <p class="text-xl">Webs <br> developed</p>
                            <p class="text-6xl font-bold">900+</p>
                        </div>
                    </div>
                </div>
                <div class="bg-bsl-accent-light transform -rotate-2  rounded-4xl">
                    <div class="bg-bsl-light transform rotate-3 p-1 rounded-4xl">
                        <div class="bg-white rounded-3xl shadow text-bsl text-center p-8 h-full transform -rotate-1">
                            <p class="text-xl">Brands <br> created</p>
                            <p class="text-6xl font-bold">300+</p>
                        </div>
                    </div>
                </div>
                <div class="bg-bsl-accent-light transform -rotate-2  rounded-4xl">
                    <div class="bg-bsl-light transform rotate-3 p-1 rounded-4xl">
                        <div class="bg-white rounded-3xl shadow text-bsl text-center p-8 h-full transform -rotate-1">
                            <p class="text-xl">Years of <br>experience</p>
                            <p class="text-6xl font-bold">15+</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BENEFTIS ------------->
    <section class="min-h-screen bg-gray-50 p-8" id="benefits">
        <div class="container mx-auto ">
            <h2>Our <b>Benefits</b></h2>
            <p class="text-gray-500 text-lg">We offer Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore,
                vero.</p>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 my-10">
                <div class="lg:col-span-2 lg:row-span-2 bg-white rounded-3xl p-8 shadow h-full">
                    <div class="flex items-center justify-center space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        <h3><b>BSL</b> User Panel</h3>
                    </div>
                    <p class="text-lg mt-2 text-center">Manage all aspects of your projects with us</p>
                    <p class="mt-10">We offer you access to our control panel where you can administrate all aspects of your projects with us. Deadlines, bugs, reports, maintenance and more.</p>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mt-5">
                        <div>
                            <p class="text-2xl mb-3 font-bold">Milestones <span class="font-normal">viewer</span></p>
                            <p>We update our knowledge everyday. That is why we offer our services along side the best and newest technologies.</p>
                        </div>
                        <div>
                            <p class="text-2xl mb-3 font-bold">Bug & Error <span class="font-normal">report system</span></p>
                            <p>We update our knowledge everyday. That is why we offer our servicesalong side the best and newest technologies.</p>
                        </div>
                        <div>
                            <p class="text-2xl mb-3 font-bold">Payments <span class="font-normal">timeline</span></p>
                            <p>We update our knowledge everyday. That is why we offer our servicesalong side the best and newest technologies.</p>
                        </div>
                        <div>
                            <p class="text-2xl mb-3 font-bold">Backups <span class="font-normal">managment</span></p>
                            <p>We update our knowledge everyday. That is why we offer our servicesalong side the best and newest technologies.</p>
                        </div>
                        <div class="lg:col-span-2">
                            <p class="text-2xl mb-3 font-bold">Client <span class="font-normal">priority changes</span></p>
                            <p>We update our knowledge everyday. That is why we offer our servicesalong side the best and newest technologies.</p>
                        </div>
                        <div class="lg:col-span-2 text-center">
                            <a href="" class="button-bsl">
                                View demo
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-3xl px-4 py-8 shadow h-full">
                    <h3><b>BSL</b> Management & Maintenance</h3>
                </div>
                <div class="bg-white rounded-3xl px-4 py-8 shadow h-full">
                    <h3><b>BSL</b> Management & Maintenance</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOG ------------->
    <section class="min-h-screen shadow-inner bg-gray-600 p-8 flex items-center mb-10 relative overflow-hidden" id="blog">
        <div class="container mx-auto ">
            <h2 class="text-bsl-accent relative z-30 mb-10">Latest <b>Posts</b></h2>
            <div aria-hidden="true" class="absolute z-0 w-full opacity-10 top-0 left-0 right-0 bg-cover bg-lines_full h-full"></div>
            <div class="grid grid-cols-1 lg:grid-cols-3 items-center gap-20 relative">
                <div class="flex flex-col items-center  justify-center h-full">
                    <article class="bg-gray-50 rounded-3xl p-8 shadow transform text-center h-full flex items-center flex-col justify-center">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <p class="text-sm text-gray-500">POSTED: <span>10/10/2021 15:34</span></p>
                        <p class="text-lg  text-left "> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi, aperiam architecto assumenda consectetur deleniti deserunt dicta dolorum et ex excepturi
                            expedita
                            inventore ipsa itaque molestias
                            mollitia nam necessitatibus numquam officiis placeat quas, quasi quisquam recusandae sequi, sunt totam vero voluptatem! Accusantium ad aliquam amet animi aspernatur aut autem commodi cum debitis
                            dicta
                            dolorem
                            dolorum eos exercitationem, fugiat, fugit illum inventore iusto libero numquam quaerat quia quo reprehenderit sequi sint, ullam. Accusantium amet aperiam cumque doloremque est excepturi impedit ipsa
                            iure,
                            nihil
                            nisi nulla veniam? Ab, harum hic praesentium rem saepe sint velit. Aut dolore officiis optio quae, unde velit!</p>
                        <a href="#contact" class="mt-10 button-bsl-accent">Read more</a>
                    </article>
                </div>
                <div class="flex flex-col items-center  justify-center h-full">
                    <article class="bg-gray-50 rounded-3xl p-8 shadow transform text-center h-full flex items-center flex-col justify-center">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <p class="text-lg  text-left "> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi, aperiam architecto assumenda consectetur deleniti deserunt dicta dolorum et ex excepturi
                            expedita
                            inventore ipsa itaque molestias
                            mollitia nam necessitatibus numquam officiis placeat quas, quasi quisquam recusandae sequi, sunt totam vero voluptatem! Accusantium ad aliquam amet animi aspernatur aut autem commodi cum debitis
                            dicta
                            dolorem
                            dolorum eos exercitationem, fugiat, fugit illum inventore iusto libero numquam quaerat quia quo reprehenderit sequi sint, ullam. Accusantium amet aperiam cumque doloremque est excepturi impedit ipsa
                            iure,
                            nihil
                            nisi nulla veniam? Ab, harum hic praesentium rem saepe sint velit. Aut dolore officiis optio quae, unde velit!</p>
                        <a href="#contact" class="mt-10 button-bsl-accent">Read more</a>
                    </article>
                </div>
                <div class="flex flex-col items-center  justify-center h-full">
                    <article class="bg-gray-50 rounded-3xl p-8 shadow transform text-center h-full flex items-center flex-col justify-center">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <p class="text-lg  text-left "> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi, aperiam architecto assumenda consectetur deleniti deserunt dicta dolorum et ex excepturi
                            expedita
                            inventore ipsa itaque molestias
                            mollitia nam necessitatibus numquam officiis placeat quas, quasi quisquam recusandae sequi, sunt totam vero voluptatem! Accusantium ad aliquam amet animi aspernatur aut autem commodi cum debitis
                            dicta
                            dolorem
                            dolorum eos exercitationem, fugiat, fugit illum inventore iusto libero numquam quaerat quia quo reprehenderit sequi sint, ullam. Accusantium amet aperiam cumque doloremque est excepturi impedit ipsa
                            iure,
                            nihil
                            nisi nulla veniam? Ab, harum hic praesentium rem saepe sint velit. Aut dolore officiis optio quae, unde velit!</p>
                        <a href="#contact" class="mt-10 button-bsl-accent">Read more</a>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT ------------->
    <section class="min-h-screen bg-gray-50 p-8" id="contact">
        <div class="container mx-auto ">
            <h2><b>Contact</b> Us</h2>
            <p class="text-gray-500 text-lg">We offer Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore,
                vero.</p>
            <form method="post" action="" class="my-10 grid grid-cols-1 lg:grid-cols-3 gap-10">
                <div class="lg:col-span-3">
                    <p class="text-3xl mb-3 font-bold bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text">
                        Required <span class="font-normal">fields</span></p>
                </div>
                <div>
                    <div>
                        <label for="">Full name</label>
                        <input type="text">
                    </div>
                    <div class="mt-5">
                        <label for="">Email address</label>
                        <input type="text">
                    </div>
                </div>
                <div class="lg:col-span-2">
                    <label for="">Tell us what you need</label>
                    <textarea name="" id="" cols="30" rows="5"></textarea>
                    <p class="text-gray-500">The more details the better.</p>
                </div>
                <div class="lg:col-span-3">
                    <p class="text-3xl mb-3 font-bold bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text">
                        Optional <span class="font-normal">fields</span></p>
                </div>
                <div>
                    <label for="">Have we worked together already?</label>
                    <input type="text">
                </div>
                <div>
                    <label for="">Email address</label>
                    <input type="text">
                </div>
                <div>
                    <label for="">Where do you know us from?</label>
                    <input type="text">
                </div>
                <div class="lg:col-span-3">
                    <div class="text-center">
                        <a href="" class="button-bsl">Send message</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>
<footer class="bg-gray-200">
    <div class="grid grid-cols-1 lg:grid-cols-3  p-8 container mx-auto gap-10">
        <div class="flex items-center justify-center space-x-10">
            <img src="{{asset("img/logo_gray.svg")}}" alt="logo black suns lab" class="object-contain w-44">
            <div>

                <p class="font-bold">Black Sun Labs</p>
                <p>Web and brand development</p>
            </div>
        </div>
        <div class="flex flex-col items-center">
            <p class="font-bold">Sitemap</p>
            <ul>
                <li>Home</li>
                <li>Services</li>
                <li>Benefits</li>
                <li>Vision</li>
                <li>Contact</li>
                <li>Clients</li>
            </ul>
        </div>
        <div class="flex flex-col items-center">
            <p class="font-bold">Social media</p>
            <ul>
                <li>Instagram</li>
                <li>Twitter</li>
            </ul>
        </div>
        <div class="col-end-3 mt-10">
            <p class="text-center text-sm">All rights reserved - 2022</p>
        </div>
    </div>
</footer>
</body>
</html>
