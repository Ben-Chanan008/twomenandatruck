<x-base-struct page="Create a User">
    <x-dashboard-navbar>
        <section class="p-8">
            <p class="text-3xl">Add a User</p>
        </section>
        <form action="{{ route('admin-users.store') }}" method="POST" id="form" class="login-form p-8">
            @csrf
            <div class="form-group relative">
                <input name="first_name" type="text" id="first_name" data-validate="validate" class="p-3 floating relative form-control" placeholder="" value="{{ old('first_name') }}"/>
                <label for="first_name" class="float-label">First Name</label>
                @error('first_name')
                    <p class="text-danger msg mt-3 text-red-600 text-xs font-semibold">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group relative">
                <input name="last_name" type="text" id="last_name" data-validate="validate" class="p-3 floating relative form-control" placeholder="" value="{{ old('last_name') }}"/>
                <label for="last_name" class="float-label">Last Name</label>
                @error('last_name')
                    <p class="text-danger msg mt-3 text-red-600 text-xs font-semibold">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group relative">
                <input name="email" type="email" id="email" data-validate="validate" class="p-3 floating relative form-control" placeholder="" value="{{ old('email') }}"/>
                <label for="email" class="float-label">Email address</label>
                @error('email')
                    <p class="text-danger msg mt-3 text-red-600 text-xs font-semibold">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="roles" class="block text-xl font-semibold mb-4">Role</label>
                <select name="role" id="roles" class="p-4 rounded-lg w-2/4 mb-4">
                    <option selected disabled>Please select your desired role</option>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}" class="text-sm">{{ Str::title($role->role) }}</option>
                    @endforeach
                </select>
                @error('role')
                    <p class="text-danger msg mt-3 text-red-600 text-xs font-semibold">{{ $message }}</p>
                @enderror
            </div>

{{--             <div class="form-group flex flex-row mt-4 items-center">
                <div>
                    <input type="checkbox" id="check" class="form-control-check">
                    <label for="check" class="box-content"></label>
                </div>
                <span class="text-sm font-semibold ms-2">Remember Me</span>
            </div> --}}
            <button class="p-3 rounded-lg bg-gold w-full mt-8 text-white font-semibold" type="submit">Create User<i class="fa ms-5 fas fa-paper-plane"></i></button>
        </form>
    </x-dashboard-navbar>
</x-base-struct>