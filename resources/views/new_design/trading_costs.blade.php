@extends('new_design.app')
@section('content')
    <section>
        <div class="container-fluid p-5">
            <h6 style="color: #04e3d8;"><b>Trading</b></h6>

            <div class="row pt-4">
                <div class="col-md-6 mb-4">
                    <div>
                        <h1 style="font-size: 90px;" class="my_f"><b>Trading <br> costs</b></h1>

                        <p class="pt-3" style="color: #6C7884;">
                            We work hard to keep trading costs down for you. We offer low, fixed spreads on our proprietary spread betting platform, and complete transparency with our overnight funding charges. This gives you certainty, even when markets are volatile.
                        </p>
                        <a href="{{ route('register') }}" class="btn px-5 mt-4 trade_now_btn rounded-pill py-3">Trade Now</a>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <img src="https://images.prismic.io/tnfev2/fea7bfcd-e825-49c5-9d02-6130efca866b_BRAND+TradingCosts+HeroImage3+1280x720.png?auto=compress,format" alt="" class="img-fluid" style="border-radius: 30px;">

                    <div class="sc-f3a729c-7 jmYnBa">
                        <svg color="#04e3d8" height="200" viewBox="0 0 81 161" style="position: absolute; right: 10%; margin-top: -70px;">
                            <path fill="#513799" d="M41.0174 0.785624L80.3818 79.0391L40.7013 160.811L0.280648 84.3565L41.0174 0.785624Z"></path>
                        </svg>

                        <svg color="#04e3d8" height="150" viewBox="0 0 81 161" style="position: absolute; right: 20%; margin-top: -30px;">
                            <path fill="#FDD55A" d="M41.0174 0.785624L80.3818 79.0391L40.7013 160.811L0.280648 84.3565L41.0174 0.785624Z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background-color: #F5F3F2;">
        <div class="container p-5">
            <div class="row">
                <div class="col-md-6">
                    <svg color="#04e3d8" height="80" viewBox="0 0 81 161">
                        <path fill="#513799" d="M41.0174 0.785624L80.3818 79.0391L40.7013 160.811L0.280648 84.3565L41.0174 0.785624Z"></path>
                    </svg>

                    <h3 id="low-fixed-spreads" class="pt-3 fs-1">
                        <b>Low fixed spreads</b>
                    </h3>
                    <p class="pt-5">
                        Controlling trading costs is key to maximising your profits. Few things take the shine off a successful trade more than hidden costs eating into your funds. That’s why, when you trade with us, you can forget about commission, deposit fees and withdrawal charges. 
                    </p>
                    <p class="pt-3">
                        In a volatile market, trading costs can escalate scarily quickly. It’s not helped when some platforms ramp-up costs during busy trading times. Not on our watch. With fixed spreads that start low and stay low, regular traders can really rack up worthwhile savings.
                    </p>
                </div>

                <div class="col-md-6">
                    <svg color="#04e3d8" height="80" viewBox="0 0 81 161">
                        <path fill="#4DAD92" d="M41.0174 0.785624L80.3818 79.0391L40.7013 160.811L0.280648 84.3565L41.0174 0.785624Z"></path>
                    </svg>

                    <h3 id="overnight-funding" class="pt-3 fs-1">
                        <b>Overnight funding</b>
                    </h3>
                    <p class="pt-5">
                        With us, a small deposit in your account secures a much larger trading position.  In effect, we loan you the full amount you need to open and maintain your position. This means you’re trading on margin, using <a href="#!">leverage</a> to boost your potential profit. On the flip side, this also magnifies any losses you may incur.
                    </p>
                    <p class="pt-3">
                        When holding a position overnight, you pay a small amount of <a href="#!">interest on all long positions or you may receive a credit on short positions</a>; depending on the market and interest rates at the time.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection