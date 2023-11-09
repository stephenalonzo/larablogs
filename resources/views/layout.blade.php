<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larablogs</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('rte_theme_default.css') }}" />
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

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