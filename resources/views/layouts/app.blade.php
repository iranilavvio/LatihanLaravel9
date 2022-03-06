<!doctype html>
<html lang="en">

<head>
    @include('includes.meta')

    @stack('before-styles')
    @include('includes.styles')
    @stack('after-styles')

    <title>Latihan 1</title>
</head>

<body class="bg-light">
    @include('includes.navbar')

    <div class="container py-4">
        @yield('content')
    </div>



    @stack('before-scripts')
    @include('includes.scripts')
    @stack('after-scripts')
</body>

</html>
