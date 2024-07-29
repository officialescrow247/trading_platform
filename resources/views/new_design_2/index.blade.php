@extends('new_design_2.layouts.app')
@section('content')
    <section class="welcome_d">
        <div class="container" id="harness_the_power">
            <h1 class="_dess kanit_thin_font">Harness the power</h1>
            <p class="text-light _dessw kanit_thin_font">of unreal spreads</p>
            <p class="text-light _dess_w kanit_thin_font">
                Get low-cost fixed spreads when you trade <br> with Trade Nation. 
                That means when the <br> markets move, your spreads won't.
            </p>
            <img src="{{ asset('adv.avif') }}" class="adv">
        </div>
    </section>

    <section class="so_ text-center">
        <div class="collapse collapse-horizontal pb-4" id="joi_s">
            <video id="joi_s_video" src="https://tnfev2.cdn.prismic.io/tnfev2/Zmc0i5m069VX1m_j_TN-HomepageVideoAV-16x9-V9.mp4" preload="auto" controls style="width: 100%; height: 100%;" playsinline webkit-playsinline x5-playsinline></video>
            <hr>
        </div>

        <div class="ds_ww" data-bs-toggle="collapse" data-bs-target="#joi_s" aria-expanded="false" aria-controls="joi_s">
            <p>
                <b>Watch: Powering markets and smashing goals with Aston Villa Football Club</b>
            </p>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum qui modi delectus et magni odio sed minima sequi rem accusamus, nesciunt dolore illo, dolores nostrum sunt ratione, nobis porro perferendis?
            </p>
        </div>
    </section>

    <script>
        document.querySelector('.ds_ww').addEventListener('click', function() {
            var video = document.getElementById('joi_s_video');
            video.loop = true; // Enable looping
            
            // Wait for the collapse animation to complete before playing the video
            var collapseElement = document.getElementById('joi_s');
            collapseElement.addEventListener('shown.bs.collapse', function () {
                video.play();
            });
        });
    </script>
@endsection