@extends('layouts.auth')
@section('content')
    <!-- <div class="container py-5">
        <div class="d-flex justify-content-center">
            <div class="col-lg-5 col-md-12 p-5 shadow-md" style="background-color: #252525 !important; border-top: 2px solid #fc5000;">
    
                <h2 class="pb-5 text-light text-center">Login to continue</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
    
                    <div>
                        <x-input-label for="email" :value="__('Email')" class="text-light"/>
                        <x-text-input id="email" class="form-control mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
    
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" class="text-light"/>
    
                        <x-text-input id="password" class="form-control mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
    
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
    
                    <div class="mt-3">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ml-2 text-sm text-light">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <div class="d-flex justify-content-end pt-3">

                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-light rounded-md" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
    
                        <button class="btn btn-sm px-4 ms-3 text-light" style="background-color: #fc5000;">
                            Log in
                        </button>
                    </div>

                    <a class="mt-4 underline text-sm text-light" href="{{ route('register') }}">
                        {{ __('Register') }}
                    </a>
                </form>
            </div>
        </div>
    </div> -->

    <div class="py-5 container-fluid remove-px-5">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="row">
            <div class="col-md-7 mb-5 login_1">
                <h2>Welcome to</h2>
                <h3>Spreadex Trade</h3>
            </div>
            
            <div class="col-md-5 p-3">
                <div class="remove-px-5 pt-4">
                    <h2 class="pb-5 login_to_continue">Login to continue</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
        
                        <div>
                            <x-input-label for="email" :value="__('Email')" class=""/>
                            <x-text-input id="email" class="style_input form-control mt-1 w-full" type="email" name="email" required />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
        
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" class=""/>
        
                            <div id="ps">
                                <x-text-input id="password" class="style_input form-control mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required />
                                <span class="toggle-password" onclick="togglePasswordVisibility()">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
        
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
        
                        <!-- <div class="mt-3">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                <span class="ml-2 text-sm ">{{ __('Remember me') }}</span>
                            </label>
                        </div> -->
                        
                        <div class="d-flex justify-content-between pt-5">
                            <button class="btn btn-sm login_btn ms-3 rounded-pill text-light" style="background-color: #fc5000;">
                                <b>Log in</b>
                            </button>
    
                            @if (Route::has('password.request'))
                                <a class="text-sm cheange_this rounded-md" style="color: #fc5000; align-self: center;" href="{{ route('password.request') }}">
                                    {{ __('Forgot password') }}
                                </a>
                            @endif
                        </div>
    
                        <div class="text-center pt-4">
                            <span>Don't  have an account? </span>
                            <a class="mt-4 text-sm cheange_this " href="{{ route('register') }}">
                                {{ __('Sign up') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const icon = document.querySelector('.toggle-password i');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>
@endsection
