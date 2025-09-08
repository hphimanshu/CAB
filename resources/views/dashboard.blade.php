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

                <div>
                  <div class="flex justify-between flex-wrap items-center mb-6">
                    <h4 class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-block ltr:pr-4 rtl:pl-4 mb-4 sm:mb-0 flex space-x-3 rtl:space-x-reverse">Dashboard</h4>
                    <div class="flex sm:space-x-4 space-x-2 sm:justify-end items-center rtl:space-x-reverse">
                      <button class="btn leading-0 inline-flex justify-center bg-white text-slate-700 dark:bg-slate-800 dark:text-slate-300 !font-normal">
                        <span class="flex items-center">
                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:calendar"></iconify-icon>
                        <span>Weekly</span>
                        </span>
                      </button>
                      <button class="btn leading-0 inline-flex justify-center bg-white text-slate-700 dark:bg-slate-800 dark:text-slate-300 !font-normal">
                        <span class="flex items-center">
                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:filter"></iconify-icon>
                        <span>Select Date</span>
                        </span>
                      </button>
                    </div>
                  </div>
                  <div class="grid grid-cols-12 gap-5 mb-5">
                    <div class="2xl:col-span-3 lg:col-span-4 col-span-12">
                      <div class="bg-no-repeat bg-cover bg-center p-4 rounded-[6px] relative" style="background-image: url(assets/images/all-img/widget-bg-1.png)">
                        <div class="max-w-[180px]">
                          <div class="text-xl font-medium text-slate-900 mb-2">
                            Upgrade your CAOnBoarding
                          </div>
                          <p class="text-sm text-slate-800">
                            Pro plan for better results
                          </p>
                        </div>
                        <div class="absolute top-1/2 -translate-y-1/2 ltr:right-6 rtl:left-6 mt-2 h-12 w-12 bg-white rounded-full text-xs font-medium
                            flex flex-col items-center justify-center">
                          Now
                        </div>
                      </div>
                    </div>
                    <div class="2xl:col-span-9 lg:col-span-8 col-span-12">
                      <div class="p-4 card">
                        <div class="grid md:grid-cols-3 col-span-1 gap-4">

                          <!-- BEGIN: Group Chart2 -->


                          <div class="py-[18px] px-4 rounded-[6px] bg-[#E5F9FF] dark:bg-slate-900	 ">
                            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                              <div class="flex-none">
                                <div id="wline1"></div>
                              </div>
                              <div class="flex-1">
                                <div class="text-slate-800 dark:text-slate-300 text-sm mb-1 font-medium">
                                  Totel revenue
                                </div>
                                <div class="text-slate-900 dark:text-white text-lg font-medium">
                                  3,564
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="py-[18px] px-4 rounded-[6px] bg-[#FFEDE5] dark:bg-slate-900	 ">
                            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                              <div class="flex-none">
                                <div id="wline2"></div>
                              </div>
                              <div class="flex-1">
                                <div class="text-slate-800 dark:text-slate-300 text-sm mb-1 font-medium">
                                  Products sold
                                </div>
                                <div class="text-slate-900 dark:text-white text-lg font-medium">
                                  564
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="py-[18px] px-4 rounded-[6px] bg-[#EAE5FF] dark:bg-slate-900	 ">
                            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                              <div class="flex-none">
                                <div id="wline3"></div>
                              </div>
                              <div class="flex-1">
                                <div class="text-slate-800 dark:text-slate-300 text-sm mb-1 font-medium">
                                  Growth
                                </div>
                                <div class="text-slate-900 dark:text-white text-lg font-medium">
                                  +5.0%
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- END: Group Chart2 -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="grid grid-cols-12 gap-5">
                    <div class="lg:col-span-8 col-span-12">
                      <div class="card">
                        <div class="card-body p-6">
                          <div class="legend-ring">
                            <div id="revenue-barchart"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="lg:col-span-4 col-span-12">
                      <div class="card">
                        <header class="card-header">
                          <h4 class="card-title">Overview</h4>
                          <div>
                            <!-- BEGIN: Card Dropdown -->
                            <div class="relative">
                              <div class="dropdown relative">
                                <button class="text-xl text-center block w-full " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <span class="text-lg inline-flex h-6 w-6 flex-col items-center justify-center border border-slate-200 dark:border-slate-700
                    rounded dark:text-slate-400">
                <iconify-icon icon="heroicons-outline:dots-horizontal"></iconify-icon>
            </span>
                                </button>
                                <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                  <li>
                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                      Last 28 Days</a>
                                  </li>
                                  <li>
                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                      Last Month</a>
                                  </li>
                                  <li>
                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                      Last Year</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <!-- END: Card Droopdown -->
                          </div>
                        </header>
                        <div class="card-body p-6">
                          <div id="radial-bar"></div>
                        </div>
                      </div>
                    </div>
                    <div class="lg:col-span-8 col-span-12">
                      <div class="card">
                        <header class="card-header noborder">
                          <h4 class="card-title">All Company</h4>
                          <div>
                            <!-- BEGIN: Card Dropdown -->
                            <div class="relative">
                              <div class="dropdown relative">
                                <button class="text-xl text-center block w-full " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <span class="text-lg inline-flex h-6 w-6 flex-col items-center justify-center border border-slate-200 dark:border-slate-700
                    rounded dark:text-slate-400">
                <iconify-icon icon="heroicons-outline:dots-horizontal"></iconify-icon>
            </span>
                                </button>
                                <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                  <li>
                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                      Last 28 Days</a>
                                  </li>
                                  <li>
                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                      Last Month</a>
                                  </li>
                                  <li>
                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                      Last Year</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <!-- END: Card Droopdown -->
                          </div>
                        </header>
                        <div class="card-body p-6">

                          <!-- BEGIN: Company Table -->


                          <div class="overflow-x-auto -mx-6">
                            <div class="inline-block min-w-full align-middle">
                              <div class="overflow-hidden ">
                                <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                  <thead class="  bg-slate-200 dark:bg-slate-700">
                                    <tr>

                                      <th scope="col" class=" table-th ">
                                        Company
                                      </th>

                                      <th scope="col" class=" table-th ">
                                        Category
                                      </th>

                                      <th scope="col" class=" table-th ">
                                        Sales
                                      </th>

                                      <th scope="col" class=" table-th ">
                                        Views
                                      </th>

                                      <th scope="col" class=" table-th ">
                                        revenue
                                      </th>

                                    </tr>
                                  </thead>
                                  <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">

                                    <tr>
                                      <td class="table-td">
                                        <div class="flex items-center">
                                          <div class="flex-none">
                                            <div class="w-8 h-8 rounded-[100%] ltr:mr-3 rtl:ml-3">
                                              <img src=assets/images/users/user-1.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                            </div>
                                          </div>
                                          <div class="flex-1 text-start">
                                            <h4 class="text-sm font-medium text-slate-600 whitespace-nowrap">
                                              Biffco Enterprises Ltd.
                                            </h4>
                                            <div class="text-xs font-normal text-slate-600 dark:text-slate-400">
                                              Biffco@example.com
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="table-td">Technology</td>
                                      <td class="table-td ">
                                        <div class="flex space-x-6 items-center rtl:space-x-reverse">
                                          <span>
                                        95%</span>
                                          <span class=" text-xl  text-danger-500 ">

                                            <iconify-icon icon="heroicons-outline:trending-down"></iconify-icon>
                                        
                                    </span>
                                        </div>
                                      </td>
                                      <td class="table-td ">343</td>
                                      <td class="table-td ">$231.26</td>
                                    </tr>

                                    <tr>
                                      <td class="table-td">
                                        <div class="flex items-center">
                                          <div class="flex-none">
                                            <div class="w-8 h-8 rounded-[100%] ltr:mr-3 rtl:ml-3">
                                              <img src=assets/images/users/user-2.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                            </div>
                                          </div>
                                          <div class="flex-1 text-start">
                                            <h4 class="text-sm font-medium text-slate-600 whitespace-nowrap">
                                              Biffco Enterprises Ltd.
                                            </h4>
                                            <div class="text-xs font-normal text-slate-600 dark:text-slate-400">
                                              Biffco@example.com
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="table-td">Technology</td>
                                      <td class="table-td ">
                                        <div class="flex space-x-6 items-center rtl:space-x-reverse">
                                          <span>
                                        197%</span>
                                          <span class=" text-xl  text-success-500 ">

                                            <iconify-icon icon="heroicons-outline:trending-up"></iconify-icon>
                                        
                                    </span>
                                        </div>
                                      </td>
                                      <td class="table-td ">315</td>
                                      <td class="table-td ">$432.81</td>
                                    </tr>

                                    <tr>
                                      <td class="table-td">
                                        <div class="flex items-center">
                                          <div class="flex-none">
                                            <div class="w-8 h-8 rounded-[100%] ltr:mr-3 rtl:ml-3">
                                              <img src=assets/images/users/user-3.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                            </div>
                                          </div>
                                          <div class="flex-1 text-start">
                                            <h4 class="text-sm font-medium text-slate-600 whitespace-nowrap">
                                              Biffco Enterprises Ltd.
                                            </h4>
                                            <div class="text-xs font-normal text-slate-600 dark:text-slate-400">
                                              Biffco@example.com
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="table-td">Technology</td>
                                      <td class="table-td ">
                                        <div class="flex space-x-6 items-center rtl:space-x-reverse">
                                          <span>
                                        137%</span>
                                          <span class=" text-xl  text-success-500 ">

                                            <iconify-icon icon="heroicons-outline:trending-up"></iconify-icon>
                                        
                                    </span>
                                        </div>
                                      </td>
                                      <td class="table-td ">329</td>
                                      <td class="table-td ">$437.65</td>
                                    </tr>

                                    <tr>
                                      <td class="table-td">
                                        <div class="flex items-center">
                                          <div class="flex-none">
                                            <div class="w-8 h-8 rounded-[100%] ltr:mr-3 rtl:ml-3">
                                              <img src=assets/images/users/user-4.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                            </div>
                                          </div>
                                          <div class="flex-1 text-start">
                                            <h4 class="text-sm font-medium text-slate-600 whitespace-nowrap">
                                              Biffco Enterprises Ltd.
                                            </h4>
                                            <div class="text-xs font-normal text-slate-600 dark:text-slate-400">
                                              Biffco@example.com
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="table-td">Technology</td>
                                      <td class="table-td ">
                                        <div class="flex space-x-6 items-center rtl:space-x-reverse">
                                          <span>
                                        101%</span>
                                          <span class=" text-xl  text-success-500 ">

                                            <iconify-icon icon="heroicons-outline:trending-up"></iconify-icon>
                                        
                                    </span>
                                        </div>
                                      </td>
                                      <td class="table-td ">336</td>
                                      <td class="table-td ">$387.55</td>
                                    </tr>

                                    <tr>
                                      <td class="table-td">
                                        <div class="flex items-center">
                                          <div class="flex-none">
                                            <div class="w-8 h-8 rounded-[100%] ltr:mr-3 rtl:ml-3">
                                              <img src=assets/images/users/user-5.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                            </div>
                                          </div>
                                          <div class="flex-1 text-start">
                                            <h4 class="text-sm font-medium text-slate-600 whitespace-nowrap">
                                              Biffco Enterprises Ltd.
                                            </h4>
                                            <div class="text-xs font-normal text-slate-600 dark:text-slate-400">
                                              Biffco@example.com
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="table-td">Technology</td>
                                      <td class="table-td ">
                                        <div class="flex space-x-6 items-center rtl:space-x-reverse">
                                          <span>
                                        99%</span>
                                          <span class=" text-xl  text-danger-500 ">

                                            <iconify-icon icon="heroicons-outline:trending-down"></iconify-icon>
                                        
                                    </span>
                                        </div>
                                      </td>
                                      <td class="table-td ">375</td>
                                      <td class="table-td ">$489.80</td>
                                    </tr>

                                    <tr>
                                      <td class="table-td">
                                        <div class="flex items-center">
                                          <div class="flex-none">
                                            <div class="w-8 h-8 rounded-[100%] ltr:mr-3 rtl:ml-3">
                                              <img src=assets/images/users/user-6.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                            </div>
                                          </div>
                                          <div class="flex-1 text-start">
                                            <h4 class="text-sm font-medium text-slate-600 whitespace-nowrap">
                                              Biffco Enterprises Ltd.
                                            </h4>
                                            <div class="text-xs font-normal text-slate-600 dark:text-slate-400">
                                              Biffco@example.com
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="table-td">Technology</td>
                                      <td class="table-td ">
                                        <div class="flex space-x-6 items-center rtl:space-x-reverse">
                                          <span>
                                        101%</span>
                                          <span class=" text-xl  text-success-500 ">

                                            <iconify-icon icon="heroicons-outline:trending-up"></iconify-icon>
                                        
                                    </span>
                                        </div>
                                      </td>
                                      <td class="table-td ">490</td>
                                      <td class="table-td ">$421.45</td>
                                    </tr>

                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                          <!-- END: Company Table -->
                        </div>
                      </div>
                    </div>
                    <div class="lg:col-span-4 col-span-12">
                      <div class="card ">
                        <div class="card-header ">
                          <h4 class="card-title">Recent Activity</h4>
                          <div>
                            <!-- BEGIN: Card Dropdown -->
                            <div class="relative">
                              <div class="dropdown relative">
                                <button class="text-xl text-center block w-full " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <span class="text-lg inline-flex h-6 w-6 flex-col items-center justify-center border border-slate-200 dark:border-slate-700
                    rounded dark:text-slate-400">
                <iconify-icon icon="heroicons-outline:dots-horizontal"></iconify-icon>
            </span>
                                </button>
                                <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                  <li>
                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                      Last 28 Days</a>
                                  </li>
                                  <li>
                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                      Last Month</a>
                                  </li>
                                  <li>
                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                      Last Year</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <!-- END: Card Droopdown -->
                          </div>
                        </div>
                        <div class="card-body p-6">

                          <!-- BEGIN: Activity Card -->

                          <div>
                            <ul class="list-item space-y-3 h-full overflow-x-auto">



                              <li class="flex items-center space-x-3 rtl:space-x-reverse border-b border-slate-100 dark:border-slate-700 last:border-b-0 pb-3 last:pb-0">
                                <div>
                                  <div class="w-8 h-8 rounded-[100%]">
                                    <img src=assets/images/users/user-1.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                  </div>
                                </div>
                                <div class="text-start overflow-hidden text-ellipsis whitespace-nowrap max-w-[63%]">
                                  <div class="text-sm text-slate-600 dark:text-slate-300 overflow-hidden text-ellipsis whitespace-nowrap">
                                    Finance KPI Mobile app launch preparion meeting.
                                  </div>
                                </div>
                                <div class="flex-1 ltr:text-right rtl:text-left">
                                  <div class="text-sm font-light text-slate-400 dark:text-slate-400">
                                    1 hours
                                  </div>
                                </div>
                              </li>


                              <li class="flex items-center space-x-3 rtl:space-x-reverse border-b border-slate-100 dark:border-slate-700 last:border-b-0 pb-3 last:pb-0">
                                <div>
                                  <div class="w-8 h-8 rounded-[100%]">
                                    <img src=assets/images/users/user-2.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                  </div>
                                </div>
                                <div class="text-start overflow-hidden text-ellipsis whitespace-nowrap max-w-[63%]">
                                  <div class="text-sm text-slate-600 dark:text-slate-300 overflow-hidden text-ellipsis whitespace-nowrap">
                                    Finance KPI Mobile app launch preparion meeting.
                                  </div>
                                </div>
                                <div class="flex-1 ltr:text-right rtl:text-left">
                                  <div class="text-sm font-light text-slate-400 dark:text-slate-400">
                                    1 hours
                                  </div>
                                </div>
                              </li>


                              <li class="flex items-center space-x-3 rtl:space-x-reverse border-b border-slate-100 dark:border-slate-700 last:border-b-0 pb-3 last:pb-0">
                                <div>
                                  <div class="w-8 h-8 rounded-[100%]">
                                    <img src=assets/images/users/user-3.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                  </div>
                                </div>
                                <div class="text-start overflow-hidden text-ellipsis whitespace-nowrap max-w-[63%]">
                                  <div class="text-sm text-slate-600 dark:text-slate-300 overflow-hidden text-ellipsis whitespace-nowrap">
                                    Finance KPI Mobile app launch preparion meeting.
                                  </div>
                                </div>
                                <div class="flex-1 ltr:text-right rtl:text-left">
                                  <div class="text-sm font-light text-slate-400 dark:text-slate-400">
                                    1 hours
                                  </div>
                                </div>
                              </li>


                              <li class="flex items-center space-x-3 rtl:space-x-reverse border-b border-slate-100 dark:border-slate-700 last:border-b-0 pb-3 last:pb-0">
                                <div>
                                  <div class="w-8 h-8 rounded-[100%]">
                                    <img src=assets/images/users/user-4.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                  </div>
                                </div>
                                <div class="text-start overflow-hidden text-ellipsis whitespace-nowrap max-w-[63%]">
                                  <div class="text-sm text-slate-600 dark:text-slate-300 overflow-hidden text-ellipsis whitespace-nowrap">
                                    Finance KPI Mobile app launch preparion meeting.
                                  </div>
                                </div>
                                <div class="flex-1 ltr:text-right rtl:text-left">
                                  <div class="text-sm font-light text-slate-400 dark:text-slate-400">
                                    1 hours
                                  </div>
                                </div>
                              </li>


                              <li class="flex items-center space-x-3 rtl:space-x-reverse border-b border-slate-100 dark:border-slate-700 last:border-b-0 pb-3 last:pb-0">
                                <div>
                                  <div class="w-8 h-8 rounded-[100%]">
                                    <img src=assets/images/users/user-5.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                  </div>
                                </div>
                                <div class="text-start overflow-hidden text-ellipsis whitespace-nowrap max-w-[63%]">
                                  <div class="text-sm text-slate-600 dark:text-slate-300 overflow-hidden text-ellipsis whitespace-nowrap">
                                    Finance KPI Mobile app launch preparion meeting.
                                  </div>
                                </div>
                                <div class="flex-1 ltr:text-right rtl:text-left">
                                  <div class="text-sm font-light text-slate-400 dark:text-slate-400">
                                    1 hours
                                  </div>
                                </div>
                              </li>


                              <li class="flex items-center space-x-3 rtl:space-x-reverse border-b border-slate-100 dark:border-slate-700 last:border-b-0 pb-3 last:pb-0">
                                <div>
                                  <div class="w-8 h-8 rounded-[100%]">
                                    <img src=assets/images/users/user-6.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                  </div>
                                </div>
                                <div class="text-start overflow-hidden text-ellipsis whitespace-nowrap max-w-[63%]">
                                  <div class="text-sm text-slate-600 dark:text-slate-300 overflow-hidden text-ellipsis whitespace-nowrap">
                                    Finance KPI Mobile app launch preparion meeting.
                                  </div>
                                </div>
                                <div class="flex-1 ltr:text-right rtl:text-left">
                                  <div class="text-sm font-light text-slate-400 dark:text-slate-400">
                                    1 hours
                                  </div>
                                </div>
                              </li>


                              <li class="flex items-center space-x-3 rtl:space-x-reverse border-b border-slate-100 dark:border-slate-700 last:border-b-0 pb-3 last:pb-0">
                                <div>
                                  <div class="w-8 h-8 rounded-[100%]">
                                    <img src=assets/images/users/user-1.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                  </div>
                                </div>
                                <div class="text-start overflow-hidden text-ellipsis whitespace-nowrap max-w-[63%]">
                                  <div class="text-sm text-slate-600 dark:text-slate-300 overflow-hidden text-ellipsis whitespace-nowrap">
                                    Finance KPI Mobile app launch preparion meeting.
                                  </div>
                                </div>
                                <div class="flex-1 ltr:text-right rtl:text-left">
                                  <div class="text-sm font-light text-slate-400 dark:text-slate-400">
                                    1 hours
                                  </div>
                                </div>
                              </li>


                              <li class="flex items-center space-x-3 rtl:space-x-reverse border-b border-slate-100 dark:border-slate-700 last:border-b-0 pb-3 last:pb-0">
                                <div>
                                  <div class="w-8 h-8 rounded-[100%]">
                                    <img src=assets/images/users/user-2.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                  </div>
                                </div>
                                <div class="text-start overflow-hidden text-ellipsis whitespace-nowrap max-w-[63%]">
                                  <div class="text-sm text-slate-600 dark:text-slate-300 overflow-hidden text-ellipsis whitespace-nowrap">
                                    Finance KPI Mobile app launch preparion meeting.
                                  </div>
                                </div>
                                <div class="flex-1 ltr:text-right rtl:text-left">
                                  <div class="text-sm font-light text-slate-400 dark:text-slate-400">
                                    1 hours
                                  </div>
                                </div>
                              </li>


                              <li class="flex items-center space-x-3 rtl:space-x-reverse border-b border-slate-100 dark:border-slate-700 last:border-b-0 pb-3 last:pb-0">
                                <div>
                                  <div class="w-8 h-8 rounded-[100%]">
                                    <img src=assets/images/users/user-3.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                  </div>
                                </div>
                                <div class="text-start overflow-hidden text-ellipsis whitespace-nowrap max-w-[63%]">
                                  <div class="text-sm text-slate-600 dark:text-slate-300 overflow-hidden text-ellipsis whitespace-nowrap">
                                    Finance KPI Mobile app launch preparion meeting.
                                  </div>
                                </div>
                                <div class="flex-1 ltr:text-right rtl:text-left">
                                  <div class="text-sm font-light text-slate-400 dark:text-slate-400">
                                    1 hours
                                  </div>
                                </div>
                              </li>

                            </ul>
                          </div>
                          <!-- END: Activity Card -->



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