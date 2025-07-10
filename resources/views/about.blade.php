<x-base-struct>
    <x-msg />
    <x-side-bar />
    <x-navbar />
    <section class="grid text-7xl p-8 font-bold justify-center">
        <p class="m-2 indent-4">WHO</p>
        <p class="m-2 indent-32">WE</p>
        <p class="m-2 indent-8"><span class="text-gold">ARE</span>?</p>
    </section>
    <section class="grid justify-center">
        <div class="rounded-lg bg-gray-200 p-8 mb-4">
            <p class="font-semibold">Subscribe to our Newsletter</p>
            <div class="flex relative bg-site-black mt-4 rounded-lg">
                <input type="text" placeholder="Enter Email..." class="bg-transparent px-4 focus:outline-none w-3/4 text-white" />
                <button class="bg-gold text-white py-4 px-1 font-bold text-sm w-1/4 rounded-r-lg">SUBSCRIBE</button>
            </div>
        </div>
    </section>
    <section class="grid mx-16 p-4 gap-8 mt-16">
        <div class="grid md:grid-cols-2 grid-cols-1 items-center lg:gap-6 gap-y-10">
            <img src="{{ asset('images/we-care.png') }}" alt="">
            <div>
                <p class="text-4xl mb-4 font-semibold">We Care!</p>
                <p>We Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste quibusdam voluptatibus praesentium modi? <br><br> Cupiditate saepe, asperiores debitis a quae maiores eaque quo amet et fuga excepturi omnis laborum quia voluptate. <br><br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum vel animi inventore nobis ipsum earum labore nam fuga placeat quaerat! Voluptatum amet quo exercitationem error quas debitis vero facere eos, nesciunt officiis, odio, delectus inventore totam veniam tempora. Sed, repellat?</p>
            </div>
        </div>
        <div class="w-full lg:p-8 p-2">
            <x-circles class="mx-auto"/>
        </div>
        <div class="grid md:grid-cols-2 grid-cols-1 items-center lg:gap-6 gap-y-10">
            <div>
                <p class="text-4xl mb-4 font-semibold">We Move!</p>
                <p>We Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste quibusdam voluptatibus praesentium modi? <br><br> Cupiditate saepe, asperiores debitis a quae maiores eaque quo amet et fuga excepturi omnis laborum quia voluptate. <br><br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum vel animi inventore nobis ipsum earum labore nam fuga placeat quaerat! Voluptatum amet quo exercitationem error quas debitis vero facere eos, nesciunt officiis, odio, delectus inventore totam veniam tempora. Sed, repellat?</p>
            </div>
            <img src="{{ asset('images/tracking.png') }}" alt="">
        </div>
        <div class="w-full lg:p-8 p-2">
            <x-circles class="mx-auto"/>
        </div>
        <div class="grid md:grid-cols-2 grid-cols-1 items-center lg:gap-6 gap-y-10">
            <img src="{{ asset('images/we-network.png') }}" alt="">
            <div>
                <p class="text-4xl mb-4 font-semibold">Network!</p>
                <p>We Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste quibusdam voluptatibus praesentium modi? <br><br> Cupiditate saepe, asperiores debitis a quae maiores eaque quo amet et fuga excepturi omnis laborum quia voluptate. <br><br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum vel animi inventore nobis ipsum earum labore nam fuga placeat quaerat! Voluptatum amet quo exercitationem error quas debitis vero facere eos, nesciunt officiis, odio, delectus inventore totam veniam tempora. Sed, repellat?</p>
            </div>
        </div>
        <div class="w-full lg:p-8 p-2">
            <x-circles class="mx-auto"/>
        </div>
        <div class="grid md:grid-cols-2 grid-cols-1 items-center lg:gap-6 gap-y-10">
            <div>
                <p class="text-4xl mb-4 font-semibold">We Love Christ!</p>
                <p>We Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste quibusdam voluptatibus praesentium modi? <br><br> Cupiditate saepe, asperiores debitis a quae maiores eaque quo amet et fuga excepturi omnis laborum quia voluptate. <br><br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum vel animi inventore nobis ipsum earum labore nam fuga placeat quaerat! Voluptatum amet quo exercitationem error quas debitis vero facere eos, nesciunt officiis, odio, delectus inventore totam veniam tempora. Sed, repellat?</p>
            </div>
            <img src="{{ asset('images/Christ.png') }}" alt="">
        </div>
    </section>
    <section class="grid justify-center mt-16">
        <p class="text-center text-2xl mb-4">LOVE OUR <span class="text-gold">WORK?</span></p>
        <p class="text-center xs:px-3 sm:px-0">If you appreciate what we stand for, go ahead and book us at <i class="far fa-mobile-phone mx-1"></i><span class="text-gold">+1 306.345.0901</span> and donate to Koinonia Global</p>
        <x-gold-button class="my-4 w-3/4 mx-auto">Give to Koinonia</x-gold-button>
    </section>
    <x-footer />
</x-base-struct>