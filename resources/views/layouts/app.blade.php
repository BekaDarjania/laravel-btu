<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $Title ?? 'No Title' }}</title>
    @if ($Theme === 'light')
        <style>
            :root {
                --text: #000;
                --bg: #fff;
            }

            body {
                background-color: var(--bg);
                color: var(--text);
            }

        </style>
    @else
        <style>
            :root {
                --text: #fff;
                --bg: #000;
            }

            body {
                background-color: var(--bg);
                color: var(--text);
            }

        </style>
    @endif
</head>

<body>
    <header>
        @if ($Theme === 'light')
            <img id="Logo" src="{{ asset('img/LogoNew_black_text.svg') }}" height="80px">
        @else
            <img id="Logo" src="{{ asset('img/LogoNew_white_text.svg') }}" height="80px">
        @endif

        <ul>
            <li><a href="/home/{{ $Theme }}/{{ $ShowFooter }}">home</a></li>
            <li><a href="/about/{{ $Theme }}/{{ $ShowFooter }}">about</a></li>
            <li><a href="/contact/{{ $Theme }}/{{ $ShowFooter }}">contact</a></li>
        </ul>
    </header>

    <main>
        @yield('content')
    </main>

    @if ($ShowFooter == 'on')
        <footer>
            @yield('footer')
        </footer>
    @endif
</body>

</html>
