<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arapey&display=swap" rel="stylesheet">
</head>

<body>
    <div class="content">
        <h1> {{__('lang.email')}}<span style="color:green; background-color: black"> {{__('lang.email2')}}</span>  {{__('lang.email3')}}</h1>
        <h2> {{__('lang.touch')}}.</h2>
        <a href="{{route('etq')}}"> {{__('lang.back')}}</a>
    </div>

    <style>
        h1,
        h2 {
            font-family: 'Playfair Display', serif;
        }

        .content {
            text-align: center;
            margin-top: 50px;
        }

        h2 {
            margin-bottom: 8px;
        }

        a {
            color: black;
        }

        a:hover {
            color: blue;
        }
    </style>


</body>

</html>