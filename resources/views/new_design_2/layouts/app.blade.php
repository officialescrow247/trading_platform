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
    </head>

    <body class="bg_c">
        <div class="mb-2 py-3 border border-top-0 border-start-0 border-end-0" style="background-color: #050f19;">
            <div class="d-flex container" style="justify-content: space-between; align-items: center;">
                <div class="d_ d-flex">
                    <p class="p-0 m-0">
                        Trading CFDs carries a high level of risk to your capital, and you should only trade with money you can afford to lose.
                    </p>
                </div>
    
                <div>
                    <span class="d_2">Trading in</span>
                    <img src="{{ asset('imgs/en-sc.svg') }}" alt="" class="img-fluid" style="width: 17px;">
                    <span class="d_2">SC</span>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #050f19;">
            <div class="container pb-3">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    <img src="{{ asset('imgs/logo.avif') }}" alt="{{ env('APP_NAME') }} logo" style="width: 300px;">    
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
                            <a class="nav-link active text-light" aria-current="page" href="#">Trading</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Platform</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Learn</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Partners</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">About us</a>
                        </li>

                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown link
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li> -->

                        <li class="nav-item ms-3">
                            <a class="nav-link rounded-pill sign_in_login_btn px-4 text-dark" href="#"><b>Sign up / Log in</b></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- <div class="d-none d-flex container pt-3" style="justify-content: space-between; align-items: center;">
            <div class="d_ d-flex">
                <p class="p-0 m-0">
                    Trading CFDs carries a high level of risk to your capital, and you should only trade with money you can afford to lose.
                </p>
            </div>

            <div>
                <span class="d_2">Trading in</span>
                <img src="{{ asset('imgs/en-sc.svg') }}" alt="" class="img-fluid" style="width: 17px;">
                <span class="d_2">SC</span>
            </div>
        </div> -->
        
        <main>@yield('content')</main>
        
        <footer>
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-5">
                        <h1 class="inter" style="font-size: 40px;">
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
                                <div class="eb5z6795 MuiBox-root css-18n2pc0" style="background-image: url(&quot;https://images.prismic.io/tnfev2/ZmbrPZm069VX1mMG_BestinclassHONS%E2%80%93easeofuse.png?auto=format,compress?auto=compress,format&quot;); background-position: center center; background-repeat: no-repeat; background-size: contain; width: 115px; height: 200px"></div>
                            </div>
                            
                            <div style="margin-top: 7.5px; max-width: 140px; flex-direction: row;">
                                <div class="eb5z6795 MuiBox-root css-18n2pc0" style="background-image: url(&quot;https://images.prismic.io/tnfev2/ZmbrpJm069VX1mMP_BestglobalMT4broker.png?auto=format,compress?auto=compress,format&quot;); background-position: center center; background-repeat: no-repeat; background-size: contain; width: 115px; height: 200px"></div>
                            </div>
                            
                            <div style="margin-top: 7.5px; max-width: 140px; flex-direction: row;">
                                <div class="eb5z6795 MuiBox-root css-18n2pc0" style="background-image: url(&quot;https://images.prismic.io/tnfev2/Zmbr4Zm069VX1mMn_Bestinclass%E2%80%93easeofuse.png?auto=format,compress?auto=compress,format&quot;); background-position: center center; background-repeat: no-repeat; background-size: contain; width: 115px; height: 200px"></div>
                            </div>
                            
                            <div style="margin-top: 7.5px; max-width: 140px; flex-direction: row;">
                                <div class="eb5z6795 MuiBox-root css-18n2pc0" style="background-image: url(&quot;https://images.prismic.io/tnfev2/ZmbsH5m069VX1mMy_ADVFNBestspreadbettingplatform.png?auto=format,compress?auto=compress,format&quot;); background-position: center center; background-repeat: no-repeat; background-size: contain; width: 115px; height: 200px"></div>
                            </div>
                            
                            <div style="margin-top: 7.5px; max-width: 140px; flex-direction: row;">
                                <div class="eb5z6795 MuiBox-root css-18n2pc0" style="background-image: url(&quot;https://images.prismic.io/tnfev2/ZoKhnR5LeNNTwrYO_Bestspreadbettingprovider-2024.png?auto=format,compress?auto=compress,format&quot;); background-position: center center; background-repeat: no-repeat; background-size: contain; width: 115px; height: 200px"></div>
                            </div>
                            
                            <div style="margin-top: 7.5px; max-width: 140px; flex-direction: row;">
                                <div class="eb5z6795 MuiBox-root css-18n2pc0" style="background-image: url(&quot;https://images.prismic.io/tnfev2/ZmbsSpm069VX1mND_OMABesttradingplatform.png?auto=format,compress?auto=compress,format&quot;); background-position: center center; background-repeat: no-repeat; background-size: contain; width: 115px; height: 200px"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <a href="#!" class="text-light"><b>Platforms</b></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#!" class="text-light"><b>Knowledge Base</b></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#!" class="text-light"><b>About us</b></a>
                    </div>
                    <div class="col-md-3 d-flex">
                        <a href="#!" class="d-flex justify-content-around text-light">
                            <b> Partners </b>
                        </a>

                        <div class="ps-5">
                            <span style="font-size: 13px;">Trading in</span>
                            <img src="{{ asset('imgs/en-sc.svg') }}" alt="" class="img-fluid" style="width: 17px;">
                            <span style="font-size: 13px;">SC</span>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-md-4">
                        <h6><b>Payment methods</b></h6>

                        <div>
                            <img src="https://images.prismic.io/tnfev2/Zlm1k6WtHYXtT91I_Visa_Brandmark_White_RGB_2021.png?auto=format%2Ccompress%3Fauto%3Dcompress%2Cformat&fit=max&w=1920" alt="" class="img-fluid" style="width: 50px; margin: 0 20px;">

                            <img src="https://images.prismic.io/tnfev2/0f76eaa5-c6f6-4b06-8aad-62d978a2d969_mc_symbol_opt_45_3x.png?auto=compress%2Cformat&fit=max&w=1920" alt="" class="img-fluid" style="width: 50px; margin: 0 20px;">

                            <img src="https://images.prismic.io/tnfev2/Zlm1_6WtHYXtT91e_skrill-logo-gradient.png?auto=format%2Ccompress%3Fauto%3Dcompress%2Cformat&fit=max&w=1920" alt="" class="img-fluid" style="width: 50px; margin: 0 20px;">

                            <img src="https://images.prismic.io/tnfev2/Zlm2MaWtHYXtT91t_Neteller_logo_logotype.png?auto=format%2Ccompress%3Fauto%3Dcompress%2Cformat&fit=max&w=1920" alt="" class="img-fluid" style="width: 50px; margin: 0 20px;">

                            <img src="https://images.prismic.io/tnfev2/a579ea80-fb84-43b2-8309-3a6d52761d88_payment-hero-two-one.png?auto=format%2Ccompress%3Fauto%3Dcompress%2Cformat&fit=max&w=1920" alt="" class="img-fluid" style="width: 50px; margin: 0 20px;">

                            <img src="https://images.prismic.io/tnfev2/ZmwNL5m069VX1v7w_NganLuongLogo.png?auto=format%2Ccompress%3Fauto%3Dcompress%2Cformat&fit=max&w=1920" alt="" class="img-fluid" style="width: 50px; margin: 0 20px;">
                        </div>

                        <h6 class="pt-5">Customer support</h6>
                        <div>
                            <a href="#!" class="text-light pe-5">
                                <i class="fa fa-message pe-2"></i>
                                Chat
                            </a>
                            
                            <a href="#!" class="text-light pe-5">
                                <i class="fa fa-envelope pe-2"></i>
                                Email
                            </a>

                            <a href="#!" class="text-light pe-5">
                                <i class="fa fa-question pe-2"></i>
                                FAQ
                            </a>

                            <a href="#!" class="text-light pe-3">
                                <i class="fa fa-phone pe-2"></i>
                                +248 4671996
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h6><b>Trade on</b></h6>

                        <div>
                            <img src="https://images.prismic.io/tnfev2/Zp4Erx5LeNNTxViW_TradeOnbutton-Lighttheme-.png?auto=format%2Ccompress&fit=max&w=1920" alt="" class="img-fluid" style="width: 180px; margin-bottom: 10px;">

                            <img src="https://tnfev2.cdn.prismic.io/tnfev2/4eb4d5dd-ef1f-49bf-87f7-b35febe70bf3_Download_on_the_App_Store_Badge.svg?fit=max&w=1920" alt="" class="img-fluid" style="width: 180px; margin-bottom: 10px;">

                            <img src="https://tnfev2.cdn.prismic.io/tnfev2/c228631f-8731-46d6-8d0e-a1586dacf56d_Google_Play_Store_badge_EN.svg?fit=max&w=1920" alt="" class="img-fluid" style="width: 180px; margin-bottom: 10px;">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h6><b>Regulatory bodies</b></h6>

                        <ul>
                            <li>UK - FCA</li>
                            <li>Australia - ASIC</li>
                            <li>Seychelles - FSA</li>
                            <li>Bahamas - SCB</li>
                            <li>South Africa - FSCA</li>
                        </ul>

                        <p class="pt-5">Sponsors of your favourite teams</p>
                        <div>
                            <img src="https://images.prismic.io/tnfev2/ZmGYk5m069VX1goj_AstonVilla-Crest-RGB-White.png?auto=format,compress" alt="" class="img-fluid mx-2" style="width: 50px;">

                            <img src="https://images.prismic.io/tnfev2/Zl3K3KWtHYXtUB7E_Wyvern_SomersetCountyCricketClub_RGB_WO.png?auto=format,compress" alt="" class="img-fluid mx-2" style="width: 50px;">
                        </div>
                    </div>
                </div>

                <hr>
                <div>
                    <h5>The legal stuff</h5>
                    <div class="row pt-2">
                        <div class="col-md-6">
                            <article style="font-size: 13px;">
                                Trading CFDs carries a high level of risk to your capital, and you should only trade with money you can afford to lose. Refer to our legal documents. <br><br>
    
                                Trade Nation is a trading name of Trade Nation Financial UK Ltd, a financial services company registered in England & Wales under company number 07073413, is authorised and regulated by the Financial Conduct Authority under firm reference number 525164. Our registered office is 14 Bonhill Street, London, EC2A 4BX, United Kingdom. <br><br>
    
                                Trade Nation is a trading name of Trade Nation Australia Pty Ltd, a financial services company registered in Australia under number ACN 158 065 635, is authorised and regulated by the Australian Securities and Investments Commission (ASIC), with licence number AFSL 422661. Our registered office is Level 17, 123 Pitt Street, Sydney, NSW 2000, Australia. <br><br>
    
                                Trade Nation is a trading name of Trade Nation Ltd., a financial services company registered in the Bahamas under number 203493 B, is authorised and regulated by the Securities Commission of the Bahamas (SCB), with licence number SIA-F216. Our registered office is No. 3 Bayside Executive Park, West Bay Street & Blake Road, Nassau, New Providence, The Bahamas.
                            </article>
                        </div>
    
                        <div class="col-md-6">
                            <article style="font-size: 13px;">
                                Trade Nation is a trading name of Trade Nation Financial Markets Ltd, a financial services company registered in the Seychelles under number 810589-1, is authorised and regulated by the Financial Services Authority of Seychelles (FSA) with licence number SD150. Our registered office is CT House, Office 6B, Providence, Mahe, Seychelles. <br><br>
    
                                Trade Nation is a trading name of Trade Nation Financial (Pty) Ltd, a financial services company registered in South Africa under number 2018 / 418755 / 07, is authorised and regulated by the Financial Sector Conduct Authority (FSCA), with licence number 49846. Our registered office is 19 9th Street, Houghton Estate, Johannesburg, Gauteng, 2198 South Africa. <br><br>
    
                                The information on this site is not directed at residents of the United States or any particular country outside the UK, Australia, South Africa, The Bahamas or Seychelles and is not intended for distribution to, or use by, any person in any country or jurisdiction where such distribution or use would be contrary to local law or regulation.
                            </article>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <a href="#!" class="text-light pe-5">Legal Documents</a>
                        <a href="#!" class="text-light pe-5">Cookie Policy</a>
                        <a href="#!" class="text-light pe-5">Privacy</a>
                    </div>
                    
                    <div class="col-md-6">
                        <p class="text-end">© 2019-2024 Trade Nation. All Rights Reserved</p>
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
        </script>
    </body>
</html>