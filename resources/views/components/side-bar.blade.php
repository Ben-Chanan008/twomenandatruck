<div class="w-[50%] absolute right-0 py-8 px-4 top-0 bottom-0 z-[100] bg-black text-white sidebar hidden overflow-hidden">
    <div class="flex flex-col items-end gap-4">
        <i class="far fa-2x fa-times mb-4 close-btn hover:cursor-pointer"></i>
        <a href="{{ route('home') }}" class="font-bold text-xl hover:text-gold">Home</a>
        <a href="{{ route('us') }}" class="font-bold text-xl hover:text-gold">About</a>
        <a href="{{ route('moving') }}" class="font-bold text-xl hover:text-gold">Services</a>
        <a href="" class="font-bold text-xl">Meet The Team</a>
        <a href="" class="font-bold text-xl">Careers</a>
    </div>
    <div class="block mt-8 float-end">
        <x-button class="px-8 py-3"><i class="far fa-sign-in mr-3"></i>Sign in</x-button>
    </div>
</div>