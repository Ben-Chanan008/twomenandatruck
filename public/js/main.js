const sidebarBtn = document.querySelector('button.sidebar-btn');
const sidebar = document.querySelector('.sidebar');
const splide = document.querySelector('.splide');
const closeBtn = document.querySelector('.close-btn');
const checkBox = document.querySelector('input.check-box');
const quoteFormAdmin = document.querySelector('#quote-form #services');

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

const titleCase = (text) => {
    return text.charAt(0).toUpperCase() + text.substring(1).toLowerCase();
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

if(checkBox){
    let checkSlider = document.querySelector('.box-content');

    checkSlider.addEventListener('click', (e) => {
        console.log([e.currentTarget(), checkBox.checked]);
        checkBox.checked = !checkBox.checked;
    });
}

if (quoteFormAdmin) {
    const checks = document.querySelector('#checks'),
        host = 'https://tmaat.com';
    quoteFormAdmin.addEventListener('change', (e) => {
        let serviceId = quoteFormAdmin.value;
        
        fetch(`${host}/api/service-details/${serviceId}`, {
            headers: {
                'Content-Type': 'application/json'
            }
        }).then((res) => res.json()).then((response) => {
            // console.log(response);
            if (response) {
                sessionStorage.setItem('details', JSON.stringify(response.data));

                /* Variably grabs the api response from the stored session or the fetch api directly. */
                let detailsVariability = JSON.parse(sessionStorage.getItem('details')) ?? response.data;

                checks.innerHTML = '<label class="block text-xl font-bold">Details</label>';
                
                detailsVariability.forEach((data, idx) => { 
                    checks.innerHTML += `
                        <div class="p-3 text-sm font-semibold">
                            <input type="checkbox" class="ml-2" style="accent-color: var(--bg-tertiary)" id="${idx}" name="detail_${idx + 1}" value="${data.id}"/> 
                            <label for="${idx}" class="mx-2">${titleCase(data.details)}</label>
                        </div>    
                    `;
                });
            }
        });
        
    });

    let details = sessionStorage.getItem('details');

    if (details) {
        quoteFormAdmin.value = JSON.parse(details)[0].service_id

        checks.innerHTML = '<label class="block text-xl font-bold">Details</label>';

        JSON.parse(details).forEach((data, idx) => { 
            checks.innerHTML += `
                <div class="p-3 text-sm font-semibold">
                    <input type="checkbox" class="ml-2" name="detail_${idx + 1}" value="${data.id}" style="accent-color: var(--bg-tertiary)" id="${idx}" value="${data.id}"/> 
                    <label for="${idx}" class="mx-2">${titleCase(data.details)}</label>
                </div>    
            `;
        });
    }
}


// if (PerformanceNavigationTiming.type == "reload") {
//     console.log(PerformanceNavigationTiming)
// }
