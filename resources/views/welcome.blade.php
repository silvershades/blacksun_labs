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
</head>
<body class="font-serif text-gray-700 bg-gray-50 overflow-x-hidden">
<header class="min-h-screen bg-cover bg-right bg-no-repeat" id="main-header"
        style="background-image: url('{{asset("img/lineas2.svg")}}');">
    <nav class="absolute top-0 left-0 right-0 z-10  bg-gray-50 px-8" id="navbar">
        <div class="h-20  container mx-auto flex">
            <div class="flex flex-row items-center lg:w-1/3 w-2/3 space-x-4">
                <img src="{{asset("img/logo2.svg")}}" alt="Black Sun Labs logo" class="object-contain h-12">
                <h1 class="text-xl lg:text-3xl font-bold text-gray-700">Black Sun <span class="font-light">Labs</span></h1>
            </div>
            <ul class="hidden lg:grid grid-cols-5 gap-4 text-center items-center h-20 lg:text-lg w-2/3">
                <li class=""><a href="#">About us</a></li>
                <li class=""><a href="#">Services</a></li>
                <li class=""><a href="#">Portfolio</a></li>
                <li class=""><a href="#">Contact</a></li>
                <li class=""><a href="#">Clients</a></li>
            </ul>
        </div>
    </nav>
    <div class="container mx-auto relative p-8">
        <div class="flex min-h-screen items-center relative justify-end">
            <div class="rounded-3xl bg-indigo-400 transform -rotate-1 p-2  h-full shadow-lg mt-20">
                <div class="rounded-3xl bg-bsl transform rotate-2 p-3  h-full shadow">
                    <div class="py-10 px-4 lg:px-14 bg-white rounded-3xl transform -rotate-1  h-full shadow">
                        <div class="flex flex-col items-center">
                            <img src="{{asset("img/logo2.svg")}}" alt="Black Sun Labs logo" class="object-contain h-32 mb-3">
                            <h1 class="text-4xl lg:text-7xl font-bold mb-2 text-gray-700 text-transparent bg-clip-text text-center text-gray-700">
                                <span class="font-light text-gray-700 block">Development of </span>
                                Webs <span class="text-bsl"> , </span>
                                Apps <span class="text-bsl"> & </span>
                                Brands
                            </h1>
                            <p class="text-lg mt-5 text-gray-700 text-center">Let's work together to create something unique for your
                                needs.</p>

                            <div class="mt-10">
                                <a href="#contact" class="p-2 bg-bsl text-white rounded-full flex items-center justify-center hover:bg-indigo-400 transition shadow">
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

<div class="relative">
    <div class="h-10 bg-bsl shadow"></div>
</div>

<main class="">
    <!-- SERVICES ------------->
    <section class="mb-20 p-8">
        <div class="container mx-auto min-h-screen pt-10">
            <h2 class="inline-block text-4xl lg:text-6xl font-bold leading-tight"><span class="font-light text-gray-700">Our</span>
                Services</h2>
            <p class="text-gray-500 text-lg">We offer Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore,
                vero.</p>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mt-10">
                <div class="bg-indigo-200 rounded-3xl transform rotate-2 h-full">
                    <div class="bg-bsl mx-1 my-3 rounded-3xl transform -rotate-3 p-3 shadow h-full -translate-y-4">
                        <div class="bg-white rounded-3xl p-8 shadow transform rotate-1  h-full">
                            <h3 class="text-3xl lg:text-5xl font-bold text-center mb-3">Web <span class="text-bsl">&</span> App <span class="font-light text-gray-700"> Development</span></h3>
                            <p class="text-center">Let´s give a new face to your online presence</p>
                            <div class="mb-10">
                                <img src="{{asset("img/web_2.png")}}" alt="Black Sun Labs logo"
                                     class="object-cover my-5 h-44 w-full object-top rounded-xl shadow">
                            </div>
                            <div class="space-y-10">
                                <div class="flex space-y-5 lg:space-x-4 flex-col lg:flex-row">
                                    <div class="lg:w-64 flex items-center justify-center">
                                        <img src="{{asset("img/services/responsive.svg")}}" alt="" class="object-contain w-16 mx-auto">
                                    </div>
                                    <div class="w-auto">
                                        <p class="font-bold text-xl">Full development <span class="font-normal">spectrum</span></p>
                                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet debitis, est officia quod sequi sit ullam velit? Distinctio enim iste maxime recusandae sint! Animi in iure nihil
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

                                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet debitis, est officia quod sequi sit ullam velit? Distinctio enim iste maxime recusandae sint! Animi in iure nihil
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
                                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet debitis, est officia quod sequi sit ullam velit? Distinctio enim iste maxime recusandae sint! Animi in iure nihil
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
                                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet debitis, est officia quod sequi sit ullam velit? Distinctio enim iste maxime recusandae sint! Animi in iure nihil
                                            possimus quae
                                            similique.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-indigo-200 rounded-3xl transform rotate-2 h-full">
                    <div class="bg-bsl mx-1 my-3 rounded-3xl transform -rotate-3 p-3 shadow h-full -translate-y-4">
                        <div class="bg-white rounded-3xl p-8 shadow transform rotate-1  h-full">
                            <h3 class="text-3xl lg:text-5xl font-bold text-center mb-3">Web <span class="text-bsl">&</span> App <span class="font-light text-gray-700"> Development</span></h3>
                            <p class="text-center">Let´s give a new face to your online presence</p>
                            <div class="mb-10">
                                <img src="{{asset("img/web_2.png")}}" alt="Black Sun Labs logo"
                                     class="object-cover my-5 h-44 w-full object-top rounded-xl shadow">
                            </div>
                            <div class="space-y-10">
                                <div class="flex space-y-5 lg:space-x-4 flex-col lg:flex-row">
                                    <div class="lg:w-64 flex items-center justify-center">
                                        <img src="{{asset("img/services/responsive.svg")}}" alt="" class="object-contain w-16 mx-auto">
                                    </div>
                                    <div class="w-auto">
                                        <p class="font-bold text-xl">Full development <span class="font-normal">spectrum</span></p>
                                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet debitis, est officia quod sequi sit ullam velit? Distinctio enim iste maxime recusandae sint! Animi in iure nihil
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

                                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet debitis, est officia quod sequi sit ullam velit? Distinctio enim iste maxime recusandae sint! Animi in iure nihil
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
                                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet debitis, est officia quod sequi sit ullam velit? Distinctio enim iste maxime recusandae sint! Animi in iure nihil
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
                                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet debitis, est officia quod sequi sit ullam velit? Distinctio enim iste maxime recusandae sint! Animi in iure nihil
                                            possimus quae
                                            similique.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

{{--    <div class="divider-bsl ">--}}
{{--        <div class="h-5 bg-bsl"></div>--}}
{{--    </div>--}}

