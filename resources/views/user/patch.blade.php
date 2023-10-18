@extends('shared.admin.base')
@section('title', __('Update User') . ' #' . $data->id)

@section('content')
    <div class="flex flex-col gap-4">
        <div class="w-full flex items-center justify-between gap-2">
            <h1 class="font-bold text-2xl">{{ __('Update User') }} #{{ $data->id }}</h1>
            <div
                class="lg:w-max fixed bottom-0 left-0 right-0 lg:relative lg:bottom-auto lg:left-auto lg:right-auto z-[5] lg:z-0 pointer-events-none">
                <div class="container mx-auto lg:w-max p-4 lg:p-0">
                    <div
                        class="w-max flex gap-[2px] flex-col lg:flex-row ms-auto pointer-events-auto rounded-md overflow-hidden">
                        <form action="{{ route('actions.users.clear', $data->id) }}" method="POST">
                            @csrf
                            <button type="submit" title="clear"
                                class="flex gap-2 items-center font-black text-sm rounded-sm bg-red-400 text-gray-50 relative p-4 lg:px-3 lg:py-2 outline-none hover:!text-[#1d1d1d] hover:bg-red-300 focus-within:!text-[#1d1d1d] focus-within:bg-red-300">
                                <svg class="block w-5 h-5 pointer-events-none" fill="currentcolor" viewBox="0 -960 960 960">
                                    <path
                                        d="M253-99q-36.462 0-64.231-26.775Q161-152.55 161-190v-552h-11q-18.75 0-31.375-12.86Q106-767.719 106-787.36 106-807 118.613-820q12.612-13 31.387-13h182q0-20 13.125-33.5T378-880h204q19.625 0 33.312 13.75Q629-852.5 629-833h179.921q20.279 0 33.179 13.375 12.9 13.376 12.9 32.116 0 20.141-12.9 32.825Q829.2-742 809-742h-11v552q0 37.45-27.069 64.225Q743.863-99 706-99H253Zm104-205q0 14.1 11.051 25.05 11.051 10.95 25.3 10.95t25.949-10.95Q431-289.9 431-304v-324q0-14.525-11.843-26.262Q407.313-666 392.632-666q-14.257 0-24.944 11.738Q357-642.525 357-628v324Zm173 0q0 14.1 11.551 25.05 11.551 10.95 25.8 10.95t25.949-10.95Q605-289.9 605-304v-324q0-14.525-11.545-26.262Q581.91-666 566.93-666q-14.555 0-25.742 11.738Q530-642.525 530-628v324Z" />
                                </svg>
                                <span class="hidden lg:block">{{ __('Delete') }}</span>
                            </button>
                        </form>
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
        <form id="form" action="{{ route('actions.users.patch', $data->id) }}" method="POST"
            class="w-full grid grid-rows-1 grid-cols-1 lg:grid-cols-6 gap-4">
            @csrf
            <div class="flex flex-col gap-px lg:col-span-2">
                <label for="first_name" class="text-[#1d1d1d] font-bold text-sm">{{ __('First Name') }}</label>
                <input id="first_name" type="text" name="first_name" placeholder="{{ __('First Name') }}"
                    value="{{ $data->first_name }}"
                    class="x-bg-custom text-[#1d1d1d] border-[#d1d1d1] focus-within:outline-primary p-2 text-base border rounded-md focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2" />
            </div>
            <div class="flex flex-col gap-px lg:col-span-2">
                <label for="last_name" class="text-[#1d1d1d] font-bold text-sm">{{ __('Last Name') }}</label>
                <input id="last_name" type="text" name="last_name" placeholder="{{ __('Last Name') }}"
                    value="{{ $data->last_name }}"
                    class="x-bg-custom text-[#1d1d1d] border-[#d1d1d1] focus-within:outline-primary p-2 text-base border rounded-md focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2" />
            </div>
            <div class="flex flex-col gap-px lg:col-span-2">
                <label for="gender" class="text-[#1d1d1d] font-bold text-sm">{{ __('Gender') }}</label>
                <select x-select id="gender" name="gender" placeholder="{{ __('Gender') }}">
                    @foreach (Core::gender() as $gender)
                        <option value="{{ $gender }}" {{ $gender == $data->gender ? 'selected' : '' }}>
                            {{ ucwords(__($gender)) }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col gap-px lg:col-span-2">
                <label for="birth_date" class="text-[#1d1d1d] font-bold text-sm">{{ __('Birth Date') }}</label>
                <input x-date id="birth_date" type="text" name="birth_date" placeholder="{{ __('Birth Date') }}"
                    value="{{ $data->birth_date }}" />
            </div>
            <div class="flex flex-col gap-px lg:col-span-2">
                <label for="nationality" class="text-[#1d1d1d] font-bold text-sm">{{ __('Nationality') }}</label>
                <input id="nationality" type="text" name="nationality" placeholder="{{ __('Nationality') }}"
                    value="{{ $data->nationality }}"
                    class="x-bg-custom text-[#1d1d1d] border-[#d1d1d1] focus-within:outline-primary p-2 text-base border rounded-md focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2" />
            </div>
            <div class="flex flex-col gap-px lg:col-span-2">
                <label for="identity" class="text-[#1d1d1d] font-bold text-sm">{{ __('Identity') }}</label>
                <input id="identity" type="text" name="identity" placeholder="{{ __('Identity') }}"
                    value="{{ $data->identity }}"
                    class="x-bg-custom text-[#1d1d1d] border-[#d1d1d1] focus-within:outline-primary p-2 text-base border rounded-md focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2" />
            </div>
            <div class="flex flex-col gap-px lg:col-span-3">
                <label for="email" class="text-[#1d1d1d] font-bold text-sm">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" placeholder="{{ __('Email') }}"
                    value="{{ $data->email }}"
                    class="x-bg-custom text-[#1d1d1d] border-[#d1d1d1] focus-within:outline-primary p-2 text-base border rounded-md focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2" />
            </div>
            <div class="flex flex-col gap-px lg:col-span-3">
                <label for="phone" class="text-[#1d1d1d] font-bold text-sm">{{ __('Phone') }}</label>
                <input id="phone" type="tel" name="phone" placeholder="{{ __('Phone') }}"
                    value="{{ $data->phone }}"
                    class="x-bg-custom text-[#1d1d1d] border-[#d1d1d1] focus-within:outline-primary p-2 text-base border rounded-md focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2" />
            </div>
            <div class="flex flex-col gap-px lg:col-span-6">
                <label for="address" class="text-[#1d1d1d] font-bold text-sm">{{ __('Address') }}</label>
                <input id="address" type="text" name="address" placeholder="{{ __('Address') }}"
                    value="{{ $data->address }}"
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
