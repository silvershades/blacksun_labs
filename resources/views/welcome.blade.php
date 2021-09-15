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
    <div class="flex items-center h-40 space-x-10 p-20 mt-8">
        <img src="{{asset("img/logo.svg")}}" alt="Black Sun Labs logo" class="w-36 inline-block">
        <div>
            <h1 class="text-6xl font-bold inline-block text-right mb-2">Black Sun <span class="font-thin">Labs</span></h1>
            <p class="font-mono text-lg">{Web and software development;}</p>
        </div>
    </div>
    <div class="mt-20">

        <p class="text-7xl text-right inline-block">
            <span class="text-7xl text-right inline-block font-light text-gray-500">array[1] = </span>
            <span class="text-yellow-500 "> ["</span>
            Let's work together and create something unique for your needs!
            <span class="text-yellow-500 "> "]</span>
        </p>
        <p class="font-mono text-lg text-right mt-3">{Creating solutions since 2006}</p>
    </div>
    <div class="grid grid-cols-2 mt-20 text-center">
        <div><a href="#" class=" p-3 rounded-sm text-2xl"><span class="text-gray-500 font-mono">execute</span> Services<span class="text-gray-500">()</span></a></div>
        <div><a href="#" class=" p-3 rounded-sm text-2xl"><span class="text-gray-500 font-mono">execute</span> Contact_Us<span class="text-gray-500">()</span></a></div>

    </div>

</main>


</body>
</html>
