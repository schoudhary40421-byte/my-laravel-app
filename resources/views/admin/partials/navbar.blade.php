<header class="flex items-center justify-between px-6 py-4 bg-white border-b border-gray-200 shadow-sm shrink-0">
    <div class="flex items-center">
        <button @click="sidebarOpen = true"
            class="p-1 mr-4 text-gray-500 rounded-md md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <div class="flex items-center">
        <div x-data="{ dropdownOpen: false }" class="relative">
            <button @click="dropdownOpen = !dropdownOpen"
                class="flex items-center space-x-2 text-sm font-medium text-gray-700 transition-colors hover:text-indigo-600 focus:outline-none">
                <span>{{ auth()->user()->name ?? 'Admin User' }}</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>

            <div x-show="dropdownOpen" @click.away="dropdownOpen = false"
                x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95"
                class="absolute right-0 z-50 w-48 mt-3 overflow-hidden bg-white border border-gray-100 rounded-md shadow-lg ring-1 ring-black ring-opacity-5"
                style="display: none;">
                <div class="py-1">
                    <a href="{{ route('admin.profile.edit') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Your Profile</a>
                    <div class="border-t border-gray-100"></div>
                    <form method="POST" action="{{ route('logout') ?? '#' }}">
                        @csrf
                        <button type="submit"
                            class="block w-full px-4 py-2 text-sm text-left text-red-600 hover:bg-gray-50">
                            Sign out
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
