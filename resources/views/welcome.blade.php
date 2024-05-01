<!DOCTYPE html>
<html>
<head>
    <title>Hello World Laravel and React</title>
    <script src="{{ mix('js/app.js') }}" defer></script>
    @viteReactRefresh
    @vite(['resources/js/app.jsx', 'resources/css/app.css'])
</head>
<body>
<h1>Hello World from Blade</h1>
<div id="app"></div>
</body>
</html>