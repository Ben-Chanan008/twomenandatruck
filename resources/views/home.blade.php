<x-base-struct>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @endpush
    <x-popup />
    <x-side-bar />
    <x-msg />
    <div class="w-full relative text-white hero-img">
        <div class="overlay"></div>
        <x-navbar hasBackground="true"/>
        <div class="z-10 gap-4 flex md:flex-row flex-col justify-evenly relative my-16 mx-8 ">
            <p class="md:text-7xl md:my-auto text-3xl anton leading-relaxed header">WE ARE <span class="text-gold">MOVERS</span> <br> WHO <span class="text-gold">CARE</span></p>
            <span class="line rounded-lg md:block hidden"></span>
            <div class="md:my-16 span md:w-1/2">
                <p class="mb-4">Get a free quote right now at any time by clicking the button. Or call us if you feel more comfortable!</p>
                <div class="flex md:flex-row flex-col gap-4">
                    <x-button :disabled="true"><i class="far fa-comment mr-3"></i>Free Quote</x-button>
                    <x-button link="tel:3065005008" :is-link="true">
                        <i class="far fa-phone mr-3"></i>+1 306 (500) - 5008
                    </x-button>
                </div>
            </div>
        </div>
	</div>
    <div class="mx-8 p-16 grid rounded-lg md:grid-cols-3 grid-cols-1 gap-4 mt-8 bg-gold">
        <div class="flex flex-col items-center">
            <i class="far fa-headset fa-3x text-white font-bold"></i>
            <p class="text-5xl">96%</p>
            <p class="font-bold text-2xl text-center">CUSTOMER REFERRAL RATE</p>
            <p class="md:text-start text-center">Our customers are so happy, they're spreading the word.</p>
        </div>
        <div class="flex flex-col items-center">
            <i class="far fa-seedling fa-3x text-white font-bold"></i>
            <p class="text-5xl">15+</p>
            <p class="font-bold text-2xl text-center">YEARS OF GROWTH IN CANADA</p>
            <p class="md:text-start text-center">Launch your career with a growing moving franchise.</p>
        </div>
        <div class="flex flex-col items-center">
            <i class="far fa-earth-americas fa-3x text-white font-bold"></i>
            <p class="text-5xl">400+</p>
            <p class="font-bold text-2xl text-center">LOCATION WORLDWIDE</p>
            <p class="md:text-start text-center">Join the largest moving franchise in North America.</p>
        </div>
    </div>
    <section id="services" class="mt-16 mb-8">
        <p class="text-5xl font-bold text-center anton mb-8">WHAT WE <span class="text-gold">OFFER?</span></p>
        <span class="text-center block leading-relaxed md:px-0 px-8 mb-4"> For over 35 years, we have and still offer comprehensive home and business <br /> moving services, professional packing and unpacking services, as well as storage and junk removal services. </span>
        <img src="../../images/moving.jpeg" alt="" class="h-[500px] min-w-full object-cover"/>
        <div class="grid md:grid-cols-5 grid-cols-1 xl:px-32 px-4">
            <div class="bg-gold p-8 cursor-pointer service">
                <i class="far text-gold fa-truck mb-8 text-white"></i>
                <p class="text-3xl mb-3 font-semibold">We Move <br> Locally</p>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, ratione?</span>
                <i class="far block mt-3 fa-arrow-right-long text-gold text-white"></i>
            </div>
            <div class="bg-site-black text-white p-8">
                <i class="far text-gold fa-boxes-stacked mb-8"></i>
                <p class="text-3xl mb-3 font-semibold">Business <br> Moving</p>
                <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, ducimus.</span>
                <i class="far block mt-3 fa-arrow-right-long text-gold"></i>
            </div>
            <div class="bg-gold p-8 cursor-pointer service">
                <i class="fal text-white fa-box-open-full mb-8"></i>
                <p class="text-3xl mb-3 font-semibold">Packing <br> Services</p>
                <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, est!</span>
                <i class="far fa-arrow-right-long text-white block mt-3"></i>
            </div>
            <div class="bg-site-black text-white p-8">
                <i class="far text-gold fa-box-taped mb-8"></i>
                <p class="text-3xl mb-3 font-semibold">Moving Boxes <br> and Supplies</p>
                <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, ducimus.</span>
                <i class="far block mt-3 fa-arrow-right-long text-gold"></i>
            </div>
            <div class="bg-gold p-8 cursor-pointer service">
                <i class="fal text-white fa-box mb-8"></i>
                <p class="text-3xl mb-3 font-semibold">Long Distance <br> Moving</p>
                <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, est!</span>
                <i class="far fa-arrow-right-long text-white block mt-3"></i>
            </div>
        </div>
        <div class="w-full md:px-32 flex">
            <button class="w-3/4 p-6 mx-auto bg-site-black font-semibold mt-8 rounded-lg text-white">
                View All Services
                <i class="far fa-angle-right"></i>
            </button>
        </div>
    </section>
    <section id="location" class="relative mb-16 md:p-32 p-4">
        <div class="overlay"></div>
        <div class="flex md:flex-row flex-col gap-8 justify-around items-center w-full">
            <div>
                <p class="text-4xl anton md:text-start text-center text-white font-normal relative mb-5 z-10">WE'VE GOT YOU COVERED WITH <br> <p class="font-bold md:text-start text-center z-10 relative text-white text-5xl anton mb-5">MORE THAN 400 <span class="text-gold">LOCATIONS</span> WORLWIDE</p></p>
                <div class="flex relative bg-site-black rounded-lg">
                    <input type="text" placeholder="Find your location..." class="bg-transparent px-4 focus:outline-none w-3/4 text-white" />
                    <button class="bg-gold text-white p-4 font-bold text-sm md:w-1/4 rounded-lg">FIND A LOCATION</button>
                </div>
            </div>
            <div>
                <p class="text-5xl font-bold text-gold z-10 relative">MOVETRAC</p>
            </div>
        </div>
    </section>
    <section id="testimonial">
        <p class="text-5xl mb-4 text-center anton">MORE THAN <span class="text-gold">TWO MEN </span>AND A TRUCK!</p>
        <span class="text-xl block text-center md:px-0 px-8">Here at two men and a truck, we don't just speak for our selves, our customers are very satisfied, here they are.</span>
        <section class="splide md:px-32 px-8 mt-8" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide p-16 bg-gray-300 rounded-xl mx-2">
                        <div class="flex gap-3 items-center mb-6">
                            <div class="bg-gold w-[50px] flex justify-center items-center h-[50px] rounded-full">
                                <i class="far block fa-user"></i>
                            </div>
                            <div>
                                <p class="font-bold">John Doe</p>
                            </div>
                        </div>
                        <p class="leading-loose">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat quibusdam ipsam voluptas quaerat architecto consectetur dolorem! Id dicta, laborum fugit esse tempore ipsam nesciunt vitae dolorem. Saepe quos error veniam minima, porro animi dolorem, ducimus nemo beatae exercitationem nisi, aspernatur id earum at quia nulla quas. Aliquam laborum autem suscipit?
                        </p>
                        <div class="mt-4 flex gap-3 justify-center font-bold">
                            <i class="far fa-clock"></i>
                            <span>2025-01-27</span>
                        </div>
                    </li>
                    <li class="splide__slide p-16 bg-gray-300 rounded-xl mx-2">
                        <div class="flex gap-3 items-center mb-6">
                            <div class="bg-gold w-[50px] flex justify-center items-center h-[50px] rounded-full">
                                <i class="far block fa-user"></i>
                            </div>
                            <div>
                                <p class="font-bold">James Justin</p>
                            </div>
                        </div>
                        <p class="leading-loose">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat quibusdam ipsam voluptas quaerat architecto consectetur dolorem! Id dicta, laborum fugit esse tempore ipsam nesciunt vitae dolorem. Saepe quos error veniam minima, porro animi dolorem, ducimus nemo beatae exercitationem nisi, aspernatur id earum at quia nulla quas. Aliquam laborum autem suscipit?
                        </p>
                        <div class="mt-4 flex gap-3 justify-center font-bold">
                            <i class="far fa-clock"></i>
                            <span>2025-01-27</span>
                        </div>
                    </li>
                    <li class="splide__slide p-16 bg-gray-300 rounded-xl mx-2">
                        <div class="flex gap-3 items-center mb-6">
                            <div class="bg-gold w-[50px] flex justify-center items-center h-[50px] rounded-full">
                                <i class="far block fa-user"></i>
                            </div>
                            <div>
                                <p class="font-bold">Sylvanus Iviana</p>
                            </div>
                        </div>
                        <p class="leading-loose">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat quibusdam ipsam voluptas quaerat architecto consectetur dolorem! Id dicta, laborum fugit esse tempore ipsam nesciunt vitae dolorem. Saepe quos error veniam minima, porro animi dolorem, ducimus nemo beatae exercitationem nisi, aspernatur id earum at quia nulla quas. Aliquam laborum autem suscipit?
                        </p>
                        <div class="mt-4 flex gap-3 justify-center font-bold">
                            <i class="far fa-clock"></i>
                            <span>2025-01-27</span>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </section>
    <section id="blog" class="mt-32 px-8">
        <h1 class="text-6xl anton">Blog!</h1>
        <div class="grid md:grid-cols-3 grid-cols-1 gap-3 mt-8 mb-8">
            <div class="bg-gray-300">
                <div class="bg-gold p-8">
                    <p class="font-bold">A very moving blog</p>
                    <span class="font-bold text-white">JANUARY 25, 2025</span>
                </div>
                <p class="leading-loose p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore consequuntur voluptas error? Necessitatibus minima aspernatur voluptatum soluta, corrupti tempora dicta!</p>
                <div class="p-2">
                    <button class="bg-gold p-2 w-full rounded-lg font-semibold">Read More</button>
                </div>
            </div>
            <div class="bg-gray-300">
                <div class="bg-gold p-8">
                    <p class="font-bold">A very moving blog</p>
                    <span class="font-bold text-white">JANUARY 25, 2025</span>
                </div>
                <p class="leading-loose p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore consequuntur voluptas error? Necessitatibus minima aspernatur voluptatum soluta, corrupti tempora dicta!</p>
                <div class="p-2">
                    <button class="bg-gold p-2 w-full rounded-lg font-semibold">Read More</button>
                </div>
            </div>
            <div class="bg-gray-300">
                <div class="bg-gold p-8">
                    <p class="font-bold">A very moving blog</p>
                    <span class="font-bold text-white">JANUARY 25, 2025</span>
                </div>
                <p class="leading-loose p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore consequuntur voluptas error? Necessitatibus minima aspernatur voluptatum soluta, corrupti tempora dicta!</p>
                <div class="p-2">
                    <button class="bg-gold p-2 w-full rounded-lg font-semibold">Read More</button>
                </div>
            </div>
        </div>
    </section>
    <x-footer/>
</x-base-struct>
