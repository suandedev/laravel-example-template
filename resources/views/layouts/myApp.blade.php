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
<body class="font-sans antialiased ">

<section class="h-screen flex flex-col">
    <header class="flex flex-col md:flex md:flex-row ">
        <main class="bg-indigo-900 flex justify-between md:justify-center md:w-2/12 p-4">
            <x-logo/>
            <x-menu-icon/>
        </main>
        <section class="bg-indigo-50 flex justify-between md:w-10/12 py-2 px-4 md:px-10 items-center">
            <x-header-menu/>
        </section>
    </header>
    <main class="flex flex-grow overflow-hidden">
        <x-nav-menu/>
        <section class="bg-indigo-100 md:w-10/12 px-4 py-10 md:p-10 overflow-y-auto">

            {{$slot}}

        </section>
    </main>
</section>

</body>
</html>
