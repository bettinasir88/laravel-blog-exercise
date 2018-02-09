<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/side-menu.css">
</head>
<body>

<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="{{ route('admin.dashboard') }}">Blog admin</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="{{ route('admin.posts.index') }}" class="pure-menu-link">Posts</a></li>
            </ul>
        </div>
    </div>

    @yield('content')

</div>

</body>
</html>