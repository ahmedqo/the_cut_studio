@extends('shared.guest.base')
@section('title', __('Consulting'))

@section('content')
    <div class="bg-core lg:py-8">
        <section class="2xl:container mx-auto p-4 flex flex-col lg:flex-row gap-4 lg:gap-8">
            <form action="{{ route('actions.consults.store') }}" class="w-full flex flex-col gap-4" method="post">
                @csrf
                <div class="flex flex-col items-center my-8">
                    <h1 class="font-bold text-3xl lg:text-5xl text-grey">{{ __('Project Consult') }}</h1>
                </div>
                <div class="flex flex-col gap-px">
                    <label for="name" class="text-[#1d1d1d] font-bold text-sm">{{ __('Name') }}</label>
                    <input id="name" type="text" name="name" placeholder="{{ __('Name') }}"
                        class="x-bg-custom border-[#d1d1d1] text-[#1d1d1d] focus-within:outline-primary p-2 text-base border rounded-md focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2" />
                </div>
                <div class="flex flex-col gap-px">
                    <label for="email" class="text-[#1d1d1d] font-bold text-sm">{{ __('Email') }}</label>
                    <input id="email" type="email" name="email" placeholder="{{ __('Email') }}"
                        class="x-bg-custom border-[#d1d1d1] text-[#1d1d1d] focus-within:outline-primary p-2 text-base border rounded-md focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2" />
                </div>
                <div class="flex flex-col gap-px">
                    <label for="phone" class="text-[#1d1d1d] font-bold text-sm">{{ __('Phone') }}</label>
                    <input id="phone" type="tel" name="phone" placeholder="{{ __('Phone') }}"
                        class="x-bg-custom border-[#d1d1d1] text-[#1d1d1d] focus-within:outline-primary p-2 text-base border rounded-md focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2" />
                </div>
                <div class="flex flex-col gap-px">
                    <label for="type" class="text-[#1d1d1d] font-bold text-sm">{{ __('Type') }}</label>
                    <select x-select name="type" placeholder="{{ __('Type') }}">
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ ucfirst($type->name) }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col gap-px">
                    <label for="date" class="text-[#1d1d1d] font-bold text-sm">{{ __('Date') }}</label>
                    <input x-date id="date" type="date" name="date" disabled-days="6"
                        placeholder="{{ __('Date') }}" />
                </div>
                <div class="flex flex-col gap-px">
                    <label for="hour" class="text-[#1d1d1d] font-bold text-sm">{{ __('Hour') }}</label>
                    <div class="grid grid-rows-1 grid-cols-2 md:flex md:justify-between gap-2">
                        <input x-switch label="4 - 5" type="radio" value="16:00:00" name="hour" />
                        <input x-switch label="5 - 6" type="radio" value="17:00:00" name="hour" />
                        <input x-switch label="6 - 7" type="radio" value="18:00:00" name="hour" />
                        <input x-switch label="7 - 8" type="radio" value="19:00:00" name="hour" />
                    </div>
                </div>
                <button
                    class="flex w-full gap-2 items-center justify-center font-bold text-sm rounded-md bg-primary text-[#fcfcfc] relative py-3 px-5 lg:px-3 lg:py-2 outline-none hover:!text-[#1d1d1d] hover:bg-accent focus-within:!text-[#1d1d1d] focus-within:bg-accent">
                    <span>{{ __('Send') }}</span>
                </button>
            </form>
            <div class="w-full"></div>
        </section>
    </div>
@endsection

@section('scripts')
    <script>
        const times = Array.from(document.querySelectorAll('[name="hour"]'));
        document.querySelector('#date').addEventListener("x-change", async e => {
            const route = "{{ route('views.consults.times', 'date') }}".replace("date", e.detail.date);

            const req = await fetch(route);
            const res = await req.json();
            const hours = res.data || [];
            times.forEach(time => {
                if (hours.includes(time.value)) time.setAttribute("disabled", "");
                else time.removeAttribute("disabled");
            });
        });
    </script>
@endsection
