<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="robots" content="noindex">
        <meta name="googlebot" content="noindex">
        <meta name="googlebot-news" content="nosnippet">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ env('APP_NAME') }}</title>
        <link rel="icon" href="https://tnfev2.cdn.prismic.io/tnfev2/76a4e3dc-43ad-4b62-a157-a4feba9bf285_Logo.svg" sizes="16x16" type="image/png">

        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

        <link rel="stylesheet" href="{{ asset('/css/bootstrap_2.css') }}">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

        <!-- <style>
            .tp-star__canvas, .tp-star__canvas--half{
                fill: green;
            }
            @media screen and (max-width: 400px) {
                .footer_star{
                    display: none;
                }
            }
            .underline {
                text-decoration-line: underline;
            }
            .text-gray-700 {
                --tw-text-opacity: 1;
                color: rgb(55 65 81 / var(--tw-text-opacity));
            }
            .text-gray-600 {
                --tw-text-opacity: 1;
                color: rgb(75 85 99 / var(--tw-text-opacity));
            }
            .text-sm {
                font-size: .875rem;
                line-height: 1.25rem;
            }
            .rounded-md {
                border-radius: 0.375rem;
            }
            .shadow-md {
                --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / .1), 0 2px 4px -2px rgb(0 0 0 / .1);
                --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow);
            }
            .block {
                display: block;
            }
            .font-medium {
                font-weight: 500;
            }
            .text-sm {
                font-size: .875rem;
                line-height: 1.25rem;
            }
            .w-full {
                width: 100%;
            }
            body{
                background-color: #000000;
            }
            .bg-img-d1, .bg-img-d2{
                position: fixed;
                top: 0;
                z-index: -1;
                filter: brightness(0) invert(1);
            }
            .bg-img-d1{
                left: -50px;
            }
            .bg-img-d2{
                right: -50px;
            }
        </style> -->

        <style>
            body{
                font-family: 'Montserrat', sans-serif !important;
            }
            .login_1{
                background: #fff url('{{ asset("imgs/login-0ef50f376a19aad6c9f31f0adcd36679.png") }}');
                height: 65vh;
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
            }
            
            .login_1 h2{
                background-color: #FFFFFF;
                color: #333;
                padding: 14px;
                width: fit-content;
                font-size: 55px;
                position: relative;
                left: 2%;
                bottom: -80%;
                padding: 0 40px;
                font-weight: 600;
            }

            .login_1 h3{
                background-color: #EF5B2D;
                color: #FFFFFF;
                padding: 14px;
                width: fit-content;
                font-size: 55px;
                position: relative;
                left: 2%;
                bottom: -80%;
                padding: 0 40px;
                font-weight: 600;
            }

            .login_btn{
                padding: 13px 50px;
            }

            .top_p{
                font-size: 11px;
            }

            main{
                margin-top: 130px !important;
            }

            .btn_trade {
                border: 1px solid #EE4E08;
                color: #EE4E08;
            }

            .btn_login:hover , .btn_trade:hover {
                border: 1px solid #EE4E08;
                background-color: #EE4E08;
                color: #fff !important;
            }

            .remove-px-5{
                padding-right: 3em !important;
                padding-left: 3em !important;
            }

            .cheange_this{
                text-decoration: none;
                font-size: 15px;
                color: #EE4E08;
            }

            a:hover{
                color: #EE4E08 !important;
            }

            .style_input {
                border: none;
                outline: none;
                box-shadow: none !important;
                border-bottom: 1px solid gray !important;
                padding: 10px 0 12px 0 !important;
                border-radius: 0% !important;
                background-color: transparent !important;
                padding-left: 10px !important;
            }

            h2.login_to_continue{
                font-weight: 300;
            }

            #ps {
                position: relative;
            }

            #ps .toggle-password {
                position: absolute;
                right: 5px;
                bottom: 30%;
            }

            .dropdown {
                display: none;
                position: absolute;
                top: 80%;
                /* left: 0; */
                background-color: #f9f9f9;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                transition: opacity 0.3s ease, visibility 0.3s ease;
            }

            .nav-item:hover .dropdown {
                display: block;
                max-height: 300px; /* Adjust the value as needed */
            }

            .nvt {
                padding: 30px 20px !important;
            }

            /* .nvt li {
                padding: 35px !important;
            } */


            @media screen and (max-width: 480px) {
                .remove-px-5{
                    padding-right: 0.8em !important;
                    padding-left: 0.8em !important;
                }

                .login_1{
                    height: 40vh;
                }
                
                .login_1 h2{
                    padding: 14px;
                    width: fit-content;
                    font-size: 45px;
                    padding: 10px 40px;
                    bottom: -60%;
                }

                .login_1 h3{
                    padding: 5px;
                    width: fit-content;
                    font-size: 43px;
                    padding: 10px 40px;
                    bottom: -60%;
                }

                .login_btn{
                    padding: 7px 40px;
                    margin-left: 0 !important;
                }
            }
        </style>
    </head>

    <body>
        <!-- <img src="https://crypto-tailwind.preview.uideck.com/images/shapes/hero-shape-1.svg" class="img-fluid bg-img-d1">
        <img src="https://crypto-tailwind.preview.uideck.com/images/shapes/hero-shape-2.svg" class="img-fluid bg-img-d2">

        <div class="container text-center">
            <a href="{{ url('/') }}" class="pt-5" style="display: flex; text-decoration: none; align-items: center; color: white; justify-content: center;">
                <img src="https://images.prismic.io/tnfev2/44587b9b-c476-4a96-a39e-788e0f04f5e5_HeaderLogoAnimated.gif" alt="site-logo" style="height: 40px;"> <h2 style="padding-left: 10px;">Trade Nation</h2>
            </a>
        </div> -->

        <div class="fixed-top">
            <div style="background-color: #F7F7F7;" class="border border-top-0 border-end-0 border-start-0">
                <p class="top_p container-fluid remove-px-5 pt-3">
                    <!-- Contract for differences are complex financial instruments that requires knowledge and understating as it involves a high risk of losing money rapidly due to leverage. You should consider whether you <br> understand how CFDs work and whether you can afford to take the high risk of losing your money. -->
                    Financial Spread Bets and CFDs are complex instruments and come with a high risk of losing money rapidly due to leverage. 67.3% of retail investor accounts lose money when trading CFDs with this provider. You should consider whether you understand how CFDs work and whether you can afford to take the high risk of losing your money.
                </p>
            </div>
    
            <nav class="navbar navbar-expand-lg navbar-light container-fluid remove-px-5 shadow-sm" style="background-color: #FFFFFF;">

                <span class="d-none d-lg-block">
                    <a href="{{ url('/') }}" class="navbar-brand" style="display: flex; text-decoration: none; align-items: end; color: white; justify-content: center;">
                        <img src="https://images.prismic.io/tnfev2/44587b9b-c476-4a96-a39e-788e0f04f5e5_HeaderLogoAnimated.gif" alt="site-logo" style="height: 40px;"> <h2 class="text-dark" style="font-weight: 600; padding-left: 10px; font-size: 17px;">Trade Nation</h2>
                    </a>
                </span>
    
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="nav-link btn rounded-pill px-4 btn_trade d-lg-none d-md-block" href="{{ route('login') }}">Trade Now</a>
    
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto menu-bar">
                        <li class="nav-item">
                            <a class="nav-link" style="font-weight: 600; color: black;" href="#">Trading</a>
                            <div class="dropdown">
                                <ul class="nav flex-column nvt">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('why_trade_with_us') }}">Why Trade With Us</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('trading_costs') }}">Trading Costs</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('trading_tools') }}">Trading Tools</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('trading_explained') }}">Trading Explained</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-weight: 600; color: black;" href="#">Markets</a>
                            <div class="dropdown">
                                <ul class="nav flex-column nvt">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('markets') }}">Trade Popular Markets</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('our_platforms') }}">Our Platform</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('market_information') }}">Market Information</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-weight: 600; color: black;" href="#">Insight Hub</a>
                            <div class="dropdown">
                                <ul class="nav flex-column nvt">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('insights_hub') }}">Insights</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('articles_what_time_does_forex_market_open') }}">Forex Market</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('articles_market_open_times') }}">Market Open Times</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-weight: 600; color: black;" href="#">About us</a>
                            <div class="dropdown">
                                <ul class="nav flex-column nvt">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('about_us') }}" class="nav-link">About Us</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item pe-4">
                            <a class="nav-link btn rounded-pill px-4 btn_login" style="font-weight: 600; color: black;" href="{{ route('login') }}">Log in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn rounded-pill px-4 btn_trade" style="font-weight: 600; color: #EE4E08;" href="{{ route('login') }}">Trade Now</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <main>@yield('content')</main>

        <footer>
            <div class="container-fluid remove-px-5 py-5">
                <div class="row py-4">
                    <div class="col-md-4 mb-4">
                        <a href="{{ url('/') }}" class="navbar-brand" style="display: flex; text-decoration: none; align-items: end; color: white; justify-content: start;">
                            <img src="https://images.prismic.io/tnfev2/44587b9b-c476-4a96-a39e-788e0f04f5e5_HeaderLogoAnimated.gif" alt="site-logo" style="height: 40px;"> <h2 class="text-dark" style="padding-left: 10px; font-size: 20px;">Trade Nation</h2>
                        </a>
                    </div>

                    <div class="col-md-8">
                        <div class="row change_this">
                            <div class="col-md-5">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" style="color: #3c3c3b; font-weight: 600; font-size: 20px;" href="{{ url('/#stayInfomerd') }}">Discover More</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" style="color: #3c3c3b; font-weight: 600; font-size: 20px;" href="https://resources.tradenation.com/downloads/TN_Our_Charter__Our_Commitment_To_You_Final.pdf">Customer Charter</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" style="color: #3c3c3b; font-weight: 600; font-size: 20px;" href="{{ route('legals_new') }}">The Legal Stuff</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-7">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" style="color: #3c3c3b; font-weight: 600; font-size: 20px;" href="{{ route('faqs') }}">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" style="color: #3c3c3b; font-size: 16px;" href="{{ route('faqs', '#accordionExample4') }}">What is the minimum stake size?</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" style="color: #3c3c3b; font-size: 16px;" href="{{ route('faqs', '#accordionExample3') }}">Which payment types do you have on offer?</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" style="color: #3c3c3b; font-size: 16px;" href="{{ route('faqs', '#accordionExample2') }}">How long will it take for my account to be approved?</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row py-4">
                    <div class="col-md-4 mb-4">
                        <p style="font-size: 17px; font-weight: 600; color: #3c3c3b;">Get in touch</p>
                    </div>

                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-5">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" style="color: #EE4E08; font-size: 17px;" href="#"><i class="fa fa-envelope pe-3 text-secondary"></i>support@tradenationltd.co.uk</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-7">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" style="color: #EE4E08; font-size: 17px;" href="#"><i class="fa fa-phone pe-3 text-secondary"></i>+44 1254 369752</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row py-4">
                    <div class="col-md-4 mb-4">
                        <p style="font-size: 17px; font-weight: 600; color: #3c3c3b;">The legal stuff</p>
                    </div>

                    <div class="col-md-8">
                        <article style="font-size: 12px; color: #3c3c3b!important;">
                            Contract for differences are complex financial instruments that requires knowledge and understating as it involves a high risk of losing money rapidly due to leverage. You should consider whether you understand how CFDs work and whether you can afford to take the high risk of losing your money. <br><br>

                            Trade Nation is a trading name of Trade Nation Financial UK Ltd, a financial services company authorised and regulated by the Financial Conduct Authority under firm reference number 525164. Our registered office is 14 Bonhill Street, London, EC2A 4BX, United Kingdom.<br><br>

                            Trade Nation is a trading name of Trade Nation Australia Pty Ltd, a financial services company authorised and regulated by the Australian Securities and Investments Commission, ACN 158 065 635, AFSL No. 422661<br><br>

                            Trade Nation Ltd, registration Number 203493 B, is authorised and regulated by the Securities Commission of the Bahamas, SIA-F216<br><br>

                            Trade Nation is a trading name of Trade Nation Financial Markets Ltd, authorised and regulated by The Financial Services Authority Seychelles under licence number SD150. Trade Nation Financial Markets Ltd is registered as a limited company in the Seychelles, 810589-1. Registered office: CT House, Office 6B, Providence, Mahe, Seychelles.<br><br>

                            The information on this site is not directed at residents of the United States or any particular country outside the UK, Australia, South Africa or The Bahamas and is not intended for distribution to, or use by, any person in any country or jurisdiction where such distribution or use would be contrary to local law or regulation.
                        </article>
                    </div>
                </div>
                
                <div class="d-flex justify-content-between">
                    <div>
                        <p>© 2019-2022 TradeNation. All Rights Reserved.</p>
                    </div>
    
                    <div>
                        <a href="{{ route('legals_id', 'privacy') }}" class="pe-5">Privacy</a>
                        <a href="{{ route('legals_new') }}">Terms</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- <div class="mt-5 py-2" style="background-color: #252525 !important;">
            <a href="https://uk.trustpilot.com/review/tradenation.com" target="_blank" class="text-white text-center py-2" style="display: flex; justify-content:center; font-size: 18px; text-decoration: none;">
                <span class="footer_star" style="padding-right: 10px;">Our customers say Excellent</span>
                
                <svg role="img" aria-labelledby="starRating" viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="width: 140px; padding-right: 10px;">
                    <title id="starRating" lang="en">4.9 out of five star rating on Trustpilot</title>
                    <g class="tp-star">
                        <path class="tp-star__canvas" fill="#dcdce6" d="M0 46.330002h46.375586V0H0z"></path>
                        <path class="tp-star__shape" d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z" fill="#FFF"></path>
                    </g>
                    <g class="tp-star">
                        <path class="tp-star__canvas" fill="#dcdce6" d="M51.24816 46.330002h46.375587V0H51.248161z"></path>
                        <path class="tp-star__canvas--half" fill="#dcdce6" d="M51.24816 46.330002h23.187793V0H51.248161z"></path>
                        <path class="tp-star__shape" d="M74.990978 31.32991L81.150908 30 84 39l-9.660206-7.202786L64.30279 39l3.895636-11.840666L58 19.841466h12.605577L74.499595 8l3.895637 11.841466H91L74.990978 31.329909z" fill="#FFF"></path>
                    </g>
                    <g class="tp-star">
                        <path class="tp-star__canvas" fill="#dcdce6" d="M102.532209 46.330002h46.375586V0h-46.375586z"></path>
                        <path class="tp-star__canvas--half" fill="#dcdce6" d="M102.532209 46.330002h23.187793V0h-23.187793z"></path>
                        <path class="tp-star__shape" d="M142.066994 19.711433L115.763298 38.80065l3.838215-11.797827-10.047304-7.291391h12.418975l3.837418-11.798624 3.837417 11.798624h12.418975zM125.81156 31.510075l7.183595-1.509576 2.862113 8.800152-10.045708-7.290576z" fill="#FFF"></path>
                    </g>
                    <g class="tp-star">
                        <path class="tp-star__canvas" fill="#dcdce6" d="M153.815458 46.330002h46.375586V0h-46.375586z"></path>
                        <path class="tp-star__canvas--half" fill="#dcdce6" d="M153.815458 46.330002h23.187793V0h-23.187793z"></path>
                        <path class="tp-star__shape" d="M193.348355 19.711433L167.045457 38.80065l3.837417-11.797827-10.047303-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418974zM177.09292 31.510075l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
                    </g>
                    <g class="tp-star">
                        <path class="tp-star__canvas" fill="#dcdce6" d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                        <path class="tp-star__canvas--half" fill="#dcdce6" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                        <path class="tp-star__shape" d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
                    </g>
                </svg>

                <span class="footer_star">4.6 out of 5 based on 26,036 reviews</span>
                
                <svg role="img" aria-labelledby="trustpilotLogo" viewBox="0 0 126 31" xmlns="http://www.w3.org/2000/svg" style="width: 140px; padding-left: 5px;">
                    <title id="trustpilotLogo">Trustpilot</title>
                    <path class="tp-logo__text" d="M33.074774 11.07005H45.81806v2.364196h-5.010656v13.290316h-2.755306V13.434246h-4.988435V11.07005h.01111zm12.198892 4.319629h2.355341v2.187433h.04444c.077771-.309334.222203-.60762.433295-.894859.211092-.287239.466624-.56343.766597-.79543.299972-.243048.633276-.430858.999909-.585525.366633-.14362.744377-.220953 1.12212-.220953.288863 0 .499955.011047.611056.022095.1111.011048.222202.033143.344413.04419v2.408387c-.177762-.033143-.355523-.055238-.544395-.077333-.188872-.022096-.366633-.033143-.544395-.033143-.422184 0-.822148.08838-1.199891.254096-.377744.165714-.699936.41981-.977689.740192-.277753.331429-.499955.729144-.666606 1.21524-.166652.486097-.244422 1.03848-.244422 1.668195v5.39125h-2.510883V15.38968h.01111zm18.220567 11.334883H61.02779v-1.579813h-.04444c-.311083.574477-.766597 1.02743-1.377653 1.369908-.611055.342477-1.233221.51924-1.866497.51924-1.499864 0-2.588654-.364573-3.25526-1.104765-.666606-.740193-.999909-1.856005-.999909-3.347437V15.38968h2.510883v6.948968c0 .994288.188872 1.701337.577725 2.1101.377744.408763.922139.618668 1.610965.618668.533285 0 .96658-.077333 1.322102-.243048.355524-.165714.644386-.37562.855478-.65181.222202-.265144.377744-.596574.477735-.972194.09999-.37562.144431-.784382.144431-1.226288v-6.573349h2.510883v11.323836zm4.27739-3.634675c.07777.729144.355522 1.237336.833257 1.535623.488844.287238 1.06657.441905 1.744286.441905.233312 0 .499954-.022095.799927-.055238.299973-.033143.588836-.110476.844368-.209905.266642-.099429.477734-.254096.655496-.452954.166652-.198857.244422-.452953.233312-.773335-.01111-.320381-.133321-.585525-.355523-.784382-.222202-.209906-.499955-.364573-.844368-.497144-.344413-.121525-.733267-.232-1.17767-.320382-.444405-.088381-.888809-.18781-1.344323-.287239-.466624-.099429-.922138-.232-1.355432-.37562-.433294-.14362-.822148-.342477-1.166561-.596573-.344413-.243048-.622166-.56343-.822148-.950097-.211092-.386668-.311083-.861716-.311083-1.436194 0-.618668.155542-1.12686.455515-1.54667.299972-.41981.688826-.75124 1.14434-1.005336.466624-.254095.97769-.430858 1.544304-.541334.566615-.099429 1.11101-.154667 1.622075-.154667.588836 0 1.15545.066286 1.688736.18781.533285.121524 1.02213.320381 1.455423.60762.433294.276191.788817.640764 1.07768 1.08267.288863.441905.466624.98324.544395 1.612955h-2.621984c-.122211-.596572-.388854-1.005335-.822148-1.204193-.433294-.209905-.933248-.309334-1.488753-.309334-.177762 0-.388854.011048-.633276.04419-.244422.033144-.466624.088382-.688826.165715-.211092.077334-.388854.198858-.544395.353525-.144432.154667-.222203.353525-.222203.60762 0 .309335.111101.552383.322193.740193.211092.18781.488845.342477.833258.475048.344413.121524.733267.232 1.177671.320382.444404.088381.899918.18781 1.366542.287239.455515.099429.899919.232 1.344323.37562.444404.14362.833257.342477 1.17767.596573.344414.254095.622166.56343.833258.93905.211092.37562.322193.850668.322193 1.40305 0 .673906-.155541 1.237336-.466624 1.712385-.311083.464001-.711047.850669-1.199891 1.137907-.488845.28724-1.04435.508192-1.644295.640764-.599946.132572-1.199891.198857-1.788727.198857-.722156 0-1.388762-.077333-1.999818-.243048-.611056-.165714-1.14434-.408763-1.588745-.729144-.444404-.33143-.799927-.740192-1.05546-1.226289-.255532-.486096-.388853-1.071621-.411073-1.745528h2.533103v-.022095zm8.288135-7.700208h1.899828v-3.402675h2.510883v3.402675h2.26646v1.867052h-2.26646v6.054109c0 .265143.01111.486096.03333.684954.02222.18781.07777.353524.155542.486096.07777.132572.199981.232.366633.298287.166651.066285.377743.099428.666606.099428.177762 0 .355523 0 .533285-.011047.177762-.011048.355523-.033143.533285-.077334v1.933338c-.277753.033143-.555505.055238-.811038.088381-.266642.033143-.533285.04419-.811037.04419-.666606 0-1.199891-.066285-1.599855-.18781-.399963-.121523-.722156-.309333-.944358-.552381-.233313-.243049-.377744-.541335-.466625-.905907-.07777-.364573-.13332-.784383-.144431-1.248384v-6.683825h-1.899827v-1.889147h-.02222zm8.454788 0h2.377562V16.9253h.04444c.355523-.662858.844368-1.12686 1.477644-1.414098.633276-.287239 1.310992-.430858 2.055369-.430858.899918 0 1.677625.154667 2.344231.475048.666606.309335 1.222111.740193 1.666515 1.292575.444405.552382.766597 1.193145.9888 1.92229.222202.729145.333303 1.513527.333303 2.3421 0 .762288-.099991 1.50248-.299973 2.20953-.199982.718096-.499955 1.347812-.899918 1.900194-.399964.552383-.911029.98324-1.533194 1.31467-.622166.33143-1.344323.497144-2.18869.497144-.366634 0-.733267-.033143-1.0999-.099429-.366634-.066286-.722157-.176762-1.05546-.320381-.333303-.14362-.655496-.33143-.933249-.56343-.288863-.232-.522175-.497144-.722157-.79543h-.04444v5.656393h-2.510883V15.38968zm8.77698 5.67849c0-.508193-.06666-1.005337-.199981-1.491433-.133321-.486096-.333303-.905907-.599946-1.281527-.266642-.37562-.599945-.673906-.988799-.894859-.399963-.220953-.855478-.342477-1.366542-.342477-1.05546 0-1.855387.364572-2.388672 1.093717-.533285.729144-.799928 1.701337-.799928 2.916578 0 .574478.066661 1.104764.211092 1.59086.144432.486097.344414.905908.633276 1.259432.277753.353525.611056.629716.99991.828574.388853.209905.844367.309334 1.355432.309334.577725 0 1.05546-.121524 1.455423-.353525.399964-.232.722157-.541335.97769-.905907.255531-.37562.444403-.79543.555504-1.270479.099991-.475049.155542-.961145.155542-1.458289zm4.432931-9.99812h2.510883v2.364197h-2.510883V11.07005zm0 4.31963h2.510883v11.334883h-2.510883V15.389679zm4.755124-4.31963h2.510883v15.654513h-2.510883V11.07005zm10.210184 15.963847c-.911029 0-1.722066-.154667-2.433113-.452953-.711046-.298287-1.310992-.718097-1.810946-1.237337-.488845-.530287-.866588-1.160002-1.12212-1.889147-.255533-.729144-.388854-1.535622-.388854-2.408386 0-.861716.133321-1.657147.388853-2.386291.255533-.729145.633276-1.35886 1.12212-1.889148.488845-.530287 1.0999-.93905 1.810947-1.237336.711047-.298286 1.522084-.452953 2.433113-.452953.911028 0 1.722066.154667 2.433112.452953.711047.298287 1.310992.718097 1.810947 1.237336.488844.530287.866588 1.160003 1.12212 1.889148.255532.729144.388854 1.524575.388854 2.38629 0 .872765-.133322 1.679243-.388854 2.408387-.255532.729145-.633276 1.35886-1.12212 1.889147-.488845.530287-1.0999.93905-1.810947 1.237337-.711046.298286-1.522084.452953-2.433112.452953zm0-1.977528c.555505 0 1.04435-.121524 1.455423-.353525.411074-.232.744377-.541335 1.01102-.916954.266642-.37562.455513-.806478.588835-1.281527.12221-.475049.188872-.961145.188872-1.45829 0-.486096-.066661-.961144-.188872-1.44724-.122211-.486097-.322193-.905907-.588836-1.281527-.266642-.37562-.599945-.673907-1.011019-.905907-.411074-.232-.899918-.353525-1.455423-.353525-.555505 0-1.04435.121524-1.455424.353525-.411073.232-.744376.541334-1.011019.905907-.266642.37562-.455514.79543-.588835 1.281526-.122211.486097-.188872.961145-.188872 1.447242 0 .497144.06666.98324.188872 1.458289.12221.475049.322193.905907.588835 1.281527.266643.37562.599946.684954 1.01102.916954.411073.243048.899918.353525 1.455423.353525zm6.4883-9.66669h1.899827v-3.402674h2.510883v3.402675h2.26646v1.867052h-2.26646v6.054109c0 .265143.01111.486096.03333.684954.02222.18781.07777.353524.155541.486096.077771.132572.199982.232.366634.298287.166651.066285.377743.099428.666606.099428.177762 0 .355523 0 .533285-.011047.177762-.011048.355523-.033143.533285-.077334v1.933338c-.277753.033143-.555505.055238-.811038.088381-.266642.033143-.533285.04419-.811037.04419-.666606 0-1.199891-.066285-1.599855-.18781-.399963-.121523-.722156-.309333-.944358-.552381-.233313-.243049-.377744-.541335-.466625-.905907-.07777-.364573-.133321-.784383-.144431-1.248384v-6.683825h-1.899827v-1.889147h-.02222z" fill="white" style="font-size: small;"></path>
                    <path class="tp-logo__star" fill="#00B67A" d="M30.141707 11.07005H18.63164L15.076408.177071l-3.566342 10.892977L0 11.059002l9.321376 6.739063-3.566343 10.88193 9.321375-6.728016 9.310266 6.728016-3.555233-10.88193 9.310266-6.728016z"></path>
                    <path class="tp-logo__star-notch" fill="#005128" d="M21.631369 20.26169l-.799928-2.463625-5.755033 4.153914z"></path>
                </svg>
            </a>
        </div> -->

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="//code.tidio.co/mg1gml2jvh7u7qrw0eshwhpg0g2hzgdg.js" async></script>
    </body>
</html>