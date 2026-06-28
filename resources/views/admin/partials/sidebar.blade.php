<aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
    class="fixed inset-y-0 left-0 z-30 w-64 flex flex-col overflow-y-auto transition-transform duration-300 ease-in-out bg-slate-900 md:static md:translate-x-0 md:inset-0">

    <div class="flex items-center justify-center h-16 bg-slate-950 border-b border-slate-800 shrink-0">
        <span class="text-xl font-bold tracking-wider text-white uppercase">Admin Panel</span>
    </div>

    <nav class="flex-1 px-4 py-6 space-y-2">
        {{-- <a href="{{ url('admin/dashboard') }}"
            class="flex items-center px-4 py-2.5 rounded-lg transition-colors {{ request()->is('admin/dashboard*') ? 'bg-indigo-600 text-white shadow-sm' : 'text-slate-300 hover:bg-slate-800 hover:text-white' }}">
            <svg class="w-5 h-5 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                </path>
            </svg>
            <span class="font-medium">Dashboard</span>
        </a> --}}

        <a href="{{ url('admin/enquiries') }}"
            class="flex items-center px-4 py-2.5 rounded-lg transition-colors {{ request()->is('admin/enquiries*') ? 'bg-indigo-600 text-white shadow-sm' : 'text-slate-300 hover:bg-slate-800 hover:text-white' }}">
            <svg class="w-5 h-5 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                </path>
            </svg>
            <span class="font-medium">Enquiries</span>
        </a>

        <a href="{{ url('admin/settings') }}"
            class="flex items-center px-4 py-2.5 rounded-lg transition-colors {{ request()->is('admin/settings*') ? 'bg-indigo-600 text-white shadow-sm' : 'text-slate-300 hover:bg-slate-800 hover:text-white' }}">
            <i class="fa-regular fa-gear mr-3"></i>
            <span class="font-medium">Web Settings</span>
        </a>

        <a href="{{ url('admin/profile') }}"
            class="flex items-center px-4 py-2.5 rounded-lg transition-colors {{ request()->is('admin/profile*') ? 'bg-indigo-600 text-white shadow-sm' : 'text-slate-300 hover:bg-slate-800 hover:text-white' }}">
            <i class="fa-regular fa-user-gear mr-3"></i>
            <span class="font-medium">Profile Settings</span>
        </a>
    </nav>
</aside>
