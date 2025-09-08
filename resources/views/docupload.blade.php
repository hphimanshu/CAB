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
                                <!-- BEGIN: Breadcrumb -->
                                <div class="mb-5">
                                    <ul class="m-0 p-0 list-none">
                                        <li
                                            class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                                            <a href="{{ route('dashboard') }}">
                                                <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                                                <iconify-icon icon="heroicons-outline:chevron-right"
                                                    class="relative text-slate-500 text-sm rtl:rotate-180">
                                                </iconify-icon>
                                            </a>
                                        </li>
                                        <li
                                            class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                                            User Doc Upload</li>
                                    </ul>
                                </div>
                                <!-- END: BreadCrumb -->
                                <div class="grid xl:grid-cols-2 grid-cols-1 gap-6">
                                    <div class="card">
                                        <div class="card-body flex flex-col p-6">
                                            <header
                                                class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                                                <div class="flex-1">
                                                    <div class="card-title text-slate-900 dark:text-white">User Details
                                                    </div>
                                                </div>

                                                <div>
                                                    <!-- BEGIN: Card Dropdown -->
                                                    <div class="relative">
                                                        <div class="dropdown relative">
                                                            <button class="text-xl text-center block w-full "
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <a href="#"
                                                                    class="font-medium text-slate-900 dark:text-white underline text-sm">
                                                                    {{ $user->user_id }}
                                                                </a>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!-- END: Card Droopdown -->
                                                </div>
                                            </header>
                                            <div class="card-text h-full ">
                                                <form method="POST" action="{{ route('docupload.store', ['user' => $user->id]) }}" enctype="multipart/form-data" id="docUploadForm">
                                                    @csrf
                                                    <input type="text" name="name" class="form-control"
                                                        value="{{ $user->name }}" readonly>
                                                    <input type="email" name="email" class="form-control"
                                                        value="{{ $user->email }}" readonly>
                                                    <input type="tel" name="mobile" class="form-control"
                                                        value="{{ $user->mobile_number }}" readonly>

                                                    <select name="document_type" class="form-control">
                                                        <option value="pan_card">PAN Card</option>
                                                        <option value="aadhaar_card">Aadhaar Card</option>
                                                        <option value="passport_photo">Passport Photo</option>
                                                        <option value="ga55">GA55</option>
                                                        <option value="itr">ITR</option>
                                                        <option value="itr_computation">ITR Computation</option>
                                                        <option value="bank_statement">Bank Statement</option>
                                                        <option value="salary_slip">Salary Slip</option>
                                                        <option value="cancel_cheque">Cancel Cheque</option>
                                                        <option value="business_registration_certificate">Business Registration Certificate</option>
                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">

                                        <div class="card-body flex flex-col p-6">
                                            <header
                                                class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                                                <div class="flex-1">
                                                    <div class="card-title text-slate-900 dark:text-white">Select File</div>
                                                </div>
                                            </header>
                                            <div class="card-text h-full ">
                                                <input type="file" name="document_file" class="form-control" accept=".pdf,.jpg,.jpeg,.png" required>
                                                <button type="submit" class="btn btn-primary mt-4">Upload</button>
                                               
                                                </form>
                                                 <div class="mt-4 hidden" id="progressContainer">
        <div class="w-full bg-slate-200 h-4 rounded">
            <div id="progressBar" class="h-4 bg-primary-500 rounded" style="width: 0%"></div>
        </div>

                                                @if(session('success') || session('error'))
@php
    $isSuccess = session()->has('success');
    $bgColor = $isSuccess ? 'bg-success-400' : 'bg-danger-500';
    $btnColor = $bgColor;
    $title = $isSuccess ? 'Success' : 'Error';
    $message = session('success') ?? session('error');
@endphp

<!-- Document Upload Feedback Modal -->
<div class="modal fade show fixed top-0 left-0 w-full h-full outline-none overflow-x-hidden overflow-y-auto z-50"
     id="feedback_backdrop" tabindex="-1" aria-modal="true" role="dialog"
     style="display: block;" data-bs-backdrop="static" data-bs-keyboard="false">

  <div class="modal-dialog relative w-auto pointer-events-none">
    <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white rounded-md">
      <div class="bg-white rounded-lg shadow">
        <div class="flex items-center justify-between p-5 border-b rounded-t {{ $bgColor }}">
          <h3 class="text-xl font-medium text-white capitalize">{{ $title }}</h3>
          <button type="button" class="text-white text-sm p-1.5 ml-auto" onclick="closeFeedbackModal()">
            <svg class="w-5 h-5" fill="white" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 
                0 111.414 1.414L11.414 10l4.293 4.293a1 1 
                0 01-1.414 1.414L10 11.414l-4.293 4.293a1 
                1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 
                1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>

        <div class="p-6 space-y-4">
                <h6 class="text-base text-slate-900" id="modalMessage">Uploading...</h6>
            </div>

        <div class="flex justify-end p-6 border-t border-slate-200 rounded-b">
          <button class="btn text-white {{ $btnColor }}" onclick="closeFeedbackModal()">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Script -->
<!-- <script>
  function closeFeedbackModal() {
    const modal = document.getElementById('feedback_backdrop');
    modal.classList.remove('show');
    modal.style.display = 'none';
  }

  @if(session('success'))
    setTimeout(closeFeedbackModal, 4000);
  @endif

 
</script> -->
<script>
function closeFeedbackModal() {
    const modal = document.getElementById('feedback_backdrop');
    if (modal) {
        modal.classList.remove('show');
        modal.style.display = 'none';
    }
}

@if(session('success'))
    setTimeout(closeFeedbackModal, 4000);
@endif


// Upload with loader & percentage progress
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('docUploadForm');
    const progressContainer = document.getElementById('progressContainer');
    const progressBar = document.getElementById('progressBar');
    const alertBox = document.getElementById('uploadAlert');

    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(form);
            const xhr = new XMLHttpRequest();

            xhr.open('POST', form.action, true);
            xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');

            progressContainer.classList.remove('hidden');
            progressBar.style.width = '0%';
            alertBox.classList.add('hidden');

            xhr.upload.addEventListener('progress', function (e) {
                if (e.lengthComputable) {
                    const percent = Math.round((e.loaded / e.total) * 100);
                    progressBar.style.width = percent + '%';
                }
            });

            xhr.onload = function () {
                progressContainer.classList.add('hidden');

                if (xhr.status === 200) {
                    alertBox.className = 'bg-success-400 text-white p-2 rounded mt-2';
                    alertBox.textContent = 'Document uploaded successfully.';
                    alertBox.classList.remove('hidden');
                    form.reset();
                    setTimeout(closeFeedbackModal, 3000);
                } else {
                    alertBox.className = 'bg-danger-500 text-white p-2 rounded mt-2';
                    alertBox.textContent = 'Upload failed. Please check your file or try again.';
                    alertBox.classList.remove('hidden');
                }
            };

            xhr.onerror = function () {
                progressContainer.classList.add('hidden');
                alertBox.className = 'bg-danger-500 text-white p-2 rounded mt-2';
                alertBox.textContent = 'Upload error occurred.';
                alertBox.classList.remove('hidden');
            };

            xhr.send(formData);
        });
    }
});
</script>

@endif



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