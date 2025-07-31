<x-base-struct page="Create a Quote">
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
            <label for="deposit" class="font-semibold">Initial Deposit</label>
            <div class="flex w-1/2 gap-3 mb-3">
                <select class="p-3 bg-gray-200 w-[100px] rounded-md mt-3" name="currency">                
                    <option value="CAD" selected>$CAD</option>
                    <option value="USD">$USD</option>
                    <option value="EUROS">EUROS</option>
                </select>
                <input type="number" step=".01" id="deposit" name="initial_deposit" class="p-3 bg-gray-200 block w-full rounded-md mt-3" placeholder="500.00" value="{{ old('initial_deposit') }}"/>
            </div>
            @error('initial_deposit')
                <p class="text-danger msg my-4 text-red-600 text-xs font-semibold">{{ $message }}</p>
            @enderror
            <div class="mb-3">
                <label for="duration" class="font-semibold">Duration</label>
                <input type="text" id="duration" name="duration" class="p-3 bg-gray-200 block w-1/2 rounded-md mt-3" placeholder="Egs... 4h" value="{{ old('duration') }}"/>
            </div>
            @error('duration')
                <p class="text-danger msg my-4 text-red-600 text-xs font-semibold">{{ $message }}</p>
            @enderror
            <div class="mb-3">
                <label for="time" class="font-semibold">Time</label>
                <input type="time" id="time" name="start_time" class="p-3 bg-gray-200 block w-1/2 rounded-md mt-3" value="{{ old('start_time') }}"/>
            </div>
            @error('start_time')
                <p class="text-danger msg my-4 text-red-600 text-xs font-semibold">{{ $message }}</p>
            @enderror
            <div>
                <label for="date" class="font-semibold">Date</label>
                <input type="date" id="date" name="booked_for" class="p-3 bg-gray-200 block w-1/2 rounded-md mt-3" value="{{ old('booked_for') }}"/>
            </div>
            @error('booked_for')
                <p class="text-danger msg my-4 text-red-600 text-xs font-semibold">{{ $message }}</p>
            @enderror
            <button type="submit" class="bg-gold p-3 rounded-lg w-full mt-8">Create Quote</button>
        </form>
    </x-dashboard-navbar>
</x-base-struct>