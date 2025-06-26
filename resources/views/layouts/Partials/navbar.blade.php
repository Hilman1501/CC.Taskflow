<nav class="bg-gradient-to-r from-blue-500 to-blue-700 shadow-md px-6 py-4 rounded-2xl mx-6 my-4">
    <div class="flex flex-wrap justify-between items-center">

        {{-- Kiri: Judul dan Breadcrumb --}}
        <div class="flex flex-col text-white">
            <ol class="flex items-center space-x-2 text-sm">
                <li><a href="{{ route('dashboard') }}" class="opacity-70 hover:opacity-100">Pages</a></li>
                <li class="opacity-50">/</li>
                <li class="font-medium">Dashboard</li>
            </ol>
            <h6 class="text-lg font-bold mt-1">TaskFlow</h6>
        </div>

        {{-- Tengah: Menu Navigasi --}}
        <div class="flex items-center space-x-4 mt-4 lg:mt-0">
            <a href="{{ route('dashboard') }}"
                class="flex items-center px-4 py-2 text-sm font-semibold rounded-lg transition-colors
                {{ Request::is('dashboard') ? 'bg-white text-blue-700' : 'text-white hover:bg-blue-600/30' }}">
                <i class="bi bi-house-door-fill text-blue-200 mr-2"></i> Dashboard
            </a>

            <a href="{{ route('menagement.index') }}"
                class="flex items-center px-4 py-2 text-sm font-semibold rounded-lg transition-colors
                {{ Request::is('menagement*') ? 'bg-white text-blue-700' : 'text-white hover:bg-blue-600/30' }}">
                <i class="bi bi-kanban-fill text-orange-200 mr-2"></i> Management Tugas
            </a>
        </div>

        {{-- Kanan: Search, Logout, Settings --}}
        <div class="flex items-center space-x-4 mt-4 lg:mt-0">

            {{-- Search --}}
            <div class="relative">
                <span class="absolute left-3 top-2.5 text-white opacity-70"><i class="bi bi-search"></i></span>
                <input type="text" placeholder="Search..."
                    class="pl-10 pr-3 py-2 text-sm rounded-lg bg-white text-gray-800 border border-transparent focus:ring-2 focus:ring-blue-300 focus:outline-none w-48 sm:w-64" />
            </div>

            {{-- Logout --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-white hover:text-blue-200 text-sm font-medium flex items-center space-x-1">
                    <i class="bi bi-box-arrow-right"></i>
                    <span class="hidden sm:inline">Logout</span>
                </button>
            </form>

            {{-- Settings --}}
            <a href="#" class="text-white hover:text-blue-200 text-sm">
                <i class="bi bi-gear-fill"></i>
            </a>

            {{-- Hamburger (mobile) --}}
            <button class="xl:hidden text-white hover:text-blue-200 focus:outline-none">
                <i class="bi bi-list text-lg"></i>
            </button>
        </div>
    </div>
</nav>
