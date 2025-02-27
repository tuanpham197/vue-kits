<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @routes
        @vite(['resources/js/app.ts'])
        @inertiaHead

        <script>
        if (
            localStorage.getItem("dark-mode") === "false" ||
            !("dark-mode" in localStorage)
        ) {
            document.querySelector("html").classList.remove("dark");
        } else {
            document.querySelector("html").classList.add("dark");
        }
        </script>
        <script
        defer
        data-domain="preview.cruip.com,rollup.cruip.com"
        src="https://plausible.cruip.com/js/script.js"
        ></script>
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
