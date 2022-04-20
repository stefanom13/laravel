<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {

            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            text-align: center;
            margin: 0;
        }
    </style>
</head>

<body>
    <h1>benvenuto laravel</h1>

    <ul>

     @foreach($team as $value)

     <li>{{$value ['name'] }}</li>

     @endforeach
        
    </ul>


</body>

</html>