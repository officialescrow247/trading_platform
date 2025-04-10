@extends('new_design.app')
@section('content')
    <section class="px-4 rm_p_2">
        <div class="container-fluid p-5 rm_p_2">
            <h6 style="color: #04e3d8;"><b>Trading</b></h6>

            <div class="row pt-4">
                <div class="col-md-6 mb-4">
                    <div>
                        <h1 class="my_f" style="font-size: 90px;"><b>Trading <br> tools</b></h1>

                        <p class="pt-3" style="color: #6C7884;">
                            Stay on top with real-time news, market analysis and twice daily reports. Sharpen your trading skills and find your next move.
                        </p>
                        <a href="{{ route('register') }}" class="btn px-5 mt-4 trade_now_btn rounded-pill py-3">Trade Now</a>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <img src="https://images.prismic.io/tnfev2/867d2377-a164-42bd-b2bd-ad1bdc9b240c_BRAND++TradingTools+HeroImage+1280x720.png?auto=compress,format" alt="" class="img-fluid" style="border-radius: 30px;">

                    <div class="sc-f3a729c-7 jmYnBa">
                        <svg color="#04e3d8" height="200" viewBox="0 0 81 161" style="position: absolute; right: 10%; margin-top: -70px;">
                            <path fill="#04e3d8" d="M41.0174 0.785624L80.3818 79.0391L40.7013 160.811L0.280648 84.3565L41.0174 0.785624Z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row py-4">
                <div class="col-md-6 rm_mb my-5">
                    <img src="https://images.prismic.io/tnfev2/6413fe56-af14-429f-a548-dc2f07b57140_BRAND+TradingTools+Device8+TeaserImage+1500x1000.png?auto=compress,format" alt="" class="img-fluid" style="border-radius: 30px;">
                </div>

                <div class="col-md-6 rm_mb my-5">
                    <div class="pt-5 rm_pt">
                        <h1 id="real-time-news" class="pt-5 rm_pt" style="font-size: 35px;"><b>Real-time news</b></h1>

                        <p class="pt-3" style="color: #6C7884;">
                            Keep updated and informed with the very latest breaking news across social media as and when it happens. Exclusively available on our proprietary platform. 
                        </p>
                    </div>
                </div>

                <div class="col-md-6 rm_mb my-5">
                    <div class="pt-5 rm_pt">
                        <h1 id="signal-centre" class="pt-5 rm_pt" style="font-size: 35px;"><b>Signal centre</b></h1>

                        <p class="pt-3" style="color: #6C7884;">
                            Get ideas for trades from this independent service delivering deep market analysis based on professional trading expertise. Specifically integrated with our proprietary platform.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 rm_mb my-5">
                    <img src="https://images.prismic.io/tnfev2/fc8f03f0-f1ae-4a83-b218-39445fd31387_BRAND+TradingTools+Inverse+Hammer+2+-+No+Watermark+Teaser+Image+1500x1000.png?auto=compress,format" alt="" class="img-fluid" style="border-radius: 30px;">
                </div>

                <div class="col-md-6 rm_mb my-5">
                    <img src="https://images.prismic.io/tnfev2/3230c8cf-0ef5-40cd-a06b-3054752912fa_BRAND+TradingTools+Device5+TeaserImage+1500x1000.png?auto=compress,format" alt="" class="img-fluid" style="border-radius: 30px;">
                </div>

                <div class="col-md-6 rm_mb my-5">
                    <div class="pt-5 rm_pt">
                        <h1 id="risk-management-tool" class="pt-5 rm_pt" style="font-size: 35px;"><b>Risk management tool</b></h1>

                        <p class="pt-3" style="color: #6C7884;">
                            Use stop orders to automatically exit a trade when you want to limit potential losses. 
                        </p>
                    </div>
                </div>

                <div class="col-md-6 rm_mb my-5">
                    <div class="pt-5 rm_pt">
                        <h1 class="pt-5 rm_pt" style="font-size: 35px;"><b>Customer success</b></h1>

                        <p class="pt-3" style="color: #6C7884;">
                            On-hand to help 24/5 from Sunday 10.00pm (GMT) until Friday 10.00pm (GMT), our friendly team of Customer Support professionals take care of the admin so you can stay on top of your trading game.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 rm_mb my-5">
                    <img src="https://images.prismic.io/tnfev2/94eba0b1-e246-4b27-8558-8feabd0fab25_BRAND+TradingTools+CustomerSuccess+TeaserImage+1500x1000.png?auto=compress,format" alt="" class="img-fluid" style="border-radius: 30px;">
                </div>
            </div>
        </div>
    </section>
@endsection