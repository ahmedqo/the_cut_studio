<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ Core::lang('ar') ? 'rtl' : 'ltr' }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}?v={{ env('APP_VERSION') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ env('APP_VERSION') }}" />
    <title>@yield('title') | The Cut Studio</title>
</head>

<body>
    <header data-aos="fade-down" id="home" class="w-full">
        @include('shared.guest.nav')
        @yield('header')
    </header>
    <main class="w-full">
        @yield('content')
    </main>
    @include('shared.guest.footer')
    <script src="{{ asset('js/x.elements.js') }}?v={{ env('APP_VERSION') }}"></script>
    <script src="{{ asset('js/index.js') }}?v={{ env('APP_VERSION') }}"></script>
    @if (Session::has('message'))
        <script>
            const data = {!! json_encode(Session::all()) !!};
            x.Toaster(data.message, data.type);
        </script>
    @endif
    <script>
        x.DatePicker.opts.DataText.Days = ["{{ ucwords(__('sunday')) }}", "{{ ucwords(__('monday')) }}",
            "{{ ucwords(__('tuesday')) }}",
            "{{ ucwords(__('wednesday')) }}", "{{ ucwords(__('thursday')) }}",
            "{{ ucwords(__('friday')) }}",
            "{{ ucwords(__('saturday')) }}"
        ];
        x.DatePicker.opts.DataText.Months = ["{{ ucwords(__('january')) }}",
            "{{ ucwords(__('february')) }}",
            "{{ ucwords(__('march')) }}", "{{ ucwords(__('april')) }}",
            "{{ ucwords(__('may')) }}",
            "{{ ucwords(__('june')) }}", "{{ ucwords(__('july')) }}",
            "{{ ucwords(__('august')) }}",
            "{{ ucwords(__('september')) }}", "{{ ucwords(__('october')) }}",
            "{{ ucwords(__('november')) }}",
            "{{ ucwords(__('december')) }}"
        ];
        x.Select.opts.DataText.Search = "{{ ucwords(__('Search')) }}";
        x.DataTable.opts.DataText.Search = "{{ ucwords(__('Search')) }}...";
        x.DataTable.opts.DataText.Empty = "{{ __('No data found') }}";
        x.DatePicker.opts.FullDay = {{ Core::lang('ar') ? 'true' : '3' }};
        x.Toggle().Select().DatePicker().Switch();
        AOS.init({
            once: true,
            offset: 0,
        });
    </script>
    @yield('scripts')
</body>

</html>
