<x-base-struct>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    @endpush
    <x-side-bar />
    <div class="hero-img relative w-full">
        <div class="overlay"></div>
        <x-navbar hasBackground="true"/>
        <div class="h-[85%] w-full flex flex-col justify-center items-center">
            <p class="text-8xl z-10 anton mb-8 px-32 sm:text-center">OUR <span class="text-gold">SERVICES</span></p>
            <button class="bg-gold z-10 px-5 py-3 rounded-md font-bold">FREE QUOTE</button>
        </div>
    </div>
    <section class="lg:px-48 md:px-16 px-8 mt-16">
        <i class="far fa-home text-gold mr-2"></i><span class="font-semibold">SERVICES > LOADING AND UNLOADING</span>
        <p class="text-5xl anton my-8">LOADING AND UNLOADING <span class="text-gold">LABOR</span></p>
        <div class="grid md:grid-cols-2 gap-8 mb-8 items-center">
            <p class="leading-loose">
                Loading services are currently only available at participating TWO MEN AND A TRUCK locations. Please check with your local office or <a href="https://twomenandatruck.com/local-moving/loading-and-unloading#loadmap" class="text-gold underline">use the map</a> below to ensure they offer these services.
                <br /><br />
                <span class="font-bold">TWO MEN AND A TRUCK</span> now offers loading and unloading-only services, called our Carry Crew moving option!
                <br /><br />
                With this labor-only service, you rent your own rental truck or container, and we help with loading or unloading your belongings. This saves you the hassle of doing it yourself, while speeding up your move and saving you money.
            </p>
            <img src="{{ asset('images/loading.jpg') }}" alt="" class="sm:w-full sm:object-fill">
        </div>
        <i class="far fa-home text-gold mr-2"></i><span class="font-semibold">SERVICES > PACKING SERVICES</span>
        <p class="text-5xl anton my-8">PROFESSIONAL PACKING <span class="text-gold">SERVICES</span></p>
        <div class="grid md:grid-cols-2 gap-8 mb-8 items-center">
            <p class="leading-loose">
                A successful move starts with a successful packing job. Proper packing paper, padding and boxing procedures are vital to protect your belongings.
                <br /><br />
                <span class="font-bold">TWO MEN AND A TRUCK®</span> offers a full range of packing and unpacking services. Trained professional packers are able to help you with as much or as little of the packing and unpacking as you need.  We'd be happy to provide a <a href="#" class="text-gold underline">free quote</a> to eliminate your packing stress.
            </p>
            <img src="{{ asset('images/packing.webp ') }}" alt="" class="sm:w-full sm:object-fill">
        </div>
        {{-- <i class="far fa-home text-gold mr-2"></i><span class="font-semibold">SERVICES > PACKING SERVICES</span> --}}
        <p class="text-5xl anton my-8">PERSONALISED PACKING <span class="text-gold">SERVICES</span></p>
        <div class="grid md:grid-cols-2 gap-8 mb-8 items-center">
            <p class="leading-loose">
                When you choose TWO MEN AND A TRUCK® to pack your home, you’ll get professionally-trained packing professionals to carefully pack your most precious belongings. Use our experienced teams to pack just a few rooms, or your entire home for you.
                <br><br>
                Our professionally trained staff are not only experts in home moving, but have extensive packing training, which ensures your belongings are safe and secure during the entire move.
                <br><br>
                We can pack as much or as little as you need for your next home or business move
                <br><br>
                Our packing services are available even if you aren’t moving. Do you need help packing to put some of your belongings into storage? We can help! Businesses looking for packing help can rest assured that our professional teams can get the job done while eliminating down time for your employees.
                <br><br>
                Think about <a href="#" class="text-gold underline">packing yourself?</a> We offer all of the <a href="" class="text-gold underline">packing supplies</a> you'll need including moving boxes, packing tape, bubble and stretch wrap, and high quality specialty boxes like wardrobe boxes and dish packs, for you to get the job done right.
            </p>
            <div class="w-3/5 rounded-lg text-white bg-black p-4 sm:mx-auto md:mx-0">
                <p class="text-gold font-bold text-center">FEATURED TEAM MEMBER</p>
                <p class="font-bold mb-3 text-xl text-center">John Doe</p>
                <section class="p-2 flex flex-col justify-center items-center">
                    <div class="div p-8 rounded-full bg-white"></div>
                    <p class="text-justify">John's career journey from driver to Operations Supervisor showcases his exceptional drive and dedication. With a deep passion for solving customer problems and ensuring their expectations are not just met but surpassed, Akino thrives in managing his team, inspiring them to excel. He is renowned for his commitment to going above and beyond, making him a truly invaluable asset to any team.</p>
                </section>
            </div>
        </div>
        <p class="text-5xl anton my-8">LONG DISTANCE <span class="text-gold ml-3">MOVING</span></p>
        <div class="grid md:grid-cols-2 gap-8 mb-8 items-center">
            <p class="leading-loose">
                Whether you're moving across the province or across the country, TWO MEN AND A TRUCK® is here to help with a variety of moving services that will take the stress out of your long-distance move.
                <br><br>
                We built our business on our outstanding customer service reputation for local moves and we‘ve developed the same professional techniques that earned us a 96% referral rate for our long-distance moving services.
            </p>
            <div>
                <img src="{{ asset('images/longdistance.webp ') }}" alt="" class="sm:object-fill mb-4 sm:mx-auto md:mx-0">
                <x-gold-button class="w-full">BOOK SERVICE NOW</x-gold-button>
            </div>
        </div>
    </section>
    <x-footer />
</x-base-struct>