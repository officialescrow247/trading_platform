<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ env('APP_NAME') }}</title>

        <!-- Bootstrap css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>	
        <style>
            div.show_nav a{
				display: block;
				padding-bottom: 10px;
				text-decoration: none;
				color: #FFFFFF;
				margin-bottom: 20px;
			}
			.hide {
				/* display: none; */
				position: absolute;
				top: 50%;
				color: #FFFFFF;
			}
			.rm_p a:hover{
				color: #EE4C09 !important;
			}
			.a_Trading:hover + .hide {
				display: block;
				color: red;
			}
            
            a.a_Trading, section.Trading, a.a_Markets, section.Markets, a.a_Insights, section.Insights, a.a_About, section.About{
                cursor: default;
            }
			
            div.show_nav p.text-light{
				font-size: 25px;
			}
			div.show_nav a:hover{
				border-bottom: 2px solid white;
				width: 70%;
			}    
            .header_bg{
				background-color: #000;
			}

            @media (max-width: 450px){
                .remove-r-p{
                    padding-right: 0rem !important;
                }

                .remove-l-p{
                    padding-left: 0rem !important;
                }

                .okF_{
                    overflow: hidden;
                }

                .okF_img{
                    padding-top: 10rem;
                }

                .sg_, .sg_ .inter{
                    padding-right: 0rem !important;
                }

                #trade_like_a_boss img {
                    position: inherit
                }

                .header_qq{
                    position: fixed;
                    z-index: 2;
                }

                .welcome_d {
                    padding-top: 12rem;
                }

                /* .so_{
                    margin-top: 10rem;
                } */
            }
        </style>		
    </head>

    <body class="bg_c">
        <header class="header_qq">
            <div class="py-3 border border-top-0 border-start-0 border-end-0 d-none d-lg-block" style="background-color: #000 !important;">
                <div class="d-flex container" style="justify-content: space-between; align-items: center;">
                    <div class="d_">
                        <p class="p-0 m-0">
                            Financial Spread Bets and CFDs are complex instruments and come with a high risk of losing 
                            money rapidly due to leverage. 73.6% of retail investor accounts lose money when trading 
                            CFDs with this provider. You should consider whether you understand how CFDs work and whether 
                            you can afford to take the high risk of losing your money.
                        </p>
                    </div>
        
                    <div style="width: 20%;">
                        <span class="d_2">Trading in</span>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/800px-Flag_of_the_United_Kingdom_%281-2%29.svg.png" alt="" class="img-fluid" style="width: 17px;">
                        <span class="d_2">UK</span>
                    </div>
                </div>
            </div>
    
            <nav class="d-none d-lg-block navbar navbar-expand-lg navbar-light" style="background-color: #000;">
                <div class="container pb-3">
                    <a class="navbar-brand text-white" href="{{ url('/') }}">
                        <img src="https://images.prismic.io/tnfev2/8c6796eb-086d-4ac1-8846-6ea8b63ee68a_TN-PrimaryLogo-RGB-WhiteText-Strapline.png?auto=compress%2Cformat&fit=max&w=3840" 
                            alt="{{ env('APP_NAME') }} logo" style="width: 300px;">    
                    </a>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #fff;">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse pt-3" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item me-3">
                                <a class="nav-link text-light" href="#">
                                    <i class="fa fa-magnifying-glass"></i>
                                </a>
                            </li>
    
                            <li class="nav-item" style="border-left: 1px solid white;">
                                <a class="nav-link active text-light" aria-current="page" href="#"></a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link active text-light a_Trading" aria-current="page">Trading</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link text-light a_Markets">Platform</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link text-light a_Insights">Learn</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('about_us') }}">About us</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('account_types_new') }}">Account Types</a>
                            </li>
    
                            <li class="nav-item ms-3">
                                <a class="nav-link rounded-pill sign_in_login_btn px-4 text-dark" href="{{ route('login') }}"><b>Sign up / Log in</b></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    
            <!-- Mobile view nav -->
            <nav class="navbar navbar-expand-lg navbar-dark header_bg d-lg-none">
                <div class="d-flex container" style="justify-content: space-between; align-items: center;">
                    <div class="d_">
                        <p class="p-0 m-0">
                            Financial Spread Bets and CFDs are complex instruments and come with a high risk of losing 
                            money rapidly due to leverage. 73.6% of retail investor accounts lose money when trading 
                            CFDs with this provider. You should consider whether you understand how CFDs work and whether 
                            you can afford to take the high risk of losing your money.
                        </p>
                    </div>
        
                    <div style="width: 20%;">
                        <span class="d_2">Trading in</span>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/800px-Flag_of_the_United_Kingdom_%281-2%29.svg.png" alt="" class="img-fluid" style="width: 17px;">
                        <span class="d_2">UK</span>
                    </div>
                </div>
    
                <div class="container-fluid py-2">
                    <a href="{{ url('/') }}" class="text-dark" style="display: flex; text-decoration: none; align-items: center; color: white; justify-content: center;">
                        <img src="https://tnfev2.cdn.prismic.io/tnfev2/76a4e3dc-43ad-4b62-a157-a4feba9bf285_Logo.svg" alt="site-logo" style="height: 50px;">
                    </a>
    
                    <div class="d-flex">
                        <a class="btn_e rounded-pill px-4 py-2 btn text-light me-5 mt-3"><b>Trade Now</b></a>
    
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
    
                    <div class="collapse navbar-collapse pt-4" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <div class="dropdown">
                                <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Trading
                                </a>
    
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><span class="mt-3 dropdown-item-text mb-2" style="color: #fc5000;">Trade Nation</span></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('why_trade_with_us') }}">Why Trade with Us?</a></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('why_trade_with_us') }}#fixed-spread-trading">Fixed Spread Trading</a></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('why_trade_with_us') }}#cfd-trading">CFD Trading</a></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('why_trade_with_us') }}#negative-balance-protection">Negative Balance Protection</a></li>
    
    
                                    <li><span class="mt-3 dropdown-item-text mb-2" style="color: #fc5000;">Trading Cost</span></li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_costs') }}">Our Costs</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_costs') }}#low-fixed-spreads">Low Fixed Spreads</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_costs') }}#overnight-funding">Overnight Funding</a>
                                    </li>
    
    
                                    <li><span class="mt-3 dropdown-item-text mb-2" style="color: #fc5000;">Trading Tools</span></li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_tools') }}">Our Tools</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_tools') }}#real-time-news">Real Time News</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_tools') }}#signal-centre">Signal Centre</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_tools') }}#risk-management-tool">Risk Management Tool</a>
                                    </li>
    
    
                                    <li><span class="mt-3 dropdown-item-text mb-2" style="color: #fc5000;">Trading Explained</span></li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_explained') }}">Level up Your Trading</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_explained') }}#spread-trades">Spread Trading</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_explained') }}#contracts-for-differences">Contracts for Difference</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_explained') }}#market-analysis">Market Analysis</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_explained') }}#signal-centre">Signal Centre</a>
                                    </li>
                                </ul>
                            </div>
    
                            <div class="dropdown">
                                <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Markets
                                </a>
    
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><span class="mt-3 dropdown-item-text mb-2" style="color: #fc5000;">Discover Markets</span></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('markets') }}#">Trade Popular Markets</a></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('markets') }}#indices">Indices</a></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('markets') }}#forex">Forex</a></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('markets') }}#commodities">Commodities</a></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('markets') }}#all-instruments">All Instruments</a></li>
                        
    
                                    <li><span class="mt-3 dropdown-item-text mb-2" style="color: #fc5000;">Our Platforms</span></li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('our_platforms') }}#">TMade to Trade</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('our_platforms') }}#metatrader-4">MetaTrader 4</a>
                                    </li>
    
    
                                    <li><span class="mt-3 dropdown-item-text mb-2" style="color: #fc5000;">Market Information</span></li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('market_information') }}">Market Information Sheet</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="https://prismic-io.s3.amazonaws.com/tnfev2/e9250639-c840-47c1-81f5-0205be86fcae_Market+Holidays+16-26+Jan.pdf">Market Holidays</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="https://prismic-io.s3.amazonaws.com/tnfev2/e912e655-e094-4851-9760-c635b983e4ed_Market+Expiries+Jan.pdf">Market Expires</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="https://prismic-io.s3.amazonaws.com/tnfev2/0106b704-17cd-4b42-b11f-a2b77ddffba1_Dividend+Projections+23-27+Jan.pdf">Dividend Projections</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="https://prismic-io.s3.amazonaws.com/tnfev2/efd058a1-1f9a-4f7a-ba4d-965804fed02f_Daylight+Saving+Time+2022.pdf">MDaylight Savings Times</a>
                                    </li>
    
    
                                    <li><span class="mt-3 dropdown-item-text mb-2" style="color: #fc5000;">Trading Explained</span></li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_explained') }}">Level up Your Trading</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_explained') }}#spread-trades">Spread Trading</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_explained') }}#contracts-for-differences">Contracts for Difference</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_explained') }}#market-analysis">Market Analysis</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_explained') }}#signal-centre">Signal Centre</a>
                                    </li>
                                </ul>
                            </div>
    
                            <div class="dropdown">
                                <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Insights
                                </a>
    
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><span class="mt-3 dropdown-item-text mb-2" style="color: #fc5000;">Insights Hub</span></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('insights_hub') }}">Gain Insights</a></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('insights_hub') }}#trading-tools">Trading Tools</a></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('insights_hub') }}#part-time-to-pro">Part-time to Pro</a></li>
                                    <!-- <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('insights_hub') }}#demo">Try Our Demo</a></li> -->
    
    
                                    <li><span class="mt-3 dropdown-item-text mb-2" style="color: #fc5000;">Types of Trading</span></li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('articles_day_trading') }}">Day Trading</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('articles_swing_trading') }}">Swing Trading</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('articles_scalping_trading') }}">Scalping Trading</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('articles_trading_vs_day_trading') }}">Swing vs Day Trading</a>
                                    </li>
    
    
                                    <li><span class="mt-3 dropdown-item-text mb-2" style="color: #fc5000;">Analysis</span></li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('articles_technical_analysis') }}">Technical Analysis</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('articles_fundamental_analysis') }}">Fundamental Analysis</a>
                                    </li>
    
    
                                    <li><span class="mt-3 dropdown-item-text mb-2" style="color: #fc5000;">Trading Times</span></li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('articles_what_time_does_forex_market_open') }}">Forex Opening Times</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('articles_market_open_times') }}">Market Open Times</a>
                                    </li>
                                </ul>
                            </div>
    
                            <div class="dropdown">
                                <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                About Us
                                </a>
    
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><span class="mt-3 dropdown-item-text mb-2" style="color: #fc5000;">About Us</span></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('about_us') }}">Who We Are</a></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('about_us') }}#regulations_">Regulations</a></li>
    
    
                                    <li><span class="mt-3 dropdown-item-text mb-2" style="color: #fc5000;">Our Community</span></li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('about_us') }}#our-sponsorships">Sponsorship</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('about_us') }}#charity-causes">Charity Causes</a>
                                    </li>
    
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('our_ambassadors_new') }}">Our Ambassadors</a></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('brokerage_fees_new') }}">Brokerage fees</a></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_stories_new') }}">Customers Reviews</a></li>
    
    
                                    <li><span class="mt-3 dropdown-item-text mb-2" style="color: #fc5000;">Careers</span></li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="{{ route('about_us') }}#careers">Join Us</a>
                                    </li>
    
    
                                    <li><span class="mt-3 dropdown-item-text mb-2" style="color: #fc5000;">Follow Us</span></li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="#!">Twitter</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="#!">Instagram</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="text-decoration: none;" href="#!">LinkedIn</a>
                                    </li>
                                </ul>
                            </div>
                            <a class="nav-link text-white" href="{{ route('account_types_new') }}"><b>Account types</b></a>
                            
                            
                            <ul class="navbar-nav mb-2 mb-lg-0">
                            
                                @guest
                                    <li class="nav-item mt-3">
                                        <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                                    </li>
                                    <li class="nav-item mt-3">
                                        <a class="nav-link text-white border border-light rounded-pill px-4" href="{{ route('register') }}">Start trading</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link mt-3 text-white border border-light rounded-pill px-4" href="{{ route('dashboard') }}"> Goto Dashboard </a>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <section class="pd py-5 Trading">
            <div class="container show_nav">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-light"><b>Trade Nation</b></p>

                        <a href="{{ route('why_trade_with_us') }}">Why Trade with Us?</a>
                        <a href="{{ route('why_trade_with_us') }}#fixed-spread-trading">Fixed Spread Trading</a>
                        <a href="{{ route('why_trade_with_us') }}#cfd-trading">CFD Trading</a>
                        <a href="{{ route('why_trade_with_us') }}#negative-balance-protection">Negative Balance Protection</a>
                    </div>

                    <div class="col-md-3">
                        <p class="text-light"><b>Trading Costs</b></p>

                        <a href="{{ route('trading_costs') }}">Our Costs</a>
                        <a href="{{ route('trading_costs') }}#low-fixed-spreads">Low Fixed Spreads</a>
                        <a href="{{ route('trading_costs') }}#overnight-funding">Overnight Funding</a>
                    </div>

                    <div class="col-md-3">
                        <p class="text-light"><b>Trading Tools</b></p>
                        
                        
                        <a href="{{ route('trading_tools') }}">Our Tools</a>
                        <a href="{{ route('trading_tools') }}#real-time-news">Real Time News</a>
                        <a href="{{ route('trading_tools') }}#signal-centre">Signal Centre</a>
                        <a href="{{ route('trading_tools') }}#risk-management-tool">Risk Management Tool</a>
                    </div>

                    <div class="col-md-3">
                        <p class="text-light"><b>Trading Explained</b></p>
                        
                        <a href="{{ route('trading_explained') }}">Level up Your Trading</a>
                        <a href="{{ route('trading_explained') }}#spread-trades">Spread Trading</a>
                        <a href="{{ route('trading_explained') }}#contracts-for-differences">Contracts for Difference</a>
                        <a href="{{ route('trading_explained') }}#market-analysis">Market Analysis</a>
                        <a href="{{ route('trading_explained') }}#signal-centre">Signal Centre</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="pd py-5 Markets">
            <div class="container show_nav">
                <div class="row">
                    <div class="col-md-4">
                        <p class="text-light"><b>Discover Markets</b></p>
                        
                        <a href="{{ route('markets') }}#">Trade Popular Markets</a>
                        <a href="{{ route('markets') }}#indices">Indices</a>
                        <a href="{{ route('markets') }}#forex">Forex</a>
                        <a href="{{ route('markets') }}#commodities">Commodities</a>
                        <a href="{{ route('markets') }}#all-instruments">All Instruments</a>
                    </div>

                    <div class="col-md-4">
                        <p class="text-light"><b>Our Platforms</b></p>
                        
                        <a href="{{ route('our_platforms') }}#">TMade to Trade</a>
                        <a href="{{ route('our_platforms') }}#metatrader-4">MetaTrader 4</a>
                    </div>

                    <div class="col-md-4">
                        <p class="text-light"><b>Market Information</b></p>
                        
                        <a href="{{ route('market_information') }}">Market Information Sheet</a>
                        <a href="https://prismic-io.s3.amazonaws.com/tnfev2/e9250639-c840-47c1-81f5-0205be86fcae_Market+Holidays+16-26+Jan.pdf">Market Holidays</a>
                        <a href="https://prismic-io.s3.amazonaws.com/tnfev2/e912e655-e094-4851-9760-c635b983e4ed_Market+Expiries+Jan.pdf">Market Expires</a>
                        <a href="https://prismic-io.s3.amazonaws.com/tnfev2/0106b704-17cd-4b42-b11f-a2b77ddffba1_Dividend+Projections+23-27+Jan.pdf">Dividend Projections</a>
                        <a href="https://prismic-io.s3.amazonaws.com/tnfev2/efd058a1-1f9a-4f7a-ba4d-965804fed02f_Daylight+Saving+Time+2022.pdf">MDaylight Savings Times</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="pd py-5 Insights">
            <div class="container show_nav">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-light"><b>Insights Hub</b></p>
                        
                        <a href="{{ route('insights_hub') }}">Gain Insights</a>
                        <a href="{{ route('insights_hub') }}#trading-tools">Trading Tools</a>
                        <a href="{{ route('insights_hub') }}#part-time-to-pro">Part-time to Pro</a>
                        <!-- <a href="{{ route('insights_hub') }}#demo">Try Our Demo</a> -->
                    </div>

                    <div class="col-md-3">
                        <p class="text-light"><b>Types of Trading</b></p>
                        
                        <a href="{{ route('articles_day_trading') }}">Day Trading</a>
                        <a href="{{ route('articles_swing_trading') }}">Swing Trading</a>
                        <a href="{{ route('articles_scalping_trading') }}">Scalping Trading</a>
                        <a href="{{ route('articles_trading_vs_day_trading') }}">Swing vs Day Trading</a>
                    </div>

                    <div class="col-md-3">
                        <p class="text-light"><b>Analysis</b></p>
                        
                        <a href="{{ route('articles_technical_analysis') }}">Technical Analysis</a>
                        <a href="{{ route('articles_fundamental_analysis') }}">Fundamental Analysis</a>
                    </div>

                    <div class="col-md-3">
                        <p class="text-light"><b>Trading Times</b></p>
                        
                        <a href="{{ route('articles_what_time_does_forex_market_open') }}">Forex Opening Times</a>
                        <a href="{{ route('articles_market_open_times') }}">Market Open Times</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="pd py-5 About">
            <div class="container show_nav">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-light"><b>About Us</b></p>
                        
                        <a href="{{ route('about_us') }}">Who We Are</a>
                        <a href="{{ route('about_us') }}#regulations">Regulations</a>
                    </div>

                    <div class="col-md-3">
                        <p class="text-light"><b>Our Community</b></p>
                        
                        <a href="{{ route('about_us') }}#our-sponsorships">Sponsorship</a>
                        <a href="{{ route('about_us') }}#charity-causes">Charity Causes</a>
                        <a href="{{ route('our_ambassadors_new') }}">Our Ambassadors</a>
                        <a href="{{ route('brokerage_fees_new') }}">Brokerage fees</a>
                        <a href="{{ route('trading_stories_new') }}">Customers Reviews</a>
                    </div>

                    <div class="col-md-3">
                        <p class="text-light"><b>Careers</b></p>
                        
                        <a href="{{ route('about_us') }}#careers">Join Us</a>
                        
                    </div>

                    <div class="col-md-3">
                        <p class="text-light"><b>Follow Us</b></p>
                        
                        <a href="#!">Twitter</a>
                        <a href="#!">Instagram</a>
                        <a href="#!">LinkedIn</a>
                    </div>
                </div>
            </div>
        </section>
        
        <main>@yield('content')</main>
        
        <footer>
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-5">
                        <h1 class="inter p_w" style="font-size: 40px;">
                            <b>
                                Trade on our <br>
                                <span style="color: #fc5000!important;"><strong>award-winning</strong></span> <br>
                                platform
                            </b>
                        </h1>
                    </div>

                    <div class="col-md-7">
                        <div class="multiple-items">
                            <div style="margin-top: 7.5px; max-width: 140px; flex-direction: row;">
                                <div class="eb5z6795 MuiBox-root css-18n2pc0" style="background-image: url(&quot;https://images.prismic.io/tnfev2/Z4iK0pbqstJ99g4P_Bestinclass%E2%80%93easeofuse2025.png?auto=format,compress?auto=compress,format&quot;); background-position: center center; background-repeat: no-repeat; background-size: contain; width: 115px; height: 200px"></div>
                            </div>

                            <div style="margin-top: 7.5px; max-width: 140px; flex-direction: row;">
                                <div class="eb5z6795 MuiBox-root css-18n2pc0" style="background-image: url(&quot;https://images.prismic.io/tnfev2/Z4iK05bqstJ99g4Q_Bestinclass%E2%80%93commissions%26fees2025.png?auto=format,compress?auto=compress,format&quot;); background-position: center center; background-repeat: no-repeat; background-size: contain; width: 115px; height: 200px"></div>
                            </div>

                            <div style="margin-top: 7.5px; max-width: 140px; flex-direction: row;">
                                <div class="eb5z6795 MuiBox-root css-18n2pc0" style="background-image: url(&quot;https://images.prismic.io/tnfev2/Z4iK0ZbqstJ99g4O_Besttradingplatform2024.png?auto=format,compress?auto=compress,format&quot;); background-position: center center; background-repeat: no-repeat; background-size: contain; width: 115px; height: 200px"></div>
                            </div>

                            <div style="margin-top: 7.5px; max-width: 140px; flex-direction: row;">
                                <div class="eb5z6795 MuiBox-root css-18n2pc0" style="background-image: url(&quot;https://images.prismic.io/tnfev2/Z4iK0JbqstJ99g4N_BestIntroducingBrokerProgramme2024.png?auto=format,compress?auto=compress,format&quot;); background-position: center center; background-repeat: no-repeat; background-size: contain; width: 115px; height: 200px"></div>
                            </div>

                            <div style="margin-top: 7.5px; max-width: 140px; flex-direction: row;">
                                <div class="eb5z6795 MuiBox-root css-18n2pc0" style="background-image: url(&quot;https://images.prismic.io/tnfev2/ZoKhnR5LeNNTwrYO_Bestspreadbettingprovider-2024.png?auto=format,compress?auto=compress,format?auto=compress,format&quot;); background-position: center center; background-repeat: no-repeat; background-size: contain; width: 115px; height: 200px"></div>
                            </div>

                            <div style="margin-top: 7.5px; max-width: 140px; flex-direction: row;">
                                <div class="eb5z6795 MuiBox-root css-18n2pc0" style="background-image: url(&quot;https://images.prismic.io/tnfev2/ZmbsH5m069VX1mMy_ADVFNBestspreadbettingplatform.png?auto=format,compress?auto=compress,format&quot;); background-position: center center; background-repeat: no-repeat; background-size: contain; width: 115px; height: 200px"></div>
                            </div>

                            <div style="margin-top: 7.5px; max-width: 140px; flex-direction: row;">
                                <div class="eb5z6795 MuiBox-root css-18n2pc0" style="background-image: url(&quot;https://images.prismic.io/tnfev2/Z4iK0pbqstJ99g4P_Bestinclass%E2%80%93easeofuse2025.png?auto=format,compress?auto=compress,format?auto=compress,format&quot;); background-position: center center; background-repeat: no-repeat; background-size: contain; width: 115px; height: 200px"></div>
                            </div>
                            <div style="margin-top: 7.5px; max-width: 140px; flex-direction: row;">
                                <div class="eb5z6795 MuiBox-root css-18n2pc0" style="background-image: url(&quot;https://images.prismic.io/tnfev2/Z4iK05bqstJ99g4Q_Bestinclass%E2%80%93commissions%26fees2025.png?auto=format,compress?auto=compress,format&quot;); background-position: center center; background-repeat: no-repeat; background-size: contain; width: 115px; height: 200px"></div>
                            </div>
                            <div style="margin-top: 7.5px; max-width: 140px; flex-direction: row;">
                                <div class="eb5z6795 MuiBox-root css-18n2pc0" style="background-image: url(&quot;https://images.prismic.io/tnfev2/Z4iK0ZbqstJ99g4O_Besttradingplatform2024.png?auto=format,compress?auto=compress,format&quot;); background-position: center center; background-repeat: no-repeat; background-size: contain; width: 115px; height: 200px"></div>
                            </div>
                            <div style="margin-top: 7.5px; max-width: 140px; flex-direction: row;">
                                <div class="eb5z6795 MuiBox-root css-18n2pc0" style="background-image: url(&quot;https://images.prismic.io/tnfev2/Z4iK0JbqstJ99g4N_BestIntroducingBrokerProgramme2024.png?auto=format,compress,format&quot;); background-position: center center; background-repeat: no-repeat; background-size: contain; width: 115px; height: 200px"></div>
                            </div>
                            <div style="margin-top: 7.5px; max-width: 140px; flex-direction: row;">
                                <div class="eb5z6795 MuiBox-root css-18n2pc0" style="background-image: url(&quot;https://images.prismic.io/tnfev2/ZoKhnR5LeNNTwrYO_Bestspreadbettingprovider-2024.png?auto=format,compress?auto=compress,format&quot;); background-position: center center; background-repeat: no-repeat; background-size: contain; width: 115px; height: 200px"></div>
                            </div>
                            <div style="margin-top: 7.5px; max-width: 140px; flex-direction: row;">
                                <div class="eb5z6795 MuiBox-root css-18n2pc0" style="background-image: url(&quot;https://images.prismic.io/tnfev2/Z4iK05bqstJ99g4Q_Bestinclass%E2%80%93commissions%26fees2025.png?auto=format,compress?auto=compress,format&quot;); background-position: center center; background-repeat: no-repeat; background-size: contain; width: 115px; height: 200px"></div>
                            </div>
                            <div style="margin-top: 7.5px; max-width: 140px; flex-direction: row;">
                                <div class="eb5z6795 MuiBox-root css-18n2pc0" style="background-image: url(&quot;https://images.prismic.io/tnfev2/ZmbsH5m069VX1mMy_ADVFNBestspreadbettingplatform.png?auto=format,compress?auto=compress,format&quot;); background-position: center center; background-repeat: no-repeat; background-size: contain; width: 115px; height: 200px"></div>
                            </div>
                            <div style="margin-top: 7.5px; max-width: 140px; flex-direction: row;">
                                <div class="eb5z6795 MuiBox-root css-18n2pc0" style="background-image: url(&quot;https://images.prismic.io/tnfev2/Z4iK0pbqstJ99g4P_Bestinclass%E2%80%93easeofuse2025.png?auto=format,compress&quot;); background-position: center center; background-repeat: no-repeat; background-size: contain; width: 115px; height: 200px"></div>
                            </div>
                            <div style="margin-top: 7.5px; max-width: 140px; flex-direction: row;">
                                <div class="eb5z6795 MuiBox-root css-18n2pc0" style="background-image: url(&quot;https://images.prismic.io/tnfev2/Z4iK05bqstJ99g4Q_Bestinclass%E2%80%93commissions%26fees2025.png?auto=format,compress&quot;); background-position: center center; background-repeat: no-repeat; background-size: contain; width: 115px; height: 200px"></div>
                            </div>
                            <div style="margin-top: 7.5px; max-width: 140px; flex-direction: row;">
                                <div class="eb5z6795 MuiBox-root css-18n2pc0" style="background-image: url(&quot;https://images.prismic.io/tnfev2/Z4iK0ZbqstJ99g4O_Besttradingplatform2024.png?auto=format,compress&quot;); background-position: center center; background-repeat: no-repeat; background-size: contain; width: 115px; height: 200px"></div>
                            </div>
                            <div style="margin-top: 7.5px; max-width: 140px; flex-direction: row;">
                                <div class="eb5z6795 MuiBox-root css-18n2pc0" style="background-image: url(&quot;https://images.prismic.io/tnfev2/Z4iK0JbqstJ99g4N_BestIntroducingBrokerProgramme2024.png?auto=format,compress&quot;); background-position: center center; background-repeat: no-repeat; background-size: contain; width: 115px; height: 200px"></div>
                            </div>
                            <div style="margin-top: 7.5px; max-width: 140px; flex-direction: row;">
                                <div class="eb5z6795 MuiBox-root css-18n2pc0" style="background-image: url(&quot;https://images.prismic.io/tnfev2/ZoKhnR5LeNNTwrYO_Bestspreadbettingprovider-2024.png?auto=format,compress?auto=compress,format&quot;); background-position: center center; background-repeat: no-repeat; background-size: contain; width: 115px; height: 200px"></div>
                            </div>
                            <div style="margin-top: 7.5px; max-width: 140px; flex-direction: row;">
                                <div class="eb5z6795 MuiBox-root css-18n2pc0" style="background-image: url(&quot;https://images.prismic.io/tnfev2/ZmbsH5m069VX1mMy_ADVFNBestspreadbettingplatform.png?auto=format,compress?auto=compress,format&quot;); background-position: center center; background-repeat: no-repeat; background-size: contain; width: 115px; height: 200px"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="mb-3 col-6 col-md-3">
                        <a href="{{ route('legals_new') }}" class="text-light"><b>Platforms</b></a>
                    </div>
                    <div class="mb-3 col-6 col-md-3">
                        <a href="{{ route('legals_new') }}" class="text-light"><b>Knowledge Base</b></a>
                    </div>
                    <div class="mb-3 col-6 col-md-3">
                        <a href="{{ route('about_us') }}" class="text-light"><b>About us</b></a>
                    </div>
                    <div class="mb-3 col-6 col-md-3 d-flex">
                        <div class="ps-5">
                            <span style="font-size: 13px;">Trading in</span>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/800px-Flag_of_the_United_Kingdom_%281-2%29.svg.png" alt="" class="img-fluid" style="width: 17px;">
                            <span style="font-size: 13px;">UK</span>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row pt-4">
                    <div class="col-md-3 mb-4">
                        <h6><b>Payment methods</b></h6>

                        <div>
                            <img src="https://seeklogo.com/images/V/visa-logo-121ECA05B2-seeklogo.com.png" alt="" class="img-fluid" style="width: 50px; margin: 0 20px;">
                            <img src="https://images.prismic.io/tnfev2/0f76eaa5-c6f6-4b06-8aad-62d978a2d969_mc_symbol_opt_45_3x.png?auto=compress%2Cformat&fit=max&w=1920" alt="" class="img-fluid" style="width: 50px; margin: 0 20px;">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bitcoin.svg/1200px-Bitcoin.svg.png" alt="" class="img-fluid mx-2" style="width: 40px; height: 40px;">
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <h6><b>Trade on</b></h6>

                        <div>
                            <img src="https://images.prismic.io/tnfev2/Zp4Erx5LeNNTxViW_TradeOnbutton-Lighttheme-.png?auto=format%2Ccompress&fit=max&w=1920" alt="" class="img-fluid" style="width: 180px; margin-bottom: 10px;">
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <h6><b>Regulatory body</b></h6>

                        <ul>
                            <li style="font-size: 16px; margin-bottom: 10px;">UK - FCA</li>
                            <li style="font-size: 16px; margin-bottom: 10px;">Australia - ASIC</li>
                            <li style="font-size: 16px; margin-bottom: 10px;">Seychelles - FSA</li>
                            <li style="font-size: 16px; margin-bottom: 10px;">Bahamas - SCB</li>
                            <li style="font-size: 16px; margin-bottom: 10px;">South Africa - FSCA</li>
                        </ul>
                    </div>

                    <div class="col-md-3 mb-4">
                        <div class="">
                            <p>Sponsors of your favourite teams</p>
                            <img src="https://images.prismic.io/tnfev2/ZmGYk5m069VX1goj_AstonVilla-Crest-RGB-White.png?auto=format,compress" 
                                alt="" class="img-fluid" width="50px"/>
                            <img src="https://images.prismic.io/tnfev2/Zl3K3KWtHYXtUB7E_Wyvern_SomersetCountyCricketClub_RGB_WO.png?auto=format,compress" 
                                alt="" class="img-fluid" width="50px"/>
                        </div>
                    </div>
                </div>

                <hr>

                <div>
                    <h5>The legal stuff</h5>
                    <div class="container">
                        <div class="row pt-3" style="font-size: 12px">
                            <div class="col-md-6">
                                <p>
                                    Financial Spread Trades and CFDs are complex instruments and come with a high risk of losing money rapidly due to leverage. <b>82.4% of retail investor accounts lose money when trading CFDs with this provider.</b> You should consider whether you understand how CFDs work and whether you can afford to take the high risk of losing your money. Refer to our <a href="{{ route("legals_new") }}" class="text-light">legal documents.</a> 
                                </p>
                                <p>
                                    Trade Nation is a trading name of Trade Nation Financial UK Ltd, a financial services company registered in England & Wales under company number 07073413, is authorised and regulated by the Financial Conduct Authority under firm reference number 525164. Our registered office is 14 Bonhill Street, London, EC2A 4BX, United Kingdom.
                                </p>
    
                                    
                                <p>
                                    Trade Nation is a trading name of Trade Nation Australia Pty Ltd, a financial services company registered in Australia under number ACN 158 065 635, is authorised and regulated by the Australian Securities and Investments Commission (ASIC), with licence number AFSL 422661. Our registered office is Level 17, 123 Pitt Street, Sydney, NSW 2000, Australia.
                                </p>
                                <p>
                                    Trade Nation is a trading name of Trade Nation Ltd., a financial services company registered in the Bahamas under number 203493 B, is authorised and regulated by the Securities Commission of the Bahamas (SCB), with licence number SIA-F216. Our registered office is No. 3 Bayside Executive Park, West Bay Street & Blake Road, Nassau, New Providence, The Bahamas.
                                </p>
                            </div>
    
                            <div class="col-md-6">
                                <p>
                                    Trade Nation is a trading name of Trade Nation Financial Markets Ltd, a financial services company registered in the Seychelles under number 810589-1, is authorised and regulated by the Financial Services Authority of Seychelles (FSA) with licence number SD150. Our registered office is CT House, Office 6B, Providence, Mahe, Seychelles.
                                </p>
                                <p>
                                    Trade Nation is a trading name of Trade Nation Financial (Pty) Ltd, a financial services company registered in South Africa under number 2018 / 418755 / 07, is authorised and regulated by the Financial Sector Conduct Authority (FSCA), with licence number 49846. Our registered office is 19 9th Street, Houghton Estate, Johannesburg, Gauteng, 2198 South Africa. 
                                </p>
                                <p>
                                    The information on this site is not directed at residents of the United States or any particular country outside the UK, Australia, South Africa, The Bahamas or Seychelles and is not intended for distribution to, or use by, any person in any country or jurisdiction where such distribution or use would be contrary to local law or regulation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route("legals_id", "") }}" class="text-light pe-5">Legal documents</a> 
                        <a href="{{ route('legals_id', 'cookie-policy') }}" class="text-light pe-5">Cookie Policy</a>
                        <a href="{{ route("legals_id", "privacy-policies") }}" class="text-light pe-5">Privacy Policy</a>
                    </div>
                    
                    <div class="col-md-6">
                        <p class="text-end ls_z">© {{ date("Y") }} Trade Nation. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        @include('sweetalert::alert')

        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>
            $('.multiple-items').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
            });

            $('a.a_Trading').hover(
				function () {
					// hover in
					$('section.Trading').show();
					$('section.Markets').hide();
					$('section.About').hide();
					$('section.Insights').hide();
				}, 
				 
				function () {
					// hover out
				}
			);
			$('section.Trading').hover(
				function () {
					// hover in
				}, 
				 
				function () {
					// hover out
					$('section.Trading').hide();
					$('section.Markets').hide();
					$('section.Insights').hide();
				}
			);

			$('a.a_Markets').hover(
				function () {
					// hover in
					$('section.Markets').show();
					$('section.Trading').hide();
					$('section.Insights').hide();
					$('section.About').hide();
				}, 
				 
				function () {
					// hover out
					$('section.Markets').show();
					$('section.Trading').hide();
					$('section.About').hide();
					$('section.Insights').hide();
				}
			);
			$('section.Markets').hover(
				function () {
					// hover in
				}, 
				 
				function () {
					// hover out
					$('section.Trading').hide();
					$('section.Markets').hide();
					$('section.Insights').hide();
				}
			);

			$('a.a_Insights').hover(
				function () {
					// hover in
					$('section.Insights').show();
					$('section.Trading').hide();
					$('section.Markets').hide();
					$('section.About').hide();
				}, 
				 
				function () {
					// hover out
				}
			);
			$('section.Insights').hover(
				function () {
					// hover in
				}, 
				 
				function () {
					// hover out
					$('section.Trading').hide();
					$('section.Markets').hide();
					$('section.Insights').hide();
				}
			);

			$('a.a_About').hover(
				function () {
					// hover in
					$('section.About').show();
					$('section.Trading').hide();
					$('section.Markets').hide();
					$('section.Insights').hide();
				}, 
				 
				function () {
					// hover out
				}
			);
			$('section.About').hover(
				function () {
					// hover in
				}, 
				 
				function () {
					// hover out
					$('section.Trading').hide();
					$('section.Markets').hide();
					$('section.Insights').hide();
					$('section.About').hide();
				}
			);

            $('section.About').hide();
            $('section.Trading').hide();
            $('section.Markets').hide();
            $('section.Insights').hide();
            
            $('body').click(
				function () {
					$('section.About').hide();
					$('section.Trading').hide();
					$('section.Markets').hide();
					$('section.Insights').hide();
				}
			);
        </script>
    </body>
</html>