@extends('new_design.app')
@section('content')
    <section class="px-4 rm_p_2">
        <div class="py-5 container-fluid px-5 rm_p_2">
            <h6 style="color: #EE4E08;"><b>Trading</b></h6>

            <div class="row pt-4">
                <div class="col-md-6 mb-4">
                    <div>
                        <h1 class="my_f" style="font-size: 90px;"><b>Why trade <br> with us?</b></h1>

                        <p class="pt-3" style="color: #6C7884;">
                            With us, you get some of the best-priced fixed spreads across the <a href="http://">markets</a> you most want to trade. With zero commission and no hidden fees to worry about, you’re free to trade your favourite markets and keep a lid on costs.
                        </p>
                        <p class="pt-2" style="color: #6C7884;">
                            A range of powerful <a href="#!">trading tools</a> - from independent insights to your own real-time news feed - delivers a real competitive edge. And with our friendly, knowledgeable 24 hours, Monday to Friday Customer Success team in your corner, you’re all set to trade. 
                        </p>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <img src="https://images.prismic.io/tnfev2/d0bd9fc9-be5b-466d-9534-4ad0419c8271_BRAND++WhyTradeWithUs+HeroImage+1280x720.png?auto=compress,format" alt="" class="img-fluid" style="border-radius: 30px;">

                    <div class="sc-f3a729c-7 jmYnBa">
                        <svg color="#FC5000" height="67" viewBox="0 0 81 161" style="position: absolute; right: 10%; margin-top: -30px;">
                            <path fill="#EE4E08" d="M41.0174 0.785624L80.3818 79.0391L40.7013 160.811L0.280648 84.3565L41.0174 0.785624Z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5" id="fixed-spread-trading">
            <div class="p-5 border" style="border-radius: 20px;">
                <div class="d-flex" style="align-items: center;">
                    <svg color="#FC5000" height="67" viewBox="0 0 81 161">
                        <path fill="#EE4E08" d="M41.0174 0.785624L80.3818 79.0391L40.7013 160.811L0.280648 84.3565L41.0174 0.785624Z"></path>
                    </svg>
                    <h1 style="font-size: 40px;" class="my_f ps-4"><b>Fixed spread trading</b></h1>
                </div>
                <p class="pt-4">
                    To keep trading costs as low as possible, we offer some of the narrowest fixed spreads around. Unlike variable spreads elsewhere, they won’t change at a moment’s notice in response to a market move.  You’ll always know up-front what your trading costs will be. So you can avoid nasty surprises. 
                </p>
            </div>

            <div class="mt-5 p-5 border" style="border-radius: 20px;" id="cfd-trading">
                <div class="d-flex" style="align-items: center;">
                    <svg color="##EE4E07" height="67" viewBox="0 0 81 161">
                        <path fill="#4DAD92" d="M41.0174 0.785624L80.3818 79.0391L40.7013 160.811L0.280648 84.3565L41.0174 0.785624Z"></path>
                    </svg>
                    <h1 style="font-size: 40px;" class="ps-4"><b>CFD trading</b></h1>
                </div>
                <p class="pt-4">
                    To keep trading costs as low as possible, we offer some of the narrowest fixed spreads around. Unlike variable spreads elsewhere, they won’t change at a moment’s notice in response to a market move.  You’ll always know up-front what your trading costs will be. So you can avoid nasty surprises. 
                </p>
            </div>

            <div class="mt-5 p-5 border" style="border-radius: 20px;" id="negative-balance-protection">
                <div class="d-flex" style="align-items: center;">
                    <svg color="##EE4E07" height="67" viewBox="0 0 81 161">
                        <path fill="#513799" d="M41.0174 0.785624L80.3818 79.0391L40.7013 160.811L0.280648 84.3565L41.0174 0.785624Z"></path>
                    </svg>
                    <h1 style="font-size: 40px;" class="ps-4"><b>Negative balance protection</b></h1>
                </div>
                <p class="pt-4">
                    As further protection, should your account fall into arrears, we will automatically bring the balance up to zero*. This prevents you from losing more money than is actually in your account at any given time, whether you’re trading fixed spreads or CFDs.
                    <br><br>
                    *Sorry, we can’t do this for professional traders.
                </p>
            </div>
        </div>
    </section>
@endsection