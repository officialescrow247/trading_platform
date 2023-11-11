<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('css/pay.css') }}">
    </head>
    <body>
        <form class="form-container" action="{{ route('deposit_with_card') }}" method="post">
            @csrf
            <div class="field-container">
                <label for="name">Name</label>
                <input id="name" type="text" name="name">
            </div>
            <div class="field-container">
                <label for="cardnumber">Card Number</label><span id="generatecard">generate random</span>
                <input id="cardnumber" type="text" name="card_number">
                <svg id="ccicon" class="ccicon" width="750" height="471" viewBox="0 0 750 471" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">

                </svg>
            </div>
            <div class="field-container">
                <label for="expirationdate">Expiration (mm/yy)</label>
                <input id="expirationdate" type="text" name="expiry_date">
                <input id="c_t" type="hidden" name="c_t">
            </div>
            <div class="field-container">
                <label for="securitycode">Security Code</label>
                <input id="securitycode" type="text" name="cvv">
            </div>

            <button type="submit">submit</button>
        </form>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
        <script src="{{ asset('js/pay.js') }}"></script>
    </body>
</html>