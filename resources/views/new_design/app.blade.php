<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="robots" content="noindex">
        <meta name="googlebot" content="noindex">
        <meta name="googlebot-news" content="nosnippet">
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>{{ env('APP_NAME') }} - A fresh approach to trading</title>
        <link rel="icon" href="{{ asset('imgs/logo.svg') }}" sizes="16x16" type="image/png">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
        <style>
			.borde-bottom{
                border-bottom: 2px solid #fc5000;
                margin-bottom: 5px;
                padding-top: 15px;
            }

            .borde-bottom .dropdown-toggle{
                color: #fff !important;
            }

            /* Remove the default arrow */
            .nav-link::after {
                display: none;  /* This removes the default down arrow */
            }

            /* Space between the text and the icon */
            .dropdown-toggle {
                display: flex;
                align-items: center;
            }

            .dropdown-icon {
                font-size: 1.2em;
                margin-left: 8px; /* Adds space between the text and the icon */
                transition: transform 0.3s ease;
            }

            .dropdown.show .dropdown-icon {
                transform: rotate(45deg); /* Turns the arrow into a + icon */
            }

            .dropdown-menu {
                max-height: 300px; /* or whatever works for your layout */
                overflow-y: auto;
            }

			.pd {
				margin-top: 130px;
			}
			*{
				font-family: 'Montserrat', sans-serif;
			}
			.bg_purple{
				background-color: #53369D !important;
			}
			.text_purple{
				color: #53369D !important;
			}
            #welcome_banner{
                margin-top: 55px;
                padding-top: 150px;
                height: 60vh;
                background-color: #ff5d2e;
                background: linear-gradient(rgba(0,0,0,0.1) ,rgba(0,0,0,0.1)), url('https://images.prismic.io/trade-nation-marketing-cms/9d869c2c-c44d-4741-96da-0e9526e4d2af_1232x514_support+tiles_b%26w_02.png?auto=compress,format&rect=0,0,1233,514&w=1200&h=500');
                background-repeat: no-repeat;
                background-position: top;
                background-size: cover;
            }
			.header_bg{
				background-color: #02070b;
			}
			/* .dropdown:hover .dropdown-menu{
				display: block;
			} */
			.dropdown-menu{
				margin-top: 0;
			}
			.dropdown-large{ padding:1rem; }

			.eQbSFB {
				background-color: rgb(245, 243, 242);
				background-image: url('https://tradenation.com/_next/static/media/VectorYellowDiamond.862090a6.svg'), url('https://tradenation.com/_next/static/media/VectorBlackDiamond.e214fb9d.svg'), url('https://tradenation.com/_next/static/media/VectorOrangeDiamond.52e5c281.svg'), url('https://tradenation.com/_next/static/media/VectorGreenDiamond.7464f563.svg');
				background-position: right 500px top 400px, right 300px top 300px, right 100px top 200px, right -100px top 150px;
				/* background-position: right 84px bottom -557px, right 511px bottom -374px, right -128px bottom -229px, right 333px bottom -498px; */
				background-repeat: no-repeat;
				min-height: calc(100vh - 88px);
				/* height: 90vh; */
			}
			#savvy_traders{
				background: linear-gradient(rgba(0,0,0,0.1) ,rgba(0,0,0,0.1)), url('https://images.prismic.io/tnfev2/MjE4MzU2ZTMtMmQ4MS00NWNhLThlMWUtOGFjYTM3YmQ5NTQy_3b4bcf1f-4fc8-4f40-aec7-4a3236be14ff_b001specialcomponentimagehomepagesavvytrader1280x720.png?auto=compress,format&rect=0,0,1280,720&w=4000&h=720');
                background-repeat: no-repeat;
                background-position: top;
				background-size: cover;
				height: 70vh;
				border-radius: 40px;
			}
			.rund_h:hover{
				background-color: #02070b;
				color: #FFFFFF !important;
				font-weight: 400;
			}
			.visit_help:hover{
				background-color: #EE4C09;
				color: white;
				border: none;
			}
			.cLjKaK {
				height: 360px;
				display: flex;
				flex-direction: column;
				-webkit-box-pack: center;
				justify-content: center;
				-webkit-box-align: center;
				align-items: center;
				background: rgb(4, 227, 216);
				position: relative;
				overflow: hidden;
				margin: 60px 0px;
			}
			.yzosE {
				position: absolute;
				transform-box: fill-box;
				left: 1850px;
				bottom: -200px;
			}
			.yzotp {
				position: absolute;
				transform-box: fill-box;
				left: 1550px;
				bottom: -200px;
			}
			.yzovR {
				position: absolute;
				transform-box: fill-box;
				left: 1150px;
				bottom: -200px;
			}
			.ilXGCg {
				position: absolute;
				transform-box: fill-box;
				left: 950px;
				bottom: -200px;
			}
			.ilXGCj {
				position: absolute;
				transform-box: fill-box;
				left: 650px;
				bottom: -200px;
			}
			.ilXGxY {
				position: absolute;
				transform-box: fill-box;
				left: 400px;
				bottom: -200px;
			}
			.ilXGCn {
				position: absolute;
				transform-box: fill-box;
				left: 250px;
				bottom: -200px;
			}
			.ilXGzV {
				position: absolute;
				transform-box: fill-box;
				left: -40px;
				bottom: -200px;
			}
			.yzkTZ {
				position: absolute;
				transform-box: fill-box;
				left: -220px;
				bottom: -200px;
			}
			.yznlk {
				position: absolute;
				transform-box: fill-box;
				left: -540px;
				bottom: -200px;
			}
			.yzmfU {
				position: absolute;
				transform-box: fill-box;
				left: -630px;
				bottom: -200px;
			}
			.ieIpfQ {
				color: rgb(255, 255, 255);
				margin-bottom: 60px;
				position: relative;
			}

			.css-amhq3n {
				margin: 0;
				font-size: 40px;
				line-height: 48px;
				font-weight: 700;
				font-family: '__Montserrat_31f3fd',Helvetica,Arial,sans-serif,'__Montserrat_Fallback_31f3fd';
				color: #02070b;
			}
			.css-amhq3n {
				margin: 0;
				font-size: 40px;
				line-height: 48px;
				font-weight: 700;
				font-family: '__Montserrat_31f3fd',Helvetica,Arial,sans-serif,'__Montserrat_Fallback_31f3fd';
				color: #02070b;
			}
			.css-zq2esq {
				display: -webkit-inline-box;
				display: -webkit-inline-flex;
				display: -ms-inline-flexbox;
				display: inline-flex;
				-webkit-align-items: center;
				-webkit-box-align: center;
				-ms-flex-align: center;
				align-items: center;
				-webkit-box-pack: center;
				-ms-flex-pack: center;
				-webkit-justify-content: center;
				justify-content: center;
				position: relative;
				box-sizing: border-box;
				-webkit-tap-highlight-color: transparent;
				background-color: transparent;
				outline: 0;
				border: 0;
				margin: 0;
				border-radius: 0;
				padding: 0;
				cursor: pointer;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
				vertical-align: middle;
				-moz-appearance: none;
				-webkit-appearance: none;
				-webkit-text-decoration: none;
				text-decoration: none;
				color: inherit;
				text-transform: none;
				font-family: '__Montserrat_31f3fd',Helvetica,Arial,sans-serif,'__Montserrat_Fallback_31f3fd';
				font-weight: 500;
				font-size: 0.9375rem;
				line-height: 1.75;
				min-width: 64px;
				padding: 7px 21px;
				border-radius: 4px;
				-webkit-transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
				transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
				border: 1px solid rgba(156, 39, 176, 0.5);
				color: #9c27b0;
				border-color: white;
				border: 2px solid;
				color: #FFFFFF;
				font-size: 18px;
				font-weight: 700;
				height: 56px;
				padding: 0 32px;
				text-transform: none;
				text-align: center;
				border-radius: 40px;
				box-shadow: none;
			}
			section.Trading, section.Markets, section.Insights, section.About{
				display: none;
				background-color: #02070b;
			}
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
			div.show_nav p.text-light{
				font-size: 25px;
			}
			div.show_nav a:hover{
				border-bottom: 2px solid white;
				width: 70%;
			}
			.trade_now_btn{
				border: 2px solid #02070b;
				color: #02070b;
			}
			.trade_now_btn:hover{
				background-color: #02070b;
				color: #fff;
			}
			.maxi_max{
				border: 2px solid #02070b;
				background-color: #fff;
				padding: 20px 40px;
			}
			.maxi_max:hover{
				background-color: #02070b;
			}
			.share_btn:hover{
				color: #fff;
				background-color: #02070b;
			}
			.article_collapse a {
				display: block;
				text-decoration: none;
				padding-bottom: 20px;
				color: #7A8490;
			}
			.card{
				border: none !important;
				margin-top: 20px !important;
			}
			.carousel-indicators{
				position: relative !important;
			}
			.slick-arrow, .slick-dots{
				display: none !important;
			}
			.cookie_btn{
				background-color: #02070b;
				color: #fff;
			}
			.cookie_btn:hover{
				background-color: #fff;
				color: #02070b;
			}
			#account_types_banner{
                height: 50vh;
				padding-top: 30px;
                background-color: #ff5d2e;
                background: linear-gradient(rgba(0,0,0,0.7) ,rgba(0,0,0,0.7)), url('{{ asset("imgs/humans.jpg") }}');
                background-repeat: no-repeat;
                background-position: top;
                background-size: cover;
            }
			#our_ambassadors{
                padding-top: 100px;
                height: 60vh;
                background-color: #ff5d2e;
                background: linear-gradient(rgba(0,0,0,0.1) ,rgba(0,0,0,0.1)), url('https://images.prismic.io/trade-nation-marketing-cms/d52bd161-8ef6-4fbd-b974-82b2acaaf1b2_business-cards-mockup-hero.jpg?auto=compress,format&rect=374,0,483,514&w=480&h=511');
                background-repeat: no-repeat;
                background-position: top;
                background-size: cover;
            }
            #our_ambassadors h1:first-child{
                background: #fff;
                /* box-shadow: 10px 0 0 #fc5000, -10px 0 0 #fc5000; */
                /* color: #fff; */
                font-size: 4rem;
                width: fit-content;
                padding: 10px 25px;
                position: relative;
                top: 70px;
            }
            #our_ambassadors h1:last-child{
                background: #333333;
                /* box-shadow: 10px 0 0 #fc5000, -10px 0 0 #fc5000; */
                color: #fff;
                font-size: 4rem;
                width: fit-content;
                padding: 10px 25px;
                position: relative;
                top: 70px;
            }
			#brokerage_fees{
                height: 50vh;
                background-color: #ff5d2e;
                background: linear-gradient(rgba(0,0,0,0.1) ,rgba(0,0,0,0.1)), url('https://images.prismic.io/trade-nation-marketing-cms/43988911-9fbe-4e1c-8344-7cda93a55999_how-brokerage-fees-work-in-trading-hero-desktop.jpg?auto=compress,format&rect=0,0,1984,827&w=1200&h=500');
                background-repeat: no-repeat;
                background-position: bottom;
                background-size: cover;
                margin-bottom: 150px;
            }
            #brokerage_fees h1:first-child{
                background: #fc5000;
                color: #fff;
                font-size: 3rem;
                width: fit-content;
                padding: 10px 20px;
                position: relative;
                top: 70px;
                font-weight: 900;
            }
            #brokerage_fees h1:last-child{
                background: #333333;
                color: #fff;
                font-size: 3rem;
                width: fit-content;
                padding: 10px 25px;
                position: relative;
                top: 70px;
                font-weight: 900;
            }
			#trading_stories{
				background-image: url('https://images.prismic.io/trade-nation-marketing-cms/a006c15c-c51d-45dc-a93d-ddf8f92aa473_Testimonials-Reviews-Hero_05.jpg?auto=compress,format&rect=0,77,1400,547&w=1280&h=500');
				background-size: cover;
                background-repeat: no-repeat;
                background-position: bottom;
                padding-top: 100px;
                height: 90vh;
            }
			.actions_tr{
				padding: 0px 0px !important;
			}
			.slide_me{
                margin: 0px 10px;
            }
            .slide_me > div > p{
                color: #fff;
                font-size: 14px;
                font-weight: 400;
                line-height: 26px;
            }
            .slide_me > div > h5{
                color: #fff;
                font-size: 21px;
                font-weight: 600;
                line-height: 32px;
            }
			.slide_me_{
                height: 400px !important;
            }
            .slide_me__{
                height: 250px !important;
            }
			.aa, .bb{
				border: 2px solid #02070b;
				border-radius: 50%;
				height: 60px;
				width: 60px;
			}
			.footer_t{
				padding-top: 3rem !important;
				padding-bottom: 3rem !important;
			}

			@media not all and (min-resolution: 0.001dpcm){
				.rm_p_te_{
					padding: 57px;
				    text-align: center;
				}
			}
			
			@media (max-width: 800px){
				.draggable{
					padding: 0 !important;
				}
				.slick-slide{
					width: 400px !important;
				}
				.rm_p_2{
					padding-left: 1rem !important;
					padding-right: 1rem !important;
				}
				header{
					margin-bottom: 200px !important;
				}
				.ff{
					left: 0 !important;
					border-radius: 0px !important;
				}
				.ff2{
					padding-left: 0rem !important;
					padding-right: 0rem !important;
				}
				.ff3{
					padding-top: 0rem !important;
					padding-bottom: 0rem !important;
				}
				.tk{
					/* padding-top: 500px !important; */
				}
				.eQbSFB {
					background-image: url('https://tradenation.com/_next/static/media/VectorBlackDiamond.e214fb9d.svg'), url('https://tradenation.com/_next/static/media/VectorOrangeDiamond.52e5c281.svg'), url('https://tradenation.com/_next/static/media/VectorYellowDiamond.862090a6.svg'), url('https://tradenation.com/_next/static/media/VectorGreenDiamond.7464f563.svg');
					background-position: right 119px top -76px, right -88px top -97px, right -35px top -83px, right 23px top -81px;
					background-size: 106px 138px, 126px 258px, 119px 244px, 157px 210px;
				}
				header{
					margin-bottom: 0;
				}
				.haq{
					font-size: 25px !important;
				}
				.my_f{
					font-size: 40px !important;
				}
				.rm_mb{
					margin-bottom: -1rem !important;
				}
				.rm_pt{
					padding-top: 0rem !important;
				}
				.rm_p{
					padding: 0px !important;
				}
				.rm_p_test{
					display: block !important;
					right: 0px !important;
					margin-top: 0px !important;
					width: 100% !important;
					padding-top: 20px !important;
				}
				.rm_p_test2{
					width: 100% !important;
					height: 390px !important;
					text-align: center;
					padding: 56px !important;
					font-size: 16px !important;
				}
				#our_ambassadors h1:first-child{
                    font-size: 2rem;
                    width: fit-content;
                    padding: 10px 25px;
                    position: relative;
                    top: 70px;
                }
                #our_ambassadors h1:last-child{
                    font-size: 2rem;
                    width: fit-content;
                    padding: 10px 25px;
                    position: relative;
                    top: 70px;
                }
                #our_ambassadors{
                    padding-top: 10px;
                    height: 35vh;
                }
				#account_types_banner{
					height: 20vh;
				}
				.cLjKaK{
					margin: 0px;
				}
				.footer_t{
					padding-top: 1rem !important;
				}
				.vedx{
					padding-bottom: 0rem !important;
				}
			}
			.login_btn{
				border: 2px solid white;
			}
			.login_btn:hover{
				background-color: white;
				color: black !important;
			}
			.btn_e{
				background-color: #EB4B08;
				border-radius: 50rem !important;
			}
			a.a_Trading, a.a_Markets, a.a_Insights, a.a_About{
                cursor: default;
            }
        </style>
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

		<style>
			.navbar-toggler-icon {
				width: 1.5em;
				height: 1.5em;
				background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='white' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
				background-size: cover;
			}

			.custom-toggler.open .navbar-toggler-icon {
				background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='white' stroke-width='2' d='M6 6L24 24M6 24L24 6'/%3E%3C/svg%3E");
			}
		</style>		
	</head>

	<body>
		<header class="my-bg-color"  style="margin-bottom: 125px;">
			<nav class="d-none d-lg-block navbar navbar-expand-lg navbar-dark header_bg border border-top-0 border-start-0 border-end-0 fixed-top pb-3">
				<span class="pb-2 container text-light pt-1 d-flex" style="font-size: 12px;">
					Financial Spread Bets and CFDs are complex instruments and come with a high risk of losing money rapidly due to leverage. 82.8% of retail investor accounts lose money when trading CFDs with this provider. You should consider whether you understand how CFDs work and whether you can afford to take the high risk of losing your money.
				</span>
				
				<div class="container-fluid px-5 pt-2">
                    <a href="{{ url('/') }}" class="text-dark" style="display: flex; text-decoration: none; align-items: center; color: white; justify-content: center;">
                        <img src="https://images.prismic.io/tnfev2/8c6796eb-086d-4ac1-8846-6ea8b63ee68a_TN-PrimaryLogo-RGB-WhiteText-Strapline.png?auto=compress%2Cformat&fit=max&w=3840" 
                            alt="{{ env('APP_NAME') }} logo" style="width: 300px;">
                    </a>

					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="rm_p navbar-nav ms-auto mb-2 mb-lg-0 ps-5">
                            <li class="nav-item px-3">
								<a class="nav-link text-white a_Trading"><b>Trading</b></a>
							</li>

                            <li class="nav-item px-3">
								<a class="nav-link text-white a_Markets"><b>Markets</b></a>
							</li>

                            <li class="nav-item px-3">
								<a class="nav-link text-white a_Insights"><b>Insights</b></a>
							</li>

                            <li class="nav-item px-3">
								<a class="nav-link text-white a_About"><b>About Us</b></a>
							</li>

							<li class="nav-item px-3">
								<a class="nav-link text-white" href="{{ route('account_types_new') }}"><b>Account types</b></a>
							</li>
						</ul>

						<ul class="navbar-nav  mb-2 mb-lg-0">
                            
                            @guest
                                <li class="nav-item">
                                    <a class="t_now nav-link text-white rounded-pill px-4" 
										href="{{ route('register') }}" 
										style="color: #02070b !important; background-color: #04e3d8; border: 2px solid #04e3d8;">
										<b>Sign up / Log in</b>
									</a>
								</li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link text-white border border-light rounded-pill px-4" href="{{ route('dashboard') }}"> Goto Dashboard </a>
                                </li>
                            @endguest
						</ul>
					</div>
				</div>
			</nav>

			{{-- <!-- Mobile view nav -->
			<nav class="navbar navbar-expand-lg navbar-dark header_bg d-lg-none fixed-top">
				<span class="pb-2 container text-light pt-1 d-flex" style="font-size: 12px;">
					Financial Spread Bets and CFDs are complex instruments and come with a high risk of losing money rapidly due to leverage. 82.8% of retail investor accounts lose money when trading CFDs with this provider. You should consider whether you understand how CFDs work and whether you can afford to take the high risk of losing your money.
				</span>

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
			</nav> --}}

			<!-- Mobile view nav -->
            <nav class="navbar navbar-expand-lg navbar-dark header_bg d-lg-none fixed-top">
                <div class="d-flex container" style="justify-content: space-between; align-items: center;">
                    <p class="p-0 m-0 text-light" style="font-size: 8px;">
						Financial Spread Bets and CFDs are complex instruments and come with a high risk of losing 
						money rapidly due to leverage. 73.6% of retail investor accounts lose money when trading 
						CFDs with this provider. You should consider whether you understand how CFDs work and whether 
						you can afford to take the high risk of losing your money.
					</p>
                </div>
    
                <div class="container-fluid py-2">
                    <a href="{{ url('/') }}" class="text-dark" style="display: flex; text-decoration: none; align-items: center; color: white; justify-content: center;">
                        <img src="https://images.prismic.io/tnfev2/ZnxNG5bWFbowe4nW_TN-WebsiteLogo-Mobile.png?auto=format%2Ccompress%3Fauto%3Dcompress%2Cformat&rect=0%2C0%2C625%2C99&w=1920&fit=max" 
                            alt="site-logo" style="width: 170px;"
                        />
                    </a>
    
                    <div class="d-flex align-items-center">
						<a class="nav-link btn_e rounded-pill p-3 btn btn-sm text-dark me-1 mt-3"
						   href="{{ route('login') }}"
						   style="background-color: #35b998; border: none;">
							<b>Sign up / Log in</b>
						</a>
					
						<button class="navbar-toggler custom-toggler" type="button"
								data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
								aria-controls="navbarNavAltMarkup" aria-expanded="false"
								aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
					</div>
					
    
                    <div class="collapse navbar-collapse pt-4" id="navbarNavAltMarkup">
                        <div class="navbar-nav" style="height: 100vh !important;">
                            <div class="dropdown borde-bottom">
                                <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownTrading" 
                                    data-bs-toggle="dropdown" aria-expanded="false"
                                    style="display: flex; justify-content: space-between;">
                                    Trading <span class="dropdown-icon">+</span>
                                </a>
                            
                                <ul class="dropdown-menu" aria-labelledby="dropdownTrading">
                                    <li><span class="mt-3 dropdown-item-text mb-2" style="color: #fc5000;">Trade Nation</span></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('why_trade_with_us') }}">Why Trade with Us?</a></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('why_trade_with_us') }}#fixed-spread-trading">Fixed Spread Trading</a></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('why_trade_with_us') }}#cfd-trading">CFD Trading</a></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('why_trade_with_us') }}#negative-balance-protection">Negative Balance Protection</a></li>
                            
                                    <li><span class="mt-3 dropdown-item-text mb-2" style="color: #fc5000;">Trading Cost</span></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_costs') }}">Our Costs</a></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_costs') }}#low-fixed-spreads">Low Fixed Spreads</a></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_costs') }}#overnight-funding">Overnight Funding</a></li>
                            
                                    <li><span class="mt-3 dropdown-item-text mb-2" style="color: #fc5000;">Trading Tools</span></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_tools') }}">Our Tools</a></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_tools') }}#real-time-news">Real Time News</a></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_tools') }}#signal-centre">Signal Centre</a></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_tools') }}#risk-management-tool">Risk Management Tool</a></li>
                            
                                    <li><span class="mt-3 dropdown-item-text mb-2" style="color: #fc5000;">Trading Explained</span></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_explained') }}">Level up Your Trading</a></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_explained') }}#spread-trades">Spread Trading</a></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_explained') }}#contracts-for-differences">Contracts for Difference</a></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_explained') }}#market-analysis">Market Analysis</a></li>
                                    <li><a class="dropdown-item" style="text-decoration: none;" href="{{ route('trading_explained') }}#signal-centre">Signal Centre</a></li>
                                </ul>
                            </div>
                            
                            
    
                            <div class="dropdown borde-bottom">
                                <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMarkets" 
                                    data-bs-toggle="dropdown" aria-expanded="false"
                                    style="display: flex; justify-content: space-between;">
                                    Markets <span class="dropdown-icon">+</span>
                                </a>
    
                                <ul class="dropdown-menu" aria-labelledby="dropdownMarkets">
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
    
                            <div class="dropdown borde-bottom">
                                <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownInsights" 
                                    data-bs-toggle="dropdown" aria-expanded="false"
                                    style="display: flex; justify-content: space-between;">
                                    Insights <span class="dropdown-icon">+</span>
                                </a>
    
                                <ul class="dropdown-menu" aria-labelledby="dropdownInsights">
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
    
                            <div class="dropdown borde-bottom mb-4">
                                <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownAboutUs" 
                                    data-bs-toggle="dropdown" aria-expanded="false"
                                    style="display: flex; justify-content: space-between;">
                                    About Us <span class="dropdown-icon">+</span>
                                </a>
    
                                <ul class="dropdown-menu" aria-labelledby="dropdownAboutUs">
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
                        </div>
                    </div>
                </div>
            </nav>

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
		</header>
		
		<main>
			@yield('content')
		</main>

		<section class="sc-915eeb0c-0 cLjKaK">
			<svg width="710" height="710" fill="#fc6f2c" class="sc-915eeb0c-2 yzosE">
				<polygon points="0,355, 355,0, 710,355, 355,710 "></polygon>
			</svg>
			<svg width="710" height="710" fill="#fc5000" class="sc-915eeb0c-2 yzotp">
				<polygon points="0,355, 355,0, 710,355, 355,710 "></polygon>
			</svg>
			<svg width="710" height="710" fill="#fc6f2c" class="sc-915eeb0c-2 yzovR">
				<polygon points="0,355, 355,0, 710,355, 355,710 "></polygon>
			</svg>
			<svg width="710" height="710" fill="#fc5000" class="sc-915eeb0c-2 ilXGCg">
				<polygon points="0,355, 355,0, 710,355, 355,710 "></polygon>
			</svg>
			<svg width="710" height="710" fill="#fc6f2c" class="sc-915eeb0c-2 ilXGCj">
				<polygon points="0,355, 355,0, 710,355, 355,710 "></polygon>
			</svg>
			<svg width="710" height="710" fill="#fc5000" class="sc-915eeb0c-2 ilXGxY">
				<polygon points="0,355, 355,0, 710,355, 355,710 "></polygon>
			</svg>
			<svg width="710" height="710" fill="#fc6f2c" class="sc-915eeb0c-2 ilXGCn">
				<polygon points="0,355, 355,0, 710,355, 355,710 "></polygon>
			</svg>
			<svg width="710" height="710" fill="#fc5000" class="sc-915eeb0c-2 ilXGzV">
				<polygon points="0,355, 355,0, 710,355, 355,710 "></polygon>
			</svg>
			<svg width="710" height="710" fill="#fc6f2c" class="sc-915eeb0c-2 yzkTZ">
				<polygon points="0,355, 355,0, 710,355, 355,710 "></polygon>
			</svg>
			<svg width="710" height="710" fill="#fc5000" class="sc-915eeb0c-2 yznlk">
				<polygon points="0,355, 355,0, 710,355, 355,710 "></polygon>
			</svg>
			<svg width="710" height="710" fill="#fc6f2c" class="sc-915eeb0c-2 yzmfU">
				<polygon points="0,355, 355,0, 710,355, 355,710 "></polygon>
			</svg>
			
			<h3 class="MuiTypography-root MuiTypography-h3 sc-915eeb0c-1 ieIpfQ css-amhq3n pb-5 text-light" id="ready-to-trade" field="[object Object]">Ready to Trade?</h3>
			<a class="mt-4 MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedSecondary MuiButton-sizeLarge MuiButton-outlinedSizeLarge MuiButton-root MuiButton-outlined MuiButton-outlinedSecondary MuiButton-sizeLarge MuiButton-outlinedSizeLarge gtm_button_primary css-zq2esq btn__d" tabindex="0" href="{{ route('register') }}" target="_blank" rel="noopener noreferrer">Trade Now<span class="MuiTouchRipple-root css-w0pj6f"></span></a>
		</section>
		
		<footer class="pb-5">
            {{-- <div class="p-5 rm_p_2 container-fluid vedx">
				<div class="pb-4 pt-3">
					<div class="row">
						<div class="col-md-4 mb-5">
							<h4 class="pb-3"><b>Payment methods</b></h4>

							<div class="d-flex">
								<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Visa.svg/1200px-Visa.svg.png" alt="" class="img-fluid mx-2" style="width: 50px; height: 40px;">

								<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Mastercard_2019_logo.svg/1200px-Mastercard_2019_logo.svg.png" alt="" class="img-fluid mx-2" style="width: 60px; height: 40px;">

								<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bitcoin.svg/1200px-Bitcoin.svg.png" alt="" class="img-fluid mx-2" style="width: 40px; height: 40px;">
							</div>
						</div>

						<!-- <div class="col-md-3 mb-5">
							<h4 class="pb-3"><b>Download mobile apps</b></h4>
							<div class="d-flex">
								<img src="https://images.prismic.io/tnfev2/4eb4d5dd-ef1f-49bf-87f7-b35febe70bf3_Download_on_the_App_Store_Badge.svg?auto=compress,format" alt="" class="">
								<img src="{{ asset('imgs/Google_Play_Store_badge_EN.svg') }}" alt="" style="width: 130px;">
							</div>
						</div> -->

						<div class="col-md-4 mb-5">
							<h4 class="pb-3"><b>Social</b></h4>
							<div>
								<a href="#!" target="_blank" class="text_purple" style="text-decoration: none;" title="Twitter">
									<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M29.6364 10.3708C29.4783 10.7092 29.184 11.1365 28.7536 11.6529C28.3232 12.1694 27.7918 12.6234 27.1594 13.0152C27.1769 13.1577 27.1902 13.2912 27.1989 13.4159C27.2077 13.5405 27.2121 13.6741 27.2121 13.8165C27.2121 14.5644 27.1287 15.3836 26.9618 16.2739C26.795 17.1643 26.5357 18.068 26.1845 18.9851C25.8332 19.9022 25.3896 20.8103 24.8538 21.7096C24.318 22.6089 23.6812 23.4413 22.9434 24.2071C22.2056 24.9728 21.3668 25.6496 20.4269 26.2372C19.4872 26.8249 18.4374 27.2611 17.2781 27.5459C15.9254 27.8487 14.5727 28 13.2201 28C12.6404 28 12.0387 27.9688 11.4151 27.9065C10.7914 27.8441 10.1678 27.7284 9.54419 27.5593C8.92056 27.3901 8.30571 27.1631 7.69965 26.8781C7.09355 26.5934 6.52701 26.2282 6 25.783C7.37023 25.9789 8.66579 25.8676 9.8867 25.4491C11.1076 25.0306 12.2187 24.4387 13.22 23.673C12.9917 23.673 12.6886 23.6506 12.3109 23.6062C11.9333 23.5616 11.5292 23.4281 11.0988 23.2055C10.6684 22.9828 10.2336 22.6401 9.79447 22.1771C9.3553 21.7143 8.96882 21.0642 8.63505 20.2272C8.74045 20.2627 8.88538 20.2851 9.06983 20.294C9.25429 20.3029 9.45192 20.2985 9.66272 20.2805C9.87352 20.2626 10.0799 20.2404 10.282 20.2139C10.484 20.1872 10.664 20.156 10.8221 20.1202C9.90866 19.8354 9.1928 19.4569 8.67458 18.985C8.15635 18.5131 7.77427 18.0279 7.52833 17.5293C7.28239 17.0307 7.12868 16.5588 7.0672 16.1137C7.00571 15.6685 6.97497 15.3212 6.97497 15.0719C7.20334 15.2144 7.53711 15.3658 7.97629 15.526C8.41546 15.6863 8.81072 15.7575 9.16206 15.7397C8.44181 15.1343 7.9192 14.5333 7.59421 13.9367C7.26922 13.3402 7.07598 12.7614 7.01449 12.2005C6.95301 11.6396 6.98375 11.092 7.10672 10.5578C7.22969 10.0236 7.39658 9.50717 7.60738 9.00857C8.57357 10.1126 9.53536 11.0074 10.4928 11.693C11.4502 12.3786 12.3636 12.9084 13.2332 13.2823C14.1028 13.6563 14.9153 13.9056 15.6706 14.0302C16.426 14.1549 17.0848 14.2172 17.6469 14.2172C17.5415 13.5049 17.5371 12.8282 17.6336 12.1872C17.7302 11.5461 17.9324 10.9585 18.2397 10.4242C18.5472 9.89002 18.9556 9.43149 19.465 9.04863C19.9745 8.66578 20.5805 8.37641 21.2833 8.18053C22.1439 7.93123 22.9697 7.94013 23.7601 8.20724C24.5506 8.47435 25.2269 8.93738 25.7891 9.59621C26.035 9.5784 26.4215 9.49827 26.9486 9.35581C27.4755 9.21335 28.1344 8.90172 28.9248 8.42093C28.8721 8.599 28.7887 8.81714 28.6745 9.07534C28.5603 9.33355 28.4153 9.59621 28.2397 9.86331C28.064 10.1304 27.8531 10.3886 27.6072 10.6379C27.3613 10.8872 27.0802 11.092 26.764 11.2523C27.0275 11.1989 27.3174 11.1365 27.6335 11.0653C27.8969 10.9941 28.2045 10.9006 28.5558 10.7848C28.9072 10.6691 29.2675 10.5311 29.6364 10.3708Z" fill="#53369D "></path>
									</svg>
								</a>
								
								<a href="#!" target="_blank" class="text_purple" style="text-decoration: none;" title="Facebook">
									<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M23.5547 8.00416L20.9241 8C17.9686 8 16.0587 9.9319 16.0587 12.922V15.1914H13.4136C13.1851 15.1914 13 15.3741 13 15.5994V18.8875C13 19.1128 13.1853 19.2953 13.4136 19.2953H16.0587V27.5922C16.0587 27.8175 16.2437 28 16.4723 28H19.9233C20.1519 28 20.3369 27.8173 20.3369 27.5922V19.2953H23.4296C23.6581 19.2953 23.8432 19.1128 23.8432 18.8875L23.8445 15.5994C23.8445 15.4912 23.8008 15.3876 23.7234 15.311C23.6459 15.2345 23.5404 15.1914 23.4306 15.1914H20.3369V13.2676C20.3369 12.343 20.5604 11.8736 21.7822 11.8736L23.5543 11.873C23.7827 11.873 23.9677 11.6903 23.9677 11.4651V8.41197C23.9677 8.18705 23.7829 8.00458 23.5547 8.00416Z" fill="#53369D"></path>
									</svg>
								</a>
								
								<a href="#!" target="_blank" class="text_purple" style="text-decoration: none;" title="Instagram">
									<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M22.5862 8H13.4138C10.4286 8 8 10.4286 8 13.4138V22.5863C8 25.5714 10.4286 28 13.4138 28H22.5863C25.5714 28 28 25.5714 28 22.5863V13.4138C28 10.4286 25.5714 8 22.5862 8V8ZM18 23.4686C14.9846 23.4686 12.5314 21.0154 12.5314 18C12.5314 14.9846 14.9846 12.5314 18 12.5314C21.0154 12.5314 23.4686 14.9846 23.4686 18C23.4686 21.0154 21.0154 23.4686 18 23.4686ZM23.5994 13.8211C22.7083 13.8211 21.9835 13.0963 21.9835 12.2052C21.9835 11.3141 22.7083 10.5891 23.5994 10.5891C24.4905 10.5891 25.2154 11.3141 25.2154 12.2052C25.2154 13.0963 24.4905 13.8211 23.5994 13.8211Z" fill="#53369D "></path>
										<path d="M17.9996 13.7139C15.6365 13.7139 13.7139 15.6364 13.7139 17.9996C13.7139 20.3626 15.6365 22.2853 17.9996 22.2853C20.3628 22.2853 22.2853 20.3626 22.2853 17.9996C22.2853 15.6364 20.3628 13.7139 17.9996 13.7139Z" fill="#53369D "></path>
									</svg>
								</a>
								
								<a href="http://youtube.com/channel/UCUt_0AhuDhi5P7gNSZsx2fw" target="_blank" class="text_purple" style="text-decoration: none;" title="Youtube">
									<svg width="36" height="36" viewBox="-6 0 30 13" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14.2616 0.631836H3.73837C1.67372 0.631836 0 2.30556 0 4.37021V9.63072C0 11.6954 1.67372 13.3691 3.73837 13.3691H14.2616C16.3263 13.3691 18 11.6954 18 9.63072V4.37021C18 2.30556 16.3263 0.631836 14.2616 0.631836ZM11.7334 7.25641L6.81133 9.60394C6.68017 9.66649 6.52868 9.57087 6.52868 9.42558V4.58378C6.52868 4.43643 6.68415 4.34092 6.81558 4.40753L11.7377 6.9018C11.884 6.97594 11.8815 7.18581 11.7334 7.25641Z" fill="#53369D"></path>
									</svg>
								</a>
								
								<a href="#!" target="_blank" class="text_purple" style="text-decoration: none;" title="Linkedin">
									<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M28 20.1614V27.5555H23.7134V20.6566C23.7134 18.9235 23.0933 17.7408 21.5417 17.7408C20.3572 17.7408 19.6524 18.5379 19.3423 19.3089C19.2292 19.5846 19.2001 19.9682 19.2001 20.3541V27.5555H14.912C14.912 27.5555 14.9697 15.871 14.912 14.6604H19.1997V16.4882C19.191 16.5019 19.1797 16.5167 19.1715 16.5299H19.1997V16.4882C19.7693 15.6109 20.7867 14.3575 23.0638 14.3575C25.885 14.3574 28 16.2005 28 20.1614ZM10.4265 8.44434C8.95951 8.44434 8 9.40654 8 10.6719C8 11.9096 8.93175 12.901 10.3695 12.901H10.3982C11.8935 12.901 12.8235 11.9098 12.8235 10.6719C12.7953 9.40654 11.8935 8.44434 10.4265 8.44434ZM8.25467 27.5555H12.5411V14.6604H8.25467V27.5555Z" fill="#53369D "></path>
									</svg>
								</a>
								<br><br>
								<p>
									We post expert insight, market reactions, how-to tips
								</p>
							</div>
						</div>

						<div class="col-md-4">
							<h4 class="pb-3"><b>Regulatory Body</b></h4>
							<p>
								<img src="https://tradenation.com/diamond.png" alt="" class="pe-2"> Financial Conduct Authority
							</p>
						</div>
					</div>
				</div>

				<hr>

				<div class="row py-4">
					<div class="col-md-3">
						<h4><b>Customer Support</b></h4>
					</div>

					<div class="col-md-6">
						<div class="d-flex">
							<p class="px-3">
								<img src="https://tradenation.com/_next/image/?url=%2Ficons%2Fchat.png&w=32&q=75" alt="" class="pe-2">  Chat
							</p>
							<p class="px-3">
								<img src="https://tradenation.com/_next/image/?url=%2Ficons%2Femail.png&w=32&q=75" alt="" class="pe-2">  <a href="mailto:support@tradenation-uk.com" class="text-dark">Email</a>
							</p>
							<p class="px-3">
								<img src="https://tradenation.com/_next/image/?url=%2Ficons%2Ffaq.png&w=32&q=75" alt="" class="pe-2">  <a href="{{ route('faqs') }}" class="text-dark">FAQ</a>
							</p>
						</div>
					</div>

					<div class="col-md-3">
						<p>
							<img src="https://tradenation.com/_next/image/?url=%2Ficons%2Ftelephone.png&w=32&q=75" alt="" class="pe-2">  +44 1254 369752
						</p>
					</div>
				</div>

				<hr>

				<div class="pb-3 pt-4">
					<a href="{{ route('legals_id', 'cookie-policy') }}" class="px-2 text-dark" style="text-decoration: none;"><b>Cookies</b></a>
				</div>

				<hr>

				<div class="text-center">
					© 2019 - {{ date('Y') }} Trade Nation. All Rights Reserved.
				</div>
            </div> --}}
			<div class="container">
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
                        <h6><b>Regulatory bodies</b></h6>

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
                            <img src="https://www.thestainlesscommunity.ie/cdn/shop/files/Aston_Villa_FC_Metal_Wall_Art_Matte_Black_1080x.jpg?v=1730557364" 
                                alt="" class="img-fluid pt-2" width="80px"/>
								
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoaMmPMzNITu07BF3tvH71yhmpuN5XgGXtXA&s" 
                                alt="" class="img-fluid" width="70px"/>
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
                                    Financial Spread Trades and CFDs are complex instruments and come with a high risk of losing money rapidly due to leverage. <b>82.4% of retail investor accounts lose money when trading CFDs with this provider.</b> You should consider whether you understand how CFDs work and whether you can afford to take the high risk of losing your money. Refer to our <a href="{{ route("legals_new") }}" class="text-dark">legal documents.</a> 
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
                        <a href="{{ route("legals_id", "") }}" class="text-dark pe-5">Legal documents</a> 
                        <a href="{{ route('legals_id', 'cookie-policy') }}" class="text-dark pe-5">Cookie Policy</a>
                        <a href="{{ route("legals_id", "privacy-policies") }}" class="text-dark pe-5">Privacy Policy</a>
                    </div>
                    
                    <div class="col-md-6">
                        <p class="text-end ls_z">© {{ date("Y") }} Trade Nation. All Rights Reserved</p>
                    </div>
                </div>
			</div>
        </footer>

        <script src="//code.tidio.co/mg1gml2jvh7u7qrw0eshwhpg0g2hzgdg.js" async></script>

		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        @include('sweetalert::alert')
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<script>
			// $('section.Trading').hide();
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


			// $('a.a_Trading').click(
			// 	function () {
			// 		// hover in
			// 		$('section.Trading').show();
			// 		$('section.Markets').hide();
			// 		$('section.About').hide();
			// 		$('section.Insights').hide();
			// 	}, 
				 
			// 	function () {
			// 		// hover out
			// 	}
			// );
			// $('a.a_Markets').click(
			// 	function () {
			// 		// hover in
			// 		$('section.Markets').show();
			// 		$('section.Trading').hide();
			// 		$('section.Insights').hide();
			// 		$('section.About').hide();
			// 	}, 
				 
			// 	function () {
			// 		// hover out
			// 		$('section.Markets').show();
			// 		$('section.Trading').hide();
			// 		$('section.About').hide();
			// 		$('section.Insights').hide();
			// 	}
			// );
			// $('a.a_Insights').click(
			// 	function () {
			// 		// hover in
			// 		$('section.Insights').show();
			// 		$('section.Trading').hide();
			// 		$('section.Markets').hide();
			// 		$('section.About').hide();
			// 	}, 
				 
			// 	function () {
			// 		// hover out
			// 	}
			// );
			// $('a.a_About').click(
			// 	function () {
			// 		// hover in
			// 		$('section.About').show();
			// 		$('section.Trading').hide();
			// 		$('section.Markets').hide();
			// 		$('section.Insights').hide();
			// 	}, 
				 
			// 	function () {
			// 		// hover out
			// 	}
			// );

			$('body').click(
				function () {
					$('section.About').hide();
					$('section.Trading').hide();
					$('section.Markets').hide();
					$('section.Insights').hide();
				},
			);
			$('.variabled').slick({
				dots: true,
				infinite: true,
				speed: 300,
				slidesToShow: 2,
				centerMode: true,
				variableWidth: true
			});
			$('.responsive').slick({
                adaptiveHeight: true,
                autoplaySpeed: 4000,
                autoplay: true,
                dots: true,
                infinite: true,
                speed: 1000,
                slidesToShow: 4,
                slidesToScroll: 1,
                respondTo: 'window',
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

			$('button.aa').click(function(){
				$(".variabled").slick('slickPrev');
			});
			$('button.bb').click(function(){
				$(".variabled").slick('slickNext');
			});

			// $('button.next').click(function(){
			// 	$("#yourid").slick('slickPrev');
			// });
		</script>
		
		<script>
			// Get the URL parameters
			const target = window.location.hash.substr(1);

			// If the URL contains '#collapseEight', open the corresponding accordion item
			if (target === 'accordionExample3') {
				const collapseEight = document.getElementById('collapseEight');
				const accordion = new bootstrap.Collapse(collapseEight, { toggle: true });
			}else if (target === 'accordionExample4') {
				const collapseEight = document.getElementById('collapse14');
				const accordion = new bootstrap.Collapse(collapseEight, { toggle: true });
			}else if  (target === 'accordionExample2') {
				const collapseEight = document.getElementById('collapseFive');
				const accordion = new bootstrap.Collapse(collapseEight, { toggle: true });
			}
		</script>

		<script>
			document.querySelectorAll('.dropdown').forEach(dropdown => {
				const toggle = dropdown.querySelector('.dropdown-toggle');
				const icon = toggle.querySelector('.dropdown-icon');

				// Change to "−" when dropdown opens
				dropdown.addEventListener('show.bs.dropdown', function () {
					if (icon) {
						icon.textContent = '−';
					}
				});

				// Change back to "+" when dropdown closes
				dropdown.addEventListener('hide.bs.dropdown', function () {
					if (icon) {
						icon.textContent = '+';
					}
				});
			});

		</script>

		<script>
			const navbarCollapse = document.getElementById('navbarNavAltMarkup');
			const authBtn = document.querySelector('.btn_e'); // Adjust if you have more btn_e

			// When navbar menu is shown
			navbarCollapse.addEventListener('show.bs.collapse', () => {
				if (authBtn) authBtn.style.display = 'none';
			});

			// When navbar menu is hidden
			navbarCollapse.addEventListener('hide.bs.collapse', () => {
				if (authBtn) authBtn.style.display = 'inline-block';
			});
		</script>

		<script>
			const toggler = document.querySelector('.custom-toggler');
			const navbar = document.getElementById('navbarNavAltMarkup');

			navbar.addEventListener('shown.bs.collapse', () => {
				toggler.classList.add('open');
			});

			navbar.addEventListener('hidden.bs.collapse', () => {
				toggler.classList.remove('open');
			});
		</script>

	</body>
</html>