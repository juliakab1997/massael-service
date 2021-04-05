@include('templates.header')
<body>
	<div id="wrapper">
	
		@include('templates.menu')

		@yield('content')
        
@include('templates.footer')	
