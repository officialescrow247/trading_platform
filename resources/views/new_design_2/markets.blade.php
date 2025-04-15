@extends('new_design_2.layouts.app')
@section('content')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <div style="background-color: #000;" class="kanit_thin_font pb-4">
        <section id="marketBanner"></section>

        <section class="container" style="position: relative; top: -250px; margin-bottom: -250px;">
            <h1 class="py-5" style="font-size: 50px;">Trade the markets <br><span style="color: #fc5000!important;">that move</span></h1>

            <div id="app">
                <pairs />
            </div>

            <div class="hrr w-100"></div>
        </section>

        <section class="container py-5">
            <h1 class="pt-5">Ways <b>to trade</b></h1>

            <div class="pt-5 pb-5">
                <div class="border rounded" id="jise__">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="p-4">
                                <h5><b>CFD Trading</b></h5>
                                <p>
                                    CFDs give you more room to strategise - you can day trade or hold long-term, hedge, and diversify better. Trade on underlying assets without owning them, meaning you can trade a specific quantity of the underlying asset in CFDs, rather than on a per-point basis. CFD trading is more globally recognised and is available in many countries around the world.
                                </p>
    
                                <ul>
                                    <li>Choose between low-cost fixed or variable spreads</li>
                                    <li>Leveraged product</li>
                                    <li>No expiry on rolling contracts, only futures</li>
                                    <li>24-hour trading (not including weekends)</li>
                                    <li>Trading Cost incorporated within the spread</li>
                                    <li>Available on MetaTrader 4 and TN Trader</li>
                                </ul>
        
                                <div class="pt-4">
                                    <a class="btn rounded-pill sign_in_login_btn w-50 px-5 text-dark" href="#"><b>Get started -></b></a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-6">
                            <img src="https://images.prismic.io/tnfev2/834c1626-d810-413f-9456-94c6d0659d0b_ways-to-trade-two.png?auto=compress%2Cformat&fit=max&w=1920" alt="" class="img-fluid h-100">
                        </div>
                    </div>
                </div>
            </div>

            <i><b>*Please note we do not offer tax advice. If you need some, please contact an external tax expert</b></i>
        </section>

        <section class="bg-light py-5">
            <div class="container">
                <div class="d-flex justify-content-center">

                    <ul class="nav nav-tabs ng_s" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="cr_d nav-link active" id="forex-tab" data-bs-toggle="tab" data-bs-target="#forex-tab-pane" type="button" role="tab" aria-controls="forex-tab-pane" aria-selected="true">Forex</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="cr_d nav-link" id="indices-tab" data-bs-toggle="tab" data-bs-target="#indices-tab-pane" type="button" role="tab" aria-controls="indices-tab-pane" aria-selected="false">Indices</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="cr_d nav-link" id="commodities-tab" data-bs-toggle="tab" data-bs-target="#commodities-tab-pane" type="button" role="tab" aria-controls="commodities-tab-pane" aria-selected="false">Commodities</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="cr_d nav-link" id="stock-tab" data-bs-toggle="tab" data-bs-target="#stock-tab-pane" type="button" role="tab" aria-controls="stock-tab-pane" aria-selected="false">Stocks</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="cr_d nav-link" id="cryptocies-tab" data-bs-toggle="tab" data-bs-target="#cryptocies-tab-pane" type="button" role="tab" aria-controls="cryptocies-tab-pane" aria-selected="false">Cryptocurrencies</button>
                        </li>
                    </ul>
                </div>
    
    
                <div class="tab-content" id="myTabContent">
                    <div class="pt-5 text-dark tab-pane fade show active" id="forex-tab-pane" role="tabpanel" aria-labelledby="forex-tab" tabindex="0">
                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                    Forex, or foreign exchange, is made up of pairs of currencies where you trade one against the other. If you believe one will rise against the other, you buy it - but if you think it'll fall, open a sell position.  <br><br>
        
                                    These pairs are categorised as majors, minors, and exotics; majors being the world's largest currencies (EUR, GBP, CHF, CAD, AUD, NZD, and JPY) traded against the USD; crosses or minors being those same currencies against each other (i.e. none including USD) and finally, exotics include one currency from an emerging market.
                                </p>

                                <div class="row">
                                    <div class="col-md-6 d-flex">
                                        <div><img src="https://images.prismic.io/tnfev2/6a1e0134-612d-4ad0-9188-cee8d497e9de_tab-content-tick.png?auto=compress,format" alt="" style="width: 20px;"></div>
                                        <p class="ps-2"><b>35 majors and minors</b></p>
                                    </div>

                                    <div class="col-md-6 d-flex">
                                        <div><img src="https://images.prismic.io/tnfev2/6a1e0134-612d-4ad0-9188-cee8d497e9de_tab-content-tick.png?auto=compress,format" alt="" style="width: 20px;"></div>
                                        <p class="ps-2"><b>Tight, fixed spreads</b></p>
                                    </div>

                                    <div class="col-md-6 d-flex">
                                        <div><img src="https://images.prismic.io/tnfev2/6a1e0134-612d-4ad0-9188-cee8d497e9de_tab-content-tick.png?auto=compress,format" alt="" style="width: 20px;"></div>
                                        <p class="ps-2"><b>Move with the market</b></p>
                                    </div>

                                    <div class="col-md-6 d-flex">
                                        <div><img src="https://images.prismic.io/tnfev2/6a1e0134-612d-4ad0-9188-cee8d497e9de_tab-content-tick.png?auto=compress,format" alt="" style="width: 20px;"></div>
                                        <p class="ps-2"><b>Minimal slippage</b></p>
                                    </div>
                                </div>

                                <div class="d-flex pt-5" style="align-items: center;">
                                    <div style="transform: rotate(10deg); margin: 0; font-size: 18px; line-height: 24px; font-weight: 400; font-family: '__Inter_36bd41','__Inter_Fallback_36bd41'; color: #fc5000; font-size: 115px !important; margin-top: -10px; font-weight: 100!important;">
                                        /
                                    </div>

                                    <div class="ms-4">
                                        <p class="hyd_">The forex market is the world's biggest financial market, <a href="#!" style="color: #fc5000;">with a daily trading volume of about $6.6 trillion.</a></p>
                                    </div>
                                </div>
                                
                                <div class="pt-4">
                                    <a class="btn rounded-pill sign_in_login_btn px-5 text-dark" href="#"><b>Learn more -></b></a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <img src="https://images.prismic.io/tnfev2/44788811-24ef-46f2-9a19-f1492e33013a_market-tab-one.png?auto=compress%2Cformat&fit=max&w=1920" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
    
                    <div class="pt-5 text-dark tab-pane fade" id="indices-tab-pane" role="tabpanel" aria-labelledby="indices-tab" tabindex="0">
                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                    An index tracks the performance of a group of assets, typically being stocks weighted by market cap (share price x total number of shares, i.e. company value).  <br><br>
        
                                    They can be categorised by sector, exchange, or represent entire economies. For example, the Nasdaq-100 is made up of 100 of the biggest tech stocks listed on the NASDAQ, whereas the DAX40 is a mix of companies from different sectors in Germany. <br><br>

                                    When trading indices, you do so in the general direction of that group of instruments. However, they can also track other financial data, such as inflation or volatility. Indices are a common way to diversify, hedge, and invest (long-term). At TN Trade, you can choose from 40 indices, including major US, European, and Asian ones.
                                </p>
                            </div>

                            <div class="col-md-6">
                                <img src="https://images.prismic.io/tnfev2/e2540841-8f55-422d-adb5-38e1e98f27b5_market-tab-three.png?auto=compress%2Cformat&fit=max&w=1920" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
    
                    <div class="pt-5 text-dark tab-pane fade" id="commodities-tab-pane" role="tabpanel" aria-labelledby="commodities-tab" tabindex="0">
                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                    Commodities are primary products or finite resources such as metals (e.g. gold), energies (e.g. crude oil), and even agriculture (e.g. coffee). Their value relies on supply and demand, which can be impacted by both political and environmental factors, making them susceptible to volatility.  <br><br>
        
                                    Trade a mix of energies and metals, from Aluminium to Zinc.
                                </p>
                            </div>

                            <div class="col-md-6">
                                <img src="https://images.prismic.io/tnfev2/739839a1-65c8-4ad3-84f3-6fb1ee97e0d3_market-tab-two.png?auto=compress%2Cformat&fit=max&w=1920" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
    
                    <div class="pt-5 text-dark tab-pane fade" id="stock-tab-pane" role="tabpanel" aria-labelledby="stock-tab" tabindex="0">
                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                    Stocks are fragments of a company that become available to investors when the company is listed on an exchange. In the context of CFDs or spread trades, you don’t purchase shares as you would traditionally, but instead trade on the value of that company, i.e. buy if you believe the share price will go up, and sell if you think it’ll fall.   <br><br>
        
                                    Stocks are a great way to tap into different economies and sectors. At TN Trade, you can find hundreds of stocks from Europe, the UK, the US and South Africa, spanning all sectors.
                                </p>
                            </div>

                            <div class="col-md-6">
                                <img src="https://images.prismic.io/tnfev2/04dcd56c-efbb-4c52-b1f1-b5f3c32b9dca_market-tab-four.png?auto=compress%2Cformat&fit=max&w=1920" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
    
                    <div class="pt-5 text-dark tab-pane fade" id="cryptocies-tab-pane" role="tabpanel" aria-labelledby="cryptocies-tab" tabindex="0">
                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                    Cryptocurrencies are digital currencies stored in virtual wallets and transferred via the blockchain. Crypto is decentralised and unregulated, meaning no authority (e.g.central bank or government) influences its circulation or value. <br><br>
        
                                    Being fully digital, crypto is ‘mined’ online and limited in supply which drives its price like any other market. Many of its characteristics – a lack of regulation, anonymity, security – all contribute to its price swings. <br><br>

                                    When placing spread or CFD trades on crypto, you’re speculating on the value of the underlying currency, rather than purchasing or transferring the real thing.
                                </p>
                            </div>

                            <div class="col-md-6">
                                <img src="https://images.prismic.io/tnfev2/ZmMZXpm069VX1jpd_Markets-Tabs-Crypto.png?auto=format%2Ccompress%3Fauto%3Dcompress%2Cformat&fit=max&w=1920" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 container more_on_markets">
            <h1 class="py-5">More on <b>markets</b></h1>

            <div class="row py-5">
                <div class="col-md-4 mb-3">
                    <div class="mx-1">
                        <img src="https://images.prismic.io/tnfev2/1f3d242c-24f2-4c0b-8fb6-7cdd593ee66c_market-card-one.png?auto=compress%2Cformat&fit=max&w=1920" class="img-fluid">
                        <a href="#!" class="pt-3">
                            Market hours
                        </a>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="mx-1">
                        <img src="https://images.prismic.io/tnfev2/a969564d-54a1-4a69-893c-d010cb450731_market-card-two.png?auto=compress%2Cformat&fit=max&w=1920" class="img-fluid">
                        <a href="#!" class="pt-3">
                            Market information
                        </a>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="mx-1">
                        <img src="https://images.prismic.io/tnfev2/64879852-5ce9-46b8-9162-5e28d1d8dd0d_market-card-three.png?auto=compress%2Cformat&fit=max&w=1920" class="img-fluid">
                        <a href="#!" class="pt-3">
                            Trading costs
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section style="position: relative; max-width: 100%; overflow: hidden;">
            <!-- Orange Line -->
            <div style="position: absolute; top: 50%; left: -10%; width: 120%; height: 1px; border-top: 3px solid #fc5000;"></div>
            
            <!-- Centered Content -->
            <div class="d-flex justify-content-center" style="position: relative; z-index: 1;">
                <div class="row p-5 border_s rounded" style="background-color: #000; border: 2px solid #fc5000;">
                    <div class="col-md-8">
                        <h1>
                            The markets are moving. <br>
                            <b>Start trading now.</b>
                        </h1>
                    </div>
        
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                        <a class="btn rounded-pill sign_in_login_btn px-5 text-dark" href="#">
                            <b>Get started -></b>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection