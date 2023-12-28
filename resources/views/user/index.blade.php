@extends('layouts.users')

@section('content')
   <div class="@if(auth()->user()->acct_type === '1') color_1 @elseif(auth()->user()->acct_type === '2') color_2 @elseif(auth()->user()->acct_type === '3') color_3 @else color_4 @endif">
      <div class="container-fluid">

         <div class="row">
            <div class="col-md-2"></div>
            
            @if (auth()->user()->acct_type === '1')
               <div class="col-md-8 text-center px-2 mb-1 py-1">
                  Welcome <b>{{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}</b> <span>|</span> You are currently using a <b>Basic Account</b>
               </div>
            @elseif (auth()->user()->acct_type === '2')
               <div class="col-md-8 text-center px-2 mb-1 py-1">
                  Welcome <b>{{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}</b> <span>|</span> You are currently using a <b>Gold Account</b>
               </div>
            @elseif (auth()->user()->acct_type === '3')
               <div class="col-md-8 text-center px-2 mb-1 py-1">
                  Welcome <b>{{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}</b> <span>|</span> You are currently using a <b>Pro Account <i class="fa-solid fa-star ps-2"></i></b>
               </div>
            @else
               <div class="col-md-8 text-center px-2 mb-1 py-1">
                  Welcome <b>{{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}</b> <span>|</span> You are currently using a <b>VIP Account <i class="fa-solid fa-crown ps-2"></i></b>
               </div>
            @endif
      
            <div class="col-md-2 colr_n">
               {{-- <img src="https://www.designbust.com/download/325/png/user_online_icon512.png" class="img-fluid"><b>{{ $online_users ? $online_users : 20 }}</b> people online --}}
               
               <div class="image-container">
                  <img src="{{ asset('online_user.gif') }}" class="imgg2">
               </div>
               <b class="ps-2">{{ $online_users ? $online_users : 20 }}</b> people online
            </div>
         </div>
      </div>
   </div>

   <main class="container-fluid">
      <div class="row">
         <div class="col-md-4 mb-lg-0 pb-4 mb-5">
            <div id="leftchat">
               <!-- TradingView Widget BEGIN -->
               <div class="tradingview-widget-container">
                  <div class="tradingview-widget-container__widget"></div>
                  
                  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                     {
                        "currencies": [
                           "EUR",
                           "USD",
                           "JPY",
                           "GBP",
                           "CHF",
                           "AUD",
                           "CAD",
                           "NZD"
                        ],
                        "colorTheme": "dark",
                        "locale": "en",
                        "largeChartUrl": "{{ route('dashboard') }}"
                     }
                  </script>
               </div>
               <!-- TradingView Widget END -->
            </div>

            <p style="cursor: pointer;" class="text-warning float-end" onclick="openleftchat();"><i class="fa-solid fa-expand"></i></p>
         </div>

         <div class="col-md-3 mb-lg-0 pb-4 mb-5">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="market-tab" data-bs-toggle="tab" data-bs-target="#market" type="button" role="tab" aria-controls="market" aria-selected="true">Market <br> execution</button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="ad_trade-tab" data-bs-toggle="tab" data-bs-target="#ad_trade" type="button" role="tab" aria-controls="ad_trade" aria-selected="false">Advanced <br> trades</button>
               </li>
            </ul>

            <div class="tab-content pt-3" id="myTabContent">
               <div class="tab-pane fade" id="market" role="tabpanel" aria-labelledby="market-tab">
                  <form action="{{ route('transaction.store') }}" method="post">
                     <div class="d-flex justify-content-around">
                        <div>
                           <input type="radio" id="Crypto" name="asset_type" class="asset_type" value="Crypto" >
                           <label class="text-light" for="Crypto">Crypto</label>
                        </div>
   
                        <div>
                           <input type="radio" id="Forex" name="asset_type" class="asset_type" value="Forex">
                           <label class="text-light" for="Forex">Forex</label>
                        </div>

                        <div>
                           <input type="radio" id="Stocks" name="asset_type" class="asset_type" value="Stocks">
                           <label class="text-light" for="Stocks">Stocks</label>
                        </div>
                        
                        <div>
                           <input type="radio" id="Commodities" name="asset_type" class="asset_type" value="Commodities">
                           <label class="text-light" for="Commodities">Commodities</label>
                        </div>
                     </div>

                     @csrf
                     <input type="hidden" name="trade_type_select" value="m_e">
                     <label class="text-secondary">Assets</label>
                     
                     <select name="type" id="my-select" class="form-select mb-2" style="background-color: #171B26; color: #E1E4ED;" disabled>
                        
                        <option value="" selected>-- Select Asset --</option>

                        @foreach ($assets as $asset)
                           <option class="asset_crypto" value="{{ $asset->symbol }}">{{ $asset->name }}</option>                        
                        @endforeach

                        <option class="asset_stocks" value="AAPL">Apple Inc.</option>
                        <option class="asset_stocks" value="MSFT">Microsoft Corp</option>
                        <option class="asset_stocks" value="AMZN">Amazon Com Inc</option>
                        <option class="asset_stocks" value="TSLA">Tesla Inc</option>
                        <option class="asset_stocks" value="DOW">DOW JONES INDUSTRAIL AVERAGE INDEX</option>
                        <option class="asset_stocks" value="SP500">S&P 500</option>
                        <option class="asset_stocks" value="BABA">Alibaba Group Holdings LTD</option>
                        <option class="asset_stocks" value="ABNB">ABNB</option>
                        <option class="asset_stocks" value="SPOT">Spotify Technology S.A</option>
                        <option class="asset_stocks" value="V">Visa Inc.</option>
                        <option class="asset_stocks" value="UBER">Uber Technologies, Inc</option>
                        <option class="asset_stocks" value="GOOGL">Alphabet Inc</option>
                        <option class="asset_stocks" value="JNJ">Johnson & Johnson</option>
                        <option class="asset_stocks" value="BRK.B">Berkshire Hathaway</option>
                        <option class="asset_stocks" value="BAC">Bank of America</option>
                        <option class="asset_stocks" value="JNJ">Johnson</option>
                        <option class="asset_stocks" value="NDAQ">NASDAQ INC.</option>
                        <option class="asset_stocks" value="JPM">JPMorgan Chase</option>
                        <option class="asset_stocks" value="META">Meta Platforms, Inc.</option>
                        <option class="asset_stocks" value="NFLX">Netflix, Inc.</option>
                        <option class="asset_stocks" value="MU">Micron Technology, Inc.</option>
                        <option class="asset_stocks" value="SNAP">SNAP, Inc.</option>
                        <option class="asset_stocks" value="NVDA">NVIDIA Corporation</option>
                        <option class="asset_stocks" value="ACB">Aurora Cannabis Inc.</option>
                        <option class="asset_stocks" value="CGC">Canopy Growth Corporation</option>
                        <option class="asset_stocks" value="CRON">Cronos Group Inc. Common Share</option>
                        <option class="asset_stocks" value="PFSI">PennyMac Financial Services, Inc</option>
                        <option class="asset_stocks" value="PAAS">Pan American Silver Corp.</option>
                        <option class="asset_stocks" value="BAC">Bank of American Corp.</option>
                        <option class="asset_stocks" value="INTC">Intel Corp.</option>
                        <option class="asset_stocks" value="EA">Electronic Arts Inc.</option>
                        <option class="asset_stocks" value="SHOP">SHOPIFY INC.</option>
                        <option class="asset_stocks" value="005930.KS">Samsung Electronics Co., Ltd.</option>
                        <option class="asset_stocks" value="PYPL">PAYPAL HONDINGS INC.</option>

                        <option class="asset_commodities" value="XAU">GOLD</option>
                        <option class="asset_commodities" value="XAG">SILVER</option>
                        <option class="asset_commodities" value="WTIOIL">WTI Crude Oil</option>
                        <option class="asset_commodities" value="ALU">Aluminum</option>
                        <option class="asset_commodities" value="NI">Nickel</option>
                        <option class="asset_commodities" value="SUGAR">SUGAR</option>
                        <option class="asset_commodities" value="XPT">Platinum</option>
                        <option class="asset_commodities" value="GFU22">Feeder Cattle</option>
                        <option class="asset_commodities" value="LGOU22">London Gas Oil</option>
                        <option class="asset_commodities" value="COTTON">COTTON</option>
                        <option class="asset_commodities" value="COCOA">COCOA</option>
                        <!-- <option class="asset_commodities" value="CORN">CORN</option> -->
                        <option class="asset_commodities" value="LHOG">Lean Hog</option>
                        <option class="asset_commodities" value="OAT">OAT</option>
                        <option class="asset_commodities" value="WHEAT">WHEAT</option>
                        <option class="asset_commodities" value="COFFEE">Arabica Coffee</option>
                        <option class="asset_commodities" value="XPD">Palladium</option>
                        <option class="asset_commodities" value="LCAT">Live Cattle</option>
                        <option class="asset_commodities" value="BRENTOIL">Brent Crude Oil</option>
                        <option class="asset_commodities" value="HOU22">Heating Oil</option>
                        <option class="asset_commodities" value="NG">Natural Gas</option>
                        <option class="asset_commodities" value="RBU22">RBOB Gasoline</option>
                        <option class="asset_commodities" value="XCU">Copper</option>
                        <option class="asset_commodities" value="ZLU22">Soybean Oil</option>
                        <option class="asset_commodities" value="OJU22">Orange Juice</option>
                        <option class="asset_commodities" value="CPO">Crude Palm Oil</option>


                        <option class="asset_forex" value="GBP/USD">GBP/USD</option>
                        <option class="asset_forex" value="USD/CAD">USD/CAD</option>
                        <option class="asset_forex" value="USD/JPY">USD/JPY</option>
                        <option class="asset_forex" value="USD/CHF">USD/CHF</option>
                        <option class="asset_forex" value="EUR/GBP">EUR/GBP</option>
                        <option class="asset_forex" value="AUD/USD">AUD/USD</option>
                        <option class="asset_forex" value="AUD/CAD">AUD/CAD</option>
                        <option class="asset_forex" value="AUD/JPY">AUD/JPY</option>
                        <option class="asset_forex" value="GBP/AUD">GBP/AUD</option>
                        <option class="asset_forex" value="NZD/CAD">NZD/CAD</option>
                        <option class="asset_forex" value="EUR/USD">EUR/USD</option>
                        <option class="asset_forex" value="GBP/CAD">GBP/CAD</option>
                        <option class="asset_forex" value="GBP/NZD">GBP/NZD</option>
                        <option class="asset_forex" value="NZD/JPY">NZD/JPY</option>
                        <option class="asset_forex" value="NZD/USD">NZD/USD</option>
                        <option class="asset_forex" value="NZD/CHF">NZD/CHF</option>
                        <option class="asset_forex" value="EUR/NZD">EUR/NZD</option>
                        <option class="asset_forex" value="CAD/JPY">CAD/JPY</option>
                     </select>


                     <label class="text-secondary pt-3">Select trade size</label>
                     <input type="number" name="volume" id="calc_volume" class="form-control" step=".01" min="0" value="1" style="background-color: #171B26; color: #E1E4ED;">
                     
                     <div class="pt-4">
                        <p class="fs-6 text-light text-secondary">
                           <span id="asset_total"></span>
                        </p>
                     </div>
                     
                     <div class="row pt-4">
                        <div class="col-md-6">
                           <div class="d-grid gap-2 col-12 mx-auto">
                              <button class="btn btn-outline-m-danger sell1" type="button" style="position: relative;">
                                 <i class="fa-solid fa-caret-up rotate_me2" style="position: absolute; top: 23px; left: 0;"></i>
                                 SELL
                              </button>
                           </div>
                        </div>
                        
                        <div class="col-md-6">
                           <div class="d-grid gap-2 col-12 mx-auto">
                              <button class="btn btn-outline-m-success buy1" type="button" style="position: relative;">
                                 BUY
                                 <i class="fa-solid fa-caret-up rotate_me" style="position: absolute; bottom: 23px;; right: 0;"></i>
                              </button>
                           </div>
                        </div>
                     </div>
                     <input type="hidden" name="buy_or_sell" id="buy_or_sell">

                     <button type="submit" class="btn btn-secondary col-12 mt-3 trade_now1 btn_click" style="color: black;" disabled onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();">Trade</button>
                  </form>
               </div>

               <div class="tab-pane fade show active" id="ad_trade" role="tabpanel" aria-labelledby="ad_trade-tab">
                  <form action="{{ route('transaction.store') }}" method="post">
                     <div class="d-flex justify-content-around">
                        <div>
                           <input type="radio" id="Crypto2" name="asset_type2" class="asset_type2" value="Crypto" >
                           <label class="text-light" for="Crypto2">Crypto</label>
                        </div>
   
                        <div>
                           <input type="radio" id="Forex2" name="asset_type2" class="asset_type2" value="Forex">
                           <label class="text-light" for="Forex2">Forex</label>
                        </div>

                        <div>
                           <input type="radio" id="Stocks2" name="asset_type2" class="asset_type2" value="Stocks">
                           <label class="text-light" for="Stocks2">Stocks</label>
                        </div>
                        
                        <div>
                           <input type="radio" id="Commodities2" name="asset_type2" class="asset_type2" value="Commodities">
                           <label class="text-light" for="Commodities2">Commodities</label>
                        </div>
                     </div>

                     @csrf
                     <input type="hidden" name="trade_type_select" value="a_t">
                     <label class="text-secondary">Assets</label>
                     <select name="type" id="my-select2" class="form-select mb-2" style="background-color: #171B26; color: #E1E4ED;" disabled>
                        
                        <option value="" selected>-- Select Asset --</option>

                        @foreach ($assets as $asset)
                           <option class="asset_crypto" value="{{ $asset->symbol }}">{{ $asset->name }}</option>                        
                        @endforeach

                        <option class="asset_stocks" value="AAPL">Apple Inc.</option>
                        <option class="asset_stocks" value="MSFT">Microsoft Corp</option>
                        <option class="asset_stocks" value="AMZN">Amazon Com Inc</option>
                        <option class="asset_stocks" value="TSLA">Tesla Inc</option>
                        <option class="asset_stocks" value="DOW">DOW JONES INDUSTRAIL AVERAGE INDEX</option>
                        <option class="asset_stocks" value="SP500">S&P 500</option>
                        <option class="asset_stocks" value="BABA">Alibaba Group Holdings LTD</option>
                        <option class="asset_stocks" value="ABNB">ABNB</option>
                        <option class="asset_stocks" value="SPOT">Spotify Technology S.A</option>
                        <option class="asset_stocks" value="V">Visa Inc.</option>
                        <option class="asset_stocks" value="UBER">Uber Technologies, Inc</option>
                        <option class="asset_stocks" value="GOOGL">Alphabet Inc</option>
                        <option class="asset_stocks" value="JNJ">Johnson & Johnson</option>
                        <option class="asset_stocks" value="BRK.B">Berkshire Hathaway</option>
                        <option class="asset_stocks" value="BAC">Bank of America</option>
                        <option class="asset_stocks" value="JNJ">Johnson</option>
                        <option class="asset_stocks" value="NDAQ">NASDAQ INC.</option>
                        <option class="asset_stocks" value="JPM">JPMorgan Chase</option>
                        <option class="asset_stocks" value="META">Meta Platforms, Inc.</option>
                        <option class="asset_stocks" value="NFLX">Netflix, Inc.</option>
                        <option class="asset_stocks" value="MU">Micron Technology, Inc.</option>
                        <option class="asset_stocks" value="SNAP">SNAP, Inc.</option>
                        <option class="asset_stocks" value="NVDA">NVIDIA Corporation</option>
                        <option class="asset_stocks" value="ACB">Aurora Cannabis Inc.</option>
                        <option class="asset_stocks" value="CGC">Canopy Growth Corporation</option>
                        <option class="asset_stocks" value="CRON">Cronos Group Inc. Common Share</option>
                        <option class="asset_stocks" value="PFSI">PennyMac Financial Services, Inc</option>
                        <option class="asset_stocks" value="PAAS">Pan American Silver Corp.</option>
                        <option class="asset_stocks" value="BAC">Bank of American Corp.</option>
                        <option class="asset_stocks" value="INTC">Intel Corp.</option>
                        <option class="asset_stocks" value="EA">Electronic Arts Inc.</option>
                        <option class="asset_stocks" value="SHOP">SHOPIFY INC.</option>
                        <option class="asset_stocks" value="005930.KS">Samsung Electronics Co., Ltd.</option>
                        <option class="asset_stocks" value="PYPL">PAYPAL HONDINGS INC.</option>
                        <option class="asset_stocks" value="BLK">BLACK ROCK INC.</option>
                        <option class="asset_stocks" value="VOO">Vanguard S&P 500 ETF</option>

                        <option class="asset_commodities" value="XAU">GOLD</option>
                        <option class="asset_commodities" value="XAG">SILVER</option>
                        <option class="asset_commodities" value="WTIOIL">WTI Crude Oil</option>
                        <option class="asset_commodities" value="ALU">Aluminum</option>
                        <option class="asset_commodities" value="NI">Nickel</option>
                        <option class="asset_commodities" value="SUGAR">SUGAR</option>
                        <option class="asset_commodities" value="XPT">Platinum</option>
                        <option class="asset_commodities" value="GFU22">Feeder Cattle</option>
                        <option class="asset_commodities" value="LGOU22">London Gas Oil</option>
                        <option class="asset_commodities" value="COTTON">COTTON</option>
                        <option class="asset_commodities" value="COCOA">COCOA</option>
                        <option class="asset_commodities" value="LHOG">Lean Hog</option>
                        <option class="asset_commodities" value="OAT">OAT</option>
                        <option class="asset_commodities" value="WHEAT">WHEAT</option>
                        <option class="asset_commodities" value="COFFEE">Arabica Coffee</option>
                        <option class="asset_commodities" value="XPD">Palladium</option>
                        <option class="asset_commodities" value="LCAT">Live Cattle</option>
                        <option class="asset_commodities" value="BRENTOIL">Brent Crude Oil</option>
                        <option class="asset_commodities" value="HOU22">Heating Oil</option>
                        <option class="asset_commodities" value="NG">Natural Gas</option>
                        <option class="asset_commodities" value="RBU22">RBOB Gasoline</option>
                        <option class="asset_commodities" value="XCU">Copper</option>
                        <option class="asset_commodities" value="ZLH23">Soybean Oil</option>
                        <option class="asset_commodities" value="OJU22">Orange Juice</option>
                        <option class="asset_commodities" value="CPO">Crude Palm Oil</option>


                        <option class="asset_forex" value="GBP/USD">GBP/USD</option>
                        <option class="asset_forex" value="USD/CAD">USD/CAD</option>
                        <option class="asset_forex" value="USD/JPY">USD/JPY</option>
                        <option class="asset_forex" value="USD/CHF">USD/CHF</option>
                        <option class="asset_forex" value="EUR/GBP">EUR/GBP</option>
                        <option class="asset_forex" value="AUD/USD">AUD/USD</option>
                        <option class="asset_forex" value="AUD/CAD">AUD/CAD</option>
                        <option class="asset_forex" value="AUD/JPY">AUD/JPY</option>
                        <option class="asset_forex" value="GBP/AUD">GBP/AUD</option>
                        <option class="asset_forex" value="NZD/CAD">NZD/CAD</option>
                        <option class="asset_forex" value="EUR/USD">EUR/USD</option>
                        <option class="asset_forex" value="GBP/CAD">GBP/CAD</option>
                        <option class="asset_forex" value="GBP/NZD">GBP/NZD</option>
                        <option class="asset_forex" value="NZD/JPY">NZD/JPY</option>
                        <option class="asset_forex" value="NZD/USD">NZD/USD</option>
                        <option class="asset_forex" value="NZD/CHF">NZD/CHF</option>
                        <option class="asset_forex" value="EUR/NZD">EUR/NZD</option>
                        <option class="asset_forex" value="CAD/JPY">CAD/JPY</option>
                     </select>

                     <label class="text-secondary pt-3">Select trade size</label>
                     <input type="number" name="volume" id="calc_volume2" class="form-control" step=".01" min="0" value="1" style="background-color: #171B26; color: #E1E4ED;">

                     <label class="text-secondary pt-3">Duration</label>
                     <select name="duration" class="form-select mb-2" style="background-color: #171B26; color: #E1E4ED;">
                        
                        <option value="" selected>-- Select Duration --</option>
                        <option class="" value="1 minute">1 minute</option>
                        <option class="" value="3 minutes">3 minutes</option>
                        <option class="" value="5 minutes">5 minutes</option>
                        <option class="" value="15 minutes">15 minutes</option>
                        <option class="" value="30 minutes">30 minutes</option>
                        <option class="" value="45 minutes">45 minutes</option>

                        <option class="" value="1 hour">1 hour</option>
                        <option class="" value="2 hours">2 hours</option>
                        <option class="" value="3 hours">3 hours</option>
                        <option class="" value="4 hours">4 hours</option>

                        <option class="" value="1 day">1 day</option>
                        <option class="" value="2 days">2 days</option>
                        <option class="" value="3 days">3 days</option>
                        <option class="" value="4 days">4 days</option>
                        <option class="" value="5 days">5 days</option>
                        <option class="" value="1 week">1 week</option>
                        <option class="" value="1 month">1 month</option>
                        <option class="" value="2 months">2 months</option>
                        <option class="" value="3 months">3 months</option>
                        <option class="" value="6 months">6 months</option>
                        <option class="" value="12 months">12 months</option>
                     </select>

                     <div class="d-flex justify-content-between pt-3" style="font-size: medium;">
                        <p class="text-light">
                           Leverage:
                        </p>
                        <p class="text-light">
                           @if (auth()->user()->acct_type === '1')
                              1:10
                           @elseif (auth()->user()->acct_type === '2')
                              1:50
                           @elseif (auth()->user()->acct_type === '3')
                              1:100
                           @else
                              1:200
                           @endif
                        </p>
                     </div>
                     
                     <div class="">
                        <p class="fs-6 text-light text-secondary">
                           <span id="asset_total2"></span>
                        </p>
                     </div>
                     <div class="fs-6 text-light text-secondary" id="pip">
                        <p class="">
                           
                        </p>
                     </div>

                     <div class="border border-light mt-2 rounded">
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="show-hide-div">
                           <label class="form-check-label text-secondary" for="myCheckbox">
                              Set Take Profit / Stop Loss Levels
                           </label>
                        </div>
                        
                        <div id="my-div" class="pt-3 pb-2">
                           <div class="d-flex justify-content-between px-1">
                              <div class="form-check pb-2">
                                 <input class="form-check-input" type="checkbox" name="s_l" value="s_l" id="stoploss">
                                 <label class="form-check-label text-secondary" for="stoploss">
                                    Stop Loss
                                 </label>
                              </div>

                              <div class="form-check pb-2">
                                 <input class="form-check-input" type="checkbox" name="t_p" value="t_p" id="takeprofit">
                                 <label class="form-check-label text-secondary" for="takeprofit">
                                    Take Profit
                                 </label>
                              </div>
                           </div>

                           <div class="d-flex justify-content-between px-1">
                              <input type="number" id="stoploss1" class="form-control mb-1" step=".01" name="piont1" min="0" value="0" style="background-color: #171B26; color: #E1E4ED;" style="width: 40%;">
                              <p class="text-secondary px-2 fs-6">Pips</p>
                              <input type="number" id="takeprofit1" class="form-control mb-1" step=".01" name="piont2" min="0" value="0" style="background-color: #171B26; color: #E1E4ED;" style="width: 40%;">
                           </div>

                           <div class="d-flex justify-content-between px-1">
                              <input readonly type="text" id="stoploss3" class="form-control mb-1" step=".01" min="0" value="0" style="background-color: #171B26; color: #E1E4ED; outline: none; background-color: #6e7583; border: none;" style="width: 40%;">
                              <p class="text-secondary px-2 fs-6">Profit</p>
                              <input readonly type="text" name="profit" id="takeprofit3" class="form-control mb-1" step=".01" min="0" value="0" style="background-color: #171B26; color: #E1E4ED; outline: none; background-color: #6e7583; border: none;" style="width: 40%;">
                           </div>
                        </div>
                     </div>
                     
                     <div class="row pt-4">
                        <div class="col-md-6">
                           <div class="d-grid gap-2 col-12 mx-auto">
                              <button class="btn btn-outline-m-danger sell2" type="button" style="position: relative;">
                                 <i class="fa-solid fa-caret-up rotate_me2" style="position: absolute; top: 23px; left: 0;"></i>
                                 SELL
                              </button>
                           </div>
                        </div>
                        
                        <div class="col-md-6">
                           <div class="d-grid gap-2 col-12 mx-auto">
                              <button class="btn btn-outline-m-success buy2" type="button" style="position: relative;">
                                 BUY
                                 <i class="fa-solid fa-caret-up rotate_me" style="position: absolute; bottom: 23px;; right: 0;"></i>
                              </button>
                           </div>

                        </div>
                     </div>
                     <input type="hidden" name="buy_or_sell" id="buy_or_sell2">

                     <button type="submit" class="trade_now2 btn btn-secondary col-12 mt-3" style="color: black;" disabled onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();">Trade</button>
                  </form>
               </div>
            </div>
         </div>
         
         <div class="col-md-5 mb-lg-0 pb-4 mb-5">
            <!-- TradingView Widget BEGIN -->
            <div id="rightchat" class="tradingview-widget-container">
               <div id="analytics-platform-chart-demo"></div>
               <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
               <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
               <script type="text/javascript">
                  var widget = new TradingView.widget(
                     {
                        "isTransparent": true,
                        "symbol": "NASDAQ:AAPL",
                        "container_id": "analytics-platform-chart-demo",
                        "width": "100%",
                        "autosize": true,
                        "interval": "1",
                        "timezone": "Europe/London",
                        "theme": "dark",
                        "style": "1",
                        "toolbar_bg": "#f1f3f6",
                        "withdateranges": true,
                        "allow_symbol_change": true,
                        "save_image": false,
                        "details": true,
                        "hotlist": true,
                        "calendar": true,
                        "locale": "en"
                     }
                  );

                  widget.onChartReady(function() {
                     var chart = widget.chart();
                     var series = chart.series();
                     console.log(series);
                  });
               </script>
            </div>
            <!-- TradingView Widget END -->

            <p style="cursor: pointer;position: relative;margin-top: 5%; right: 95%;" class="text-warning float-end" onclick="openrightchat();"><i class="fa-solid fa-expand"></i></p>
         </div>
      </div>
   </main>
   
   <div class="open_trarde_section">
      <button id="open_trade_btn" class="btn btn-secondary mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample_btn" aria-expanded="false" aria-controls="collapseExample_btn">
         <i class="fa-sharp fa-solid fa-arrow-up-wide-short"></i>
      </button>

      <div class="collapse show" id="collapseExample_btn">
         <div class="card card-body" style="height: 100vh;">
            <div class="table-responsive">
               <table class="table">
                  <thead>
                     <tr>
                        <th scope="col">TRADE NUMBER</th>
                        <th scope="col">OPENING TIME</th>
                        <th scope="col">TYPE</th>
                        <th scope="col">SYMBOL</th>
                        <th scope="col">VOLUME</th>
                        <th scope="col">BUY OR SELL</th>
                        <th scope="col">S/L</th>
                        <th scope="col">T/P</th>
                        <th scope="col">DURATION</th>
                        <th scope="col">PROFIT/LOSS</th>
                        <th scope="col">STATUS</th>

                        @if (auth()->user()->close_trade == true)
                           <th scope="col">ACTION</th>
                        @endif
                        
                        <th scope="col">Closed on</th>
                     </tr>
                  </thead>

                  <tbody>
                     @if ($transactions->count() < 1)
                        <div class="alert alert-info">No Record</div>
                     @else
                        @foreach ($transactions as $transaction)
                           <tr>
                              <th scope="row">#A{{ date('Y') . $transaction->id }}</th>
                              <td>{{ $transaction->created_at }}</td>
                              <td>{{ ucfirst($transaction->type) }}</td>
                              
                              <td>
                                 @if ($transaction->profit1 == 'topUp')
                                    - - -
                                 @else
                                    
                                    @if($transaction->symbol == 'card')
                                       @php
                                          $getDeposit = App\Models\Deposit::where('id', $transaction->buy_or_sell)->first();
                                       @endphp
                                       
                                       @if($getDeposit)
                                          @php
                                             $depositData = json_decode($getDeposit);
                                             $debitOrCredit = $depositData->debit_or_credit;
                                          @endphp

                                          {{ $debitOrCredit }} CARD
                                       @endif
                                    @else
                                       {{ $transaction->symbol }}
                                    @endif
                                 @endif
                              </td>

                              <td>{{ auth()->user()->currency . number_format($transaction->volume, 2, '.', ',') }}</td>
                              
                              <td>
                                 @if ($transaction->buy_or_sell == 'topUp' || $transaction->type == 'deposit')
                                    - - -
                                 @else
                                    {{ $transaction->buy_or_sell }}
                                 @endif
                              </td>

                              <td>
                                 <p style="font-size: 10px;">
                                    @if($transaction->profit1 == '0' || $transaction->profit1 == NULL)
                                       0
                                    @else
                                       @if ($transaction->status == 'topUp')
                                          - - -
                                       @else
                                          - {{ auth()->user()->currency . number_format($transaction->profit1, 2, '.', ',') }}
                                       @endif
                                       
                                    @endif
                                 </p>
                              </td>

                              <td>
                                 <p style="font-size: 10px;">
                                    @if($transaction->profit2 == '0' || $transaction->profit2 == NULL)
                                       0
                                    @else
                                       @if ($transaction->status == 'topUp')
                                          - - -
                                       @else
                                          + {{ auth()->user()->currency . number_format($transaction->profit2, 2, '.', ',') }}
                                       @endif
                                    @endif
                                 </p>
                              </td>

                              <td>
                                 {{ $transaction->duration == Null ? 'None' : $transaction->duration }}
                              </td>

                              <td>
                                 @if ($transaction->status == 'CLOSED')
                                    {{ $transaction->displayprofit }}
                                 @else
                                 <div id="app">
                                    <display-profit currency="€" :test_profit='{{ $transaction->displayprofit }}' :tnx_id='{{ $transaction->id }}' />
                                    @vite(['resources/css/app.css', 'resources/js/app.js'])
                                 </div>
                                 @endif
                              </td>

                              {{-- 
                                 <td data-id="{{ $transaction->id }}" class="random-numberP_{{ $transaction->id }}" style="font-size: 15px">
                                    @if ($transaction->buy_or_sell == 'topUp')
                                       - - -
                                    @elseif($transaction->type == 'deposit')
                                       0
                                    @else
                                       @if (is_numeric($transaction->t_p) == 1)
                                          @if ($transaction->t_p != 0)
                                             + {{ number_format((float)$transaction->t_p, 2, '.', '') }}
                                          @else
                                             {{ $transaction->t_p }}
                                          @endif
                                       @else
                                          {{ $transaction->t_p }}
                                       @endif
                                    @endif
                                 </td>
                                 
                                 <td data-id="{{ $transaction->id }}" class="random-numberL_{{ $transaction->id }}" style="font-size: 15px">
                                    @if ($transaction->buy_or_sell == 'topUp')
                                       - - -
                                    @elseif($transaction->type == 'deposit')
                                       0
                                    @else
                                       @if (is_numeric($transaction->s_l) == 1)
                                          @if ($transaction->s_l != 0)
                                             - {{ number_format((float)$transaction->s_l, 2, '.', '') }}
                                          @else
                                             {{ $transaction->s_l }}
                                          @endif
                                       @else
                                          {{ $transaction->s_l }}
                                       @endif
                                    @endif
                                 </td>

                                 <script>
                                    var randomNumberUrl = "{{ route('random_number') }}";
                                    var useId = $('.random-numberP_{{ $transaction->id }}');

                                    function fetchRandomNumber(id) {
                                       $.ajax({
                                          url: randomNumberUrl,
                                          type: 'GET',
                                          data: { id:id },
                                          success: function(response) {
                                             if(response){
                                                var randomNumberElement_P = $('.random-numberP_' + response.trade_id);
                                                var randomNumberElement_L = $('.random-numberL_' + response.trade_id);
                                                // randomNumberElement_P.html('+ ' + response.data.last_generated_profit);

                                                randomNumberElement_P.fadeOut(400, function() {
                                                   $(this).html('+ ' + response.data.last_generated_profit).fadeIn(400);
                                                });
                                                randomNumberElement_L.html('0');

                                                // if(response.data_type == 'both'){
                                                // }else{
                                                //    randomNumberElement_L.html('- ' + response.data.last_generated_loss);
                                                //    randomNumberElement_P.html('0');
                                                // }
                                             }else{
                                                
                                             }
                                             
                                          },
                                          error: function() {
                                             // $('.random-numberP').html('Error fetching data.');
                                          }
                                       });
                                    }
                                    function fetchRandomNumber_loss(id) {
                                       $.ajax({
                                          url: randomNumberUrl,
                                          type: 'GET',
                                          data: { id:id },
                                          success: function(response) {
                                             if(response){
                                                var randomNumberElement_L = $('.random-numberL_' + response.trade_id);
                                                var randomNumberElement_P = $('.random-numberP_' + response.trade_id);
                                                // randomNumberElement_L.html('- ' + response.data.last_generated_loss);

                                                randomNumberElement_L.fadeOut(400, function() {
                                                   $(this).html('- ' + response.data.last_generated_loss).fadeIn(400);
                                                });
                                                randomNumberElement_P.html('0');

                                                // if(response.data_type == 'both'){
                                                // }else{
                                                //    randomNumberElement_L.html('- ' + response.data.last_generated_loss);
                                                //    randomNumberElement_P.html('0');
                                                // }
                                             }else{
                                                
                                             }
                                             
                                          },
                                          error: function() {
                                             // $('.random-numberP').html('Error fetching data.');
                                          }
                                       });
                                    }

                                    function fetchData() {
                                       // Assume you have an array of IDs
                                       var ids = ["{{ $transaction->id }}"];

                                       ids.forEach(function(id) {
                                          fetchRandomNumber(id);
                                       });
                                    }
                                    function fetchData_loss(){
                                       var ids = ["{{ $transaction->id }}"];

                                       ids.forEach(function(id) {
                                          fetchRandomNumber_loss(id);
                                       });
                                    }
                                    
                                    
                                    function isWeekend() {
                                       var today = new Date();
                                       return today.getDay() === 0 || today.getDay() === 6;
                                    }

                                    // Usage
                                    if (isWeekend()) {
                                       // console.log("Today is a weekend day");
                                    } else {
                                       // var interval = 2000;
                                       // var counter = 0;

                                       // function runLogic(){
                                       //    var start_fetch = setInterval(fetchData, interval);

                                       //    setTimeout(function(){
                                       //       clearInterval(start_fetch);
                                       //       // console.log("Done");
                                       //       setInterval(fetchData_loss, interval);
                                       //    }, 6000);
                                       // }
                                       // runLogic();
                                    }
                                 </script>
                              
                              --}}

                              <td>
                                 @if ($transaction->status == 'topUp')
                                    - - -
                                 @elseif ($transaction->type == 'deposit')
                                    @if($transaction->status == 'CONFIRMED')
                                       <span class="badge bg-success text-light">CONFIRMED</span>
                                    @elseif($transaction->status == 'DECLINED')
                                       <span class="badge bg-danger text-light">DECLINED</span>
                                    @else
                                       <span class="badge bg-info text-light">{{ $transaction->status }}</span>
                                    @endif
                                 @else
                                    @if($transaction->status == 'ACTIVE')
                                       <span class="badge @if ($transaction->status == 'NOT PAID') bg-warning @elseif ($transaction->status == 'ACTIVE') bg-danger @else bg-success @endif text-light d-flex" style="align-items: center;">
                                          <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                                          {{ $transaction->status }}
                                       </span>
                                    @else
                                       <span class="badge @if ($transaction->status == 'NOT PAID') bg-warning @elseif ($transaction->status == 'ACTIVE') bg-danger @else bg-success @endif text-light">
                                          {{ $transaction->status }}
                                       </span>
                                    @endif
                                 @endif
                              </td>

                              @if (auth()->user()->close_trade == true)
                                 <td>
                                    @if($transaction->status == 'CLOSED')
                                       <p>CLOSED</p>
                                    @else
                                       @if($transaction->status == 'topUp' || $transaction->type == 'deposit')
                                          - - -
                                       @else
                                          <!-- Button trigger modal -->
                                          <!-- <button type="button" class="btn btn-sm btn-info px-3" data-bs-toggle="modal" data-bs-target="#closeTrade{{ $transaction->id }}">
                                          Close Trade
                                          </button> -->
                                       @endif

                                       <!-- Modal -->
                                       <div class="modal fade" id="closeTrade{{ $transaction->id }}" tabindex="-1" aria-labelledby="closeTrade{{ $transaction->id }}Label" aria-hidden="true">
                                          <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                <!-- <h5 class="modal-title" id="closeTrade{{ $transaction->id }}Label">Modal {{ $transaction->id }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                                </div>

                                                <div class="modal-body">
                                                   <p>Are you sure you want to close the trade - #A{{ date('Y') . $transaction->id }}?</p>

                                                   <div class="row pt-4">
                                                      <div class="col-md-6">
                                                         <form action="{{ route('close_trade_user') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="trans_id" value="{{ $transaction->id }}">

                                                            <div class="d-grid gap-2">
                                                            <button class="btn btn-success px-2" type="submit" data-bs-dismiss="modal">Yes</button>
                                                            </div>
                                                         </form>
                                                      </div>

                                                      <div class="col-md-6">
                                                         <div class="d-grid gap-2">
                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">No</button>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>

                                                <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button> -->
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    @endif
                                 </td>
                              @endif

                              <td>
                                 @if ($transaction->status == 'CLOSED')
                                    {{ $transaction->updated_at }}
                                 @else
                                    - - -
                                 @endif
                              </td>
                           </tr>
                        @endforeach
                     @endif
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
@endsection 