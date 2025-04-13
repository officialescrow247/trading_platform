@extends('new_design.app')
@section('content')
    <section class="px-4 rm_p_2">
        <div class="py-5 container-fluid px-5 rm_p_2">
            <h6 style="color: #fc5000;"><b>About us</b></h6>

            <div class="row pt-4">
                <div class="col-md-6 mb-4">
                    <div>
                        <h1 style="font-size: 90px;" class="my_f"><b>About us</b></h1>

                        <p class="pt-3" style="color: #6C7884;">
                            Spreadex Trade began life back in 2014, when we were known as Core Spreads. Building on our award-winning reputation for market leading low-cost spreads, we soon grew. And grew. From a single office back in the day, we’re now dotted around the globe - the UK, Australia and Bahamas to be exact.

                            <br><br>

                            We see many of our competitors promise the world but fail to deliver. In contrast, we treat our clients and colleagues with respect. For traders, this means transparent fees with no hidden costs or nasty surprises. For the people who work at Spreadex Trade, it’s the opportunity to grow with a fast-paced fintech firm that values ideas, creativity and enthusiasm.
                        </p>
                        <!-- <a href="{{ route('register') }}" class="btn px-5 mt-4 trade_now_btn rounded-pill py-3">Trade Now</a> -->
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <img src="https://images.prismic.io/tnfev2/feafb15b-027a-4182-9062-d2663301a2b7_BRAND+AboutUs+HeroImage1+1280x720_.png?auto=compress,format" alt="" class="img-fluid" style="border-radius: 30px;">

                    <div class="sc-f3a729c-7 jmYnBa">
                        <svg color="#fc5000" height="150" viewBox="0 0 81 161" style="position: absolute; right: 10%; margin-top: -30px;">
                            <path fill="#fc5000" d="M41.0174 0.785624L80.3818 79.0391L40.7013 160.811L0.280648 84.3565L41.0174 0.785624Z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container-fluid px-5 py-5 rm_p_2">
            <div class="d-none d-lg-block py-5" style="position: relative;">
                <div class="d-flex">
                    <div class="ps-2 col-md-7" style="background-color: #02070b; color: white; border-radius: 40px 0px 0px 40px; position: relative; left: 1%; background-image: '{{ asset('imgs/tr_v.svg') }}'">
                        <div class="p-5" >
                            <h2 style="font-size: 50px;" class="pt-3" id="regulations"><b>Regulations</b></h2>
                            <p class="py-3" style="color: #D7D7D7;">
                                <b>
                                    Our commitment to providing all traders with a fair deal is more than just a promise. We’re reliably regulated by some of the world’s most respected financial governing bodies. We abide by the highest standards and strict laws that govern the markets you trade in. Whether you’re a seasoned trader or a new starter, you can count on us for all the support you need to help you trade in a way that works best for you.
                                </b>
                            </p>
    
                            <p>
                                <svg style="width: 12px;" focusable="false" aria-hidden="true" viewBox="0 0 12 18"><path fill="#F0690B" d="M5.89743 0.000244141L12.0266 8.71351L6.3114 18.0002L0.0289911 9.49167L5.89743 0.000244141Z"></path></svg>
                                <span class="ps-2">UK - <a href="https://www.fca.org.uk/">Financial Conduct Authority</a></span>
                            </p>
    
                            <p class="">
                                <svg style="width: 12px;" focusable="false" aria-hidden="true" viewBox="0 0 12 18"><path fill="#F0690B" d="M5.89743 0.000244141L12.0266 8.71351L6.3114 18.0002L0.0289911 9.49167L5.89743 0.000244141Z"></path></svg>
                                <span class="ps-2">Australia - <a href="https://asic.gov.au/">Australian Securities and Investments Commissions</a></span>
                            </p>
    
                            <p class="">
                                <svg style="width: 12px;" focusable="false" aria-hidden="true" viewBox="0 0 12 18"><path fill="#F0690B" d="M5.89743 0.000244141L12.0266 8.71351L6.3114 18.0002L0.0289911 9.49167L5.89743 0.000244141Z"></path></svg>
                                <span class="ps-2">Bahamas - <a href="https://www.scb.gov.bs/">Securities Commission of the Bahamas</a></span>
                            </p>
                        </div>
                    </div>
    
                    <div class="col-md-7" style="position: relative; right: 20%; z-index: -1;">
                        <img src="https://images.prismic.io/tnfev2/MTJhOTA0YjctNzc1Ny00M2Q2LTlkODYtYWI5MTAyMjk2ZDg2_7cb2de61-a471-4dcd-a7ea-f7bdcf2ebd9b_brand-aboutus-londonskyline-pjc1500px.jpg?auto=compress,format&rect=0,0,1500,1000&w=1500&h=1000" alt="" class="img-fluid h-100" style="border-radius: 0px 40px 40px 0px;">
                    </div>
                </div>
                <svg style="position: absolute; top: -40px; right: 150px;" width="81" height="161" viewBox="0 0 81 161" fill="none" xmlns="http://www.w3.org/2000/svg" class="sc-e2a5340d-9 cLZAuh"><path d="M41.0174 0.785624L80.3818 79.0391L40.7013 160.811L0.280648 84.3565L41.0174 0.785624Z" fill="#fc5000"></path></svg>
            </div>

            <div class="ps-2 col-md-7 d-lg-none d-md-block" style="background-color: #02070b; color: white; border-radius: 40px;">
                <div class="px-2 py-5">
                    <h2 style="font-size: 50px;" class="pt-3" id="regulations_"><b>Regulations</b></h2>
                    <p class="py-3" style="color: #D7D7D7;">
                        <b>
                            Our commitment to providing all traders with a fair deal is more than just a promise. We’re reliably regulated by some of the world’s most respected financial governing bodies. We abide by the highest standards and strict laws that govern the markets you trade in. Whether you’re a seasoned trader or a new starter, you can count on us for all the support you need to help you trade in a way that works best for you.
                        </b>
                    </p>

                    <p>
                        <svg style="width: 12px;" focusable="false" aria-hidden="true" viewBox="0 0 12 18"><path fill="#F0690B" d="M5.89743 0.000244141L12.0266 8.71351L6.3114 18.0002L0.0289911 9.49167L5.89743 0.000244141Z"></path></svg>
                        <span class="ps-2">UK - <a href="https://www.fca.org.uk/">Financial Conduct Authority</a></span>
                    </p>

                    <p class="">
                        <svg style="width: 12px;" focusable="false" aria-hidden="true" viewBox="0 0 12 18"><path fill="#F0690B" d="M5.89743 0.000244141L12.0266 8.71351L6.3114 18.0002L0.0289911 9.49167L5.89743 0.000244141Z"></path></svg>
                        <span class="ps-2">Australia - <a href="https://asic.gov.au/">Australian Securities and Investments Commissions</a></span>
                    </p>

                    <p class="">
                        <svg style="width: 12px;" focusable="false" aria-hidden="true" viewBox="0 0 12 18"><path fill="#F0690B" d="M5.89743 0.000244141L12.0266 8.71351L6.3114 18.0002L0.0289911 9.49167L5.89743 0.000244141Z"></path></svg>
                        <span class="ps-2">Bahamas - <a href="https://www.scb.gov.bs/">Securities Commission of the Bahamas</a></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="p-2">
                        <img src="https://images.prismic.io/tnfev2-stage/ff197745-7aea-4d19-9b60-3da06934b9ba_BRAND+AboutUs+Signal+centre1+TeaserImage+1500x1000.png?auto=compress,format" alt="" class="img-fluid mt-5">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="p-2">
                        <h1 style="font-size: 55px;"><b>Our community</b></h1>
                        <p>
                            We have a busy presence across all the big social media platforms - come find us @itstradenation. And, while we love cute animal posts, our channels will provide you with information on reactive market news and trading commentary rather than pictures of friendly, fluffy things. <br><br>

                            At the heart of our social community, you’ll find our resident trading expert, David Morrison. Knowledgeable, experienced and straightforward, David offers up market insight and expertise on all kinds of trading topics. From getting the most out of our proprietary platform to planning your next trading strategy, David is your go-to-guru (our words, not his). <br><br>

                            Our traders like to get in on the act too. An active online community sees a lively exchange of ideas, views and questions. It’s a great place to be part of and we’re delighted we’re a place many traders consider their true trading home.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background-color: #F5F3F2;">
        <div class="container p-5">
            <div class="row">
                <div class="col-md-6">
                    <svg width="25" height="48" viewBox="0 0 25 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.7949 0L24.0709 23.2354L12.6594 47.9998L0.0772733 25.3105L11.7949 0Z" fill="#513799"></path></svg>
                    <h2 class="pt-3" style="font-size: 43px;" id="our-sponsorships"><b>Our sponsorships</b></h2>
                    <p class="pt-4">
                        We’re proud of the partners we work with. They’re a reflection of our ambition, values and spirit.
                    </p>
                </div>

                <div class="col-md-6">
                    <svg width="25" height="48" viewBox="0 0 25 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.7949 0L24.0709 23.2354L12.6594 47.9998L0.0772733 25.3105L11.7949 0Z" fill="#4DAD92"></path></svg>
                    <h2 class="pt-3" style="font-size: 43px;" id="charity-causes"><b>Charity causes</b></h2>
                    <p class="pt-4">
                        We’re always keen to help out where we can and are proud to have done so for a number of deserving causes. We were delighted to contribute well over £20,000 in sponsorship and charity donations in 2022 alone.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="py-5 container rm_p_2">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h3 style="font-size: 43px;"><b>Wolverhampton <br> Wanderers </b></h3>
                    <p class="pt-3">
                        We’re thrilled to be the official FX trading partner of Premier League club, Wolverhampton Wanderers. This relationship also extends to being the official partner of Wolves Women too. <br><br>

                        We’re committed to supporting the club beyond just their on-field performance, and work with their foundation to support fundraising efforts throughout the season. <br><br>

                        As part of the Wolves family, we share their values of determination and progressive thinking when it comes to providing the best possible trading experience for our clients.
                    </p>
                </div>

                <div class="col-md-6 mb-4">
                    <img src="https://images.prismic.io/tnfev2/12e782c9-27f5-48c4-bc71-92f78a46cafd_BRAND+AboutUs+Wolves+Teaser+Image+NEW+1500+x+1000.jpg?auto=compress,format" alt="" class="img-fluid">
                </div>

                <div class="col-md-6 mt-5 mb-4">
                    <img src="https://images.prismic.io/tnfev2/efa097cf-accf-4074-8a39-e8c219c9fe09_BRAND+AboutUs+SS+Teaser+Image+NEW+1500+x+1000.jpg?auto=compress,format" alt="" class="img-fluid">
                </div>

                <div class="col-md-6 mt-5 mb-4">
                    <h3 class="pt-4" style="font-size: 43px;"><b>Somerset County Cricket</b></h3>
                    <p class="pt-3">
                        We’re proud to be a principal sponsor Somerset Cricket Club, a long established team with an equally strong history of achievements. In addition to supporting the first eleven and other elite-level teams, we sponsor the Somerset Cricket Foundation for boys and girls, helping to ensure that future generations of Somerset players have every opportunity to succeed.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="px-4 container py-5 rm_p_2">
            <div class="rm_p_2 border rounded p-5">
                <div class="d-flex" style="align-items: center;">
                    <svg width="25" height="48" viewBox="0 0 25 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.7949 0L24.0709 23.2354L12.6594 47.9998L0.0772733 25.3105L11.7949 0Z" fill="#3ead92"></path></svg>
                    <span class="pt-2 ps-3">
                        <h3 style="font-size: 40px;" id="careers"><b>Careers</b></h3>
                    </span>
                </div>
                <p class="pt-4">
                    We know that a team is only as good as the people who make it up. Everyone brings something different to the party – and everyone is respected for their individual skills and who they are. But we all have one thing in common: a shared passion and commitment to making things better. <br><br>

                    We welcome the curious, the creative, the visionaries, the makers and doers. Everyone has a place here – as long as you want to make a difference. <br><br>

                    That’s what’s fuelled our growth. But we’re not where we want to be yet. We have big plans and a clear purpose. And you could be the person that helps us reach that next stage of development. <br><br>

                    So if you’d like to work at the cutting edge of fintech with a smashing bunch of people who you can inspire and learn from, get in touch today – and take your first step towards a great career at Spreadex Trade.
                </p>
            </div>
        </div>
    </section>
@endsection