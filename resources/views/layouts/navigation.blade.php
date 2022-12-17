<nav class="relative flex flex-wrap items-center justify-between px-2 py-3 bg-white mb-3 shadow">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full relative flex justify-between lg:w-auto px-4 lg:static lg:block lg:justify-start">
            <a class="hover:opacity-75 text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap border-b-2
             px-1 pt-1 font-medium text-gray-900">
                Supera Inovação
            </a>
        </div>
        <div class="w-full relative flex justify-between lg:w-auto px-4 lg:static lg:block lg:justify-start mr-16 gap-8">
            <a class="hover:opacity-75 border-indigo-500 text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap
             border-b-2 px-1 pt-1 font-medium text-gray-900" href="{{ route('index') }}">
                Home
            </a>
            <a class="hover:opacity-75 border-indigo-500 text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap
             border-b-2 px-1 pt-1 font-medium text-gray-900" href="{{ route('vehicles.index') }}">
                Vehicles
            </a>
            <a class="hover:opacity-75 border-indigo-500 text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap
             border-b-2 px-1 pt-1 font-medium text-gray-900" href="{{ route('maintenances.index') }}">
                Maintenances
            </a>
        </div>
        <div class="lg:flex flex-grow items-center" id="example-navbar-warning">
            <ul class="flex flex-col lg:flex-row list-none ml-auto">
                <li class="nav-item">
                    <a class="hover:opacity-75 border-indigo-800 text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap
                     border-b-2 px-1 pt-1 font-medium text-gray-900" href="{{ route('logout') }}">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
