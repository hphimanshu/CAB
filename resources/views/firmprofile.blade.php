@extends('layouts.auth')

@section('content')
<main class="app-wrapper">
    @include('partials.sidebar')
    @include('partials.settingtoggle')
    @include('partials.settingmodel')

    <!-- End: Settings -->
    <div class="flex flex-col justify-between min-h-screen">
        <div>
            @include('partials.header')

            <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
                <div class="page-content">
                    <div class="transition-all duration-150 container-fluid" id="page_layout">
                        <div id="content_layout">
                            <!-- BEGIN: Breadcrumb -->
                            <div class="mb-5">
                                <ul class="m-0 p-0 list-none">
                                    <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                                        <a href="{{ route('dashboard') }}">
                                            <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                                            <iconify-icon icon="heroicons-outline:chevron-right"
                                                class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                                        Firm Profile</li>
                                </ul>
                            </div>
                            <!-- END: BreadCrumb -->
                            <div class="space-y-5 profile-page">
                                <div
                                    class="profiel-wrap px-[35px] pb-10 md:pt-[84px] pt-10 rounded-lg bg-white dark:bg-slate-800 lg:flex lg:space-y-0space-y-6 justify-between items-end relative z-[1]">
                                    <div
                                        class="bg-slate-900 dark:bg-slate-700 absolute left-0 top-0 md:h-1/2 h-[150px] w-full z-[-1] rounded-t-lg">
                                    </div>
                                    <div class="profile-box flex-none md:text-start text-center">
                                        <div class="md:flex items-end md:space-x-6 rtl:space-x-reverse">
                                            <div class="flex-none">
                                                <div
                                                    class="md:h-[186px] md:w-[186px] h-[140px] w-[140px] md:ml-0 md:mr-0 ml-auto mr-auto md:mb-0 mb-4 rounded-full ring-4ring-slate-100 relative">
                                                    <img src="assets/images/users/user-1.jpg" alt=""
                                                        class="w-full h-full object-cover rounded-full">
                                                    <a href="profile-setting" class="absolute right-2 h-8 w-8 bg-slate-50 text-slate-600 rounded-full shadow-sm flex flex-col items-center
                    justify-center md:top-[140px] top-[100px]">
                                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex-1">
                                                <div
                                                    class="text-2xl font-medium text-slate-900 dark:text-slate-200 mb-[3px]">
                                                    Albert Flores
                                                </div>
                                                <div class="text-sm font-light text-slate-600 dark:text-slate-400">
                                                    Front End Developer
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end profile box -->
                                    <div
                                        class="profile-info-500 md:flex md:text-start text-center flex-1 max-w-[516px] md:space-y-0 space-y-4">
                                        <div class="flex-1">
                                            <div class="text-base text-slate-900 dark:text-slate-300 font-medium mb-1">
                                                $32,400
                                            </div>
                                            <div class="text-sm text-slate-600 font-light dark:text-slate-300">
                                                Total Balance
                                            </div>
                                        </div>
                                        <!-- end single -->
                                        <div class="flex-1">
                                            <div class="text-base text-slate-900 dark:text-slate-300 font-medium mb-1">
                                                <a href="{{ route('profile') }}" class="navItem"><span>User Profile</span></a>
                                            </div>
                                        </div>
                                        <!-- end single -->
                                        <!-- <div class="flex-1">
                                            <div class="text-base text-slate-900 dark:text-slate-300 font-medium mb-1">
                                                3200
                                            </div>
                                        </div> -->
                                        <!-- end single -->
                                    </div>
                                    <!-- profile info-500 -->
                                </div>
                                <div class="grid grid-cols-12 gap-6">
                                    <div class="lg:col-span-4 col-span-12">
                                        <div class="card h-full">
                                            <header class="card-header">
                                                <h4 class="card-title">Info</h4>
                                            </header>
                                            <div class="card-body p-6">
                                                <ul class="list space-y-8">
                                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                                        <div
                                                            class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                                                            <iconify-icon icon="heroicons:envelope"></iconify-icon>
                                                        </div>
                                                        <div class="flex-1">
                                                            <div
                                                                class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                                                EMAIL
                                                            </div>
                                                            <a href="mailto:someone@example.com"
                                                                class="text-base text-slate-600 dark:text-slate-50">
                                                                info-500@CAOnBoarding.com
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <!-- end single list -->
                                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                                        <div
                                                            class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                                                            <iconify-icon icon="heroicons:phone-arrow-up-right">
                                                            </iconify-icon>
                                                        </div>
                                                        <div class="flex-1">
                                                            <div
                                                                class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                                                PHONE
                                                            </div>
                                                            <a href="tel:0189749676767"
                                                                class="text-base text-slate-600 dark:text-slate-50">
                                                                +1-202-555-0151
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <!-- end single list -->
                                                    <li class="flex space-x-3 rtl:space-x-reverse">
                                                        <div
                                                            class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                                                            <iconify-icon icon="heroicons:map"></iconify-icon>
                                                        </div>
                                                        <div class="flex-1">
                                                            <div
                                                                class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                                                LOCATION
                                                            </div>
                                                            <div class="text-base text-slate-600 dark:text-slate-50">
                                                                Home# 320/N, Road# 71/B, Mohakhali, Dhaka-1207,
                                                                Bangladesh
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- end single list -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:col-span-8 col-span-12">
                                        <div class="card ">
                                            <header class="card-header">
                                                <h4 class="card-title">User Overview
                                                </h4>
                                            </header>
                                            <div class="card-body">
                                                <div id="areaChart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.footer')
    </div>
</main>

@endsection