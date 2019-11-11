<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laracarte - {{ $titre }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- cest le cdn de font awesome pour pouvoir charger des icones -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <style>
        body
        {
            font-family:'Open Sans', sans-serif;
        }

        footer
        {
            /* margin top(2) et bottom(0)  */
            margin:2em 0; 

        }
    </style>
</head>
<body>

    @include('layouts/partials/menu')

        @yield('content')

    @include('layouts/partials/script')

    @include('layouts/partials/footer')
</body>
</html>