<!DOCTYPE html>
<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Document</title>
        	<meta name="csrf-token" content="{{ csrf_token() }}">
		</head>

		<body>
			<div id="app">
				<display-profit currency="€" :test_profit='7000' :tnx_id='33' />
			</div>
			
			<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
			@vite(['resources/css/app.css', 'resources/js/app.js'])
		</body>
</html>