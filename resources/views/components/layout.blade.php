<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pracitce apps</title>
    @Vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav>
            <h1>The Practive project</h1>
            <a href="/home" class="btn">All Tasks</a><br>
            <a href="/create" class="btn">Create new Tasks</a>
        </nav>
    </header>

    <main class="container">
        {{$slot}}
    </main>
</body>
</html>