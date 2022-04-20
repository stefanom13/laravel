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

        }
    </style>
</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/contact">contact</a></li>
            </ul>
        </nav>
    </header>


    <h1>benvenuto laravel</h1>

    <ul>

     @foreach($team as $value)

     <li>{{$value ['name'] }}</li>

     @endforeach
        
    </ul>


</body>

</html>