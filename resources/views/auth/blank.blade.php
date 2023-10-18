@extends('shared.auth.base')
@section('title', __('Forgot Password'))

@section('content')
    <form action="{{ route('actions.blank.index') }}" method="POST" class="w-full gap-4 flex flex-col">
        @csrf
        <p class="font-bold text-sm text-[#1d1d1d]">
            {{ __('Did you forget your password? No problem. Just tell us your email address, and we will send you a link that will allow you to choose a new password.') }}
        </p>
        <div class="flex flex-col gap-px">
            <label for="email" class="text-[#1d1d1d] font-bold text-sm">{{ __('Email') }}</label>
            <input id="email" type="email" name="email" placeholder="{{ __('Email') }}"
                class="x-bg-custom text-[#1d1d1d] border-[#d1d1d1] focus-within:outline-primary p-2 text-base border rounded-md focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2" />
        </div>
        <button
            class="flex gap-2 items-center font-bold text-sm rounded-md bg-primary text-[#fcfcfc] relative py-3 px-5 lg:px-3 lg:py-2 outline-none hover:!text-[#1d1d1d] hover:bg-accent focus-within:!text-[#1d1d1d] focus-within:bg-accent ms-auto">
            <svg class="block w-5 h-5 pointer-events-none" fill="currentcolor" viewBox="0 -960 960 960">
                <path
                    d="M382-396 100-505q-15-5-22-17.5T71-548q0-14 7-25t22-18l678-260q13-5 26-2t22 12q10 11 13.5 23.5T838-791L577-113q-6 16-17 22.5T535-84q-14 0-26.5-7T491-114L382-396Z" />
            </svg>
            <span class="hidden lg:block">{{ __('Send') }}</span>
        </button>
    </form>
@endsection
