<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Home Page made</title>
</head>
<body>

<section class="h-screen flex flex-col">
    <header class="flex flex-col md:flex md:flex-row ">
        <main class="bg-indigo-900 flex justify-center md:w-2/12 p-4">
            <a href="#" class="flex">
                <img class="w-10 mr-2" src="{{asset('img/bubble-chat.png')}}" alt="chat logo">
                <span class="text-gray-100 font-semibold text-3xl uppercase">chat</span>
            </a>
        </main>
        <section class="bg-indigo-50 flex justify-between md:w-10/12 px-10 items-center">
            <span class="block text-gray-600 text-lg capitalize">sorporation</span>
            <a href="#" class="block text-gray-600 capitalize">
                john doe
                <img class="w-5 inline-block" src="{{asset('img/next (1).png')}}" alt="">
            </a>
        </section>
    </header>
    <main class="flex flex-grow overflow-hidden">
        <ul class="bg-indigo-800 hidden md:block text-center py-8 md:w-2/12 overflow-y-auto">
            <li class="block mx-auto py-4 hover:bg-indigo-700">
                <a class="" href="#">
                    <img class="w-5 mx-1  inline-block" src="{{asset('img/home (3).png')}}" alt="home">
                    <span class=" text-gray-100 capitalize ">dashboard</span>
                </a>
            </li>
            <li class="block mx-auto py-4 hover:bg-indigo-700">
                <a class="" href="#">
                    <img class="w-5 mx-2 inline-block" src="{{asset('img/home (3).png')}}" alt="home">
                    <span class="text-gray-100">dashboard</span>
                </a>
            </li>
            <li class="block mx-auto py-4 hover:bg-indigo-700">
                <a class="" href="#">
                    <img class="w-5 mx-2 inline-block" src="{{asset('img/home (3).png')}}" alt="home">
                    <span class="text-gray-100">dashboard</span>
                </a>
            </li>
            <li class="block mx-auto py-4 hover:bg-indigo-700">
                <a class="" href="#">
                    <img class="w-5 mx-2 inline-block" src="{{asset('img/home (3).png')}}" alt="home">
                    <span class="text-gray-100">dashboard</span>
                </a>
            </li>
        </ul>
        <section class="bg-indigo-100 md:w-10/12 p-10">
            <h1 class="text-3xl font-semibold text-gray-800 capitalize mb-4">
                dashboard
            </h1>
            <span class="block mb-3 text-gray-700">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, quasi.
            </span>
        </section>
    </main>
</section>

</body>
</html>
