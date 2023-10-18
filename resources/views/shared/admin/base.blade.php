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

<body class="flex flex-col flex-wrap lg:flex-row bg-light">
    @include('shared.admin.sidebar')
    <main class="flex flex-col w-full lg:w-[calc(100%-240px)] lg:flex-1">
        @include('shared.admin.header')
        <section class="w-full container mx-auto p-4">
            @yield('content')
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
        x.DataTable.opts.DataText.Search = "{{ ucwords(__('Search')) }}...";
        x.DataTable.opts.DataText.Filter = "{{ ucwords(__('Filter')) }}";
        x.DataTable.opts.DataText.Empty = "{{ __('No data found') }}";
        x.Select.opts.DataText.Search = "{{ ucwords(__('Search')) }}";
        x.DatePicker.opts.FullDay = {{ Core::lang('ar') ? 'true' : '3' }};
        x.Print.opts.css = ["{{ asset('css/index.css') }}?v={{ env('APP_VERSION') }}"];
        x.Print.opts.dir = "{{ Core::lang('ar') ? 'rtl' : 'ltr' }}";
        x.Print.opts.lang = "{{ app()->getLocale() }}";

        x.Toggle();
        x.Toggle.blur([{
            selector: "#menu",
            class: "left-0",
        }, {
            selector: "#dropdown",
            class: "opacity-0",
        }, {
            selector: "#language",
            class: "opacity-0",
        }, ]);
        ["DOMContentLoaded", "resize"].forEach(event => {
            window.addEventListener(event, () => {
                document.documentElement.style.setProperty('--vh', `${window.innerHeight}px`);
            });
        });
    </script>
    @yield('scripts')
</body>

</html>
