@extends('shared.auth.base')
@section('title', __('Login'))

@section('content')
    <form action="{{ route('actions.login.index') }}" method="POST" class="w-full gap-4 flex flex-col">
        @csrf
        <div class="flex flex-col gap-px">
            <label for="email" class="text-[#1d1d1d] font-bold text-sm">{{ __('Email') }}</label>
            <input id="email" type="email" name="email" placeholder="{{ __('Email') }}"
                class="x-bg-custom text-[#1d1d1d] border-[#d1d1d1] focus-within:outline-primary p-2 text-base border rounded-md focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2" />
        </div>
        <div class="flex flex-col gap-px">
            <label for="password" class="text-[#1d1d1d] font-bold text-sm">{{ __('Password') }}</label>
            <input x-password id="password" type="password" name="password" placeholder="{{ __('Password') }}" />
        </div>
        <div class="flex gap-4 items-center">
            <a href="{{ route('views.blank.index') }}"
                class="font-bold text-sm text-[#1d1d1d] outline-none hover:text-primary focus-within:text-primary">
                {{ __('Forgot Password?') }}
            </a>
            <button type="submit"
                class="flex gap-2 items-center font-bold text-sm rounded-md bg-primary text-[#fcfcfc] relative py-3 px-5 lg:px-3 lg:py-2 outline-none hover:!text-[#1d1d1d] hover:bg-accent focus-within:!text-[#1d1d1d] focus-within:bg-accent ms-auto">
                <svg class="block w-5 h-5 pointer-events-none" fill="currentcolor" viewBox="0 -960 960 960">
                    <path
                        d="M360-306q-13-15-13.5-33.25T360-371l63-63H134q-19.775 0-32.387-13.36Q89-460.719 89-479.86q0-20.14 12.613-32.64Q114.225-525 134-525h287l-64-67q-14-12.133-13.5-30.014t14.714-31.933Q370.661-666 389.705-665.5 408.75-665 424-653l142 142q5 6.16 9 14.813 4 8.654 4 17.4 0 8.747-4 17.267T566-448L424-305q-14 12-32 11.5T360-306ZM528-97q-19.775 0-32.388-13.36Q483-123.719 483-142.86q0-20.14 12.612-32.64Q508.225-188 528-188h253v-584H528q-19.775 0-32.388-12.86Q483-797.719 483-817.86q0-19.14 12.612-32.64Q508.225-864 528-864h253q36 0 63.5 27.5T872-772v584q0 37-27.5 64T781-97H528Z" />
                </svg>
                <span class="hidden lg:block">{{ __('Login') }}</span>
            </button>
        </div>
    </form>
@endsection
