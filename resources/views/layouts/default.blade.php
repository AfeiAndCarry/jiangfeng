<html>
<head>
    <title>@yield('title','Sample')--by jiangfeng</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('layouts._header')
@yield('content')
@include('layouts._footer')
<script src="/js/app.js"></script>
</body>
</html>