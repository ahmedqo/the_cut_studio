<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ Core::lang('ar') ? 'rtl' : 'ltr' }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}?v={{ env('APP_VERSION') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ env('APP_VERSION') }}" />
    <title>@yield('title')</title>
</head>

<body class="flex flex-col flex-wrap lg:flex-row bg-core">
    <main class="p-4 w-full h-screen flex items-center justify-center">
        <section class="container mx-auto flex flex-col lg:w-[500px] gap-4">
            <a href="{{ route('views.guest.index') }}">
                <img title="logo-image" alt="logo-image" src="{{ asset('img/logo.png') }}?v={{ env('APP_VERSION') }}"
                    class="block w-32 mx-auto" />
            </a>
            <div class="flex flex-col gap-6 w-full p-4 bg-light rounded-md shadow-md">
                @yield('content')
            </div>
        </section>
    </main>
    <script src="{{ asset('js/x.elements.js') }}?v={{ env('APP_VERSION') }}"></script>
    <script src="{{ asset('js/index.js') }}?v={{ env('APP_VERSION') }}"></script>
    @if (Session::has('message'))
        <script>
            const data = {!! json_encode(Session::all()) !!};
            x.Toaster(data.message, data.type);
        </script>
    @endif
    <script>
        x.Password().Toggle();
    </script>
    @yield('scripts')
</body>

</html>
