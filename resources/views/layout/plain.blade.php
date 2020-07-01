<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name='robots' content='noindex, follow'>

    <meta name="title" content="Andre Silva Araujo - Personal Website">
    <meta name="description" content="I'm a Web Developer and Designer from British Columbia - Canada. Access the site for more information about me and my work">
    
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>Andre Araujo's - Portfolio Website</title>
    
    @stack('headsScripts')
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
</body>
</html>