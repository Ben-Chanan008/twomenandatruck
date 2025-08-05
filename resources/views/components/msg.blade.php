@if(session()->has('message'))
<div class="absolute w-full h-screen bg-white z-30 loader opacity-0 pointer-events-none">
    <div class="grid justify-center items-center h-full">
        <p class="font-semibold type">{{ session('message') }}</p>
    </div>
</div>

<script src="https://unpkg.com/typeit/dist/index.umd.js"></script>
<script type="module">
    document.querySelector('.loader').style.opacity = 1;
    document.querySelector('html').style.overflow = 'hidden';

    document.addEventListener('DOMContentLoaded', () => {
        new TypeIt('.type', {
            // strings: ['Onboarding process successful 😊, Setting up shop 😊'],
            afterComplete: (TypeIt) => {
                setTimeout(() => {
                    document.querySelector('html').style.overflow = 'auto';
                    document.querySelector('.loader').style.opacity = 0;
                }, 3500);
            }
        }).go()
    });
</script>
@endif
