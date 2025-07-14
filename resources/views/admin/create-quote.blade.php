<x-base-struct>
    <x-dashboard-navbar>
        <p class="text-2xl p-8">Create A Quote</p>
        <form action="{{ route('admin.quote.store') }}" class="p-8" id="quote-form" method="POST">
            @csrf
            <div>
                <label for="" class="block text-xl font-semibold mb-4">Users</label>
                <select name="user" id="" class="p-4 rounded-lg w-2/4 mb-4">
                    <option selected disabled>Please select the user for this quote</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" class="text-sm">{{ Str::title($user->first_name) }}, {{ Str::title($user->last_name) }}</option>
                    @endforeach
                </select>
            </div>
            @error('user')
                <p class="text-danger msg mb-3 text-red-600 text-xs font-semibold">{{ $message }}</p>
            @enderror
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
            <button type="submit" class="bg-gold p-3 rounded-lg w-full mt-8">Create Quote</button>
        </form>
    </x-dashboard-navbar>
</x-base-struct>