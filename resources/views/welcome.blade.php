@extends('layouts.app')
@section('content')
	<section class="my-bg-color" id="welcome_banner">
		<!-- TradingView Widget BEGIN -->
		<div class="tradingview-widget-container">
			<div class="tradingview-widget-container__widget"></div>
			<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
				{	
					"symbols": [
						{
							"proName": "FOREXCOM:SPXUSD",
							"title": "S&P 500"
						},
						{
							"proName": "FOREXCOM:NSXUSD",
							"title": "US 100"
						},
						{
							"proName": "FX_IDC:EURUSD",
							"title": "EUR/USD"
						},
						{
							"proName": "BITSTAMP:BTCUSD",
							"title": "Bitcoin"
						},
						{
							"proName": "BITSTAMP:ETHUSD",
							"title": "Ethereum"
						}
					],
					"showSymbolLogo": true,
					"colorTheme": "light",
					"isTransparent": false,
					"displayMode": "adaptive",
					"locale": "en",
					"largeChartUrl": "{{ url('/') }}"
				}
			</script>
		</div>
		<!-- TradingView Widget END -->

		<div class="container pt-5">
			<div class="row">
				<div class="col-md-6">
					<div data-aos="fade-up" data-aos-duration="1850">
						<h1 class="bg-white" style="font-weight: 600; font-size: 50px; padding: 15px 19px; width: fit-content;">
							A fresh approach
						</h1>
						<h1 class="pt-2 text-light" style="font-weight: 600; background-color: #333333; width: fit-content; font-size: 50px; padding: 15px 19px;">
							to trading
						</h1>
					</div>
	
					<div data-aos="fade-up" data-aos-duration="2000">
						<div class="pt-5 text-light pb-4">
							No gimmicks. No distractions. Just everything you need, and nothing you don't.
						</div>
		
						<div class="pt-3">
							<a class="btn btn-light rounded-pill" href="{{ route('register') }}">Start trading</a>
							<div class="pt-4">
								<span>
									<svg width="20" height="20" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21.8 5L21 1H3V35H7V21H18.2L19 25H33V5H21.8Z" fill="#FFFFFF"></path>
									</svg>
								</span>
								<span class="text-light">
									Regulated by FCA, ASIC, FSCA, SCB
								</span>
							</div>
						</div>
					</div>
				</div>
	
				<div class="col-md-6">
					<div class="phone_img" style="position: relative;" data-aos="fade-left" data-aos-duration="1850" class="container">
						<img src="{{ asset('imgs/phone.png') }}" class="">
					</div>
				</div>
			</div>
		</div>
	</section>

	<div id="popular_fixed_spread2" class="container">
		<section id="popular_fixed_spread">
			<div class="container pt-5">
				<h6 class="popular_fixed_h6" style="font-weight: bold;">OUR POPULAR FIXED SPREAD MARKETS:</h6>
				<div class="responsive">
					<div class="slide_me" style="background-color: #333333; color: #fff;">
						<div class="container pt-5 px-4">
							<h5 class="pt-2 pb-3"><b>Crude Oil</b></h5>
							<p>
								The controversial commodity that keeps the world rolling and is seldom out of the headlines
							</p>
	
							<div class="d-flex justify-content-between" style="align-items: center; padding-top: 50px;">
								<p class=" block-img">
									<img src="https://prismic-io.s3.amazonaws.com/trade-nation-marketing-cms/1226e80a-f542-4a4e-98aa-ef55ea27f6d6_Crude+Oil+Icon_circle.svg" class="img-fluid">
								</p>
								<p>3 Points</p>
							</div>
						</div>
					</div>
	
					<div class="slide_me" style="background-color: #333333; color: #fff;">
						<div class="container pt-5 px-4">
							<h5 class="pt-2 pb-3"><b>Wall Street 30</b></h5>
							<p>
								Track some of the 30 best-known US companies with this old-school price-weighted index
							</p>
	
							<div class="d-flex justify-content-between" style="align-items: center; padding-top: 50px;">
								<p class=" block-img">
									<img src="https://trade-nation-marketing-cms.cdn.prismic.io/trade-nation-marketing-cms/00190d20-d152-4f35-ad68-b98b1e7a6dbc_USA+Flag+Icon_circle.svg" class="img-fluid">
								</p>
								<p>1 Point</p>
							</div>
						</div>
					</div>
	
					<div class="slide_me" style="background-color: #333333; color: #fff;">
						<div class="container pt-5 px-4">
							<h5 class="pt-2 pb-3"><b>US 500</b></h5>
							<p>
								Arguably the most important stock index in the world, comprising 500 giant US corporations
							</p>
	
							<div class="d-flex justify-content-between" style="align-items: center; padding-top: 50px;">
								<p class=" block-img">
									<img src="https://prismic-io.s3.amazonaws.com/trade-nation-marketing-cms/00190d20-d152-4f35-ad68-b98b1e7a6dbc_USA+Flag+Icon_circle.svg" class="img-fluid">
								</p>
								<p>0.14 Points</p>
							</div>
						</div>
					</div>
	
					<div class="slide_me" style="background-color: #333333; color: #fff;">
						<div class="container pt-5 px-4">
							<h5 class="pt-2 pb-3"><b>Germany 40</b></h5>
							<p>
								Follow the progress of Germany’s largest companies including some major global manufacturers and exporters
							</p>
	
							<div class="d-flex justify-content-between" style="align-items: center; padding-top: 50px;">
								<p class=" block-img">
									<img src="https://trade-nation-marketing-cms.cdn.prismic.io/trade-nation-marketing-cms/7a69d916-0c34-4dcd-9b9e-ca6f9aace663_Germany+Flag+Icon_circle.svg" class="img-fluid">
								</p>
								<p>0.9 Points</p>
							</div>
						</div>
					</div>

					<div class="slide_me" style="background-color: #333333; color: #fff;">
						<div class="container pt-5 px-4">
							<h5 class="pt-2 pb-3"><b>Gold</b></h5>
							<p>
								The ultimate safe-haven, or a ‘barbarous relic’? Either way, gold maintains an allure for global investors
							</p>
	
							<div class="d-flex justify-content-between" style="align-items: center; padding-top: 50px;">
								<p class=" block-img">
									<img src="https://prismic-io.s3.amazonaws.com/trade-nation-marketing-cms/a446addb-4dfa-4b9c-8d57-242f4c1b2403_Gold+Icon_circle.svg" class="img-fluid">
								</p>
								<p>0.4 Points</p>
							</div>
						</div>
					</div>
	
					<div class="slide_me" style="background-color: #333333; color: #fff;">
						<div class="container pt-5 px-4">
							<h5 class="pt-2 pb-3"><b>UK 100</b></h5>
							<p>
								An index with high weightings towards banks, oil companies and miners. Old fashioned, but different
							</p>
	
							<div class="d-flex justify-content-between" style="align-items: center; padding-top: 50px;">
								<p class=" block-img">
									<img src="https://trade-nation-marketing-cms.cdn.prismic.io/trade-nation-marketing-cms/bd19b2ac-8d2c-48ce-b03c-59580207047e_UK+Flag_circle.svg" class="img-fluid">
								</p>
								<p>0.4 Points</p>
							</div>
						</div>
					</div>
	
					<div class="slide_me" style="background-color: #333333; color: #fff;">
						<div class="container pt-5 px-4">
							<h5 class="pt-2 pb-3"><b>EUR/USD</b></h5>
							<p>
								Heavily weighted to technology, this index has captured the popularity of the most innovative US corporations
							</p>
	
							<div class="d-flex justify-content-between" style="align-items: center; padding-top: 50px;">
								<p class=" block-img">
									<img src="https://prismic-io.s3.amazonaws.com/trade-nation-marketing-cms/00190d20-d152-4f35-ad68-b98b1e7a6dbc_USA+Flag+Icon_circle.svg" class="img-fluid">
								</p>
								<p>0.7 Points</p>
							</div>
						</div>
					</div>
	
					<div class="slide_me" style="background-color: #333333; color: #fff;">
						<div class="container pt-5 px-4">
							<h5 class="pt-2 pb-3"><b>US Tech 100</b></h5>
							<p>
								Heavily weighted to technology, this index has captured the popularity of the most innovative US corporations
							</p>
	
							<div class="d-flex justify-content-between" style="align-items: center; padding-top: 50px;">
								<p class=" block-img">
									<img src="https://prismic-io.s3.amazonaws.com/trade-nation-marketing-cms/00190d20-d152-4f35-ad68-b98b1e7a6dbc_USA+Flag+Icon_circle.svg" class="img-fluid">
								</p>
								<p>0.7 Points</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<section id="join">
		<div class="container">
			<div class="text-center pb-5">
				<h1 class="">Join our nation of traders</h1>
				<a href="{{ route('register') }}" class="rounded-pill px-4 my-bg-color btn text-light mt-4">Start trading</a>
			</div>

			<div class="row py-5">
				<div class="col-md-6">
					<h1>Simple Trading Platform</h1>
					<p class="pt-5">Our job is to make yours easier.</p>
					<p>
						Our trading platform gives you the perfect gateway to financial markets, freeing you up to concentrate on what's important - maximising your profit potential while minimising your risk.
					</p>
				</div>

				<div class="col-md-6">
					<iframe width="100%" height="487" src="https://www.youtube.com/embed/gjc4yhLRjzA?rel=0&amp;autoplay=1&mute=1" width="560" height="315" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>

	<section id="op">
		<div class="py-5 text-center">
			<h5 class="pb-3">AS FEATURED IN</h5>
			<img src="{{ asset('imgs/feature_1.svg') }}" alt="" class="img-fluid">
		</div>
	</section>

	<section id="op2">
		<div class="container pt-5">
			<div class="row pt-5">
				<div class="col-md-6">
					
					<img src="https://images.prismic.io/trade-nation-marketing-cms/23ded080-d697-4fcc-a5e7-e8057a08a79f_Spreads+Table+960x856px+281021.png?auto=compress,format&rect=0,0,960,856&w=960&h=856" class="img-fluid">
				</div>

				<div id="op3" class="col-md-6 pt-5">
					<h1 class="pt-5">Enjoy Fairer Trading</h1>

					<p>Our trading costs are fixed. You can have complete confidence that our charges won’t rise when markets get volatile.</p>
					<p>Get rid of uncertainty. With us, you know in advance what your spreads will be.</p>
				</div>
			</div>
		</div>
	</section>

	<section id="op4">
		<div class="py-5 container">
			<div class="row pt-5">
				<div class="col-md-6">
					<h1>Humans Not Robots</h1>
					<p>Communication is everything. If you need to talk to us, we're on hand whenever the markets are open.</p>
					<p>
						You'll find our knowledgeable and friendly Customer Success team at the end of the phone ready to answer your questions and help build your platform knowledge.
					</p>
					<div class="row">
						<div class="mb-3 d-flex justify-content-around">
							<a class="d-flex align-items-center text-dark" target="_self" href="{{ route('customer_support') }}">
								<div class="">
									<svg class="cta-link__icon icon-color-white icon--circle-arrow" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z" fill="#FC5000"></path>
										<path d="M24.3014 19.4736H14.4238C14.1329 19.4741 13.9004 19.7062 13.9004 19.9974C13.9004 20.2866 14.1308 20.5268 14.4238 20.5268H24.3011L21.4057 23.4168L21.4044 23.4181C21.2042 23.6254 21.2023 23.9603 21.4057 24.1632C21.613 24.3704 21.9492 24.3725 22.1524 24.1625L25.9436 20.3712C26.1526 20.1686 26.1527 19.8323 25.9436 19.6299L22.5224 16.2084C22.3181 16.0041 21.987 16.0031 21.7814 16.2063V16.2063C21.5743 16.4112 21.5733 16.7455 21.7793 16.9515L24.3014 19.4736Z" fill="white" stroke="white" stroke-width="0.2"></path>
									</svg>
								</div>
								<span class="cta-link-text black-gray ps-3">Customer support</span>
							</a>

							<a class="d-flex align-items-center text-dark" target="_self" href="{{ route('trading_stories') }}">
								<div class="">
									<svg class="cta-link__icon icon-color-white icon--circle-arrow" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z" fill="#FC5000"></path>
										<path d="M24.3014 19.4736H14.4238C14.1329 19.4741 13.9004 19.7062 13.9004 19.9974C13.9004 20.2866 14.1308 20.5268 14.4238 20.5268H24.3011L21.4057 23.4168L21.4044 23.4181C21.2042 23.6254 21.2023 23.9603 21.4057 24.1632C21.613 24.3704 21.9492 24.3725 22.1524 24.1625L25.9436 20.3712C26.1526 20.1686 26.1527 19.8323 25.9436 19.6299L22.5224 16.2084C22.3181 16.0041 21.987 16.0031 21.7814 16.2063V16.2063C21.5743 16.4112 21.5733 16.7455 21.7793 16.9515L24.3014 19.4736Z" fill="white" stroke="white" stroke-width="0.2"></path>
									</svg>
								</div>
								<span class="cta-link-text black-gray ps-3">Customer reviews</span>
							</a>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<img src="{{ asset('imgs/humans.jpg') }}" alt="" class="img-fluid">
					<!-- <img src="https://images.prismic.io/trade-nation-marketing-cms/23ded080-d697-4fcc-a5e7-e8057a08a79f_Spreads+Table+960x856px+281021.png?auto=compress,format&rect=0,0,960,856&w=960&h=856" alt="" class="img-fluid"> -->
				</div>
			</div>
		</div>
	</section>

	<section id="op5">
		<div class="py-5 container learn">
			<div class="row">
				<!-- <div class="col-md-6 p-5" style="background-color: #333333; width: 600px; position: relative; top: -510px; right: 10px;"></div> -->

				<div class="col-md-6">
					<img src="{{ asset('imgs/pic.png') }}" alt="" class="img-fluid">
				</div>
				
				<div class="col-md-6 p-5" style="background-color: #333333;">
					<div>
						<h1 class="text-light pb-4">Learn to trade with no commitment and no risk</h1>
						<p class="text-light pb-5">
							If you're interested in getting into trading but don't want to sign up to a platform just yet, our simulator is the perfect stepping stone. It's designed for beginners like you to get a feel for trading the stock market without expense, risk or the commitment of a login requirement.
						</p>
					</div>
				</div>		
			</div>
		</div>
	</section>

	<section id="op6">
		<div class="container py-5">
			<div class="row py-5">
				<div class="col-md-6 mb-4">
					<h1>Proud Trading Partner of Wolverhampton Wanderers</h1>
					<p class="pt-5 pb-4">We're delighted to partner with Wolverhampton Wanderers, a Premier League Club whose aspiration and success mirrors our own</p>
				</div>

				<div class="col-md-6">
					
					<img src="{{ asset('imgs/Wolves_Featured_Image.svg') }}" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</section>

	<section id="op7">
		<div class="container px-5">
			<div class="py-5 px-5">
				<img src="https://prismic-io.s3.amazonaws.com/trade-nation-marketing-cms/a2b429e7-137c-442a-bb66-398b69784cda_MARCH_APRIL_AMBASSADORS_APRIL_RECTANGLE+copy.jpg" alt="" class="img-fluid">
			</div>

			<div class="text-center pt-5">
				<h3 class="pt-2"><b>Meet the Trade Nation Brand Ambassadors</b></h3>
				<h4 class="pt-4 px-5">
					We’re dedicated to changing trading for the better and we’ve got a growing team of ambassadors helping to spread the message.
				</h4>

				<a href="{{ route('our_ambassadors') }}" class="btn rounded-pill px-4 text-light my-5" style="background-color: #ff5d2e;">Read More</a>
			</div>
		</div>
	</section>

	<section id="op8">
		<div class="container-fluid py-5">
			<div class="container" style="background-color: #F5F5F5;">
				<div class="ps-lg-5 ps-md-1">
					<h6 class="py-5">TRADE NATION BENEFITS</h6>
	
					<div class="row">
						<div class="col-lg-7 col-md-11 mb-4 px-lg-5 px-md-1">
							<div class="rm_p d-flex px-5">
								<aside class="pe-4">
									<span class="list-block__icon">
										<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M21.8 5L21 1H3V35H7V21H18.2L19 25H33V5H21.8Z" fill="#2DE0E8"></path>
										</svg>
									</span>
								</aside>
		
								<div>
									<h3 class="">Proud to be regulated</h3>
									<p class="pt-1">
										We take your protection seriously. No matter where you are trading in the world you can be sure that we are regulated by the highest global authorities.
									</p>
								</div>
							</div>

							<div class="rm_p d-flex px-5 pt-4">
								<aside class="pe-4">
									<span class="list-block__icon">
										<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M21.8 5L21 1H3V35H7V21H18.2L19 25H33V5H21.8Z" fill="#2DE0E8"></path>
										</svg>
									</span>
								</aside>
		
								<div>
									<h3 class="">Our customer charter</h3>
									<p class="pt-1">
										Trading is a two-way relationship. We’ve introduced an industry-first customer charter. This means clear rules and expectations for a better trading experience.
									</p>
								</div>
							</div>

							<div class="rm_p d-flex px-5 pt-4">
								<aside class="pe-4">
									<span class="list-block__icon">
										<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M21.8 5L21 1H3V35H7V21H18.2L19 25H33V5H21.8Z" fill="#2DE0E8"></path>
										</svg>
									</span>
								</aside>
		
								<div>
									<h3 class="">Always a fair deal</h3>
									<p class="pt-1">
										We’re all about fairness and doing the right thing. This means being completely transparent about our charges. Not just the obvious ones, but others that are usually hidden away. We give you total clarity on the cost to trade.
									</p>
								</div>
							</div>
						</div>

						<div class="col-lg-5 col-md-1 d-none d-lg-block" style="position: relative; bottom: 170px;">
							<img src="https://images.prismic.io/trade-nation-marketing-cms/e36bfa80-a2b8-4da5-bfa7-d5be0c2b4eb7_Money+in+Trusted+Banks+0.2-733x995px.jpg?auto=compress,format&rect=0,0,733,995&w=733&h=995" alt="" class="img-fluid">
						</div>

						<div class="col-lg-5 col-md-1 d-lg-none">
							<img src="https://images.prismic.io/trade-nation-marketing-cms/e36bfa80-a2b8-4da5-bfa7-d5be0c2b4eb7_Money+in+Trusted+Banks+0.2-733x995px.jpg?auto=compress,format&rect=0,0,733,995&w=733&h=995" alt="" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="op9" class="pb-5">
		<div class="text-center py-5">
			<h1>Join our Nation</h1>
			<a class="btn rounded-pill px-4 text-light my-5" style="background-color: #ff5d2e;" href="{{ route('register') }}">Start trading</a>
		</div>
	</section>
@endsection