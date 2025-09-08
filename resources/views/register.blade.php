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
                                        Register User</li>
                                </ul>
                            </div>
                            <!-- END: BreadCrumb -->


                            <div class="card">
                                <div class="card-body flex flex-col p-6">
                                    <header
                                        class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                                        <div class="flex-1">
                                            <div class="card-title text-slate-900 dark:text-white">Register User</div>
                                        </div>
                                    </header>
                                    <div class="card-text h-full">
                                        <div class="flex items-start">
                                            <ul class="nav nav-pills flex flex-col flex-wrap list-none pl-0 mr-4"
                                                id="pills-tabVertical" role="tablist">
                                                <li class="nav-item text-center mb-2" role="presentation">
                                                    <a href="#pills-homeVertical"
                                                        class="nav-link block font-medium font-Inter text-sm leading-tight capitalize rounded-md px-6 py-3 focus:outline-none focus:ring-0 dark:bg-slate-900 dark:text-slate-300 active"
                                                        id="pills-home-tabVertical" data-bs-toggle="pill"
                                                        data-bs-target="#pills-homeVertical" role="tab"
                                                        aria-controls="pills-homeVertical" aria-selected="true">Register
                                                        One User</a>
                                                </li>
                                                <li class="nav-item flex-grow text-center my-2" role="presentation">
                                                    <a href="#pills-profileVertical"
                                                        class="nav-link block font-medium font-Inter text-sm leading-tight capitalize rounded-md px-6 py-3 focus:outline-none focus:ring-0 dark:bg-slate-900 dark:text-slate-300"
                                                        id="pills-profile-tabVertical" data-bs-toggle="pill"
                                                        data-bs-target="#pills-profileVertical" role="tab"
                                                        aria-controls="pills-profileVertical"
                                                        aria-selected="false">Register Multiple User</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content w-full" id="pills-tabContentVertical">
                                                <div class="tab-pane fade show active" id="pills-homeVertical"
                                                    role="tabpanel" aria-labelledby="pills-home-tabVertical">
                                                    <form class="space-y-4" method="POST"
                                                        action="{{ route('register') }}">
                                                        @csrf
                                                        <div class="grid md:grid-cols-2 gap-6">
                                                            <!-- First Name -->
                                                            <div class="input-area relative">
                                                                <label class="form-label">First Name</label>
                                                                <input type="text" name="first_name"
                                                                    class="form-control" placeholder="First Name"
                                                                    value="{{ old('first_name') }}" required>
                                                                @error('first_name') <span
                                                                    class="text-red-500 text-sm">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <!-- Last Name -->
                                                            <div class="input-area relative">
                                                                <label class="form-label">Last Name</label>
                                                                <input type="text" name="last_name" class="form-control"
                                                                    placeholder="Last Name"
                                                                    value="{{ old('last_name') }}" required>
                                                                @error('last_name') <span
                                                                    class="text-red-500 text-sm">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <!-- PAN Card -->
                                                            <div class="input-area relative">
                                                                <label class="form-label">PAN Card</label>
                                                                <input type="text" name="pan_card" class="form-control"
                                                                    placeholder="PAN Card Number"
                                                                    value="{{ old('pan_card') }}" required>
                                                                @error('pan_card') <span
                                                                    class="text-red-500 text-sm">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <!-- Email -->
                                                            <div class="input-area relative">
                                                                <label class="form-label">Email</label>
                                                                <input type="email" name="email" class="form-control"
                                                                    placeholder="Enter Your Email"
                                                                    value="{{ old('email') }}" required>
                                                                @error('email') <span
                                                                    class="text-red-500 text-sm">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <!-- Mobile -->
                                                            <div class="input-area relative">
                                                                <label class="form-label">Mobile Number</label>
                                                                <input type="tel" name="mobile" class="form-control"
                                                                    placeholder="Phone Number"
                                                                    value="{{ old('mobile') }}" required>
                                                                @error('mobile') <span
                                                                    class="text-red-500 text-sm">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <!-- Role -->
                                                            <div class="input-area relative">
                                                                <label class="form-label">Select Role</label>
                                                                <select name="role" class="form-control" required>
                                                                    <option value="">-- Select Role --</option>
                                                                    <option value="Super Admin">Super Admin</option>
                                                                    <option value="sarthee">Sarthee (Admin)</option>
                                                                    <option value="customer">Customer</option>
                                                                    <option value="AF">Affiliated Partner (AF)</option>
                                                                    <option value="SS">Sarthee Staff (SS)</option>
                                                                </select>
                                                                @error('role') <span
                                                                    class="text-red-500 text-sm">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <!-- Password -->
                                                            <div class="input-area relative">
                                                                <label class="form-label">Password</label>
                                                                <div class="relative">
                                                                    <input id="password" type="password" name="password"
                                                                        class="form-control pr-9" placeholder="Password"
                                                                        required>
                                                                    <button id="togglePassword"
                                                                        class="absolute top-2.5 right-3 text-xl text-slate-400"
                                                                        type="button">
                                                                        <iconify-icon id="eyeOpen"
                                                                            icon="heroicons-outline:eye" class="hidden">
                                                                        </iconify-icon>
                                                                        <iconify-icon id="eyeClose"
                                                                            icon="heroicons-solid:eye-off">
                                                                        </iconify-icon>
                                                                    </button>
                                                                </div>
                                                                @error('password') <span
                                                                    class="text-red-500 text-sm">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <!-- Confirm Password -->
                                                            <div class="input-area relative">
                                                                <label class="form-label">Confirm Password</label>
                                                                <div class="relative">
                                                                    <input id="confirm_password" type="password"
                                                                        name="password_confirmation"
                                                                        class="form-control pr-9"
                                                                        placeholder="Confirm Password" required>
                                                                    <button id="toggleConfirmPassword"
                                                                        class="absolute top-2.5 right-3 text-xl text-slate-400"
                                                                        type="button">
                                                                        <iconify-icon id="eyeOpenConfirm"
                                                                            icon="heroicons-outline:eye" class="hidden">
                                                                        </iconify-icon>
                                                                        <iconify-icon id="eyeCloseConfirm"
                                                                            icon="heroicons-solid:eye-off">
                                                                        </iconify-icon>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Submit Button -->
                                                        <div class="relative">
                                                            <button
                                                                class="btn flex justify-center btn-dark ml-auto">Submit</button>
                                                        </div>
                                                    </form>

                                                    <!-- Password Toggle Script -->
                                                    <script>
                                                    // Toggle Password
                                                    document.getElementById('togglePassword').addEventListener('click',
                                                        function() {
                                                            const input = document.getElementById('password');
                                                            const eyeOpen = document.getElementById('eyeOpen');
                                                            const eyeClose = document.getElementById('eyeClose');
                                                            input.type = input.type === 'password' ? 'text' :
                                                                'password';
                                                            eyeOpen.classList.toggle('hidden');
                                                            eyeClose.classList.toggle('hidden');
                                                        });

                                                    // Toggle Confirm Password
                                                    document.getElementById('toggleConfirmPassword').addEventListener(
                                                        'click',
                                                        function() {
                                                            const input = document.getElementById(
                                                                'confirm_password');
                                                            const eyeOpen = document.getElementById(
                                                                'eyeOpenConfirm');
                                                            const eyeClose = document.getElementById(
                                                                'eyeCloseConfirm');
                                                            input.type = input.type === 'password' ? 'text' :
                                                                'password';
                                                            eyeOpen.classList.toggle('hidden');
                                                            eyeClose.classList.toggle('hidden');
                                                        });
                                                    </script>
                                                </div>
                                                <div class="tab-pane fade" id="pills-profileVertical" role="tabpanel"
                                                    aria-labelledby="pills-profile-tabVertical">
                                                    <form method="POST" action="{{ route('import.users.csv') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="input-area relative">
                                                            <label class="form-label">Upload Users Excel</label>
                                                            <input type="file" name="csv_file" class="form-control"
                                                                accept=".csv" required>
                                                            @error('excel_file')
                                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <button class="btn btn-dark mt-4">Upload Users</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                            $isSuccess = session('success');
                            $bgColor = $isSuccess ? 'bg-success-400' : 'bg-danger-500';
                            $btnColor = $isSuccess ? 'bg-success-400' : 'bg-danger-500';
                            $title = $isSuccess ? 'Success' : 'Error';
                            $message = session('success') ?? session('error');
                            @endphp

                            @if(session('success') || session('error'))
                            <!-- Modal -->
                            <div class="modal fade show fixed top-0 left-0 w-full h-full outline-none overflow-x-hidden overflow-y-auto z-50"
                                id="feedback_backdrop" tabindex="-1" aria-labelledby="feedback_label" aria-modal="true"
                                role="dialog" style="display: block;" data-bs-backdrop="static"
                                data-bs-keyboard="false">

                                <div class="modal-dialog relative w-auto pointer-events-none">
                                    <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto 
                bg-white bg-clip-padding rounded-md outline-none text-current">

                                        <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                                            <!-- Modal Header -->
                                            <div
                                                class="flex items-center justify-between p-5 border-b rounded-t {{ $bgColor }}">
                                                <h3 class="text-xl font-medium text-white capitalize">
                                                    {{ $title }}
                                                </h3>
                                                <button type="button"
                                                    class="text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                                    onclick="closeFeedbackModal()">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="#ffffff"
                                                        viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 
                    111.414 1.414L11.414 10l4.293 4.293a1 1 0 
                    01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 
                    01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 
                    010-1.414z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>

                                            <!-- Modal Body -->
                                            <div class="p-6 space-y-4">
                                                <h6 class="text-base text-slate-900 dark:text-white leading-6">
                                                    {{ $message }}
                                                </h6>
                                            </div>

                                            <!-- Modal Footer -->
                                            <div
                                                class="flex items-center justify-end p-6 space-x-2 border-t border-slate-200 rounded-b">
                                                <button
                                                    class="btn inline-flex justify-center text-white {{ $btnColor }}"
                                                    onclick="closeFeedbackModal()">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Script -->
                            <script>
                            function closeFeedbackModal() {
                                const modal = document.getElementById('feedback_backdrop');
                                modal.classList.remove('show');
                                modal.style.display = 'none';
                                document.body.classList.remove('modal-open');
                                document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
                            }

                            // Auto-close success after 5 seconds
                            @if(session('success'))
                            setTimeout(closeFeedbackModal, 5000);
                            @endif
                            </script>
                            @endif




                        </div>

                    </div>
                </div>

            </div>
        </div>

        @include('partials.footer')
    </div>
</main>

@endsection