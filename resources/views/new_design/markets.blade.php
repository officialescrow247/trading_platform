@extends('new_design.app')
@section('content')
    <section class="px-4 rm_p_2">
        <div class="py-5 container-fluid px-5 rm_p_2">
            <h6 style="color: #fc5000;"><b>Markets</b></h6>

            <div class="row pt-4">
                <div class="col-md-6 mb-4">
                    <div>
                        <h1 style="font-size: 90px;" class="my_f"><b>Trade <br> popular <br> markets</b></h1>

                        <p class="pt-3" style="color: #6C7884;">
                            We provide you with the ability to trade on the most popular markets at some of the best low, fixed spreads you can find.
                        </p>
                        <a href="{{ route('register') }}" class="btn px-5 mt-4 trade_now_btn rounded-pill py-3">Trade Now</a>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <img src="https://images.prismic.io/tnfev2/683c9117-5ac4-488e-a316-e234219f9795_BRAND+Markets+HeroImage3+HeroImage+1280x720.png?auto=compress,format" alt="" class="img-fluid" style="border-radius: 30px;">

                    <div class="sc-f3a729c-7 jmYnBa">
                        <svg color="#fc5000" height="150" viewBox="0 0 81 161" style="position: absolute; right: 10%; margin-top: -30px;">
                            <path fill="#fc5000" d="M41.0174 0.785624L80.3818 79.0391L40.7013 160.811L0.280648 84.3565L41.0174 0.785624Z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid px-5 rm_p_2 py-5">
            <div class="row">
                <div class="col-md-6 mb-5 pt-5">
                    <img src="https://images.prismic.io/tnfev2/1f69d540-61b9-4d0f-b3a2-a10525093649_BRAND+Markets+Device2+TeaserImage+1500x1000.png?auto=compress,format" alt="" class="mt-5 img-fluid">
                </div>

                <div class="col-md-6 mb-5">
                    <h3 style="font-size: 40px;" id="indices"><b>Indices</b></h3>
                    <p class="pt-4">
                        Diversify your portfolio with access to the world’s biggest and most influential indices, we’ve everything and more from the FTSE 100 to Dow Jones, Nasdaq 100 and Nikkei 225.
                    </p>
                </div>

                <div class="col-md-6 mb-5">
                    <h3 style="font-size: 40px;" id="forex"><b>Forex</b></h3>
                    <p class="pt-4">
                        Trade some of the market’s tightest spreads on a range of the most popular forex pairs across global currencies.
                    </p>

                    <!-- <a href="{{ route('register') }}">Find out more</a> -->
                </div>

                <div class="col-md-6 mb-5 ">
                    <img src="https://images.prismic.io/tnfev2/5ef7d21a-21e3-4fcc-83a8-801a4251b524_BRAND+Markets+Chart+TeaserImage+1500x1000.png?auto=compress,format" alt="" class="img-fluid">
                </div>

                <div class="col-md-6 mb-5 ">
                    <img src="https://images.prismic.io/tnfev2/edb7bed1-c879-4dad-9d74-76f65443c2d8_BRAND+Markets+Gold+TeaserImage+1500x1000.png?auto=compress,format" alt="" class="img-fluid">
                </div>

                <div class="col-md-6 mb-5">
                    <h3 style="font-size: 40px;" id="commodities"><b>Commodities</b></h3>
                    <p class="pt-4">
                        Trade on the world's most important commodities. Whether it's key energy products like crude oil, industrial metals like copper and aluminium, or gold and silver, the most enduring stores of value and mediums of exchange.
                    </p>

                    <!-- <a href="{{ route('register') }}">Find out more</a> -->
                </div>
            </div>
        </div>
    </section>

    <section style="background-color: #F5F3F2;">
        <div class="container p-5">
            <div class="row">
                <div class="col-md-6">
                    <svg color="#fc5000" height="80" viewBox="0 0 81 161">
                        <path fill="#513799" d="M41.0174 0.785624L80.3818 79.0391L40.7013 160.811L0.280648 84.3565L41.0174 0.785624Z"></path>
                    </svg>

                    <h3 id="all-instruments" class="pt-3 fs-1">
                        <b>All instruments</b>
                    </h3>
                    <p class="pt-5">
                        Get a snapshot of all our trading instruments – from stocks to bonds, forex and commodities  - and decide which one is right for you.
                    </p>
                </div>

                <div class="col-md-6">
                    <svg color="#fc5000" height="80" viewBox="0 0 81 161">
                        <path fill="#4DAD92" d="M41.0174 0.785624L80.3818 79.0391L40.7013 160.811L0.280648 84.3565L41.0174 0.785624Z"></path>
                    </svg>

                    <h3 id="" class="pt-3 fs-1">
                        <b>Market holidays</b>
                    </h3>
                    <p class="pt-5">
                        The markets we trade across are global. As such, they work according to their own country’s national holidays.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection