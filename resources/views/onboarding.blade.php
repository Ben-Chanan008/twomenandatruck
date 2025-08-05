<x-base-struct>
    <x-msg/>
    <div class="grid grid-cols-2 min-h-screen">
        <div class="col-lg-6">
            <div class="flex justify-center items-center flex-col h-screen">
                <p class="text-4xl text-center font-semibold">Hi, Welcome to <br> TMAAT</p>
                <span class="block leading-loose tracking-widest">CHRIST</span>
                <img alt="img" src="{{asset('/images/Christ.png')}}"/>
            </div>
        </div>
        <div class="col-lg-6 p-4">
            <div class="flex justify-center flex-col items-center min-h-screen">
                <h3 class="mb-3 text-3xl">Onboarding</h3>
                <p class="mb-4">Already have an account? <a href="{{ route('signin.view') }}" class="text-gold">Sign in</a></p>
                <div class="flex mb-3 text-white">
                    <button class="btn bg-primary"><i class="fab fa-google"></i></button>
                    <button class="btn bg-primary"><i class="fab fa-facebook"></i></button>
                    <button class="btn bg-primary"><i class="fab fa-twitter"></i></button>
                </div>
                <div class="flex mb-5">
                    <div class="hr"></div>
                    <span>OR</span>
                    <div class="hr"></div>
                </div>
                <div>
                    <form action="{{ route('sign-up') }}" method="POST" id="form" class="login-form">
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
                        <div class="form-group relative">
                            <input name="role" type="text" id="role" data-validate="validate" class="p-3 floating relative form-control" placeholder="" value="{{ old('role') }}"/>
                            <label for="role" class="float-label">Role</label>
                            @error('role')
                                <p class="text-danger msg mt-3 text-red-600 text-xs font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group relative">
                            <input name="password" type="password" data-validate="validate" id="password" class="p-3 floating relative form-control" placeholder="" value="{{ old('password') }}"/>
                            <label for="password" class="float-label">Password</label>
                            @error('password')
                                <p class="text-red-600 msg mt-3 text-xs font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group relative">
                            <input name="password_confirmation" type="password" data-validate="validate" id="password" class="p-3 floating relative form-control" placeholder="" />
                            <label for="password" class="float-label">Confirm Password</label>
                            @error('password_confirmation')
                                <p class="text-red-600 msg mt-3 text-xs font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group flex flex-row mt-4 items-center">
                            <div>
                                <input type="checkbox" id="check" class="form-control-check">
                                <label for="check" class="box-content"></label>
                            </div>
                            <span class="text-sm font-semibold ms-2">Remember Me</span>
                        </div>
                        <button class="p-3 rounded-lg bg-gold w-full text-white font-semibold" type="submit">Continue<i class="fa ms-5 fa-spin fa-spinner-third"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-base-struct>
