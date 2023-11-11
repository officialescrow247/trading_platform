@extends('layouts.users')

@section('content')
   <section class="setting_pg px-3 py-5" style="height: 100%; background: linear-gradient(rgba(28, 31, 37, 0.9), rgba(28, 31, 37, 0.9)), url({{ asset('imgs/trading_bg.jpg') }}); background-position: top; background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
      <ul class="nav nav_ttabs_dark nav-tabs justify-content-center" id="myTab" role="tablist">
         <li class="nav-item" role="presentation">
            <button class="nav-link active" id="edit_profile-tab" data-bs-toggle="tab" data-bs-target="#edit_profile" type="button" role="tab" aria-controls="edit_profile" aria-selected="true">
               <div>
                  <i class="fa-solid fa-pen-to-square"></i>
               </div>
               Edit personal <br> info
            </button>
         </li>

         <li class="nav-item" role="presentation">
            <button style="color: white;" class="nav-link" id="change_password-tab" data-bs-toggle="tab" data-bs-target="#change_password" type="button" role="tab" aria-controls="change_password" aria-selected="false">
               <div>
                  <i class="fa-solid fa-lock"></i>
               </div>
               Change Password
            </button>
         </li>

         <li class="nav-item" role="presentation">
            <button style="color: white;" class="nav-link" id="currency-tab" data-bs-toggle="tab" data-bs-target="#currency" type="button" role="tab" aria-controls="currency" aria-selected="false">
               <div>
                  <i class="fas fa-money-bill"></i>
               </div>
               Currency
            </button>
         </li>
      </ul>

      <div class="tab-content" id="myTabContent">
         <div class="tab-pane fade show active" id="edit_profile" role="tabpanel" aria-labelledby="edit_profile-tab">
            <div class="d-flex justify-content-center">
               <div class="col-lg-10 col-md-12 py-5">
                  <form method="POST" action="{{ route('edit_profile') }}">
                     @csrf
      
                     <div class="row">
                        <div class="col-md-6">
                           <!-- First Name -->
                           <div>
                              <label for="first_name">First Name</label>
                              <input id="first_name" class="form-control" type="text" name="first_name" value="{{ auth()->user()->first_name }}" required readonly>
                           </div>
            
                           <!-- Last Name -->
                           <div class="mt-3">
                              <label for="last_name">Last Name</label>
                              <input id="last_name" class="form-control" type="text" name="last_name" value="{{ auth()->user()->last_name }}" required readonly>
                           </div>
            
                           <!-- Email Address -->
                           <div class="mt-3">
                              <label for="email">Email Address</label>
                              <input id="email" class="form-control" type="email" name="email" value="{{ auth()->user()->email }}" required readonly>
                           </div>
                        </div>

                        <div class="col-md-6">
                           <!-- Phone Number -->
                           <div class="">
                              <label for="phone">Phone Number (e.g. +447766038012)</label>
                              <input id="phone" class="form-control" type="tel" name="phone" value="{{ auth()->user()->phone }}" required>
                           </div>

                           <!-- Country -->
                           <div class="mt-3">
                              <label for="country">Country</label>
                              <input class="form-control" type="text" name="country" value="{{ auth()->user()->country }}" required readonly>
                           </div>

                           <!-- Account type -->
                           <div class="mt-3">
                              <label for="acct_type">Account Type</label>

                              @if (auth()->user()->acct_type === '1')
                                 <input id="acct_type" class="form-control" type="text" value="Basic Account" required readonly>
                                 <input class="form-control" type="hidden" value="1" required readonly>
                              @elseif (auth()->user()->acct_type === '2')
                                 <input id="acct_type" class="form-control" type="text" value="Gold Account" required readonly>
                                 <input class="form-control" type="hidden" value="2" required readonly>
                              @elseif (auth()->user()->acct_type === '3')
                                 <input id="acct_type" class="form-control" type="text" value="Pro Account" required readonly>
                                 <input class="form-control" type="hidden" value="3" required readonly>
                              @else
                                 <input id="acct_type" class="form-control" type="text" value="VIP Account" required readonly>
                                 <input class="form-control" type="hidden" value="4" required readonly>
                              @endif
                           </div>
                        </div>

                        <div class="col-md-6 mt-3">
                           <!-- City -->
                           <div class="">
                              <label for="city">City</label>
                              <input id="city" class="form-control" type="text" name="city" value="{{ auth()->user()->city }}" required>
                           </div>
                        </div>

                        <div class="col-md-6">
                           <!-- Address -->
                           <div class="mt-3">
                              <label for="address">Address</label>
                              <input class="form-control" type="text" name="address" value="{{ auth()->user()->address }}" required>
                           </div>

                           <!-- Date of birth -->
                           <div class="mt-3">
                              <label for="acct_type">Date of birth</label>
                              <input type="date" name="dob" class="form-control" value="{{ auth()->user()->dob }}" required>
                           </div>
                        </div>
                     </div>

                     <button type="submit" class="btn btn-sm px-4 btn-success mt-5">Save!</button>
                  </form>
               </div>
            </div>
         </div>

         <div class="tab-pane fade" id="change_password" role="tabpanel" aria-labelledby="change_password-tab">
            <div class="d-flex justify-content-center">
               <div class="col-lg-4 col-md-12 py-5">
                  <form method="POST" action="{{ route('change_password') }}">
                     @csrf
                     <div>
                        <label for="password">New password</label>
                        <input type="password" name="password" id="password" class="password form-control" placeholder="Enter new password" required>
                     </div>

                     <div class="mt-3">
                        <label for="password_confirmation">Confirm password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="password_confirmation form-control" placeholder="Enter new password" required>
                        <input type="checkbox" class="show-password" class="mt-2"> <label for="">Show password</label>
                     </div>

                     <button type="submit" class="btn btn-sm px-4 btn-success mt-5">Save!</button>
                  </form>
               </div>
            </div>
         </div>

         <div class="tab-pane fade" id="currency" role="tabpanel" aria-labelledby="currency-tab">
            <div class="d-flex justify-content-center">
               <div class="col-lg-4 col-md-12 py-5">
                  <form method="POST" action="{{ route('currency') }}">
                     @csrf
                     <div>
                        <label for="currency_">Currency</label>
                        <input type="text" value="{{ auth()->user()->currency }}" readonly class="form-control">
                     </div>

                     <!-- <button type="submit" class="btn btn-sm px-4 btn-success mt-5">Save!</button> -->
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>

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