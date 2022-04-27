<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>students</h1>
    @foreach ($students as $s)
    {{$s->id}}
    {{$s->name}}
    {{$s->email}}
    {{$s->city}}
    {{$s->marks}}
    <br>
    <hr>
    <br>
        
    @endforeach
   
    {{-- {{$students->id}}
    {{$students->name}}
    {{$students->email}}
    {{$students->city}}
    {{$students->marks}}
    <br>
    <hr>
    <br> --}}
        
    
</body>
</html>