@extends('layouts.app')
@section('content')
    <section class="pt-5 pb-4" style="background-color: #FF5D2E;">
        <div class="pt-5 container">
            <a href="{{ route('faq') }}" class="text-light">
                <svg class="page-faq-topic__header-icon" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#a)"><circle cx="20" cy="20" r="19.5" stroke="white"></circle></g><g clip-path="url(#b)"><path d="M15.7 20.528L18.5957 23.4237L18.5958 23.4238L18.5251 23.4945L15.7 20.528ZM15.7 20.528L25.5776 20.528L25.5778 20.528C25.8687 20.5276 26.101 20.2954 26.101 20.0043C26.101 19.715 25.8706 19.4748 25.5776 19.4748L15.7003 19.4748L18.5957 16.5848L18.5957 16.5848L18.597 16.5835C18.7972 16.3763 18.7991 16.0413 18.5957 15.8385C18.3884 15.6313 18.0522 15.6292 17.849 15.8391L14.0577 19.6304C13.8488 19.833 13.8486 20.1694 14.0578 20.3717L17.8484 24.1627C17.8486 24.1629 17.8488 24.1631 17.849 24.1633L15.7 20.528Z" fill="white" stroke="white" stroke-width="0.2"></path></g><defs><filter id="a" x="-12" y="-10" width="64" height="64" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix><feOffset dy="2"></feOffset><feGaussianBlur stdDeviation="6"></feGaussianBlur><feColorMatrix type="matrix" values="0 0 0 0 0.988235 0 0 0 0 0.313726 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend></filter><clipPath id="b"><rect width="12" height="12" fill="white" transform="translate(26.001 26.0012) rotate(-180)"></rect></clipPath></defs></svg>
                <b class="ps-3">Back to Topics</b>
            </a>
        </div>
    </section>

    <section>
        <div class="container pt-2 pb-5">
            <div class="py-5 d-flex align-items-start">
                <div class="d-none d-lg-block nav flex-column nav-pills pe-5 align-items-start" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <p class="faq_links nav-link {{ ($id == 'why-trade-nation') ? 'active' : '' }}" id="v-pills-why_trade-tab" data-bs-toggle="pill" data-bs-target="#v-pills-why_trade" type="button" role="tab" aria-controls="v-pills-why_trade" aria-selected="true"><b>Why Spreadex Trade</b></p>

                    <p class="faq_links nav-link {{ ($id == 'my-account') ? 'active' : '' }}" id="v-pills-my_acct-tab" data-bs-toggle="pill" data-bs-target="#v-pills-my_acct" type="button" role="tab" aria-controls="v-pills-my_acct" aria-selected="false"><b>My Account</b></p>

                    <p class="faq_links nav-link {{ ($id == 'payments') ? 'active' : '' }}" id="v-pills-payment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-payment" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="false"><b>Payments</b></p>

                    <p class="faq_links nav-link {{ ($id == 'trading') ? 'active' : '' }}" id="v-pills-trading-tab" data-bs-toggle="pill" data-bs-target="#v-pills-trading" type="button" role="tab" aria-controls="v-pills-trading" aria-selected="false"><b>Trading</b></p>
                </div>

                <div class="rm_p pe-5 tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade {{ ($id == 'why-trade-nation') ? 'active show' : '' }}" id="v-pills-why_trade" role="tabpanel" aria-labelledby="v-pills-why_trade-tab">
                        <h1><b>Why Spreadex Trade</b></h1>
                        <h6>FREQUENTLY ASKED QUESTIONS</h6>

                        <div class="accordion pt-5" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <strong>Why trade with Spreadex Trade?</strong>
                                    </button>
                                </h2>

                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Spreadex Trade was born from a simple belief: customers deserve better. Whether you are a new trader just setting out or a seasoned long-time trader, you can be sure that you will be supported on every step of your journey. We adopt a customer-first approach which will help change the way you engage with the financial markets. We offer our clients:
                                        </p>
                                        <ul>
                                            <li>
                                                Fixed Spreads with no hidden extra fees
                                            </li>

                                            <li>
                                                Negative Balance Protection
                                            </li>

                                            <li>
                                                A great range of markets and products to trade
                                            </li>

                                            <li>
                                                Transparency, fairness and honesty
                                            </li>

                                            <li>
                                                A “customer comes first” approach
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Who is Spreadex Trade regulated by?
                                    </button>
                                </h2>
                                
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Spreadex Trade is regulated by the Financial Conduct Authority (FCA) in the UK, the Australian Securities and Investments Commission (ASIC), the Financial Sector Conduct Authority (FSCA) in South Africa, and the Securities Commission of The Bahamas (SCB).
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Which countries does Spreadex Trade have offices in?
                                    </button>
                                </h2>

                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Spreadex Trade operates out of the United Kingdom, Australia, South Africa and the Bahamas.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        What are Spreadex Trade's opening hours?
                                    </button>
                                </h2>

                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Spreadex Trade opens on Sunday 10pm (GMT) until Friday 10pm (GMT). Our Customer Success teams are here to support you on email, live chat and phone.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade {{ ($id == 'my-account') ? 'active show' : '' }}" id="v-pills-my_acct" role="tabpanel" aria-labelledby="v-pills-my_acct-tab">
                        <h1><b>My Account</b></h1>
                        <h6>FREQUENTLY ASKED QUESTIONS</h6>

                        <div class="accordion pt-5" id="accordionExample2">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                        How long will it take for my account to be approved?
                                    </button>
                                </h2>

                                <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>
                                            As long as you've sent us back everything we've asked for, then we'll have your account up and running, usually within one business day.
                                        </p>
                                        <p>
                                            But don't worry: if we need anything else from you, one of our Customer Onboarding team will be in contact to let you know what we need and why we need it. This will usually occur within one day of your account application. <br>
                                            To start, simply <a href="{{ route('register') }}">click here</a> and fill out our online application form.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Does Spreadex Trade offer any guides on how to use the trading platform?
                                    </button>
                                </h2>
                                
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>
                                            Yes, we offer a financial adviser that would assist you with your whole trading experience.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        Which web browsers can I use with the trading platform?
                                    </button>
                                </h2>

                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        The Spreadex Trade platform runs on Chrome, Firefox, Safari and Microsoft Edge. For the best experience, we recommend the Google Chrome browser.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade {{ ($id == 'payments') ? 'active show' : '' }}" id="v-pills-payment" role="tabpanel" aria-labelledby="v-pills-payment-tab">
                        <h1><b>Payments</b></h1>
                        <h6>FREQUENTLY ASKED QUESTIONS</h6>

                        <div class="accordion pt-5" id="accordionExample3">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                        Which payment types do you have on offer?
                                    </button>
                                </h2>

                                <div id="collapseEight" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample3">
                                    <div class="accordion-body">
                                        <p>
                                            We accept cryptos, debit cards, credit cards, bank transfers.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        Is there a minimum deposit?
                                    </button>
                                </h2>
                                
                                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample3">
                                    <div class="accordion-body">
                                        <p>
                                            There is a minimum deposit 250.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                        Which currency can I open an account in?
                                    </button>
                                </h2>

                                <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample3">
                                    <div class="accordion-body">
                                        We offer accounts in GBP, USD, EUR.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                        Where is my money held?
                                    </button>
                                </h2>

                                <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample3">
                                    <div class="accordion-body">
                                        Client money is held in segregated bank accounts with our liquidity provider at Swiss Bank in Switzerland.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                        When I withdraw, where do you send my money?
                                    </button>
                                </h2>

                                <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample3">
                                    <div class="accordion-body">
                                        In most cases we will return funds back to the source of your deposit.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                    Is there a minimum amount I can withdraw?
                                    </button>
                                </h2>

                                <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample3">
                                    <div class="accordion-body">
                                        Yes, the minimum withdrawal amount is 50 of the currency of your account, for example, 50 USD.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade {{ ($id == 'trading') ? 'active show' : '' }}" id="v-pills-trading" role="tabpanel" aria-labelledby="v-pills-trading-tab">
                        <h1><b>Trading</b></h1>
                        <h6>FREQUENTLY ASKED QUESTIONS</h6>

                        <div class="accordion pt-5" id="accordionExample4">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="true" aria-controls="collapse14">
                                        What is the minimum stake size?
                                    </button>
                                </h2>

                                <div id="collapse14" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample4">
                                    <div class="accordion-body">
                                        <p>
                                            The minimum stake size is 1USD on shares and all other markets on the Spreadex Trade platform.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                        Which platforms do you offer?
                                    </button>
                                </h2>
                                
                                <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample4">
                                    <div class="accordion-body">
                                        <p>
                                            You can Spread Trade on The Spreadex Trade platform.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                        Do you pay dividends?
                                    </button>
                                </h2>

                                <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample4">
                                    <div class="accordion-body">
                                        <p>
                                            Some companies may pay out dividends to shareholders as scheduled events throughout the year.If you have an open position in a share, or an index of which that company is a component, you will see a dividend adjustment posted on your account.Traders cannot profit or make a loss from these adjustments. 
                                        </p>
                                        <p>
                                            The adjustment will reflect the natural change in price of the underlying product. There is no net effect on your account.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                        Do you allow hedging on your platform?
                                    </button>
                                </h2>

                                <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample4">
                                    <div class="accordion-body">
                                        Yes, you can place hedging orders. This allows you to place both a long and short position on the same instrument at the same time.
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection