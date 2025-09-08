<!-- BEGIN: Sidebar -->
<div class="sidebar-wrapper group">
      <div id="bodyOverlay" class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden"></div>
      <div class="logo-segment">
        <a class="flex items-center" href="index.html">
          <img src="{{ asset('assets/images/logo/logo-c.svg') }}" class="black_logo" alt="logo">
          <img src="{{ asset('assets/images/logo/logo-c-white.svg') }}" class="white_logo" alt="logo">
          <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white">CAOnBoarding</span>
        </a>
        <!-- Sidebar Type Button -->
        <div id="sidebar_type" class="cursor-pointer text-slate-900 dark:text-white text-lg">
          <span class="sidebarDotIcon extend-icon cursor-pointer text-slate-900 dark:text-white text-2xl">
        <div class="h-4 w-4 border-[1.5px] border-slate-900 dark:border-slate-700 rounded-full transition-all duration-150 ring-2 ring-inset ring-offset-4 ring-black-900 dark:ring-slate-400 bg-slate-900 dark:bg-slate-400 dark:ring-offset-slate-700"></div>
      </span>
          <span class="sidebarDotIcon collapsed-icon cursor-pointer text-slate-900 dark:text-white text-2xl">
        <div class="h-4 w-4 border-[1.5px] border-slate-900 dark:border-slate-700 rounded-full transition-all duration-150"></div>
      </span>
        </div>
        <button class="sidebarCloseIcon text-2xl">
          <iconify-icon class="text-slate-900 dark:text-slate-200" icon="clarity:window-close-line"></iconify-icon>
        </button>
      </div>
      <div id="nav_shadow" class="nav_shadow h-[60px] absolute top-[80px] nav-shadow z-[1] w-full transition-all duration-200 pointer-events-none
      opacity-0"></div>
      <div class="sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] overflow-y-auto z-50" id="sidebar_menus">
        <ul class="sidebar-menu">
          <li class="sidebar-menu-title">MENU</li>
          <li class="">
            <a href="{{ route('dashboard') }}" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:home"></iconify-icon>
            <span>Dashboard</span>
              </span>
            </a>
          </li>
          <li class="sidebar-menu-title">Profile</li>
          <li class="">
            <a href="{{ route('customer') }}" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:user"></iconify-icon>
            <span>Customers</span>
              </span>
            </a>
          </li>
          <li class="">
            <a href="{{ route('userdocuments') }}" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:archive-box"></iconify-icon>
            <span>Documents</span>
              </span>
            </a>
          </li>
          <li class="">
            <a href="#" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:identification"></iconify-icon>
            <span>Firm Pofile</span>
              </span>
            </a>
          </li>
          <!-- Apps Area -->
          <li class="sidebar-menu-title">APPS</li>
          <li class="">
            <a href="{{ route('calander') }}" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:calendar"></iconify-icon>
            <span>Calander</span>
              </span>
            </a>
          </li>
          <li class="">
            <a href="{{ route('todo') }}" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:clipboard-check"></iconify-icon>
            <span>ToDo</span>
              </span>
            </a>
          </li>
        </ul>
        <!-- Upgrade Your Business Plan Card Start -->

         <div class="mt-7 p-6 relative z-[1] rounded-2xl text-white bg-slate-900 dark:bg-slate-800" id="sidebar_bottom_wizard">
                      <div class="max-w-[168px]">
                        <div class="widget-title">Unlimited Access</div>
                        <div class="text-xs font-normal">
                          Upgrade your system to business plan
                        </div>
                      </div>
                      <div class="mt-6 mb-14">
                        <button class="btn bg-white hover:bg-opacity-80 text-slate-900 btn-sm">
                          Upgrade
                        </button>
                      </div>
                      <img src=assets/images/svg/line.svg alt="" class="absolute left-0 bottom-0 w-full z-[-1]">
                      <img src="{{ asset('assets/images/svg/itdotz.svg') }}" alt="" class="absolute ltr:right-5 rtl:left-5 -bottom-4 z-[-1]">
                    </div>
        <!-- Upgrade Your Business Plan Card Start -->
      </div>
    </div>
    <!-- End: Sidebar -->