@extends('new_design_2.layouts.auth')
@section('content')

    <div class="pt-5 px-5 container" style="height: 100vh">
        <div class="row border rounded">
            <div class="col-md-7 login_1 d-none d-lg-block" style="overflow: hidden">
                <div class="py-5 px-5">
                    <h1 style="font-size: 54px;"><span style="color: #ff5000; font-weight: 700;">Log In</span> to your account here</h1>
    
                    <div class="pt-4">
                        <span>Don't  have an account? </span>
                        <a class="mt-4 text-sm cheange_this text-light" href="{{ route('register') }}">
                            {{ __('Sign up') }}
                        </a>
                    </div>
                </div>

                <div class="css-sok_">
                    <img src="https://tradenation.com/signup/_next/image?url=https%3A%2F%2Fimages.prismic.io%2Ftnfev2%2FZmBNJ5m069VX1ecj_backgroundimage.png%3Fauto%3Dformat%2Ccompress%3Fauto%3Dcompress%2Cformat&w=828&q=75" alt="" srcset="">
                </div>
            </div>
            
            <div class="col-md-5 py-5 px-5  remove-px-5">
                <div class="pb-4">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
        
                        <div>
                            <x-input-label for="email" :value="__('Email')" class=""/>
                            <x-text-input id="email" class="style_input form-control mt-1 w-full" type="email" name="email" required />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
        
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" class=""/>
                            
                            <div id="ps" class="password-container">
                                <x-text-input id="password" class="style_input form-control mt-1 w-full" type="password" name="password" required />
                                <span class="toggle-password" onclick="togglePasswordVisibility()">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
                            
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>                        
                        
                        <div class="pt-5">
                            <p>
                                @if (Route::has('password.request'))
                                    <a class="text-sm cheange_this rounded-md text-light" href="{{ route('password.request') }}">
                                        {{ __('Forgot password') }}
                                    </a>
                                @endif
                            </p>

                            <button class="btn btn-sm w-100 login-button rounded-pill text-dark">
                                <b>Log in <i class="fa fa-arrow-right"></i></b>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="css-8in3lk"></div>


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

    <style>
        .password-container {
            position: relative;
            display: flex;
            align-items: center;
        }

        .style_input {
            width: 100%;
            padding-right: 2.5rem; /* Add some right padding to make room for the icon */
        }

        .toggle-password {
            position: absolute;
            right: 1rem;
            cursor: pointer;
            color: #888;
            font-size: 1.2rem;
            background: none;
            border: none;
        }

        .login-button {
            background-color: #22a07a;
            color: #fff;
            padding: 0.8rem;
            border: none;
            border-radius: 20px;
            font-size: 1rem;
            cursor: pointer;
        }

        .login-button:hover {
            background-color: #1d9066;
        }

        .css-4bb56i {
            position: relative;
            text-align: center;
            margin: 10px 0;
        }

        .css-4bb56i:before {
            content: "";
            position: absolute;
            width: 40%;
            height: 1px;
            top: 50%;
            left: 0;
            background-color: #fff;
        }

        .css-4bb56i:after {
            content: "";
            position: absolute;
            width: 40%;
            height: 1px;
            top: 50%;
            right: 0;
            background-color: #fff;
        }

        .auth_btn{
            background: transparent;
            border: 1px solid white;
            color: #fff;
            margin: 7px 0;
            padding: 10px;
        }

        .auth_btn:hover{
            background: white;
            color: #000 !important;
        }

        .css-8in3lk {
            position: fixed;
            bottom: 0%;
            /* left: 0; */
            width: 100%;
            height: 10px;
            background-color: #fc5000;
            z-index: 2;
        }

        .css-sok_{
            position: relative;
            bottom: 0;
            left: -3%;
        }
    </style>
@endsection
