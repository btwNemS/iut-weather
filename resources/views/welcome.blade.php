
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IUT Weather</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-black">

    <header class="p-4">
        <h1 class="text-2xl font-bold">IUT Weather</h1>

        <nav class="mt-4 flex gap-4">
            <a href="{{ route('login') }}" class="underline">
                Login
            </a>

            <a href="{{ route('register') }}" class="underline">
                Register
            </a>
        </nav>
    </header>

    <main class="p-4">
        <h2 class="text-xl font-bold">Accueil</h2>

        <p class="mt-2">
            Bienvenue sur IUT Weather.
        </p>
    </main>

</body>
</html>
