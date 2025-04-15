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
        <link rel="icon" href="https://tnfev2.cdn.prismic.io/tnfev2/76a4e3dc-43ad-4b62-a157-a4feba9bf285_Logo.svg" sizes="16x16" type="image/png">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <style>
            .my-bg-color{
                background-color: #fc5000 !important;
            }
            .text-white{
                color: #FFFFFF !important;
            }
            *{
                /* line-height: normal; */
                font-family: 'Montserrat', sans-serif;
            }
            #welcome_banner{
                background-color: #ff5d2e;
                background: linear-gradient(0deg,rgba(228,74,2,.6) 29.38%,rgba(252,80,0,.1)), url('{{ asset("imgs/bg.png") }}');
                background-repeat: no-repeat;
                background-position: center;
                max-width: 100%;
                padding-top: 60px;
                height: 100vh;
            }
            footer{
                background-color: #F6F6F6 !important;
                padding: 30px 0px;
            }
            #our_market_banner{
                padding-top: 100px;
                height: 60vh;
                background-color: #ff5d2e;
                background: linear-gradient(rgba(0,0,0,0.1) ,rgba(0,0,0,0.1)), url('{{ asset("imgs/our_market.png") }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
            }
            #our_market_banner h1:first-child{
                background: #fc5000;
                /* box-shadow: 10px 0 0 #fc5000, -10px 0 0 #fc5000; */
                color: #fff;
                font-size: 4rem;
                width: fit-content;
                padding: 10px 25px;
                position: relative;
                top: 70px;
            }
            #our_market_banner h1:last-child{
                background: #333333;
                /* box-shadow: 10px 0 0 #fc5000, -10px 0 0 #fc5000; */
                color: #fff;
                font-size: 4rem;
                width: fit-content;
                padding: 10px 25px;
                position: relative;
                top: 70px;
            }
            #our_market_explore h1{
                padding: 20px 200px 30px 200px;
            }
            #alternative_data_fixed_banner{
                padding-top: 100px;
                height: 60vh;
                background-color: #ff5d2e;
                background: linear-gradient(rgba(0,0,0,0.1) ,rgba(0,0,0,0.1)), url('{{ asset("imgs/alternative_data.png") }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
            }
            #alternative_data_fixed_banner h1:first-child{
                background: #fc5000;
                /* box-shadow: 10px 0 0 #fc5000, -10px 0 0 #fc5000; */
                color: #fff;
                font-size: 4rem;
                width: fit-content;
                padding: 10px 25px;
                position: relative;
                top: 70px;
            }
            #alternative_data_fixed_banner h1:last-child{
                background: #333333;
                /* box-shadow: 10px 0 0 #fc5000, -10px 0 0 #fc5000; */
                color: #fff;
                font-size: 4rem;
                width: fit-content;
                padding: 10px 25px;
                position: relative;
                top: 70px;
            }
            .legal_stuff p{
                font-size: 12px!important;
                font-stretch: 100%;
                font-style: normal;
                line-height: 15px;
            }
            #reliably_regulated_banner{
                padding-top: 100px;
                height: 60vh;
                background-color: #ff5d2e;
                background: linear-gradient(rgba(0,0,0,0.1) ,rgba(0,0,0,0.1)), url('{{ asset("imgs/alternative_data.png") }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
            }
            #reliably_regulated_banner h1:first-child{
                background: #fc5000;
                /* box-shadow: 10px 0 0 #fc5000, -10px 0 0 #fc5000; */
                color: #fff;
                font-size: 4rem;
                width: fit-content;
                padding: 10px 25px;
                position: relative;
                top: 70px;
            }
            #reliably_regulated_banner h1:last-child{
                background: #333333;
                /* box-shadow: 10px 0 0 #fc5000, -10px 0 0 #fc5000; */
                color: #fff;
                font-size: 4rem;
                width: fit-content;
                padding: 10px 25px;
                position: relative;
                top: 70px;
            }

            #fairer_banner{
                padding-top: 100px;
                height: 60vh;
                background-color: #ff5d2e;
                background: linear-gradient(rgba(0,0,0,0.1) ,rgba(0,0,0,0.1)), url('{{ asset("imgs/alternative_data.png") }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
            }
            #fairer_banner h1:first-child{
                background: #fc5000;
                /* box-shadow: 10px 0 0 #fc5000, -10px 0 0 #fc5000; */
                color: #fff;
                font-size: 4rem;
                width: fit-content;
                padding: 10px 25px;
                position: relative;
                top: 70px;
            }
            #fairer_banner h1:last-child{
                background: #333333;
                /* box-shadow: 10px 0 0 #fc5000, -10px 0 0 #fc5000; */
                color: #fff;
                font-size: 4rem;
                width: fit-content;
                padding: 10px 25px;
                position: relative;
                top: 70px;
            }

            #support_banner{
                margin-top: 55px;
                padding-top: 150px;
                height: 60vh;
                background-color: #ff5d2e;
                background: linear-gradient(rgba(0,0,0,0.1) ,rgba(0,0,0,0.1)), url('https://images.prismic.io/trade-nation-marketing-cms/9d869c2c-c44d-4741-96da-0e9526e4d2af_1232x514_support+tiles_b%26w_02.png?auto=compress,format&rect=0,0,1233,514&w=1200&h=500');
                background-repeat: no-repeat;
                background-position: top;
                background-size: cover;
            }
            #support_banner h1:first-child{
                background: #fc5000;
                /* box-shadow: 10px 0 0 #fc5000, -10px 0 0 #fc5000; */
                color: #fff;
                font-size: 4rem;
                width: fit-content;
                padding: 10px 25px;
                position: relative;
                top: 70px;
            }
            #support_banner h1:last-child{
                background: #333333;
                /* box-shadow: 10px 0 0 #fc5000, -10px 0 0 #fc5000; */
                color: #fff;
                font-size: 4rem;
                width: fit-content;
                padding: 10px 25px;
                position: relative;
                top: 70px;
            }
            #account_types_banner{
                margin-top: 55px;
                padding-top: 150px;
                height: 50vh;
                background-color: #ff5d2e;
                background: linear-gradient(rgba(0,0,0,0.7) ,rgba(0,0,0,0.7)), url('{{ asset("imgs/humans.jpg") }}');
                background-repeat: no-repeat;
                background-position: top;
                background-size: cover;
            }
            
            @media screen and (min-width: 300px) {
                #our_market_explore h1{
                    padding: 50px 0px 0px 0px !important;
                }
                #our_market_explore{
                    padding-top: 40px;
                }
            }
            .phone_img{
                right: 140px;
            }
            .popular_fixed_h6{
                color: white !important;
            }
            @media screen and (max-width: 768px) {
                .phone_img > img{
                    max-width: 100%;
                    height: auto;
                    display: none;
                }
            }

            @media only screen and (max-width: 428px){
                #welcome_banner{
                    height: 90vh !important;
                }
                #popular_fixed_spread2{
                    margin-bottom: -100px!important;
                }
                #join > div > div{
                    padding-bottom: 0px !important;
                }
                #op2 > div{
                    padding-top: 0px !important;
                }
                #op2 > div > div{
                    padding-top: 0px !important;
                }
                #op2 > div > div > div{
                    margin-bottom: -53px;
                }
                #op4 > div{
                    padding-bottom: 0px !important;
                    padding-top: 2rem!important;
                }
                #op4{
                    padding-bottom: 0px !important;
                    padding-top: 0rem!important;
                }
                #op6{
                    margin-top: -90px;
                }
                #op6 > div{
                    padding-bottom: 0px !important;
                }
                #op6 > div > div{
                    padding-bottom: 0px !important;
                }
                #op7 > div > div:first-child{
                    padding-right: 5px !important;
                    padding-left: 5px !important;
                    
                }
                #op7 > div{
                    padding-right: 0px !important;
                    padding-left: 0px !important;
                    
                }
                #op8 > div{
                    padding-top: 0px !important;
                    
                }
                #op9 > div{
                    padding-bottom: 0px !important;
                    
                }
                #popular_fixed_spread{
                    /* top: -35px !important; */
                    margin-bottom: 125px !important;
                    top: 0px !important;
                    position: inherit;
                }
                #popular_fixed_spread h6{
                    color: #333333 !important;
                }
                .rm_p{
                    padding: 0px !important; 
                }
                #account_types_banner{
                    height: 18vh;
                    padding-top: 30px;
                }
                #partners__banner{
                    margin-bottom: 85px !important;
                }
                .rm_p2{
                    padding: 10px;
                }
            }

            .use_{
                color: #EE4C08;
            }
            
            #popular_fixed_spread{
                position: relative;
                top: -200px;
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
            .slick-dots{
                bottom: -50px !important;
            }
            .footer__social-link{
                text-decoration: none !important;
            }
            .footer__social-link > svg > path:hover{
                fill: #fc5000 !important;
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
            @media screen and (max-width: 768px){
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
                .actions_tr{
                    padding: 0px 0px !important;
                }
                #reliably_regulated_banner h1:first-child{
                    padding: 0px 0px !important;
                    font-size: 3rem;
                }
            }
            #trading_stories{
                background-color: #ff5d2e;
                background: linear-gradient(rgba(239, 92, 46, 0.1),rgba(239, 92, 46, 0.1)), url('https://images.prismic.io/trade-nation-marketing-cms/a006c15c-c51d-45dc-a93d-ddf8f92aa473_Testimonials-Reviews-Hero_05.jpg?auto=compress,format&rect=0,77,1400,547&w=1280&h=500');
                background-repeat: no-repeat;
                background-position: bottom;
                padding-top: 100px;
                height: 90vh;
            }
            .slide_me_{
                height: 400px !important;
            }
            .slide_me__{
                height: 250px !important;
            }
            #experts_explain_banner{
                background-color: #ff5d2e;
                background: linear-gradient(rgba(239, 92, 46, 0.1),rgba(239, 92, 46, 0.1)), url('https://images.prismic.io/trade-nation-marketing-cms/5084f094-5cf5-42f8-a71d-58724b9843d0_experts-explain-hero-mobile_300dpi.jpg');
                background-repeat: no-repeat;
                background-position: left;
                background-size: cover;
                padding-top: 100px;
                height: 60vh;
            }
            #experts_explain_banner h1:first-child{
                background: #fff;
                /* box-shadow: 10px 0 0 #fc5000, -10px 0 0 #fc5000; */
                color: #333333;
                font-size: 4rem;
                width: fit-content;
                padding: 10px 25px;
                position: relative;
                top: 50px;
            }
            #experts_explain_banner h1:last-child{
                background: #333333;
                /* box-shadow: 10px 0 0 #fc5000, -10px 0 0 #fc5000; */
                color: #fff;
                font-size: 4rem;
                width: fit-content;
                padding: 10px 25px;
                position: relative;
                top: 70px;
            }
            a{
                text-decoration: none !important;
            }
            .faq_tabs:hover{
                background-color: #fc5000;
                color: white;
            }
            .faq_tabs{
                color: black;
                border: 0.1px solid #E3E4E6;
            }
            .faq_tabs:hover a{
                color: white;
            }
            .faq_tabs:hover path {
                fill: white;
            }
            .faq_links.active{
                color: #F06326 !important;
                background-color: white !important;
            }
            .faq_links{
                padding: 0px;
                color: black;
            }
            .faq_links:hover{
                color: #F06326 !important;
            }
            .accordion-button:not(.collapsed){
                color: #fc5000 !important;
            }
            .accordion-button{
                font-weight: 600 !important;
                font-size: x-large !important;
            }
            .footer_hr{
                color: darkgrey;
            }
            #navbarSupportedContent .nav-item a:hover{
                color: black !important;
            }
            #meet_the_team_banner{
                margin-top: 55px;
                padding-top: 150px;
                height: 50vh;
                background-color: #ff5d2e;
                background: linear-gradient(rgba(0,0,0,0.1) ,rgba(0,0,0,0.1)), url('https://images.prismic.io/trade-nation-marketing-cms/aac2a379-850f-44fe-a7fc-4562c97da799_Meet-the-team-version-1.png?auto=compress,format&rect=457,0,1534,1633&w=480&h=511');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                margin-bottom: 150px;
            }
            #meet_the_team_banner h1:first-child{
                background: #FFFFFF;
                color: #333333;
                font-size: 3rem;
                width: fit-content;
                padding: 10px 20px;
                position: relative;
                top: 70px;
                font-weight: 900;
            }
            #meet_the_team_banner h1:last-child{
                background: #333333;
                color: #fff;
                font-size: 3rem;
                width: fit-content;
                padding: 10px 25px;
                position: relative;
                top: 70px;
                font-weight: 900;
            }
            #partners__banner{
                margin-top: 55px;
                padding-top: 150px;
                height: 50vh;
                background-color: #ff5d2e;
                background: linear-gradient(rgba(0,0,0,0.1) ,rgba(0,0,0,0.1)), url('https://images.prismic.io/trade-nation-marketing-cms/0f857896-da61-48cd-8bb3-a4941a722816_partners_Hero-mobile.jpg?auto=compress,format&rect=88,0,724,771&w=480&h=511');
                background-repeat: no-repeat;
                background-position: bottom;
                background-size: cover;
                margin-bottom: 150px;
            }
            #partners__banner h1:first-child{
                background: #FFFFFF;
                color: #333333;
                font-size: 3rem;
                width: fit-content;
                padding: 10px 20px;
                position: relative;
                top: 70px;
                font-weight: 900;
            }
            #partners__banner h1:last-child{
                background: #333333;
                color: #fff;
                font-size: 3rem;
                width: fit-content;
                padding: 10px 25px;
                position: relative;
                top: 70px;
                font-weight: 900;
            }

            #brokerage_fees{
                margin-top: 55px;
                padding-top: 150px;
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
            .color_1{
                background-color: #E65456;
            }
            .color_2{
                background-color: #A094F8;
            }
            .color_3{
                background-color: #69BAFA;
            }
            .color_4{
                background-color: #F6B742;
            }
            .table-iCS4Ljp8{
				background-color: #161A25 !important;
			}
        </style>

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- Add the slick-theme.css if you want default styling -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <!-- Add the slick-theme.css if you want default styling -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>

	<body>
		<header class="my-bg-color">
			<nav class="navbar navbar-expand-lg navbar-light my-bg-color border border-top-0 border-start-0 border-end-0 fixed-top">
				<div class="container-fluid px-5">
					<!-- <a class="navbar-brand text-white" href="{{ url('/') }}">
                        <img src="https://images.prismic.io/trade-nation-marketing-cms%2F3d391a68-20a2-49d5-b9df-834845bdf013_tradenation-email-logo-white.png?auto=compress,format&rect=0,0,246,41&w=246&h=41" alt="{{ env('APP_NAME') }} logo" style="width: 140px;">    
                    </a> -->

                    <a href="{{ url('/') }}" class="f-fallback email-masthead_name" style="display: flex; text-decoration: none; align-items: center; color: white; justify-content: center;">
                        <img src="https://images.prismic.io/tnfev2/44587b9b-c476-4a96-a39e-788e0f04f5e5_HeaderLogoAnimated.gif" alt="site-logo" style="height: 40px;"> <h6 style="padding-left: 10px; padding-top: 10px;">TN Trade</h6>
                    </a>

					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="rm_p navbar-nav me-auto mb-2 mb-lg-0 ps-5">
							<li class="nav-item dropdown ps-3 pe-3">
								<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Our Platform
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="{{ route('our_market') }}">Our Markets</a></li>
								</ul>
							</li>

							<li class="nav-item dropdown ps-3 pe-3">
								<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Our difference
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="{{ route('alternative_data') }}">Alternative data</a></li>
									<li><a class="dropdown-item" href="{{ route('fairer_trading') }}">Fairer trading</a></li>
									<li><a class="dropdown-item" href="{{ route('customer_support') }}">Customer support</a></li>
								</ul>
							</li>

                            <li class="nav-item ps-3 pe-3">
								<a class="nav-link text-white" href="{{ route('account_types') }}">
                                    Account Types
								</a>
							</li>

							<li class="nav-item dropdown ps-3 pe-3">
								<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									About Us
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="{{ route('reliably_regulated') }}">Reliably Regulated</a></li>
									<li><a class="dropdown-item" href="{{ route('meet_the_team') }}">Meet the Team</a></li>
									<li><a class="dropdown-item" href="{{ route('partners') }}">Partner with Us</a></li>
								</ul>
							</li>

                            <li class="nav-item dropdown ps-3 pe-3">
								<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Community
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="{{ route('our_ambassadors') }}">Our Ambassadors</a></li>
									<li><a class="dropdown-item" href="{{ route('brokerage_fees') }}">Brokerage fees</a></li>
									<li><a class="dropdown-item" href="{{ route('trading_stories') }}">Customers Reviews</a></li>
								</ul>
							</li>
						</ul>

						<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item ps-4">
                                    <a class="nav-link text-white border border-light rounded-pill px-4" href="{{ route('register') }}">Start trading</a>
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
		</header>

		<main>@yield('content')</main>
		
		<footer class="shadow-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://images.prismic.io/trade-nation-marketing-cms%2F55159943-4186-4c73-8938-8fd76450bc5d_logo.svg?auto=compress,format" alt="{{ env('APP_NAME') }} logo" style="width: 200px;">
                        <div class="footer__social pt-5">
                            <a href="#!" target="_blank" class="footer__social-link" title="Twitter">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M29.6364 10.3708C29.4783 10.7092 29.184 11.1365 28.7536 11.6529C28.3232 12.1694 27.7918 12.6234 27.1594 13.0152C27.1769 13.1577 27.1902 13.2912 27.1989 13.4159C27.2077 13.5405 27.2121 13.6741 27.2121 13.8165C27.2121 14.5644 27.1287 15.3836 26.9618 16.2739C26.795 17.1643 26.5357 18.068 26.1845 18.9851C25.8332 19.9022 25.3896 20.8103 24.8538 21.7096C24.318 22.6089 23.6812 23.4413 22.9434 24.2071C22.2056 24.9728 21.3668 25.6496 20.4269 26.2372C19.4872 26.8249 18.4374 27.2611 17.2781 27.5459C15.9254 27.8487 14.5727 28 13.2201 28C12.6404 28 12.0387 27.9688 11.4151 27.9065C10.7914 27.8441 10.1678 27.7284 9.54419 27.5593C8.92056 27.3901 8.30571 27.1631 7.69965 26.8781C7.09355 26.5934 6.52701 26.2282 6 25.783C7.37023 25.9789 8.66579 25.8676 9.8867 25.4491C11.1076 25.0306 12.2187 24.4387 13.22 23.673C12.9917 23.673 12.6886 23.6506 12.3109 23.6062C11.9333 23.5616 11.5292 23.4281 11.0988 23.2055C10.6684 22.9828 10.2336 22.6401 9.79447 22.1771C9.3553 21.7143 8.96882 21.0642 8.63505 20.2272C8.74045 20.2627 8.88538 20.2851 9.06983 20.294C9.25429 20.3029 9.45192 20.2985 9.66272 20.2805C9.87352 20.2626 10.0799 20.2404 10.282 20.2139C10.484 20.1872 10.664 20.156 10.8221 20.1202C9.90866 19.8354 9.1928 19.4569 8.67458 18.985C8.15635 18.5131 7.77427 18.0279 7.52833 17.5293C7.28239 17.0307 7.12868 16.5588 7.0672 16.1137C7.00571 15.6685 6.97497 15.3212 6.97497 15.0719C7.20334 15.2144 7.53711 15.3658 7.97629 15.526C8.41546 15.6863 8.81072 15.7575 9.16206 15.7397C8.44181 15.1343 7.9192 14.5333 7.59421 13.9367C7.26922 13.3402 7.07598 12.7614 7.01449 12.2005C6.95301 11.6396 6.98375 11.092 7.10672 10.5578C7.22969 10.0236 7.39658 9.50717 7.60738 9.00857C8.57357 10.1126 9.53536 11.0074 10.4928 11.693C11.4502 12.3786 12.3636 12.9084 13.2332 13.2823C14.1028 13.6563 14.9153 13.9056 15.6706 14.0302C16.426 14.1549 17.0848 14.2172 17.6469 14.2172C17.5415 13.5049 17.5371 12.8282 17.6336 12.1872C17.7302 11.5461 17.9324 10.9585 18.2397 10.4242C18.5472 9.89002 18.9556 9.43149 19.465 9.04863C19.9745 8.66578 20.5805 8.37641 21.2833 8.18053C22.1439 7.93123 22.9697 7.94013 23.7601 8.20724C24.5506 8.47435 25.2269 8.93738 25.7891 9.59621C26.035 9.5784 26.4215 9.49827 26.9486 9.35581C27.4755 9.21335 28.1344 8.90172 28.9248 8.42093C28.8721 8.599 28.7887 8.81714 28.6745 9.07534C28.5603 9.33355 28.4153 9.59621 28.2397 9.86331C28.064 10.1304 27.8531 10.3886 27.6072 10.6379C27.3613 10.8872 27.0802 11.092 26.764 11.2523C27.0275 11.1989 27.3174 11.1365 27.6335 11.0653C27.8969 10.9941 28.2045 10.9006 28.5558 10.7848C28.9072 10.6691 29.2675 10.5311 29.6364 10.3708Z" fill="#595959 "></path>
                                </svg>
                            </a>
                            
                            <a href="#!" target="_blank" class="footer__social-link" title="Facebook">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.5547 8.00416L20.9241 8C17.9686 8 16.0587 9.9319 16.0587 12.922V15.1914H13.4136C13.1851 15.1914 13 15.3741 13 15.5994V18.8875C13 19.1128 13.1853 19.2953 13.4136 19.2953H16.0587V27.5922C16.0587 27.8175 16.2437 28 16.4723 28H19.9233C20.1519 28 20.3369 27.8173 20.3369 27.5922V19.2953H23.4296C23.6581 19.2953 23.8432 19.1128 23.8432 18.8875L23.8445 15.5994C23.8445 15.4912 23.8008 15.3876 23.7234 15.311C23.6459 15.2345 23.5404 15.1914 23.4306 15.1914H20.3369V13.2676C20.3369 12.343 20.5604 11.8736 21.7822 11.8736L23.5543 11.873C23.7827 11.873 23.9677 11.6903 23.9677 11.4651V8.41197C23.9677 8.18705 23.7829 8.00458 23.5547 8.00416Z" fill="#595959"></path>
                                </svg>
                            </a>
                            
                            <a href="#!" target="_blank" class="footer__social-link" title="Instagram">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.5862 8H13.4138C10.4286 8 8 10.4286 8 13.4138V22.5863C8 25.5714 10.4286 28 13.4138 28H22.5863C25.5714 28 28 25.5714 28 22.5863V13.4138C28 10.4286 25.5714 8 22.5862 8V8ZM18 23.4686C14.9846 23.4686 12.5314 21.0154 12.5314 18C12.5314 14.9846 14.9846 12.5314 18 12.5314C21.0154 12.5314 23.4686 14.9846 23.4686 18C23.4686 21.0154 21.0154 23.4686 18 23.4686ZM23.5994 13.8211C22.7083 13.8211 21.9835 13.0963 21.9835 12.2052C21.9835 11.3141 22.7083 10.5891 23.5994 10.5891C24.4905 10.5891 25.2154 11.3141 25.2154 12.2052C25.2154 13.0963 24.4905 13.8211 23.5994 13.8211Z" fill="#595959 "></path>
                                    <path d="M17.9996 13.7139C15.6365 13.7139 13.7139 15.6364 13.7139 17.9996C13.7139 20.3626 15.6365 22.2853 17.9996 22.2853C20.3628 22.2853 22.2853 20.3626 22.2853 17.9996C22.2853 15.6364 20.3628 13.7139 17.9996 13.7139Z" fill="#595959 "></path>
                                </svg>
                            </a>
                            
                            <a href="http://youtube.com/channel/UCUt_0AhuDhi5P7gNSZsx2fw" target="_blank" class="footer__social-link" title="Youtube">
                                <svg width="36" height="36" viewBox="-6 0 30 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.2616 0.631836H3.73837C1.67372 0.631836 0 2.30556 0 4.37021V9.63072C0 11.6954 1.67372 13.3691 3.73837 13.3691H14.2616C16.3263 13.3691 18 11.6954 18 9.63072V4.37021C18 2.30556 16.3263 0.631836 14.2616 0.631836ZM11.7334 7.25641L6.81133 9.60394C6.68017 9.66649 6.52868 9.57087 6.52868 9.42558V4.58378C6.52868 4.43643 6.68415 4.34092 6.81558 4.40753L11.7377 6.9018C11.884 6.97594 11.8815 7.18581 11.7334 7.25641Z" fill="#595959"></path>
                                </svg>
                            </a>
                            
                            <a href="#!" target="_blank" class="footer__social-link" title="Linkedin">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M28 20.1614V27.5555H23.7134V20.6566C23.7134 18.9235 23.0933 17.7408 21.5417 17.7408C20.3572 17.7408 19.6524 18.5379 19.3423 19.3089C19.2292 19.5846 19.2001 19.9682 19.2001 20.3541V27.5555H14.912C14.912 27.5555 14.9697 15.871 14.912 14.6604H19.1997V16.4882C19.191 16.5019 19.1797 16.5167 19.1715 16.5299H19.1997V16.4882C19.7693 15.6109 20.7867 14.3575 23.0638 14.3575C25.885 14.3574 28 16.2005 28 20.1614ZM10.4265 8.44434C8.95951 8.44434 8 9.40654 8 10.6719C8 11.9096 8.93175 12.901 10.3695 12.901H10.3982C11.8935 12.901 12.8235 11.9098 12.8235 10.6719C12.7953 9.40654 11.8935 8.44434 10.4265 8.44434ZM8.25467 27.5555H12.5411V14.6604H8.25467V27.5555Z" fill="#595959 "></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <hr class="footer_hr">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="nav flex-column">
                                    <!-- <li class="nav-item">
                                        <a class="nav-link text-dark" href="#">Discover More</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="https://resources.tradenation.com/downloads/TN_Our_Charter__Our_Commitment_To_You_Final.pdf">Customer Charter</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="{{ route('legals') }}">The Legal Stuff</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-6">
                                <hr class="footer_hr">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="{{ route('faq') }}">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="{{ route('faq2', 'trading') }}">What is the minimum stake size</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="{{ route('faq2', 'payments') }}">Which payment types do you have on offer?</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="{{ route('faq2', 'my-account') }}">How long will it take my account to be approved?</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="footer_hr">
                <div class="row pt-5">
                    <div class="col-md-4">
                        <h6>Get in touch</h6>
                    </div>

                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="mailto:{{ env('MAIL_FROM_ADDRESS') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="16" fill="none"><path fill="#595959 " stroke="#595959 " stroke-width=".3" d="M2.701 15.65h17.6976c1.0203 0 1.8509-.8298 1.8509-1.8509V2.2009c0-1.021-.8306-1.8509-1.8509-1.8509H2.7009C1.6806.35.85 1.1798.85 2.201V13.799c0 1.0211.8306 1.8509 1.851 1.8509zM1.8303 2.201c0-.48.3907-.8706.8705-.8706h17.6977c.4798 0 .8705.3907.8705.8705v11.5982c0 .4798-.3907.8705-.8705.8705H2.7009c-.4798 0-.8705-.3907-.8705-.8705V2.2009z"></path><path fill="#595959 " stroke="#595959 " stroke-width=".3" d="M1.5076 1.7945l-.0002-.0002a.4896.4896 0 0 1-.047-.691.4898.4898 0 0 1 .6919-.048l8.6937 7.5772-9.3384-6.838zm0 0l8.6944 7.5772c.3745.3265.8632.4874 1.3477.4874.4845 0 .9732-.161 1.3478-.4881l8.6922-7.5758.0002-.0002M1.5076 1.7945l20.0823.0005m0 0a.4896.4896 0 0 0 .0469-.6912l-.0469.6912zm-9.3366 6.8376l8.6908-7.5759.0004-.0003c.2039-.1799.5131-.158.6922.0473l-9.3834 7.5289zm0 0c-.3776.329-1.0283.3297-1.4072 0h1.4072z"></path></svg>
                                            <span class="ps-2 use_">{{ env('MAIL_FROM_ADDRESS') }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-6">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="#">
                                            <svg class="footer__phone-icon" fill="none" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg"><path d="m19.5513 15.805-3.0887-3.089c-.6152-.6128-1.634-.5942-2.2707.0427l-1.556 1.5558c-.0984-.0542-.2001-.1108-.3071-.1709-.9827-.5444-2.3276-1.2907-3.74285-2.707-1.41946-1.4193-2.16642-2.7663-2.71257-3.74959-.05763-.10417-.11284-.20461-.16737-.29999l1.04436-1.04282.51345-.51408c.63762-.63779.6552-1.6563.04143-2.27082l-3.08868-3.089371c-.61377-.613658-1.63303-.595041-2.27065.042749l-.8705.875492.02379.02362c-.291888.37245-.5358.80201-.717311 1.26524-.16732.44093-.271492.8617-.3191252 1.28333-.4078408 3.38109 1.1372162 6.47114 5.3303162 10.66434 5.79611 5.7957 10.46701 5.3579 10.66851 5.3365.4389-.0525.8595-.1573 1.2869-.3233.4593-.1794.8885-.423 1.2607-.7142l.0191.0169.8818-.8636c.6363-.6377.6547-1.6565.0412-2.272z" fill="#595959 "></path></svg>
                                            <span class="ps-2 use_">+44 1254 369752</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-5 legal_stuff">
                    <hr class="footer_hr">
                    <div class="col-md-4">
                        <h6>The legal stuff</h6>
                    </div>

                    <div class="col-md-8">
                        <p>
                            Financial spread trading comes with a high risk of losing money rapidly due to leverage. 81.7% of retail investor accounts lose money when trading CFDs with this provider. You should consider whether you understand how spread trading works and whether you can afford to take the high risk of losing your money.
                        </p>

                        <p>
                            TN Trade is a trading name of TN Trade Financial UK Ltd, a financial services company authorised and regulated by the Financial Conduct Authority under firm reference number 525164. Our registered office is 14 Bonhill Street, London, EC2A 4BX, United Kingdom.
                        </p>

                        <p>
                            TN Trade is a trading name of TN Trade Australia Pty Ltd, a financial services company authorised and regulated by the Australian Securities and Investments Commission, ACN 158 065 635, AFSL No. 422661
                        </p>

                        <p>
                            TN Trade Financial (Pty) Ltd, registration number 2018/418755/07, is authorised and regulated by the Financial Sector Conduct Authority, FSP No 49846
                        </p>

                        <p>
                            TN Trade Ltd, registration Number 203493 B, is authorised and regulated by the Securities Commission of the Bahamas, SIA-F216
                        </p>

                        <p>
                            The information on this site is not directed at residents of the United States or any particular country outside the UK, Australia, South Africa or The Bahamas and is not intended for distribution to, or use by, any person in any country or jurisdiction where such distribution or use would be contrary to local law or regulation. <strong><a href="{{ route('legals') }}">Full Legal notices.</a></strong>
                        </p>

                        <p>
                            * The Loyalty Bonus is not offered with TN Trade UK and TN Trade Australia accounts
                        </p>
                    </div>
                </div>

                <div class="row pt-5">
                    <div class="col-md-5">
                        <h6 style="font-size: small;">© 2019-{{ date('Y') }} TradeNation. All Rights Reserved.</h6>
                    </div>

                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-6">
                                
                            </div>

                            <div class="col-md-6 d-flex justify-content-end">
                                <ul class="nav flex-row">
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" style="font-size: small;" href="{{ route('legals') }}">Privacy</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link text-dark" style="font-size: small;" href="{{ route('legals') }}">Terms</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
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
            AOS.init();
            
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

            $('.meet_the_team_slider').slick({
                centerMode: true,
                centerPadding: '110px',
                slidesToShow: 1,
                responsive: [
                    {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                    }
                ]
            });
        </script>
	</body>
</html>