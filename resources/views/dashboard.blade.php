@extends('shared.admin.base')
@section('title', __('Dashboard'))

@section('content')
    <div class="flex flex-col gap-4">
        <div class="w-full flex items-center justify-between gap-2">
            <h1 class="font-bold text-2xl">{{ __('Schedule') }}</h1>
        </div>
        <div id="calendar" class="w-full"></div>
    </div>
    <div id="modal"
        class="bg-[#1d1d1d] fixed inset-0 justify-center items-center p-4 bg-opacity-40 backdrop-blur-sm z-50 !hidden">
        <div id="content"
            class="bg-[#fcfcfc] border-[#d1d1d1] shadow-[#1d1d1d20] shadow-sm w-full rounded-md max-h-[calc(100vh-2rem)] overflow-auto border lg:w-1/2 p-4 gap-4 grid grid-rows-1 grid-cols-1 lg:grid-cols-2">
            <div class="flex flex-col lg:col-span-2">
                <h3 class="text-[#1d1d1d] font-bold text-2xl">{{ __('Appointment Info') }}:</h3>
            </div>
            <div class="flex flex-col gap-px">
                <label for="ev_name" class="text-[#1d1d1d] font-bold text-sm">{{ __('Full Name') }}</label>
                <input id="ev_name" type="text" placeholder="{{ __('Full Name') }}"
                    class="x-bg-custom text-[#1d1d1d] border-[#d1d1d1] focus-within:outline-primary p-2 text-base border rounded-md focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2"
                    readonly />
            </div>
            <div class="flex flex-col gap-px">
                <label for="ev_type" class="text-[#1d1d1d] font-bold text-sm">{{ __('Type') }}</label>
                <input id="ev_type" type="text" placeholder="{{ __('Type') }}"
                    class="x-bg-custom text-[#1d1d1d] border-[#d1d1d1] focus-within:outline-primary p-2 text-base border rounded-md focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2"
                    readonly />
            </div>
            <div class="flex flex-col gap-px">
                <label for="ev_email" class="text-[#1d1d1d] font-bold text-sm">{{ __('Email') }}</label>
                <input id="ev_email" type="text" placeholder="{{ __('Email') }}"
                    class="x-bg-custom text-[#1d1d1d] border-[#d1d1d1] focus-within:outline-primary p-2 text-base border rounded-md focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2"
                    readonly />
            </div>
            <div class="flex flex-col gap-px">
                <label for="ev_phone" class="text-[#1d1d1d] font-bold text-sm">{{ __('Phone') }}</label>
                <input id="ev_phone" type="text" placeholder="{{ __('Phone') }}"
                    class="x-bg-custom text-[#1d1d1d] border-[#d1d1d1] focus-within:outline-primary p-2 text-base border rounded-md focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2"
                    readonly />
            </div>
            <div class="flex flex-col gap-px">
                <label for="ev_date" class="text-[#1d1d1d] font-bold text-sm">{{ __('Date') }}</label>
                <input id="ev_date" type="text" placeholder="{{ __('Date') }}"
                    class="x-bg-custom text-[#1d1d1d] border-[#d1d1d1] focus-within:outline-primary p-2 text-base border rounded-md focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2"
                    readonly />
            </div>
            <div class="flex flex-col gap-px">
                <label for="ev_hour" class="text-[#1d1d1d] font-bold text-sm">{{ __('Hour') }}</label>
                <input id="ev_hour" type="text" placeholder="{{ __('Hour') }}"
                    class="x-bg-custom text-[#1d1d1d] border-[#d1d1d1] focus-within:outline-primary p-2 text-base border rounded-md focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2"
                    readonly />
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.8/locales-all.global.min.js"></script>
    <script>
        const modal = document.querySelector("#modal"),
            content = document.querySelector("#content");

        modal.addEventListener("click", (e) => {
            if (e.target === modal && !modal.classList.contains("!hidden")) {
                modal.classList.remove("flex");
                modal.classList.add("!hidden");
            }
        });
        content.addEventListener("click", (e) => {
            e.stopPropagation();
        });

        var calendar = new FullCalendar.Calendar(document.querySelector("#calendar"), {
            headerToolbar: {
                "{{ Core::lang('ar') ? 'right' : 'left' }}": 'dayGridMonth,timeGridWeek,timeGridDay today',
                "{{ Core::lang('ar') ? 'left' : 'right' }}": "prev title next"
            },
            initialView: "timeGridWeek",
            allDaySlot: false,
            timeZone: 'UTC',
            slotDuration: "01:00:00",
            locale: "{{ app()->getLocale() }}",
            events: "{{ route('actions.consults.index') }}",
            eventClick: ({
                event: {
                    extendedProps: props
                }
            }) => {
                for (let prop in props) {
                    const el = content.querySelector("#" + prop);
                    if (el) el.value = props[prop];
                }
                modal.classList.add("flex");
                modal.classList.remove("!hidden");
            }
        });
        calendar.render();

        const prev = document.querySelector(".fc-prev-button"),
            next = document.querySelector(".fc-next-button");

        prev.innerHTML = `
            <svg class="block pointer-events-none w-8 h-8 rtl:rotate-180" fill="currentColor" viewBox="0 -960 960 960">
                <path d="M528-251 331-449q-7-6-10.5-14t-3.5-18q0-9 3.5-17.5T331-513l198-199q13-12 32-12t33 12q13 13 12.5 33T593-646L428-481l166 166q13 13 13 32t-13 32q-14 13-33.5 13T528-251Z"></path>
            </svg>
        `;
        next.innerHTML = `
            <svg class="block pointer-events-none w-8 h-8 rtl:rotate-180" fill="currentColor" viewBox="0 -960 960 960">
                <path d="M344-251q-14-15-14-33.5t14-31.5l164-165-165-166q-14-12-13.5-32t14.5-33q13-14 31.5-13.5T407-712l199 199q6 6 10 14.5t4 17.5q0 10-4 18t-10 14L408-251q-13 13-32 12.5T344-251Z"></path>
            </svg>
        `;

        window.addEventListener('resize', () => calendar.render());
        document.querySelector("#trigger_menu").addEventListener("click", _ => {
            if (matchMedia("(min-width: 1024px)").matches) setTimeout(() => calendar.render(), 250);
        });
    </script>
@endsection
