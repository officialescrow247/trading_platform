<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/pay.css') }}">
</head>

<body>
  <form action="{{ route('deposit_with_card') }}" method="post" id="subform">
        @csrf
        <input type="text" onkeyup="update(this.value);" /><br />
        <img src="{{ asset('JSCREDITCARD/other.png') }}" style="padding: 5px;" id="img"/><br /><span style="color: red;" id="valid">Card failed</span>
  </form>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>ri
  <script src="{{ asset('js/pay.js') }}"></script>

</body>
</html>