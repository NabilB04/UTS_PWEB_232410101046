<header class="bg-primary text-white">
    <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
        <a href="{{ route('dashboard', ['username' => request()->query('username')]) }}"
           class="text-xl font-semibold flex items-center gap-2">
            <i class="bi bi-laptop"></i> TechStore
        </a>

        <button id="nav-toggle" class="md:hidden text-white focus:outline-none">
            <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M4 5h16M4 12h16M4 19h16"/>
            </svg>
        </button>

        <nav id="nav-menu"
             class="hidden md:flex flex-col md:flex-row md:items-center gap-4 md:gap-8 mt-4 md:mt-0">
            <a href="{{ route('dashboard', ['username' => request()->query('username')]) }}"
               class="hover:underline {{ request()->routeIs('dashboard') ? 'font-bold underline' : '' }}">
                Dashboard
            </a>
            <a href="{{ route('pengelolaan', ['username' => request()->query('username')]) }}"
               class="hover:underline {{ request()->routeIs('pengelolaan') ? 'font-bold underline' : '' }}">
                Pengelolaan
            </a>
            <a href="{{ route('profile', ['username' => request()->query('username')]) }}"
               class="hover:underline {{ request()->routeIs('profile') ? 'font-bold underline' : '' }}">
                <i class="bi bi-person-circle"></i> Profile
            </a>
            <a href="{{ route('login') }}" class="hover:underline">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
        </nav>
    </div>

    <script>
        document.getElementById('nav-toggle').addEventListener('click', function () {
            const navMenu = document.getElementById('nav-menu');
            navMenu.classList.toggle('hidden');
        });
    </script>
</header>
