@extends('layouts.app')
@section('content')
    <section id="partners__banner">
        <div class="container py-5">
            <h1>Becoming</h1>
            <h1>A Partner</h1>
        </div>
    </section>

    <section>
        <div class="py-5 container px-5 rm_p2">
            <p><b>IF YOU AGREE THAT TRADING SHOULD BE FAIR AND ACCESSIBLE</b></p>
            <h1 class="pt-2" style="font-size: 50px;"><b>Partner with us</b></h1>
            <p class="pt-4 pb-5">
                We’re on a mission to change the trading industry for the better and give all traders a fair and transparent experience. If your organisation shares our values, we’d love for you to become a partner.
            </p>
            <div class="text-center">
                <a href="{{ route('register') }}" class="btn btnsm rounded-pill text-light px-4" style="background-color: #EE4E08;">Sign up now</a>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><b>A partner you can depend on</b></h1>
                    <p class="pt-5">
                        Trade Nation is the most reliable and customer-friendly trading services provider to partner with for forex, spread trading and CFDs.
                    </p>
                    <p>
                        Your customers will have access to hundreds of the most popular markets, a choice of platforms and a bespoke account home page.
                    </p>
                    <p>
                        Our impeccable customer support team and low fixed spreads (on both the Trade Nation platform and the ever-present MetaTrader 4 terminal) continue to attract new business and cement customer loyalty in the Trade Nation brand.
                    </p>
                </div>

                <div class="col-md-6">
                    <img src="https://images.prismic.io/trade-nation-marketing-cms/9b6cfd92-90ba-4c59-8a39-0065ba8f0a3a_Head+of+Customer+Success.jpg?auto=compress,format&rect=0,1,625,557&w=960&h=856" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 container">
        <div class="py-5 ">
            <img src="{{ asset('imgs/line.png') }}" alt="" class="img-fluid">
        </div>

        <h1><b>A payment model that suits you</b></h1>
        <p>
            We are committed to putting our customers and our partners first.
            Choose one of our standard plans and apply to become a partner today. Or contact our affiliate team so we can create a tailored plan for you.
        </p>
        <p>
            <span>
                <svg width='12' height='12' fill='none' xmlns='http://www.w3.org/2000/svg'><path fill='#F5F5F5' d='M0 0h12v12H0z'/><path d='M0 0h12v12L6 6 0 0Z' fill='#FF5D2E'/></svg>
            </span>
            <b class="ps-4">Revenue share plan: </b>
            Earn a percentage of the revenue your customers generate
        </p>
        <p>
            <span>
                <svg width='12' height='12' fill='none' xmlns='http://www.w3.org/2000/svg'><path fill='#F5F5F5' d='M0 0h12v12H0z'/><path d='M0 0h12v12L6 6 0 0Z' fill='#FF5D2E'/></svg>
            </span>
            <b class="ps-4">Hybrid plan: </b>
            Mix and match both plans to earn from revenue share and CPA
        </p>

        <div class="text-center pt-4">
            <a href="{{ route('register') }}" class="btn btnsm rounded-pill text-light px-4" style="background-color: #EE4E08;">Join us</a>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <img src="https://images.prismic.io/trade-nation-marketing-cms/dea25805-152e-46f9-a740-21fe93c71318_MARCH_APRIL_AMBASSADORS_APRIL_SQUARE+copy.jpg?auto=compress,format&rect=0,0,1907,1700&w=960&h=856" alt="" class="img-fluid">
                </div>

                <div class="col-md-6">
                    <h1>Meet the Trade Nation Brand Ambassadors</h1>
                    <p class="3">
                        We’re dedicated to changing trading for the better and we’re ecstatic to announce that we’ve got a growing team of ambassadors helping to spread the message.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid py-5">
			<div class="container" style="background-color: #F5F5F5;">
				<div class="ps-lg-5 ps-md-1">
					<h6 class="py-5">WHY TRADE NATION?</h6>
	
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
									<h3 class="">Flexible commission plan</h3>
									<p class="pt-1">
                                        We offer range of payment models to suit all of our partners
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
									<h3 class="">Reliably regulated</h3>
									<p class="pt-1">
										Trade Nation is fully regulated in ever country we operate in, so you and your customers can trust our services
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
									<h3 class="">Full marketing support</h3>
									<p class="pt-1">
                                        As a Trade Nation partner, our marketing professionals are always on hand to help you develop unique campaigns, increase conversions and retain your customers
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
                                    <h3 class="">Bespoke customer home page</h3>
                                    <p class="pt-1">
                                        Every customer can access news, blog articles and educational videos specifically tailored to their needs and interests. This helps convert referrals into customers, resulting in revenue for you
                                    </p>
                                </div>
                            </div>
						</div>

						<div class="col-lg-5 col-md-1 d-none d-lg-block" style="position: relative; bottom: 170px;">
							<img src="https://images.prismic.io/trade-nation-marketing-cms/0f0269ed-d2da-47ba-8ee7-cd6c751f2723_listblock-moblie_woman-laptop-night-300.jpg?auto=compress,format&rect=0,0,733,995&w=733&h=995" alt="" class="img-fluid">
						</div>

						<div class="col-lg-5 col-md-1 d-lg-none">
							<img src="https://images.prismic.io/trade-nation-marketing-cms/0f0269ed-d2da-47ba-8ee7-cd6c751f2723_listblock-moblie_woman-laptop-night-300.jpg?auto=compress,format&rect=0,0,733,995&w=733&h=995" alt="" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>

    <section class="pb-5">
        <div class="container text-center px rm_p2">
            <h1>Want to know more about becoming a Trade Nation partner?</h1>
            <p class="pt-4" style="font-size: 30px;">Call us any time Mon-Fri on +44 1254 369752</p>
        </div>

        <div class="text-center py-5">
            <a href="mailto:support@tradenation-uk.com" class="btn btnsm rounded-pill text-light px-4" style="background-color: #EE4E08;">Email us</a>
        </div>
    </section>
@endsection