<!-- BENEFTIS ------------->
    <section class="min-h-screen bg-gray-50 p-8">
        <div class="container mx-auto ">
            <h2 class="inline-block text-6xl font-bold leading-tight"><span class="font-light text-gray-700">Our </span>
                Benefits</h2>
            <p class="text-gray-500 text-lg">We offer Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore,
                vero.</p>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 my-10">
                <div class="col-span-2 row-span-2 bg-indigo-200 rounded-3xl transform rotate-2 h-full">
                    <div class="bg-bsl mx-1 my-3 rounded-3xl transform -rotate-3 p-3 shadow h-full -translate-y-4">
                        <div class="bg-white rounded-3xl p-8 shadow transform rotate-1  h-full">
                            <div class="flex items-center justify-center space-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                                <h3 class="text-center text-4xl font-bold">BSL <span class="font-light text-gray-700"> User Panel</span></h3>
                            </div>
                            <p class="text-lg mt-2 text-center">Manage all aspects of your projects with us</p>
                            <p class="mt-10">We offer you access to our control panel where you can administrate all aspects of your projects with us. Deadlines, bugs, reports, maintenance and more.</p>
                            <div class="grid grid-cols-2 gap-10 mt-5">
                                <div>
                                    <p class="text-2xl mb-3 font-bold">Milestones <span class="font-normal">viewer</span></p>
                                    <p class="text-gray-700">We update our knowledge everyday. That is why we offer our services along side the best and newest technologies.</p>
                                </div>
                                <div>
                                    <p class="text-2xl mb-3 font-bold">Bug & Error <span class="font-normal">report system</span></p>
                                    <p class="text-gray-700">We update our knowledge everyday. That is why we offer our servicesalong side the best and newest technologies.</p>
                                </div>
                                <div>
                                    <p class="text-2xl mb-3 font-bold">Payments <span class="font-normal">timeline</span></p>
                                    <p class="text-gray-700">We update our knowledge everyday. That is why we offer our servicesalong side the best and newest technologies.</p>
                                </div>
                                <div>
                                    <p class="text-2xl mb-3 font-bold">Backups <span class="font-normal">managment</span></p>
                                    <p class="text-gray-700">We update our knowledge everyday. That is why we offer our servicesalong side the best and newest technologies.</p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-2xl mb-3 font-bold">Client <span class="font-normal">priority changes</span></p>
                                    <p class="text-gray-700">We update our knowledge everyday. That is why we offer our servicesalong side the best and newest technologies.</p>
                                </div>
                                <div class="col-span-2 text-center">
                                    <a href="" class="px-4 py-2 bg-bsl text-white rounded-full  hover:bg-indigo-400 transition shadow inline-block">
                                        View demo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 bg-indigo-200 rounded-3xl transform rotate-2 h-full">
                    <div class="bg-bsl mx-1 my-3 rounded-3xl transform -rotate-3 p-3 shadow h-full -translate-y-4">
                        <div class="bg-white rounded-3xl px-4 py-8 shadow transform rotate-1  h-full">
                            <h3 class="text-center text-3xl font-bold">
                                BSL <span class="font-light text-gray-700"> Management & maintenance</span></h3>

                        </div>
                    </div>
                </div>
                <div class="col-span-2 bg-indigo-200 rounded-3xl transform rotate-2 h-full">
                    <div class="bg-bsl mx-1 my-3 rounded-3xl transform -rotate-3 p-3 shadow h-full -translate-y-4">
                        <div class="bg-white rounded-3xl px-4 py-8 shadow transform rotate-1  h-full">
                            <h3 class="text-center text-3xl font-bold">
                                BSL <span class="font-light text-gray-700"> Periodic maintenance</span></h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHO ARE WE ------------->
    <section class="min-h-screen bg-bsl p-8 shadow-inner flex items-center mb-10 relative overflow-hidden">
        <div class="container mx-auto">
            <div>
                <img src="{{asset("img/logo2.svg")}}" alt="" class="absolute lg:inset-0 h-full opacity-20 top:0">
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-10">
                <div class="flex items-center justify-center p-8">
                    <img src="{{asset("img/team.svg")}}" alt="Black Sun Labs logo" class="object-contain">
                </div>
                <div class="flex flex-col items-center  justify-center h-full p-8">
                    <h2 class="text-6xl text-gray-50 text-left block font-bold mb-10"><span class="font-normal">Who are</span> we</h2>
                    <p class="text-xl text-gray-50"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi, aperiam architecto assumenda consectetur deleniti deserunt dicta dolorum et ex excepturi expedita
                        inventore ipsa itaque molestias
                        mollitia nam necessitatibus numquam officiis placeat quas, quasi quisquam recusandae sequi, sunt totam vero voluptatem! Accusantium ad aliquam amet animi aspernatur aut autem commodi cum debitis dicta
                        dolorem
                        dolorum eos exercitationem, fugiat, fugit illum inventore iusto libero numquam quaerat quia quo reprehenderit sequi sint, ullam. Accusantium amet aperiam cumque doloremque est excepturi impedit ipsa iure,
                        nihil
                        nisi nulla veniam? Ab, harum hic praesentium rem saepe sint velit. Aut dolore officiis optio quae, unde velit!</p>

                    <a href="#contact" class="bg-white px-4 py-2 rounded-full mt-10 font-bold hover:bg-indigo-200 transition "><span class="font-normal">Contact </span>BSL <span class="font-normal">Team</span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT ------------->
    <section class="min-h-screen bg-gray-50 p-8" id="contact">
        <div class="container mx-auto ">
            <h2 class="inline-block text-6xl font-bold leading-tight">Contact <span
                    class="font-light text-gray-700">Us </span></h2>
            <p class="text-gray-500 text-lg">We offer Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore,
                vero.</p>
            <form method="post" action="" class="my-10 grid grid-cols-1 gap-10">
                <div class="lg:col-span-3">
                    <p class="text-3xl mb-3 font-bold bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text">
                        Required <span class="font-normal">fields</span></p>
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
                <div class="lg:col-span-2">
                    <label for="" class="block text-lg mb-2">Tell us what you need</label>
                    <textarea name="" id="" cols="30" rows="5"
                              class="resize-none px-3 py-3 bg-white border text-lg rounded w-full"></textarea>
                    <p class="text-gray-500">The more details the better.</p>
                </div>
                <div class="lg:col-span-3">
                    <p class="text-3xl mb-3 font-bold bg-gradient-to-bl from-gray-600 to-gray-700 text-transparent bg-clip-text">
                        Optional <span class="font-normal">fields</span></p>
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
                <div class="lg:col-start-2">
                    <div class="text-center">
                        <a href="" class="px-4 py-2 bg-bsl text-white rounded-full  hover:bg-indigo-400 transition shadow inline-block">
                            Send message
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>


</body>

</html>
