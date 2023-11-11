@extends('new_design.app')
@section('content')
    <section class="px-4 rm_p_2">
        <div class="py-5 container-fluid px-5 rm_p_2">
            <h6 style="color: #EE4E08;"><b>Insights hub</b></h6>

            <div class="row pt-4">
                <div class="col-md-6 mb-4">
                    <div>
                        <h1 style="font-size: 90px;" class="my_f"><b>Get started <br> with us?</b></h1>

                        <p class="pt-3" style="color: #6C7884;">
                            We want you to succeed on our platform. To be the best you possibly can. Nothing would give us greater pleasure than you simply knocking it out of the park.  We’ve pulled together some must-know info and power-packed resources to help you trade like a pro. Whether you’re an old-hand or a first-timer, take a look and see how we can help improve your trading game.
                        </p>
                        <a href="{{ route('register') }}" class="btn px-5 mt-4 trade_now_btn rounded-pill py-3">Trade Now</a>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <img src="https://images.prismic.io/tnfev2/1ae67f0f-9b5b-4cf9-804a-704f67ffa134_BRAND+TradingTools+Signal+centre2++HeroImage+1280x720.png?auto=compress,format" alt="" class="img-fluid" style="border-radius: 30px;">

                    <div class="sc-f3a729c-7 jmYnBa">
                        <svg color="#FC5000" height="150" viewBox="0 0 81 161" style="position: absolute; right: 10%; margin-top: -30px;">
                            <path fill="#EE4E08" d="M41.0174 0.785624L80.3818 79.0391L40.7013 160.811L0.280648 84.3565L41.0174 0.785624Z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5" id="fixed-spread-trading">
            <div class="p-5 border rm_p_2" style="border-radius: 20px;">
                <div class="d-flex" style="align-items: center;">
                    <svg color="#FC5000" height="67" viewBox="0 0 81 161">
                        <path fill="#513799" d="M41.0174 0.785624L80.3818 79.0391L40.7013 160.811L0.280648 84.3565L41.0174 0.785624Z"></path>
                    </svg>
                    <h1 style="font-size: 40px;" class="ps-4 haq" id="spread-trades"><b>Spread trades</b></h1>
                </div>
                <p class="pt-4">
                    We offer <a href="#!">Spread Trading</a> (also known as Spread Betting) on our proprietary platform.  Our spreads are amongst the lowest available. Not only that, but most are fixed during set periods during the day so you’ll always know what the spread is at any given time. Just as importantly, you can be sure our spreads won’t suddenly increase just because markets get volatile.
                </p>
                <p class="pt-4">
                    We provide easy access to well over 1,000 markets, covering all of the world’s major stock indices, forex pairs, key commodities, individual equities and bonds.
                </p>
            </div>

            <div class="mt-5 p-5 border rm_p_2" style="border-radius: 20px;" id="cfd-trading">
                <div class="d-flex" style="align-items: center;">
                    <svg color="##EE4E07" height="67" viewBox="0 0 81 161">
                        <path fill="#4DAD92" d="M41.0174 0.785624L80.3818 79.0391L40.7013 160.811L0.280648 84.3565L41.0174 0.785624Z"></path>
                    </svg>
                    <h1 style="font-size: 40px;" class="ps-4 haq" id="contracts-for-differences"><b>Contracts for Differences: </b></h1>
                </div>
                <p class="pt-4">
                    Some traders prefer Contracts for Differences, otherwise known as <a href="#!">CFDs</a>. These are available through our MetaTrader 4 (MT4) offering.
                </p>
                <p class="pt-4">
                    You can trade CFDs on the same wide range of financial markets. But it’s worth knowing they offer less choice than Spread Trades when it comes to which currency you trade in, and this affects your profit or loss. Also, the minimum trade size is typically higher for CFDs than Spread Trades. That said, CFDs can work better in some circumstances. For instance, if you’re looking to hedge a stock portfolio, they can allow the offset of losses against profits.
                </p>
                <p class="pt-4">
                    In addition, the <a href="#!">MT4</a> platform is well known for its extensive charting package, which includes a comprehensive range of drawing tools and technical indicators.
                </p>
            </div>

            <div class="mt-5 p-5 border rm_p_2" style="border-radius: 20px;" id="negative-balance-protection">
                <div class="d-flex" style="align-items: center;">
                    <svg color="##EE4E07" height="67" viewBox="0 0 81 161">
                        <path fill="#513799" d="M41.0174 0.785624L80.3818 79.0391L40.7013 160.811L0.280648 84.3565L41.0174 0.785624Z"></path>
                    </svg>
                    <h1 style="font-size: 40px;" class="ps-4 haq" id="market-analysis"><b>Market analysis</b></h1>
                </div>
                <p class="pt-4">
                    There are two forms of market analysis, <a href="#!">fundamental</a> and technical. Broadly speaking, the former focuses on how markets react to events, such as the release of economic data, changes in interest rates, or geopolitics.
                    <br><br>
                    You can keep abreast of these via our bespoke real-time newsfeed. Technical analysis involves the study of <a href="#!">charts</a> plus the application of drawing tools, such as trend lines and Fibonacci Retracement, overlaid by technical studies like the MACD and RSI. Our charts are clear and fully customisable, with a comprehensive suite of drawing tools and technical indicators. 
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 mb-5 pt-5">
                    <img src="https://images.prismic.io/tnfev2/3230c8cf-0ef5-40cd-a06b-3054752912fa_BRAND+TradingTools+Device5+TeaserImage+1500x1000.png?auto=compress,format" alt="" class="mt-5 img-fluid">
                </div>

                <div class="col-md-6 mb-5">
                    <h3 style="font-size: 40px;" id="signal-centre"><b>Signal centre</b></h3>
                    <p class="pt-4">
                        In addition to any technical analysis you may carry out yourself, we also give you direct access to one of the best and most reliable sources of trading signals around. Signal Centre is a leading, award-winning trading signals resource, delivering technical analysis on a wide range of stock indices, currency pairs  and commodities. <br><br>

                        Of all the trading signal providers out there, only Signal Centre is fully regulated by the Financial Conduct Authority (FCA). So you can be confident that the experts are professional, unbiased, and conform to the FCA’s strict regulatory criteria. <br><br>

                        Every trading signal is supported by a detailed explanation, giving you total transparency on the logic behind the idea. This also helps hone your understanding of the types of analysis that is the lifeblood of successful traders. Of course, all trading carries risk and data is available on the Signal Centre website to show past performance.  
                    </p>
                </div>

                <!-- <div class="col-md-6 mb-5">
                    <h3 style="font-size: 40px;"><b>Demo</b></h3>
                    <p class="pt-4">
                        Not yet ready to open a live account? No worries! Why not open a demo account where you can give our trading platform a whirl? You can make trades, leave orders, access charts and our technical analysis tools without any commitment. But please note that you need to open a live account to have access to Signals, our Daily Reports, and bespoke real-time newsfeed. 
                    </p>

                    <a href="{{ route('register') }}">Try us now</a>
                </div>

                <div class="col-md-6 mb-5 ">
                    <img src="https://images.prismic.io/tnfev2/9a7061e1-d39b-4309-825d-74e5d40be8a3_BRAND+Insights+demo+Device4+TeaserImage+1500x1000_.png?auto=compress,format" alt="" class="img-fluid">
                </div> -->

            </div>
        </div>
    </section>
@endsection