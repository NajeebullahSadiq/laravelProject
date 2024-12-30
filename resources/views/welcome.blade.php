<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Najib app</title>
</head>
<body>
    <p>{{$greating}}</p>
    <h1 class="header">This will be the header</h1>
    <a href="/home">The Home page</a>
</body>
</html>