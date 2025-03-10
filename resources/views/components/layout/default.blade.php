<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>LaraJob</title>
</head>
<body class="bg-black text-slate-50 scroll-smooth">

  <header>
    <x-nav/>
  </header>

    <main class="w-full max-w-7xl mx-auto px-2">

        {{ $slot }}

    </main>

</body>
</html>