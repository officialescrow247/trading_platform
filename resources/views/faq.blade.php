@extends('layouts.app')
@section('content')
    <section>
        <div class="container-fluid px-5 py-5">
            <div class="py-5">
                <h1 class="text-center pb-5 pt-3">Questions by topic</h1>

                <div class="row pt-3">
                    <a href="{{ route('faq2', 'why-trade-nation') }}" class="col-lg-3 col-md-6 faq_tabs p-5">
                        <div class="">
                            <div class="d-flex">
                                <div class="pe-4">
                                    <h5 class="pb-3"><b>Why trade nation</b></h5>
                                    <p>Who we are and how we operate</p>
                                </div>
    
                                <div style="padding-top: 150px;">
                                    <svg class="svg_path faqs-topics__icon" xmlns="http://www.w3.org/2000/svg" width="12" height="19" fill="none"><path fill="#3C3C3B" d="M.9893 19.1999l.3514-.3557-.3514.3557a1.0185 1.0185 0 0 0 1.4322 0l8.5969-8.4912a1.0033 1.0033 0 0 0 0-1.432h-.0001L2.4215.7893h-.0001A1.0221 1.0221 0 0 0 1.7073.494c-.2513 0-.5164.0942-.7175.2985A1.0033 1.0033 0 0 0 .993 2.2212h.0001l7.8664 7.7733L.9893 17.768l.3514.3557-.3514-.3557a1.0033 1.0033 0 0 0 0 1.4319z"></path></svg>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('faq2', 'my-account') }}" class="col-lg-3 col-md-6 faq_tabs p-5">
                        <div class="">
                            <div class="d-flex">
                                <div class="pe-4">
                                    <h5 class="pb-3"><b>My account</b></h5>
                                    <p>Your trading account and how it works</p>
                                </div>
    
                                <div style="padding-top: 150px;">
                                    <svg class="svg_path faqs-topics__icon" xmlns="http://www.w3.org/2000/svg" width="12" height="19" fill="none"><path fill="#3C3C3B" d="M.9893 19.1999l.3514-.3557-.3514.3557a1.0185 1.0185 0 0 0 1.4322 0l8.5969-8.4912a1.0033 1.0033 0 0 0 0-1.432h-.0001L2.4215.7893h-.0001A1.0221 1.0221 0 0 0 1.7073.494c-.2513 0-.5164.0942-.7175.2985A1.0033 1.0033 0 0 0 .993 2.2212h.0001l7.8664 7.7733L.9893 17.768l.3514.3557-.3514-.3557a1.0033 1.0033 0 0 0 0 1.4319z"></path></svg>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('faq2', 'payments') }}" class="col-lg-3 col-md-6 faq_tabs p-5">
                        <div class="">
                            <div class="d-flex">
                                <div class="pe-4">
                                    <h5 class="pb-3"><b>Payments</b></h5>
                                    <p>Adding money to your trading account</p>
                                </div>
    
                                <div style="padding-top: 150px;">
                                    <svg class="svg_path faqs-topics__icon" xmlns="http://www.w3.org/2000/svg" width="12" height="19" fill="none"><path fill="#3C3C3B" d="M.9893 19.1999l.3514-.3557-.3514.3557a1.0185 1.0185 0 0 0 1.4322 0l8.5969-8.4912a1.0033 1.0033 0 0 0 0-1.432h-.0001L2.4215.7893h-.0001A1.0221 1.0221 0 0 0 1.7073.494c-.2513 0-.5164.0942-.7175.2985A1.0033 1.0033 0 0 0 .993 2.2212h.0001l7.8664 7.7733L.9893 17.768l.3514.3557-.3514-.3557a1.0033 1.0033 0 0 0 0 1.4319z"></path></svg>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('faq2', 'trading') }}" class="col-lg-3 col-md-6 faq_tabs p-5">
                        <div class="">
                            <div class="d-flex">
                                <div class="pe-4">
                                    <h5 class="pb-3"><b>Trading</b></h5>
                                    <p>Questions related to making a trade</p>
                                </div>
    
                                <div style="padding-top: 150px;">
                                    <svg class="svg_path faqs-topics__icon" xmlns="http://www.w3.org/2000/svg" width="12" height="19" fill="none"><path fill="#3C3C3B" d="M.9893 19.1999l.3514-.3557-.3514.3557a1.0185 1.0185 0 0 0 1.4322 0l8.5969-8.4912a1.0033 1.0033 0 0 0 0-1.432h-.0001L2.4215.7893h-.0001A1.0221 1.0221 0 0 0 1.7073.494c-.2513 0-.5164.0942-.7175.2985A1.0033 1.0033 0 0 0 .993 2.2212h.0001l7.8664 7.7733L.9893 17.768l.3514.3557-.3514-.3557a1.0033 1.0033 0 0 0 0 1.4319z"></path></svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection