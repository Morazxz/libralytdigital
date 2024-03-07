<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title @include('part.link') </head>

<body>
    <div id="app">
        @include('layout.sidebar')
    </div>
    <div id="main">
        @include('sweetalert::alert')
        @yield('konten')

        <footer>
            @include('layout.footer')
        </footer>
    </div>
    </div>
    @include('part.script')
</body>

</html>
