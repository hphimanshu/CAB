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
                                            user documents</li>
                                    </ul>
                                </div>
                                <!-- END: BreadCrumb -->
                                <div class="space-y-5">

                                    <div class="grid grid-cols-12 gap-5">
                                        <div class="xl:col-span-8 lg:col-span-7 col-span-12">
                                            <div class="card">
                                                <header class="card-header">
                                                    <h4 class="card-title">
                                                        Customer User Details
                                                    </h4>
                                                    <div>
                                                        <!-- BEGIN: Card Dropdown -->
                                                        <div class="relative">
                                                            <div class="dropdown relative">
                                                                <button class="text-xl text-center block w-full "
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <a href="{{ route('register') }}"
                                                                        class="font-medium text-slate-900 dark:text-white underline text-sm">
                                                                        Add New User +
                                                                    </a>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!-- END: Card Droopdown -->
                                                    </div>
                                                </header>
                                                <div class="card-body px-6 pb-6">
                                                    <div class="overflow-x-auto -mx-6 CAOnBoarding-data-table">
                                                        <span class=" col-span-8  hidden"></span>
                                                        <span class="  col-span-4 hidden"></span>
                                                        <div class="inline-block min-w-full align-middle">
                                                            <div class="overflow-hidden ">
                                                                <table
                                                                    class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700"
                                                                    id="data-table">
                                                                    <thead
                                                                        class=" border-t border-slate-100 dark:border-slate-800">
                                                                        <tr>

                                                                            <th scope="col" class=" table-th ">
                                                                                Id
                                                                            </th>

                                                                            <th scope="col" class=" table-th ">
                                                                                Username
                                                                            </th>

                                                                            <th scope="col" class=" table-th ">
                                                                                Name
                                                                            </th>

                                                                            <th scope="col" class=" table-th ">
                                                                                Status
                                                                            </th>

                                                                            <th scope="col" class=" table-th ">
                                                                                Action
                                                                            </th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody
                                                                        class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">

                                                                        @foreach ($customers as $index => $user)
                                                                        <tr>
                                                                            <td class="table-td">{{ $index + 1 }}</td>
                                                                            <td class="table-td">#{{ $user->user_id }}
                                                                            </td>
                                                                            <td class="table-td">
                                                                                <span class="flex">
                                                                                    <span
                                                                                        class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                                                                                        <img src="assets/images/all-img/customer_1.png"
                                                                                            alt="{{ $user->name }}"
                                                                                            class="object-cover w-full h-full rounded-full">
                                                                                    </span>
                                                                                    <span
                                                                                        class="text-sm text-slate-600 dark:text-slate-300 capitalize">{{ $user->name }}</span>
                                                                                </span>
                                                                            </td>
                                                                            <td class="table-td">
                                                                                {{-- You can adjust status here; for example, you could show “paid” or any status dynamically --}}
                                                                                <div
                                                                                    class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500bg-success-500">
                                                                                    paid
                                                                                </div>
                                                                            </td>
                                                                            <td class="table-td">
                                                                                <div>
                                                                                    <div class="relative">
                                                                                        <div class="dropdown relative">
                                                                                            <button
                                                                                                class="text-xl text-center block w-full"
                                                                                                type="button"
                                                                                                id="tableDropdownMenuButton{{ $index }}"
                                                                                                data-bs-toggle="dropdown"
                                                                                                aria-expanded="false">
                                                                                                <iconify-icon
                                                                                                    icon="heroicons-outline:dots-vertical">
                                                                                                </iconify-icon>
                                                                                            </button>
                                                                                            <ul
                                                                                                class="dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700 shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                                                                                <li>
                                                                                                    <a href="javascript:void(0)" class="view-documents-btn text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white" data-user-id="{{ $user->user_id }}">View Documents</a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="{{ route('docupload', ['user' => $user->user_id]) }}" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                                                                                        Update / Add
                                                                                                        Docs
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                                                                                        Delete
                                                                                                    </a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-4 lg:col-span-5 col-span-12">
                                            <div class="card h-full">
                                                <div class="card-header">
                                                    <h4 class="card-title">Customer Documents Files</h4>
                                                    <div>...</div>
                                                </div>
                                                <div class="card-body p-6">
                                                    <!-- BEGIN: Files Card -->
                                                    <div>
                                                    <!-- Tab Content -->
                                                    <ul class="nav nav-tabs flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4" id="docTabs" role="tablist"></ul>
                                                    <div class="tab-content mt-4" id="tabs-tabContent"></div>             
                                                    </div>

                                                    <!-- <ul class="divide-y divide-slate-100 dark:divide-slate-700">

                                                        <li class="block py-[8px]">
                                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                                                <div class="flex-1 flex space-x-2 rtl:space-x-reverse">
                                                                    <div class="flex-none">
                                                                        <div class="h-8 w-8">
                                                                            <img src=assets/images/icon/file-1.svg
                                                                                alt=""
                                                                                class="block w-full h-full object-cover rounded-full border hover:border-white border-transparent">
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-1">
                                                                        <span
                                                                            class="block text-slate-600 text-sm dark:text-slate-300">
                                                                            Dashboard.fig
                                                                        </span>
                                                                        <span
                                                                            class="block font-normal text-xs text-slate-500 mt-1">
                                                                            06 June 2021 / 155MB
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-none">
                                                                    <button type="button"
                                                                        class="text-xs text-slate-900 dark:text-white">
                                                                        Download
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li class="block py-[8px]">
                                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                                                <div class="flex-1 flex space-x-2 rtl:space-x-reverse">
                                                                    <div class="flex-none">
                                                                        <div class="h-8 w-8">
                                                                            <img src=assets/images/icon/pdf-1.svg alt=""
                                                                                class="block w-full h-full object-cover rounded-full border hover:border-white border-transparent">
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-1">
                                                                        <span
                                                                            class="block text-slate-600 text-sm dark:text-slate-300">
                                                                            Ecommerce.pdf
                                                                        </span>
                                                                        <span
                                                                            class="block font-normal text-xs text-slate-500 mt-1">
                                                                            06 June 2021 / 155MB
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-none">
                                                                    <button type="button"
                                                                        class="text-xs text-slate-900 dark:text-white">
                                                                        Download
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li class="block py-[8px]">
                                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                                                <div class="flex-1 flex space-x-2 rtl:space-x-reverse">
                                                                    <div class="flex-none">
                                                                        <div class="h-8 w-8">
                                                                            <img src=assets/images/icon/zip-1.svg alt=""
                                                                                class="block w-full h-full object-cover rounded-full border hover:border-white border-transparent">
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-1">
                                                                        <span
                                                                            class="block text-slate-600 text-sm dark:text-slate-300">
                                                                            Job portal_app.zip
                                                                        </span>
                                                                        <span
                                                                            class="block font-normal text-xs text-slate-500 mt-1">
                                                                            06 June 2021 / 155MB
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-none">
                                                                    <button type="button"
                                                                        class="text-xs text-slate-900 dark:text-white">
                                                                        Download
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li class="block py-[8px]">
                                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                                                <div class="flex-1 flex space-x-2 rtl:space-x-reverse">
                                                                    <div class="flex-none">
                                                                        <div class="h-8 w-8">
                                                                            <img src=assets/images/icon/pdf-2.svg alt=""
                                                                                class="block w-full h-full object-cover rounded-full border hover:border-white border-transparent">
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-1">
                                                                        <span
                                                                            class="block text-slate-600 text-sm dark:text-slate-300">
                                                                            Ecommerce.pdf
                                                                        </span>
                                                                        <span
                                                                            class="block font-normal text-xs text-slate-500 mt-1">
                                                                            06 June 2021 / 155MB
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-none">
                                                                    <button type="button"
                                                                        class="text-xs text-slate-900 dark:text-white">
                                                                        Download
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li class="block py-[8px]">
                                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                                                <div class="flex-1 flex space-x-2 rtl:space-x-reverse">
                                                                    <div class="flex-none">
                                                                        <div class="h-8 w-8">
                                                                            <img src=assets/images/icon/scr-1.svg alt=""
                                                                                class="block w-full h-full object-cover rounded-full border hover:border-white border-transparent">
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-1">
                                                                        <span
                                                                            class="block text-slate-600 text-sm dark:text-slate-300">
                                                                            Screenshot.jpg
                                                                        </span>
                                                                        <span
                                                                            class="block font-normal text-xs text-slate-500 mt-1">
                                                                            06 June 2021 / 155MB
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-none">
                                                                    <button type="button"
                                                                        class="text-xs text-slate-900 dark:text-white">
                                                                        Download
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </li>

                                                    </ul> -->
                                                    <!-- END: FIles Card -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="document-viewer" class="mt-6 border rounded p-4 bg-white dark:bg-slate-800 shadow">
                                    <h3 class="text-lg font-semibold mb-2">Document Preview</h3>
                                    <iframe id="docPreviewFrame" src="" width="100%" height="500px" class="w-full border rounded"></iframe>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<script>
