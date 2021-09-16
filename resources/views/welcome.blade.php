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
</head>
<body class="font-serif text-gray-900">
<header class="h-20" id="navbar">
    <nav class="container mx-auto h-full">
        <ul class="grid grid-cols-5 gap-4 text-center items-center h-20 text-lg">
            <li class=""><a href="#">About us</a></li>
            <li class=""><a href="#">Services</a></li>
            <li class=""><a href="#">Portfolio</a></li>
            <li class=""><a href="#">Contact</a></li>
            <li class=""><a href="#">Clients</a></li>

        </ul>
    </nav>
</header>
<main class="container mx-auto">
    <section class="h-screen" id="home_page">
        <div class="flex items-center h-40 space-x-10 p-20 mt-8">
            <img src="{{asset("img/logo.svg")}}" alt="Black Sun Labs logo" class="w-28 inline-block">
            <div>
                <h1 class="text-6xl font-bold inline-block text-right mb-2">Black Sun <span class="font-thin">Labs</span></h1>
                <p class="font-mono text-lg">{Web and software development}</p>
            </div>
        </div>
        <div class="mt-20 ">
            <p class="text-7xl text-right inline-block">
                <span class="text-7xl text-right font-light text-gray-300">array[1] = </span>
                <span class="text-yellow-400 "> ["</span>
                Let's work together and create something unique for your needs!
                <span class="text-yellow-400 "> "]</span>
            </p>
            <p class="font-mono text-lg text-right mt-3">{Creating solutions since 2006}</p>
        </div>
        <div class=" mt-20 text-center space-x-10">
            <a href="#" class="bg-yellow-400 p-4 text-3xl rounded">See more</a>
            <a href="#" class="bg-yellow-400 p-4 text-3xl rounded">Write to us</a>
        </div>
    </section>
    <section class="h-screen" id="services">
        <h2 class="text-7xl mb-16"><span class=" text-gray-200 ">$</span> Services <span class="cursor_fx font-extrabold text-yellow-400">|</span></h2>
        <div class="grid grid-cols-3 gap-4 items-center">
            <div>
                <img src="{{asset("img/web_design.svg")}}" alt="web design svg">
            </div>
            <div class="col-span-2 px-5">
                <h3 class="text-6xl">Web<span class="font-light text-gray-300">_</span>development<span class="font-light text-gray-300">();</span></h3>

                <h4 class="mt-5 text-yellow-400  text-3xl">FRONTEND DESIGN</h4>
                <h5 class="font-mono text-lg">{Responsive - Innovative - SEO - Compatible}</h5>
                <p class="mt-1 text-xl  ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, autem consequatur cupiditate delectus deserunt dolor ea eaque est, impedit ipsum
                    itaque
                    maxime nam numquam quisquam sed velit voluptatibus. Fugit, optio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet, assumenda aut consequatur
                    consequuntur, eveniet fugiat in incidunt magni, </p>
                <h4 class="mt-5 text-yellow-400  text-3xl">BACKEND DEVELOPMENT</h4>
                <h5 class="font-mono text-lg">{Robust - Secure - No Shorcuts - Escalable}</h5>
                <p class="mt-1 text-xl  ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, autem consequatur cupiditate delectus deserunt dolor ea eaque est, impedit ipsum
                    itaque
                    maxime nam numquam quisquam sed velit voluptatibus. Fugit, optio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet, assumenda aut consequatur
                    consequuntur, eveniet fugiat in incidunt magni, </p>
                <h4 class="mt-5 text-yellow-400  text-3xl">BRAND CREATION</h4>
                <h5 class="font-mono text-lg">{Respect - Adapt - Represent - Success}</h5>
                <p class="mt-1 text-xl  ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, autem consequatur cupiditate delectus deserunt dolor ea eaque est, impedit ipsum
                    itaque
                    maxime nam numquam quisquam sed velit voluptatibus. Fugit, optio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet, assumenda aut consequatur
                    consequuntur, eveniet fugiat in incidunt magni, </p>


            </div>
        </div>


    </section>

</main>


</body>
<script>
    var cursors = document.getElementsByClassName("cursor_fx");
    console.log(cursors);
    for (cursor in cursors) {
        if (cursor.style.display === "none") {
            cursor.style.display = "block";
        } else {
            cursor.style.display = "none";
        }
    }
</script>
</html>
