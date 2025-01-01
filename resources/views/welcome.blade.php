<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Najib app</title>
    @Vite('resources/css/app.css')
</head>

<body class="text-center px-8 py-12">

    <h1>Welcom the the Fast Tasks</h1>
    <p>Clicks the button below the redirect to Tasks</p>

    <a href="/home" class="btn mt-4 inline-block">Finds all the Tasks</a>
</body>

</html>