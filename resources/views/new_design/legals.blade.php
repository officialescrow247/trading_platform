@extends('new_design.app')
@section('content')
    <section>
        <div class="container-fluid px-5 py-5 rm_p_2">
            <h1 style="color: #02070b;"><b>Legals</b></h1>

            <div class="pt-4">
                <h6 class="pb-3"><b>TN Trade - All countries</b></h6>
                <a href="{{ route('legals_id', 'risk-disclosure-notice') }}" class="text-dark pb-2" style="display: block; color: #02070b;">Risk Disclosure Notice</a>
                <a href="{{ route('legals_id', 'privacy-policies') }}" class="text-dark pb-2" style="display: block; color: #02070b;">Privacy Policy</a>
                <a href="{{ route('legals_id', 'cookie-policy') }}" class="text-dark pb-2" style="display: block; color: #02070b;">Cookie Notice</a>
                <a href="{{ route('legals_id', 'third-party-payment-policy') }}" class="text-dark pb-2" style="display: block; color: #02070b;">Third Party Payment Policy</a>
                <a href="{{ route('legals_id', 'compliants-policy') }}" class="text-dark pb-2" style="display: block; color: #02070b;">Complaints Policy</a>
            </div>

            <div class="pt-5 mt-3">
                <h6 class="pb-3"><b>TN Trade Bahamas</b></h6>
                <a href="{{ route('legals_id', 'bahamas-client-agreement') }}" class="text-dark pb-2" style="display: block; color: #02070b;">TN Trade Bahamas - Client Agreement</a>
                <a href="{{ route('legals_id', 'riask-disclosure-notice') }}" class="text-dark pb-2" style="display: block; color: #02070b;">TN Trade Bahamas - Loyalty Scheme</a>
                <a href="{{ route('legals_id', 'bahamas-loyalty-scheme') }}" class="text-dark pb-2" style="display: block; color: #02070b;">TN Trade Bahamas - Conflicts of Interest Policy</a>
                <a href="{{ route('legals_id', 'bahamas-conflicts-of-interest-policy') }}" class="text-dark pb-2" style="display: block; color: #02070b;">TN Trade Bahamas - Client Money Policy</a>
            </div>

            <div class="pt-5 mt-3">
                <h6 class="pb-3"><b>TN Trade South Africa</b></h6>
                <a href="{{ route('legals_id', 'south-africa-client-agreement') }}" class="text-dark pb-2" style="display: block; color: #02070b;">TN Trade South Africa - Client Agreement</a>
            </div>
        </div>
    </section>
@endsection