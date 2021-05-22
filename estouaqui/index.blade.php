<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diamond - Home</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,bold" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('public/css/main.css') }}">
</head>
<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')

</body>
</html>