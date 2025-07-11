<x-base-struct>
    <div class="grid grid-cols-2 min-h-screen">
        <div class="col-lg-6">
            <div class="flex justify-center items-center flex-col h-screen">
                <p class="text-4xl text-center font-semibold">Continue your journey <br> at TMAAT</p>
                <span class="block leading-loose tracking-widest">THE PROMISE IS TO EVERYONE</span>
                <img alt="img" src="{{asset('/images/Christ.png')}}"/>
            </div>
        </div>
        <div class="col-lg-6 p-4">
            <div class="flex justify-center flex-col items-center min-h-screen">
                <h3 class="mb-3 text-3xl">Onboarding</h3>
                <p class="mb-4">Already have an account? <a href="" class="text-gold">Sign in</a></p>
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
                    <form action="{{ route('sign-in') }}" method="POST" id="form" class="login-form">
                        @csrf
                        <div class="form-group relative">
                            <input name="email" type="email" id="email" data-validate="validate" class="p-3 floating relative form-control" placeholder="" value="{{ old('email') }}"/>
                            <label for="email" class="float-label">Email address</label>
                            @error('email')
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
                        <div class="form-group flex flex-row mt-4 items-center">
                            <div>
                                <input type="checkbox" id="check" class="form-control-check" name="remember_me">
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