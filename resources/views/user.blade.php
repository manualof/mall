<!DOCTYPE html>
<html>
<head>
    <title>{{ seo('title') }}</title>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name="keywords" content="{{ seo('keywords') }}">
    <meta name="description" content="{{ seo('description') }}">
    <link href="{{ asset('assets/mall/user/css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app"></div>
<script>
    window.foregroundLink = 'http://localhost:8080/';
    window.storeLink = 'http://localhost:8081/';
    window.userLink = 'http://localhost:8082/';
</script>
<script type="text/javascript" src="{{ asset('assets/mall/user/js/manifest.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/mall/user/js/vendor.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/mall/user/js/app.js') }}"></script>
</body>
</html>