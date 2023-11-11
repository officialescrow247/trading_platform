<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="robots" content="noindex">
      <meta name="googlebot" content="noindex">
      <meta name="googlebot-news" content="nosnippet">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>WELCOME || {{ env('APP_NAME') }}</title>
      <link rel="icon" href="{{ asset('logo.png') }}" sizes="16x16" type="image/png">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

      <style>
         #approve_page{
            background-color: #ff5d2e;
            background: linear-gradient(0deg,rgba(228,74,2,.6) 29.38%,rgba(252,80,0,.1)), url('{{ asset("imgs/a1.png") }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            max-width: 100%;
            padding-top: 80px;
            height: 100vh;
         }
      </style>
	</head>
   
   <body>
      <main>
         <section class="py-5" id="approve_page">
            <div class="py-5 text-center container">
               <h1 class="text-light pt-5">Awaiting approval from the Client Management Team.</h1>
               <a href="{{ route('logout') }}" class="btn btn-sm btn-info px-4 mt-4">Logout</a>
            </div>
         </section>
      </main>
      
      <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   </body>
</html>