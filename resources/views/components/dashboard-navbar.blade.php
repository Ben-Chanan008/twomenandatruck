<nav class="grid grid-cols-1/3 h-screen">
    <div class="grid grid-rows-auto border-r-gray-300 h-full border-r-2 border-opacity-20">
        <div class="p-4">
            <a href="{{ route('home') }}" class="mb-3 block w-1/4">
                <img src="{{ asset('images/Christ.png') }}" class="w-[80px] p-2">
            </a>
            <div class="bg-gray-100 p-4 flex items-center gap-4 rounded-md mt-4 m-2"> 
                <div class="rounded-full bg-gray-300">
                    <img src="{{ asset('images/user.png') }}" class="w-[50px]" />
                </div>
                <p class="font-semibold">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</p>
            </div>
            <div class="mt-16 grid grid-cols-1 gap-4">
                <a href="{{ route('dashboard') }}">
                    <div class="bg-gray-200 rounded-md p-3 {{ activeLink(route('dashboard'), 'bg-gray-300') }}">
                        <i class="far fa-chart-mixed"></i>
                        <span class="ml-3 font-semibold">Dashboard</span>
                    </div>
                </a>
                <div class="bg-gray-200 rounded-md p-3">
                    <i class="far fa-user-secret"></i>
                    <span class="ml-3 font-semibold">User</span>
                </div>
                <a href="{{ route('assign-jobs.index') }}">
                    <div class="bg-gray-200 rounded-md p-3 {{ activeLink(route('assign-jobs.index'), '!bg-gray-300') }}">
                        <i class="far fa-business-time"></i>
                        <span class="ml-3 font-semibold">Jobs</span>
                    </div>
                </a>
                <a href="{{ route('admin.quote.index') }}">
                    <div class="bg-gray-200 rounded-md p-3 {{ activeLink(route('admin.quote.index'), '!bg-gray-300') }}">
                        <i class="far fa-business-time"></i>
                        <span class="ml-3 font-semibold">Quotes</span>
                    </div>
                </a>
            </div>
        </div>     
        <div class="p-4">
            <a href="" class="text-red-600"><i class="far fa-arrow-right-to-line"></i> <span class="ml-3">Sign Out</span></a>
        </div>
    </div>
    <div class="overflow-y-auto">
        {{ $slot }}
    </div>
</nav>