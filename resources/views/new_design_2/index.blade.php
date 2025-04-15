@extends('new_design_2.layouts.app')
@section('content')
    <div style="background-color: #000;">
        <section class="welcome_d d-none d-lg-block">
            <div class="container" id="harness_the_power">
                <h1 class="_dess kanit_thin_font">Harness the power</h1>
                <p class="text-light _dessw kanit_thin_font">of unreal spreads</p>
                <p class="text-light _dess_w kanit_thin_font">
                    Get low-cost fixed spreads when you trade <br> with TN Trade. 
                    That means when the <br> markets move, your spreads won't.
                </p>
                <img src="{{ asset('adv.avif') }}" class="adv">
            </div>
        </section>

        <section id="nvp_">
            {{-- for mobile start --}}
            <div class="container d-lg-none" id="harness_the_power">
                <h1 class="kanit_thin_font" style="font-size: 40px;"><span style="color: rgb(4, 227, 216);">Harness the power</span> <br /> of unreal spreads </h1>
                
                <p class="text-light _dess_w kanit_thin_font">
                    Get low-cost fixed spreads when you trade with TN Trade. 
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
                        Other brokers offer variable spreads but with TN Trade's low-cost fixed <br>
                        spreads, when the markets move, your costs don't.
                    </p>

                    <p>
                        It's no wonder we're the pioneers of trust, value and transparency in trading. <br>
                    </p>
                    
                    <p>
                        So, no matter how experienced you are at trading, you can thrive at TN Trade.
                    </p>

                    <p class="pt-3" style="font-size: 25px; color: #fc5000;"><b>And that's what makes us unreal.</b></p>

                    <div style="display: flex;" class="justify-content-center pt-5"><div class="hrr"></div></div>
                </div>

                <div class="pt-3 d-lg-none">
                    <p class="px-1">
                        Other brokers offer variable spreads but with TN Trade's low-cost fixed
                        spreads, when the markets move, your costs don't.
                        
                        It's no wonder we're the pioneers of trust, value and transparency in trading.
                        So, no matter how experienced you are at trading, you can thrive at TN Trade.
                    </p>

                    <p style="font-size: 25px; color: #fc5000;"><b>And that's what makes us unreal.</b></p>
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

                        <h6 class="pt-4"><b>TN Trader</b></h6>
                        <p style="font-size: 25px;" class="inter"><b>Your streamlined, powerful, low-cost way to trade global markets</b></p>
                        <p class="inter">
                            Harness TN Trader to smash your trading goals across desktop and mobile with smart tools like our daily report, chart features, and signal centre. <br><br>

                            Plus, integrate TradingView with TN Trader, TN Trade's award-winning platform, to get the best of both worlds - ultra low-cost fixed spreads + supercharged supercharts.
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

        <section class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="https://images.prismic.io/tnfev2/Z8bzHhsAHJWomGAk_%5Bmobile%5DHome-Aston-Villa-Background-Update-March2025.png?auto=format%2Ccompress&fit=max&w=1920" 
                        alt="" class="img-fluid" />
                </div>

                <div class="col-md-6 pt-5">
                    <div class="d-flex justify-content-center">
                        <div class="text-center w-75 pt-5">
                            <h1>The perfect <br> <b>partnership</b></h1>
                            <p class="pb-5">
                                We align ourselves with others at the top of their game. 
                                That’s why we’re proud to be Principal Partners of Aston Villa Football Club.
                            </p>
                            <img src="https://images.prismic.io/tnfev2/ZmAv8Zm069VX1eJY_Group.png?auto=format%2Ccompress%3Fauto%3Dcompress%2Cformat&fit=max&w=3840" 
                            alt="" class="img-fluid" style="width: 100px;">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="unreal_t">
            <div class="outer">
                <div class="inner">
                    <div class="inter text-center">
                        <p class="kanit_thin_font" style="font-size: 50px; line-height: 50px;">
                            Ready for an <b> unreal <br> trading experience? <br><br></b>
                        </p>
                        
                        <p style="font-size: 20px;" class="p-0 m-0 js_">
                            Power up your trading with TN Trade today.
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