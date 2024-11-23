
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <meta name="googlebot-news" content="nosnippet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('iofrm-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('iofrm-theme29.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
        }

        .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .video-background video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            transform: translate(-50%, -50%);
            z-index: -1;
            object-fit: cover;
            opacity: 0.5; /* Reduce opacity of the video */
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3); /* Darken the video */
            z-index: 0;
        }

        .content {
            position: relative;
            z-index: 1;
            text-align: center;
            color: white;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-holder {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }

        h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .form-content{
            background-color: #fff;
            text-align: left;
            padding: 40px; border-radius: 20px;
        }

        .form-content h3, .form-content p, .form-content a{
            color: #000;
        }

        .page-links a{
            color: #000 !important;
        }

        label{
            font-size: 12px !important;
        }
    </style>
</head>

<body>
    <div class="video-background">
        <video muted autoplay loop id="myVideo">
            <source src="{{ asset('banner1.mp4') }}" type="video/mp4">
        </video>
    </div>
    <!-- Add this overlay for better control over the video darkness -->
    <div class="video-overlay"></div>

    <div class="content">
        <div class="mx-3">
            <div class="form-content">
                <div class="form-items pt-3">
                    <h3>VERIFY LOGIN</h3>
                    <i class="text-dark" style="font-size: 12px;">Your login security code has been sent to your email.</i>

                    @if ($errors->any())
                        <ul style="font-size: 12px !important; color: #D2042D; padding: 10px; border-radius: 20px;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <p class="pt-2" style="color: #D2042D; font-size: 12px;">
                        <b>Attention:</b> If you didn't get an email in your inbox, verify both your spam 
                        or junk folder. If the email is present in your spam folder, select 
                        "<b>Report as not spam</b>” to assist your email service provider in enhancing 
                        and developing its filtering capabilities.
                    </p>

                    <form action="{{ route('login_verify_pin_post') }}" autoComplete="off" method="post" class="mt-3 pt-3">
                        @csrf
                        <label for="" class="text-dark pt-3"><b>Security code</b></label>
                        <input type="password" placeholder="Your Security code" id="password" name="code" aria-describedby="password-errors" aria-invalid="false" class="form-control border" required />

                        <div class="form-button">
                            <button id="submit" type="submit" class="mt-2 w-100 btn btn-sm text-light px-5 btn-full" style="background-color: #2b3c4c;">Login</button>
                        </div>
                    </form>

                    <a class="btn px-5 btn-danger text-light mt-1" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Exit') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="js/popper.min.js"></script>
    <script src="{{ asset('bootstrap.min.js') }}"></script>
    <script src="js/main.js"></script>
</body>
</html>