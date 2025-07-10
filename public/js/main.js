const sidebarBtn = document.querySelector('button.sidebar-btn');
const sidebar = document.querySelector('.sidebar');
const splide = document.querySelector('.splide');
const closeBtn = document.querySelector('.close-btn');

if(sidebarBtn && closeBtn){
    sidebarBtn.addEventListener('click', (e) => {
        sidebar.classList.toggle('hidden'); 
        document.documentElement.style.overflow = 'hidden'
    });


    closeBtn.addEventListener('click', () => {
        sidebar.classList.toggle('hidden');
        document.documentElement.style.overflow = 'auto'
    });
}


if(splide)
    new Splide('.splide', {
        perPage: 3,
        type: 'loop',
        focus: 'center',
        keyboard: true,
        breakpoints: {
            640: {
                perPage: 1
            }
        },
    }).mount()