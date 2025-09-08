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
                                        User Profile</li>
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
                                                    <a href="profile-setting" class="absolute right-2 h-8 w-8 bg-slate-50 text-slate-600 rounded-full shadow-sm flex flex-col items-center justify-center md:top-[140px] top-[100px]">
                                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex-1">
                                                <div
                                                    class="text-2xl font-medium text-slate-900 dark:text-slate-200 mb-[3px]">
                                                   {{ $user->name }}
                                                </div>
                                                <div class="text-sm font-light text-slate-600 dark:text-slate-400">
                                                    {{ $user->user_id }}
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
                                                Total Spent
                                            </div>
                                        </div>
                                        <!-- end single -->
                                        <div class="flex-1">
                                            <div class="text-base text-slate-900 dark:text-slate-300 font-medium mb-1">
                                                
                                                <a href="{{ route('firmprofile', ['user_id' => Auth::user()->user_id]) }}" class="navItem"><span class="flex items-center"><iconify-icon class=" nav-icon" icon="heroicons-outline:identification"></iconify-icon>Firm Profile</span></a>
                                            </div>
                                        </div>
                                        <!-- end single -->
                                       <div class="flex-1">
                                            <div class="text-base text-slate-900 dark:text-slate-300 font-medium mb-1">
                                                3200
                                            </div>
                                        </div> 
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
                                                                {{ $user->email }}
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
                                                                {{ $user->mobile_number }}
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
                                                               address
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

  @if(session('error'))
<!-- Modal -->
<div class="modal fade show fixed top-0 left-0 w-full h-full outline-none overflow-x-hidden overflow-y-auto" 
     id="disabled_backdrop" tabindex="-1" aria-labelledby="disabled_backdrop_label" aria-modal="true" 
     role="dialog" style="display: block;" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog relative w-auto pointer-events-none">
    <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
      <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
        <!-- Modal header -->
        <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-black-500">
          <h3 class="text-xl font-medium text-white dark:text-white capitalize">
            Error
          </h3>
          <button type="button" class="text-slate-400 bg-transparent hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-slate-600 dark:hover:text-white" 
                  onclick="closeModal()">
            <svg aria-hidden="true" class="w-5 h-5" fill="#ffffff" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10
              11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
        </div>
        <!-- Modal body -->
        <div class="p-6 space-y-4">
          <h6 class="text-base text-slate-900 dark:text-white leading-6">
            {{ session('error') }}
          </h6>
        </div>
        <!-- Modal footer -->
        <div class="flex items-center justify-end p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
          <button class="btn inline-flex justify-center text-white bg-black-500" onclick="closeModal()">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Closing Script -->
<script>
  function closeModal() {
    const modal = document.getElementById('disabled_backdrop');
    modal.classList.remove('show');
    modal.style.display = 'none';
    document.body.classList.remove('modal-open');
    document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
  }
</script>
@endif



</main>

@endsection