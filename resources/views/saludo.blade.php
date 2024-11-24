<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hola</h1>
    @php
        $user='Juan';
    @endphp
    <h1>{{$user}}</h1>
    @if ($user=='Juan')
        {{'Tu nombre es '.$user}}
    @endif

</body>
</html>
