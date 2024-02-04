<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 main-div">
    {{-- dark:bg-gray-900 removed dark bg class --}}
    {{-- <div>
        {{ $logo }}
    </div> --}}

    <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg form-con">
        {{-- dark:bg-gray-800 / mt-6 --}}
        {{ $slot }}
    </div>
</div>
