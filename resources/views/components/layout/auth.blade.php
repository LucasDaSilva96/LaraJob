<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Schibsted+Grotesk:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black h-full text-slate-50 scroll-smooth font-hanken-grotesk">

    <header class="w-full py-4 flex items-center justify-between gap-2 border-b border-neutral-800 px-4">
        <a href="/" class="transition-colors hover:text-blue-500">Home</a>
    </header>

    <main class="w-full max-w-7xl mx-auto p-2">

        {{ $slot }}

    </main>

</body>
</html>