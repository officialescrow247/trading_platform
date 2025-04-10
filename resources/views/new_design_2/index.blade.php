@extends('new_design_2.layouts.app')
@section('content')
    <div style="background-color: #050F19;">
        <section class="welcome_d d-none d-lg-block">
            <div class="container" id="harness_the_power">
                <h1 class="_dess kanit_thin_font">Harness the power</h1>
                <p class="text-light _dessw kanit_thin_font">of unreal spreads</p>
                <p class="text-light _dess_w kanit_thin_font">
                    Get low-cost fixed spreads when you trade <br> with Spreadex Trade. 
                    That means when the <br> markets move, your spreads won't.
                </p>
                
                <p>
                    Rated EXCELLENCE ON TRUSTPILOT <img src="data:image/png;base64,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" alt="" srcset="">
                </p>
            </div>
        </section>

        <section id="nvp_">
            {{-- for mobile start --}}
            <div class="container d-lg-none" id="harness_the_power">
                <h1 class="kanit_thin_font" style="font-size: 40px;"><span style="color: rgb(4, 227, 216);">Harness the power</span> <br /> of unreal spreads </h1>
                
                <p class="text-light _dess_w kanit_thin_font">
                    Get low-cost fixed spreads when you trade with Spreadex Trade. 
                    That means when the markets move, your spreads won't.
                </p>
                <img src="{{ asset('adv.avif') }}" class="adv">
            </div>
            {{-- for mobile end --}}
        </section>

        <section class="so_ text-center">
            <div class="collapse collapse-horizontal pb-4" id="joi_s">
                <video id="joi_s_video" src="https://tnfev2.cdn.prismic.io/tnfev2/Zmc0i5m069VX1m_j_TN-HomepageVideoAV-16x9-V9.mp4" preload="auto" controls style="width: 100%; height: 100%;" playsinline webkit-playsinline x5-playsinline></video>
                <hr>
            </div>

            <div class="ds_ww" data-bs-toggle="collapse" data-bs-target="#joi_s" aria-expanded="false" aria-controls="joi_s">
                <p>
                    <b>Watch: Powering markets and smashing goals with Aston Villa Football Club</b>
                </p>
            </div>
        </section>

        <section>
            <div class="container pt-5 text-center text-light dsq_">
                <h3 class="pt-5">Meet the <b class="kanit_thin_font">game changers</b></h3>

                <div class="pt-3 d-none d-lg-block">
                    <p>
                        Other brokers offer variable spreads but with Spreadex Trade's low-cost fixed <br>
                        spreads, when the markets move, your costs don't.
                    </p>

                    <p>
                        It's no wonder we're the pioneers of trust, value and transparency in trading. <br>
                    </p>
                    
                    <p>
                        So, no matter how experienced you are at trading, you can thrive at Spreadex Trade.
                    </p>
                    rgb(4, 227, 216)

                    <p class="pt-3" style="font-size: 25px; color: #04e3d8;"><b>And that's what makes us unreal.</b></p>

                    <div style="display: flex;" class="justify-content-center pt-5"><div class="hrr"></div></div>
                </div>

                <div class="pt-3 d-lg-none">
                    <p class="px-1">
                        Other brokers offer variable spreads but with Spreadex Trade's low-cost fixed
                        spreads, when the markets move, your costs don't.
                        
                        It's no wonder we're the pioneers of trust, value and transparency in trading.
                        So, no matter how experienced you are at trading, you can thrive at Spreadex Trade.
                    </p>

                    <p style="font-size: 25px; color: #04e3d8;"><b>And that's what makes us unreal.</b></p>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="py-5 text-light">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ok_">
                            <h3 class="kanit_thin_font">
                                <b>Play the long game.</b>
                            </h3>
                            <p class="oks_ inter">
                                And the short
                            </p>
                            
                            <p class="inter">
                                We have unparalleled spread trading and CFD trading <br class="d-none d-lg-none"> 
                                expertise and 1000's of markets are waiting for you - so we <br class="d-none d-lg-none"> 
                                help you trade your way.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 c_d pt-5">
                        <div class="text-light">
                            <div class="row">
                                <div class="col-6 mb-4">
                                    <div>
                                        <img src="https://images.prismic.io/tnfev2/ZkX7biol0Zci9M_t_home-icon-1.png?auto=compress%2Cformat&fit=max&w=1920" alt="" class="img-fluid w-50">
    
                                        <div class="pt-4 inter">
                                            <p style="font-size: 25px;" class="text-light"><b>Forex</b></p>
                                            <p>The buying and selling of global currencies</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-6 mb-4">
                                    <div>
                                        <img src="https://images.prismic.io/tnfev2/ZkX7biol0Zci9M_u_home-icon-2.png?auto=compress%2Cformat&fit=max&w=1920" alt="" class="img-fluid w-50">
    
                                        <div class="pt-4 inter">
                                            <p style="font-size: 25px;" class="text-light"><b>Commodities</b></p>
                                            <p>The exchange of raw goods that fuel the globe</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 mb-4">
                                    <div>
                                        <img src="https://images.prismic.io/tnfev2/ZkX7VSol0Zci9M_o_home-icon-three.png?auto=compress%2Cformat&fit=max&w=1920" alt="" class="img-fluid w-50">
    
                                        <div class="pt-4 inter">
                                            <p style="font-size: 25px;" class="text-light"><b>Indices</b></p>
                                            <p>Tracking the financial world's market titans</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-6 mb-4">
                                    <div>
                                        <img src="https://images.prismic.io/tnfev2/ZkX7VSol0Zci9M_n_home-icon-4.png?auto=compress%2Cformat&fit=max&w=1920" alt="" class="img-fluid w-50">
    
                                        <div class="pt-4 inter">
                                            <p style="font-size: 25px;" class="text-light"><b>Shares</b></p>
                                            <p>Bite-sized pieces of companies</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="okF_">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <img src="ZkxUjSol0Zci9TtX_Phone-hand-2-.avif" class="okF_img">
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div>
                            <div class="ok_ text-light pt-5">
                                <h3 class="kanit_thin_font">
                                    <b>Seamless trading</b> from <br>
                                    the palm of your hand
                                </h3>
                                <p class="oks_ inter">
                                    And the short
                                </p>
                                
                                <p class="inter pb-3">
                                    Smash your trading goals on desktop or mobile with powerful <br> tools like our daily report, chart features, and signal centre.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container py-5">
            <div class="row vf_">
                <div class="col-md-8">
                    <div>
                        <h3 style="font-size: 45px;" class="inter"><b>Trade smarter,</b> your way</h3>
                    </div>
                </div>

                <div class="col-md-4">
                </div>
            </div>

            <div class="row pt-5">
                <div class="col-md-6 mb-3">
                    <div>
                        <img src="https://images.prismic.io/tnfev2/Zmzyq5m069VX1xqS_TNTrader.png?auto=format%2Ccompress%3Fauto%3Dcompress%2Cformat&fit=max&w=384" class="w-100 img-fluid">

                        <h6 class="pt-4"><b>SpreadEx Trader</b></h6>
                        <p style="font-size: 25px;" class="inter"><b>Your streamlined, powerful, low-cost way to trade global markets</b></p>
                        <p class="inter">
                            Harness SpreadEx Trader to smash your trading goals across desktop and mobile with smart tools like our daily report, chart features, and signal centre. <br><br>

                            Plus, integrate TradingView with SpreadEx Trader, Spreadex Trade's award-winning platform, to get the best of both worlds - ultra low-cost fixed spreads + supercharged supercharts.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div>
                        <img src="https://images.prismic.io/tnfev2/Zmzyu5m069VX1xqT_MT4.png?auto=format%2Ccompress%3Fauto%3Dcompress%2Cformat&fit=max&w=384" class="w-100 img-fluid">

                        <h6 class="pt-4"><b>MT4</b></h6>
                        <p style="font-size: 25px;" class="inter"><b>Trade global financial markets better with a simplified, seamless experience</b></p>
                        <p class="inter">
                            Trade across hundreds of global markets with the popular MetaTrader4, the platform traders around the world trust. <br><br>

                            You can also copy the best strategies in real-time and learn from an expert community of global traders with our copy trading app, <a href="https://tradenation.com/tradecopier/" class="text-light">TradeCopier</a>.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="trade_like_a_boss">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ps-5 remove-l-p">
                            <div class="ps-5 inter remove-l-p">
                                <h1 style="font-size: 45px;">Trade <strong>like a boss</strong></h1>

                                <p class="inter" style="font-size: 20px;">
                                    Sharpen your skills or learn brand new ones <br> with our detailed and easy-to-follow resources. 
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <img src="https://images.prismic.io/tnfev2/ZkXoiiol0Zci9Mv-_tn-trade-like-a-boss.png?auto=compress%2Cformat&fit=max&w=1920" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        {{-- <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7">
                        <img src="{{ asset('_home-mobile-av-banner.avif') }}" alt="" class="img-fluid">
                    </div>
                    
                    <div class="col-md-5 pt-5">
                        <div class="sg_ text-center pe-5 pt-5">
                            <div class="inter pe-5 pt-5">
                                <h1 style="font-size: 44px;">The <strong>perfect</strong> <br> partnership</h1>

                                <p class="inter" style="font-size: 18px;">
                                    We align ourselves with others at the top of their <br> 
                                    game. That's why we're proud to be Principal <br> 
                                    Partners of Aston Villa Football Club.
                                </p>
                            </div>

                            <div class="pt-5">
                                <img src="https://images.prismic.io/tnfev2/ZmAv8Zm069VX1eJY_Group.png?auto=format%2Ccompress%3Fauto%3Dcompress%2Cformat&fit=max&w=1920" class="img-fluid" style="width: 150px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <section id="unreal_t">
            <div class="outer">
                <div class="inner">
                    <div class="inter text-center">
                        <p class="kanit_thin_font" style="font-size: 50px; line-height: 50px;">
                            Ready for an <b> unreal <br> trading experience? <br><br></b>
                        </p>
                        
                        <p style="font-size: 20px;" class="p-0 m-0 js_">
                            Power up your trading with Spreadex Trade today.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <div class="hrr w-100"></div>
    </div>

    <script>
        document.querySelector('.ds_ww').addEventListener('click', function() {
            var video = document.getElementById('joi_s_video');
            video.loop = true; // Enable looping
            
            // Wait for the collapse animation to complete before playing the video
            var collapseElement = document.getElementById('joi_s');
            collapseElement.addEventListener('shown.bs.collapse', function () {
                video.play();
            });
        });
    </script>
@endsection