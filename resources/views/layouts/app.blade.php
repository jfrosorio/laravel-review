<!doctype HTML>
<html>
    <head>
        <title>@yield('page_title')</title>
    </head>

    <body>
        <h1>@yield('page_title')</h1>

        <nav>
            <ul>
                <li><a href="{{ route('homepage') }}">Homepage</a></li>
                <li><a href="{{ route('about-us') }}">About us</a></li>
                <li><a href="{{ route('about-us') }}">Products</a></li>
                <li><a href="{{ route('contacts') }}">Contacts</a></li>
            </ul>
        </nav>

        <p>Some leading text...</p>

        @yield('content')

        <p>Some more text...</p>
    </body>
</html>
