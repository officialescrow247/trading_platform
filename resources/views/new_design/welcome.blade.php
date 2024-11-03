@extends('new_design.app')
@section('content')
	<!-- <section id="welcome_banner">
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
	</section> -->
    <section class="eQbSFB">
        <div class="container-fluid rm_p_2 px-5 pb-5 a_Trading">
            <div class="row pb-5">
                <div class="col-md-6 pt-5">
                    <h1 class="" style="font-size: 100px;"><b>Made to <br> trade</b></h1>
                    <p class="pt-2" style="font-size: 50;">
                        <b>Easy access to the spread betting markets you love, with low fixed trading costs that will make you question why you would spread bet with anyone else!</b>
                    </p>

                    <p>
                        <img src="https://tradenation.com/diamond.png" alt="" class="pe-2">  <b style="border-bottom: 1px solid #212529;">Low cost spread betting with no hidden fees</b>
                    </p>

                    <p>
                        <img src="https://tradenation.com/diamond.png" alt="" class="pe-2">  <b style="border-bottom: 1px solid #212529;">Tax free profits*</b>
                    </p>

                    <p>
                        <img src="https://tradenation.com/diamond.png" alt="" class="pe-2">  <b style="border-bottom: 1px solid #212529;">FCA Regulated since 2014 and covered by the FSCS</b>
                    </p>

                    <p>
                        <img src="https://tradenation.com/diamond.png" alt="" class="pe-2">  <b style="border-bottom: 1px solid #212529;">Segregated customer money accounts at Barclays Bank, London</b>
                    </p>

                    <p>
                        <img src="https://tradenation.com/diamond.png" alt="" class="pe-2">  <b style="border-bottom: 1px solid #212529;">Professional accounts available</b>
                    </p>

                    <div class="pt-3">
                        <a href="{{ route('register') }}" class="btn_ rounded-pill px-4 py-2 btn text-light me-5 mt-3" style="background-color: #EB4B08;"><b>Trade Now</b></a>
                    </div>
                </div>

                <div class="col-md-6 pt-5">
                    <div class="tradingview-widget-container">
                        <div id="tradingview_15cdd"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">
                            new TradingView.MediumWidget(
                            {
                                "symbols": [
                                    [
                                    "Apple",
                                    "AAPL|1D"
                                    ],
                                    [
                                    "Google",
                                    "GOOGL|1D"
                                    ],
                                    [
                                    "Microsoft",
                                    "MSFT|1D"
                                    ],
                                    [
                                    "Bitcoin",
                                    "COINBASE:BTCUSD|1D"
                                    ]
                                ],
                                "chartOnly": false,
                                "width": '100%',
                                "height": 500,
                                "locale": "en",
                                "colorTheme": "light",
                                "autosize": false,
                                "showVolume": false,
                                "hideDateRanges": false,
                                "hideMarketStatus": false,
                                "hideSymbolLogo": false,
                                "scalePosition": "right",
                                "scaleMode": "Normal",
                                "fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
                                "fontSize": "10",
                                "noTimeScale": false,
                                "valuesTracking": "1",
                                "changeMode": "price-and-percent",
                                "chartType": "line",
                                "container_id": "tradingview_15cdd"
                                }
                            );
                        </script>
                    </div>
                </div>
            </div>     
        </div>
    </section>

    <section style="margin-top: 100px;">
        <div class="container-fluid rm_p_2 px-5">
            <div class="row">
                <div class="col-md-6">
                    <h6 style="color: #EE4D08;">Aston Villa</h6>
    
                    <h1 style="font-size: 60px;"><b>Proud partners of Aston Villa</b></h1>
    
                    <p>
                        We are kicking off the 23/24 Premier League season as Aston Villa Football Club's new men's and women's sleeve partner. <br>
    
                        This is an exciting partnership deal and we look forward to sharing the journey with you!
                    </p>
                </div>
    
                <div class="col-md-6">
                    <img src="https://images.prismic.io/tnfev2/a3885486-c135-4b8d-a0f8-b129166da5b9_Untitled+design+%284%29.png?auto=compress,format" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

	<section class="tk mt-5">
		<div class="container py-5">
			<h1 class="text-center" style="font-size: 50px; font-weight: bold;"><b>Start Spread Betting today</b></h1>
            
            <div class="pt-5">
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <img src="https://images.prismic.io/tnfev2/ZGMwNmEzNjEtZDEwNi00NGUxLWJkODEtMzU3OTRjM2E1Y2M3_f9d3df92-b663-42a2-ad3f-81994bbeffbe_component2.png?auto=compress,format&rect=0,0,56,56&w=56&h=56" alt="" srcset="">
                        <h4 class="pt-3 pb-4"><b>Access low spreads</b></h4>
                        <p>
                            Our fixed spreads won’t suddenly change in reaction to the market. They start low and stay low, so you always know where you stand.
                        </p>
                    </div>

                    <div class="col-md-3 mb-4">
                        <img src="https://images.prismic.io/tnfev2/NTU1MjE1OGQtOTQ0Zi00MWYwLTlkZmYtMzY0ZWJjMDgyODc3_a62462c5-1b39-48c0-8b1c-748c5163ba25_accessmarkets.png?auto=compress,format&rect=0,0,56,57&w=56&h=57" alt="" srcset="">
                        <h4 class="pt-3 pb-4"><b>Explore 1000+ markets</b></h4>
                        <p>
                            Access multiple markets around the globe from one single account to make sure you never miss a profitable trading opportunity.
                        </p>
                    </div>

                    <div class="col-md-3 mb-4">
                        <img src="https://images.prismic.io/tnfev2/MzdkNTNjZmMtOGI4Yi00MzdiLTkwODEtNTZmYmVjYjEwY2I0_acaef93c-6433-4896-b9c4-595ba3abaa85_group381.png?auto=compress,format&rect=0,0,57,58&w=57&h=58" alt="" srcset="">
                        <h4 class="pt-3 pb-4"><b>Choose your platform</b></h4>
                        <p>
                            Our powerful intuitive platform gives you the edge, helping you stay on top of your trading game. Or you can opt for MT4, whichever best suits the way you trade.
                        </p>
                    </div>

                    <div class="col-md-3 mb-4">
                        <img src="https://images.prismic.io/tnfev2/MjcwNTNhNzgtMDgwYS00NmU3LWFjY2MtMzllYWFiZDJhMTcy_e962dd67-696a-4319-996a-f52ea22d17ed_leverage.png?auto=compress,format&rect=0,0,56,56&w=56&h=56" alt="" srcset="">
                        <h4 class="pt-3 pb-4"><b>Leverage your trade</b></h4>
                        <p>
                            With just a fractional deposit, you can make a much bigger trade. That’s because we loan you the amount you need to maximise profit potential. Naturally, this can mean bigger losses too. 
                        </p>
                    </div>
                </div>

                <div class="text-center">
                    <a href="{{ route('register') }}" class="btn py-3 px-5 rounded-pill" style="border: 2px solid #0A1E32;"><b>Trade Now</b></a>
                </div>
            </div>
		</div>

	</section>

    <section>
        <div class="container-fluid px-5 py-5 rm_p">
            <div class="py-5" style="position: relative;">
                <div class="d-flex">
                    <div class="ps-2 col-md-6 ff" style="background-color: #0A1E32; color: white; border-radius: 40px 0px 0px 40px; position: relative; left: 1%; background-image: '{{ asset('imgs/tr_v.svg') }}'">
                        <div class="p-5" >
                            <h2 class="pt-3"><b>Where savvy traders go</b></h2>
                            <p class="py-3" style="color: #D7D7D7;">
                                <b>Trade your preferred markets on our fast and intuitive proprietary platform or MT4</b>
                            </p>
    
                            <!-- <p>
                                <svg style="width: 12px;" focusable="false" aria-hidden="true" viewBox="0 0 12 18"><path fill="#F0690B" d="M5.89743 0.000244141L12.0266 8.71351L6.3114 18.0002L0.0289911 9.49167L5.89743 0.000244141Z"></path></svg>
                                <span class="ps-2">No minimum deposit</span>
                            </p> -->
    
                            <p class="">
                                <svg style="width: 12px;" focusable="false" aria-hidden="true" viewBox="0 0 12 18"><path fill="#F0690B" d="M5.89743 0.000244141L12.0266 8.71351L6.3114 18.0002L0.0289911 9.49167L5.89743 0.000244141Z"></path></svg>
                                <span class="ps-2">Free withdrawals and deposits</span>
                            </p>
    
                            <p class="">
                                <svg style="width: 12px;" focusable="false" aria-hidden="true" viewBox="0 0 12 18"><path fill="#F0690B" d="M5.89743 0.000244141L12.0266 8.71351L6.3114 18.0002L0.0289911 9.49167L5.89743 0.000244141Z"></path></svg>
                                <span class="ps-2">Negative balance protection*</span>
                            </p>
                            <p class="pt-4" style="color: #767676;">
                                * If your account slips into arrears, we’ll automatically correct it to zero - only for non-professional traders.
                            </p>
                        </div>
                    </div>
    
                    <div class="d-none d-lg-block col-md-8" style="position: relative; right: 20%; z-index: -1;">
                        <img src="https://images.prismic.io/tnfev2/MjE4MzU2ZTMtMmQ4MS00NWNhLThlMWUtOGFjYTM3YmQ5NTQy_3b4bcf1f-4fc8-4f40-aec7-4a3236be14ff_b001specialcomponentimagehomepagesavvytrader1280x720.png" alt="" class="img-fluid" style="border-radius: 0px 40px 40px 0px;">
                    </div>
                </div>
                <img src="https://images.prismic.io/tnfev2/MjE4MzU2ZTMtMmQ4MS00NWNhLThlMWUtOGFjYTM3YmQ5NTQy_3b4bcf1f-4fc8-4f40-aec7-4a3236be14ff_b001specialcomponentimagehomepagesavvytrader1280x720.png" alt="" class="d-lg-none img-fluid" style="border-radius: 0px 0px 40px 40px;">

                <svg style="position: absolute; top: -40px; right: 150px;" width="81" height="161" viewBox="0 0 81 161" fill="none" xmlns="http://www.w3.org/2000/svg" class="sc-e2a5340d-9 cLZAuh"><path d="M41.0174 0.785624L80.3818 79.0391L40.7013 160.811L0.280648 84.3565L41.0174 0.785624Z" fill="#FC5000"></path></svg>
            </div>
        </div>
    </section>

    <section class="px-4 pt-5 ff2" style="background-color: #F7F5F5;">
        <div class="container-fluid rm_p_2 px-5 py-5">
            <h1 class="pb-3" style="font-size: 55px;"><b>Trading, how it should be</b></h1>

            <div class="row pt-5">
                <div class="col-md-4 mb-4">
                    <img src="https://images.prismic.io/tnfev2/56f0f054-de5e-4b7c-83c4-b47e45d5ba28_BRAND++HomePage+CustomerSupport+TeaserImage+1500x1000.png?auto=compress,format" alt="" class="img-fluid">
                    <h5 style="font-weight: bold;" class="pt-4"><b>Your team. Ready to support.</b></h5>
                    <p class="pb-4 pt-3">
                        Our Customer Success Team helps you run things smoothly. We’re available 24 hours, Monday to Friday by chat, email or phone.    
                    </p>
                    <a href="mailto:support@tradenationltd.com" class="btn rund_h rounded-pill py-2 px-4" style="border: 2px solid #0A1E32; color: #0A1E32;"><b>Contact us</b></a>
                </div>

                <div class="col-md-4 mb-4">
                    <img src="https://images.prismic.io/tnfev2/320281a1-c0ae-4a93-b591-e91cf24946df_BRAND++HomePage+WhyTradeWithUs+TeaserImage+++1500x1000.png?auto=compress,format" alt="" class="img-fluid">
                    <h5 style="font-weight: bold;" class="pt-4"><b>Others hide costs. We reduce them.</b></h5>
                    <p class="pb-4 pt-3">
                        We offer some of the tightest spreads around. Commission free. Fixed and transparent.
                    </p>
                    {{-- <a href="{{ route('why_trade_with_us') }}" class="btn rund_h rounded-pill py-2 px-4" style="border: 2px solid #0A1E32; color: #0A1E32;"><b>Our differene</b></a> --}}
                </div>

                <div class="col-md-4 mb-4">
                    <img src="https://images.prismic.io/tnfev2/a012863d-317f-4298-807b-95e526e9b705_BRAND++HomePage+TradingTools+TeaserImage+1500x1000.png?auto=compress,format" alt="" class="img-fluid">
                    <h5 style="font-weight: bold;" class="pt-4"><b>Trading tools at your fingertips.</b></h5>
                    <p class="pb-4 pt-3">
                        We offer some of the tightest spreads around. Commission free. Fixed and transparent.
                    </p>
                    <a href="{{ route('trading_tools') }}" class="btn rund_h rounded-pill py-2 px-4" style="border: 2px solid #0A1E32; color: #0A1E32;"><b>Explore tools</b></a>
                </div>
            </div>

            <!-- <div class="pt-5">
                <a href="https://www.trustpilot.com/review/tradenation.com"><b>Trustpilot</b></a>
            </div> -->
        </div>
    </section>

    <section style="background-color: #FFFFFF;">
        <div class="container-fluid px-5 py-5 rm_p_2 ff3">
            <div class="row pt-5">
                <div class="col-md-4">
                    <h3 style="color: #0A1E32; font-size: 50px;"><b>What do our <br> traders say?</b></h3>
                    <p class="pt-3" style="color: #6D7985;">Don’t just take our word about how we put traders at the heart of everything we do. Here’s what some of our traders have to say:</p>
                </div>
        
                <div class="col-md-8 rm_p" style="padding-left: 100px;">
                    <div class="rm_p_test" style="margin-top: 62px; margin-right: 88px; width: 731px; height: 504px; border-radius: 24px; background-image: url(https://tradenation.com/testimonials.png); background-position: center center; background-size: cover; position: relative; display: flex; -webkit-box-pack: center; justify-content: center; -webkit-box-align: center; align-items: center; z-index: 1; right: 100px;">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="rm_p_test2 rm_p_te_ text-center mb-2" style="border-radius: 50%; padding-top: 30px; border: 10px solid #424242; width: 400px; height: 400px; overflow: hidden; background-origin: border-box; background-color: rgb(255, 255, 255);">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <svg width="21" height="41" viewBox="0 0 21 41" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.7076 0.194025L20.4209 20.003L10.6127 40.7126L0.638354 21.3594L10.7076 0.194025Z" fill="#3EAD92"></path></svg>
                                        
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-lg-8">
                                                <p class="text-muted">
                                                    <i class="fas fa-quote-left pe-2"></i>
                                                    I have been using Trade Nation since it started. I like them because of the tight spreads, easy interface and excellent customer service.
                                                </p>
                                                <p class="pt-3" style="color: #0F2236;">Anna Choi</p>
                                                <p style="color: #D3D6DA;">Testimonial</p>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="carousel-item">
                                        <svg width="21" height="41" viewBox="0 0 21 41" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.7076 0.194025L20.4209 20.003L10.6127 40.7126L0.638354 21.3594L10.7076 0.194025Z" fill="#3EAD92"></path></svg>
                                        
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-lg-8">
                                                <p class="text-muted">
                                                    <i class="fas fa-quote-left pe-2"></i>
                                                    Fast withdrawal. And great spread. Best broker available for indice trading
                                                </p>
                                                <p class="pt-3" style="color: #0F2236;">Victor</p>
                                                <p style="color: #D3D6DA;">Trustpilot</p>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="carousel-item">
                                        <svg width="21" height="41" viewBox="0 0 21 41" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.7076 0.194025L20.4209 20.003L10.6127 40.7126L0.638354 21.3594L10.7076 0.194025Z" fill="#3EAD92"></path></svg>
                                        
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-lg-8">
                                                <p class="text-muted">
                                                    <i class="fas fa-quote-left pe-2"></i>
                                                    The absolute commitment of the team is obvious. I spoke mostly to Dudley and he always was very helpful and efficient, friendly and supportive. It's definitely a great and very professional approach. Thank you!
                                                </p>
                                                <p class="pt-3" style="color: #0F2236;">Elana Jones</p>
                                                <p style="color: #D3D6DA;">Trustpilot</p>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="carousel-item">
                                        <svg width="21" height="41" viewBox="0 0 21 41" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.7076 0.194025L20.4209 20.003L10.6127 40.7126L0.638354 21.3594L10.7076 0.194025Z" fill="#3EAD92"></path></svg>
                                        
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-lg-8">
                                                <p class="text-muted">
                                                    <i class="fas fa-quote-left pe-2"></i>
                                                    Great customer support, so fast in helping and solving any issue may appear. Love the platform too. Thanks guys, you're doing great!
                                                </p>
                                                <p class="pt-3" style="color: #0F2236;">Nicolae Vintu</p>
                                                <p style="color: #D3D6DA;">Trustpilot</p>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="carousel-item">
                                        <svg width="21" height="41" viewBox="0 0 21 41" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.7076 0.194025L20.4209 20.003L10.6127 40.7126L0.638354 21.3594L10.7076 0.194025Z" fill="#3EAD92"></path></svg>
                                        
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-lg-8">
                                                <p class="text-muted">
                                                    <i class="fas fa-quote-left pe-2"></i>
                                                    Was having a challenge with an account setup. Joe quickly advised on what to do and hence resolved the issue.
                                                </p>
                                                <p class="pt-3" style="color: #0F2236;">Noah</p>
                                                <p style="color: #D3D6DA;">Trustpilot</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            </div>
    
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    
                    <div class="d-none d-lg-block" style="background-color: #FDD55A; width: 731px; height: 504px; border-radius: 24px; position: absolute;  margin-top: -600px;">

                    </div>
                </div>
            </div>

            <svg style="position: relative; margin-top: -300px; right: 140px;" width="131" height="261" viewBox="0 0 131 261" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M66.2784 0.27664L130.246 127.439L65.7649 260.317L0.0812974 136.079L66.2784 0.27664Z" fill="#C2E5FC"></path></svg>
        </div>
    </section>

    <section style="background-color: #513799;">
        <div class="container py-5 mt-5" id="stayInfomerd">
            <div class="text-center d-flex justify-content-center" style="align-items: center;">
                <h1 class="haq me-4 text-light" style="font-size: 47px;"><b>Have a question?</b></h1>
                <a href="{{ route('faqs') }}" class="px-5 btn btn-light rounded-pill py-2 visit_help"><b>Visit our Help Centre</b></a>
            </div>
            <svg class="d-none d-lg-block" style="position: relative; margin-top: -180px; right: -90%;" width="81" height="161" viewBox="0 0 81 161" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M41.0193 0.785624L80.3837 79.0391L40.7033 160.811L0.282601 84.3565L41.0193 0.785624Z" fill="#3EAD92"></path></svg>
        </div>
    </section>

    <section>
        <div class="container-fluid p-5 rm_p_2">
            <div class="row pb-4">
                <div class="col-md-6">
                    <h1><b>Stay informed</b></h1>
                </div>

                <div class="col-md-6 text-right d-flex justify-content-end">
                    <div class=" d-none d-lg-block">
                        <button class="btn aa"><i class="fa fa-arrow-left"></i></button>
                        <button class="btn bb"><i class="fa fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="text-right d-lg-none">
                    <div>
                        <button class="btn aa"><i class="fa fa-arrow-left"></i></button>
                        <button class="btn bb"><i class="fa fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>

            <div class="variabled">
                <div class="px-4" style="width: 350px;">
                    <div style="padding-top: 50%; border-radius: 20px; padding-left: 10px; height: 200px; background-color: yellow; background-image: url('https://images.prismic.io/tnfev2/5ef7d21a-21e3-4fcc-83a8-801a4251b524_BRAND+Markets+Chart+TeaserImage+1500x1000.png?auto=compress,format'); background-repeat: repeat; background-size: cover;">
                        <span class="mt-5 rounded-pill me-3 text-light p-1 px-3" style="background-color: #4DAD92;">Part-time to Pro</span>
                    </div>
                    <div class="px-2">
                        <p class="pt-3">6 MIN READ <br> <b>What time does the Forex market open</b></p>
                        
                        <p class="pt-2">
                            Provide you the trading hours of the major stock exchanges and other global markets.
                        </p>
                        <a href="{{ route('articles_what_time_does_forex_market_open') }}" class="text-dark"><b>Continue reading -></b></a>
                    </div>
                </div>

                <div class="px-4" style="width: 350px;">
                    <div style="padding-top: 50%; border-radius: 20px; padding-left: 10px; height: 200px; background-color: yellow; background-image: url('https://images.prismic.io/tnfev2/94f719f1-4e96-4572-b04d-48abc1d02cda_Homepage+ArticleImage+MarketOpenTimes+TeaserImage++1500x1000.png.png?auto=compress,format'); background-repeat: repeat; background-size: cover;">
                        <span class="mt-5 rounded-pill me-3 text-light p-1 px-3" style="background-color: #4DAD92;">Part-time to Pro</span>
                    </div>
                    <div class="px-2">
                        <p class="pt-3">6 MIN READ <br> <b>What are the market open times</b></p>
                        
                        <p class="pt-2">
                            Unlike the forex market, stock markets have specific daily trading hours.
                        </p>
                        <a href="{{ route('articles_market_open_times') }}" class="text-dark"><b>Continue reading -></b></a>
                    </div>
                </div>

                <div class="px-4" style="width: 350px;">
                    <div style="padding-top: 50%; border-radius: 20px; padding-left: 10px; height: 200px; background-color: yellow; background-image: url('https://images.prismic.io/tnfev2/3230c8cf-0ef5-40cd-a06b-3054752912fa_BRAND+TradingTools+Device5+TeaserImage+1500x1000.png?auto=compress,format'); background-repeat: repeat; background-size: cover;">
                        <span class="mt-5 rounded-pill me-3 text-light p-1 px-3" style="background-color: #4DAD92;">Part-time to Pro</span>
                    </div>
                    <div class="px-2">
                        <p class="pt-3">3 MIN READ <br> <b>MetaTrader 4 trading software</b></p>
                        
                        <p class="pt-2">
                            Give you a better idea of what MetaTrader 4 is.
                        </p>
                        <a href="{{ route('our_platforms') }}" class="text-dark"><b>Continue reading -></b></a>
                    </div>
                </div>

                <div class="px-4" style="width: 350px;">
                    <div style="padding-top: 50%; border-radius: 20px; padding-left: 10px; height: 200px; background-color: yellow; background-image: url('https://images.prismic.io/tnfev2/ce04ebd0-f043-4a59-bac5-a9c279e8fa18_Homepage+ArticleImage+DayTrading+TeaserImage++1500x1000.png?auto=compress,format'); background-repeat: repeat; background-size: cover;">
                        <span class="mt-5 rounded-pill me-3 text-light p-1 px-3" style="background-color: #4DAD92;">Part-time to Pro</span>
                    </div>
                    <div class="px-2">
                        <p class="pt-3">7 MIN READ <br> <b>Day trading</b></p>
                        
                        <p class="pt-2">
                            Most enthusiasts have a misconception about day trading and what it involves.
                        </p>
                        <a href="{{ route('articles_day_trading') }}" class="text-dark"><b>Continue reading -></b></a>
                    </div>
                </div>

                <div class="px-4" style="width: 350px;">
                    <div style="padding-top: 50%; border-radius: 20px; padding-left: 10px; height: 200px; background-color: yellow; background-image: url('https://images.prismic.io/tnfev2/eb20581d-c436-41f6-8ec1-88e6f7855646_BRAND+Insights+Device11+TeaserImage+1500x1000.png?auto=compress,format'); background-repeat: repeat; background-size: cover;">
                        <span class="mt-5 rounded-pill me-3 text-light p-1 px-3" style="background-color: #4DAD92;">Part-time to Pro</span>
                    </div>
                    <div class="px-2">
                        <p class="pt-3">6 MIN READ <br> <b>Technical analysis</b></p>
                        
                        <p class="pt-2">
                            We cover technical analysis (TA) and its importance when it comes to plan ...
                        </p>
                        <a href="{{ route('articles_technical_analysis') }}" class="text-dark"><b>Continue reading -></b></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection