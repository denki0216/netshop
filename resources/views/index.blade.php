<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel-Demo</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app" class="container-fluid">
        <header-component></header-component>
        <nav-component></nav-component>
        <div class="row">
            <aside class="col-2">
                <category-component></category-component>
            </aside>
            <main class="col-10">
                <carousel-component></carousel-component>
                <recommend-component></recommend-component>
                <campaign-component></campaign-component>
            </main>
        </div>
        <footer-component></footer-component>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>