document.addEventListener('DOMContentLoaded', function () {

    // Delegated click listener to table parent for all view-documents-btn
    document.getElementById('data-table').addEventListener('click', function (e) {
        if (e.target.classList.contains('view-documents-btn')) {
            e.preventDefault();
            const userId = e.target.dataset.userId;
            loadUserDocuments(userId);
        }
    });

    // Function to load user documents dynamically
    function loadUserDocuments(userId) {
        fetch(`/userdocuments/ajax/${userId}`)
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    alert(data.error);
                    document.getElementById('docTabs').innerHTML = '';
                    document.getElementById('tabs-tabContent').innerHTML = '<p class="text-red-500 p-4">No documents found for this user.</p>';
                    document.getElementById('docPreviewFrame').src = '';
                    return;
                }

                let tabsNav = '';
                let tabsContent = '';
                let isFirst = true;

                for (let docType in data) {
                    const files = data[docType];
                    const tabId = 'tab-' + docType + '-' + userId;

                    tabsNav += `
                        <li class="nav-item" role="presentation">
                            <a class="nav-link w-full block font-medium text-sm font-Inter leading-tight capitalize border-x-0 border-t-0 border-b border-transparent px-4 pb-2 my-2 hover:border-transparent focus:border-transparent dark:text-slate-300 ${isFirst ? 'active' : ''}" id="${tabId}-tab"
                               data-bs-toggle="pill" href="#${tabId}" role="tab"
                               aria-controls="${tabId}" aria-selected="${isFirst}">
                                ${docType.replace('_', ' ')}
                            </a>
                        </li>`;

                    let fileHtml = files.map(file => {
                        const filename = file.file_path.split('/').pop();
                        const ext = filename.split('.').pop().toLowerCase();
                        let icon = '';

                        if (ext === 'pdf') {
                            icon = `<img src="/assets/images/icon/pdf-1.svg" alt="pdf" class="w-6 h-6 mr-2 inline-block" />`;
                        } else if (['jpg', 'jpeg', 'png'].includes(ext)) {
                            icon = `<img src="/assets/images/icon/scr-1.svg" alt="img" class="w-6 h-6 mr-2 inline-block" />`;
                        }

                        return `
                            <div class="p-2 border rounded bg-slate-50 dark:bg-slate-700 flex items-center space-x-2">
                                ${icon}
                                <a href="javascript:void(0);" class="text-blue-500 underline view-doc-link" data-file="/storage/${file.file_path.replace('public/', '')}">
                                    ${filename}
                                </a>
                            </div>`;
                    }).join('');

                    tabsContent += `
                        <div class="tab-pane fade ${isFirst ? 'show active' : ''}" id="${tabId}" role="tabpanel" aria-labelledby="${tabId}-tab">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">${fileHtml}</div>
                        </div>`;

                    isFirst = false;
                }

                document.getElementById('docTabs').innerHTML = tabsNav;
                document.getElementById('tabs-tabContent').innerHTML = tabsContent;
                document.getElementById('docPreviewFrame').src = '';
            })
            .catch(err => {
                console.error("Error fetching documents:", err);
                alert("Failed to load documents.");
            });
    }

    // Global listener for previewing document in iframe
    document.body.addEventListener('click', function (e) {
        if (e.target.classList.contains('view-doc-link')) {
            const fileUrl = e.target.dataset.file;
            document.getElementById('docPreviewFrame').src = fileUrl;
        }
    });
});
</script>




        </div>
        @include('partials.footer')

    </div>
</main>

@endsection