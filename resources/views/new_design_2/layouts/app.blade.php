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
        
        <footer>footer</footer>

        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        @include('sweetalert::alert')
    </body>
</html>