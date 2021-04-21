<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORDER</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arapey&display=swap" rel="stylesheet">
</head>

<body>
    <div class="cont">
        <h1>{{__('lang.order')}} <span>{{__('lang.done')}}</span></h1>
        <h2>{{__('lang.txt')}}</h2>
        <a href="{{route('etq')}}"> {{__('lang.back')}}</a>
    </div>

    <style>
        .cont {
            text-align: center;
            font-family: 'Playfair Display', serif;
            margin-top: 50px;
        }
        .cont h1, .cont h2{
            font-family: 'Playfair Display', serif;
        }
        a{
            color: black;
        }
        a:hover{
            color: blue;
        }
        span{
            text-decoration: underline;
        }
    </style>
</body>

</html>