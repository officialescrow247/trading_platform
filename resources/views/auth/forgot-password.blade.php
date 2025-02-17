@extends('new_design_2.layouts.auth')
@section('content')
    <div class="py-5 text-center">
        <x-auth-session-status class="mb-4" :status="session('status')" />
    
        <form class="py-5" method="POST" action="{{ route('password.email') }}">
            @csrf
    
            <!-- Email Address -->
            <div class="col-md-4 offset-md-4">
                <x-input-label for="email" :value="__('Enter your email address:')" /><br>
                <input type="email" class="block mt-1 form-control" name="email" id="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    
                <button class="btn btn-sm px-4 py-2 rounded-pill text-light mt-4" style="background-color: #22a07a;">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
    
        </form>
    </div>
@endsection