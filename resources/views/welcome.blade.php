
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>


    <h1 className="text-3xl font-bold underline">
        Hello world!
    </h1>



























    @if (Route::has('login'))
    <nav class="-mx-3 flex flex-1 justify-end">
        @auth
            <a
                href="{{ url('/dashboard') }}"

            >
                Dashboard
            </a>
        @else
            <a
                href="{{ route('login') }}"

            >
                Log in
            </a>

            @if (Route::has('register'))
                <a
                    href="{{ route('register') }}"

                >
                    Register
                </a>
            @endif
        @endauth
    </nav>
@endif

</body>
</html>


