<!DOCTYPE html>
<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Document</title>
		</head>

		<body>
			<div id="app">
				<display-profit currency="€" :test_profit=10000 />
			</div>
			@vite(['resources/css/app.css', 'resources/js/app.js'])
		</body>
</html>