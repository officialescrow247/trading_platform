@extends('new_design.app')
@section('content')

    <section>
        <div class="container py-5 mt-5">
            <div class="d-flex justify-content-center">

                <div class="col-md-8">
                    
    
                    <!-- <button class="btn w-100" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">     
                        <div class="d-flex justify-content-between">
                            <div>
                                <svg style="width: 20px;" class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="FormatAlignLeftIcon"><path d="M15 15H3v2h12v-2zm0-8H3v2h12V7zM3 13h18v-2H3v2zm0 8h18v-2H3v2zM3 3v2h18V3H3z"></path></svg>
                                <span class="ps-3">Why trade with Spreadex Trade?</span>
                            </div>

                            <div>
                                <i class="fa fa-arrow-down"></i>
                            </div>
                        </div>
                    </button>

                    <button class="btn w-100" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">     
                        <div class="d-flex justify-content-between">
                            <div>
                                <svg style="width: 20px;" class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="FormatAlignLeftIcon"><path d="M15 15H3v2h12v-2zm0-8H3v2h12V7zM3 13h18v-2H3v2zm0 8h18v-2H3v2zM3 3v2h18V3H3z"></path></svg>
                                <span class="ps-3">Who is Spreadex Trade regulated by?</span>
                            </div>

                            <div>
                                <i class="fa fa-arrow-down"></i>
                            </div>
                        </div>
                    </button>
                    
                    <div class="collapse" id="faq1">
                        <div class="card card-body article_collapse">
                            <p>
                                With us, you get three very important advantages: value, certainty and support. <br><br>

                                Our fixed spreads are amongst the narrowest and most competitively priced around. Narrow spreads generally cost less to trade versus variable spreads. Fixed spreads let you know your trading costs up front. Together, they give you greater control.<br><br>

                                With regular trades, you’ll notch up serious savings over spreads that can widen at the whim of the markets. Throw in our 24/5 dedicated, professional and friendly Customer Success Team and you’re ready to go.<br><br>

                                But that’s not all:<br>
                                * <b>Negative Balance Protection:</b> if your account goes into arrears, we’ll automatically reset it to zero<br>
                                * <b>Markets you want to trade:</b> we focus on the markets where traders like you are most active<br>
                                * <b>Transparency, fairness and honesty:</b> no commission, free withdrawals, no hidden costs<br>
                                * <b>Traders first:</b> you’re the reason we’re here, so your needs always come first
                            </p>
                        </div>
                    </div>

                    <div class="collapse" id="faq2">
                        <div class="card card-body article_collapse">
                            <p>
                                We are regulated in the UK by the Financial Conduct Authority (FCA); in Australia, we’re governed by the Australian Securities and Investments Commission (ASIC); and in the Bahamas, by the Securities Commission of The Bahamas (SCB). 
                            </p>
                        </div>
                    </div> -->
                    <div class="accordion" id="accordionExample">
                        <h5 class="pb-4"><b>Spreadex Trade FAQ</b></h5>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <strong>Why trade with Spreadex Trade?</strong>
                                </button>
                            </h2>

                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
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
                                    <b>Who is Spreadex Trade regulated by?</b>
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
                                    <b>Which countries does Spreadex Trade have offices in?</b>
                                </button>
                            </h2>

                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <b>Spreadex Trade operates out of the United Kingdom, Australia, South Africa and the Bahamas.</b>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <b>What are Spreadex Trade's opening hours?</b>
                                </button>
                            </h2>

                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Spreadex Trade opens on Sunday 10pm (GMT) until Friday 10pm (GMT). Our Customer Success teams are here to support you on email, live chat and phone.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion pt-5" id="accordionExample2">
                        <h5 class="pb-4"><b>My Account</b></h5>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    How long will it take for my account to be approved?
                                </button>
                            </h2>

                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample2">
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

                    <div class="accordion pt-5" id="accordionExample3">
                        <h5 class="pb-4"><b>Payments</b></h5>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Which payment types do you have on offer?
                                </button>
                            </h2>

                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample3">
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

                    <div class="accordion pt-5" id="accordionExample4">
                        <h5 class="pb-4"><b>Trading</b></h5>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                    What is the minimum stake size?
                                </button>
                            </h2>

                            <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample4">
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
    </section>
@endsection