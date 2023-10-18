<aside id="menu" style="height: var(--vh)"
    class="w-full lg:w-[240px] h-screen fixed lg:sticky top-0 -left-full lg:left-0 rtl:left-auto rtl:-right-full lg:rtl:right-0 z-30 lg:z-0 transition-all duration-300 pointer-events-none lg:pointer-events-auto">
    <div class="w-full h-full bg-[#1d1d1d] bg-opacity-40 backdrop-blur-sm relative">
        <button x-toggle targets="#menu"
            properties="left-0, -left-full, rtl:right-0, rtl:-right-full, rtl:left-auto, pointer-events-none, lg:w-[240px], lg:w-0"
            class="p-3 flex items-center justify-center rounded-md absolute top-4 right-4 rtl:left-4 rtl:right-auto text-[#fcfcfc] outline-none hover:bg-[#d1d1d1] focus-within:bg-[#fcfcfc] hover:bg-opacity-40 focus-within:bg-opacity-40">
            <svg class="block w-5 h-5 pointer-events-none" fill="currentcolor" viewBox="0 0 48 48">
                <path
                    d="M12.45 37.65 10.35 35.55 21.9 24 10.35 12.45 12.45 10.35 24 21.9 35.55 10.35 37.65 12.45 26.1 24 37.65 35.55 35.55 37.65 24 26.1Z" />
            </svg>
        </button>
    </div>
    <nav
        class="w-[240px] lg:w-full h-full flex flex-col bg-[#f5f5f5] absolute top-0 left-0 rtl:right-0 rtl:left-auto overflow-hidden">
        <header class="w-full flex items-center justify-center bg-primary h-[60px] overflow-hidden">
            <h1 class="text-[#fcfcfc] text-xl font-black leading-[1] min-w-max">The Cut Studio</h1>
        </header>
        <ul
            class="flex flex-col p-2 lg:p-4 flex-1 overflow-y-auto overflow-x-hidden border-e lg:border-none border-[#fcfcfc]">
            <li class="w-full min-w-max">
                <a href="{{ route('views.dashboard.index') }}"
                    class="w-full flex gap-2 items-center p-2 outline-none rounded-md text-[#1d1d1d] hover:bg-gray-300 hover:bg-opacity-40 focus-within:bg-gray-300 focus-within:bg-opacity-40 {{ request()->routeIs('views.dashboard.index') ? '!bg-gray-300 hover:!bg-opacity-40 focus-within:!bg-opacity-40' : '' }}">
                    <svg class="block w-5 h-5 pointer-events-none !text-[var(--color-1)]" fill="currentcolor"
                        viewBox="0 -960 960 960">
                        <path
                            d="M99-425v-356q0-32.025 24.194-56.512Q147.387-862 179-862h277v437H99Zm405-437h277q32.025 0 56.512 24.488Q862-813.025 862-781v197H504v-278Zm0 763v-436h358v356q0 31.613-24.488 55.806Q813.025-99 781-99H504ZM99-376h357v277H179q-31.613 0-55.806-24.194Q99-147.387 99-179v-197Z" />
                    </svg>
                    <span class="text-base font-medium">{{ __('Dashboard') }}</span>
                </a>
            </li>
            <li class="w-full min-w-max">
                <a href="{{ route('views.projects.index') }}"
                    class="w-full flex gap-2 items-center p-2 outline-none rounded-md text-[#1d1d1d] hover:bg-gray-300 hover:bg-opacity-40 focus-within:bg-gray-300 focus-within:bg-opacity-40 {{ request()->routeIs('views.projects.index') ? '!bg-gray-300 hover:!bg-opacity-40 focus-within:!bg-opacity-40' : '' }}">
                    <svg class="block w-5 h-5 pointer-events-none !text-[var(--color-2)]" fill="currentcolor"
                        viewBox="0 -960 960 960">
                        <path
                            d="M278-150v-440q0-38 27-65.5t64-27.5h441q38 0 65 27t27 65v325L694-59H369q-38 0-64.5-26.5T278-150ZM60-717q-7-37 15-68.5t59-37.5l435-77q37-6 68.5 15.5T675-826l14 83H370q-62 0-107 44.5T218-591v383q-30-2-53-22t-28-53L60-717Zm758 410H699q-20 0-33 13t-13 32v119l165-164Z" />
                    </svg>
                    <span class="text-base font-medium">{{ __('Projects') }}</span>
                </a>
            </li>
            <li class="w-full min-w-max">
                <a href="{{ route('views.types.index') }}"
                    class="w-full flex gap-2 items-center p-2 outline-none rounded-md text-[#1d1d1d] hover:bg-gray-300 hover:bg-opacity-40 focus-within:bg-gray-300 focus-within:bg-opacity-40 {{ request()->routeIs('views.types.index') ? '!bg-gray-300 hover:!bg-opacity-40 focus-within:!bg-opacity-40' : '' }}">
                    <svg class="block w-5 h-5 pointer-events-none !text-[var(--color-3)]" fill="currentcolor"
                        viewBox="0 -960 960 960">
                        <path
                            d="M372-99H181q-30.75 0-56.375-25.625T99-181v-192q34-4 59-30t25-61q0-35-25-61t-59-31v-190q0-31.75 25.625-57.375T181-829h157q19-44 52.5-70.5T466-926q42 0 75.5 26.5T594-829h152q31.75 0 57.375 25.625T829-746v152q44 19 69 54.5t25 77.5q0 42-25 74t-69 51v156q0 30.75-25.625 56.375T746-99H557q-6-43-32.25-67.5T464-191q-34.5 0-60.75 24.625T372-99Z" />
                    </svg>
                    <span class="text-base font-medium">{{ __('Types') }}</span>
                </a>
            </li>
            <li class="my-2"></li>
            <li class="w-full min-w-max">
                <a href="{{ route('views.profile.patch') }}"
                    class="w-full flex gap-2 items-center p-2 outline-none rounded-md text-[#1d1d1d] hover:bg-gray-300 hover:bg-opacity-40 focus-within:bg-gray-300 focus-within:bg-opacity-40 {{ request()->routeIs('views.profile.patch') ? '!bg-gray-300 hover:!bg-opacity-40 focus-within:!bg-opacity-40' : '' }}">
                    <svg class="block w-5 h-5 pointer-events-none !text-[var(--color-4)]" fill="currentcolor"
                        viewBox="0 -960 960 960">
                        <path
                            d="M310-279h340v-23q0-45.622-44.534-69.811Q560.931-396 479.966-396 399-396 354.5-371.811T310-302v23Zm170.044-184q33.431 0 55.693-22.975Q558-508.95 558-542.212q0-33.263-22.343-55.525Q513.314-620 479.832-620t-55.657 22.431Q402-575.139 402-542t22.307 56.069Q446.613-463 480.044-463ZM150-99q-37.175 0-64.088-26.594Q59-152.188 59-190v-495q0-36.588 26.912-64.294Q112.825-777 150-777h133l55-65q12.136-16 30.508-24 18.373-8 38.492-8h148q18.125 0 36.562 8Q610-858 623-842l55 65h132q37.225 0 64.613 27.706Q902-721.588 902-685v495q0 37.812-27.387 64.406Q847.225-99 810-99H150Z" />
                    </svg>
                    <span class="text-base font-medium">{{ __('Profile') }}</span>
                </a>
            </li>
            <li class="w-full min-w-max">
                <a href="{{ route('views.password.patch') }}"
                    class="w-full flex gap-2 items-center p-2 outline-none rounded-md text-[#1d1d1d] hover:bg-gray-300 hover:bg-opacity-40 focus-within:bg-gray-300 focus-within:bg-opacity-40 {{ request()->routeIs('views.password.patch') ? '!bg-gray-300 hover:!bg-opacity-40 focus-within:!bg-opacity-40' : '' }}">
                    <svg class="block w-5 h-5 pointer-events-none !text-[var(--color-5)]" fill="currentcolor"
                        viewBox="0 -960 960 960">
                        <path
                            d="M229-62q-36.775 0-63.888-27.112Q138-116.225 138-153v-415q0-38.588 27.112-65.294Q192.225-660 229-660h53v-74q0-83.965 57.921-142.483Q397.843-935 479.731-935q81.889 0 140.079 58.517Q678-817.965 678-734v74h53q37.188 0 64.594 26.706Q823-606.588 823-568v415q0 36.775-27.406 63.888Q768.188-62 731-62H229Zm251.248-223Q512-285 533.5-306.615q21.5-21.616 21.5-51.969Q555-388 533.252-412q-21.748-24-53.5-24T426.5-412.064Q405-388.128 405-358.42q0 30.12 21.748 51.77 21.748 21.65 53.5 21.65ZM373-660h214v-73.769q0-47.731-30.973-78.481Q525.054-843 480.235-843q-44.818 0-76.027 30.75Q373-781.5 373-733.769V-660Z" />
                    </svg>
                    <span class="text-base font-medium">{{ __('Password') }}</span>
                </a>
            </li>
            <li class="my-2"></li>
            <li class="w-full min-w-max">
                <a href="{{ route('views.users.index') }}"
                    class="w-full flex gap-2 items-center p-2 outline-none rounded-md text-[#1d1d1d] hover:bg-gray-300 hover:bg-opacity-40 focus-within:bg-gray-300 focus-within:bg-opacity-40 {{ request()->routeIs('views.users.index') ? '!bg-gray-300 hover:!bg-opacity-40 focus-within:!bg-opacity-40' : '' }}">
                    <svg class="block w-5 h-5 pointer-events-none !text-[var(--color-6)]" fill="currentcolor"
                        viewBox="0 -960 960 960">
                        <path
                            d="M68-130q-20.1 0-33.05-12.45Q22-154.9 22-174.708V-246q0-42.011 21.188-75.36 21.187-33.348 59.856-50.662Q178-404 238.469-419 298.938-434 363-434q66.062 0 126.031 15Q549-404 624-372q38.812 16.018 60.406 49.452Q706-289.113 706-246v71.708Q706-155 693.275-142.5T660-130H68Zm679 0q11-5 20.5-17.5T777-177v-67q0-65-32.5-108T659-432q60 10 113 24.5t88.88 31.939q34.958 18.329 56.539 52.945Q939-288 939-241v66.787q0 19.505-13.225 31.859Q912.55-130 893-130H747ZM364-494q-71.55 0-115.275-43.725Q205-581.45 205-652.5q0-71.05 43.725-115.275Q292.45-812 363.5-812q70.05 0 115.275 44.113Q524-723.775 524-653q0 71.55-45.112 115.275Q433.775-494 364-494Zm386-159q0 70.55-44.602 114.775Q660.796-494 591.035-494 578-494 567.5-495.5T543-502q26-27.412 38.5-65.107 12.5-37.696 12.5-85.599 0-46.903-12.5-83.598Q569-773 543-804q10.75-3.75 23.5-5.875T591-812q69.775 0 114.387 44.613Q750-722.775 750-653Z" />
                    </svg>
                    <span class="text-base font-medium">{{ __('Users') }}</span>
                </a>
            </li>
            <li class="flex-1 my-2"></li>
            <li class="w-full min-w-max">
                <form action="{{ route('actions.close.index') }}" method="POST">
                    @csrf
                    <button type="submit" title="clear"
                        class="w-full flex gap-2 items-center p-2 outline-none rounded-md text-[#1d1d1d] hover:bg-gray-300 hover:bg-opacity-40 focus-within:bg-gray-300 focus-within:bg-opacity-40">
                        <svg class="block w-5 h-5 pointer-events-none !text-[var(--color-7)]" fill="currentcolor"
                            viewBox="0 -960 960 960">
                            <path
                                d="M635-306q-13-15-13.5-33.125T635-371l64-63H409q-19.775 0-32.388-13.36Q364-460.719 364-479.86q0-20.14 12.612-32.64Q389.225-525 409-525h288l-66-67q-13-12.267-12.5-30.081t14.714-31.866Q644.661-666 664.705-665.5 684.75-665 699-653l141 142q4.909 6.327 8.955 15.008Q853-487.311 853-478.676q0 8.636-4.045 17.106Q844.909-453.1 840-448L699.006-305.089Q686-292 668-293t-33-13ZM181-97q-38.1 0-65.05-26.975Q89-150.95 89-188v-584q0-37.463 26.95-64.731Q142.9-864 181-864h251q20.2 0 33.1 13.763 12.9 13.763 12.9 32.816 0 20.053-12.9 32.737Q452.2-772 432-772H181v584h251q20.2 0 33.1 12.675 12.9 12.676 12.9 32.816 0 19.141-12.9 32.325Q452.2-97 432-97H181Z" />
                        </svg>
                        <span class="text-base font-medium">{{ __('Logout') }}</span>
                    </button>
                </form>
            </li>
        </ul>
    </nav>
</aside>
