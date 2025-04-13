@extends('layouts.app')
@section('content')
   <section id="our_market_banner">
      <div class="container py-5">
         <h1>Our</h1>
         <h1>Trading markets</h1>
      </div>
   </section>

   <section class="pt-5" id="our_market_explore">
      <div class="container py-5 text-center">
         <h1>Explore our trading markets & see our charges</h1>
         <h4>Choosing the right market is key to successful trading, and whatever yours is, we're sure you'll be able to trade it here at Spreadex Trade. We have the markets you want and the best fixed spreads you'll find.</h4>
      </div>
   </section>

   <section>
		<div class="py-5 text-center">
			<h5 class="pb-3">AS FEATURED IN</h5>
			<img src="{{ asset('imgs/feature_1.svg') }}" alt="" class="img-fluid">
		</div>

      <div class="container">
      <img src="{{ asset('imgs/line.png') }}" alt="" class="img-fluid">
      </div>
	</section>

   <section>
      <div class="py-5 text-center container">
         <h1>Our top markets based on volume of trades</h1>
         <p class="pt-3">
            To get a better sense of our markets, these are the ones that have proven most popular with our traders. Use our chart to see just how low the fixed spread is for your market of choice, and find out the deposits required to trade.
         </p>
         <p>
            If anything is unclear or you simply want more information, just get in touch by phone, email or live chat. There are no bots involved in our customer success team so rest assured your questions and queries will always be handled by a real-life human.
         </p>

         <!-- <button style="background-color: #fc5000;" class="btn px-4 text-light mt-4 rounded-pill">Request a callback</button> -->
      </div>
   </section>

   <!-- <section>
      <div class="container">
         <img src="{{ asset('imgs/line.png') }}" alt="" class="img-fluid">
      </div>

      <div class="container text-center py-5">
         <h1>Are you a new trader?</h1>
         <h5>Check out our beginner's guide for top tips on picking the best market for you.</h5>
         <button style="background-color: #fc5000;" class="btn px-4 text-light mt-4 rounded-pill">Beginner's guide to trading</button>
      </div>
   </section> -->

   <section>
      <div class="container">
         <img src="{{ asset('imgs/line.png') }}" alt="" class="img-fluid">
      </div>

      <div class="container py-5">
         <h1>How do we profit?</h1>
         
         <h6 class="pt-3"><strong>Firstly, there's the spread</strong></h6>
         <div class="pt-3 pb-5">
            <div class="row">
               <div class="col-md-1">
                  <img src="{{ asset('imgs/arr.svg') }}" class="img-fluid">
               </div>

               <div class="col-md-11">
                  <p>
                     This is the difference between the price you can sell at, and the price at which you can buy. This price difference is one of the ways that Spreadex Trade can make a profit, and the narrower the spread, the smaller your trading costs will be. There are different spreads for each market but our spreads are always low and fixed no matter how volatile the underlying markets become. In fact, it is often the case that our spreads are narrower than those available in the underlying markets, which means a much better deal for you.
                  </p>
               </div>
            </div>
         </div>

         <h6 class="pt-3"><strong>Secondly, there's overnight funding charges</strong></h6>
         <div class="pt-3 pb-5">
            <div class="row">
               <div class="col-md-1">
                  <img src="{{ asset('imgs/arr.svg') }}" class="img-fluid">
               </div>

               <div class="col-md-11">
                  <p>
                     We also apply a funding charge to trades held overnight, which we refer to as overnight funding charges. With us you are trading on margin which means you only need to hold a small percentage of your position's total value on your account to control all of it. As we lend you the full amount, we apply a small funding charge based on current interest rates on any positions still open each day after 10pm London.
                  </p>
                  <p>*this does not apply to trades on our futures markets</p>

               </div>
            </div>

            <div class="text-center">
               <button style="background-color: #fc5000;" class="btn px-4 text-light mt-4 rounded-pill">Beginner's guide to trading</button>
            </div>
         </div>
      </div>
   </section>

   <section>
      <div class="container py-5 px-4">
         <div class="row">
            <div class="col-md-8">
               <div>
                  <h6>WE'RE CHALLENGING INDUSTRY STANDARDS TO GIVE YOU A BETTER TRADING EXPERIENCE. HERE'S HOW:</h6>
                  
                  <div class="ps-lg-5">
                     <div class="ps-lg-5">
                        <h3 class="pt-5">
                           We use alternative data
                        </h3>
                        <p>
                           Uncover exciting trading opportunities with our alternative insights from exclusive data sources
                        </p>
                        <!-- <a class="d-flex align-items-center text-dark" target="_self" href="#!">
                           <div class="">
                              <svg class="cta-link__icon icon-color-white icon--circle-arrow" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z" fill="#fc5000"></path>
                                 <path d="M24.3014 19.4736H14.4238C14.1329 19.4741 13.9004 19.7062 13.9004 19.9974C13.9004 20.2866 14.1308 20.5268 14.4238 20.5268H24.3011L21.4057 23.4168L21.4044 23.4181C21.2042 23.6254 21.2023 23.9603 21.4057 24.1632C21.613 24.3704 21.9492 24.3725 22.1524 24.1625L25.9436 20.3712C26.1526 20.1686 26.1527 19.8323 25.9436 19.6299L22.5224 16.2084C22.3181 16.0041 21.987 16.0031 21.7814 16.2063V16.2063C21.5743 16.4112 21.5733 16.7455 21.7793 16.9515L24.3014 19.4736Z" fill="white" stroke="white" stroke-width="0.2"></path>
                              </svg>
                           </div>
                           <span class="cta-link-text black-gray ps-3">Discover more</span>
                        </a> -->
                     </div>
                  </div>

                  <div class="ps-lg-5">
                     <div class="ps-lg-5">
                        <h3 class="pt-5">
                           Customer support
                        </h3>
                        <p>
                           Our dedicated customer support team is on hand 24/5 to give you a more accessible and more human trading experience
                        </p>
                        <!-- <a class="d-flex align-items-center text-dark" target="_self" href="#!">
                           <div class="">
                              <svg class="cta-link__icon icon-color-white icon--circle-arrow" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z" fill="#fc5000"></path>
                                 <path d="M24.3014 19.4736H14.4238C14.1329 19.4741 13.9004 19.7062 13.9004 19.9974C13.9004 20.2866 14.1308 20.5268 14.4238 20.5268H24.3011L21.4057 23.4168L21.4044 23.4181C21.2042 23.6254 21.2023 23.9603 21.4057 24.1632C21.613 24.3704 21.9492 24.3725 22.1524 24.1625L25.9436 20.3712C26.1526 20.1686 26.1527 19.8323 25.9436 19.6299L22.5224 16.2084C22.3181 16.0041 21.987 16.0031 21.7814 16.2063V16.2063C21.5743 16.4112 21.5733 16.7455 21.7793 16.9515L24.3014 19.4736Z" fill="white" stroke="white" stroke-width="0.2"></path>
                              </svg>
                           </div>
                           <span class="cta-link-text black-gray ps-3">Discover more</span>
                        </a> -->
                     </div>
                  </div>

                  <div class="ps-lg-5">
                     <div class="ps-lg-5">
                        <h3 class="pt-5">
                           We communicate our costs
                        </h3>
                        <p>
                           Find out why we provide all the information that matters upfront, especially our charges
                        </p>
                        <!-- <a class="d-flex align-items-center text-dark" target="_self" href="#!">
                           <div class="">
                              <svg class="cta-link__icon icon-color-white icon--circle-arrow" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z" fill="#fc5000"></path>
                                 <path d="M24.3014 19.4736H14.4238C14.1329 19.4741 13.9004 19.7062 13.9004 19.9974C13.9004 20.2866 14.1308 20.5268 14.4238 20.5268H24.3011L21.4057 23.4168L21.4044 23.4181C21.2042 23.6254 21.2023 23.9603 21.4057 24.1632C21.613 24.3704 21.9492 24.3725 22.1524 24.1625L25.9436 20.3712C26.1526 20.1686 26.1527 19.8323 25.9436 19.6299L22.5224 16.2084C22.3181 16.0041 21.987 16.0031 21.7814 16.2063V16.2063C21.5743 16.4112 21.5733 16.7455 21.7793 16.9515L24.3014 19.4736Z" fill="white" stroke="white" stroke-width="0.2"></path>
                              </svg>
                           </div>
                           <span class="cta-link-text black-gray ps-3">Discover more</span>
                        </a> -->
                     </div>
                  </div>

                  <div class="ps-lg-5">
                     <div class="ps-lg-5">
                        <h3 class="pt-5">
                           We believe in fair trading
                        </h3>
                        <p>
                           Find out why we provide all the information that matters upfront, especially our charges
                        </p>
                        <!-- <a class="d-flex align-items-center text-dark" target="_self" href="#!">
                           <div class="">
                              <svg class="cta-link__icon icon-color-white icon--circle-arrow" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z" fill="#fc5000"></path>
                                 <path d="M24.3014 19.4736H14.4238C14.1329 19.4741 13.9004 19.7062 13.9004 19.9974C13.9004 20.2866 14.1308 20.5268 14.4238 20.5268H24.3011L21.4057 23.4168L21.4044 23.4181C21.2042 23.6254 21.2023 23.9603 21.4057 24.1632C21.613 24.3704 21.9492 24.3725 22.1524 24.1625L25.9436 20.3712C26.1526 20.1686 26.1527 19.8323 25.9436 19.6299L22.5224 16.2084C22.3181 16.0041 21.987 16.0031 21.7814 16.2063V16.2063C21.5743 16.4112 21.5733 16.7455 21.7793 16.9515L24.3014 19.4736Z" fill="white" stroke="white" stroke-width="0.2"></path>
                              </svg>
                           </div>
                           <span class="cta-link-text black-gray ps-3">Discover more</span>
                        </a> -->
                     </div>
                  </div>
               </div>
            </div>
            
            <div class="col-md-4">
               <div>
                  <img src="{{ asset('imgs/pic1.png') }}" class="img-fluid">
               </div>
            </div>
         </div>
      </div>
   </section>

   <section>
      <div class="text-center py-5">
         <h1>Like what you see?</h1>
         <a href="{{ asset('register') }}" style="background-color: #fc5000;" class="btn px-4 text-light mt-4 rounded-pill">Join Us</a>
      </div>
   </section>
@endsection