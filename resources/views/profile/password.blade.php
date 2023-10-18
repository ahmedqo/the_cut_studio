@extends('shared.admin.base')
@section('title', __('Change Password'))

@section('content')
    <div class="flex flex-col gap-4">
        <div class="w-full flex items-center justify-between gap-2">
            <h1 class="font-bold text-2xl">{{ __('Change Password') }}</h1>
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
        <form id="form" action="{{ route('actions.password.patch') }}" method="POST"
            class="w-full grid grid-rows-1 grid-cols-1 lg:grid-cols-6 gap-4">
            @csrf
            <div class="flex flex-col gap-px lg:col-span-6">
                <label for="old_password" class="text-[#1d1d1d] font-bold text-sm">{{ __('Old Password') }}</label>
                <input x-password id="old_password" type="password" name="old_password"
                    placeholder="{{ __('Old Password') }}" />
            </div>
            <div class="flex flex-col gap-px lg:col-span-3">
                <label for="new_password" class="text-[#1d1d1d] font-bold text-sm">{{ __('New Password') }}</label>
                <input x-password id="new_password" type="password" name="new_password"
                    placeholder="{{ __('New Password') }}" />
            </div>
            <div class="flex flex-col gap-px lg:col-span-3">
                <label for="confirm_password" class="text-[#1d1d1d] font-bold text-sm">{{ __('Confirm Password') }}</label>
                <input x-password id="confirm_password" type="password" name="confirm_password"
                    placeholder="{{ __('Confirm Password') }}" />
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        x.Password();
        const save = document.querySelector("#save"),
            form = document.querySelector("#form");
        save.addEventListener("click", e => {
            form.submit();
        });
    </script>
@endsection
