<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') - {{ config('settings.paypal_secret_id') }}</title>
    @include('site.partials.styles')
</head>
<body>
@include('site.partials.header')
@yield('content')
@include('site.partials.footer')
@include('site.partials.scripts')
</body>
</html>
