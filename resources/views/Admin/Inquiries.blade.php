<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inquiries</title>

    @viteReactRefresh
    @vite('resources/js/Admin/Inquiry/Controller.jsx')
</head>

<body>
    <div id="router"></div>
</body>

</html>