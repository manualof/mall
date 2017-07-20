<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <title>notadd-mall-store</title>
    <link href="{{ asset('assets/mall/store/css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app"></div>
<script>
    window.userLink = 'http://localhost:8080/';
    window.StoreLink = 'http://localhost:8081/';
    window.foregroundLink = 'http://localhost:8082/';
</script>
<script type="text/javascript" src="{{ asset('assets/mall/store/js/manifest.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/mall/store/js/vendor.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/mall/store/js/app.js') }}"></script>
</body>
</html>