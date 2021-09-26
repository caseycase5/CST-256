<?php ?>

<html lang="en">
<head>
    <title>@yield('title')</title>
</head>
<body>
	<header>
	@include('layouts.header')
	</header>
    
    <div align="center">
        @yield('content')
    </div>

	<footer>
	@include('layouts.footer')
	</footer>
</body>
</html>
