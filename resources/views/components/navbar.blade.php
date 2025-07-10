<nav class="relative z-10 p-4 {{ $hasBackground ? '' : 'text-white bg-gold' }}">
    <div class="flex justify-between items-center px-4 text-white">
        <a href="{{ route('home') }}" class="font-bold text-xl">TMAAT</a>
        <div class="md:flex gap-4 hidden">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('us') }}">About</a>
            <a href="{{ route('moving') }}">Services</a>
            <a href="">Meet The Team</a>
            <a href="">Careers</a>
        </div>
        {{-- <div class="md:block hidden">
            <x-button><i class="far fa-comment mr-3"></i>Free Quote</x-button>
        </div> --}}
        <div class="md:block hidden">
            @if (auth()->check())
                <div class="flex gap-3">
                    <i class="far fa-user-circle"></i>
                    <p class="font-semibold">Hi, {{ auth()->user()->first_name }}</p>
                </div>
            @else
                <x-button isLink="true" link="{{ route('signin.view') }}"><i class="far fa-sign-in mr-3"></i>Sign in</x-button>
            @endif
        </div>
        <div class="md:hidden">
            <x-button :disabled="true" class="sidebar-btn"><i class="far fa-bars-staggered mr-3"></i></x-button>
        </div>
    </div>
</nav>
