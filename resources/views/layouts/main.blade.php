<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	


		<title>@yield('title')</title>	

		@include('layouts.header')

		<style>
			
		</style>

	</head>
	<body>
        
		@include('layouts.navbar')

        @yield('content')

		@include('layouts.footer')

		@include('layouts.script')
    </body>
</html>
