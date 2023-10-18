<footer data-aos="fade-up">
    <section class="w-full bg-grey">
        <div class="2xl:container mx-auto flex flex-col gap-4 p-4">
            <div
                class="flex flex-col gap-4 md:grid md:grid-rows-1 md:grid-cols-2 lg:gap-32 lg:flex lg:flex-row items-start">
                <div class="w-full md:col-span-2 lg:w-0 flex-1 font-bold text-gray-50 flex flex-col gap-6">
                    <a href="/#home" class="block w-32 mx-auto">
                        <img title="logo-image" alt="logo-image"
                            src="{{ asset('img/logo-white.png') }}?v={{ env('APP_VERSION') }}" class="block w-full">
                    </a>
                    <p>{{ __('A Kuwaiti craftsmanship institution started in 2014, with high quality product. We enjoy new ideas that keep up with trends & industry developments.') }}
                    </p>
                </div>
                <div class="w-full lg:w-0 flex-1 flex flex-col gap-6 justify-center">
                    <div class="flex flex-col gap-2">
                        <h1 class="text-gray-50 text-2xl">{{ __('Contact Us') }}</h1>
                        <div class="border border-gray-50 w-20"></div>
                    </div>
                    <ul class="flex flex-col gap-4">
                        <li class="flex gap-2 items-center text-gray-50">
                            <svg class="block h-6 w-6 pointer-events-none" fill="currentcolor" viewBox="0 0 48 48">
                                <path
                                    d="M39.6 42.95q-6.25 0-12.45-3.075-6.2-3.075-11.125-7.975-4.925-4.9-8-11.15T4.95 8.35q0-1.4 1-2.425T8.4 4.9h6.75q1.6 0 2.575.8.975.8 1.275 2.35l1.35 5.3q.2 1.4-.1 2.375-.3.975-1.1 1.675L14 22.1q2.5 3.95 5.45 6.825T26 33.85l4.95-4.95q.85-.9 1.9-1.25 1.05-.35 2.35-.05l4.7 1.15q1.55.4 2.35 1.425t.8 2.525v6.75q0 1.5-1 2.5t-2.45 1Z">
                                </path>
                            </svg>
                            <div class="flex flex-col">
                                <span class="text-gray-50">
                                    99964000
                                </span>
                                <span class="text-gray-50">
                                    98888100
                                </span>
                            </div>
                        </li>
                        <li class="flex gap-2 items-center text-gray-50">
                            <svg class="block h-6 w-6 pointer-events-none" fill="currentcolor" viewBox="0 0 48 48">
                                <path
                                    d="M7.5 41.1q-1.85 0-3.2-1.375T2.95 36.55v-25.1q0-1.8 1.35-3.2 1.35-1.4 3.2-1.4h33q1.85 0 3.225 1.4t1.375 3.2v25.1q0 1.8-1.375 3.175Q42.35 41.1 40.5 41.1ZM24 26.35 40.5 15.2v-3.75L24 22.35 7.5 11.45v3.75Z">
                                </path>
                            </svg>
                            <div class="flex flex-col">
                                <span class="text-gray-50">
                                    info@thecut.com
                                </span>
                            </div>
                        </li>
                        <li class="flex gap-2 items-center text-gray-50">
                            <svg class="block h-6 w-6 pointer-events-none" fill="currentcolor" viewBox="0 0 48 48">
                                <path
                                    d="M24 37.05q-7.3-5.45-10.775-10.325Q9.75 21.85 9.75 17q0-3.6 1.3-6.325t3.3-4.55q2-1.825 4.55-2.8 2.55-.975 5.1-.975 2.5 0 5.075.975t4.575 2.8q2 1.825 3.325 4.55Q38.3 13.4 38.3 17q0 4.85-3.5 9.725T24 37.05Zm.05-16.1q1.8 0 3.025-1.275Q28.3 18.4 28.3 16.65q0-1.8-1.25-3.05-1.25-1.25-3-1.25t-3.025 1.275Q19.75 14.9 19.75 16.65q0 1.8 1.275 3.05 1.275 1.25 3.025 1.25Zm-14.3 24.6V41H38.3v4.55Z">
                                </path>
                            </svg>
                            <div class="flex flex-col">
                                <span class="text-gray-50">{{ __('Shuwaikh Industrial Banks Street') }}</span>
                            </div>
                        </li>
                        <li>
                            @include('shared.guest.social')
                        </li>
                    </ul>
                </div>
                <div class="w-full lg:w-0 flex-1 flex flex-col justify-center gap-6">
                    <div class="flex flex-col gap-2">
                        <h1 class="text-gray-50 text-2xl">{{ __('Quick Link') }}</h1>
                        <div class="border border-gray-50 w-20"></div>
                    </div>
                    <ul class="flex flex-col gap-2">
                        <li href="{{ !request()->routeIs('views.guest.index') ? '/' : '' }}#home"
                            class="flex gap-2 items-center text-gray-50">
                            <span class="border border-gray-50 w-2 h-2 rounded-full"></span>
                            <span>{{ strtoupper(__('Home')) }}</span>
                        </li>
                        <li href="{{ !request()->routeIs('views.guest.index') ? '/' : '' }}#about"
                            class="flex gap-2 items-center text-gray-50">
                            <span class="border border-gray-50 w-2 h-2 rounded-full"></span>
                            <span>{{ strtoupper(__('Who Are We')) }}</span>
                        </li>
                        <li href="{{ !request()->routeIs('views.guest.index') ? '/' : '' }}#services"
                            class="flex gap-2 items-center text-gray-50">
                            <span class="border border-gray-50 w-2 h-2 rounded-full"></span>
                            <span>{{ strtoupper(__('Services')) }}</span>
                        </li>
                        <li href="{{ !request()->routeIs('views.guest.index') ? '/' : '' }}#projects"
                            class="flex gap-2 items-center text-gray-50">
                            <span class="border border-gray-50 w-2 h-2 rounded-full"></span>
                            <span>{{ strtoupper(__('Projects')) }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-50 w-full"></div>
            <div class="flex gap-4 justify-center items-center">
                <h1 class="font-black text-md text-gray-50">{{ __('Copyright © 2023') }}</h1>
            </div>
        </div>
    </section>
</footer>
