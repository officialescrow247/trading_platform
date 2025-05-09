@extends('new_design.app')
@section('content')
   <section id="account_types_banner">
      <div class="container py-5">
         <h1 class="text-light">Account Types</h1>
      </div>
   </section>

   <section>
      <div class="container py-5">
         <p>
            {{ env('APP_NAME') }} has designed different account types to meet the different needs of individual traders. The account types are intended to ensure investors get the best value for their capital amount invested. There are added perks when you start out with much higher trading capital. But, regardless of your account type, you are guaranteed full access to the trading platform and its features, mobile trading, free access to educational resources and the economic calendar, as well as professional and responsive customer support.
         </p>

         <p>
            Feel free to have a session with your personal account manager to help you select the best account type for you.
         </p>
      </div>
   </section>

   <section>
      <div class="container pb-5">
         {{-- <div class="table-responsive pb-5">
            <table class="table table-striped table-borderless">
               <thead>
                  <tr class="border-bottom">
                     <th></th>
                     <th style="background-color: #E65456; color: white;" class="mx-5">Basic</th>
                     <th style="background-color: #A094F8; color: white;">Gold</th>
                     <th style="background-color: #69BAFA; color: white;">Pro <i class="fa-solid fa-star ps-2"></i></th>
                     <th style="background-color: #F6B742; color: white;">VIP <i class="fa-solid fa-crown ps-2" style="color: #fff;"></i></th>
                  </tr>
               </thead>
      
               <tbody>
                  <tr>
                     <th class="col-3">Minimum Deposit: € / $ / £</th>
                     <td>€553</td>
                     <td>€12,732</td>
                     <td>€50,325</td>
                     <td>€98,000</td>
                  </tr>
      
                  <tr>
                     <th>Welcome Bonus</th>
                     <td>Up to 3%</td>
                     <td>Up to 5%</td>
                     <td>Up to 8%</td>
                     <td>Up to 10%</td>
                  </tr>
      
                  <tr>
                     <th>Private Training</th>
                     <td>2 sessions / Month</td>
                     <td>4 sessions / Month</td>
                     <td>6 sessions / Month</td>
                     <td>8 sessions / Month</td>
                  </tr>
      
                  <tr>
                     <th>Insured Trading</th>
                     <td>None</td>
                     <td>Account Manager discretion</td>
                     <td>Account Manager discretion</td>
                     <td>Customed</td>
                  </tr>

                  <tr>
                     <th>Leverage</th>
                     <td>1:10</td>
                     <td>1:50</td>
                     <td>1:100</td>
                     <td>1:200</td>
                  </tr>

                  <tr>
                     <th>Trading Signals</th>
                     <td>Weekly</td>
                     <td>3 per Week</td>
                     <td>Daily</td>
                     <td>Daily</td>
                  </tr>

                  <tr>
                     <th>Expedite Withdrawals</th>
                     <td>Up to 5 business days</td>
                     <td>Up to 3 business days</td>
                     <td>Within 24 hours</td>
                     <td>Immediate</td>
                  </tr>

                  <tr>
                     <th>Trade Nation Rewards</th>
                     <td>None</td>
                     <td>Up to €1000 in rewards</td>
                     <td>Up to €5000 in rewards</td>
                     <td>Up to €10000 in rewards</td>
                  </tr>

                  <tr>
                     <th>Access to VIP Room</th>
                     <td>None</td>
                     <td>Special Events Only</td>
                     <td><img src="{{ asset('imgs/tick.svg') }}" alt="tick icon" class="img-fluid" style="width: 10%"></td>
                     <td><img src="{{ asset('imgs/tick.svg') }}" alt="tick icon" class="img-fluid" style="width: 10%"></td>
                  </tr>

                  <tr>
                     <td></td>
                     <td><a href="{{ route('register') }}" class="btn btn-sm btn-info rounded-pill px-4 py-1">OPEN ACCOUNT</a></td>
                     <td><a href="{{ route('register') }}" class="btn btn-sm btn-info rounded-pill px-4 py-1">OPEN ACCOUNT</a></td>
                     <td><a href="{{ route('register') }}" class="btn btn-sm btn-info rounded-pill px-4 py-1">OPEN ACCOUNT</a></td>
                     <td><a href="{{ route('register') }}" class="btn btn-sm btn-info rounded-pill px-4 py-1">OPEN ACCOUNT</a></td>
                  </tr>
               </tbody>
            </table>
         </div> --}}

            <div class="row">
              <!-- VIP Cards Column -->
              <div class="col-md-6 mb-4" style="font-size: 13px;">
                <!-- Repeated VIP Card -->
                <div class="card m-5 shadow-sm border-0" style="background-color: #E65456">
                  <div class="card-body">
                    <h5 class="card-title text-center p-2 align-items-center">
                      BASIC
                    </h5>
                  </div>
                </div>
          
                <div class="card m-5 shadow-sm border-0" style="background-color: #A094F8">
                  <div class="card-body">
                    <h5 class="card-title text-center p-2 align-items-center">
                      GOLD
                    </h5>
                  </div>
                </div>
          
                <div class="card m-5 shadow-sm border-0" style="background-color: #69BAFA;">
                    <div class="card-body position-relative d-flex flex-column align-items-center justify-content-center">
                      <!-- Recommended Badge -->
                      <div class="position-absolute top-0 start-50 translate-middle-x px-2 py-1 rounded" style="background-color: rgb(6, 150, 6); font-size: 12px; color: #fff;">
                        (Recommended)
                      </div>
                  
                      <!-- Title -->
                      <h5 class="card-title text-white mt-4">
                        PRO <i class="fa-solid fa-star ps-2" style="color: #fff;"></i>
                      </h5>
                    </div>
                  </div>
                  
          
                <div class="card m-5 shadow-sm border-0" style="background-color: #F6B742">
                  <div class="card-body">
                    <h5 class="card-title text-center p-2 align-items-center">
                      VIP <i class="fa-solid fa-crown ps-2" style="color: #fff;"></i>
                    </h5>
                  </div>
                </div>
              </div>
          
              <!-- Info Column -->
              <div class="col-md-6 mb-4">
                {{-- <div class="card w-100 mb-4 shadow-sm border-0 bg-light">
                  <div class="card-body text-center p-5"> --}}

                    <div style="overflow: hidden; position: relative; padding-top: 2%;">
                        <img src="https://images.prismic.io/tnfev2/Zmw_sZm069VX1wol_Platforms-Mobile-Hero-Background.png?auto=format%2Ccompress%3Fauto%3Dcompress%2Cformat&rect=0%2C0%2C828%2C576&w=1920&fit=max" 
                            alt="" class="img-flusid" style="width: 110% !important" />
                    </div>

                    <h5 class="card-title text-center pt-4" style="font-size: 16px;">
                        <i>"You can view our account type informations after you have logged in to your trade room"</i>
                    </h5>

                  {{-- </div>
                </div> --}}
              </div>
            </div>
          
      </div>
   </section>
@endsection
