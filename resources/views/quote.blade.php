<x-base-struct>
    <x-popup />
    <x-navbar :hasBackground="false"/>
    <p class="text-2xl p-8">Create A Quote</p>
    <form action="{{ route('quote.store', ['user' => Auth::id()]) }}" class="p-8" id="quote-form" method="POST">
        @csrf
        <div>
            <label for="" class="block text-xl font-semibold mb-4">Services</label>
            <select name="service" id="services" class="p-4 rounded-lg w-2/4 mb-4">
                <option selected disabled>Please select your desired service</option>
                @foreach($services as $service)
                    <option value="{{ $service->id }}" class="text-sm">{{ Str::title($service->service) }}</option>
                @endforeach
            </select>
        </div>
        @error('service')
            <p class="text-danger msg my-4 text-red-600 text-xs font-semibold">{{ $message }}</p>
        @enderror
        <div id="checks">
        </div>
        <div class="flex">
            <button type="submit" class="bg-gold mx-auto p-3 rounded-lg w-3/4 mt-8">Create Quote</button>
        </div>
    </form>
</x-base-struct>