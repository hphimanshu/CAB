@extends('layouts.auth')

@section('content')
<div class="loginwrapper">
    <div class="lg-inner-column">
        <div class="left-column relative z-[1]">
            <div style="max-width: 520px; padding-top: 5rem; margin: 0 auto; text-align: center;">
                <a href="index.html"
                    style="display: inline-flex; align-items: center; gap: 0.5rem; text-decoration: none; justify-content: center;">
                    <img src="assets/images/logo/logo-c.svg" alt="Logo" style="height: 50px; width: auto;">
                    <span
                        style="font-family: 'Inter', sans-serif; font-weight: 700; font-size: 1.25rem; color: #1e293b;">CA
                        On Boarding</span>
                </a>
                <h5 style="margin-top: 1rem; font-family: 'Inter', sans-serif; font-weight: 400; color: #475569;">
                    Unlock Your Fast
                    <span style="font-weight: 700; color: #334155;">
                        & Best Performance
                    </span>
                </h5>
            </div>
            <div class="space-y-5">
                
                    <img class="w-full" src="assets/images/auth/cab-banner-1.png" alt="image">
                
            </div>
        </div>
        <div class="right-column  relative">
            <div class="inner-content h-full flex flex-col bg-white dark:bg-slate-800">
                <div class="auth-box h-full flex flex-col justify-center">
                    <div class="mobile-logo text-center mb-6 lg:hidden block">
                        <a href="index.html">
                            <img src="assets/images/logo/logo - c.svg" alt="" class="mb-10 dark_logo">
                            <img src="assets/images/logo/logo-white.svg" alt="" class="mb-10 white_logo">
                        </a>
                    </div>
                    <div class="text-center 2xl:mb-10 mb-4">
                        <h4 class="font-medium">Sign in</h4>
                        <div class="text-slate-500 text-base">
                            Sign in to your account to start using CAOnBoarding
                        </div>
                    </div>
                    <!-- BEGIN: Login Form -->
                    <form class="space-y-4" method="POST" action="{{ url('/login') }}">
                        @csrf

                        <!-- Email Input -->
                        <div class="fromGroup">
                            <label class="block capitalize form-label">Email</label>
                            <div class="relative">
                                <input type="email" name="email" class="form-control py-2"
                                    placeholder="Enter your email" value="{{ old('email') }}" required>
                                @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Password Input with Toggle -->
                        <div class="fromGroup">
                            <label class="block capitalize form-label">Password</label>
                            <div class="relative w-full">
                                <input id="password" type="password" name="password"
                                    class="form-control py-2 pr-12 w-full" placeholder="Enter your password" required>

                                <button id="passToggleBtn" type="button"
                                    class="absolute top-2.5 right-3 text-xl p-0 leading-none text-slate-600">
                                    <iconify-icon id="iconEyeOpen" icon="heroicons-outline:eye" class="hidden">
                                    </iconify-icon>
                                    <iconify-icon id="iconEyeOff" icon="heroicons-solid:eye-off"></iconify-icon>
                                </button>

                                @error('password')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>




                        <!-- Role Select -->
                        <div class="fromGroup">
                            <label class="block capitalize form-label">Select Role</label>
                            <div class="relative">
                                <select name="role" class="form-control py-2" required>
                                    <option value="">-- Select Role --</option>
                                    <option value="Super Admin">Super Admin</option>
                                    <option value="sarthee">Sarthee (Admin)</option>
                                    <option value="customer">Customer</option>
                                    <option value="AF">Affiliated Partner</option>
                                    <option value="SS">Sarthee Staff</option>
                                </select>
                                @error('role')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <!-- Submit Button with Spinner -->
                        <button id="loginBtn" type="submit"
                            class="btn btn-dark block w-full text-center flex items-center justify-center gap-2">
                            <span id="btnText">Sign In</span>
                            <!-- Spinner (Initially hidden) -->
                            <svg id="btnSpinner" class="hidden h-5 w-5 animate-spin text-white"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z">
                                </path>
                            </svg>
                        </button>

                    </form>



                    <!-- Password Toggle Script -->
                    <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        const toggleBtn = document.getElementById("passToggleBtn");
                        const passwordInput = document.getElementById("password");
                        const iconEyeOpen = document.getElementById("iconEyeOpen");
                        const iconEyeOff = document.getElementById("iconEyeOff");

                        toggleBtn.addEventListener("click", function() {
                            const isPassword = passwordInput.type === "password";

                            passwordInput.type = isPassword ? "text" : "password";
                            iconEyeOpen.classList.toggle("hidden", !isPassword);
                            iconEyeOff.classList.toggle("hidden", isPassword);
                        });

                        // Show loader on submit
                        document.querySelector("form").addEventListener("submit", function() {
                            const loginBtn = document.getElementById("loginBtn");
                            loginBtn.disabled = true;
                            document.getElementById("btnSpinner").classList.remove("hidden");
                            document.getElementById("btnText").textContent = "Signing In...";
                        });
                    });
                    </script>
                </div>
                <div class="auth-footer text-center">
                    &copy; Copyright {{ date('Y') }}, CAOnBoarding All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection