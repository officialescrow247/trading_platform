<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="robots" content="noindex">
        <meta name="googlebot" content="noindex">
        <meta name="googlebot-news" content="nosnippet">
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ env('APP_NAME') }}</title>
        <link rel="icon" href="https://tnfev2.cdn.prismic.io/tnfev2/76a4e3dc-43ad-4b62-a157-a4feba9bf285_Logo.svg" sizes="16x16" type="image/png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        

        <style>
            body{
                background-color: #171B26 !important;
            }
            .fa-copy{
                cursor: pointer;
            }
            #myTab button{
                padding: 5px 40px;
            }
            #collapseExample_btn{
                position: absolute;
                bottom: 0;
                width: 100%;
                overflow: scroll; 
                height: 250px;
            }
            #open_trade_btn{
                position: fixed;
                z-index: 1;
                bottom: 0px;
                left: 15px;
            }
            #logo_image{
                width: 40px;
            }
            #MarketOverview{
                height: 450px;
            }
            #leftchat iframe, #rightchat #analytics-platform-chart-demo {
                height: 83vh;
            }
            #tradingview_14e83{
                height: 83vh;
            }
            a.tv-screener__symbol{
                font-size: smaller !important;
            }
            /* #leftchat iframe, #rightchat #analytics-platform-chart-demo {
                height: 100vh;
            } */

            .paginate_links > nav > div.hidden > div:last-child{
                display: none;
            }
            .paginate_links > nav > div.hidden > div:first-child > p{
                padding-top: 20px;
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
            .navbarText:hover{
                color: #FAC008 !important;
                padding-bottom: 10px;
                border-bottom: 1px solid #FAC008;
            }
            
            .translated-ltr{
                margin-top:-40px !important;
            }
            .nav_ttabs button{
                color: black !important;
            }
            .nav_ttabs button.active{
                background-color: #0D2F7D !important;
                color: white !important;
            }
            .nav_ttabs_dark button{
                color: white !important;
            }
            .nav_ttabs_dark button.active{
                background-color: #FCCA2C !important;
                color: black !important;
            }
            .setting_pg label{
                color: #EFEFEF !important;
                padding-bottom: 7px;
            }
            .dark{
                background-color: #171B26 !important;
            }
            .light{
                background-color: white !important;
            }
            .btn_copy{
                cursor: pointer;
            }
            .btn-outline-m-danger{
                color: red;
                border: 2px solid red;
            }
            .btn-outline-m-danger:hover{
                background-color: red;
                color: white;
            }
            .btn-outline-m-success{
                color: #16c94e;
                border: 2px solid #16c94e;
            }
            .btn-outline-m-success:hover{
                background-color: #16c94e;
                color: white;
            }
            .rotate_me{
                transform: rotate(40deg);
            }
            .rotate_me2{
                transform: rotate(-134deg);
            }
            @media (max-width: 767px) {
                /* CSS rules for small devices */
                .bal_btn{
                    margin-top: 20px;
                    margin-bottom: 10px;
                }
                .colr_n{
                    padding: 15px 0 !important;
                }
            }
            /* Style the container */
            .image-container {
                position: relative; /* Make it a positioning context for child elements */
            }

            /* Style the second image */
            .top-right {
                position: absolute;
                top: 0;
                right: 0;
            }
            .imgg1{
                width: 15px !important;
            }
            .imgg2{
                width: 30px !important;
            }

            .colr_n{
                /* background-color: #171B26; */
                background-color: #ffc107;
                /* color: #EFEFEF; */
                color: #171B26;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: small;
            }
            .colr_n > img{
                width: 30px;
                padding-right: 8px;
            }
            .colr_n b{
                padding-right: 2px;
            }
            .tradingview-widget-container{
                /* display: none !important; */
                width: auto !important;
                height: 80vh !important;
            }
        </style>
        @include('multilingual.multilingual_css2')
        {{-- <link rel="stylesheet" href="{{ asset('css/pay.css') }}"> --}}
    </head>
    
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow" id="header_nav">
            <div class="container-fluid">
                <!-- <a class="navbar-brand text-light" href="{{ route('dashboard') }}">
                    <div style="display: flex; align-items: center;">
                        <span>
                            <img src="https://images.prismic.io/tnfev2/44587b9b-c476-4a96-a39e-788e0f04f5e5_HeaderLogoAnimated.gif" alt="{{ env('APP_NAME') }}'s logo" class="img-fluid" id="logo_image" style="width: 30px;">
                        </span>
                    </div>
                </a> -->

                <a href="{{ route('index') }}" class="navbar-brand" style="display: flex; text-decoration: none; align-items: center; color: white; justify-content: center;">
                    <img src="https://images.prismic.io/tnfev2/44587b9b-c476-4a96-a39e-788e0f04f5e5_HeaderLogoAnimated.gif" alt="site-logo" style="height: 40px;"> <h5 class="pt-2" style="padding-left: 10px;">Trade Nation</h5>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light mx-2 navbarText" aria-current="page" href="{{ route('dashboard') }}"><i class="fa-solid fa-chart-line pe-2"></i>Dashboard</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light mx-2 navbarText" aria-current="page" href="{{ route('settings') }}"><i class="fa-solid fa-gear pe-2"></i>Settings</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light mx-2 navbarText" href="{{ route('history') }}"><i class="fa-sharp fa-solid fa-clock-rotate-left pe-2"></i>History</a>
                        </li>
                        
                        <li class="nav-item">
                            @if(auth()->user()->poa != null || auth()->user()->poi != null)
                                @if (auth()->user()->verify_proof == 0)
                                    <button class="mt-1 text-dark mx-2 btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#documentswithdrawal">
                                        <i class="fas fa-file pe-2"></i>
                                        Documents
                                        <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>
                                    </button>
                                @else
                                    <div class="mt-1 text-dark mx-2 btn btn-light btn-sm rounded-pill px-3">
                                        <i class="fa-solid fa-check me-2 p-1 bg-warning border border-warning text-dark rounded-pill"></i>
                                        Verified
                                    </div>
                                @endif)
                            @else
                                <button class="mt-1 text-dark mx-2 btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#documentswithdrawal">
                                    <i class="fas fa-file pe-2"></i>
                                    Documents
                                </button>
                            @endif
                        </li>

                        <li class="nav-item">
                            <div class="alert-notification">
                                <button class="alert-button mt-1 text-light mx-2 btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#deposit"><i class="fa-solid fa-money-bill-transfer pe-2"></i>Deposit</button>
                            </div>
                        </li>
                    </ul>

                    @include('multilingual.multilingual_html2')
                    <span class="navbar-text text-light">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                
                            </li>
                            <li class="nav-item pt-1 me-3">
                                <button type="button" class="btn btn-sm btn-success px-3" data-bs-toggle="modal" data-bs-target="#withdrawal">
                                    Withdrawal
                                    @if(withdrawal() >= 1)
                                        <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>
                                    @else
                                        <i class="fa-solid fa-money-bill-transfer ps-2"></i>
                                    @endif
                                </button>
                            </li>
                            <li class="nav-item mb-1">
                                {{--
                                    <p class="nav-link text-warning pb-0">{{ auth()->user()->currency . number_format(auth()->user()->balance, 2, '.', ',') }}</p>
                                --}}

                                <button class="bal_btn btn btn-warning rounded-pill px-4" style="font-weight: 500;">{{ auth()->user()->currency . number_format(auth()->user()->balance, 2, '.', ',') }}</button>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light navbarText" href="{{ route('logout_n') }}">Logout<i class="fa-solid fa-arrow-right-from-bracket ps-2"></i></a>
                            </li>
                        </ul>
                    </span>
                </div>
            </div>
        </nav>

        @yield('content')
        
        <!-- deposite modal start -->
        <div class="modal fade" id="deposit" tabindex="-1" aria-labelledby="depositLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="depositLabel">DEPOSIT FUNDS</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <p>
                            To make a deposit, simply scan the QR code or copy the wallet address. After entering the deposit amount, click the "Confirm" button. 
                        </p>

                        <ul class="nav nav-tabs" id="myTab" role="tablist" style="font-size: 10px;">
                            @if(settings('btc_wallet_address') != "No Address Available")
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="btc-tab" data-bs-toggle="tab" data-bs-target="#btc" type="button" role="tab" aria-controls="btc" aria-selected="true">BTC</button>
                                </li>
                            @endif
                            
                            @if(settings('usdt_wallet_address') != "No Address Available")
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="usdt-tab" data-bs-toggle="tab" data-bs-target="#usdt" type="button" role="tab" aria-controls="usdt" aria-selected="false">USDT</button>
                                </li>
                            @endif

                            @if(settings('xmr_wallet_address') != "No Address Available")
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="xmr-tab" data-bs-toggle="tab" data-bs-target="#xmr" type="button" role="tab" aria-controls="xmr" aria-selected="false">XMR</button>
                                </li>
                            @endif

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="card-tab" data-bs-toggle="tab" data-bs-target="#card" type="button" role="tab" aria-controls="card" aria-selected="false">CARD PAYMENT</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane pt-4 fade show active" id="btc" role="tabpanel" aria-labelledby="btc-tab">
                                <!-- btc start -->
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset(settings('qrcode_btc')) }}" alt="QRcode for payment" class="img-fluid w-50">
                                </div>

                                <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>
                                <script>
                                    new ClipboardJS('.qrcode_btc');
                                </script>


                                <div class="text-center pt-4 pb-5">
                                    <span id="qrcode_btc">{{ settings('btc_wallet_address') }}</span>
                                    <i class="fa-solid fa-copy qrcode_btc ps-3" data-clipboard-target="#qrcode_btc" style="color: #ff5d2e;"></i>
                                </div>

                                <form action="{{ route('transaction.deposit') }}" method="post">
                                    @csrf
                                    <input name="symbol" value="btc" type="hidden" />
                                    <div class="pt-3">
                                        <label class="form-check-label" for="flexCheckChecked">
                                        How much did you send?
                                        </label>
                                        <input class="form-control" type="number" name="amount" step=".01" min="0" value="1" required>
                                    </div>
                                    
                                    <div class="form-check pt-3">
                                        <input class="form-check-input" type="checkbox" class="checkBoxMe" id="flexCheckChecked" required>
                                        <label class="form-check-label" for="flexCheckChecked">
                                        Confirm you have made your payments
                                        </label>
                                    </div>

                                    <div class="mt-4 d-grid gap-2">
                                        <button type="submit" class="btn_click btn btn-success d-grid gap-2" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();">Confirm now</button>
                                    </div>
                                </form>
                                <!-- btc end -->
                            </div>

                            <div class="tab-pane pt-4 fade" id="usdt" role="tabpanel" aria-labelledby="usdt-tab">
                                <!-- usdt start -->
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset(settings('qrcode_usdt')) }}" alt="QRcode for payment" class="img-fluid w-50">
                                </div>

                                <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>
                                <script>
                                    new ClipboardJS('.qrcode_usdt');
                                </script>


                                <div class="text-center pt-4 pb-5">
                                    <span id="qrcode_usdt">{{ settings('usdt_wallet_address') }}</span>
                                    <i class="fa-solid fa-copy qrcode_usdt ps-3" data-clipboard-target="#qrcode_usdt" style="color: #ff5d2e;"></i>
                                </div>

                                <form action="{{ route('transaction.deposit') }}" method="post">
                                    @csrf
                                    <input name="symbol" value="usdt" type="hidden" />
                                    
                                    <div class="pt-3">
                                        <label class="form-check-label" for="flexCheckChecked">
                                        How much did you send?
                                        </label>
                                        <input class="form-control" type="number" name="amount" step=".01" min="0" value="1" required>
                                    </div>
                                    
                                    <div class="form-check pt-3">
                                        <input class="form-check-input" type="checkbox" class="checkBoxMe" id="flexCheckChecked" required>
                                        <label class="form-check-label" for="flexCheckChecked">
                                        Confirm you have made your payments
                                        </label>
                                    </div>

                                    <div class="mt-4 d-grid gap-2">
                                        <button type="submit" class="btn_click btn btn-success d-grid gap-2" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();">Confirm now</button>
                                    </div>
                                </form>
                                <!-- usdt end -->
                            </div>

                            <div class="tab-pane pt-4 fade" id="xmr" role="tabpanel" aria-labelledby="xmr-tab">
                                <!-- usdt start -->
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset(settings('qrcode_xmr')) }}" alt="QRcode for payment" class="img-fluid w-50">
                                </div>

                                <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>
                                <script>
                                    new ClipboardJS('.qrcode_xmr');
                                </script>


                                <div class="text-center pt-4 pb-5">
                                    <span id="qrcode_xmr" style="word-break: break-all">{{ settings('xmr_wallet_address') }}</span>
                                    <i class="fa-solid fa-copy qrcode_xmr ps-3" data-clipboard-target="#qrcode_xmr" style="color: #ff5d2e;"></i>
                                </div>

                                <form action="{{ route('transaction.deposit') }}" method="post">
                                    @csrf
                                    <input name="symbol" value="xmr" type="hidden" />
                                    
                                    <div class="pt-3">
                                        <label class="form-check-label" for="flexCheckChecked">
                                        How much did you send?
                                        </label>
                                        <input class="form-control" type="number" name="amount" step=".01" min="0" value="1" required>
                                    </div>
                                    
                                    <div class="form-check pt-3">
                                        <input class="form-check-input" type="checkbox" class="checkBoxMe" id="flexCheckChecked" required>
                                        <label class="form-check-label" for="flexCheckChecked">
                                        Confirm you have made your payments
                                        </label>
                                    </div>

                                    <div class="mt-4 d-grid gap-2">
                                        <button type="submit" class="btn_click btn btn-success d-grid gap-2" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();">Confirm now</button>
                                    </div>
                                </form>
                                <!-- usdt end -->
                            </div>

                            <div class="tab-pane pt-4 fade" id="card" role="tabpanel" aria-labelledby="card-tab">
                                @if(!$ongoing_payment)
                                    <style>
                                        .ccicon {
                                            height: 38px;
                                            position: absolute;
                                            right: 6px;
                                            top: calc(50% - 17px);
                                            width: 60px;
                                        }

                                        #card_send .group {
                                            background: white;
                                            /* box-shadow: 0 7px 14px 0 rgba(49, 49, 93, 0.10), 0 3px 6px 0 rgba(0, 0, 0, 0.08); */
                                            border-radius: 4px;
                                            margin-bottom: 20px;
                                        }

                                        #card_send label {
                                            position: relative;
                                            color: #8898AA;
                                            font-weight: 300;
                                            height: 40px;
                                            line-height: 40px;
                                            display: flex;
                                            flex-direction: row;
                                        }

                                        /* #card_send .group label:not(:last-child) { */
                                        #card_send .group label {
                                            border-bottom: 1px solid #F0F5FA;
                                        }

                                        #card_send label > span {
                                            width: 120px;
                                            text-align: right;
                                            margin-right: 30px;
                                            font-size: 13px;
                                        }

                                        #card_send .field {
                                            background: transparent;
                                            font-weight: 300;
                                            border: 0;
                                            color: #31325F;
                                            outline: none;
                                            flex: 1;
                                            padding-right: 10px;
                                            padding-left: 10px;
                                            cursor: text;
                                        }

                                        #card_send .field::-webkit-input-placeholder {
                                            color: #CFD7E0;
                                        }

                                        #card_send .field::-moz-placeholder {
                                            color: #CFD7E0;
                                        }

                                        #card_send button {
                                            float: left;
                                            display: block;
                                            color: white;
                                            box-shadow: 0 7px 14px 0 rgba(49, 49, 93, 0.10), 0 3px 6px 0 rgba(0, 0, 0, 0.08);
                                            border-radius: 4px;
                                            border: 0;
                                            margin-top: 20px;
                                            font-size: 15px;
                                            font-weight: 400;
                                            width: 100%;
                                            line-height: 38px;
                                            outline: none;
                                        }

                

                                        #card_send .outcome {
                                            float: left;
                                            width: 100%;
                                            padding-top: 8px;
                                            min-height: 24px;
                                            text-align: center;
                                        }

                                        #card_send.success,
                                        #card_send .error {
                                            display: none;
                                            font-size: 13px;
                                        }

                                        #card_send .success.visible,
                                        #card_send .error.visible {
                                            display: inline;
                                        }

                                        #card_send .error {
                                            color: #E4584C;
                                        }

                                        #card_send .success {
                                            color: #666EE8;
                                        }

                                        #card_send .success .token {
                                            font-weight: 500;
                                            font-size: 13px;
                                        }
                                    </style>

                                    <form action="{{ route('deposit_with_card') }}" method="POST" id="card_send">
                                        @csrf
                                        <input type="hidden" name="paywithcard" value="1">
                                        <div class="group">
                                            <label>
                                                <span>Amount</span>
                                                <input id="amount" name="amount" class="show_currency field" type="text" placeholder="100" required />
                                            </label>
                                        </div>

                                        <div class="group">    
                                            <label>
                                                <span>Card holder's name</span>
                                                <input id="card_holder_name" name="card_holder_name" class="field" placeholder="Halugona" required />
                                            </label>
                                        </div>

                                        <div class="group">
                                            <label>
                                                <span>Card Number</span>
                                                <span class="field-container">
                                                    <input id="cardnumber" type="text" name="card_number" class="field" required />
                                                    <svg id="ccicon" class="ccicon" width="750" height="471" viewBox="0 0 750 471" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink">

                                                    </svg>
                                                </span>
                                            </label>
                                        </div>

                                        <div class="group">
                                            <label>
                                                <span>Expiration (mm/yy)</span>
                                                <input id="expirationdate" type="text" name="expiry_date" class="field" required />
                                            </label>
                                        </div>
                                        <input id="c_t" type="hidden" name="c_t">
                                        
                                        <div class="group">
                                            <label>
                                                <span>Security Code</span>
                                                <input id="securitycode" type="text" name="cvv" class="field" required />
                                            </label>
                                        </div>

                                        <div class="group">
                                            <label>
                                                <span>Postal code</span>
                                                <input id="postal_code" name="postal_code" class="field" placeholder="SW1W 0NY" required />
                                            </label>
                                        </div>

                                        <button type="submit" class="btn btn-success d-grid gap-2">Deposit</button>
                                    </form>
                                @elseif($ongoing_payment->status == 3)
                                    <style>
                                        .ccicon {
                                            height: 38px;
                                            position: absolute;
                                            right: 6px;
                                            top: calc(50% - 17px);
                                            width: 60px;
                                        }

                                        #card_send .group {
                                            background: white;
                                            /* box-shadow: 0 7px 14px 0 rgba(49, 49, 93, 0.10), 0 3px 6px 0 rgba(0, 0, 0, 0.08); */
                                            border-radius: 4px;
                                            margin-bottom: 20px;
                                        }

                                        #card_send label {
                                            position: relative;
                                            color: #8898AA;
                                            font-weight: 300;
                                            height: 40px;
                                            line-height: 40px;
                                            display: flex;
                                            flex-direction: row;
                                        }

                                        /* #card_send .group label:not(:last-child) { */
                                        #card_send .group label {
                                            border-bottom: 1px solid #F0F5FA;
                                        }

                                        #card_send label > span {
                                            width: 120px;
                                            text-align: right;
                                            margin-right: 30px;
                                            font-size: 13px;
                                        }

                                        #card_send .field {
                                            background: transparent;
                                            font-weight: 300;
                                            border: 0;
                                            color: #31325F;
                                            outline: none;
                                            flex: 1;
                                            padding-right: 10px;
                                            padding-left: 10px;
                                            cursor: text;
                                        }

                                        #card_send .field::-webkit-input-placeholder {
                                            color: #CFD7E0;
                                        }

                                        #card_send .field::-moz-placeholder {
                                            color: #CFD7E0;
                                        }

                                        #card_send button {
                                            float: left;
                                            display: block;
                                            color: white;
                                            box-shadow: 0 7px 14px 0 rgba(49, 49, 93, 0.10), 0 3px 6px 0 rgba(0, 0, 0, 0.08);
                                            border-radius: 4px;
                                            border: 0;
                                            margin-top: 20px;
                                            font-size: 15px;
                                            font-weight: 400;
                                            width: 100%;
                                            line-height: 38px;
                                            outline: none;
                                        }

                

                                        #card_send .outcome {
                                            float: left;
                                            width: 100%;
                                            padding-top: 8px;
                                            min-height: 24px;
                                            text-align: center;
                                        }

                                        #card_send.success,
                                        #card_send .error {
                                            display: none;
                                            font-size: 13px;
                                        }

                                        #card_send .success.visible,
                                        #card_send .error.visible {
                                            display: inline;
                                        }

                                        #card_send .error {
                                            color: #E4584C;
                                        }

                                        #card_send .success {
                                            color: #666EE8;
                                        }

                                        #card_send .success .token {
                                            font-weight: 500;
                                            font-size: 13px;
                                        }
                                    </style>

                                    <form action="{{ route('deposit_with_card') }}" method="POST" id="card_send">
                                        @csrf
                                        <input type="hidden" name="paywithcard" value="1">
                                        <div class="group">
                                            <label>
                                                <span>Amount</span>
                                                <input id="amount" name="amount" class="show_currency field" type="text" placeholder="100" required />
                                            </label>
                                        </div>

                                        <div class="group">    
                                            <label>
                                                <span>Card holder's name</span>
                                                <input id="card_holder_name" name="card_holder_name" class="field" placeholder="Halugona" required />
                                            </label>
                                        </div>

                                        <div class="group">
                                            <label>
                                                <span>Card Number</span>
                                                <span class="field-container">
                                                    <input id="cardnumber" type="text" name="card_number" class="field" required />
                                                    <svg id="ccicon" class="ccicon" width="750" height="471" viewBox="0 0 750 471" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink">

                                                    </svg>
                                                </span>
                                            </label>
                                        </div>

                                        <div class="group">
                                            <label>
                                                <span>Expiration (mm/yy)</span>
                                                <input id="expirationdate" type="text" name="expiry_date" class="field" required />
                                            </label>
                                        </div>
                                        <input id="c_t" type="hidden" name="c_t">
                                        
                                        <div class="group">
                                            <label>
                                                <span>Security Code</span>
                                                <input id="securitycode" type="text" name="cvv" class="field" required />
                                            </label>
                                        </div>

                                        <div class="group">
                                            <label>
                                                <span>Postal code</span>
                                                <input id="postal_code" name="postal_code" class="field" placeholder="SW1W 0NY" required />
                                            </label>
                                        </div>

                                        <button type="submit" class="btn btn-success d-grid gap-2">Deposit</button>
                                    </form>
                                @else
                                    <div class="text-center py-4">
                                        <img src="{{ asset('processing.gif') }}" class="img-fluid" />
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- deposite modal end -->

        <!-- withdrawal Modal -->
        <div class="modal fade" id="withdrawal" tabindex="-1" aria-labelledby="withdrawalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="withdrawalLabel">FUND WITHDRAWAL</h5>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>

                    <div class="modal-body">
                        <form action="{{ route('withdrawal') }}" method="post">
                            @csrf
                            <ul class="nav nav_ttabs nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="btcT-tab" data-bs-toggle="tab" data-bs-target="#btcT" type="button" role="tab" aria-controls="btcT" aria-selected="true">
                                        <div>
                                            <img src="https://bitcoin.org/img/icons/opengraph.png?1674137323" alt="btc image" style="width: 20px;">
                                        </div>
                                        CRYPTO TRANSFER
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="wireT-tab" data-bs-toggle="tab" data-bs-target="#wireT" type="button" role="tab" aria-controls="wireT" aria-selected="false">
                                        <div>
                                            <img src="https://horseandcamelsupplies.com/wp-content/uploads/2020/06/wire-transfer-horse-and-camel-payment-bank-.png" alt="wire transfer image" style="width: 40px;">
                                        </div>
                                        WIRE TRANSFER
                                    </button>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="btcT" role="tabpanel" aria-labelledby="btcT-tab">
                                    <div class="py-4">
                                        <label for="">Transction Amount</label>
                                        <input type="text" name="wallet_amount" class="show_currency form-control">
                                    </div>

                                    <div class="pb-4">
                                        <label for="">Cryptocurrency Type</label>
                                        <select name="wallet_type" class="form-select">
                                            <option value="BTC">BTC</option>
                                            <option value="USDT">USDT</option>
                                            <option value="XMR">XMR</option>
                                        </select>
                                    </div>

                                    <div class="pb-4">
                                        <label for="">Wallet Address</label>
                                        <input type="text" name="wallet_address" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="tab-pane fade" id="wireT" role="tabpanel" aria-labelledby="wireT-tab">
                                    <div class="py-4">
                                        <label for="">Transction Amount</label>
                                        <input type="text" name="wireT_amount" class="show_currency form-control">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="py-2">
                                                <label for="">Account Holder's Name</label>
                                                <input type="text" name="wireT_acct_name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="py-2">
                                                <label for="">Account Number</label>
                                                <input type="number" name="wireT_acct_num" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="py-2">
                                                <label for="">IBAN Number</label>
                                                <input type="text" name="wireT_IBAN" class="form-control">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="py-2">
                                                <label for="">Bank Name</label>
                                                <input type="text" name="wireT_bank_name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="py-2">
                                                <label for="">Country</label>
                                                <select name="wireT_country" id="country" class="form-select">
                                                    @foreach (countries() as $country)
                                                        <option value="{{ $country->nicename }}">{{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="py-2">
                                                <label for="">Swift Code</label>
                                                <input type="text" name="wireT_swift_code" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-right mt-4">
                                <button class="btn btn-sm btn-success px-4" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();">
                                    <i class="fa-solid fa-dollar-sign pe-2"></i>Withdraw
                                    <!-- <i class="fa-solid fa-dollar-sign"></i> -->
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Documents Modal -->
        <div class="modal fade" id="documentswithdrawal" tabindex="-1" aria-labelledby="documentswithdrawalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="documentswithdrawalLabel">VERIFY ACCOUNT</h5>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>

                    <div class="modal-body">
                        <form action="{{ route('uploadProof') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="pb-4">
                                <label for="">PROOF OF IDENTITY</label>
                                <br>
                                <p>
                                    <b style="color: #0D2F7D; font-size: 10px;">E.g International passport, Drivers licence, National ID e.t.c</b>
                                </p>
                                <input type="file" name="poi" class="form-control">
                            </div>
                            
                            <div class="py-4">
                                <label for="">PROOF OF ADDRESS</label>
                                <br>
                                <p>
                                    <b style="color: #0D2F7D; font-size: 10px;">E.g Utility bills, bank statement ID e.t.c</b>
                                </p>
                                <input type="file" name="poa" class="form-control">
                            </div>

                            <p class="pt-1">
                                @if(auth()->user()->verify_proof == 0)
                                    <b class="text-danger" style="font-size: small; color: #0D2F7D;">
                                        Your account is Unverified.
                                    </b>
                                @else
                                    <b style="font-size: small; color: #0D2F7D;">
                                        Your account is Verified.
                                    </b>
                                @endif
                            </p>
                            <div class="text-right">
                                <button class="btn_click btn btn-success" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();">
                                    <i class="fas fa-upload pe-2"></i>Verify
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

        

        <script>
            // $(document).ready(function(){

            // Enlarge the display start
            var rightchat = document.getElementById("rightchat");
            function openrightchat() {
                if (rightchat.requestFullscreen) {
                    rightchat.requestFullscreen();
                } else if (rightchat.webkitRequestFullscreen) { /* Safari */
                    rightchat.webkitRequestFullscreen();
                } else if (rightchat.msRequestFullscreen) { /* IE11 */
                    rightchat.msRequestFullscreen();
                }
            }

            var leftchat = document.getElementById("leftchat");
            function openleftchat() {
                if (leftchat.requestFullscreen) {
                    leftchat.requestFullscreen();
                } else if (leftchat.webkitRequestFullscreen) { /* Safari */
                    leftchat.webkitRequestFullscreen();
                } else if (leftchat.msRequestFullscreen) { /* IE11 */
                    leftchat.msRequestFullscreen();
                }
            }
            // Enlarge the display end

            $('.buy1').click(function(){
                $("#buy_or_sell").val('');
                $("#buy_or_sell").val('BUY');

                $('.trade_now1').prop('disabled', false);
                $('.trade_now1').css('background-color','white');
                $('.trade_now1').css('color','wblack');
            });

            $('.sell1').click(function(){
                $("#buy_or_sell").val('');
                $("#buy_or_sell").val('SELL');

                $('.trade_now1').prop('disabled', false);
                $('.trade_now1').css('background-color','white');
                $('.trade_now1').css('color','wblack');
            });

            $('.buy2').click(function(){
                $("#buy_or_sell2").val('');
                $("#buy_or_sell2").val('BUY');

                $('.trade_now2').prop('disabled', false);
                $('.trade_now2').css('background-color','white');
                $('.trade_now2').css('color','wblack');
            });

            $('.sell2').click(function(){
                $("#buy_or_sell2").val('');
                $("#buy_or_sell2").val('SELL');

                $('.trade_now2').prop('disabled', false);
                $('.trade_now2').css('background-color','white');
                $('.trade_now2').css('color','wblack');
            });
        
            // $("#payment").modal('show');
            // });
        </script>

        <script>
            $("#my-div").hide();
            $('#stoploss1, #takeprofit1').each(function() {
                $(this).attr('disabled', true);
                $(this).css('border-color', '#627577');
            });

            // Use the "ready" event to make sure the page is loaded
            $(document).ready(function() {
                // When the checkbox is clicked
                $("#show-hide-div").click(function() {
                    // If the checkbox is checked, show the div
                    // Otherwise, hide the div
                    if ($(this).is(":checked")) {
                        $("#my-div").show();
                    } else {
                        $("#my-div").hide();
                    }
                });

                $('#stoploss').click(function() {
                    if ($(this).is(':checked')) {
                        $('#stoploss1').each(function() {
                            $(this).attr('disabled', false);
                            $(this).css('border-color', 'white');
                            $(this).val($(this).attr('id') === 'stoploss1' ? '0' : $(this).attr('id') === 'stoploss2' ? '0' : '0');
                        });
                    } else {
                        $('#stoploss1').each(function() {
                            $(this).attr('disabled', true);
                            $(this).css('border-color', '#627577');
                            $(this).val($(this).attr('id') === 'stoploss1' ? '0' : $(this).attr('id') === 'stoploss2' ? '0' : '0');
                        });
                    }
                });

                $('#takeprofit').click(function() {
                    if ($(this).is(':checked')) {
                        $('#takeprofit1, #takeprofit2, #takeprofit3').each(function() {
                            $(this).attr('disabled', false);
                            $(this).css('border-color', 'white');
                            $(this).val($(this).attr('id') === 'takeprofit1' ? '0' : $(this).attr('id') === 'takeprofit2' ? '0' : '0');
                        });
                    } else {
                        $('#takeprofit1, #takeprofit2, #takeprofit3').each(function() {
                            $(this).attr('disabled', true);
                            $(this).css('border-color', '#627577');
                            $(this).val($(this).attr('id') === 'takeprofit1' ? '0' : $(this).attr('id') === 'takeprofit2' ? '0' : '0');
                        });
                    }
                });
            });
        </script>

        @stack('script')
        @include('sweetalert::alert')

        <script>
            $('#pip').hide();
            $('.asset_crypto').hide();
            $('.asset_stocks').hide();
            $('.asset_forex').hide();
            $('.asset_commodities').hide();

            $('#dropdownMenuButton1').addClass("text-light");
            $(window).scroll(function() {
                const threshold = 50;
                const $navbar = $(".navbar");
                const $navbarLinks = $(".navbar a");
                if ($(this).scrollTop() > threshold) {
                    $navbar.removeClass("dark navbar-dark").addClass("light navbar-light");
                    $navbarLinks.removeClass("text-light").addClass("text-dark");
                    $('#dropdownMenuButton1').removeClass("text-light").addClass("text-dark");
                } else {
                    $navbar.removeClass("light navbar-light").addClass("dark navbar-dark");
                    $navbarLinks.removeClass("text-dark").addClass("text-light");
                    $('#dropdownMenuButton1').removeClass("text-dark").addClass("text-light");
                }
                $navbar.fadeIn();
            });
                
            $(".asset_type, .asset_type2").on('change', function() { // check if the radiobox has been clicked
                if(this.checked) {
                    var selectedValue = this.value;
                    if(selectedValue === 'Crypto'){
                        $('.asset_crypto').show();
                        $('.asset_stocks').hide();
                        $('.asset_forex').hide();
                        $('.asset_commodities').hide();
                    }else if(selectedValue === 'Stocks'){
                        $('.asset_stocks').show();
                        $('.asset_crypto').hide();
                        $('.asset_forex').hide();
                        $('.asset_commodities').hide();
                    }else if(selectedValue === 'Forex'){
                        $('.asset_forex').show();
                        $('.asset_stocks').hide();
                        $('.asset_crypto').hide();
                        $('.asset_commodities').hide();
                    }else if(selectedValue === 'Commodities'){
                        $('.asset_commodities').show();
                        $('.asset_forex').hide();
                        $('.asset_stocks').hide();
                        $('.asset_crypto').hide();
                    }else{
                        $('.asset_crypto').hide();
                        $('.asset_stocks').hide();
                        $('.asset_forex').hide();
                        $('.asset_commodities').hide();
                    }
                }
            });

            $(".asset_type").on('change', function() {
                if(this.checked) {
                    $('#my-select').prop('disabled', false);
                }else{
                    $('#my-select').prop('disabled', true);
                }
            });

            $(".asset_type2").on('change', function() {
                if(this.checked) {
                    $('#my-select2').prop('disabled', false);
                }else{
                    $('#my-select2').prop('disabled', true);
                }
            });

            $('#stoploss1').keyup(function(){
                // Get the value of the input box
                var piont = $(this).val();
                
                // Run the AJAX request
                $.ajax({
                    url: '{{ route("cal_pip") }}',
                    type: 'GET',
                    data: { 
                        asset: $('#my-select2').val(),
                        trade_size: $('#calc_volume2').val(),
                        piont: piont,
                        asset_type: $(':radio[name=asset_type2]:checked').val(),
                    },
                    beforeSend: function() {
                        // Show loading indicator or message here
                        $('#pip').text('');
                        $('#pip').show();
                        $('#pip').text('Loading...');
                    },
                    success: function(response) {
                        $('#pip').text('');
                        $('#pip').hide();
                        // $('#asset_total2').text(response.data);
                        $('#stoploss3').val('-' + '{{ auth()->user()->currency }}' + response.data + '.00');
                    },
                    error: function(error) {
                        // $('#asset_total2').text('Please try again');
                    }
                });
            });

            $('#takeprofit1').keyup(function(){
                // Get the value of the input box
                var piont = $(this).val();
            
                // Run the AJAX request
                $.ajax({
                    url: '{{ route("cal_pip") }}',
                    type: 'GET',
                    data: { 
                        asset: $('#my-select2').val(),
                        trade_size: $('#calc_volume2').val(),
                        piont: piont,
                        asset_type: $(':radio[name=asset_type2]:checked').val(),
                    },
                    beforeSend: function() {
                        // Show loading indicator or message here
                        $('#pip').text('');
                        $('#pip').show();
                        $('#pip').text('Loading...');
                    },
                    success: function(response) {
                        $('#pip').text('');
                        $('#pip').hide();
                        // $('#asset_total2').text(response.data);
                        $('#takeprofit3').val('{{ auth()->user()->currency }}' + response.data + '.00');
                    },
                    error: function(error) {
                        // $('#asset_total2').text('Please try again');
                    }
                });
            });

            var copyButton = document.getElementById("copy-button");
            var textToCopy = document.getElementById("text-to-copy");

            copyButton.addEventListener("click", function() {
                textToCopy.select();
                document.execCommand("copy");
            });
        </script>

        <!-- <script src="{{ asset('js/script.js') }}"></script> -->
        
        @include('multilingual.multilingual_js2')
        <script src="//code.tidio.co/mg1gml2jvh7u7qrw0eshwhpg0g2hzgdg.js" async></script>
        <script>
            jQuery('.btn_click').click(function () {
                jQuery(this).prop('disabled', true);
            });

            // Get all input elements with the "show_currency" class
            const currencyInputs = document.querySelectorAll('.show_currency');
            
            // Add an event listener to each input field
            currencyInputs.forEach(input => {
                input.addEventListener('input', function() {
                    const inputValue = input.value;
                    const numericValue = inputValue.replace(/[^0-9]/g, '');
                    input.value = '{{ auth()->user()->currency }}' + numericValue;
                });
            });
        </script>

        <script>
            // Detect the operating system
            var isWindows = navigator.platform.indexOf('Win') !== -1;
            var isMacOS = navigator.platform.indexOf('Mac') !== -1;
            var isLinux = navigator.platform.indexOf('Linux') !== -1;
            var isUnix = navigator.platform.indexOf('X11') !== -1;

            // // Hide scrollbar if the user is using Windows
            // if (isWindows) {
            //    document.getElementById('myDiv').style.overflow = 'hidden';
            //    // 'widget-forex-cross-rates-container > container-g15l2Mkg'
            // }

            // Hide scrollbar if the user is using Windows
            if (isLinux) {
                // $("#widget-forex-cross-rates-container > div").css("overflow", "hidden");
                // $('.tradingview-widget-container').hide();
            }

            // Assuming you have a checkbox element with the id "myCheckbox"
            // var isChecked = $(".checkBoxMe").prop("checked");

            // if (isChecked) {
            //     // alert("Please make sure the Confirm Checkbox is checked");
            // } else {
            //     alert("Please make sure the Confirm Checkbox is checked");
            // }
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
        <script src="{{ asset('js/pay.js') }}"></script>
    </body>
</html>