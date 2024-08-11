@extends('new_design_2.layouts.app')
@section('content')
    <div style="background-color: #050F19;" class="kanit_thin_font">
        <section id="marketBanner"></section>

        <section class="container">
            <h1 style="font-size: 50px;">Trade the markets <br><span style="color: #fc5000!important;">that move</span></h1>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Market</th>
                        <th scope="col">Bid</th>
                        <th scope="col">Ask</th>
                        <th scope="col">Spread</th>
                        <th scope="col">Trend</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th scope="row">AUD/USD</th>
                        <td><button class="btn rounded-pill btn-secondary px-4">SELL.0.65718</button></td>
                        <td><button class="btn rounded-pill btn-secondary px-4">BUY.0.65722</button></td>
                        <td>0.4</td>
                        <td></td>
                    </tr>

                    <tr>
                        <th scope="row">AUD/USD</th>
                        <td><button class="btn rounded-pill btn-secondary px-4">SELL.0.65718</button></td>
                        <td><button class="btn rounded-pill btn-secondary px-4">BUY.0.65722</button></td>
                        <td>0.4</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

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
                <ul class="nav nav-tabs ng_s" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="forex-tab" data-bs-toggle="tab" data-bs-target="#forex-tab-pane" type="button" role="tab" aria-controls="forex-tab-pane" aria-selected="true">Forex</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="indices-tab" data-bs-toggle="tab" data-bs-target="#indices-tab-pane" type="button" role="tab" aria-controls="indices-tab-pane" aria-selected="false">Indices</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="commodities-tab" data-bs-toggle="tab" data-bs-target="#commodities-tab-pane" type="button" role="tab" aria-controls="commodities-tab-pane" aria-selected="false">Commodities</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="stock-tab" data-bs-toggle="tab" data-bs-target="#stock-tab-pane" type="button" role="tab" aria-controls="stock-tab-pane" aria-selected="false">Stocks</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="cryptocies-tab" data-bs-toggle="tab" data-bs-target="#cryptocies-tab-pane" type="button" role="tab" aria-controls="cryptocies-tab-pane" aria-selected="false">Cryptocurrencies</button>
                    </li>
                </ul>
    
    
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
                                    <div style="transform: rotate(10deg); margin: 0; font-size: 18px; line-height: 24px; font-weight: 400; font-family: '__Inter_36bd41','__Inter_Fallback_36bd41'; color: #FC5000; font-size: 115px !important; margin-top: -10px; font-weight: 100!important;">
                                        /
                                    </div>

                                    <div class="ms-4">
                                        <p class="hyd_">The forex market is the world's biggest financial market, <a href="#!" style="color: #FC5000;">with a daily trading volume of about $6.6 trillion.</a></p>
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
                        
                    </div>
    
                    <div class="pt-5 text-dark tab-pane fade" id="commodities-tab-pane" role="tabpanel" aria-labelledby="commodities-tab" tabindex="0">
                        
                    </div>
    
                    <div class="pt-5 text-dark tab-pane fade" id="stock-tab-pane" role="tabpanel" aria-labelledby="stock-tab" tabindex="0">
                        
                    </div>
    
                    <div class="pt-5 text-dark tab-pane fade" id="cryptocies-tab-pane" role="tabpanel" aria-labelledby="cryptocies-tab" tabindex="0">
                        
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
<!-- prov 8 -->