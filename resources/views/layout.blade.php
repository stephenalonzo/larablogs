<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larablogs</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('rte_theme_default.css') }}" />
    <script type="text/javascript" src="{{ asset('rte.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/all_plugins.js') }}"></script>
</head>
<body>
    <header class="sticky right-0 top-0 w-full bg-white">
        @include('blog-components.nav')
    </header>
    <main class="w-2/3 mx-auto">
        @yield('content')
    </main>
    <script>
        var editor1 = new RichTextEditor("#editor")
    </script>
</body>
</html>