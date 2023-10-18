@extends('shared.guest.base')
@section('title', __('Home'))

@section('header')
    <section class="w-full bg-core py-8 lg:py-16 overflow-hidden">
        <div class="2xl:container mx-auto p-4 flex flex-col lg:flex-row gap-16 lg:gap-0 lg:items-center">
            <div class="w-full order-2 lg:order-1">
                <div class="flex flex-col gap-2 rtl:gap-4 leading-[1]">
                    <h1 data-aos="fade-{{ Core::lang('ar') ? 'left' : 'right' }}"
                        class="text-grey font-semibold text-[2.75rem] lg:text-[5rem]">
                        {{ __('Welcome to') }}
                    </h1>
                    <h1 data-aos="fade-{{ Core::lang('ar') ? 'right' : 'left' }}" data-aos-delay="200"
                        class="text-primary font-semibold text-[2.75rem] lg:text-[5rem]">
                        {{ __('The Cut Studio') }}
                    </h1>
                </div>
                <h1 data-aos="fade-up" data-aos-delay="300"
                    class="text-gray-800 text-[1.5rem] lg:text-[2.25rem] my-2 rtl:mt-4 font-medium">
                    {{ __('Designing and implementing interior decorations for commercial, residential, and government projects.') }}
                </h1>
                <h1 data-aos="fade-down" data-aos-delay="500"
                    class="text-primary text-[2rem] lg:text-[3.5rem] font-semibold leading-[1]">
                    {{ __('In Kuwait') }}
                </h1>
                <a data-aos="zoom-{{ Core::lang('ar') ? 'left' : 'right' }}" data-aos-delay="700" href="#project"
                    class="block w-max my-14 text-gray-50 rounded-sm text-base px-8 py-3 font-semibold bg-primary hover:bg-accent focus-within:bg-accent">
                    {{ __('Create Project') }}
                </a>
                <div data-aos="fade-down"
                    class="w-[calc(100%+2rem)] lg:w-[calc(100%+2rem+((100%-34rem)/2))] -mt-2 flex gap-4 text-gray-50 items-center bg-grey py-12 px-16 -ms-4 -mb-12 lg:-mb-[5.895rem]">
                    @include('shared.guest.social')
                    <h2 class="text-sm">
                        {{ __('Follow Us') }} <br />
                        <span class="font-black text-white">
                            @@the.cut.studio
                        </span>
                    </h2>
                </div>
            </div>
            <div class="w-10/12 mx-auto order-1 lg:order-2 lg:w-full flex justify-center">
                <div class="w-full lg:w-[32rem] relative">
                    <div class="absolute w-full h-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-0">
                        <div data-aos="fade" data-aos-delay="100"
                            class="w-16 h-16 bg-primary rounded-sm absolute -bottom-8 -left-8 rtl:left-auto rtl:-right-8">
                        </div>
                        <div data-aos="fade" data-aos-delay="200"
                            class="w-20 h-20 bg-primary rounded-full absolute bottom-2 -right-10 rtl:right-auto rtl:-left-10">
                        </div>
                        <div data-aos="fade" data-aos-delay="300"
                            class="w-20 h-36 bg-primary rounded-sm absolute -bottom-16 lg:-bottom-24 right-16 rtl:right-auto rtl:left-16">
                        </div>
                        <div data-aos="fade" data-aos-delay="400"
                            class="w-14 h-40 bg-primary rounded-sm absolute -top-24 left-14 rtl:left-auto rtl:right-14">
                        </div>
                        <div data-aos="fade" data-aos-delay="500"
                            class="h-14 w-52 bg-primary rounded-sm absolute -top-7 -right-32 rtl:right-auto rtl:-left-32">
                        </div>
                    </div>
                    <div title="slide-large-image" id="img-lg" data-aos="fade-up" data-aos-delay="300"
                        class="ms-auto w-10/12 aspect-square rounded-sm mb-12 z-0 relative bg-center bg-cover"
                        style="background-image: url({{ asset('img/lg-1.png') }}?v={{ env('APP_VERSION') }})">
                    </div>
                    <div title="slide-small-image" id="img-sm" data-aos="fade-up" data-aos-delay="500"
                        class="w-5/12 aspect-[4/5] rounded-sm absolute left-0 rtl:left-auto rtl:right-0 bottom-0 bg-center bg-cover"
                        style="background-image: url({{ asset('img/sm-1.png') }}?v={{ env('APP_VERSION') }})">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section id="about" class="w-full bg-core overflow-hidden">
        <div class="2xl:container mx-auto flex flex-col lg:flex-row lg:gap-8">
            <div class="w-full flex flex-wrap gap-4 lg:gap-8">
                <div class="flex-1 h-full min-h-[600px] flex flex-col gap-4 lg:gap-8">
                    <div data-aos="fade-down" data-aos-delay="100" class="flex-[1] rounded-b-sm bg-light"></div>
                    <div title="about-image-1" data-aos="fade-up" data-aos-delay="300"
                        class="flex-[5] rounded-sm bg-center bg-cover"
                        style="background-image: url({{ asset('img/about-1.png') }}?v={{ env('APP_VERSION') }})">
                    </div>
                    <div data-aos="fade-down" data-aos-delay="500" class="flex-[2] rounded-t-sm bg-primary"></div>
                </div>
                <div class="flex-1 h-full min-h-[600px] flex flex-col gap-4 lg:gap-8">
                    <div data-aos="fade-up" data-aos-delay="200" class="flex-[1] rounded-b-sm bg-primary"></div>
                    <div title="about-image-2" data-aos="fade-down" data-aos-delay="400"
                        class="flex-[1.5] rounded-t-sm bg-top"
                        style="background-image: url({{ asset('img/about-2.png') }}?v={{ env('APP_VERSION') }})">
                    </div>
                </div>
            </div>
            <div class="w-full">
                <h2 data-aos="fade-{{ Core::lang('ar') ? 'left' : 'right' }}"
                    class="w-full bg-grey text-gray-50 text-4xl lg:text-6xl py-8 p-4 ps-12 lg:-ms-8 lg:w-[calc(100%+2rem)]">
                    {{ strtoupper(__('Who Are We')) }}
                </h2>
                <div class="p-4 text-base flex flex-col gap-6 lg:text-lg text-gray-800">
                    <p data-aos="fade" data-aos-delay="100">
                        <b class="text-primary">{{ __('The Cut') }}</b>
                        {{ __('is a Kuwaiti craftsmanship institution started in 2014, We specialize in crafting exquisite and bespoke woodwork to transform spaces into captivating environments. With a passion for craftsmanship and an eye for detail, we create unique designs that reflect our clients vision and enhance the beauty and functionality of their interiors.') }}
                    </p>
                    <p data-aos="fade" data-aos-delay="300">
                        {{ __('We understand the timeless elegance and warmth that wood brings to any space. Whether it\'s residential, commercial, or hospitality projects, we work closely with our clients to design and build custom wood interiors that align with their preferences and requirements.') }}
                    </p>
                    <p data-aos="fade" data-aos-delay="500">
                        {{ __('We take pride in our ability to source sustainable and ethically harvested materials, ensuring that our woodwork not only adds beauty to spaces but also promotes responsible environmental practices. We believe in creating interiors that are not only aesthetically pleasing but also aligned with our commitment to sustainability.') }}
                    </p>
                </div>
                <div class="flex gap-4 lg:gap-8 justify-center p-4">
                    <div data-aos="fade-down" data-aos-delay="700" class="flex flex-col gap-1 items-center">
                        <img title="projects-icon-image" alt="projects-icon-image"
                            src="{{ asset('img/projects.png') }}?v={{ env('APP_VERSION') }}"
                            class="block w-14 h-14 lg:w-16 lg:h-16" />
                        <h3 class="text-center text-base lg:text-lg font-bold text-grey">
                            {{ __('Projects Done') }}
                        </h3>
                        <h4 data-count="6859" class="text-xl lg:text-2xl font-bold text-primary">
                            6859
                        </h4>
                    </div>
                    <div data-aos="fade-down" data-aos-delay="900" class="flex flex-col gap-1 items-center">
                        <img title="customers-icon-experience" alt="customers-icon-experience"
                            src="{{ asset('img/experience.png') }}?v={{ env('APP_VERSION') }}"
                            class="block w-14 h-14 lg:w-16 lg:h-16" />
                        <h3 class="text-center text-base lg:text-lg font-bold text-grey">
                            {{ __('Years Experience') }}
                        </h3>
                        <h4 data-count="10" class="text-xl lg:text-2xl font-bold text-primary">
                            10
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full bg-light overflow-hidden">
        <div class="2xl:container mx-auto flex justify-center p-4 lg:py-16">
            <div class="w-full lg:w-1/2 relative flex items-end">
                <div title="banner-image-1" data-aos="zoom-in-{{ Core::lang('ar') ? 'left' : 'right' }}"
                    data-aos-delay="200" class="flex-[1] rounded-sm h-[80%] mb-[10%] z-[1] bg-center bg-cover"
                    style="background-image: url({{ asset('img/banner-1.png') }}?v={{ env('APP_VERSION') }})"></div>
                <div title="banner-image-2" data-aos="zoom-in"
                    class="flex-[1.2] rounded-sm aspect-[2/5] -ms-[4%] bg-center bg-cover"
                    style="background-image: url({{ asset('img/banner-2.png') }}?v={{ env('APP_VERSION') }})"></div>
                <div title="banner-image-3" data-aos="zoom-in-{{ Core::lang('ar') ? 'right' : 'left' }}"
                    data-aos-delay="300" class="flex-[1]  rounded-sm h-[40%] mb-[10%] bg-center bg-cover"
                    style="background-image: url({{ asset('img/banner-3.png') }}?v={{ env('APP_VERSION') }})">
                </div>
                <div data-aos="zoom-out-up" data-aos-delay="500"
                    class="w-4/12 aspect-square bg-core bg-opacity-95 rounded-sm absolute top-[20%] right-[4%] rtl:right-auto rtl:left-[4%]">
                    <img title="logo-image" alt="logo-image" data-aos="zoom-in-down" data-aos-delay="700"
                        src="{{ asset('img/logo.png') }}?v={{ env('APP_VERSION') }}"
                        class="block w-8/12 mx-auto -mt-[26%]" />
                </div>
            </div>
        </div>
    </section>
    <section id="projects" class="w-full bg-core overflow-hidden">
        <div class="2xl:container mx-auto flex flex-col lg:flex-row flex-wrap">
            <h2 data-aos="fade-{{ Core::lang('ar') ? 'right' : 'left' }}"
                class="w-full lg:w-1/2 bg-grey text-gray-50 text-4xl lg:text-6xl py-8 p-4">
                {{ strtoupper(__('Process')) }}
            </h2>
            <div class="w-full container mx-auto py-4 lg:py-8 flex flex-col gap-8">
                <div class="w-full lg:w-8/12 flex-wrap mx-auto p-4 flex md:flex-col gap-2 md:gap-8">
                    <div class="w-max md:w-full gap-8 md:gap-0 flex flex-col md:flex-row md:justify-between relative">
                        <div
                            class="w-px md:w-full h-full md:h-px bg-grey absolute z-[0] left-7 rtl:left-0 rtl:right-7 md:left-1/2 rtl:md:left-auto rtl:md:right-1/2 md:top-1/2 md:-translate-x-1/2 rtl:translate-x-1/2 md:-translate-y-1/2 transition-transform duration-[2s] scale-y-0 lg:scale-x-0 {{ Core::lang('ar') ? 'lg:origin-right' : 'lg:origin-left' }} origin-top line">
                        </div>
                        <div data-aos="slide-{{ Core::lang('ar') ? 'left' : 'right' }}" data-aos-delay="100"
                            class="flex items-center">
                            <span
                                class="text-grey font-black text-2xl md:text-4xl p-4 bg-core rounded-full z-[1]">01</span>
                            <span class="w-14 h-14 bg-grey arrow-clip -ms-4"></span>
                        </div>
                        <div data-aos="slide-{{ Core::lang('ar') ? 'left' : 'right' }}" data-aos-delay="200"
                            class="flex items-center">
                            <span
                                class="text-[#696866] font-black text-2xl md:text-4xl p-4 bg-core rounded-full z-[1]">02</span>
                            <span class="w-14 h-14 bg-[#696866] arrow-clip -ms-4"></span>
                        </div>
                        <div data-aos="slide-{{ Core::lang('ar') ? 'left' : 'right' }}" data-aos-delay="300"
                            class="flex items-center">
                            <span
                                class="text-[#83807d] font-black text-2xl md:text-4xl p-4 bg-core rounded-full z-[1]">03</span>
                            <span class="w-14 h-14 bg-[#83807d] arrow-clip -ms-4"></span>
                        </div>
                        <div data-aos="slide-{{ Core::lang('ar') ? 'left' : 'right' }}" data-aos-delay="400"
                            class="flex items-center">
                            <span
                                class="text-[#9c9894] font-black text-2xl md:text-4xl p-4 bg-core rounded-full z-[1]">04</span>
                            <span class="w-14 h-14 bg-[#9c9894] arrow-clip -ms-4"></span>
                        </div>
                        <div data-aos="slide-{{ Core::lang('ar') ? 'left' : 'right' }}" data-aos-delay="500"
                            class="flex items-center">
                            <span
                                class="text-[#b6b0aa] font-black text-2xl md:text-4xl p-4 bg-core rounded-full z-[1]">05</span>
                            <span class="w-14 h-14 bg-[#b6b0aa] arrow-clip -ms-4"></span>
                        </div>
                    </div>
                    <div
                        class="w-max mx-auto md:w-full gap-8 md:gap-0 flex flex-col md:flex-row items-start md:justify-between relative">
                        <div
                            class="w-px md:w-full h-full md:h-px bg-grey absolute z-[0] left-2 rtl:left-auto rtl:right-2 md:top-2 md:left-1/2 rtl:md:left-auto rtl:md:right-1/2 md:-translate-x-1/2 rtl:md:translate-x-1/2 transition-transform duration-[2s] scale-y-0 lg:scale-x-0 {{ Core::lang('ar') ? 'lg:origin-right' : 'lg:origin-left' }} origin-top line">
                        </div>
                        <div data-aos="fade-up" data-aos-delay="200"
                            class="flex-1 flex md:flex-col items-center md:justify-center gap-4">
                            <span class="block w-4 h-4 rounded-full bg-primary z-[1]"></span>
                            <h4 class="text-grey text-lg text-center">
                                {{ strtoupper(__('Consult')) }}
                            </h4>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="300"
                            class="flex-1 flex md:flex-col items-center md:justify-center gap-4">
                            <span class="block w-4 h-4 rounded-full bg-primary z-[1]"></span>
                            <h4 class="text-grey text-lg text-center">
                                {{ strtoupper(__('Design')) }}
                            </h4>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="400"
                            class="flex-1 flex md:flex-col items-center md:justify-center gap-4">
                            <span class="block w-4 h-4 rounded-full bg-primary z-[1]"></span>
                            <h4 class="text-grey text-lg text-center">
                                {{ strtoupper(__('Manufacturing')) }}
                            </h4>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="500"
                            class="flex-1 flex md:flex-col items-center md:justify-center gap-4">
                            <span class="block w-4 h-4 rounded-full bg-primary z-[1]"></span>
                            <h4 class="text-grey text-lg text-center">
                                {{ strtoupper(__('Delivery')) }}
                            </h4>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="600"
                            class="flex-1 flex md:flex-col items-center md:justify-center gap-4">
                            <span class="block w-4 h-4 rounded-full bg-primary z-[1]"></span>
                            <h4 class="text-grey text-lg text-center">
                                {{ strtoupper(__('After-Sales Service')) }}
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="w-full mx-auto p-4 grid grid-rows-1 grid-cols-1 lg:grid-cols-8 gap-4 lg:gap-8">
                    <div data-aos="fade-{{ Core::lang('ar') ? 'right' : 'left' }}" data-aos-delay="500"
                        class="w-full flex gap-4 items-start lg:col-span-4">
                        <span class="text-grey text-opacity-80 font-black text-2xl lg:text-4xl mt-5 lg:mt-4">01</span>
                        <div
                            class="flex-1 flex-col gap-2 ps-4 relative before:content-[''] before:absolute before:w-[2px] before:h-[50px] before:bg-primary before:top-[14px] before:left-0 rtl:before:left-auto rtl:before:right-0 after:content-[''] after:absolute after:w-[30px] after:h-[2px] after:bg-primary after:top-[14px] after:left-0 rtl:after:left-auto rtl:after:right-0">
                            <h4 class="text-primary text-lg font-bold ps-6">
                                {{ strtoupper(__('Consulting')) }}
                            </h4>
                            <p class="text-grey text-base">
                                {{ __('We are here to provide you with expert guidance and creative solutions for incorporating wood elements into your interior design projects.') }}
                            </p>
                        </div>
                    </div>
                    <div data-aos="fade-{{ Core::lang('ar') ? 'right' : 'left' }}" data-aos-delay="700"
                        class="w-full flex gap-4 items-start lg:col-span-4">
                        <span class="text-grey text-opacity-80 font-black text-2xl lg:text-4xl mt-5 lg:mt-4">02</span>
                        <div
                            class="flex-1 flex-col gap-2 ps-4 relative before:content-[''] before:absolute before:w-[2px] before:h-[50px] before:bg-primary before:top-[14px] before:left-0 rtl:before:left-auto rtl:before:right-0 after:content-[''] after:absolute after:w-[30px] after:h-[2px] after:bg-primary after:top-[14px] after:left-0 rtl:after:left-auto rtl:after:right-0">
                            <h4 class="text-primary text-lg font-bold ps-6">
                                {{ strtoupper(__('Design')) }}
                            </h4>
                            <p class="text-grey text-base">
                                {{ __('We are excited to offer you a comprehensive range of design solutions to create stunning and functional wood interiors for your space.') }}
                            </p>
                        </div>
                    </div>
                    <div data-aos="fade-{{ Core::lang('ar') ? 'right' : 'left' }}" data-aos-delay="900"
                        class="w-full flex gap-4 items-start lg:col-span-4">
                        <span class="text-grey text-opacity-80 font-black text-2xl lg:text-4xl mt-5 lg:mt-4">03</span>
                        <div
                            class="flex-1 flex-col gap-2 ps-4 relative before:content-[''] before:absolute before:w-[2px] before:h-[50px] before:bg-primary before:top-[14px] before:left-0 rtl:before:left-auto rtl:before:right-0 after:content-[''] after:absolute after:w-[30px] after:h-[2px] after:bg-primary after:top-[14px] after:left-0 rtl:after:left-auto rtl:after:right-0">
                            <h4 class="text-primary text-lg font-bold ps-6">
                                {{ strtoupper(__('Manufacturing')) }}
                            </h4>
                            <p class="text-grey text-base">
                                {{ __('At our manufacturing facility, we combine traditional woodworking techniques with modern technology to create exceptional wood interiors that meet your specific requirements.') }}
                            </p>
                        </div>
                    </div>
                    <div data-aos="fade-{{ Core::lang('ar') ? 'right' : 'left' }}" data-aos-delay="1100"
                        class="w-full flex gap-4 items-start lg:col-span-4">
                        <span class="text-grey text-opacity-80 font-black text-2xl lg:text-4xl mt-5 lg:mt-4">04</span>
                        <div
                            class="flex-1 flex-col gap-2 ps-4 relative before:content-[''] before:absolute before:w-[2px] before:h-[50px] before:bg-primary before:top-[14px] before:left-0 rtl:before:left-auto rtl:before:right-0 after:content-[''] after:absolute after:w-[30px] after:h-[2px] after:bg-primary after:top-[14px] after:left-0 rtl:after:left-auto rtl:after:right-0">
                            <h4 class="text-primary text-lg font-bold ps-6">
                                {{ strtoupper(__('Delivery')) }}
                            </h4>
                            <p class="text-grey text-base">
                                {{ __('We understand that timely and safe delivery of your wood interior products is crucial to the success of your project, and we are here to provide you with a reliable and efficient delivery solution.') }}
                            </p>
                        </div>
                    </div>
                    <div data-aos="fade-{{ Core::lang('ar') ? 'right' : 'left' }}" data-aos-delay="1300"
                        class="w-full flex gap-4 items-start lg:col-span-4 lg:col-start-3">
                        <span class="text-grey text-opacity-80 font-black text-2xl lg:text-4xl mt-5 lg:mt-4">05</span>
                        <div
                            class="flex-1 flex-col gap-2 ps-4 relative before:content-[''] before:absolute before:w-[2px] before:h-[50px] before:bg-primary before:top-[14px] before:left-0 rtl:before:left-auto rtl:before:right-0 after:content-[''] after:absolute after:w-[30px] after:h-[2px] after:bg-primary after:top-[14px] after:left-0 rtl:after:left-auto rtl:after:right-0">
                            <h4 class="text-primary text-lg font-bold ps-6">
                                {{ strtoupper(__('After-Sales Service')) }}
                            </h4>
                            <p class="text-grey text-base">
                                {{ __('We are committed to providing excellent after-sale service to ensure your complete satisfaction with our products. Our goal is to build long-term relationships with our clients by offering ongoing support and assistance.') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="w-full bg-light overflow-hidden">
        <div class="container mx-auto flex flex-col gap-4 lg:gap-8 p-4 lg:py-8">
            <div class="w-full flex flex-col md:flex-row gap-4 lg:gap-8 items-center">
                <div class="w-full md:w-0 md:flex-[1] lg:flex-[1.3] flex flex-col p-4 lg:p-0 gap-4 lg:gap-8">
                    <h2 class="w-max mx-auto flex flex-col items-end text-grey font-bold">
                        <span data-aos="zoom-in-{{ Core::lang('ar') ? 'right' : 'left' }}" data-aos-delay="200"
                            class="text-lg lg:text-2xl">{{ strtoupper(__('Commercial')) }}</span>
                        <span data-aos="zoom-in-{{ Core::lang('ar') ? 'right' : 'left' }}"
                            class="text-5xl lg:text-7xl">{{ strtoupper(__('Services')) }}:</span>
                    </h2>
                    <ul class="gap-2 flex flex-col w-max mx-auto">
                        <li data-aos="zoom-out-{{ Core::lang('ar') ? 'left' : 'right' }}" data-aos-delay="300"
                            class="flex flex-wrap gap-2 text-grey text-xl lg:text-2xl items-center">
                            <span class="block w-2 h-2 rounded-full bg-accent"></span>
                            <span class="flex-1">{{ strtoupper(__('Office Furniture')) }}</span>
                        </li>
                        <li data-aos="zoom-out-{{ Core::lang('ar') ? 'left' : 'right' }}" data-aos-delay="400"
                            class="flex flex-wrap gap-2 text-grey text-xl lg:text-2xl items-center">
                            <span class="block w-2 h-2 rounded-full bg-accent"></span>
                            <span class="flex-1">{{ strtoupper(__('Shop Decor')) }}</span>
                        </li>
                        <li data-aos="zoom-out-{{ Core::lang('ar') ? 'left' : 'right' }}" data-aos-delay="500"
                            class="flex flex-wrap gap-2 text-grey text-xl lg:text-2xl items-center">
                            <span class="block w-2 h-2 rounded-full bg-accent"></span>
                            <span class="flex-1">{{ strtoupper(__('Buffets')) }}</span>
                        </li>
                        <li data-aos="zoom-out-{{ Core::lang('ar') ? 'left' : 'right' }}" data-aos-delay="600"
                            class="flex flex-wrap gap-2 text-grey text-xl lg:text-2xl items-center">
                            <span class="block w-2 h-2 rounded-full bg-accent"></span>
                            <span class="flex-1">{{ strtoupper(__('Booths')) }}</span>
                        </li>
                        <li data-aos="zoom-out-{{ Core::lang('ar') ? 'left' : 'right' }}" data-aos-delay="700"
                            class="flex flex-wrap gap-2 text-grey text-xl lg:text-2xl items-center">
                            <span class="block w-2 h-2 rounded-full bg-accent"></span>
                            <span class="flex-1">{{ strtoupper(__('Guideposts')) }}</span>
                        </li>
                        <li data-aos="zoom-out-{{ Core::lang('ar') ? 'left' : 'right' }}" data-aos-delay="800"
                            class="flex flex-wrap gap-2 text-grey text-xl lg:text-2xl items-center">
                            <span class="block w-2 h-2 rounded-full bg-accent"></span>
                            <span class="flex-1">{{ strtoupper(__('Sations')) }}</span>
                        </li>
                    </ul>
                </div>
                <div class="flex-[1] flex items-center justify-center">
                    <img title="service-image-1" alt="service-image-1"
                        data-aos="flip-{{ Core::lang('ar') ? 'left' : 'right' }}"
                        src="{{ asset('img/service-1.png') }}?v={{ env('APP_VERSION') }}"
                        class="w-full aspect-square block">
                </div>
            </div>
            <div class="w-full flex flex-col md:flex-row gap-4 lg:gap-8 items-center">
                <div class="flex-[1] flex items-center justify-center order-2 md:order-1">
                    <img title="service-image-2" alt="service-image-2"
                        data-aos="flip-{{ Core::lang('ar') ? 'right' : 'left' }}"
                        src="{{ asset('img/service-2.png') }}?v={{ env('APP_VERSION') }}"
                        class="w-full aspect-square block">
                </div>
                <div
                    class="w-full md:w-0 md:flex-[1] lg:flex-[1.3] flex flex-col p-4 lg:p-0 gap-4 lg:gap-8 order-1 md:order-2">
                    <h2 class="w-max mx-auto flex flex-col items-end text-grey font-bold">
                        <span data-aos="zoom-in-{{ Core::lang('ar') ? 'left' : 'right' }}" data-aos-delay="200"
                            class="text-lg lg:text-2xl">{{ strtoupper(__('Residential')) }}</span>
                        <span data-aos="zoom-in-{{ Core::lang('ar') ? 'left' : 'right' }}" data-aos-delay="200"
                            class="text-5xl lg:text-7xl">{{ strtoupper(__('Services')) }}:</span>
                    </h2>
                    <ul class="gap-2 flex flex-col w-max mx-auto">
                        <li data-aos="zoom-out-{{ Core::lang('ar') ? 'right' : 'left' }}" data-aos-delay="300"
                            class="flex flex-wrap gap-2 text-grey text-xl lg:text-2xl items-center">
                            <span class="block w-2 h-2 rounded-full bg-accent"></span>
                            <span class="flex-1">{{ strtoupper(__('Doors')) }}</span>
                        </li>
                        <li data-aos="zoom-out-{{ Core::lang('ar') ? 'right' : 'left' }}" data-aos-delay="400"
                            class="flex flex-wrap gap-2 text-grey text-xl lg:text-2xl items-center">
                            <span class="block w-2 h-2 rounded-full bg-accent"></span>
                            <span class="flex-1">{{ strtoupper(__('Furnitures')) }}</span>
                        </li>
                        <li data-aos="zoom-out-{{ Core::lang('ar') ? 'right' : 'left' }}" data-aos-delay="500"
                            class="flex flex-wrap gap-2 text-grey text-xl lg:text-2xl items-center">
                            <span class="block w-2 h-2 rounded-full bg-accent"></span>
                            <span class="flex-1">{{ strtoupper(__('Wall Cladding')) }}</span>
                        </li>
                        <li data-aos="zoom-out-{{ Core::lang('ar') ? 'right' : 'left' }}" data-aos-delay="600"
                            class="flex flex-wrap gap-2 text-grey text-xl lg:text-2xl items-center">
                            <span class="block w-2 h-2 rounded-full bg-accent"></span>
                            <span class="flex-1">{{ strtoupper(__('Ceilings')) }}</span>
                        </li>
                        <li data-aos="zoom-out-{{ Core::lang('ar') ? 'right' : 'left' }}" data-aos-delay="700"
                            class="flex flex-wrap gap-2 text-grey text-xl lg:text-2xl items-center">
                            <span class="block w-2 h-2 rounded-full bg-accent"></span>
                            <span class="flex-1">{{ strtoupper(__('Kitchens')) }}</span>
                        </li>
                        <li data-aos="zoom-out-{{ Core::lang('ar') ? 'right' : 'left' }}" data-aos-delay="800"
                            class="flex flex-wrap gap-2 text-grey text-xl lg:text-2xl items-center">
                            <span class="block w-2 h-2 rounded-full bg-accent"></span>
                            <span class="flex-1">{{ strtoupper(__('Storage')) }}</span>
                        </li>
                        <li data-aos="zoom-out-{{ Core::lang('ar') ? 'right' : 'left' }}" data-aos-delay="900"
                            class="flex flex-wrap gap-2 text-grey text-xl lg:text-2xl items-center">
                            <span class="block w-2 h-2 rounded-full bg-accent"></span>
                            <span class="flex-1">{{ strtoupper(__('Shelves & Frames')) }}</span>
                        </li>
                        <li data-aos="zoom-out-{{ Core::lang('ar') ? 'right' : 'left' }}" data-aos-delay="1000"
                            class="flex flex-wrap gap-2 text-grey text-xl lg:text-2xl items-center">
                            <span class="block w-2 h-2 rounded-full bg-accent"></span>
                            <span class="flex-1">{{ strtoupper(__('Wall Decor')) }}</span>
                        </li>
                        <li data-aos="zoom-out-{{ Core::lang('ar') ? 'right' : 'left' }}" data-aos-delay="1100"
                            class="flex flex-wrap gap-2 text-grey text-xl lg:text-2xl items-center">
                            <span class="block w-2 h-2 rounded-full bg-accent"></span>
                            <span class="flex-1">{{ strtoupper(__('Coffee Corner')) }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full bg-core overflow-hidden">
        <div class="2xl:container mx-auto flex flex-col lg:flex-row flex-wrap">
            <h2 data-aos="fade-{{ Core::lang('ar') ? 'right' : 'left' }}"
                class="w-full lg:w-2/3 text-grey text-4xl lg:text-6xl py-8 p-4">
                {{ strtoupper(__('Industrial Services')) }}
            </h2>
            <div class="flex flex-col gap-4 lg:gap-8 p-4 pt-0">
                <div class="w-full container mx-auto px-8 lg:px-4 flex flex-col gap-4">
                    <h3 data-aos="fade-up" data-aos-delay="200"
                        class="text-accent text-xl lg:text-2xl font-bold flex flex-wrap gap-3 items-center">
                        <span class="block w-2 h-2 rounded-full bg-accent"></span>
                        <span>{{ strtoupper(__('CNC Cutting Design')) }}</span>
                    </h3>
                    <p data-aos="fade-up" data-aos-delay="400" class="text-grey text-base">
                        {{ __('We offer Variety of MDF / HDF to satisfy design reequipments, such as Ornate & Islamic Patterns Designs , complex designs & carvings as the high accuracy is the secret to high quality, our CNC service includes CNC design, CNC patterns and laser cutter.') }}
                    </p>
                </div>
                <img title="cnc-image" alt="cnc-image" data-aos="zoom-out" data-aos-delay="600"
                    src="{{ asset('img/cnc.png') }}?v={{ env('APP_VERSION') }}"
                    class="block p-4 lg:p-0 w-full md:w-2/3 lg:w-1/2 mx-auto">
            </div>
        </div>
    </section>
    <section class="w-full bg-light overflow-hidden">
        <div class="2xl:container mx-auto flex flex-col lg:flex-row flex-wrap">
            <h2 data-aos="fade-{{ Core::lang('ar') ? 'right' : 'left' }}"
                class="w-full lg:w-1/2 text-grey text-4xl lg:text-6xl py-8 p-4">
                {{ strtoupper(__('Brands')) }}
            </h2>
            <div class="flex flex-col gap-4 lg:gap-8 p-4 pt-0 pb-8">
                <div class="w-full container mx-auto px-8 lg:px-4 flex flex-col gap-4">
                    <img title="brand-image-1" alt="brand-image-1" data-aos="zoom-out" data-aos-delay="200"
                        src="{{ asset('img/brand-1.png') }}?v={{ env('APP_VERSION') }}" class="block w-32 ms-5" />
                    <h3 data-aos="fade-up" data-aos-delay="400"
                        class="text-accent text-xl lg:text-2xl font-bold flex flex-wrap gap-3 items-center">
                        <span class="block w-2 h-2 rounded-full bg-accent"></span>
                        <span class="flex-1">{{ __('LAMELLO ( SWISS WOOD BONDING DEVICE )') }}</span>
                    </h3>
                    <p data-aos="fade-up" data-aos-delay="500" class="text-grey text-base">
                        {{ __('Lamello\'s system solutions are synonymous with quality, innovation and excellent functionality, and are used across the globe where they have proven their worth millions of times over.') }}
                    </p>
                    <ul data-aos="fade-up" data-aos-delay="600" class="text-grey text-base">
                        <li>- {{ __('Without nails and screws.') }}</li>
                        <li>- {{ __('Quick Assembly') }}</li>
                        <li>- {{ __('Installation speed.') }}</li>
                        <li>- {{ __('Ease of use.') }}</li>
                        <li>- {{ __('The possibility of disassembly & installation.') }}</li>
                        <li>- {{ __('Two years warranty on the device.') }}</li>
                    </ul>
                </div>
                <div class="w-full container mx-auto px-8 lg:px-4 flex flex-col gap-4">
                    <img title="brand-image-2" alt="brand-image-2" data-aos="zoom-out" data-aos-delay="200"
                        src="{{ asset('img/brand-2.png') }}?v={{ env('APP_VERSION') }}" class="block w-40 ms-5" />
                    <h3 data-aos="fade-up" data-aos-delay="400"
                        class="text-accent text-xl lg:text-2xl font-bold flex flex-wrap gap-3 items-center">
                        <span class="block w-2 h-2 rounded-full bg-accent"></span>
                        <span class="flex-1">{{ __('FORESCOLOR ( SKOREAN COLORED FIBER WOOD BOARDS )') }}</span>
                    </h3>
                    <p data-aos="fade-up" data-aos-delay="500" class="text-grey text-base">
                        {{ __('FORESCOLOR is the COLOR BOARD developed to overcome the limitation of the normal Medium Density Fiber board. FORESCOLOR is a combination of the words \'FORESCO\' and \'COLOR\' meaning of FORESCO\'s environmental friendly technology of wood fiber materials with color.') }}
                    </p>
                    <ul data-aos="fade-up" data-aos-delay="600" class="text-grey text-base">
                        <li>- {{ __('Highly durable and easy to repair to its original look.') }}</li>
                        <li>- {{ __('Easy to cut to size and assemble for any desired configuration.') }}</li>
                        <li>- {{ __('Sustainable material/USGBC - LEED.') }}</li>
                        <li>- {{ __('Easy to machine.') }}</li>
                    </ul>
                </div>
                <div class="w-full container mx-auto px-8 lg:px-4 flex flex-col gap-4">
                    <img title="brand-image-3" alt="brand-image-3" data-aos="zoom-out" data-aos-delay="200"
                        src="{{ asset('img/brand-3.png') }}?v={{ env('APP_VERSION') }}" class="block w-32 ms-5" />
                    <h3 data-aos="fade-up" data-aos-delay="400"
                        class="text-accent text-xl lg:text-2xl font-bold flex flex-wrap gap-3 items-center">
                        <span class="block w-2 h-2 rounded-full bg-accent"></span>
                        <span class="flex-1">{{ __('PAYTHA ( 3D CAD )') }}</span>
                    </h3>
                    <p data-aos="fade-up" data-aos-delay="500" class="text-grey text-base">
                        {{ __('The PYTHA software company PYTHA Lab was founded in 1978, driven by the idea to develop professional 3D CAD software that is easy to learn and fun to use, and completely \'Made in Germany\'.') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="project"
        class="lg:relative bg-white flex flex-col lg:flex-row items-center justify-end overflow-hidden"
        style="min-height: 600px;">
        <iframe
            class="w-full h-full aspect-video lg:aspect-auto lg:absolute lg:left-1/2 lg:top-1/2 lg:-translate-x-[40%] rtl:lg:-translate-x-[60%] lg:-translate-y-1/2 lg:w-[200%] z-0"
            src="{{ env('MAPLOCATION_URI') }}" loading="lazy"></iframe>
        <div class="2xl:container w-full mx-auto lg:p-8 flex flex-wrap pointer-events-none">
            <div data-aos="slide-{{ Core::lang('ar') ? 'left' : 'right' }}"
                class="p-4 lg:p-8 w-full flex flex-col lg:w-1/2 bg-light lg:shadow-md lg:rounded-md gap-4 pointer-events-auto z-[1]">
                <form action="{{ route('actions.projects.store') }}" class="w-full flex flex-col gap-4" method="post">
                    @csrf
                    <div class="flex flex-col items-center my-8">
                        <h1 class="font-bold text-3xl lg:text-5xl text-grey">{{ __('Create Project') }}</h1>
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
                    <div class="flex flex-col gap-2">
                        <input x-switch label="{{ __('Visit the project') }}" type="checkbox" id="opt_1"
                            name="project" />
                        <input x-switch label="{{ __('Visit the showroom') }}" type="checkbox" id="opt_2"
                            name="showroom" />
                        <input x-switch label="{{ __('WhatsApp contact') }}" type="checkbox" id="opt_3"
                            name="contact" />
                    </div>
                    <button
                        class="flex w-full gap-2 items-center justify-center font-bold text-sm rounded-md bg-primary text-[#fcfcfc] relative py-3 px-5 lg:px-3 lg:py-2 outline-none hover:!text-[#1d1d1d] hover:bg-accent focus-within:!text-[#1d1d1d] focus-within:bg-accent">
                        <span>{{ __('Create') }}</span>
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        window.addEventListener("DOMContentLoaded", () => {
            const images = [
                    ["{{ asset('img/lg-1.png') }}?v={{ env('APP_VERSION') }}",
                        "{{ asset('img/sm-1.png') }}?v={{ env('APP_VERSION') }}"
                    ],
                    ["{{ asset('img/lg-2.png') }}?v={{ env('APP_VERSION') }}",
                        "{{ asset('img/sm-2.png') }}?v={{ env('APP_VERSION') }}"
                    ]
                ],
                lg = document.querySelector('#img-lg'),
                sm = document.querySelector('#img-sm');
            let idx = 1;

            function slide() {
                setTimeout(() => {
                    sm.classList.remove("aos-animate");
                    setTimeout(() => lg.classList.remove("aos-animate"), 300);

                    setTimeout(() => {
                        if (idx > images.length - 1) idx = 0;
                        lg.style.backgroundImage = `url(${images[idx][0]})`;
                        sm.style.backgroundImage = `url(${images[idx][1]})`;

                        lg.classList.add("aos-animate");
                        setTimeout(() => sm.classList.add("aos-animate"), 300);
                    }, 600);

                    idx++;
                    requestAnimationFrame(slide);
                }, 3000);
            }

            requestAnimationFrame(slide);

            const counters = Array.from(document.querySelectorAll('[data-count]')),
                start = 0;

            counters.forEach((counter) => {
                const end = +counter.dataset.count;
                const dur = end < 1000 ? 2000 : 3000;
                let startTimestamp = null;
                const step = (timestamp) => {
                    if (!startTimestamp) startTimestamp = timestamp;
                    const progress = Math.min((timestamp - startTimestamp) / dur, 1);
                    counter.innerHTML = Math.floor(progress * (end - start) + start);
                    if (progress < 1) {
                        requestAnimationFrame(step);
                    } else {
                        startTimestamp = null;
                    }
                };

                var intersectionObserver = new IntersectionObserver((entries) => {
                    if (entries.some((entry) => entry.intersectionRatio > 0)) {
                        if (!counter.classList.contains("done")) {
                            counter.classList.add("done");
                            requestAnimationFrame(step);
                        } else {
                            intersectionObserver.unobserve(counter);
                        }
                    }
                });
                intersectionObserver.observe(counter);
            });

            const lines = Array.from(document.querySelectorAll('.line'));

            lines.forEach((line) => {
                var intersectionObserver = new IntersectionObserver((entries) => {
                    if (entries.some((entry) => entry.intersectionRatio > 0)) {
                        if (line.classList.contains("scale-y-0")) {
                            line.classList.remove("scale-y-0", "lg:scale-x-0");
                        } else {
                            intersectionObserver.unobserve(line);
                        }
                    }
                });
                intersectionObserver.observe(line);
            });
        });
    </script>
@endsection
