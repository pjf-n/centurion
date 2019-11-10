<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Laracasts')</title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <ul class="mt-5">
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/contact">Contact</a>
                <a href="/projects">Projects</a>
            </ul>
        </div>
    </div>
</div>

@yield('Content')
</body>
</html>