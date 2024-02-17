<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-image: url(https://aventurasnahistoria.uol.com.br/media/uploads/curiosidades/fotografia.jpg);
            background-position: center;
            object-fit: cover;
            background-repeat: repeat;
            background-size: auto;
        }

        #navbarContainer {
            opacity: 0.8;
            font-weight: 800;
        }
       
        
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body>

    <x-navbar />

    {{ $slot }}

</body>

</html>
