@extends('layouts.app')
@section('content')
   <section id="support_banner">
      <div class="container py-5">
         <h1>Giving Trading</h1>
         <h1>A Human Touch</h1>
      </div>
   </section>
   
   <section class="py-5">
      <div class="container pt-5">
         <div class="py-5 actions_tr" style="padding: 300px 100px 0px 100px;">
            <h6>WE'RE HERE FOR ALL TRADERS</h6>
            <h1 class="pt-3">24/5 customer support</h1>
            <p class="pt-4">
               The trading world often seems cold and complicated, but it doesn't have to be that way. We're here to make trading more accessible and more human with our team of customer support professionals. Whether you need help using our platform or have a question about trading in general, we're on hand 24 hours a day, Sunday 10pm - Friday 10pm (GMT) by phone, email or chat bot.
            </p>
            
            <p class="pt-4" style="color: #EE4E08;">
               <b>support@tradenationltd.com</b>
            </p>

            <p class="mb-5" style="color: #EE4E08;">
               <b>+44 1254 369752</b>
            </p>

            <hr>

            <h1 class="mt-5">A fairer trading experience</h1>
            <p class="pt-4">
            Trading can be enjoyed by everyone regardless of age, experience or background so we want to make it fair and accessible for anybody that's interested.
            </p>
            <p>
            We're proud to have one of the best customer support teams in the industry to help you every step of the way, no matter where you are in your trading journey.
            </p>

            <!-- <div class="pt-3">
               <button style="background-color: #fc5000;" class="btn px-4 text-light mt-4 rounded-pill">Our approach</button>
            </div> -->
         </div>
      </div>
   </section>

   <section class="container">
      <div class="actions_tr" style="padding: 0px 100px;">
         <p class="text-center">
            "We were particularly impressed by the measures in place to support customers such as the one-to-one walk through of the demo account and extensive video demonstrations."
         </p>
         <div class="text-center">
            <img src="https://images.prismic.io/trade-nation-marketing-cms/1e33506c-7aac-4ea0-ae73-262d65801ab6_Daytrading+logo.png?auto=compress,format" alt="" class="img-fluid">
         </div>
      </div>
   </section>

   <section class="container">
      <div class="py-5 actions_tr" style="padding: 0px 100px;">
         <img src="{{ asset('imgs/line.png') }}" alt="" class="img-fluid pt-3">

         <h1 class="text-center pt-5">Challenge the markets - and challenge us!</h1>
         <p class="pt-5">
            We are committed to providing an open and transparent platform where community, discussion and open dialogue are the top priorities. This means that as well as encouraging you to challenge the markets, we also love to see you challenging us!
         </p>
         <p class="pt-2 pb-5">
            Get in touch with all your questions and insights so we can learn and grow as a collective, and transform the trading experience for the better.
         </p>

         <!-- <div class="text-center">
            <button style="background-color: #fc5000;" class="btn px-4 text-light mt-4 rounded-pill">
               Request a callback
            </button>
         </div> -->
      </div>
   </section>

   <!-- <section class="">
      <div class="container py-5">
         <div class="row">
            <div class="col-md-4 text-light p-5" style="background-color: #FC5000;">
               <div>
                  <h5>OUR DIFFERENCE</h5>
                  <h2 class="pt-1">We use alternative data</h2>

                  <div style="padding-top: 100px;">
                     <svg class="cta-link__icon icon-color-tn_orange icon--circle-arrow icon--circle-arrow-white" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z" fill="white"></path><path d="M24.3014 19.4736H14.4238C14.1329 19.4741 13.9004 19.7062 13.9004 19.9974C13.9004 20.2866 14.1308 20.5268 14.4238 20.5268H24.3011L21.4057 23.4168L21.4044 23.4181C21.2042 23.6254 21.2023 23.9603 21.4057 24.1632C21.613 24.3704 21.9492 24.3725 22.1524 24.1625L25.9436 20.3712C26.1526 20.1686 26.1527 19.8323 25.9436 19.6299L22.5224 16.2084C22.3181 16.0041 21.987 16.0031 21.7814 16.2063C21.5743 16.4112 21.5733 16.7455 21.7793 16.9515L24.3014 19.4736Z" fill="white" stroke="#FC5000" stroke-width="1"></path></svg>

                     <span class="ps-2">Read more</span>
                  </div>
               </div>
            </div>
            
            <div class="col-md-4 p-5" style="background-color: white;">
               <div>
                  <h5>OUR DIFFERENCE</h5>
                  <h2 class="pt-1">We communicate our costs</h2>

                  <div style="padding-top: 100px;">
                     <svg class="cta-link__icon icon-color-tn_orange icon--circle-arrow icon--circle-arrow-white" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z" fill="#FC5000"></path>
                        <path d="M24.3014 19.4736H14.4238C14.1329 19.4741 13.9004 19.7062 13.9004 19.9974C13.9004 20.2866 14.1308 20.5268 14.4238 20.5268H24.3011L21.4057 23.4168L21.4044 23.4181C21.2042 23.6254 21.2023 23.9603 21.4057 24.1632C21.613 24.3704 21.9492 24.3725 22.1524 24.1625L25.9436 20.3712C26.1526 20.1686 26.1527 19.8323 25.9436 19.6299L22.5224 16.2084C22.3181 16.0041 21.987 16.0031 21.7814 16.2063C21.5743 16.4112 21.5733 16.7455 21.7793 16.9515L24.3014 19.4736Z" fill="white" stroke="white" stroke-width="1"></path></svg>

                     <span class="ps-2">Read more</span>
                  </div>
               </div>
            </div>

            <div class="col-md-4 text-light p-5" style="background-color: #FC5000;">
               <div>
                  <h5>OUR DIFFERENCE</h5>
                  <h2 class="pt-1">We believe in fair trading</h2>

                  <div style="padding-top: 100px;">
                     <svg class="cta-link__icon icon-color-tn_orange icon--circle-arrow icon--circle-arrow-white" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z" fill="white"></path><path d="M24.3014 19.4736H14.4238C14.1329 19.4741 13.9004 19.7062 13.9004 19.9974C13.9004 20.2866 14.1308 20.5268 14.4238 20.5268H24.3011L21.4057 23.4168L21.4044 23.4181C21.2042 23.6254 21.2023 23.9603 21.4057 24.1632C21.613 24.3704 21.9492 24.3725 22.1524 24.1625L25.9436 20.3712C26.1526 20.1686 26.1527 19.8323 25.9436 19.6299L22.5224 16.2084C22.3181 16.0041 21.987 16.0031 21.7814 16.2063C21.5743 16.4112 21.5733 16.7455 21.7793 16.9515L24.3014 19.4736Z" fill="white" stroke="#FC5000" stroke-width="1"></path></svg>

                     <span class="ps-2">Read more</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
@endsection