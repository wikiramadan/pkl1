{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title> --}}

    @include('include.style')
{{-- </head>

<body> --}}
    @include('include.navbar')

    <h1 class="display-3 text-center" style="margin-top: 100px;">Berita</h1>

    @yield('content')

    <!-- Bootstrap JS (Optional) -->
    @include('include.script')
{{-- </body>


</html> --}}
