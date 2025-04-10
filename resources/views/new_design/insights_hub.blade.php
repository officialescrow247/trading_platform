@extends('new_design.app')
@section('content')
    <section class="px-4 rm_p_2">
        <div class="py-5 container-fluid px-5 rm_p_2">
            <h6 style="color: #04e3d8;"><b>Insights hub</b></h6>

            <div class="row pt-4">
                <div class="col-md-6 mb-4">
                    <div>
                        <h1 style="font-size: 90px;" class="my_f"><b>Insights</b></h1>

                        <p class="pt-3" style="color: #6C7884;">
                            We want you to have the best possible opportunity to maximise your trading profits. That’s why, when you open your account with us, you can look forward to a valuable range of insights and expert opinions that can inform the way to trade.
                        </p>
                        <!-- <a href="{{ route('register') }}" class="btn px-5 mt-4 trade_now_btn rounded-pill py-3">Trade Now</a> -->
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <img src="https://images.prismic.io/tnfev2/ca89cb4b-8f46-428f-aaf3-ffb047f4b68b_BRAND+Insights+HeroImage1+HeroImage+1280x720.png?auto=compress,format" alt="" class="img-fluid" style="border-radius: 30px;">

                    <div class="sc-f3a729c-7 jmYnBa">
                        <svg color="#04e3d8" height="150" viewBox="0 0 81 161" style="position: absolute; right: 10%; margin-top: -30px;">
                            <path fill="#04e3d8" d="M41.0174 0.785624L80.3818 79.0391L40.7013 160.811L0.280648 84.3565L41.0174 0.785624Z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <h1 class="text-center pt-5 my_f" style="font-size: 50px;"><b>Maximise your profits</b></h1>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <img src="https://images.prismic.io/tnfev2/MjcwNTNhNzgtMDgwYS00NmU3LWFjY2MtMzllYWFiZDJhMTcy_e962dd67-696a-4319-996a-f52ea22d17ed_leverage.png?auto=compress,format&rect=0,0,56,56&w=56&h=56" alt="" class="img-fluid">
                    <h4 class="pt-4"><b>Real Time News</b></h4>
                    <p class="pt-2">
                        Curate your own real-time newsfeed with breaking market updates
                    </p>
                </div>

                <div class="col-md-3 mb-4">
                    <img src="https://images.prismic.io/tnfev2/MzdkNTNjZmMtOGI4Yi00MzdiLTkwODEtNTZmYmVjYjEwY2I0_acaef93c-6433-4896-b9c4-595ba3abaa85_group381.png?auto=compress,format&rect=0,0,57,58&w=57&h=58" alt="" class="img-fluid">
                    <h4 class="pt-4"><b>Signal Centre</b></h4>
                    <p class="pt-2">
                        Access a wealth of independent insights from expert market analysts
                    </p>
                </div>

                <div class="col-md-3 mb-4">
                    <img src="https://images.prismic.io/tnfev2/NTU1MjE1OGQtOTQ0Zi00MWYwLTlkZmYtMzY0ZWJjMDgyODc3_a62462c5-1b39-48c0-8b1c-748c5163ba25_accessmarkets.png?auto=compress,format&rect=0,0,56,57&w=56&h=57" alt="" class="img-fluid">
                    <h4 class="pt-4"><b>Daily Report</b></h4>
                    <p class="pt-2">
                        Updated twice a day to reflect what traders need to know about the market
                    </p>
                </div>

                <div class="col-md-3 mb-4">
                    <img src="https://images.prismic.io/tnfev2/ZGMwNmEzNjEtZDEwNi00NGUxLWJkODEtMzU3OTRjM2E1Y2M3_f9d3df92-b663-42a2-ad3f-81994bbeffbe_component2.png?auto=compress,format&rect=0,0,56,56&w=56&h=56" alt="" class="img-fluid">
                    <h4 class="pt-4"><b>Top Trades</b></h4>
                    <p class="pt-2">
                        Get an update on our most heavily-traded shares, twice a day, every day
                    </p>
                </div>
            </div>

            <div class="text-center">
                <button class="btn rounded-pill maxi_max"></button>
            </div>

            <div class="text-center pt-5 mt-5">
                <a href="{{ route('register') }}" class="text-light btn rounded-pill py-2 px-4 mt-5" style="background-color: #EB4B08;">Trade Now</a>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <img src="https://images.prismic.io/tnfev2/eb20581d-c436-41f6-8ec1-88e6f7855646_BRAND+Insights+Device11+TeaserImage+1500x1000.png?auto=compress,format" alt="" class="img-fluid">
                </div>

                <div class="col-md-6">
                    <h3 class="pt-3 pb-4" style="font-size: 40px;"><b>Trading tools</b></h3>
                    <p>
                        Our ‘tools of the trade’ offer you a comprehensive package of intuitive and easy to use applications that help you plan a successful trading strategy. Handily located on our proprietary platform, they’re at your disposal as and when you need them. Use them to help you decide when to open a trade, take a profit, or limit your loss if things don't work out as planned. Ready?
                    </p>
                    <a href="{{ route('register') }}">Trade Now</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <img src="https://images.prismic.io/tnfev2/ZTY0MTRjMzctNmUyNS00YjMwLTlhYWQtMmVlZTI2ODk5MzA0_9dc829c8-7fd1-4bd5-8d09-5cc0540d5567_icon231-64x64.png?auto=compress,format&rect=0,0,64,64&w=64&h=64" alt="" class="img-fluid mb-4">
                    <h4 class="pt-3 pb-1"><b>Charts</b></h4>
                    <p>
                        Plot your optimal entry and exit points in your trading strategy
                    </p>
                </div>

                <div class="col-md-4 mb-4">
                    <img src="https://images.prismic.io/tnfev2/M2EwZjQ5ZDEtN2U3OS00YWVhLThiN2UtZDZiYjU3YjZkYzAz_28c94ebb-4631-42cb-b38a-20dd86a848bb_icon232-64x64.png?auto=compress,format&rect=0,0,64,64&w=64&h=64" alt="" class="img-fluid mb-4">
                    <h4 class="pt-3 pb-1"><b>Technical analysis</b></h4>
                    <p>
                        Access to a wide range of indicators and studies to help you identify trading opportunities
                    </p>
                </div>

                <div class="col-md-4 mb-4">
                    <img src="https://images.prismic.io/tnfev2/Nzg3MmQ1YTEtNzBkNy00OTQ4LThlY2UtMzQxOWI5MWZiNDQ1_243bd5be-86b8-4d9d-aca9-9e3cf7272947_icon233-64x64.png?auto=compress,format&rect=0,0,64,64&w=64&h=64" alt="" class="img-fluid mb-4">
                    <h4 id="trading-tools" class="pt-3 pb-1"><b>Drawing tools</b></h4>
                    <p>
                        Identify support, resistance, trend channels and the rest to help you plan your trade
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h3 id="part-time-to-pro" class="pt-3 pb-4" style="font-size: 40px;"><b>Part-time to pro</b></h3>
                    <p>
                        Whether you’re a part-timer or pro-trader - our carefully curated articles provide an impressive array of insights and depth of understanding of the financial markets, covering hot topics of interest. If you want to become a savvy trader and take on the markets, arm yourself with powerful trading knowledge.
                    </p>
                </div>

                <div class="col-md-6 mb-4">
                    <img src="https://images.prismic.io/tnfev2/6d2df750-7b82-46a6-a3e4-481178a17270_+BRAND+Insights+Part+time+Pro+TeaserImage+1500x1000.png?auto=compress,format" alt="" class="img-fluid">
                </div>

                <!-- <div class="col-md-6 mt-5 mb-4">
                    <img src="https://images.prismic.io/tnfev2/9a7061e1-d39b-4309-825d-74e5d40be8a3_BRAND+Insights+demo+Device4+TeaserImage+1500x1000_.png?auto=compress,format" alt="" class="img-fluid">
                </div>

                <div class="col-md-6 mt-5 mb-4">
                    <h3 id="demo" class="pt-3 pb-4" style="font-size: 40px;"><b>Demo</b></h3>
                    <p>
                        We get it. You might want to try before you buy. So why not take our proprietary platform for a spin and see what we’re all about. You can experience first-hand our intuitive handling and navigation, make a dummy trade or two and see how easy it is to use our analysis and drawing tools.  We know you’ll love it. Only the real thing is better.
                    </p>
                    <a href="{{ route('register') }}">Try us now</a>
                </div> -->
            </div>
        </div>
    </section>
@endsection