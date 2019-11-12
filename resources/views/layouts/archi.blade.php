<!DOCTYPE html>
<html lang="en">
<head>
    <!--  titre_dynamique est une fonction hellper  -->
    <title>Laracarte - {{ titre_dynamique($titre ?? '') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- pour flashy -->
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>    
    <!-- cest le cdn de font awesome pour pouvoir charger des icones -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- google font pour la police Open sans -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

    @include('layouts/partials/menu')

        @yield('content')

    @include('layouts/partials/script')
    
    @include('layouts/partials/footer')

    <script src="//code.jquery.com/jquery.js"></script> 
    @include('flashy::message')
</body>
</html>