<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MorganBhone - @yield('title')</title>
</head>
<body>

    @includeIf('components.header')

    @includeWhen($login, 'components.navlogin')
    @includeUnless($login, 'components.nav')
    @section('top')
    <h1> Top Section </h1>
    @show

    @section('bottom')
    <h2> Bottom Section </h2>
    @show

    @includeIf('components.footer')
</body>
</html>