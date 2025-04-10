@extends('layouts.auth')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-center mt-4">
            <div class="col-lg-5 col-md-12 p-5 shadow-md" style="background-color: #252525 !important; border-top: 2px solid #04e3d8;">
                
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <h2 class="pb-5 text-light text-center">Let's get you started</h2>
                    <!-- First Name -->
                    <div>
                        <x-input-label for="name" class="text-light" :value="__('First Name')" />
                        <x-text-input id="first_name" class="form-control mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus />
                        <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                    </div>

                    <!-- Last Name -->
                    <div class="mt-4">
                        <x-input-label for="name" class="text-light" :value="__('Last Name')" />
                        <x-text-input id="last_name" class="form-control mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus />
                        <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" class="text-light" :value="__('Email')" />
                        <x-text-input id="email" class="form-control mt-1 w-full" type="email" name="email" :value="old('email')" required />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Phone Number -->
                    <div class="mt-4">
                        <x-input-label for="phone_number" class="text-light" :value="__('Phone Number (e.g. +447766038012)')" />
                        <x-text-input id="phone_number" class="form-control mt-1 w-full" type="tel" name="phone_number" :value="old('phone_number')" required />
                        <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                    </div>

                    <!-- Country -->
                    <div class="mt-4">
                        <x-input-label for="country" class="text-light" :value="__('Country')" />
                        <select name="country" id="country" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm form-select mt-1 w-full" required>
                            @foreach ($countries as $country)
                                <option value="{{ $country->nicename }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('acct_type')" class="mt-2" />
                    </div>

                    <!-- City -->
                    <div class="mt-4">
                        <label for="" class="text-light">City</label>
                        <input type="text" name="city" class="form-control mt-1" placeholder="Enter City">
                    </div>

                    <!-- Address -->
                    <div class="mt-4">
                        <label for="" class="text-light">Address</label>
                        <input type="text" name="address" class="form-control mt-1" placeholder="Enter Address">
                    </div>

                    <!-- Date of Birth -->
                    <div class="mt-4">
                        <label for="" class="text-light">Date of Birth</label>
                        <input type="date" name="dob" class="form-control">
                    </div>

                    <!-- Account type -->
                    <div class="mt-4">
                        <x-input-label for="acct_type" class="text-light" :value="__('Account Type')" />
                        <!-- <x-text-input id="acct_type" class="form-control mt-1 w-full" type="acct_type" name="acct_type" :value="old('acct_type')" required /> -->
                        <select name="acct_type" id="acct_type" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm form-control mt-1 w-full" required>
                            <option value="1">Basic Account</option>
                            <option value="2">Gold Account</option>
                            <option value="3">Pro Account</option>
                            <option value="4">VIP Account</option>
                        </select>
                        <x-input-error :messages="$errors->get('acct_type')" class="mt-2" />
                    </div>

                    <!-- Currency -->
                    <div class="mt-4">
                        <x-input-label for="acct_type" class="text-light" :value="__('Select currency')" />
                        <select name="currency" id="currency_" class="form-select">
                            <option value="£">£ Pound</option>
                            <option value="€">€ Euro</option>
                            <option value="$">$ Dollar</option>
                        </select>
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" class="text-light" :value="__('Password')" />

                        <x-text-input id="password" class="form-control mt-1 w-full password"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" class="text-light" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="form-control mt-1 w-full password_confirmation"
                                        type="password"
                                        name="password_confirmation" required />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                    <input type="checkbox" class="show-password"><label class="mt-2 text-light ps-2">Show password</label>
                    

                    <div class="d-flex justify-content-end pt-3">
                        <a class="underline text-sm text-light" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <button class="btn btn-sm px-4 ms-3 text-light" style="background-color: #04e3d8;">
                            Register
                        </button>
                    </div>

                    <a class="underline text-sm text-light" href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>
        $('.show-password').change(function () {
            if ($(this).is(':checked')) {
                $('.password').attr('type', 'text');
                $('.password_confirmation').attr('type', 'text');
            } else {
                $('.password').attr('type', 'password');
                $('.password_confirmation').attr('type', 'password');
            }
        });
    </script>
@endsection
