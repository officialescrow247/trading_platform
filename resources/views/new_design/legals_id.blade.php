@extends('new_design.app')
@section('content')
    <section>
        <div class="container-fluid px-5 py-5 rm_p_2">
            @if($data == 'risk-disclosure-notice')
                <div style="color: #0A1E32;">
                    <h1><b>Trade Nation - Risk Disclosure Notice</b></h1>
                    <p>
                        Legals are more than just the fine print. The policies we have in place help us keep our customers informed about how we operate and provide trust and transparency throughout. <br><br>

                        <b>PLEASE NOTE:</b> It is important to read this document carefully and understand its content!<br><br>

                        <b>Please <a href="https://tnfev2.cdn.prismic.io/tnfev2/8feeda59-8735-4239-a88c-9899fcb6b479_221206+Trade+Nation+-+Risk+Disclosure+Notice.pdf" style="color: #0A1E32;">click here</a> to view a PDF version of the: <a href="https://tnfev2.cdn.prismic.io/tnfev2/8feeda59-8735-4239-a88c-9899fcb6b479_221206+Trade+Nation+-+Risk+Disclosure+Notice.pdf" style="color: #0A1E32;">Trade Nation - Risk Disclosure Notice</a></b><br><br>

                        <img src="https://tradenation.com/diamond.png" alt="" class="pe-2">
                        Last updated January 2023<br>
                        If you have difficulty viewing this document please contact support@tradenation-uk.com for assistance. <br><br>

                        <b>All legals can be found at: <a href="{{ route('legals_new') }}" style="color: #0A1E32;">Legals</a></b>
                    </p>
                </div>
            @elseif($data == 'privacy-policies')
                <div style="color: #0A1E32;">
                    <h1><b>Trade Nation Privacy Policy</b></h1>
                    <p>
                        Legals are more than just the fine print. The policies we have in place help us keep our customers informed about how we operate and provide trust and transparency throughout. <br><br>

                        <b>PLEASE NOTE:</b> It is important to read this document carefully and understand its content!<br><br>

                        <b>Please <a href="https://tnfev2.cdn.prismic.io/tnfev2/07f8d0c8-0932-4f81-9f1d-7bc2fcf76491_221206+Trade+Nation+Privacy+Policy.pdf" style="color: #0A1E32;">click here</a> to view a PDF version of the: <a href="https://tnfev2.cdn.prismic.io/tnfev2/07f8d0c8-0932-4f81-9f1d-7bc2fcf76491_221206+Trade+Nation+Privacy+Policy.pdf" style="color: #0A1E32;">Trade Nation Privacy Policy</a></b><br><br>

                        <img src="https://tradenation.com/diamond.png" alt="" class="pe-2">
                        Last updated January 2023<br>
                        If you have difficulty viewing this document please contact support@tradenation-uk.com for assistance. <br><br>

                        <b>All legals can be found at: <a href="{{ route('legals_new') }}" style="color: #0A1E32;">Legals</a></b>
                    </p>
                </div>
            @elseif($data == 'cookie-policy')
                <div style="color: #0A1E32;">
                    <h1><b>Trade Nation - Cookie Policy</b></h1>
                    <p>
                        A cookie is a small piece of data (text file) that a website – when visited by a user – asks your browser to store on your device in order to remember information about you, such as your preferences or login information. Those cookies are set by us and are called first party cookies. <br><br>

                        We also use third party cookies – which are cookies from a domain different than the domain of the website you are visiting – for our advertising and marketing efforts. <br><br>

                        We use cookies and other tracking technologies for the following purposes: <br>
                        <img src="https://tradenation.com/diamond.png" alt="" class="pe-2">
                        Assisting you in navigation<br>
                        <img src="https://tradenation.com/diamond.png" alt="" class="pe-2">
                        Providing services and functionality such as live chat<br>
                        <img src="https://tradenation.com/diamond.png" alt="" class="pe-2">
                        Analysing your use of our products, services or applications<br>
                        <img src="https://tradenation.com/diamond.png" alt="" class="pe-2">
                        Assisting with our promotional and marketing efforts (including behavioural advertising)<br><br>

                        Below is a detailed list of the cookies we use on our Website. Our Website is scanned with our cookie scanning tool regularly to keep this list as accurate as possible. We classify cookies using the following categories: <br><br>

                        <img src="https://tradenation.com/diamond.png" alt="" class="pe-2">
                        Strictly Necessary Cookies<br>
                        <img src="https://tradenation.com/diamond.png" alt="" class="pe-2">
                        Performance Cookies<br>
                        <img src="https://tradenation.com/diamond.png" alt="" class="pe-2">
                        Functional Cookies<br>
                        <img src="https://tradenation.com/diamond.png" alt="" class="pe-2">
                        Targeting Cookies<br><br>
                        

                        You can opt-out of each cookie category (except strictly necessary cookies) by clicking on the “cookie settings” button below:<br><br>
                        <div class="text-center">
                            <button class="px-4 cookie_btn btn rounded-pill py-3">Cookie settings</button>
                        </div> <br><br>
                    </p>
                    <p style="text-align: right;" class="fst-italic">Last updated January 2023</p>
                    <p>
                        If you have difficulty viewing this document please contact support@tradenation.com for assistance.
                    </p>
                    <h6><b>All legals can be found at: <a href="{{ route('legals_new') }}" style="color: #0A1E32;">Legals</a> </b></h6>
                </div>
            @elseif($data == 'third-party-payment-policy')
                <div style="color: #0A1E32;">
                    <h1><b>Trade Nation - Third Party Payment Policy</b></h1>
                    <p>
                        Legals are more than just the fine print. The policies we have in place help us keep our customers informed about how we operate and provide trust and transparency throughout. <br><br>

                        <b>PLEASE NOTE:</b> It is important to read this document carefully and understand its content!<br><br>

                        <b>Please <a href="https://tnfev2.cdn.prismic.io/tnfev2/d90c463f-98ad-40d5-8896-b31138329e64_221206+Trade+Nation+-+Third+Party+Payment+Policy.pdf" style="color: #0A1E32;">click here</a> to view a PDF version of the: <a href="https://tnfev2.cdn.prismic.io/tnfev2/d90c463f-98ad-40d5-8896-b31138329e64_221206+Trade+Nation+-+Third+Party+Payment+Policy.pdf" style="color: #0A1E32;">Trade Nation - Third Party Payment Policy</a></b><br><br>

                        <img src="https://tradenation.com/diamond.png" alt="" class="pe-2">
                        Last updated January 2023<br>
                        If you have difficulty viewing this document please contact support@tradenation-uk.com for assistance. <br><br>

                        <b>All legals can be found at: <a href="{{ route('legals_new') }}" style="color: #0A1E32;">Legals</a></b>
                    </p>
                </div>
            @elseif($data == 'compliants-policy')
                <div style="color: #0A1E32;">
                    <h1><b>Trade Nation - Complaints Policy</b></h1>
                    <p>
                        Legals are more than just the fine print. The policies we have in place help us keep our customers informed about how we operate and provide trust and transparency throughout. <br><br>

                        <b>PLEASE NOTE:</b> It is important to read this document carefully and understand its content!<br><br>

                        <b>Please <a href="https://tnfev2.cdn.prismic.io/tnfev2/ac4cc72d-cfce-48c0-9be6-369f5c0c83b1_221206+Trade+Nation+-+Complaints+Policy.pdf" style="color: #0A1E32;">click here</a> to view a PDF version of the: <a href="https://tnfev2.cdn.prismic.io/tnfev2/ac4cc72d-cfce-48c0-9be6-369f5c0c83b1_221206+Trade+Nation+-+Complaints+Policy.pdf" style="color: #0A1E32;">Trade Nation - Complaints Policy</a></b><br><br>

                        <img src="https://tradenation.com/diamond.png" alt="" class="pe-2">
                        Last updated January 2023<br>
                        If you have difficulty viewing this document please contact support@tradenation-uk.com for assistance. <br><br>

                        <b>All legals can be found at: <a href="{{ route('legals_new') }}" style="color: #0A1E32;">Legals</a></b>
                    </p>
                </div>
            @elseif($data == 'bahamas-client-agreement')
                <div style="color: #0A1E32;">
                    <h1><b>Trade Nation Bahamas - Client Agreement</b></h1>
                    <p>
                        Legals are more than just the fine print. The policies we have in place help us keep our customers informed about how we operate and provide trust and transparency throughout. <br><br>

                        <b>PLEASE NOTE:</b> It is important to read this document carefully and understand its content!<br><br>

                        <b>Please <a href="https://tnfev2.cdn.prismic.io/tnfev2/1f0dd471-1ac5-4694-8261-a5b99a75c8b7_221206+Trade+Nation+Bahamas+-+Client+Agreement.pdf" style="color: #0A1E32;">click here</a> to view a PDF version of the: <a href="https://tnfev2.cdn.prismic.io/tnfev2/1f0dd471-1ac5-4694-8261-a5b99a75c8b7_221206+Trade+Nation+Bahamas+-+Client+Agreement.pdf" style="color: #0A1E32;">Trade Nation Bahamas - Client Agreement</a></b><br><br>

                        <img src="https://tradenation.com/diamond.png" alt="" class="pe-2">
                        Last updated January 2023<br>
                        If you have difficulty viewing this document please contact support@tradenation-uk.com for assistance. <br><br>

                        <b>All legals can be found at: <a href="{{ route('legals_new') }}" style="color: #0A1E32;">Legals</a></b>
                    </p>
                </div>
            @elseif($data == 'riask-disclosure-notice')
                <div style="color: #0A1E32;">
                    <h1><b>Trade Nation Bahamas - Client Agreement</b></h1>
                    <p>
                        Legals are more than just the fine print. The policies we have in place help us keep our customers informed about how we operate and provide trust and transparency throughout. <br><br>

                        <b>PLEASE NOTE:</b> It is important to read this document carefully and understand its content!<br><br>

                        <b>Please <a href="https://tnfev2.cdn.prismic.io/tnfev2/1f0dd471-1ac5-4694-8261-a5b99a75c8b7_221206+Trade+Nation+Bahamas+-+Client+Agreement.pdf" style="color: #0A1E32;">click here</a> to view a PDF version of the: <a href="https://tnfev2.cdn.prismic.io/tnfev2/1f0dd471-1ac5-4694-8261-a5b99a75c8b7_221206+Trade+Nation+Bahamas+-+Client+Agreement.pdf" style="color: #0A1E32;">Trade Nation Bahamas - Client Agreement</a></b><br><br>

                        <img src="https://tradenation.com/diamond.png" alt="" class="pe-2">
                        Last updated January 2023<br>
                        If you have difficulty viewing this document please contact support@tradenation-uk.com for assistance. <br><br>

                        <b>All legals can be found at: <a href="{{ route('legals_new') }}" style="color: #0A1E32;">Legals</a></b>
                    </p>
                </div>
            @elseif($data == 'bahamas-loyalty-scheme')
                <div style="color: #0A1E32;">
                    <h1><b>Trade Nation Bahamas - Loyalty Scheme Terms</b></h1>
                    <p>
                        Legals are more than just the fine print. The policies we have in place help us keep our customers informed about how we operate and provide trust and transparency throughout. <br><br>

                        <b>PLEASE NOTE:</b> It is important to read this document carefully and understand its content!<br><br>

                        <b>Please <a href="https://tnfev2.cdn.prismic.io/tnfev2/1376680a-75bf-48fd-84f7-a7c0065d4e6d_221206+Trade+Nation+Bahamas+-+Loyalty+Scheme+Terms.pdf" style="color: #0A1E32;">click here</a> to view a PDF version of the: <a href="https://tnfev2.cdn.prismic.io/tnfev2/1376680a-75bf-48fd-84f7-a7c0065d4e6d_221206+Trade+Nation+Bahamas+-+Loyalty+Scheme+Terms.pdf" style="color: #0A1E32;">Trade Nation Bahamas - Loyalty Scheme Terms</a></b><br><br>

                        <img src="https://tradenation.com/diamond.png" alt="" class="pe-2">
                        Last updated January 2023<br>
                        If you have difficulty viewing this document please contact support@tradenation-uk.com for assistance. <br><br>

                        <b>All legals can be found at: <a href="{{ route('legals_new') }}" style="color: #0A1E32;">Legals</a></b>
                    </p>
                </div>
            @elseif($data == 'bahamas-conflicts-of-interest-policy')
                <div style="color: #0A1E32;">
                    <h1><b>Trade Nation Bahamas - Conflicts of Interest Policy</b></h1>
                    <p>
                        Legals are more than just the fine print. The policies we have in place help us keep our customers informed about how we operate and provide trust and transparency throughout. <br><br>

                        <b>PLEASE NOTE:</b> It is important to read this document carefully and understand its content!<br><br>

                        <b>Please <a href="https://tnfev2.cdn.prismic.io/tnfev2/2a39e09f-d5f0-4fe1-9762-57b9176ff4c2_221206+Trade+Nation+Bahamas+-+Conflicts+of+Interest+Policy.pdf" style="color: #0A1E32;">click here</a> to view a PDF version of the: <a href="https://tnfev2.cdn.prismic.io/tnfev2/2a39e09f-d5f0-4fe1-9762-57b9176ff4c2_221206+Trade+Nation+Bahamas+-+Conflicts+of+Interest+Policy.pdf" style="color: #0A1E32;">Trade Nation Bahamas - Conflicts of Interest Policy</a></b><br><br>

                        <img src="https://tradenation.com/diamond.png" alt="" class="pe-2">
                        Last updated January 2023<br>
                        If you have difficulty viewing this document please contact support@tradenation-uk.com for assistance. <br><br>

                        <b>All legals can be found at: <a href="{{ route('legals_new') }}" style="color: #0A1E32;">Legals</a></b>
                    </p>
                </div>
            @elseif($data == 'bahamas-client-money-policy')
                <div style="color: #0A1E32;">
                    <h1><b>Trade Nation Bahamas - Client Money Policy</b></h1>
                    <p>
                        Legals are more than just the fine print. The policies we have in place help us keep our customers informed about how we operate and provide trust and transparency throughout. <br><br>

                        <b>PLEASE NOTE:</b> It is important to read this document carefully and understand its content!<br><br>

                        <b>Please <a href="https://tnfev2.cdn.prismic.io/tnfev2/306b3fce-07f0-4380-8cf0-b3956dc94d81_221206+Trade+Nation+Bahamas+-+Client+Money+Policy.pdf" style="color: #0A1E32;">click here</a> to view a PDF version of the: <a href="https://tnfev2.cdn.prismic.io/tnfev2/306b3fce-07f0-4380-8cf0-b3956dc94d81_221206+Trade+Nation+Bahamas+-+Client+Money+Policy.pdf" style="color: #0A1E32;">Trade Nation Bahamas - Client Money Policy</a></b><br><br>

                        <img src="https://tradenation.com/diamond.png" alt="" class="pe-2">
                        Last updated January 2023<br>
                        If you have difficulty viewing this document please contact support@tradenation-uk.com for assistance. <br><br>

                        <b>All legals can be found at: <a href="{{ route('legals_new') }}" style="color: #0A1E32;">Legals</a></b>
                    </p>
                </div>
            @else
                <div style="color: #0A1E32;">
                    <h1><b>Trade Nation South Africa Client Agreement</b></h1>
                    <p>
                        Legals are more than just the fine print. The policies we have in place help us keep our customers informed about how we operate and provide trust and transparency throughout. <br><br>

                        <b>PLEASE NOTE:</b> It is important to read this document carefully and understand its content!<br><br>

                        <b>Please <a href="https://tnfev2.cdn.prismic.io/tnfev2/39c48566-f02f-4ec0-b869-205fb054fa99_221205+Trade+Nation+%28South+Africa%29+Client+Agreement.pdf" style="color: #0A1E32;">click here</a> to view a PDF version of the: <a href="https://tnfev2.cdn.prismic.io/tnfev2/39c48566-f02f-4ec0-b869-205fb054fa99_221205+Trade+Nation+%28South+Africa%29+Client+Agreement.pdf" style="color: #0A1E32;">Trade Nation South Africa Client Agreement</a></b><br><br>

                        <img src="https://tradenation.com/diamond.png" alt="" class="pe-2">
                        Last updated January 2023<br>
                        If you have difficulty viewing this document please contact support@tradenation-uk.com for assistance. <br><br>

                        <b>All legals can be found at: <a href="{{ route('legals_new') }}" style="color: #0A1E32;">Legals</a></b>
                    </p>
                </div>
            @endif
        </div>
    </section>
@endsection