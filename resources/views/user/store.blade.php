@extends('shared.admin.base')
@section('title', __('Create User'))

@section('content')
    <div class="flex flex-col gap-4">
        <div class="w-full flex items-center justify-between gap-2">
            <h1 class="font-bold text-2xl">{{ __('Create User') }}</h1>
            <div
                class="lg:w-max fixed bottom-0 left-0 right-0 lg:relative lg:bottom-auto lg:left-auto lg:right-auto z-[5] lg:z-0 pointer-events-none">
                <div class="container mx-auto lg:w-max p-4 lg:p-0">
                    <div
                        class="w-max flex gap-[2px] flex-col lg:flex-row ms-auto pointer-events-auto rounded-md overflow-hidden">
                        <button id="save"
                            class="flex gap-2 items-center font-black text-sm rounded-sm bg-purple-400 text-gray-50 relative p-4 lg:px-3 lg:py-2 outline-none hover:!text-[#1d1d1d] hover:bg-purple-300 focus-within:!text-[#1d1d1d] focus-within:bg-purple-300">
                            <svg class="block w-5 h-5 pointer-events-none" fill="currentcolor" viewBox="0 -960 960 960">
                                <path
                                    d="M190-99q-37.125 0-64.062-26.938Q99-152.875 99-190v-580q0-37.125 26.938-64.562Q152.875-862 190-862h464q18.816 0 36.024 7.543Q707.232-846.913 719-834l115 115q12.913 11.768 20.457 28.976Q862-672.816 862-654v464q0 37.125-27.438 64.062Q807.125-99 770-99H190Zm289.647-157Q522-256 552-285.647q30-29.647 30-72T552.353-430q-29.647-30-72-30T408-430.353q-30 29.647-30 72T407.647-286q29.647 30 72 30ZM290-577h263q18.375 0 31.688-12.625Q598-602.25 598-623v-48q0-19.775-13.312-32.388Q571.375-716 553-716H290q-20.75 0-33.375 12.612Q244-690.775 244-671v48q0 20.75 12.625 33.375T290-577Z" />
                            </svg>
                            <span class="hidden lg:block">{{ __('Save') }}</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <form id="form" action="{{ route('actions.users.store') }}" method="POST"
            class="w-full grid grid-rows-1 grid-cols-1 lg:grid-cols-6 gap-4">
            @csrf
            <div class="flex flex-col gap-px lg:col-span-2">
                <label for="first_name" class="text-[#1d1d1d] font-bold text-sm">{{ __('First Name') }}</label>
                <input id="first_name" type="text" name="first_name" placeholder="{{ __('First Name') }}"
                    value="{{ old('first_name') }}"
                    class="x-bg-custom text-[#1d1d1d] border-[#d1d1d1] focus-within:outline-primary p-2 text-base border rounded-md focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2" />
            </div>
            <div class="flex flex-col gap-px lg:col-span-2">
                <label for="last_name" class="text-[#1d1d1d] font-bold text-sm">{{ __('Last Name') }}</label>
                <input id="last_name" type="text" name="last_name" placeholder="{{ __('Last Name') }}"
                    value="{{ old('last_name') }}"
                    class="x-bg-custom text-[#1d1d1d] border-[#d1d1d1] focus-within:outline-primary p-2 text-base border rounded-md focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2" />
            </div>
            <div class="flex flex-col gap-px lg:col-span-2">
                <label for="gender" class="text-[#1d1d1d] font-bold text-sm">{{ __('Gender') }}</label>
                <select x-select id="gender" name="gender" placeholder="{{ __('Gender') }}">
                    @foreach (Core::gender() as $gender)
                        <option value="{{ $gender }}" {{ $gender == old('gender') ? 'selected' : '' }}>
                            {{ ucwords(__($gender)) }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col gap-px lg:col-span-2">
                <label for="birth_date" class="text-[#1d1d1d] font-bold text-sm">{{ __('Birth Date') }}</label>
                <input x-date id="birth_date" type="text" name="birth_date" placeholder="{{ __('Birth Date') }}"
                    value="{{ old('birth_date') }}" />
            </div>
            <div class="flex flex-col gap-px lg:col-span-2">
                <label for="nationality" class="text-[#1d1d1d] font-bold text-sm">{{ __('Nationality') }}</label>
                <input id="nationality" type="text" name="nationality" placeholder="{{ __('Nationality') }}"
                    value="{{ old('nationality') }}"
                    class="x-bg-custom text-[#1d1d1d] border-[#d1d1d1] focus-within:outline-primary p-2 text-base border rounded-md focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2" />
            </div>
            <div class="flex flex-col gap-px lg:col-span-2">
                <label for="identity" class="text-[#1d1d1d] font-bold text-sm">{{ __('Identity') }}</label>
                <input id="identity" type="text" name="identity" placeholder="{{ __('Identity') }}"
                    value="{{ old('identity') }}"
                    class="x-bg-custom text-[#1d1d1d] border-[#d1d1d1] focus-within:outline-primary p-2 text-base border rounded-md focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2" />
            </div>
            <div class="flex flex-col gap-px lg:col-span-3">
                <label for="email" class="text-[#1d1d1d] font-bold text-sm">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" placeholder="{{ __('Email') }}"
                    value="{{ old('email') }}"
                    class="x-bg-custom text-[#1d1d1d] border-[#d1d1d1] focus-within:outline-primary p-2 text-base border rounded-md focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2" />
            </div>
            <div class="flex flex-col gap-px lg:col-span-3">
                <label for="phone" class="text-[#1d1d1d] font-bold text-sm">{{ __('Phone') }}</label>
                <input id="phone" type="tel" name="phone" placeholder="{{ __('Phone') }}"
                    value="{{ old('phone') }}"
                    class="x-bg-custom text-[#1d1d1d] border-[#d1d1d1] focus-within:outline-primary p-2 text-base border rounded-md focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2" />
            </div>
            <div class="flex flex-col gap-px lg:col-span-6">
                <label for="address" class="text-[#1d1d1d] font-bold text-sm">{{ __('Address') }}</label>
                <input id="address" type="text" name="address" placeholder="{{ __('Address') }}"
                    value="{{ old('address') }}"
                    class="x-bg-custom text-[#1d1d1d] border-[#d1d1d1] focus-within:outline-primary p-2 text-base border rounded-md focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2" />
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        x.Select().DatePicker();
        const save = document.querySelector("#save"),
            form = document.querySelector("#form");
        save.addEventListener("click", e => {
            form.submit();
        });
    </script>
@endsection
