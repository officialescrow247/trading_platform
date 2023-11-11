@extends('new_design.app')
@section('content')
    <section class="px-4 rm_p_2">
        <div class="py-5 container-fluid px-5 rm_p_2">
            <h6 style="color: #EE4E08;"><b>Markets</b></h6>

            <div class="row pt-4">
                <div class="col-md-6 mb-4">
                    <div>
                        <h1 style="font-size: 90px;" class="my_f"><b>Our <br> platform</b></h1>

                        <p class="pt-3" style="color: #6C7884;">
                            Put simply, our unique <a href="#!">proprietary platform</a> is Made to Trade.
                            <br><br>
                            Easy to access and intuitive to use, it puts you in pole position when it comes to trading the markets you love most. 
                            <br><br>
                            All the while keeping risks and costs firmly under control. Throw in unrivalled customer support and expert market insights, and you’re all set for success. 
                        </p>
                        <a href="{{ route('register') }}" class="btn px-5 mt-4 trade_now_btn rounded-pill py-3">Trade Now</a>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <img src="https://images.prismic.io/tnfev2/880f6976-b75b-4253-92ed-35695aab1ada_BRAND+OurPlatforms+HeroImage2+HeroImage+1280x720.png?auto=compress,format" alt="" class="img-fluid" style="border-radius: 30px;">

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
        <div class="container pb-5">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="p-4">
                        <!-- <img src="https://images.prismic.io/tnfev2/ZTY0MTRjMzctNmUyNS00YjMwLTlhYWQtMmVlZTI2ODk5MzA0_9dc829c8-7fd1-4bd5-8d09-5cc0540d5567_icon231-64x64.png?auto=compress,format&rect=0,0,64,64&w=64&h=64" alt="" srcset=""> -->
                        
                        <h3 class="pb-3">Low Fixed Spreads<b></b></h3>
                        <p>
                            Our fixed spreads mean you’ll always know how much your trading costs will be – whatever the market does.
                        </p>
                    </div>
                </div>

                <!-- <div class="col-md-4">
                    <div class="p-4">
                        <img src="https://images.prismic.io/tnfev2/M2EwZjQ5ZDEtN2U3OS00YWVhLThiN2UtZDZiYjU3YjZkYzAz_28c94ebb-4631-42cb-b38a-20dd86a848bb_icon232-64x64.png?auto=compress,format&rect=0,0,64,64&w=64&h=64" alt="" srcset="">
                        
                        <h3 class="pb-3 pt-5">No Minimum Deposit<b></b></h3>
                        <p>
                            We won’t ask for a set deposit before you’re able to make a trade.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4">
                        <img src="https://images.prismic.io/tnfev2/Nzg3MmQ1YTEtNzBkNy00OTQ4LThlY2UtMzQxOWI5MWZiNDQ1_243bd5be-86b8-4d9d-aca9-9e3cf7272947_icon233-64x64.png?auto=compress,format&rect=0,0,64,64&w=64&h=64" alt="" srcset="">
                        
                        <h3 class="pb-3 pt-5">Free Withdrawals<b></b></h3>
                        <p>
                            Unlike some platforms, we don't charge when you make a withdrawal.
                        </p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid p-5 rm_p_2">
            <div class="row">
                <div class="col-md-6 mb-5" id="metatrader-4">
                    <img src="https://images.prismic.io/tnfev2/3230c8cf-0ef5-40cd-a06b-3054752912fa_BRAND+TradingTools+Device5+TeaserImage+1500x1000.png?auto=compress,format" alt="" class="img-fluid">
                </div>

                <div class="col-md-6 mb-5">
                    <h3 style="font-size: 40px;" id="indices"><b>MetaTrader 4 </b></h3>
                    <p class="pt-4">
                        You also have the option to use the popular platform <a href="#!">MetaTrader 4</a>. Better known as MT4, the platform lets you trade CFDs across a wide range of markets, from <a href="#!">forex</a> and indices to equities and commodities. When you sign up with us, you can choose whether you trade on MT4 or our proprietary platform. For those of you who can't decide, there's no need to - you can trade on both!
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection