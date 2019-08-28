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
    <div id="app">
        <header-component></header-component>
        <nav-component></nav-component>
        <div>
            <aside>
                <user-component></user-component>
                <reserve-component></reserve-component>
                <category-component></category-component>
            </aside>
            <main>
                <recommend-component></recommend-component>
                <campaign-component></campaign-component>
            </main>
        </div>
        <footer-component></footer-component>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>