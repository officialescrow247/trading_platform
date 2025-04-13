@extends('layouts.app')
@section('content')
   <section id="alternative_data_fixed_banner">
      <div class="container py-5">
         <h1>Insights</h1>
         <h1>That Help Traders</h1>
      </div>
   </section>

   <section class="pt-5" id="our_market_explore">
      <div class="container py-5 text-center">
         <h1>Alternative Data</h1>
         <h4>Alternative data can help you think outside the box when it comes to making trades. We provide you with the insights you need to try and get ahead of the market.</h4>
         <!-- <button style="background-color: #fc5000;" class="btn px-4 text-light mt-4 rounded-pill">Our approach</button> -->
      </div>
   </section>

   <section>
		<div class="container">
         <div class="row pb-5">
            <div class="col-md-6">
               <h1>What is alternative data?</h1>
               <p>
                  It's important to take account of all the relevant news before making an investment. After all, a planned trade is more likely to be a profitable one. Such insights usually come from traditional sources, like financial statements. But while undoubtedly useful, these rarely provide you with the whole story. This is why alternative data is now so valuable in helping traders make key decisions.
               </p>

               <p>
                  By moving away from traditional data sources and looking for insights elsewhere, you can gain a much clearer picture of the financial markets and improve your chances of getting ahead.
               </p>
            </div>

            <div class="col-md-6">
               <div>
                  <img src="{{ asset('imgs/a1.png') }}" alt="" class="img-fluid">
               </div>
            </div>
         </div>

         <div class="row pt-5">
            <div class="col-md-6">
               <div>
                  <img src="{{ asset('imgs/a2.png') }}" alt="" class="img-fluid">
               </div>
            </div>

            <div class="col-md-6">
               <h1>Where does alternative data come from?</h1>
               <p>
                  Unlike traditional data which is often reported by the company itself, alternative data is typically acquired from independent sources. The means of doing this has changed significantly over the years.
               </p>

               <p>
                  Financial analysts once resorted to unusual metrics to measure a company’s performance, like counting customers visiting a shop on a certain day. Thankfully things are much more sophisticated nowadays where traders can quickly access in-depth online analysis.
               </p>

               <!-- <button style="background-color: #fc5000;" class="btn px-4 text-light mt-4 rounded-pill">Learn how insights become trading signals</button> -->
            </div>
         </div>
      </div>
	</section>

   <section>
      <div class="container pt-5 px-5 pb-3">
         <img src="{{ asset('imgs/line.png') }}" alt="" class="img-fluid">
      </div>

      <div class="container py-5 px-5">
         <h1>How does Spreadex Trade's alternative data help traders?</h1>
         
         <div>
            <h6 class="pt-3"><strong>Here at Spreadex Trade, we focus specifically on social media - an incredibly valuable type of alternative data. What does this have to do with trading you ask?</strong></h6>
            <div class="row pt-4">
               <div class="col-md-1">
                  <img src="{{ asset('imgs/arr.svg') }}" class="img-fluid">
               </div>
   
               <div class="col-md-11">
                  <p>
                     Just think about how often stories and speculations circulate on social channels before traditional mainstream news outlets. These developments may not seem immediately useful, but the beauty of alternative data is its ability to make you think outside the box. Once you delve into the details, you could profit from an early insight that the market hasn't yet clocked on to.
                  </p>
   
               </div>
            </div>
         </div>

         <div>
            <h6 class="pt-3"><strong>Our traders can harness the power of social media to their benefit.</strong></h6>
            <div class="row pt-4">
               <div class="col-md-1">
                  <img src="{{ asset('imgs/arr.svg') }}" class="img-fluid">
               </div>
   
               <div class="col-md-11">
                  <p>
                     To help you make the most of social media, we've developed Smart News. This exclusive system harvests all financial market news in one place, making it easy for you to identify the specific threads that apply to your trading interests. Use Smart News to follow our curated news feeds while also creating and customising your own channels in line with your market watchlists.
                  </p>
   
               </div>
            </div>
         </div>

         <div>
            <h6 class="pt-3"><strong>Then we highlight specific insights to give you a trading advantage.</strong></h6>
            <div class="row pt-4">
               <div class="col-md-1">
                  <img src="{{ asset('imgs/arr.svg') }}" class="img-fluid">
               </div>
   
               <div class="col-md-11">
                  <p>
                     Our unique cross-referencing method enables us to quickly connect social media data to specific financial events, such as central bank meetings and economic data releases. We analyse this in real-time and pick out significant anomalies that may provide new insights into the markets.
                  </p>
   
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

   <section>
      <div class="container py-5">
         <div class="row bg-light">
            <div class="col-md-6 ps-5 bg-light">
               <!-- <h6><strong>LEARN MORE ABOUT ALTERNATIVE DATA</strong></h6>

               <div class="pt-5 ps-5 pb-5">
                  <div class="row">
                     <div class="col-md-2">
                        <aside class="list-block__container-aside"><span class="list-block__icon"><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.8 5L21 1H3V35H7V21H18.2L19 25H33V5H21.8Z" fill="#2DE0E8"></path></svg></span></aside>
                     </div>

                     <div class="col-md-10">
                        <h4>Inside the Broker Insights</h4>
                        <p class="pt-3">Get the inside scoop on what our trading team is looking at right now.</p>
                        
                        <a class="d-flex align-items-center text-dark" target="_self" href="#!">
                           <div class="">
                              <svg class="cta-link__icon icon-color-white icon--circle-arrow" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z" fill="#fc5000"></path>
                                 <path d="M24.3014 19.4736H14.4238C14.1329 19.4741 13.9004 19.7062 13.9004 19.9974C13.9004 20.2866 14.1308 20.5268 14.4238 20.5268H24.3011L21.4057 23.4168L21.4044 23.4181C21.2042 23.6254 21.2023 23.9603 21.4057 24.1632C21.613 24.3704 21.9492 24.3725 22.1524 24.1625L25.9436 20.3712C26.1526 20.1686 26.1527 19.8323 25.9436 19.6299L22.5224 16.2084C22.3181 16.0041 21.987 16.0031 21.7814 16.2063V16.2063C21.5743 16.4112 21.5733 16.7455 21.7793 16.9515L24.3014 19.4736Z" fill="white" stroke="white" stroke-width="0.2"></path>
                              </svg>
                           </div>
                           <span class="cta-link-text black-gray ps-3">Read more</span>
                        </a>
                     </div>
                  </div>
               </div>

               <div class="pt-5 ps-5 pb-5">
                  <div class="row">
                     <div class="col-md-2">
                        <aside class="list-block__container-aside"><span class="list-block__icon"><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.8 5L21 1H3V35H7V21H18.2L19 25H33V5H21.8Z" fill="#2DE0E8"></path></svg></span></aside>
                     </div>

                     <div class="col-md-10">
                        <h4>Discover More</h4>
                        <p class="pt-3">Our regular blogs will help give you a quick update on the state of the market</p>
                        
                        <a class="d-flex align-items-center text-dark" target="_self" href="#!">
                           <div class="">
                              <svg class="cta-link__icon icon-color-white icon--circle-arrow" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z" fill="#fc5000"></path>
                                 <path d="M24.3014 19.4736H14.4238C14.1329 19.4741 13.9004 19.7062 13.9004 19.9974C13.9004 20.2866 14.1308 20.5268 14.4238 20.5268H24.3011L21.4057 23.4168L21.4044 23.4181C21.2042 23.6254 21.2023 23.9603 21.4057 24.1632C21.613 24.3704 21.9492 24.3725 22.1524 24.1625L25.9436 20.3712C26.1526 20.1686 26.1527 19.8323 25.9436 19.6299L22.5224 16.2084C22.3181 16.0041 21.987 16.0031 21.7814 16.2063V16.2063C21.5743 16.4112 21.5733 16.7455 21.7793 16.9515L24.3014 19.4736Z" fill="white" stroke="white" stroke-width="0.2"></path>
                              </svg>
                           </div>
                           <span class="cta-link-text black-gray ps-3">Read more</span>
                        </a>
                     </div>
                  </div>
               </div>

               <div class="pt-5 ps-5 pb-5">
                  <div class="row">
                     <div class="col-md-2">
                        <aside class="list-block__container-aside"><span class="list-block__icon"><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.8 5L21 1H3V35H7V21H18.2L19 25H33V5H21.8Z" fill="#2DE0E8"></path></svg></span></aside>
                     </div>

                     <div class="col-md-10">
                        <h4>Smart News Tutorials</h4>
                        <p class="pt-3">
                           Learn how to select the information data and sources which are right for your trading plan.
                        </p>
                        
                        <a class="d-flex align-items-center text-dark" target="_self" href="#!">
                           <div class="">
                              <svg class="cta-link__icon icon-color-white icon--circle-arrow" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z" fill="#fc5000"></path>
                                 <path d="M24.3014 19.4736H14.4238C14.1329 19.4741 13.9004 19.7062 13.9004 19.9974C13.9004 20.2866 14.1308 20.5268 14.4238 20.5268H24.3011L21.4057 23.4168L21.4044 23.4181C21.2042 23.6254 21.2023 23.9603 21.4057 24.1632C21.613 24.3704 21.9492 24.3725 22.1524 24.1625L25.9436 20.3712C26.1526 20.1686 26.1527 19.8323 25.9436 19.6299L22.5224 16.2084C22.3181 16.0041 21.987 16.0031 21.7814 16.2063V16.2063C21.5743 16.4112 21.5733 16.7455 21.7793 16.9515L24.3014 19.4736Z" fill="white" stroke="white" stroke-width="0.2"></path>
                              </svg>
                           </div>
                           <span class="cta-link-text black-gray ps-3">Read more</span>
                        </a>
                     </div>
                  </div>
               </div> -->
            </div>

            <div class="col-md-6">
               <div>
                  <img src="{{ asset('imgs/a3.png') }}" alt="" class="img-fluid" style="position: relative; top: -40px;">
               </div>
            </div>
         </div>
      </div>
   </section>
@endsection