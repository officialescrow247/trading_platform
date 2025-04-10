<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ env('APP_NAME') }}</title>

        <!-- Bootstrap css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>			

        <style>
            .kanit-thin {
            font-family: "Kanit", sans-serif;
            font-weight: 100;
            font-style: normal;
            }

            .kanit-extralight {
            font-family: "Kanit", sans-serif;
            font-weight: 200;
            font-style: normal;
            }

            .kanit-light, * {
            font-family: "Kanit", sans-serif;
            font-weight: 300;
            font-style: normal;
            }

            .kanit-regular {
            font-family: "Kanit", sans-serif;
            font-weight: 400;
            font-style: normal;
            }

            .kanit-medium {
            font-family: "Kanit", sans-serif;
            font-weight: 500;
            font-style: normal;
            }

            .kanit-semibold {
            font-family: "Kanit", sans-serif;
            font-weight: 600;
            font-style: normal;
            }

            .kanit-bold {
            font-family: "Kanit", sans-serif;
            font-weight: 700;
            font-style: normal;
            }

            .kanit-extrabold {
            font-family: "Kanit", sans-serif;
            font-weight: 800;
            font-style: normal;
            }

            .kanit-black {
            font-family: "Kanit", sans-serif;
            font-weight: 900;
            font-style: normal;
            }

            .kanit-thin-italic {
            font-family: "Kanit", sans-serif;
            font-weight: 100;
            font-style: italic;
            }

            .kanit-extralight-italic {
            font-family: "Kanit", sans-serif;
            font-weight: 200;
            font-style: italic;
            }

            .kanit-light-italic {
            font-family: "Kanit", sans-serif;
            font-weight: 300;
            font-style: italic;
            }

            .kanit-regular-italic {
            font-family: "Kanit", sans-serif;
            font-weight: 400;
            font-style: italic;
            }

            .kanit-medium-italic {
            font-family: "Kanit", sans-serif;
            font-weight: 500;
            font-style: italic;
            }

            .kanit-semibold-italic {
            font-family: "Kanit", sans-serif;
            font-weight: 600;
            font-style: italic;
            }

            .kanit-bold-italic {
            font-family: "Kanit", sans-serif;
            font-weight: 700;
            font-style: italic;
            }

            .kanit-extrabold-italic {
            font-family: "Kanit", sans-serif;
            font-weight: 800;
            font-style: italic;
            }

            .kanit-black-italic {
            font-family: "Kanit", sans-serif;
            font-weight: 900;
            font-style: italic;
            }

            @media (max-width: 450px){
                .remove-px-5{
                    padding-right: 2rem !important;
                    padding-left: 2rem !important;
                }
            }
        </style>
    </head>

    <body class="bg_c">
        <div class="mb-2 py-3 border border-top-0 border-start-0 border-end-0" style="background-color: #000;">
            <div class="d-flex container" style="justify-content: space-between; align-items: center;">
                <div class="d_">
                    <p class="p-0 m-0">
                        Financial Spread Bets and CFDs are complex instruments and come with a high risk of losing 
                        money rapidly due to leverage. 73.6% of retail investor accounts lose money when trading 
                        CFDs with this provider. You should consider whether you understand how CFDs work and whether 
                        you can afford to take the high risk of losing your money. Read our Risk Disclosure Notice here.
                    </p>
                </div>
    
                <div style="width: 20%;">
                    <span class="d_2">Trading in</span>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/800px-Flag_of_the_United_Kingdom_%281-2%29.svg.png" alt="" class="img-fluid" style="width: 17px;">
                    <span class="d_2">UK</span>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #000;">
            <div class="container pb-3">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    <img src="{{ asset('imgs/logo_main.png') }}" alt="{{ env('APP_NAME') }} logo" style="width: 300px;">    
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #fff;">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        
        <main>@yield('content')</main>

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