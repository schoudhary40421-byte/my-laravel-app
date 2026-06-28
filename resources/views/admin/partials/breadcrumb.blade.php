<div class="flex flex-col mb-6">
    <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">
        @yield('page_title', 'Dashboard')
    </h1>
    
    <nav class="flex mt-2" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-2 text-sm text-gray-500">
            <li>
                <a href="{{ url('admin/dashboard') }}" class="hover:text-indigo-600 transition-colors">Admin</a>
            </li>
            <li>
                <svg class="w-4 h-4 text-gray-400 mx-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </li>
            <li class="font-medium text-gray-800" aria-current="page">
                @yield('page_title', 'Dashboard')
            </li>
        </ol>
    </nav>
</div>